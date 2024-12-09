@extends('frontend.layouts.steps.master')
@push('customStyles')
<style>
  @media (max-width: 576px) {
      .stepArea > .section-heading > h2 {
          font-size: 1.5rem;
      }
  }
</style>
@endpush

@section('container')

<?php

$company_name = isset($_GET['cname']) ? $_GET['cname'] : '';

?>

<input type="hidden" id="companyName" value="{{ request()->get('cname', '') }}" />

<section class="steps-section mesh-shapes" id="brief_section">
      <div class="steps-body">
        <div class="container">
          <form class="steps-form" action="" method="post" id="logostepform">
            @csrf
              <div class="stepsControls" id="controls-step-1">
                <button type="button" class="prev-step">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </button>
                <button type="button" class="next-step active">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
              </div>
            <?php if(!$company_name) { ?>
                <div class="stepArea active" id="step-1">
                  <div class="section-heading">
                    <h2>Step <span class="color-primary">01</span></h2>
                  </div>
                  <div class="steps-inputArea">
                    <input
                      type="text"
                      name="cname"
                      id="cname"
                        value="{{ request()->get('cname', '') }}"
                      placeholder="Company Name"
                      enterkeyhint="done"
                      autofocus
                      required
                    />
                    <div class="step-error"></div>
                  </div>
                </div>
            <?php } ?>
            <div class="stepArea <?php echo $company_name ? 'active' : ''; ?>" id="step-2">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '1' : '2'; ?></span></h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="text"
                  name="slogan"
                  id="slogan"
                  enterkeyhint="done"
                  placeholder="Slogan Here (Optional)"
                />
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-3">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '2' : '3'; ?></span></h2>
              </div>
              <div class="steps-inputArea">
                <select name="industry" id="industry" required>
                  <option value="" selected disabled hidden>Select Your Industry</option>
                  <option value="Agriculture &amp; Outdoor" data-industryname="Agriculture &amp; Outdoor">Agriculture &amp; Outdoor</option>
                  <option value="Art &amp; Photography" data-industryname="Art &amp; Photography">Art &amp; Photography</option>
                  <option value="Building &amp; Construction" data-industryname="Building &amp; Construction">Building &amp; Construction</option>
                  <option value="Business &amp; Finance" data-industryname="Business &amp; Finance">Business &amp; Finance</option>
                  <option value="Children" data-industryname="Children">Children</option>
                  <option value="Religious" data-industryname="Religious">Religious</option>
                  <option value="Fashion" data-industryname="Fashion">Fashion</option>
                  <option value="Food &amp; Drinks" data-industryname="Food &amp; Drinks">Food &amp; Drinks</option>
                  <option value="Games &amp; Betting" data-industryname="Games &amp; Betting">Games &amp; Betting</option>
                  <option value="Health &amp; Medical" data-industryname="Health &amp; Medical">Health &amp; Medical</option>
                  <option value="Travel &amp; Tourism" data-industryname="Travel &amp; Tourism">Travel &amp; Tourism</option>
                  <option value="Education" data-industryname="Education">Education</option>
                  <option value="Pet &amp; Animal" data-industryname="Pet &amp; Animal">Pet &amp; Animal</option>
                  <option value="Home Service" data-industryname="Home Service">Home Service</option>
                  <option value="Real Estate" data-industryname="Real Estate">Real Estate</option>
                  <option value="Security" data-industryname="Security">Security</option>
                  <option value="Law" data-industryname="Law">Law</option>
                  <option value="Beauty &amp; Spa" data-industryname="Beauty &amp; Spa">Beauty &amp; Spa</option>
                  <option value="Creative" data-industryname="Creative">Creative</option>
                  <option value="Sports" data-industryname="Sports">Sports</option>
                  <option value="Science" data-industryname="Science">Science</option>
                  <option value="Transportation" data-industryname="Transportation">Transportation</option>
                  <option value="Music" data-industryname="Music">Music</option>
                </select>
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-4">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '3' : '4'; ?></span></h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="text"
                  name="keyword"
                  id="keyword"
                  enterkeyhint="done"
                  placeholder="Please Enter Keyword"
                  required
                />
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-5">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '4' : '5'; ?></span></h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="text"
                  name="name"
                  id="cus_name"
                  enterkeyhint="done"
                  placeholder="Enter Your Name"
                  required
                />
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-6">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '5' : '6'; ?></span></h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="text"
                  data-type="email"
                  name="email"
                  id="cus_email"
                  enterkeyhint="done"
                  placeholder="Enter Your Email"
                  required
                />
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-7">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '6' : '7'; ?></span></h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="number"
                  name="phoneNumber"
                  id="cus_phone"
                  enterkeyhint="done"
                  placeholder="Enter Your Number (Optional)"
                />
                <div class="step-error"></div>
              </div>
            </div>
            
            <!--<div class="stepArea" id="step-8">
              <div class="section-heading">
                <h2>
                  <span class="color-primary d-block" id="briefthankyou"></span> How
                  Would You Like To Proceed?
                </h2>
              </div>
              <div class="max-900">
                <div class="mt-5rem">
                    
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
            </div>-->
            
          </form>
        </div>
      </div>
      <div class="steps-footer position-relative">
        <div class="step-error"></div>
        <div class="container">
            <button type="button" class="next-step">
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/keyboard.png" alt="" />
            </button>
        </div>
      </div>
    </section>
    


@push('customScripts')

@endpush

@endsection