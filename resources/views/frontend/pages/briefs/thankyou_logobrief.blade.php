@extends('frontend.layouts.steps.master')
@push('customStyles')

<style>

    body{
        background: url(../frontend/assets/images/steps/thank-you/final-step-bg.webp) no-repeat center center;
        background-size: cover;
    }
    @media (max-width: 1200px){
        .section-heading {
            top: 20%;
        }
        
    }
    @media (max-width: 576px){
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
    }
        .mt-6rem {
            margin-top: 1rem;
        }
        .section-heading {
            position: static !important;
            transform: none;
            width: 100%;
            top: 23%;
            text-align: center;
            left: 50%;
        }

        .section-heading > h2 {
            color: var(--background) !important;
        }
        
</style>

@endpush

@section('container')
<section class="steps-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="section-heading">
                    <h2><span class="color-primary d-block" id="briefthankyou">Thank You, <strong style='background: #272c37; color: #fff; border-radius: 6px; padding: 6px 15px; font-weight: 600;'>{{ request()->get('customer_name') ?? request()->get('company_name') ?? 'Guest' }} </strong></span> How Would You Like To Proceed?</h2>
              </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-sm-12">
                <div class="max-900">
                <div class="mt-6rem">
                    <div class="row rowGap">
                    <div class="col-md-4">
                      <div class="single-step-card verticel-card">
                        <div class="img-area">
                          <img class="breif_img_portfolio" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/thank-you/portfolio_1.webp" alt="" width="100%"/>
                        </div>
                        <div class="single-step-cardDetail">
                          <h3>Our Portfolio</h3>
                          <p>
                            Let's Talk! Share your design requirements with one of
                            our designers to get a perfect logo that you envisioned
                            for
                          </p>
                          <div class="link-area">
                            <a href="{{ route('front.portfolio') }}" class="primary">
                              Let's Explore
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="single-step-card verticel-card">
                        <div class="img-area">
                          <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/thank-you/pricing_1.webp" alt="" width="100%"/>
                        </div>
                        <div class="single-step-cardDetail">
                          <h3>Pricing</h3>
                          <p>
                            Let's Talk! Share your design requirements with one of
                            our designers to get a perfect logo that you envisioned
                            for
                          </p>
                          <div class="link-area">
                            <a href="{{ route('front.discounted.pricing') }}" class="primary">
                              Let's Explore
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="single-step-card verticel-card">
                        <div class="img-area">
                          <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/thank-you/live_chat_support.webp" alt="" width="100%"/>
                        </div>
                        <div class="single-step-cardDetail">
                          <h3>Live Chat Support</h3>
                          <p>
                            Let's Talk! Share your design requirements with one of
                            our designers to get a perfect logo that you envisioned
                            for
                          </p>
                          <div class="link-area">
                            <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()" class="primary">
                              Let's Chat
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
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