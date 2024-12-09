<?php

namespace App\Http\Controllers;

use App\Mail\ContactLeadEmail;
use App\Models\Contact;
use App\Rules\TwilioPhoneVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function popup_store(Request $request)
    {
        // Sanitize inputs using Laravel's helper functions
        $name = e($request->input('name'));  // e() is an alias for the htmlspecialchars PHP function
        $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL);
        $service = e($request->input('service'));
        $phone = e($request->input('phone'));



        // Use sanitized data for validation
        $validatedData = [
            'name' => $name,
            'email' => $email,
            'service' => $service,
            'phone' => $phone,
        ];

        $rules =  [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];

        $cardCustomMessages = [
            'name.required' => 'This field is required',
            'email.required' => 'This field is required',
            'phone.required' => 'This field is required',
        ];
    
        $validator = Validator::make( $validatedData, $rules, $cardCustomMessages );
        
        if ($validator->validated()) {
            $contact = new Contact();
            $contact->name = $name;
            $contact->email = $email;
            $contact->phone = $phone;
            $contact->service = isset($service) ? $service : '';
        
            $contact->save();
            
            $service = !empty($service) ? "<br>Service: ".$service : '';
            if(!empty($email)) { 

                $content = "New Contact Inquiry"."<br><br>"."Full name: ".$name."<br>Customer Email: : <a rel='nofollow' style='text-decoration:none; color:#000000'>".$email.'</a>'.$service."<br>Phone: ".$phone."<br>";
                $data = array(        
                    "name"=> !empty($name) ? $name : '',
                    "content"=> !empty($content) ? $content : '',
                  );

                  $to = 'info@websitedigitals.com'; 
                  $subject = 'Popup Form';

                 $email_sent = $this->contact_email($data, $subject, $to);

                if ($email_sent) {
                    echo json_encode(array(
                        'success' => true,
                        'message' => 'Form submitted successfully!',
                        'name' => $name,
                    ));
                }     
            } 
    
        } else {
            echo json_encode(array(
                'success' => false,
                'message' => 'Error sending form data.'
            ));
        }
    }
    
    public function solution_store(Request $request)
    {
        // Sanitize inputs using Laravel's helper functions
        $name = e($request->input('name'));  // e() is an alias for the htmlspecialchars PHP function
        $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL);
        $service = e($request->input('service'));
        $phone = e($request->input('phone'));



        // Use sanitized data for validation
        $validatedData = [
            'name' => $name,
            'email' => $email,
            'service' => $service,
            'phone' => $phone,
        ];

        $rules =  [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];

        $cardCustomMessages = [
            'name.required' => 'This field is required',
            'email.required' => 'This field is required',
            'phone.required' => 'This field is required',
        ];
    
        $validator = Validator::make( $validatedData, $rules, $cardCustomMessages );
        
        if ($validator->validated()) {
            $contact = new Contact();
            $contact->name = $name;
            $contact->email = $email;
            $contact->phone = $phone;
            $contact->service = isset($service) ? $service : '';
        
            $contact->save();
            
            $service = !empty($service) ? "<br>Service: ".$service : '';
            if(!empty($email)) { 

                $content = "New Contact Inquiry"."<br><br>"."Full name: ".$name."<br>Customer Email: : <a rel='nofollow' style='text-decoration:none; color:#000000'>".$email.'</a>'.$service."<br>Phone: ".$phone."<br>";
                $data = array(        
                    "name"=> !empty($name) ? $name : '',
                    "content"=> !empty($content) ? $content : '',
                  );

                  $to = 'info@websitedigitals.com'; 
                  $subject = 'Solution Form Submission';

                 $email_sent = $this->contact_email($data, $subject, $to);

                if ($email_sent) {
                    echo json_encode(array(
                        'success' => true,
                        'message' => 'Form submitted successfully!',
                        'name' => $name,
                    ));
                }     
            } 
    
        } else {
            echo json_encode(array(
                'success' => false,
                'message' => 'Error sending form data.'
            ));
        }
    }

    public function signup_store(Request $request)
    {
        // Sanitize inputs using Laravel's helper functions
        $name = e($request->input('name'));  // e() is an alias for the htmlspecialchars PHP function
        $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL);
        $service = e($request->input('service'));
        $phone = e($request->input('phone'));



        // Use sanitized data for validation
        $validatedData = [
            'name' => $name,
            'email' => $email,
            'service' => $service,
            'phone' => $phone,
        ];

        $rules =  [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];

        $cardCustomMessages = [
            'name.required' => 'This field is required',
            'email.required' => 'This field is required',
            'phone.required' => 'This field is required',
        ];
    
        $validator = Validator::make( $validatedData, $rules, $cardCustomMessages );
        
        if ($validator->validated()) {
            $contact = new Contact();
            $contact->name = $name;
            $contact->email = $email;
            $contact->phone = $phone;
            $contact->service = isset($service) ? $service : '';
        
            $contact->save();
            
            $service = !empty($service) ? "<br>Service: ".$service : '';
            if(!empty($email)) { 

                $content = "New Contact Inquiry"."<br><br>"."Full name: ".$name."<br>Customer Email: : <a rel='nofollow' style='text-decoration:none; color:#000000'>".$email.'</a>'.$service."<br>Phone: ".$phone."<br>";
                $data = array(        
                    "name"=> !empty($name) ? $name : '',
                    "content"=> !empty($content) ? $content : '',
                  );

                  $to = 'info@websitedigitals.com'; 
                  $subject = 'Solution Form Submission';

                 $email_sent = $this->contact_email($data, $subject, $to);

                if ($email_sent) {
                    echo json_encode(array(
                        'success' => true,
                        'message' => 'Form submitted successfully!',
                        'name' => $name,
                    ));
                }     
            } 
    
        } else {
            echo json_encode(array(
                'success' => false,
                'message' => 'Error sending form data.'
            ));
        }
    }

    public function contact_store(Request $request)
    {
        // Sanitize inputs using Laravel's helper functions
        $fname = e($request->input('fname'));  // e() is an alias for the htmlspecialchars PHP function
        $lname = e($request->input('lname'));
        $email = filter_var($request->input('businessemail'), FILTER_SANITIZE_EMAIL);
        $service = e($request->input('service'));
        $phone = e($request->input('phone'));
        $company_name = e($request->input('companyname'));
        $message = e($request->input('message'));



        // Use sanitized data for validation
        $validatedData = [
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'service' => $service,
            'phone' => $phone,
            'companyname' => $company_name,
        ];

        $rules =  [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'companyname' => 'required',
        ];

        $cardCustomMessages = [
            'name.required' => 'This field is required',
            'email.required' => 'This field is required',
            'phone.required' => 'This field is required',
            'service.required' => 'This field is required',
            'businessemail.required' => 'This field is required',
            'companyname.required' => 'This field is required',
        ];
    
        $validator = Validator::make( $validatedData, $rules, $cardCustomMessages );
        
        if ($validator->validated()) {
            $contact = new Contact();
            $contact->name = (isset($fname) ? $fname : '') .' '. (isset($lname) ? $lname : '');
            $contact->email = $email;
            $contact->phone = $phone;
            $contact->service = isset($service) ? $service : '';
            $contact->company_name = isset($company_name) ? $company_name : '';
            $contact->message = isset($message) ? $message : '';
        
            $contact->save();
            
            $service = !empty($service) ? "<br>Service: ".$service : '';
            $company_name = !empty($company_name) ? "<br>Company Name: ".$company_name : '';
            $message = !empty($message) ? "<br>Message: ".$message : '';
            if(!empty($email)) { 

                $content = "New Contact Inquiry"."<br><br>"."Full name: ".(isset($fname) ? $fname : '') .' '. (isset($lname) ? $lname : '')."<br>Business Email: : <a rel='nofollow' style='text-decoration:none; color:#000000'>".$email.'</a>'.$service."<br>Phone: ".$phone.$company_name.$message."<br>";
                $data = array(        
                    "name"=> (isset($fname) ? $fname : '') .' '. (isset($lname) ? $lname : ''),
                    "content"=> !empty($content) ? $content : '',
                  );

                  $to = 'info@websitedigitals.com'; 
                  $subject = 'Contact Form';

                 $email_sent = $this->contact_email($data, $subject, $to);

                if ($email_sent) {
                    echo json_encode(array(
                        'success' => true,
                        'message' => 'Form submitted successfully!',
                        'name' => (isset($fname) ? $fname : '') .' '. (isset($lname) ? $lname : ''),
                    ));
                }     
            } 
    
        } else {
            echo json_encode(array(
                'success' => false,
                'message' => 'Error sending form data.'
            ));
        }
    }
    
    function contact_email($data, $subject, $to)
  { 
    $mailConfig =[
        'transport' => 'sendmail',
        'host' => 'websitedigitals.com',
        'port' =>  '465',
        'username' =>  'info@websitedigitals.com',
        'password' =>  'Kr1_(1JvR?VC',
        'encryption' =>   'tls'
    ];
    
    $mailFrom = [
                'address' => 'info@websitedigitals.com',
                'name' => 'Website Digitals'
            ];
    config(['mail.default' => 'sendmail']);
    config(['mail.mailers.smtp' => $mailConfig]);
    config(['mail.from' => $mailFrom]);
    
        if (!empty($to)) {
            $toAddresses = explode(',', $to);
        
            // Send email to multiple recipients
            Mail::to($toAddresses)
                ->send(new ContactLeadEmail($data, $subject));
		    return true; 
		} else {
		    return false;
		}
  }
    
}
