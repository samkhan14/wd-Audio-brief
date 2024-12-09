<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Controllers\InvoiceController;
use App\Mail\ReceiptMail;
use App\Models\BrandSettings;
use App\Models\Categories;
use App\Models\CountryCurrencies;
use App\Models\Coupon;
use App\Models\Invoice;
use App\Models\PaymentLink;
use App\Models\Payments;
use App\Models\Product;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index(Request $request) {
        if($request->has('token')) {
            $item_detail = PaymentLink::where("token", "=", $request->token);
            
            if($item_detail->exists()) {
                $item_detail = $item_detail->first();

                if($item_detail->valid_till < Carbon::now()->toDateTimeString()) {
                    //$gateway_setting = BrandSettings::where("key_name", "=", $item_detail->payment_gateway)->first();
                    
                    $gateway_name = str_replace("payment_gateway_", "", $item_detail->payment_gateway);
                    $gateway_name = explode("_", $gateway_name);

                    if($gateway_name[0] == "stripe") {
                        return redirect()->route('payment.stripe', ["token" => $request->token]);
                    } else if($gateway_name[0] == "braintree") {

                    }
                } else {
                    $data = array(
                        "heading" => "Sorry! Token is Expired.",
                        "message" => "Kindly chat with our sales team in this regard.",
                        "title" => "Sorry! Token is Expired",
                    );

                    $this->failed($data);

                    //return response()->json(["message"=>"Token is exired."]);
                }
            } else {
                $data = array(
                    "heading" => "Sorry! Token isn't Valid.",
                    "message" => "Kindly chat with our sales team.",
                    "title" => "Sorry! Token isn't Valid",
                );
                $this->failed($data);
                
                return response()->json(["message"=>"Token is not valid."]);
            }        
        } else {
            $data = array(
                "heading" => "Sorry! Token Not Exist.",
                "message" => "Kindly chat with our sales team.",
                "title" => "Sorry! Token Not Exist.",
            );
            $this->failed($data);
        }
    }

    public function success(Request $request) {
        if(Session()->get('success_data')) {
            $payment = Payments::select('id','token')->where('token', Session()->get('success_data')["token"])->first();
            return view('frontend.payments.newTransaction-success', ["data"=> Session()->get('success_data'), "payment" => $payment]);
        } else {
            return redirect()->route('payment.expired');
        }
    }

    public function failed(Request $request, $data="") {
        if(Session()->get('failed_data')) {
            /* $path = 'data/'.Session()->get('failed_data')["token"].'.json';
            $retriveFile = file_get_contents($path);
            $json=str_replace('},

            ]',"}

            ]",$retriveFile);
            $customerInfo = json_decode($json); */

            return view('frontend.payments.newTransaction-failed', ["data"=> Session()->get('failed_data')]);
        } else {
            return redirect()->route('payment.expired');
        }
    }

    public function expired(Request $request) {
        if(!empty(Session()->get('failed_data')["token"])){
            $payment = PaymentLink::where('token', Session()->get('failed_data')["token"])->with('countrycurrencies');

            if($payment->exists()) {
                $payment = $payment->first()->toArray();
               
                }
                else{
                    $payment ="";
                }  
        }else{
            $payment ="";
        }
     
        return view('frontend.payments.token-expired', [
            'current_time' => Carbon::now()->timestamp,
            'failed_data'=> Session()->get('failed_data'),
            "data" => $payment
        ]);
    }

    public function tokenData(Request $request) {
        $token = $request->token;
        $item_detail = PaymentLink::select('id','token','item_name','price','discount_type','discount','original_price','item_description','currency','payment_gateway','category_id', 'sale_type_id')
                        ->where("token", "=", $token)
                        ->with(
                            [
                                'countrycurrencies' => function ($query) {
                                    $query->select('id', 'currency_code', 'currency_name', 'currency_symbol');
                                },'categories' => function ($query) {
                                    $query->select('id', 'name');
                                },'PaymentSaleType' => function ($query) {
                                    $query->select('id', 'name');
                                }
                            ],
                        );
        $item_detail = $item_detail->first();
        $gateway_setting = BrandSettings::where("key_name", "=", $item_detail->payment_gateway)->first();
        $payment_gateway = json_decode($gateway_setting->key_value);
        
        $public_key = $payment_gateway->public_key;
        
        Session()->put('payment_gateway', $payment_gateway);

        return response()->json([
            "status" => true,
            "data" => array(
                "stripe" => array("public_key"=> $public_key),
                "service" => $item_detail,
            )
        ]);

    }

    public function storePaymentApi(Request $request)
    {
        $formData = Arr::pluck($request->all(), 'value', 'name');
        $formData = array_map(function($v) {
            return trim(strip_tags($v));
        }, $formData);

        try {
            if (!empty($formData)) {
                $formData["payment_status"] = 0;
                $formData["email_status"] = 0;
                $formData["email_error"] = "";
                $formData["db_status"] = 0;
                $formData["db_error"] = "";
                $maskedCard = $this->formatAndMaskCard($formData["cardNo"]);
                $formData["cardNo"] = $maskedCard;
                $path = 'data/'.$formData["ptoken"].'.json';
                $jsonString = json_encode($formData, JSON_PRETTY_PRINT);
                $fp = fopen($path, 'w');
                fwrite($fp, $jsonString);
                fclose($fp);
                $retriveFile = file_get_contents($path);

                Log::info('Making new directory');
                Log::info(json_encode($formData));

                $customer = User::where("email", "=", $formData["clientemail"]);
                $paymentLink = PaymentLink::where("token", "=", $formData["ptoken"])->first();
                $paymentLink = $paymentLink->toArray();

                if($customer->exists()) {
                    $customerData = $customer->first();
                    $customer_id = $customerData->id;
                } else {
                    $customer = new User();
                    $customer->first_name = $formData["firstname"];
                    $customer->last_name = $formData["lastname"];
                    $customer->email = $formData["clientemail"];
                    $customer->phone_number = $formData["phonenum"];
                    $customer->company_name = $formData["companyname"];
                    $customer->address = $formData["address"];
                    $customer->city = $formData["city"];
                    $customer->state = $formData["statename"];
                    $customer->zipcode = $formData["zipcode"];
                    $customer->country = $formData["country"];
                    $customer->user_type = "Customer";
                    $customer->created_by = $paymentLink["created_by"];
                    $customer->created_at = Carbon::now();
                    $default_customer_password = "12345678";
                    $customer->password = Hash::make($default_customer_password);
                    $customer->save();
                    $customer_id = $customer->id;
                    
                }

                $payments = new Payments();
                $payments->customer_id = $customer_id;
                
                $payments->Item_name = $formData['itemname'];
                $payments->price = $formData['itemprice'];
                $payments->discount = (!empty($formData['discount']) ? $formData['discount'] : 0);
                $payments->original_price = $paymentLink['original_price'];
                $payments->currency = $paymentLink['currency'];
                $payments->category_id = $paymentLink['category_id'];
                $payments->sale_type_id = $paymentLink['sale_type_id'];
                $payments->payment_gateway = $paymentLink['payment_gateway'];
                $payments->payment_type = $paymentLink['payment_type'];
                $payments->token = $formData['ptoken'];
                $payments->item_description = $paymentLink['item_description'];
                    
                if(!empty($formData["payment_error"]) || !empty($formData["payment_message"])) {
                    $error_message = array(
                        "error" => $formData["payment_error"],
                        "message" => $formData["payment_message"],
                    );
                    $payments->comment = $formData["payment_message"];
                    $payments->message = json_encode($error_message);
                    $payments->status = 2;
                } else {
                    $payments->comment = "";
                    $payments->message = "";
                    $payments->status = 1;
                }
            
                $payments->payment_on = Carbon::now()->format('Y-m-d');
                $payments->created_by = (!empty($paymentLink['created_by']) ? $paymentLink['created_by'] : NULL);
                $payments->save();
                
                if(!empty($formData["payment_error"]) || !empty($formData["payment_message"])) { 
                    $sessional_time = Carbon::now()->addMinutes(10)->timestamp;
                    
                    $failed_data = array(
                        "token" => $formData["ptoken"],
                        'current_time' => Carbon::now()->timestamp,
                        'session' => $sessional_time,
                        'currency' => $formData['currency'],
                        'itemprice' => $formData['itemprice'],
                        'itemname' => $formData['itemname'],
                        'title' => 'Payment Failed | '.$formData['currency'].$formData['itemname'].' | Message:'.$formData["payment_message"],
                        'heading' => 'Payment Failed' ,
                        'message' => $formData["payment_message"]
                    );

                    Session::flash("failed_data",$failed_data);
                    return response()->json(['failed' => true, 'route' => route('payment.failed', ["token"=> $formData["ptoken"]])], 200);
                } else {
                    $payment_id = $payments->id;

                    InvoiceController::create($payment_id);
                    $invoice_data = Invoice::where('payment_id',$payment_id)->first();
                    
                    if(!empty($formData['coupon_id'])){
                        $coupon = Coupon::find($formData['coupon_id']);
                        $coupon->quantity = $coupon->quantity - 1;
                        $coupon->utilized = $coupon->utilized + 1;
                        $coupon->save();
                    }
    
                    if($this->paymentLinkStatus($paymentLink['id'], 2 )) {
                        $path = 'data/'.$formData["ptoken"].'.json';
                        $file_content = file_get_contents($path);
                        $content = json_decode($file_content, true);
                        $formData["payment_status"] = 1;

                        $payment_status = array_merge($content,$formData);
                        $jsonString = json_encode($payment_status, JSON_PRETTY_PRINT);
                        file_put_contents($path, $jsonString);
                        Log::info("Updated - Token: ".$formData["ptoken"]." has payment_status: 1");

                        $success_data = array(
                            "token" => $formData["ptoken"],
                            "original_price" => $paymentLink['original_price'],
                            "itemname" => $formData['itemname'],
                            "itemprice" => $formData['itemprice'],
                            "currency" => $formData['currency'],
                            "invoice_id" => $invoice_data->invoice_no,
                            "payment_id" => $payment_id,
                            "discount" => (!empty($formData['discount']) ? $formData['discount'] : 0),
                            "coupon_id" => $formData['coupon_id'],
                            "category_id" => $paymentLink['category_id'],
                            "sale_type_id" => $paymentLink['sale_type_id'],
                        );
                    
                        // InvoiceController::email_sent($customer_id);
                        
                        Session::flash("success_data",$success_data);
                        return response()->json(['success' => true, 'route' => route('payment.success', ["token"=> $formData["ptoken"]])], 200);
                    }
                }

            } else {
                $failed_data = array(
                    "token" => $formData["ptoken"],
                    'current_time' => Carbon::now()->timestamp,
                    'currency' => $formData['currency'],
                    'itemprice' => $formData['itemprice'],
                    'itemname' => $formData['itemname'],
                    'title' => 'Payment Failed | '.$formData['currency'].$formData['itemname'].' | Message:'.$formData["payment_message"],
                    'heading' => 'Payment Failed' ,
                    'message' => $formData["payment_message"]
                );

                Session::flash("failed_data",$failed_data);

                return response()->json(['failed' => true, 'route' => route('payment.failed', ["token"=> $formData["ptoken"]])], 200);
            }
        } catch(Exception $e) {
            report($e);
            Log::error("Token: ".$formData["ptoken"]." has an exception on Storing Payment. Message: ".$e->getMessage());

            $failed_data = array(
                "token" => $formData["ptoken"],
                'current_time' => Carbon::now()->timestamp,
                'currency' => $formData['currency'],
                'itemprice' => $formData['itemprice'],
                'itemname' => $formData['itemname'],
                'title' => 'Payment Failed | '.$formData['currency'].$formData['itemname'].' | Message: '.$e->getMessage(),
                'heading' => 'Payment Failed' ,
                'message' => $e->getMessage()
            );

            Session::flash("failed_data",$failed_data);

            return response()->json(['failed' => true, 'route' => route('payment.failed', ["token"=> $formData["ptoken"]])], 200);
            //return redirect()->back()->with(["error"=> $e->getCode(), "message"=> $e->getMessage()]);
        }
    }

    /*public function generatelink($productId)
    {
        $product = Product::find($productId);
        $current_date_time = Carbon::now()->toDateTimeString();
        $token = sha1(uniqid($current_date_time, true));
        $default_payment_gateway = BrandSettings::where("key_name", '=', "default_payment_gateway")->first();
        $default_currency = BrandSettings::where("key_name", '=', "default_currency")->first();
        $currency = CountryCurrencies::where('aplha_code2',$default_currency->key_value)->first();
        $user = User::role('Developer')->latest('id')->first();

        $paymentlink = new PaymentLink();
        $paymentlink->valid_till = Carbon::now()->addHours(48)->timestamp;
        $paymentlink->item_name = $product->name;
        $paymentlink->price = $product->price;
        $paymentlink->original_price = $product->original_price;
        $paymentlink->item_description = $product->description;
        $paymentlink->sale_type_id = 1;
        $paymentlink->currency = $currency->id;
        $paymentlink->category_id = $product->categories_id;
        $paymentlink->payment_type = "straight";
        $paymentlink->token = $token;
        $paymentlink->payment_gateway = $default_payment_gateway->key_value;
        $paymentlink->created_by = $user->id;
        $paymentlink->save();
        $gateway_name = explode("_", $default_payment_gateway->key_value);
        $gateway_type = $gateway_name[2];
        
        $link = route('payment.'.$gateway_type).'?token='.$token;
        return redirect($link);
    }*/

    protected function paymentLinkStatus($paymentLink_id, $status) {
        $paymentLink = PaymentLink::find($paymentLink_id);
        $paymentLink->status = $status;

        if($paymentLink->save()) {
            return true;
        } else {
            return false;
        }
    }

    protected function redeemCoupon(Request $request)
    {
        $data = array();
		$json = array();
			
        if(!empty($request->coupon)) {
            $retrieve = Coupon::where('coupon_name',$request->coupon)->first();
            if(!empty($retrieve) && $retrieve!=NULL) {
                date_default_timezone_set('America/New_York');
                $now = date('Y-m-d');
                
                if(($retrieve->date_from < $now) && ($retrieve->date_to > $now)) {
                    if($retrieve->quantity > 0) {
                        $json[] = array("coupon_id"=> $retrieve->id, "coupon"=> $retrieve->coupon_name, "discount"=> $retrieve->discount, "discount_type"=> $retrieve->discount_type, "message"=>"Coupon Applied Successfully.", "message_type"=>"success");
                        $data['data'] = $json;
                    } else {
                        $json[] = array("coupon_id"=> $retrieve->id, "coupon"=> $retrieve->coupon_name, "discount"=> $retrieve->discount, "discount_type"=> $retrieve->discount_type, "message"=>"Expired coupon", "message_type"=>"error");
                        $data['data'] = $json;
                    }
                } else {
                    $json[] = array("message" => "Coupon expired.", "message_type" => "error");
                    $data['data'] = $json;
                }
                
                echo json_encode($data);        
            } else {
                $json[] = array("message"=>"Enter a valid coupon.", "message_type"=>"error");
                $data['data'] = $json;
                echo json_encode($data);
            }
        } else {
            $json[] = array("message"=>"Enter a valid coupon.", "message_type"=>"error");
            $data['data'] = $json;
            echo json_encode($data);
        }
    }

    public function sendEmailToClient(Request $request){
        $invoice_data = Invoice::where('invoice_no',$request['invoice_id'])->first();
        $customer_id = $invoice_data->customer_id;
        $this->sendreceipt($customer_id);
        return InvoiceController::email_sent($customer_id);
    }

    public function previousData(Request $request){
        
        $path = 'data/'.$request->token.'.json';
        $file_content = file_get_contents($path);
        $oldInput = json_decode($file_content, true);
       
        $item_detail = PaymentLink::where("token", "=", $request->token)->first();
        $country_currency = CountryCurrencies::find($item_detail->currency);
        $finishTime = Carbon::now()->timestamp($item_detail->valid_till);
        $currentTime =  Carbon::now();

        $gateway_setting = BrandSettings::where("key_name", "=", $item_detail->payment_gateway)->first();
        $payment_gateway = json_decode($gateway_setting->key_value);

        Session()->put('payment_gateway', $payment_gateway);


        $countries = CountryCurrencies::orderBy('country_name', 'ASC')->get();

        $gateway_name = explode("_", $item_detail->payment_gateway);
        if($gateway_name[3]=="three"){
            return view('frontend.payments.three_step', compact('item_detail', 'countries', 'country_currency', 'payment_gateway', 'oldInput'));  

        }else{
            return view('frontend.payments.pay-page', compact('item_detail', 'countries', 'country_currency', 'payment_gateway', 'oldInput'));  

        }
                 
    }

    public function downloadInvoice(Request $request)
    {
        $payment_info = Payments::where('id',$request->id)->first()->toArray();


        $user_invoice = Invoice::where('payment_id',$request->id)->latest('id')->first()->toArray();
        $customer_info = User::find($payment_info['customer_id'])->toArray();
        $category_info = Categories::find($payment_info['category_id'])->toArray();
        $currency_info = CountryCurrencies::find($payment_info['currency'])->toArray();
        $createdAt = Carbon::parse($user_invoice['created_at']);
        $invoice_date = array('invoice_date' => $createdAt->format('d M Y') );
        $invoice_info = array_merge($user_invoice, $customer_info, $payment_info, $category_info, $invoice_date, $currency_info);
        
        try {
            if($request->has('download')){
                $parseHTML = Blade::render('frontend.payments.downloadInvoice', $invoice_info);
                $downloadPdf = Pdf::loadHtml($parseHTML);
                return $downloadPdf->download($user_invoice['invoice_no'].".pdf"); 
            }

        } catch(Exception $e) {
          return  $e->getMessage();
        }
        
    }

    protected function sendreceipt($customer_id)
	{
        $customer = User::find($customer_id);
        $user_invoice = Invoice::where('customer_id',$customer_id)->latest('id')->first()->toArray();
        $customer_info = User::find($user_invoice['customer_id'])->toArray();
        $payment_info = Payments::find($user_invoice['payment_id'])->toArray();
        $brandSettings = Arr::pluck(BrandSettings::get(), 'key_value', 'key_name');
        $currency_info = CountryCurrencies::find($payment_info['currency'])->toArray();

        $gateway_name = str_replace("payment_gateway_", "", $payment_info['payment_gateway']);
        $gateway_name = str_replace("_", " ", $gateway_name);
        $gateway_name = Str::upper($gateway_name);

        $fullname = $customer_info["first_name"] . " " . $customer_info["last_name"]; // put here client's firstname and last name
       
        $curreny_symbol = (isset($currency_info["currency_symbol"]) ? $currency_info["currency_symbol"]." " : "");
        $content = "New payment was successfully received through Stripe.com"."<br>"."Customer Email: ".$customer_info['email']."<br>Payment total is: $".$payment_info['price']."."."00<br><br>Billing information:<br>Item name: ".$payment_info['item_name']."<br>Full name: ".$customer_info["first_name"]." ".$customer_info["last_name"]."<br>Email: ".$customer_info['email']."<br>Phone: ".$customer_info['phone_number']."<br>Company: ".$customer_info['company_name']."<br>State: ".$customer_info['state']."<br>City : ".$customer_info['city']."<br>Address: ".$customer_info['address']."<br>Post code: ".$customer_info['zipcode']."<br>Country: ".$customer_info['country']."<br>Payment Gateway: ".$gateway_name."<br>Payment Type: This is a custom payment.";
        $data = array(        
            "curreny_symbol"=> !empty($curreny_symbol) ? $curreny_symbol : '',
            "price"=> !empty($payment_info['price']) ? $payment_info['price'] : '',
            "content"=> !empty($content) ? $content : '',
          );

          $mailConfig =[
            'transport' => 'sendmail',
            'host' => 'whimsitoons.com',
            'port' =>  '465',
            'username' =>  'billing@whimsitoons.com',
            'password' =>  'ljp~v7H{lo,v',
            'encryption' =>   'tls'
        ];
        
        $mailFrom = [
                    'address' => 'billing@whimsitoons.com',
                    'name' => 'Whimsitoons'
                ];
        config(['mail.default' => 'sendmail']);
        config(['mail.mailers.smtp' => $mailConfig]);
        config(['mail.from' => $mailFrom]);
       
      

       if(!empty($customer_info['email'])){
           Mail::to('billing@whimsitoons.com')->send(new ReceiptMail($data));
           return true;
       } else {
        return response()->json(['status' => false, "message" => "Invoice not sent."]);
       } 
    }

    protected function formatAndMaskCard($cardNumber) {
        // Break into segments
        $segments = explode(' ', $cardNumber);
        
        // Number of digits that should remain visible
        $visibleDigits = 4;

        // Go through the segments from the end
        for ($i = count($segments) - 1; $i >= 0; $i--) {
            $segment = $segments[$i];
            for ($j = strlen($segment) - 1; $j >= 0; $j--) {
                if ($visibleDigits > 0) {
                    // Decrement our counter
                    $visibleDigits--;
                } else {
                    $segment[$j] = '*';
                }
            }
            // Replace original segment with the masked one
            $segments[$i] = $segment;
        }

        return implode(' ', $segments);
    }
}
