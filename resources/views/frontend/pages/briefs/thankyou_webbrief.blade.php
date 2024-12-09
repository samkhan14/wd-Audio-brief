@extends('frontend.layouts.steps.master')
@push('customStyles')

<style>
  body{
      background: url(../frontend/assets/images/steps/thank-you/Final_Step_bg.jpg) no-repeat center center;
      background-size: cover;
  }
  @media (max-width: 1200px){
      .section-heading {
          top: 20%;
      }
      .mt-6rem {
          margin-top: 7rem;
      }
  }
  @media (max-width: 650px){
      .section-heading {
          transform: none;
          margin-top: 3rem;
      }
      .section-heading > h2 {
          font-size: 1.5rem;
      }
      .mt-6rem {
          margin-top: 3rem;
      }
      .step-header {
          background: #000;
      }
      .single-step-card .single-step-cardDetail ul {
          height: 16vh;
      }
  }
      
      
      .mt-6rem {
          margin-top: 1rem;
      }
  .section-heading {
          position: static !important;
          transform: none;
          
      }
      
      
      
      
      .logo > img{
          filter: brightness(0) invert(1);
      }
      .step-header .menu > li > a > i{
          color: #fff;
      }
      .section-heading > h2{
          line-height: 1.25;
          font-size: 2rem;
      }
      .single-step-star{
          color: var(--primary);
          margin-bottom: -13px;
          margin-top: -14px;
      }
      .single-step-cardDetail{
          color: #fff;
      }
      .single-step-cardDetail > h3{
          font-size: 1.15rem;
      }
      .single-step-cardDetail > h3 > span{
          font-size: .9rem;
          font-weight: 400;
      }
      .single-step-card.verticel-card .single-step-cardDetail > p{
          font-size: 0.8rem;
          max-width: none !important;
      }
      .single-step-cardDetail ul{
          text-align: left;
          padding-left: 4rem;
          font-size: 0.75rem;
          line-height: 1.5;
          margin-bottom: 1rem;
          font-weight: 600;
          height: 20vh;
          overflow-y: scroll;
      }
      .single-step-cardDetail ul > li{
          position: relative;
      }
      .single-step-cardDetail ul > li::before{
          content: "";
          position: absolute;
          left: -9%;
          top: 3px;
          width: .9rem;
          height: 100%;
          background: url(../frontend/assets/images/shapes/check-mark.png) no-repeat center center;
          background-size: contain;
          background-position-y: 15%;
      }
      .single-step-cardDetail .link-area{
          display: flex;
          gap: 0 15px;
          justify-content: center;
      }
      .single-step-cardDetail .link-area a{
          padding: .55rem 1.5rem;
          min-height: auto;
          font-size: 0.9rem;
      }
      .single-step-card.verticel-card > .img-area > img{
          height: auto;
          width: 100%;
          max-width: 5rem;
      }
      
      .single-step-card{
          border-radius: 1rem;
          padding: 1rem 1rem;
          background: #272c37;
          border: 2px solid #272c37;
      }
      
      .steps-section{
          padding-top: 78px;
      }
</style>
@endpush

@section('container')

<section class="steps-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="section-heading">
                    <h2><span class="d-block" id="briefthankyou">Thank You, <strong style='background: #272c37; color: #fff; border-radius: 6px; padding: 6px 15px; font-weight: 600;'>{{ request()->get('customer_name') ?? request()->get('company_name') ?? 'Guest' }} </strong></span> How Would You Like To Proceed?</h2>
              </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12">
                <div class="max-900">
                <div class="">
                    <div class="row rowGap justify-content-center">
                        <div class="col-lg-6 col-sm-12">
                            <div class="single-step-card verticel-card text-center">
                              <div class="img-area">
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/thank-you/icon-05.svg"
                                  alt=""
                                />
                              </div>
                              <div class="single-step-star">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star" style="color: #fff;"></i>
                                  <i class="fa-solid fa-star" style="color: #fff;"></i>
                              </div>
                              <div class="single-step-cardDetail">
                                <h3 class="text-center">Build Your Own Website<br><span>For Startup/Small Businesses</span></h3>
                                <p class="text-center">Our website builder offers powerful features and effortless design for your business.</p>
                                <ul>
                                    <li>Single Page Design</li>
                                    <li>Drag-and-Drop Editor</li>
                                    <li>Responsive Design Templates</li>
                                    <li>Customizable Themes</li>
                                    <li>Social Media Integration</li>
                                    <li>High Resolution Media Support</li>
                                    <li>Mobile & Desktop Optimization</li>
                                    <li>Multi-Browser Compatibility</li>
                                    <li>Satisfaction Guarantee</li>
                                </ul>
                                <p class="text-center bottomparatext">Start Building With No Cost</p>
                                <div class="link-area">
                                  <a href="{{ request()->get('url', '#') }}" class="primary" id="build-website">Explore Our Website Builder</a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="single-step-card verticel-card text-center">
                              <div class="img-area">
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/thank-you/icon-06.svg"
                                  alt=""
                                />
                              </div>
                              <div class="single-step-star">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                              </div>
                              <div class="single-step-cardDetail">
                                <h3 class="text-center">Custom Website Solution<br><span>For Professional Businesses</span></h3>
                                <p class="text-center">Get a custom website specific to your needs, enhancing your online presence affordably.</p>
                                <ul>
                                    <li>Multiple Custom Page Designs</li>
                                    <li>Comprehensive UX/UI</li>
                                    <li>Custom CMS Integration</li>
                                    <li>High Resolution Graphics</li>
                                    <li>Lead Inquiry Form</li>
                                    <li>Mobile & SEO Optimized</li>
                                    <li>Multi-Browser Compatibility</li>
                                    <li>Social Media Integration</li>
                                    <li>Analytics & Performance</li>
                                    <li>100% Website Ownership</li>
                                    <li>High-Speed Hosting</li>
                                    <li>Advanced Security Features</li>
                                    <li>Regular Maintenance</li>
                                    <li>24/7 Customer Support</li>
                                    <li>Satisfaction Guarantee</li>
                                </ul>
                                <p class="text-center bottomparatext">Starting From $499</p>
                                <div class="link-area">
                                  <a href="{{ route('front.portfolio') }}" class="primary" id="build-website">Visit Portfolio</a>
                                  <a href="{{ route('front.discounted.pricing') }}" class="primary" id="build-website">See Pricing</a>
                                </div>
                              </div>
                            </div>
                        </div>
                        
                        
                        
                      <!--<div class="col-md-5">
                        <div class="single-step-card verticel-card">
                          <div class="img-area">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/thank-you/brief2.webp"
                              alt=""
                            />
                          </div>
                          <div class="single-step-cardDetail">
                            <h3 class="text-start">Build Your Own Website</h3>
                            <p class="text-start">
                              Our best website builder offers intuitive design, powerful features, and unbeatable ease-of-use for your business.
                            </p>
                            <div class="link-area">
                              <a href="#" class="primary" id="build-website">
                                Explore Our Builder
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-5">
                        <div class="single-step-card verticel-card">
                          <div class="img-area">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/thank-you/brief1.webp"
                              alt=""
                            />
                          </div>
                          <div class="single-step-cardDetail">
                            <h3 class="text-start">Custom Website Solution</h3>
                            <p class="text-start">
                                Get a custom website designed to your specific needs, enhancing your online presence at an affordable pricing.
                            </p>
                            <div class="link-area">
                              <a href="/pricing" class="primary">
                                See Pricing
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>-->
                      
                    </div>
                </div>
              </div>
            </div>
        </div>
        
    </div>
</section>


@push('customScripts')

@endpush

@endsection