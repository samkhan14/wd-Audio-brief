@extends('frontend.layouts.master')
@push('customStyles')
<style>
    .mega-price-img {
        bottom: -11rem;
    }
    
    .pricing-price > p {
        font-weight: 600;
        text-align: center;
    }
    
    
</style>
@endpush
@section('container')        
<section class="inner-banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="inner-bannerHeading text-center">
              <h1>
               Smart Pricing, Exceptional Results <span>Grow Your Online Presence</span>
              </h1>
              <p>
                Get high-quality digital services that deliver exceptional results without breaking the bank. 
                Our affordable, tailored solutions enhance your online presence.

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-padding" id="website-packages">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
                <h2>Affordable Web Design <span class="color-primary">Packages</span></h2>
                <p>Get premium web design at unbeatable prices. Our packages are designed to fit your budget while delivering top-tier, customised solutions to boost your online presence.</p>
            </div>
          </div>
          <div class="col-12">
              <div class="row rowGap2 pricing-row">
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Startup Web Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>189
                          <span class="old-price">$599</span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Startup Web Design') . '/' . 189 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                                <li>3 Page Website Design</li>
                                <li>3 Banner Design</li>
                                <li>5 Stock Photos</li>
                                <li>Up to 3 Revisions</li>
                                <li>48 to 72 hours TAT</li>
                                <li>100% Ownership Rights</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Unique Design Guarantee</li>
                                <li>100% Money Back Guarantee *</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Professional Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>399
                          <span class="old-price">$899 </span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Professional Website Design') . '/' . 399 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>6 Pages Website Design</li>
                            <li>8 Stock images</li>
                            <li>5 Banner Designs</li>
                            <li>Unlimited Revisions</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Business Pro Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>599
                          <span class="old-price">$1199</span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Business Pro Website Design') . '/' . 599 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>8-10 Page Website Design</li>
                            <li>Conceptual Website Design</li>
                            <li>Lead Capturing Forms Design</li>
                            <li>5 Stock Photos</li>
                              <li>Unlimited Revisions</li>
                            <li>6 Unique Banner Design</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Ecommerce Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>799
                          <span class="old-price">$1299 </span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Ecommerce Website Design') . '/' . 799 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>Upto 15 Unique Pages Website</li>
                            <li>Conceptual Website Design</li>
                            <li>Product Search Design</li>
                            <li>10 Products images design</li>
                            <li>Up to 5 Custom Made Banner Designs</li>
                            <li>10 Stock Images</li>
                            <li>Search Bar Design</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>Unlimited Revisions</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Pro Ecommerce Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>999
                          <span class="old-price">$1899 </span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Pro Ecommerce Website Design') . '/' . 999 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>Upto 15 Unique Pages Website</li>
                            <li>Conceptual Website Design</li>
                            <li>Product Search Design</li>
                            <li>20 Products images design</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>Unlimited Revisions</li>
                            <li>20 Stock Images</li>
                            <li>Signup Area (For Newsletters, Offers etc.) Design</li>
                            <li>Search Bar Design</li>
                            <li>Industry Specified Team of Expert Designers</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Business Ecom Web Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>1199
                          <span class="old-price">$2199</span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Business Ecom Web Design') . '/' . 1199 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>Unlimited Unique Pages Website</li>
                            <li>Conceptual Website Design</li>
                            <li>Product Search Design</li>
                            <li>20 Products images design</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>Unlimited Revisions</li>
                            <li>30 Stock Images</li>
                            <li>Signup Area (For Newsletters, Offers etc.) Design</li>
                            <li>Search Bar Design</li>
                            <li>Industry Specified Team of Expert Designers</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-padding gray-section gradient-circle rightCenter-gradient" id="website-big-packages">
      <div class="container">
        <div class="row">
          <div class="col-12">
              
            <div class="single-big-pricing single-mega-pricing">
              <div class="row rowGap2">
            
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-12">
                
                      <div class="big-pricing-head">
                        <h2>Complete Branding Design Solution</h2>
                        <p>One Stop Design Solution For All Startup and Business. </p>
                      </div>
                    </div>
                    <div class="col-12 d-md-none">
                      <div class="pricing-price">
                        <h3>
                          <span class="off">70% off</span>
                        </h3>
                        <h3>
                          <small>$</small>1099
                          <span class="old-price">$2099</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Complete Branding Sol') . '/' . 1099 . '/' . rawurlencode('Logo Design') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row pt-oneThird">
                    <div class="col-md-4">
                      <div class="pricing-body-details">
                        <h3 class="mt-0">Website Design</h3>
                        <ul>
                           <li>8-10 Page Website Design</li>
                            <li>Conceptual Website Design</li>
                            <li>Lead Capturing Forms Design</li>
                            <li>5 Stock Photos</li>
                            <li>6 Unique Banner Design</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pricing-body-details">
                        <h3>Logo Design</h3>
                        <ul>
                          <li>Logo Design</li>
                          <li>Unlimited Logo Concepts</li>
                          <li>Unlimited Revisions</li>
                          <li>File Formats (PSD, PDF, A1, JPEG, PNG)</li>
                        </ul>
                        <h3>Stationary Design</h3>
                        <ul>
                          <li>Stationary</li>
                          <li>Custom Stationery Designs</li>
                          <li>
                            MS Word Letterhead (Letterhead, Envelope, Business
                            Card, Invoice)
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pricing-body-details">
                          <h3>Social Media</h3>
                            <ul>
                              <li>Social Media</li>
                              <li>Facebook Page Design</li>
                              <li>Twitter Page Design</li>
                              <li>YouTube Page Design</li>
                            </ul>
                        <!--<h3>Value Added Services</h3>
                        <ul>
                          <li>Value Added Services</li>
                          <li>All Final File Formats</li>
                          <li>Dedicated Account Manager</li>
                          <li>100% Satisfaction Guarantee</li>
                          <li>100% Unique Design Guarantee</li>
                          <li>100% Satisfaction And Money Back Guarantee</li>
                        </ul>-->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-md-block d-none">
                  <div class="pricing-price">
                    <h3>
                      <span class="off">70% off</span>
                    </h3>
                    <h3>
                      <small>$</small>1099
                          <span class="old-price">$2099</span>
                    </h3>
                    <div class="link-area">
                      <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Complete Branding Sol') . '/' . 1499 . '/' . rawurlencode('Logo Design') . '/USD' ?>" class="primary">
                        Start Your Project
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/mega-price-img-2.png"
                alt=""
                class="mega-price-img"
              />
            </div>
          </div>
        </div>
        <!--<div class="row mt-5 text-center">-->
        <!--    <div class="col-lg-12 col-sm-12">-->
        <!--        <div class="link-area">-->
        <!--            <a href="#" class="primary offer-btn">Activate My 70% Off Coupon</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
      </div>
    </section>

    <!-------------------------- FAQs Section ---------------------------->
  
    
    <!-------------------------- Blog Section ---------------------------->




@push('customScripts')



@endpush

@endsection