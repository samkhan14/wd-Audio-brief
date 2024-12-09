<?php

namespace App\Http\Controllers;

use App\Models\WebBrief;
use Exception;
use App\Mail\BriefEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Models\AudioBrief;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;



class BriefsController extends Controller
{
    public function index()
    {
        $data['title'] = "Website Digitals | Brief";
        $data['keywords'] = "webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company,
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder,
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company,
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";

        $data['description'] = "Website Digitals";

        return view('frontend.pages.briefs.web_brief', compact('data'));
    }

       public function showBriefs()
    {
        $directory = storage_path('app/briefs');
        $jsonFiles = glob($directory . '/briefs_*.json');
        $allData = [];
    
        foreach ($jsonFiles as $file) {
            $fileContents = file_get_contents($file);
            $fileData = json_decode($fileContents, true);
            if (is_array($fileData)) {
                $allData = array_merge($allData, $fileData);
            }
        }
    
        // Pass sorted data to the view
        return view('dashboard', compact('allData'));
    }


   public function store(Request $request)
{
    // Basic form sanitization
    $industryName = e($request->input('industryName'));
    $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL);
    $industry = e($request->input('industry'));
    $type = e($request->input('type'));
    $name = e($request->input('name'));
    $phoneNumber = e($request->input('phoneNumber'));

    // Get the transcribed text from the session
    $fullBrief = Session::get('full_brief');
    // if (!$fullBrief) {
    //     return response()->json(['error' => 'No brief found in session'], 400);
    // }

    // Generate a custom ID 
    $customId = $this->generateCustomId();

    // Prepare the data structure for saving to file
    $briefData = [
        'brief_id' => $customId,
        'full_brief' => $fullBrief,
        'name' => $name,
        'phone_number' => $phoneNumber,
        'email' => $email,
        'created_at' => now()->toDateTimeString(), 
        'q_a' => []
    ];

    // Handle audio QA data if exists
    if ($request->has('audioQAData')) {
        $audioQAData = json_decode($request->input('audioQAData'), true);

        if (is_array($audioQAData)) {
            if (isset($audioQAData['responses']) && is_array($audioQAData['responses'])) {
                foreach ($audioQAData['responses'] as $response) {
                    $briefData['q_a'][] = [
                        'question' => $response['question'] ?? '',
                        'answer' => $response['answer'] ?? ''
                    ];
                }
            } else {
                foreach ($audioQAData as $response) {
                    $briefData['q_a'][] = [
                        'question' => $response['question'] ?? '',
                        'answer' => $response['answer'] ?? ''
                    ];
                }
            }
        }
    }

    // Define the directory and file naming pattern
    $directory = storage_path('app/briefs');
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    // Find the current file or create a new one if it reaches 30 entries
    $fileIndex = 1;
    while (true) {
        $filePath = "$directory/briefs_$fileIndex.json";
        if (file_exists($filePath)) {
            $currentData = json_decode(file_get_contents($filePath), true) ?? [];

            if (is_array($currentData) && count($currentData) < 30) {
                $currentData[] = $briefData;
                if (file_put_contents($filePath, json_encode($currentData, JSON_PRETTY_PRINT)) === false) {
                    throw new Exception("Error writing to file: $filePath");
                }
                break;
            } else {
                $fileIndex++;
            }
        } else {
            if (file_put_contents($filePath, json_encode([$briefData], JSON_PRETTY_PRINT)) === false) {
                throw new Exception("Error creating file: $filePath");
            }
            break;
        }
    }

    // Generate the response URL
    $senData = [
        'website_type' => $type,
        'industry' => $industry,
        'brief_id' => $customId,
        'email' => $email
    ];

    $array_date = json_encode($senData);
    $senDataJson = urlencode($array_date);
    $url = 'https://websitedigitals.com/website-builder/testing?senData=' . $senDataJson;

    // Return JSON response
    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully!',
        'id' => $customId,
        'company_name' => 'Sleekhive',
        'data' => [
            'website_type' => $type,
            'industry' => $industry,
            'brief_id' => $customId,
            'email' => $email,
            'name' => $name,
        ],
        'url' => $url
    ]);
}


    private function generateCustomId()
    {
        $directory = storage_path('app/briefs');
        $fileIndex = 1;

        while (true) {
            $filePath = "$directory/briefs_$fileIndex.json";
            if (file_exists($filePath)) {
                $currentData = json_decode(file_get_contents($filePath), true) ?? [];

                if (is_array($currentData) && count($currentData) < 30) {
                    $idNumber = count($currentData) + 1;
                    return 'brf' . str_pad($idNumber, 2, '0', STR_PAD_LEFT);
                } else {
                    $fileIndex++;
                }
            } else {
                // No file exists, start with "brf01"
                return 'brf01';
            }
        }
    }

    public function thankyou()
    {
        $data['title'] = "Website Digitals | Thank You";
        $data['keywords'] = "webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company,
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder,
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company,
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";

        $data['description'] = "Website Digitals";

        return view('frontend.pages.briefs.thankyou_webbrief', compact('data'));
    }

    public function sendBriefEmail($brief_id, $subject, $to)
    {
        $webBrief = WebBrief::findOrFail($brief_id);
        if (!empty($webBrief)) {
            if (!empty($webBrief->cus_name) && !empty($webBrief->cus_email)) {
                $data = array(
                    'id' => $webBrief->id,
                    'name' => $webBrief->cus_name,
                    'email' => $webBrief->cus_email,
                    'number' => (!empty($webBrief->cus_phone) ? $webBrief->cus_phone : ''),
                    'cname' => (!empty($webBrief->company_name) ? $webBrief->company_name : ''),
                    'industry' => (!empty($webBrief->industryName) ? $webBrief->industryName : ''),
                    'websiteType' => (!empty($webBrief->type_of_website) ? $webBrief->type_of_website : ''),
                    'service' => (!empty($webBrief->service) ? $webBrief->service : ''),
                    'data' => (!empty($webBrief->data) ? $webBrief->data : ''),
                    'time' => $webBrief->created_at,
                    'brief_id' => $webBrief->id,
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
        $mailConfig = [
            'transport' => 'sendmail',
            'host' => 'websitedigitals.com',
            'port' => '465',
            'username' => 'info@websitedigitals.com',
            'password' => 'Kr1_(1JvR?VC',
            'encryption' => 'tls'
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
