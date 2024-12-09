<?php

namespace App\Http\Controllers;

use App\Mail\BriefEmail;
use App\Models\Brief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LogoBriefsController extends Controller
{
    public function index() {
        $data['title']="Website Digitals | Brief";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
        $data['description']="Website Digitals";

        return view('frontend.pages.briefs.logo_brief', compact('data'));
    }

    public function store(Request $request) 
    {
        $slogan = e($request->input('slogan'));  // e() is an alias for the htmlspecialchars PHP function
        $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL);
        $industry = e($request->input('industry'));
        $keyword = e($request->input('keyword'));
        $name = e($request->input('name'));
        $phoneNumber = e($request->input('phoneNumber'));
        $company_name = $request->input('cname'); 

        $logoBrief =  new Brief;
        $logoBrief->slogan =  $slogan;
        $logoBrief->cus_email =  $email;
        $logoBrief->industry =  $industry;
        $logoBrief->keyword =  $keyword;
        $logoBrief->cus_name =  $name;
        $logoBrief->cus_phone =  $phoneNumber;
        $logoBrief->company_name = $company_name;
        $logoBrief->save();

        try {
            $user_subject = 'Thank you for submitting your Logo Brief';
            $user_to = $email; 
            $user_email_sent = $this->sendBriefEmail($logoBrief->id, $user_subject, $user_to);

            $admin_subject = 'New Logo Brief Submission';
            // $admin_to = 'info@websitedigitals.com, william.logoperfecto@gmail.com'; 
            $admin_to = 'info@websitedigitals.com'; 
            $admin_email_sent = $this->sendBriefEmail($logoBrief->id, $admin_subject, $admin_to);
            
            if ($user_email_sent && $admin_email_sent) {
                echo json_encode(array(
                    'success' => true,
                    'message' => 'Form submitted successfully!',
                    'id' => $logoBrief->id, // Return ID of the inserted row,
                    'company_name' => $company_name,
                    'data' => [
                        'industry' => $industry,
                        'brief_id' => $logoBrief->id,
                        'email' => $email,
                        'name' => $name,
                    ],
                ));
            } else {
                echo json_encode(array(
                    'success' => false,
                    'message' => 'Error sending form data.'
                ));
            }
        } catch (\Exception $ex) {
            echo json_encode(array(
                'success' => false,
                'message' => $ex->getMessage()
            ));
        }

    }

    public function thankyou() {
        $data['title']="Website Digitals | Thankyou";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
        $data['description']="Website Digitals";

        return view('frontend.pages.briefs.thankyou_logobrief', compact('data'));
    }

   public function sendBriefEmail($brief_id, $subject, $to)
   {
    $logoBrief = Brief::findOrFail($brief_id);
    if(!empty($logoBrief)) {
         if(!empty($logoBrief->cus_name) && !empty($logoBrief->cus_email)){
       $data = array(
          'id' => $logoBrief->id,
          'name' => $logoBrief->cus_name,
          'email' => $logoBrief->cus_email,
          'number' => (!empty($logoBrief->cus_phone) ? $logoBrief->cus_phone : '' ),
          'cname' => (!empty($logoBrief->company_name) ? $logoBrief->company_name : '' ),
          'slogan' => (!empty($logoBrief->slogan) ? $logoBrief->slogan : '' ),
          'keyword' => (!empty($logoBrief->keyword) ? $logoBrief->keyword : '' ),
          'industry' => (!empty($logoBrief->industry) ? $logoBrief->industry : '' ),
          'data' => (!empty($logoBrief->data) ? $logoBrief->data : '' ),
          'time'=>$logoBrief->created_at,
          'brief_id'=>$logoBrief->id,
      );
      
            $sending_brief_email = $this->brief_email($data, $subject, $to);
            
            return $sending_brief_email;
         } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Customer Name OR Email Missing.'
                ]);
           }
    } else {
            return response()->json([
                'status' => false,
                'message' => 'No Data'
            ]);
        }
   }


   function brief_email($data, $subject, $to)
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
    
        if (!empty($data['email'])) {
            $toAddresses = explode(',', $to);
        
            // Send email to multiple recipients
            Mail::to($toAddresses)
                ->send(new BriefEmail($data, $subject));
		    return true; 
		} else {
		    return false;
		}
  }

}
