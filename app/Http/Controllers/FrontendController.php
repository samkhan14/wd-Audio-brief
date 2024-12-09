<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data['title']="Website Digitals | Home";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.home', compact('data'));
    }

    public function wd1()
    {
        $data['title']="Website Digitals | WD1";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd1', compact('data'));
    }

    public function wd2()
    {
        $data['title']="Website Digitals | WD2";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd2', compact('data'));
    }
    
    public function wd3()
    {
        $data['title']="Website Digitals | WD3";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd3', compact('data'));
    }
    
    public function wd4()
    {
        $data['title']="Website Digitals | WD4";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd4', compact('data'));
    }
    
    public function custom_website_design()
    {
        $data['title']="Website Digitals | Custom Website Design";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.custom_website_design', compact('data'));
    }
    
    public function custom_website_design_v2()
    {
        $data['title']="Website Digitals | Custom Website Design v2";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.custom_website_design_v2', compact('data'));
    }
    
    public function shopify_web_design()
    {
        $data['title']="Website Digitals | Shopify Web Design";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.shopify_web_design', compact('data'));
    }
    
    public function wordpress_web_design()
    {
        $data['title']="Website Digitals | WordPress Web Design";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wordpress_web_design', compact('data'));
    }
    
    public function magento_web_design()
    {
        $data['title']="Website Digitals | Magento Web Design";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.magento_web_design', compact('data'));
    }
    
    public function ecommerce_web_design()
    {
        $data['title']="Website Digitals | E-Commerce Web Design";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.ecommerce_web_design', compact('data'));
    }

    public function digital_marketing()
    {
        $data['title']="Website Digitals | Digital Marketing";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.digital_marketing', compact('data'));
    }

    public function logo_design()
    {
        $data['title']="Website Digitals | Logo Design";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.logo_design', compact('data'));
    }
    
    public function content_writing()
    {
        $data['title']="Website Digitals | Content Writing";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.content_writing', compact('data'));
    }

    public function video_animation()
    {
        $data['title']="Website Digitals | Video Animation";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.video_animation', compact('data'));
    }

    public function portfolio()
    {
        $data['title']="Website Digitals | Portfolio";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.portfolio', compact('data'));
    }

    public function discounted_pricing()
    {
        $data['title']="Website Digitals | Discounted Pricing";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.discounted_pricing', compact('data'));
    }


    public function contact()
    {
        $data['title']="Website Digitals | Contact Us";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.contact', compact('data'));
    }

    public function about()
    {
        $data['title']="Website Digitals | About Us";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.about', compact('data'));
    }
    
    public function terms_condition()
    {
        $data['title']="Website Digitals | Terms & Conditions";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.terms_condition', compact('data'));
    }

    public function privacy_policy()
    {
        $data['title']="Website Digitals | Privacy Policy";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.privacy_policy', compact('data'));
    }

    public function thankyou() {
        $data['title']="Website Digitals | Thank You";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
        $data['description']="Website Digitals";

        return view('frontend.pages.briefs.thankyou_webbrief', compact('data'));
    }

    public function wd5()
    {
        $data['title']="Website Digitals | WD5";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd5', compact('data'));
    }
    
    public function wd6()
    {
        $data['title']="Website Digitals | WD6";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd6', compact('data'));
    }
    
     public function wd7()
    {
        $data['title']="Website Digitals | WD7";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd7', compact('data'));
    }
    
     public function wd8()
    {
        $data['title']="Website Digitals | WD8";
        $data['keywords']="webdesign service, website design, webdesign, Website Design Service, web redesign, website redesign, web design, best web design company, 
    Web Design Service, Web Design Service, webdesign service, web redesign, website redesign, web design, best web design company, website design, website builder, website builder, 
    web design company, website creator, website creator, web design company, webdesign company, webdesign company, Website Design Company, website maker, Website Design Company, 
    website maker, Business Web Design, business website designer, Business Website, Business Website Design, web designer, Web Revamp, website designer, business website designer,
    Business Web Design, Web Revamp, webdesigner, Website Revamp, Website Revamp, Business Website, Business Website Design, webdesigner, web designer, website designer";
        
    $data['description']="Website Digitals";

        return view('frontend.pages.wd8', compact('data'));
    }
}
