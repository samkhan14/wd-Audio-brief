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

$company_name = isset($_GET['company_name']) ? $_GET['company_name'] : '';
$service = isset($_GET['service']) ? $_GET['service'] : '';
?>

<input type="hidden" id="company_name" value="{{ request()->get('company_name', '') }}" />

<section class="steps-section mesh-shapes" id="brief_section">
      <div class="steps-body">
        <div class="container">
          <form class="steps-form" action="#" method="post" id="homebrief">
            @csrf
            <div class="stepsControls">
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
                    <h2>Step <span class="color-primary">01</span>: <span class="break-mob">Let's Start With The Basics</span></h2>
                  </div>
                  <div class="steps-inputArea">
                    <input
                      type="text"
                      name="cname"
                      id="cname"
                      value="{{ request()->get('company_name', '') }}"
                      placeholder="Please Enter Your Business Name"
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
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '1' : '2'; ?></span>: <span class="break-mob">Understanding Your Market</span></h2>
              </div>
              <!--<div class="steps-inputArea">
                <select name="industry" required>
                  <option selected disabled hidden>Select Your Industry</option>
                  <option value="Agriculture &amp; Outdoor">Agriculture &amp; Outdoor</option>
                  <option value="Art &amp; Photography">Art &amp; Photography</option>
                  <option value="Building &amp; Construction">Building &amp; Construction</option>
                  <option value="Business &amp; Finance">Business &amp; Finance</option>
                  <option value="Children">Children</option>
                  <option value="Religious">Religious</option>
                  <option value="Fashion">Fashion</option>
                  <option value="Food &amp; Drinks">Food &amp; Drinks</option>
                  <option value="Games &amp; Betting">Games &amp; Betting</option>
                  <option value="Health &amp; Medical">Health &amp; Medical</option>
                  <option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
                  <option value="Education">Education</option>
                  <option value="Pet &amp; Animal">Pet &amp; Animal</option>
                  <option value="Home Service">Home Service</option>
                  <option value="Real Estate">Real Estate</option>
                  <option value="Security">Security</option>
                  <option value="Law">Law</option>
                  <option value="Beauty &amp; Spa">Beauty &amp; Spa</option>
                  <option value="Creative">Creative</option>
                  <option value="Sports">Sports</option>
                  <option value="Science">Science</option>
                  <option value="Transportation">Transportation</option>
                  <option value="Music">Music</option>
                </select>
              </div>-->
              <div class="steps-inputArea industryDiv">
                <input type="hidden" id="industryName" name="industryName" value="">

                <select name="industry" id="industry" required>
                  <option selected disabled hidden>Please Select Your Industry</option>
                  <option value="Agriculture &amp; Outdoor">Agriculture &amp; Outdoor</option>
                  <option value="Art &amp; Photography">Art &amp; Photography</option>
                  <option value="Building &amp; Construction">Building &amp; Construction</option>
                  <option value="Business &amp; Finance">Business &amp; Finance</option>
                  <option value="Children">Children</option>
                  <option value="Religious">Religious</option>
                  <option value="Fashion">Fashion</option>
                  <option value="Food &amp; Drinks">Food &amp; Drinks</option>
                  <option value="Games &amp; Betting">Games &amp; Betting</option>
                  <option value="Health &amp; Medical">Health &amp; Medical</option>
                  <option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
                  <option value="Education">Education</option>
                  <option value="Pet &amp; Animal">Pet &amp; Animal</option>
                  <option value="Home Service">Home Service</option>
                  <option value="Real Estate">Real Estate</option>
                  <option value="Security">Security</option>
                  <option value="Law">Law</option>
                  <option value="Beauty &amp; Spa">Beauty &amp; Spa</option>
                  <option value="Creative">Creative</option>
                  <option value="Sports">Sports</option>
                  <option value="Science">Science</option>
                  <option value="Transportation">Transportation</option>
                  <option value="Music">Music</option>
                </select>
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-3">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '2' : '3'; ?></span>: <span class="break-mob">Highlighting What We Offer</span></h2>
              </div>
              <div class="steps-inputArea">

                <select name="type" required id="websiteType">
                  <option value="" selected disabled hidden>Please Select Your Website Services</option>
                  <option value="Custom Web Design" data-websitetype="Custom Web Design">Custom Web Design</option>
                  <option value="Website Redesign" data-websitetype="Website Redesign">Website Redesign</option>
                  <option value="Wordpress Web Design" data-websitetype="Wordpress Web Design">Wordpress Web Design</option>
                  <option value="Shopify Web Design" data-websitetype="Shopify Web Design">Shopify Web Design</option>
                  <option value="Magento Web Design" data-websitetype="Magento Web Design">Magento Web Design</option>
                  <option value="Drupal Web Design" data-websitetype="Drupal Web Design">Drupal Web Design</option>
                  <option value="Joomla Web Design" data-websitetype="Joomla Web Design">Joomla Web Design</option>

                  <!--<option value="E-commerce Website" data-websitetype="E-commerce Website">E-commerce Website</option>
                  <option value="Custom Wordpress" data-websitetype="Custom Wordpress">Custom Wordpress</option>
                  <option value="Content Management System (CMS)" data-websitetype="Content Management System (CMS)">
                    Content Management System (CMS)
                  </option>-->
                </select>
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-4">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '3' : '4'; ?></span>: <span class="break-mob">Getting You Onboard</span></h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="text"
                  id="cus_name"
                  name="name"
                  placeholder="Enter Your Name"
                  enterkeyhint="done"
                  required
                />
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-5">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '3' : '4'; ?></span>: <span class="break-mob">Getting You Onboard</span></h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="text"
                  id="cus_email"
                  data-type="email"
                  name="email"
                  placeholder="Please Enter Your Email"
                  enterkeyhint="done"
                  required
                />
                <div class="step-error"></div>
              </div>
            </div>
            <div class="stepArea" id="step-6">
              <div class="section-heading">
                <h2>Step <span class="color-primary">0<?php echo $company_name ? '3' : '4'; ?></span>: <span class="break-mob">Getting You Onboard</h2>
              </div>
              <div class="steps-inputArea">
                <input
                  type="number"
                  id="cus_phone"
                  name="phoneNumber"
                  enterkeyhint="done"
                  placeholder="Enter Your Number (Optional)"
                />
                <div class="step-error"></div>
              </div>
            </div>

            <!--<div class="stepArea" id="step-7">
              <div class="section-heading">
                <h2>
                  <span class="color-primary d-block" id="briefthankyou"></span> How
                  Would You Like To Proceed?
                </h2>
              </div>
              <div class="max-900">
                <div class="mt-5rem">
                    <div class="row rowGap justify-content-center">

                      <div class="col-md-5">
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
                      </div>
                    </div>
                </div>
              </div>
            </div>-->

            <input type="hidden" id="service" name="service" value="{{ request()->get('service', '') }}" />
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
