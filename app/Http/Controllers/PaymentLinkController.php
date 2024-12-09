<?php

namespace App\Http\Controllers;

use App\Models\BrandSettings;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\PaymentLink;
use App\Models\CountryCurrencies;
use App\Models\PaymentSaleTypeModel;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PaymentLinkController extends Controller
{
    public function index(Request $request)
    {
        $sale_types = PaymentSaleTypeModel::all();
        $categories = Categories::all();
        $paymentGateways = BrandSettings::where('key_name', 'like', '%payment_gateway_%')->where('status',1)->get();
        $defaultCurrency = BrandSettings::where('key_name', 'like', '%default_currency%')->first();
        $defaultPaymentGateway = BrandSettings::where('key_name', 'like', '%default_payment_gateway%')->first();

        return view('frontend.payments.payment_link', compact('sale_types', 'paymentGateways', 'categories', 'defaultCurrency','defaultPaymentGateway'));
    }

    public function paymentGeneratorStore(Request $request)
    {
        $item_price = $request->input('price');

        $rules =  [
            'sale_type' => 'required',
            'token' => 'unique:payment_links,token',
            'item_name' => 'required',
            'price' => 'required',
            'discount' => [
                'nullable',
                function ($attribute, $value, $fail) use ($item_price) {
                    $discount_value = (strpos($value, '%') !== false) ? str_replace("%", "", $value) : ceil($value);
        
                    if (strpos($value, '%') !== false) {
                        $discount_value = ceil(($discount_value / 100) * $item_price);
                        if ($item_price <= $discount_value) {
                            $fail("The discount must be less than the Item Price.");
                        }
                    } else {
                        if ($item_price <= $discount_value) {
                            $fail("The discount must be less than the Item Price.");
                        }
                    }
                },
            ],
            'item_description' => 'nullable',
            'category_id' => 'required',
            'payment_gateway' => 'required',
        ];

        $cardCustomMessages = [
            'item_name.required' => 'The Item Name is required.',
            'sale_type.required' => 'The Sale Type is required.',
            'price.required' => "The Item Price is required.",
            'category_id.required' => "The Item Category is required.",
            'payment_gateway.required' => "The Payment Gateway is required.",
        ];
    
        $validator = Validator::make( $request->all(), $rules, $cardCustomMessages );

        if ($validator->validated()) {
            $current_date_time = Carbon::now()->toDateTimeString();
            $request["token"] = sha1(uniqid($current_date_time, true));

            $paymentlink = PaymentLink::findOrNew($request->id);
            $isNewPaymentlink = $paymentlink->id == null;
            $user = User::where('user_type','admin')->first();
            $default_currency = BrandSettings::where("key_name", '=', "default_currency")->first();
            $currency = CountryCurrencies::where('aplha_code2',$default_currency->key_value)->first();
        
            $paymentlink->customer_id = $request->customer_id;
            
        if(!empty($request->filled('discount'))) {
            if (strpos($request->discount, '%') !== false) {
                $amount = $request->price;
                $discount_amount = str_replace("%","",$request->discount);
                //$discount = ceil($discount_amount);
                $discount_amount = $amount - ceil(($discount_amount/100)*$amount);
                $discount_type = "percent";
                $discount = str_replace("%","",$request->discount);
            } else {
                $amount = $request->price;
                $discount = ceil($request->discount);
                $discount_amount = $amount - $discount;
                $discount_type = "flat";
                $discount = str_replace("%","",$request->discount);
            }  
        } else {
            $discount_amount = $request->price;
            $discount_type = "";
            $amount = $request->price;
            $discount = null;
        }
        
            // if($request->filled('discount')) {
            //     $discounted_price = $this->discountAccType('flat', $request->discount, $request->price);
            //     $paymentlink->original_price = $request->price;
            // } else {
            //     $discounted_price = $this->discountAccType('flat', 0, $request->price);
            // }

            $paymentlink->item_name = $request->item_name;
            $paymentlink->price = $discount_amount;
            $paymentlink->discount = $discount;
            $paymentlink->discount_type = $discount_type;
            $paymentlink->original_price = $amount;
            $paymentlink->item_description = $request->item_description;
            $paymentlink->sale_type_id = $request->sale_type;
            $paymentlink->currency = $currency->id;
            $paymentlink->comment = $request->comment;
            $paymentlink->category_id = $request->category_id;
            $paymentlink->payment_type = $request->payment_type;
            $paymentlink->payment_gateway = $request->payment_gateway;

            
            if ($isNewPaymentlink) {
                $paymentlink->token = $request->token;
                $paymentlink->valid_till = Carbon::now()->addHours(48)->timestamp;
                $paymentlink->created_by = $user->id;
            } else {
                $paymentlink->updated_by = $user->id;
            }
            if ($paymentlink->save()) {                
                // Call the touch() method to update the updated_at field
                $paymentlink->touch();
                $notifyKey = $isNewPaymentlink ? 'added' : 'updated';
                $notify = array(
                    "performed_by" => $user->id,
                    "title" => $isNewPaymentlink ? "Added New Payment Link" : "Payment Link Updated Successfully",
                    "desc" => array(
                        $notifyKey.'_title' => $request->input('item_name'),
                        $notifyKey.'_description' => $request->item_description,
                    )
                );
                
            } 
            $payment_link_id = $paymentlink->id;
            $paymentlink = PaymentLink::find($payment_link_id);
            $gateway_name = explode("_", $paymentlink->payment_gateway);
            $gateway_type = ($gateway_name[3]=="three") ? $gateway_name[2].'_'.$gateway_name[3].'_'.$gateway_name[4]:$gateway_name[2];
            $link = route('payment.'.$gateway_type).'?token='.$paymentlink->token;

            return redirect($link);
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function orderNow(Request $request)
    {
        $current_date_time = Carbon::now()->toDateTimeString();
        $request["token"] = sha1(uniqid($current_date_time, true));
        $paymentlink = PaymentLink::findOrNew($request->id);
        $isNewPaymentlink = $paymentlink->id == null;
        $user = User::where('user_type','admin')->first();
        $currency = CountryCurrencies::where('currency_code',$request['currency_code'])->first();
        $sale_type = PaymentSaleTypeModel::where('name',"Fresh Sales")->first();
        $category = Categories::where('name',$request['category'])->first();
        $defaultPaymentGateway = BrandSettings::where('key_name', 'like', '%default_payment_gateway%')->first();
        
        $paymentlink->customer_id = $request->customer_id;

        if(!empty($request->filled('discount'))) {
            if (strpos($request['discount'], '%') !== false) {
                $amount = $request['price'];
                $discount_amount = str_replace("%","",$request['discount']);
                //$discount = ceil($discount_amount);
                $discount_amount = $amount - ceil(($discount_amount/100)*$amount);
                $discount_type = "percent";
                $discount = str_replace("%","",$request['discount']);
            } else {
                $amount = $request['price'];
                $discount = ceil($request['discount']);
                $discount_amount = $amount - $discount;
                $discount_type = "flat";
                $discount = str_replace("%","",$request['discount']);
            }  
        } else {
            $discount_amount = $request['price'];
            $discount_type = "";
            $amount = $request['price'];
            $discount = null;
        }


        $paymentlink->item_name = $request['item_name'];
        $paymentlink->price = $discount_amount;
        $paymentlink->discount = $discount;
        $paymentlink->discount_type = $discount_type;
        $paymentlink->original_price = $amount;
        $paymentlink->sale_type_id = $sale_type->id;
        $paymentlink->currency = $currency->id;
        $paymentlink->category_id = $category->id;
        $paymentlink->payment_type = "straight";
        $paymentlink->payment_gateway = $defaultPaymentGateway->key_value;
        
        if ($isNewPaymentlink) {
            $paymentlink->token = $request->token;
            $paymentlink->valid_till = Carbon::now()->addHours(48)->timestamp;
            $paymentlink->created_by = $user->id;
        } else {
            $paymentlink->updated_by = $user->id;
        }
        if ($paymentlink->save()) {                
            $payment_link_id = $paymentlink->id;
            $paymentlink = PaymentLink::find($payment_link_id);
            $gateway_name = explode("_", $paymentlink->payment_gateway);
            $gateway_type = ($gateway_name[3]=="three") ? $gateway_name[2].'_'.$gateway_name[3].'_'.$gateway_name[4]:$gateway_name[2];
            $link = route('payment.'.$gateway_type).'?token='.$paymentlink->token;
        
            return response()->json(['success' => true, 'link' => $link], 200);
        }
 
    }

    protected function discountAccType($discount_type, $discount, $itemprice)
    {
        $discounted_price = 0;
        $discount = floatval($discount);
        $itemprice = floatval($itemprice);

        if ($discount_type == "flat") {
            $discounted_price = $itemprice - $discount;
        } else if ($discount_type == "percent") {
            $discounted_price = $itemprice - ceil(($itemprice * ($discount / 100)));
        }

        return $discounted_price;
    }

}