<?php

namespace App\Http\Controllers;

use App\Classes\SendMail;
use App\Mail\PaymentInvoice;
use App\Models\Categories;
use App\Models\CountryCurrencies;
use App\Models\Invoice;
use App\Models\Payments;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class InvoiceController extends Controller
{

    public static function create($payment_id=1, $email_send="")
    {
        $payment_details = Payments::find($payment_id);
        $now = Carbon::now();
        $invoice_date = $now->year.$now->month.$now->day;
        $last_inv = Invoice::latest('id')->first(); 
         
        if(!empty($last_inv)){ 
            $invoice_no_str = explode("-", $last_inv->invoice_no);
            $last_id = $invoice_no_str[2];
            $invoice_no = "INV-".$invoice_date."-".($last_id+1);
        } else {
            $invoice_no = "INV-".$invoice_date."-".($last_inv+1+1000);
        }
        
        $invoice = new Invoice();
        $invoice->invoice_no = $invoice_no;
        $invoice->customer_id = (!empty($payment_details->customer_id)) ? ($payment_details->customer_id) : (1);
        $invoice->payment_id = $payment_id;
        $invoice->email_sent = $email_send;
        $invoice->status = 1;
        $invoice->save();

        $invoice_id = $invoice->id;
        $invoice_details =  Invoice::find($invoice_id);
    
        if(!empty($invoice_details->email_sent)) {
            (new InvoiceController)->email_sent($invoice_details->customer_id);
        }

    }

    public static function email_sent($user_id) {

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


        $customer = User::find($user_id);
 
        $user_invoice = Invoice::where('customer_id',$user_id)->latest('id')->first()->toArray();
        $customer_info = User::find($user_invoice['customer_id'])->toArray();
        $payment_info = Payments::find($user_invoice['payment_id'])->toArray();
        $category_info = Categories::find($payment_info['category_id'])->toArray();
        $currency_info = CountryCurrencies::find($payment_info['currency'])->toArray();
        $createdAt = Carbon::parse($user_invoice['created_at']);
        $invoice_date = array('invoice_date' => $createdAt->format('d M Y') );
        $invoice_info = array_merge($user_invoice, $customer_info, $payment_info, $category_info, $invoice_date, $currency_info);

        if(!empty($invoice_info)) {
            
                if($customer) {
                    $subject="Payment Invoice | Whimsitoons";
                    Mail::to($invoice_info['email'])->bcc(['billing@whimsitoons.com'])->send(new PaymentInvoice($invoice_info, $subject));

                    if(empty($user_invoice["email_sent"])){
                        $invoice = Invoice::find($user_invoice['id']);
                        $invoice->email_sent = 1;
                        $invoice->save();

                        $path = 'data/'.$payment_info["token"].'.json';
                        $file_content = file_get_contents($path);
                        $content = json_decode($file_content, true);
                        $formData["email_status"] = 1;
                        $formData["email_error"] = "";

                        $email_status = array_merge($content,$formData);
                        $jsonString = json_encode($email_status, JSON_PRETTY_PRINT);
                        file_put_contents($path, $jsonString);

                        Log::info("Updated - Token: ".$payment_info["token"]." has email_status: 1");
                    }
                    
                    return true;
                } else {
                    return response()->json(['status' => false, "message" => "Invoice not sent."]);
                }

        }
        else{
            return response()->json(['status' => false, "message" => "No Data"]);
        }
    }

    
}
