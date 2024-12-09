@extends('frontend.layouts.master')
@push('customStyles')
<style>
    .home-banner {
        min-height: 43rem;
    }
    .scroller-list > li > a{
        font-size: 1.0625rem;
        gap: 0;
    }
    .scroller-list > li > a > span, 
    .scroller-item > h3 > span {
        min-width: 1.875rem;
    }
    .banner-center-container {
        top: 43%;
    }
    .banner-heading > p{
        text-transform: capitalize;
    }
    .banner-heading > h5{
        font-size: 1.35rem;
        font-weight: 600;
    }
    @media (max-width: 650px) { 
        .home-banner{
            min-height: 5rem;
            max-height: 45rem;
        }
        .banner-center-container {
            top: 38%;
        }
        .banner-center-container.homeBannerSlider {
            bottom: 4% !important;
        }
        .about-banner-bottom{
            height: 15rem;
        }
        .about-banner-bottom::before{
            bottom: -30px;
            height: 22rem;
        }
        
    }
    
    .pricing-price > p {
        
    font-weight: 600;
    text-align: center;
    
    }
    .pricing-price > h3 > span {
        font-size: 0.875rem;
        color: #222;
    }
    
.banner-form > div > select {
    /*opacity: 0;*/
}
    
.banner-form > div > :is(.nice-select, select) {
    flex: 1;
    border: none;
    outline: 0;
    padding: 0.375rem 0.625rem 0.5rem;
    height: 3rem;
    background: transparent;
}
    
.banner-form > div > .nice-select .list {
    margin-top: 0rem;
    max-width: calc(100% - 1.625rem);
}

.banner-form {
    padding: 0.3rem 0.5rem 0.5rem;
    border-radius: 1.75rem;
    max-width: 29rem;
}

.banner-form .nice-select .option.disabled:has(+ .option.disabled) {
    display: none;
    font-weight: 600;
    font-size: 1.125rem;
}

.banner-form .option.disabled {
    text-transform: capitalize;
}

.banner-form .nice-select .option.disabled {
    font-weight: 600;
    font-size: 0.875rem;
    color: var(--text-color);
    opacity: 0.75;
}

.banner-form .nice-select .option.disabled:hover,
.banner-form .nice-select .option.disabled.focus,
.banner-form .nice-select .option.disabled.selected.focus {
    background: transparent !important;
}

.banner-form .nice-select .current {
    vertical-align: -webkit-baseline-middle;
}


.banner-selectArea {
    padding-left: 0.5rem;
}

.scrollerpointsul + p.postHeading {
    margin-top: 1.75rem;
    font-weight: 600;
    font-size: 1.25rem;
    text-transform: capitalize;
    text-align:center;
}

.scroller-item > .link-area {
    padding-left: 2.5rem;
    margin-top: 1.25rem;
    text-align:center;
}
.banner-form > div > img {
    position: relative;
    height: 1.125rem;
    transform: translate(0%, -2%);
}

@media (min-width: 1199px) {
    .homeBanner-sliders {
        --width: 18.5rem;
        --height: 13rem;
    }
    
    .banner-center-container.homeBannerSlider {
        top: 22.5%;
        z-index: -1;
    }
    
    .banner-heading > h1 {
        margin-left: -0.1875rem;
    }
}

@media (min-width: 1399px) {
    .banner-form .nice-select:after {
        border-bottom-width: 3px;
        border-right-width: 3px;
    }
}

@media (max-width: 576px) {
    .banner-form .nice-select .option.disabled {
        font-size: 0.8125rem;
    }
    
    .scrollerpointsul + p.postHeading,
    .scroller-item > .link-area {
        padding-left: 0;
    }
}

.max-54rem {
    max-width: 54rem !important;
}

.scroller-section .scroller-sticky > .partnersUl > li {
    position: relative;
}

.scroller-section .scroller-sticky > .partnersUl {
    gap: 3.5rem;
}

.scroller-section .scroller-sticky > .partnersUl > li:not(:last-child):after {
    content: "";
    position: absolute;
    display: block;
    left: calc(100% + 1.75rem);
    width: 1px;
    height: auto;
    top: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 0, #aaa 30%, #aaa 70%, transparent 100%);
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
    border-radius: 100%;
}

.scroller-sticky {
    top: calc(var(--header-height) + var(--sectionPadding-top) + 1rem);
}

.basic-tabs > .nav-tabs > .nav-item > .nav-link > img {
    height: 2.5rem;
}

.basic-tabs > .nav-tabs > .nav-item > .nav-link {
    min-width: 11.5rem;
}

.partnersUl.after-portfolio {
    margin: 1.5rem 0 1.5rem;
    gap: 0.5rem;
    align-items: center;
}

.partnersUl.after-portfolio > li > img {
    width: 6.875rem;
    height: 3.25rem;
    object-fit: contain;
}

.partnersUl.after-portfolio > li > img.award {
    height: 3.75rem;
}

.scroller-sticky.gradient-circle.leftCenter-gradient {
    position: sticky;
    overflow: initial;
}

.scroller-sticky.gradient-circle.leftCenter-gradient::after {
    transform: translate(-90%, -40%);
}

.homeBanner-sliders:first-child {
    margin-left: -10%;
}

.scrollerpointsul li > strong > span {
    color: var(--primary);
}

@media (max-width: 576px) {
    .single-big-pricing {
        max-height: 86.75rem;
    }
    .mega-price-img {
        bottom: 2rem !important;
    }
    .link-area > :is(a, button), .banner-form > button{
    font-size: 1rem;
}
}

.mega-price-img {
    bottom: -11rem;
}

.banner-heading + .link-area {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-top: 1.5rem;
}

.banner-heading + .link-area > a {
    box-shadow: 0 0 0.625rem rgba(0,0,0,0.1);
}


</style>
@endpush
@section('container')
    <section class="home-banner-area">
      <section class="home-banner gradient-circle leftCenter-gradient">
        <div class="container banner-center-container">
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <div class="banner-heading">
                <h5>TRUSTED ECOMMERCE DESIGN PARTNERS</h5>
                <h1>E-com Website Design From <span>$799</span> Only</h1>
                <p>Unlock your store’s full potential with a custom-designed ecommerce website that attracts, engages, and converts.</p>
                  
              </div>
              <div class="link-area">
                  <a href="#" class="primary offer-btn">Avail My 70% Discount</a>
                  <a href="#pricing" class="scroll-to-link">See Pricing</a>
              </div>
            <!--<form action="/brief/" class="banner-form d-block" id="bannerForm">
                <div class="d-flex align-items-center banner-selectArea position-relative"> 
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images-webp/banner/user.webp" alt="" />
                    <select name="service" class="wide" id="bannerselect">
                        <option selected disabled hidden value="" id="typewriter-option">Begin with a free marketing consultation.</option>
                        <option disabled value="">Select the best category for your website</option>
                        <option value="Business/Corporate">Business/Corporate</option>
                        <option value="Ecommerce/Retail">Ecommerce/Retail</option>
                        <option value="Personal Brand/Influencer">Personal Brand/Influencer</option>
                        <option value="Creative/Portfolio">Creative/Portfolio</option>
                        <option value="Nonprofit/Community">Nonprofit/Community</option>
                    </select>
                    <div id="typewriter-container"></div>
                </div>
                <button class="w-100" type="submit" id="submitBannerForm">Let's Build Your Dream Website!</button>
            </form>-->
              <!--<ul class="partnersUl">
                <li>
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/1.webp" alt="" />
                </li>
                <li>
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/2.webp" alt="" />
                </li>
              </ul>-->
            </div>
          </div>
        </div>
        <div class="container banner-center-container homeBannerSlider">
          <div class="row">
            <div class="col-md-6 offset-md-6">
              <div class="homeBanner-slidersArea">
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/1.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/2.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/3.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/4.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/5.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/6.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/7.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/8.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/9.webp" alt="" />
                    </li>
                    <!--<li>-->
                    <!--  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/10.webp" alt="" />-->
                    <!--</li>-->
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/11.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/1.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/2.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/3.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/4.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/5.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/6.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/7.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/8.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/9.webp" alt="" />
                    </li>
                    <!--<li>-->
                    <!--  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/10.webp" alt="" />-->
                    <!--</li>-->
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/11.webp" alt="" />
                    </li>

                  </ul>
                </div>
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/12.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/13.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/14.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/15.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/16.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/17.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/18.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/19.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/20.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/21.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/12.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/13.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/14.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/15.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/16.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/17.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/18.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/19.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/20.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/21.webp" alt="" />
                    </li>
                    
                  </ul>
                </div>
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/22.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/23.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/24.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/25.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/26.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/27.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/28.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/29.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/30.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/31.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/22.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/23.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/24.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/25.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/26.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/27.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/28.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/29.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/30.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/31.webp" alt="" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      
      <section class="section-padding about-banner-bottom p-0">
        <!--<div class="container">
          <div class="row">
            <div class="col-12">
              <div class="about-top-text">
                <p>
                  Our customers say Excellent
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/about/rating.png" alt="" />
                  4.7 out 5 stars based on 89,720 reviews
                </p>
              </div>
            </div>
          </div>
        </div>-->
      </section>
      
      <div class="banner-bottom-text">
          <a href="#portfolio-sec" class="scroll-to-link">
          <p>Check out our awesome <span>Webfolio</span></p>
              <div class="basic-modern-dots white-dots" id="banner-dots-link">     
                <div class="dot first-circle"></div> 
                <div class="dot second-circle"></div> 
                <div class="dot third-circle"></div> 
            </div>
          </a>
      </div>
    </section>
    
    <!-------------------------------- Pricing Section -------------------------------->
    <section class="section-padding pt-0" id="pricing">
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
                  <!--<div class="col-lg-4 col-sm-12">-->
                  <!--  <div class="single-pricing">-->
                  <!--    <div class="pricing-head">-->
                  <!--      <h2>Startup Website Design</h2>-->
                  <!--      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />-->
                  <!--    </div>-->
                  <!--    <div class="pricing-price">-->
                  <!--      <p>Best Value for Money Guaranteed!</p>-->
                  <!--      <h3>-->
                  <!--        <small>$</small>189-->
                  <!--        <span class="old-price">$599</span>-->
                  <!--        <span class="off">70% off</span>-->
                  <!--      </h3>-->
                  <!--      <div class="link-area">-->
                  <!--        <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Startup Web Design') . '/' . 189 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">-->
                  <!--          Start Your Project-->
                  <!--        </a>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="pricing-body">-->
                  <!--      <button type="button">-->
                  <!--        <span>What's Include</span>-->
                  <!--        <i class="fa-solid fa-angles-down"></i>-->
                  <!--      </button>-->
                  <!--      <div class="pricing-body-details">-->
                  <!--        <h3>Package Features:</h3>-->
                  <!--        <ul>-->
                  <!--              <li>3 Page Website Design</li>-->
                  <!--              <li>3 Banner Design</li>-->
                  <!--              <li>5 Stock Photos</li>-->
                  <!--              <li>Up to 3 Revisions</li>-->
                  <!--              <li>48 to 72 hours TAT</li>-->
                  <!--              <li>100% Ownership Rights</li>-->
                  <!--              <li>100% Satisfaction Guarantee</li>-->
                  <!--              <li>100% Unique Design Guarantee</li>-->
                  <!--              <li>100% Money Back Guarantee *</li>-->
                  <!--          </ul>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <!--<div class="col-lg-4 col-sm-12">-->
                  <!--  <div class="single-pricing">-->
                  <!--    <div class="pricing-head">-->
                  <!--      <h2>Professional Website Design</h2>-->
                  <!--      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />-->
                  <!--    </div>-->
                  <!--    <div class="pricing-price">-->
                  <!--      <p>Best Value for Money Guaranteed!</p>-->
                  <!--      <h3>-->
                  <!--        <small>$</small>399-->
                  <!--        <span class="old-price">$899 </span>-->
                  <!--        <span class="off">70% off</span>-->
                  <!--      </h3>-->
                  <!--      <div class="link-area">-->
                  <!--        <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Professional Website Design') . '/' . 399 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">-->
                  <!--          Start Your Project-->
                  <!--        </a>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="pricing-body">-->
                  <!--      <button type="button">-->
                  <!--        <span>What's Include</span>-->
                  <!--        <i class="fa-solid fa-angles-down"></i>-->
                  <!--      </button>-->
                  <!--      <div class="pricing-body-details">-->
                  <!--        <h3>Package Features:</h3>-->
                  <!--        <ul>-->
                  <!--          <li>6 Pages Website Design</li>-->
                  <!--          <li>8 Stock images</li>-->
                  <!--          <li>5 Banner Designs</li>-->
                  <!--          <li>Unlimited Revisions</li>-->
                  <!--          <li>48 to 72 hours TAT</li>-->
                  <!--          <li>Facebook Page Design</li>-->
                  <!--          <li>Twitter Page Design</li>-->
                  <!--          <li>YouTube Page Design</li>-->
                  <!--          <li>100% Ownership Rights</li>-->
                  <!--          <li>100% Satisfaction Guarantee</li>-->
                  <!--          <li>100% Unique Design Guarantee</li>-->
                  <!--          <li>100% Money Back Guarantee *</li>-->
                  <!--      </ul>-->
                          
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <!--<div class="col-lg-4 col-sm-12">-->
                  <!--  <div class="single-pricing">-->
                  <!--    <div class="pricing-head">-->
                  <!--      <h2>Business Pro Website Design</h2>-->
                  <!--      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />-->
                  <!--    </div>-->
                  <!--    <div class="pricing-price">-->
                  <!--      <p>Best Value for Money Guaranteed!</p>-->
                  <!--      <h3>-->
                  <!--        <small>$</small>599-->
                  <!--        <span class="old-price">$1199</span>-->
                  <!--        <span class="off">70% off</span>-->
                  <!--      </h3>-->
                  <!--      <div class="link-area">-->
                  <!--        <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Business Pro Website Design') . '/' . 599 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">-->
                  <!--          Start Your Project-->
                  <!--        </a>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="pricing-body">-->
                  <!--      <button type="button">-->
                  <!--        <span>What's Include</span>-->
                  <!--        <i class="fa-solid fa-angles-down"></i>-->
                  <!--      </button>-->
                  <!--      <div class="pricing-body-details">-->
                  <!--        <h3>Package Features:</h3>-->
                  <!--        <ul>-->
                  <!--          <li>8-10 Page Website Design</li>-->
                  <!--          <li>Conceptual Website Design</li>-->
                  <!--          <li>Lead Capturing Forms Design</li>-->
                  <!--          <li>5 Stock Photos</li>-->
                  <!--            <li>Unlimited Revisions</li>-->
                  <!--          <li>6 Unique Banner Design</li>-->
                  <!--          <li>48 to 72 hours TAT</li>-->
                  <!--          <li>Facebook Page Design</li>-->
                  <!--          <li>Twitter Page Design</li>-->
                  <!--          <li>YouTube Page Design</li>-->
                  <!--          <li>100% Ownership Rights</li>-->
                  <!--          <li>100% Unique Design Guarantee</li>-->
                  <!--          <li>100% Money Back Guarantee *</li>-->
                  <!--      </ul>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
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
    
    <section class="section-padding gray-section gradient-circle rightCenter-gradient">
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
        <div class="row mt-5 text-center">
            <div class="col-lg-12 col-sm-12">
                <div class="link-area">
                    <a href="#" class="primary offer-btn">Activate My 70% Off Coupon</a>
                </div>
            </div>
        </div>
      </div>
    </section>

    <!--<section class="scroller-section white-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="scroller-sticky pt-0 gradient-circle leftCenter-gradient">
              <div class="section-heading">
                <h2>Pioneering Web Agency Delivering Bespoke Solutions</h2>
              </div>
              <ul class="scroller-list mb-4">
                <li>
                  <a href="#web-firstScroller" class="active">
                    <span>01</span>
                    <p>Custom Web Design Solutions <span class="bluecolortext">To Boost Web Conversions</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-secondScroller">
                    <span>02</span>
                    <p>Successful Marketing Campaigns <span class="bluecolortext">To Accelerate Growth</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-thirdScroller">
                    <span>03</span>
                    <p>Personalized Branding Strategies <span class="bluecolortext">To Maximize Engagement</span></p>
                  </a>
                </li>
              </ul>
              
              <ul class="partnersUl display-none-mobile">
                  <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/3.webp" alt="" />
                  </li>
                    <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/1.webp" alt="" />
                  </li>
                  <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/2.webp" alt="" />
                  </li>
              </ul>
              
            </div>
          </div>
          <div class="col-md-6 margin-top-mobile-20">
            <div class="scroller-item pt-0" id="web-firstScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/home/scroll1.webp?v=2" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>01</span>
                  </h3>
              <h3>Custom Web Design Solutions <span class="bluecolortext">To Boost Web Conversions</span></h3>
              </div>
              
              <ul class="scrollerpointsul">
                  <li>
                    <strong>User Experience (UX): <span>Navigate and Convert</span></strong>
                    <p>We create easy-to-use pathways that help visitors find what they need and encourage them to become loyal customers.</p>
                  </li>
                  <li>
                    <strong>Strategic CTA Placement: <span>Capture and Engage</span></strong>
                    <p>We place eye-catching call-to-action buttons where they have the most impact, encouraging visitors to interact and engage with your site.</p>
                  </li>
                  <li>
                    <strong>Mobile-First Design: <span>Seamless Everywhere</span></strong>
                    <p>Our designs ensure your website looks great and works well on all devices, from phones to tablets to desktops.</p>
                  </li>
                  <li>
                    <strong>Fast Load Times: <span>Speed Matters</span></strong>
                    <p>We make sure your site loads quickly to keep visitors interested and reduce the chances they leave.</p>
                  </li>
                  <li>
                    <strong>Clear Value Proposition: <span>Stand Out</span></strong>
                    <p>We clearly communicate your unique benefits to persuade visitors to choose you and build their loyalty.</p>
                  </li>
              </ul>
              <p class="postHeading">Ready to transform your online presence?</p>
              <div class="link-area">
                <a href="#" class="primary book-your-call">Get Started Today!</a>
              </div>
            </div>
            <div class="scroller-item" id="web-secondScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/home/3.png" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>02</span>
                  </h3>
              <h3>Successful Marketing Campaigns <span class="bluecolortext">To Accelerate Growth</span></h3>
              </div>
            
              <ul class="scrollerpointsul">
                  <li>
                    <strong>Targeted Segmentation: <span>Reach the Right Audience</span></strong>
                    <p>Focus on specific audience groups to engage the right people, boosting engagement and conversions.</p>
                  </li>
                  <li>
                    <strong>Data-Driven Decisions: <span>Optimize on the Fly</span></strong>
                    <p>Use data to make smart decisions and improve campaign performance, driving better results and maximizing returns.</p>
                  </li>
                  <li>
                    <strong>Compelling Content: <span>Inspire Action</span></strong>
                    <p>Create high-quality content that resonates with your audience and motivates them to take action.</p>
                  </li>
                  <li>
                    <strong>Multi-Channel Strategy: <span>Maximize Your Reach</span></strong>
                    <p>Use social media, email, and ads to increase exposure and ensure consistent messaging across all platforms.</p>
                  </li>
                  <li>
                    <strong>Performance Optimization: <span>Peak Results</span></strong>
                    <p>Keep refining strategies to stay ahead of trends and achieve best results.</p>
                  </li>
              </ul>
              
              <p class="postHeading">Ready to Transform Your Marketing?</p>
              <div class="link-area">
                <a href="#" class="primary book-your-call">Get Started Today!</a>
              </div>
            </div>
            <div class="scroller-item" id="web-thirdScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/home/scroll3.webp?v=1" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>03</span>
                  </h3>
              <h3>Personalized Branding Strategies <span class="bluecolortext">To Maximize User Engagement</span></h3>
              </div>
        
              <ul class="scrollerpointsul">
                  <li>
                    <strong>Unique Visual Identity: <span>Make Your Brand Stand Out</span></strong>
                    <p>We design unique logos and pick colors that make your business look special and easy to remember.</p>
                  </li>
                  <li>
                    <strong>Personalized Content: <span>Create Tailored Experiences</span></strong>
                    <p>We use data to create content that fits each person’s likes and interests, making it more engaging for them.</p>
                  </li>
                  <li>
                    <strong>Interactive Experiences: <span>Engage and Captivate</span></strong>
                    <p>We add fun elements like quizzes and personalized suggestions to keep your audience interested and involved.</p>
                  </li>
                  <li>
                    <strong>Consistent Voice: <span>Build Trust Across Channels</span></strong>
                    <p>We make sure your business sounds the same and trustworthy everywhere, helping to build strong relationships with your customers.</p>
                  </li>
                  <li>
                    <strong>Data-Driven Decisions: <span>Optimize on the Fly</span></strong>
                    <p>Use data to make smart decisions and improve ads performance, driving better results and maximizing returns.</p>
                  </li>
              </ul>
              
              <p class="postHeading">Ready to Transform Your Brand?</p>
              <div class="link-area">
                <a href="#" class="primary book-your-call">Let Us Help You Get Started Today!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

        <section class="section-padding z-index1" id="portfolio-sec">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-heading text-center">
                    <h2>Our Success Stories and Milestones</h2>
                    <p class="max-54rem">
                        At Website Digitals, we pride ourselves on being a leading high-level website agency. Our team uses cutting-edge technologies and industry best practices to 
                        deliver outstanding projects tailored to meet the unique needs of our clients.
                    </p>
                  </div>
              </div>
          </div>
        <div class="row">
          <div class="col-12">
            <div class="basic-tabs home-portfolio-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#cms-portfolio"
                  >
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/B2BW.svg"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/B2B.svg"
                      alt=""
                    />
                    <span>B2B</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#ecom-portfolio"
                  >
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/B2CW.svg"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/B2C.svg"
                      alt=""
                    />
                    <span>B2C</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#wordpress-portfolio"
                  >
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/2.webp"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/2-colored.webp"
                      alt=""
                    />
                    <span>E-Commerce</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#portal-portfolio"
                  >
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/personalbrandingw.png"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/personalbranding.png"
                      alt=""
                    />
                    <span>personal brand</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#non-profit"
                  >
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/nonprofitw.png"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/tabs/nonprofit.png"
                      alt=""
                    />
                    <span>nonprofit</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
      <div class="container-fluid">
        <div class="tab-content web-portfolio-content">
            
            <div class="tab-pane fade active show" id="cms-portfolio">
            <div class="row rowGap2">
                
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/logo.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Pet Food Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Engaging users with seamless functionality and modern design.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/logo.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Travel Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Immersing users with intuitive navigation and vibrant visuals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/logo.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Sports Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Delivering fast performance and captivating user experiences.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/logo.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Beauty Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Offering a luxurious browsing experience with stylish design.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/logo.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Furniture Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Showcasing elegance through sophisticated and functional design.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/logo.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Automotive Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Focusing on innovation with sleek and user-friendly interfaces.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              
              
              <!--1-->
              <div class="col-lg-4 col-md-6" data-index="7">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/bg-energy.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/bg-energy.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/front-energy.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/logo-energy.webp"
                          alt=""
                        />
                        <h3>Energy Web Solutions</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Powering your brand with innovative digital design.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Energyland</h3>
                      <p>A forward-thinking renewable energy platform that provides innovative solutions in solar and wind energy. Energyland offers detailed project insights, customizable energy plans, and a user-friendly interface for seamless interaction. It integrates with smart home systems and includes a robust support network for consumers, ensuring an eco-friendly transition is both smooth and efficient.</p>
                    </div>
                    <div class="links d-none">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!--2-->
              <div class="col-lg-4 col-md-6" data-index="8">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/bg-flight.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/bg-flight.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/front-flight.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/logo-flight.webp"
                          alt=""
                        />
                        <h3>Aviation Web Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Elevating your brand with sleek, modern websites.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Exclusive Aircraft</h3>
                      <p>An elite aviation platform specializing in luxury aircraft solutions and custom aviation experiences. Exclusive Aircraft offers a comprehensive range of services, from detailed aircraft specifications to personalized charter options. The platform’s sleek, user-friendly design ensures effortless navigation, making it the go-to resource for discerning travelers and aviation enthusiasts alike.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--3-->
              <div class="col-lg-4 col-md-6" data-index="9">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/bg-food.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/bg-food.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/front-food.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/logo-food.webp"
                          alt=""
                        />
                        <h3>Culinary Web Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Serving up delicious digital experiences.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Simply Meals</h3>
                      <p>A gourmet culinary platform designed to make fine dining accessible to everyone. Simply Meals features curated recipes, customizable meal plans, and a seamless online ordering system for premium ingredients. The website is visually appealing and easy to navigate, offering a rich culinary experience that caters to both amateur cooks and seasoned chefs.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--4-->
              <div class="col-lg-4 col-md-6" data-index="10">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/bg-legal.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/bg-legal.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/front-legal.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/logo-legal.webp"
                          alt=""
                        />
                        <h3>Legal Web Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Building trust through professional online presence.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>The Griffin Law Firm</h3>
                      <p>A professional legal platform offering comprehensive services in law and counsel. The Griffin Law Firm features detailed case studies, personalized legal advice, and an easy-to-navigate interface. Designed with clarity and accessibility in mind, the website ensures clients can find the information they need quickly and efficiently.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--5-->
              <div class="col-lg-4 col-md-6" data-index="11">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/bg-medical.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/bg-medical.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/front-medical.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/logo-medical.webp"
                          alt=""
                        />
                        <h3>Healthcare Web Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Innovating digital solutions for better patient care.</p>
                        <a href="javascript:void(0);">
                         View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>IHMP Health Management</h3>
                      <p>A cutting-edge healthcare platform dedicated to enhancing patient care through innovative technology. IHMP Health Management provides comprehensive health services, including personalized treatment plans and easy-to-use patient portals. The website is designed for optimal user experience, ensuring that both healthcare providers and patients can access critical information effortlessly.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--6-->
              <div class="col-lg-4 col-md-6" data-index="12">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/logos-03.webp"
                          alt=""
                        />
                        <h3>Job Portal Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Designing efficient and user-friendly job portals.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Jobzilla</h3>
                      <p>A dynamic job portal designed to connect job seekers with top employers. Jobzilla offers a wide range of job listings, career resources, and an intuitive application process. The platform’s user-friendly interface ensures that users can easily find and apply for jobs that match their skills and career goals.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <!--1-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/bg-energy.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/bg-energy.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/front-energy.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/logo-energy.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Energy Web Solutions</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Powering your brand with innovative digital design.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--2-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/bg-flight.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/bg-flight.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/front-flight.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/logo-flight.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Aviation Web Design</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Elevating your brand with sleek, modern websites.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--3-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/bg-food.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/bg-food.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/front-food.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/logo-food.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Culinary Web Design</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Serving up delicious digital experiences.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--4-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/bg-legal.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/bg-legal.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/front-legal.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/logo-legal.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Legal Web Design</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Building trust through professional online presence.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--5-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/bg-medical.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/bg-medical.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/front-medical.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/logo-medical.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Healthcare Web Design</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Innovating digital solutions for better patient care.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--6-->
              <!-- <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/logos-03.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Job Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Designing efficient and user-friendly job portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              
            </div>
          </div>
            
            <div class="tab-pane fade " id="wordpress-portfolio">
           <div class="row rowGap2">
              <!--1-->
              <div class="col-lg-4 col-md-6" data-index="1">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/logo-01.webp"
                          alt=""
                        />
                        <h3>Fashion eCommerce Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Tailoring vibrant and modern eCommerce websites.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Pixio</h3>
                      <p>A trendy fashion eCommerce platform that brings the latest styles directly to your doorstep. Pixio offers a wide range of clothing and accessories, featuring a sleek and easy-to-navigate website. With detailed product descriptions and a seamless shopping experience, Pixio ensures that customers can find and purchase the perfect outfit effortlessly.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--2-->
              <div class="col-lg-4 col-md-6" data-index="2">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/bg_amore.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/bg_amore.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/logo-04.webp"
                          alt=""
                        />
                        <h3>Beauty eCommerce Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating elegant and user-friendly beauty eCommerce websites.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Sofee Cosmetics</h3>
                      <p>A beauty eCommerce platform dedicated to enhancing your natural glow. Amore features a curated selection of skincare and makeup products, designed to cater to all skin types. The website’s clean and modern layout allows for easy browsing, making it simple for customers to discover new beauty essentials and shop with confidence.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--3-->
              <div class="col-lg-4 col-md-6" data-index="3">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/logo-06.webp"
                          alt=""
                        />
                        <h3>Watch eCommerce Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Designing sleek and modern watch eCommerce websites.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>TimeTrek</h3>
                      <p>A sophisticated watch eCommerce platform offering a curated selection of timepieces for every style. TimeTrek provides detailed product information, including high-quality images and customer reviews. The website’s user-friendly design ensures that watch enthusiasts can explore and purchase the perfect timepiece with ease.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--4-->
              <div class="col-lg-4 col-md-6" data-index="4">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/logo-02.webp"
                          alt=""
                        />
                        <h3>Furniture eCommerce Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Highlighting elegance and functionality in design.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Flamekast</h3>
                      <p>A stylish furniture eCommerce platform offering a curated selection of modern and classic designs. Flamekast provides detailed product descriptions, high-quality images, and an intuitive shopping experience. The website's clean layout ensures that customers can easily explore and purchase the perfect pieces to enhance their living spaces.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--5-->
              <div class="col-lg-4 col-md-6" data-index="5">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/logo-05.webp"
                          alt=""
                        />
                        <h3>Luxury Car eCommerce Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Crafting sleek and high-end eCommerce websites for luxury cars.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Exotec Cars</h3>
                      <p>A premium eCommerce platform for luxury car enthusiasts. Exotec Cars offers an exclusive selection of high-end vehicles, complete with detailed specifications and stunning visuals. The website’s sleek design and user-friendly interface make it easy for customers to browse, compare, and purchase their dream cars.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--6-->
              <div class="col-lg-4 col-md-6" data-index="6">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/logo-03.webp"
                          alt=""
                        />
                        <h3>Cycling eCommerce Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Emphasizing adventure with high-performance websites.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Noxbe</h3>
                      <p>A dedicated cycling eCommerce platform catering to both casual riders and serious cyclists. Noxbe features a wide range of bikes, accessories, and gear, all presented with clear product details and customer reviews. The website's streamlined design ensures that cycling enthusiasts can find and purchase everything they need for their next adventure.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>

              
               
              <!--1-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/logo-01.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Fashion eCommerce Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Tailoring vibrant and modern eCommerce websites.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--2-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/bg_amore.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/bg_amore.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/logo-04.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Beauty eCommerce Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating elegant and user-friendly beauty eCommerce websites.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--3-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/logo-06.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Watch eCommerce Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Designing sleek and modern watch eCommerce websites.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--4-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/logo-02.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Furniture eCommerce Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Highlighting elegance and functionality in design.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--5-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/logo-05.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Luxury Car eCommerce Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Crafting sleek and high-end eCommerce websites for luxury cars.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--6-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/logo-03.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Cycling eCommerce Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Emphasizing adventure with high-performance websites.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
        
          <div class="tab-pane fade" id="ecom-portfolio">
                <div class="row rowGap2">
                   
                <!--1-->
                <div class="col-lg-4 col-md-6" data-index="13">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/bg-restaturant.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/bg-restaturant.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/front-restaurant.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/logo-restaurant.webp"
                          alt=""
                        />
                        <h3>Restaurant Web Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Serving fresh, flavorful online experiences.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Ocean Grill</h3>
                      <p>A vibrant restaurant platform where culinary excellence meets digital innovation. Ocean Grill offers a rich menu experience, showcasing fresh ingredients and creative dishes. The website is designed to be both visually appealing and user-friendly, making it easy for customers to explore the menu, make reservations, and stay updated on special events.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--2-->
                <div class="col-lg-4 col-md-6" data-index="14">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-bg.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-bg.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-front.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-logo.webp"
                              alt=""
                            />
                            <h3>University Web Design</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Creating engaging online learning platforms.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Kingster University</h3>
                      <p>A comprehensive educational platform dedicated to academic excellence. Kingster University provides detailed course offerings, faculty profiles, and easy access to student resources. The website’s clean and modern design ensures that both prospective and current students can navigate effortlessly, supporting their educational journey from enrollment to graduation.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--3-->
                <div class="col-lg-4 col-md-6" data-index="15">
                 <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo-04.webp"
                          alt=""
                        />
                        <h3>Financial WordPress Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Ensuring security and user-friendliness in financial services.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Flamekast Estate & Builders</h3>
                      <p>A dynamic real estate platform offering a seamless experience for property buyers and sellers. Flamekast Estate & Builders features comprehensive property listings, expert consultation services, and a user-friendly interface. The website is designed to provide clear and accessible information, making it easier for users to navigate the real estate market with confidence.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
                </div>
                <!--4-->
                <div class="col-lg-4 col-md-6" data-index="16">
                 <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/bg-jewelery.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/bg-jewelery.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/front-jewelery.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/jewelery-logo.webp"
                              alt=""
                            />
                            <h3>Jewelry Web Design</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Showcasing luxury with elegant websites.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Zen Crystals of NY</h3>
                      <p>An exquisite jewelry platform that brings luxury and elegance to the forefront. Zen Crystals of NY offers a curated collection of fine jewelry, featuring detailed product descriptions and an easy-to-use shopping interface. The website’s sophisticated design ensures that customers can explore and purchase their favorite pieces with ease.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
                </div>
                <!--5-->
                <div class="col-lg-4 col-md-6" data-index="17">
                 <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/bg-pet.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/bg-pet.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/front-pet.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo-pet.webp"
                              alt=""
                            />
                            <h3>Pet Care Web Solutions</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Crafting user-friendly sites for pet lovers.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>PawCare</h3>
                      <p>A dedicated pet care platform designed to cater to pet owners and their furry friends. PawCare provides comprehensive services, including grooming tips, health advice, and an intuitive online booking system. The user-friendly website ensures that pet lovers can access all the resources they need to keep their pets happy and healthy.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
                </div>
                <!--6-->
                <div class="col-lg-4 col-md-6" data-index="18">
                 <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/bg-education1.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/bg-education1.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/front-education1.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/logo-education1.webp"
                              alt=""
                            />
                            <h3>Academic Web Design</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Designing educational platforms that connect and inspire.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Aspire Academy</h3>
                      <p>An educational platform committed to fostering academic growth and development. Aspire Academy offers a wide range of courses, student resources, and faculty support, all within a modern and accessible website. The platform is designed to provide a seamless educational experience, guiding students from enrollment through to successful completion of their studies.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
                </div>
                
                
                
                <!--1-->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--  <div class="webPortfolio-imageArea">-->
                <!--    <div class="main-imageArea">-->
                <!--      <div class="backImage">-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/bg-restaturant.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </div>-->
                <!--      <div class="frontImage">-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/bg-restaturant.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div class="right-imageArea">-->
                <!--      <img-->
                <!--        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/front-restaurant.webp"-->
                <!--        alt=""-->
                <!--      />-->
                <!--    </div>-->
                <!--  </div>-->
                <!--  <div class="webPortfolio-content">-->
                <!--    <div class="webPortfolio-contentArea">-->
                <!--      <div class="webPortfolio-contentTop">-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/logo-restaurant.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--        <h3>Restaurant Web Design</h3>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-contentBottom">-->
                <!--        <p>Serving fresh, flavorful online experiences.</p>-->
                <!--        <a href="/brief">-->
                <!--          Get Started-->
                <!--          <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--        </a>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--</div>-->
                <!--2-->
                <!-- <div class="col-lg-4 col-md-6">-->
                  <!--   <div class="single-webPortfolio">-->
                  <!--    <div class="webPortfolio-imageArea">-->
                  <!--      <div class="main-imageArea">-->
                  <!--        <div class="backImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-bg.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--        <div class="frontImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-bg.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--      <div class="right-imageArea">-->
                  <!--        <img-->
                  <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-front.webp"-->
                  <!--          alt=""-->
                  <!--        />-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="webPortfolio-content">-->
                  <!--      <div class="webPortfolio-contentArea">-->
                  <!--        <div class="webPortfolio-contentTop">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-logo.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--          <h3>University Web Design</h3>-->
                  <!--        </div>-->
                  <!--        <div class="webPortfolio-contentBottom">-->
                  <!--          <p>Creating engaging online learning platforms.</p>-->
                  <!--          <a href="/brief">-->
                  <!--            Get Started-->
                  <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                  <!--          </a>-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                <!--3-->
                <!--  <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo-04.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Financial WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Ensuring security and user-friendliness in financial services.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                <!--4-->
                <!-- <div class="col-lg-4 col-md-6">-->
                  <!--  <div class="single-webPortfolio">-->
                  <!--    <div class="webPortfolio-imageArea">-->
                  <!--      <div class="main-imageArea">-->
                  <!--        <div class="backImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/bg-jewelery.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--        <div class="frontImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/bg-jewelery.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--      <div class="right-imageArea">-->
                  <!--        <img-->
                  <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/front-jewelery.webp"-->
                  <!--          alt=""-->
                  <!--        />-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="webPortfolio-content">-->
                  <!--      <div class="webPortfolio-contentArea">-->
                  <!--        <div class="webPortfolio-contentTop">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/jewelery-logo.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--          <h3>Jewelry Web Design</h3>-->
                  <!--        </div>-->
                  <!--        <div class="webPortfolio-contentBottom">-->
                  <!--          <p>Showcasing luxury with elegant websites.</p>-->
                  <!--          <a href="/brief">-->
                  <!--            Get Started-->
                  <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                  <!--          </a>-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                <!--5-->
                <!-- <div class="col-lg-4 col-md-6">-->
                  <!--  <div class="single-webPortfolio">-->
                  <!--    <div class="webPortfolio-imageArea">-->
                  <!--      <div class="main-imageArea">-->
                  <!--        <div class="backImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/bg-pet.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--        <div class="frontImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/bg-pet.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--      <div class="right-imageArea">-->
                  <!--        <img-->
                  <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/front-pet.webp"-->
                  <!--          alt=""-->
                  <!--        />-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="webPortfolio-content">-->
                  <!--      <div class="webPortfolio-contentArea">-->
                  <!--        <div class="webPortfolio-contentTop">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo-pet.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--          <h3>Pet Care Web Solutions</h3>-->
                  <!--        </div>-->
                  <!--        <div class="webPortfolio-contentBottom">-->
                  <!--          <p>Crafting user-friendly sites for pet lovers.</p>-->
                  <!--          <a href="/brief">-->
                  <!--            Get Started-->
                  <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                  <!--          </a>-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                <!--6-->
                <!--<div class="col-lg-4 col-md-6">-->
                  <!--  <div class="single-webPortfolio">-->
                  <!--    <div class="webPortfolio-imageArea">-->
                  <!--      <div class="main-imageArea">-->
                  <!--        <div class="backImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/bg-education1.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--        <div class="frontImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/bg-education1.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--      <div class="right-imageArea">-->
                  <!--        <img-->
                  <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/front-education1.webp"-->
                  <!--          alt=""-->
                  <!--        />-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="webPortfolio-content">-->
                  <!--      <div class="webPortfolio-contentArea">-->
                  <!--        <div class="webPortfolio-contentTop">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/logo-education1.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--          <h3>Academic Web Design</h3>-->
                  <!--        </div>-->
                  <!--        <div class="webPortfolio-contentBottom">-->
                  <!--          <p>Designing educational platforms that connect and inspire.</p>-->
                  <!--          <a href="/brief">-->
                  <!--            Get Started-->
                  <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                  <!--          </a>-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                   
                   
                   
                   
                   
                   <!-- old b2c portfolio start -->
                    <!--1-->
              <!--      <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo-04.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Financial WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Ensuring security and user-friendliness in financial services.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                    <!--2-->
              <!--      <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/logo.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Beauty Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Offering a luxurious browsing experience with stylish design.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                    <!--3-->
              <!--      <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/logos-05.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Food WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Building appetizing websites for culinary delights.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
             
             
                <!--4-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/logo-06.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Footwear WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Combining style and functionality in footwear websites.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/logos-03.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Job Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Designing efficient and user-friendly job portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              
              
                <!--5-->
                  <!--<div class="col-lg-4 col-md-6">-->
                  <!--  <div class="single-webPortfolio">-->
                  <!--    <div class="webPortfolio-imageArea">-->
                  <!--      <div class="main-imageArea">-->
                  <!--        <div class="backImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--        <div class="frontImage">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--      <div class="right-imageArea">-->
                  <!--        <img-->
                  <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/right-image.webp"-->
                  <!--          alt=""-->
                  <!--        />-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <div class="webPortfolio-content">-->
                  <!--      <div class="webPortfolio-contentArea">-->
                  <!--        <div class="webPortfolio-contentTop">-->
                  <!--          <img-->
                  <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/logo-01.webp"-->
                  <!--            alt=""-->
                  <!--          />-->
                  <!--          <h3>Plant WordPress Website</h3>-->
                  <!--        </div>-->
                  <!--        <div class="webPortfolio-contentBottom">-->
                  <!--          <p>Creating vibrant websites for gardening enthusiasts.</p>-->
                  <!--          <a href="/brief">-->
                  <!--            Get Started-->
                  <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                  <!--          </a>-->
                  <!--        </div>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
              <!--    <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/logos-06.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>eCommerce Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating versatile and user-friendly eCommerce portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                   
                <!--6-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/logo-02.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Fitness WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating robust websites for fitness and gym enthusiasts.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!-- <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/logo-03.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Car WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Designing sleek websites for automotive enthusiasts.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              
              <!-- old b2c portfolio end -->
              
              
            </div>
            
          </div>
          
          <div class="tab-pane fade" id="portal-portfolio">
            <div class="row rowGap2">
                
                <!--1-->
                <div class="col-lg-4 col-md-6" data-index="19">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/bg-fitness.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/bg-fitness.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/front-fitness.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/logo-fitness.webp"
                          alt=""
                        />
                        <h3>Fitness & Nutrition Designs</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating dynamic online platforms for training and diet plans.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Pride Fitness and Nutrition</h3>
                      <p>A comprehensive fitness and nutrition platform designed to support a healthy lifestyle. Pride Fitness and Nutrition offers personalized workout plans, nutritional advice, and a user-friendly interface. The website’s clean and motivating design ensures users can easily track their progress and achieve their fitness goals.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--2-->
                <div class="col-lg-4 col-md-6" data-index="20">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/bg-massage.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/bg-massage.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/front-massage.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/logo-massage.webp"
                          alt=""
                        />
                        <h3>Skincare Website Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating beautiful and natural online experiences.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Aquicki</h3>
                      <p>A luxurious skincare platform dedicated to enhancing beauty through natural products. Aquicki features a range of skincare solutions with detailed product descriptions and a seamless shopping experience. The website’s elegant design and easy navigation make it simple for customers to find and purchase the perfect skincare regimen.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--3-->
                <div class="col-lg-4 col-md-6" data-index="21">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/bg-law.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/bg-law.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/front-law.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/logo-law.webp"
                          alt=""
                        />
                        <h3>Law Firm Portal Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Crafting professional and trustworthy online presences for legal services.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Davalos Defense</h3>
                      <p>A professional law firm portal designed to provide clients with easy access to legal services. Davalos Defense Law Firm offers detailed case information, attorney profiles, and a secure client portal. The website’s straightforward and polished design ensures clients can navigate legal resources with confidence and ease.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--4-->
                <div class="col-lg-4 col-md-6" data-index="22">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/bg-yoga.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/bg-yoga.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/front-yoga.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/logo-yoga.webp"
                          alt=""
                        />
                        <h3>Yoga & Wellness Portal</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating comfortable online environments for healthy living.</p>
                        <a href="javascript:void(0);">
                         View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Fassler Garden & Yoga</h3>
                      <p>A holistic yoga and wellness portal designed to nurture body and mind. Fassler Garden & Yoga offers a range of online classes, wellness resources, and personalized plans. The website’s serene and intuitive design ensures users can easily access the tools they need to enhance their physical and mental well-being.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--5-->
                <div class="col-lg-4 col-md-6" data-index="23">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/bg-art.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/bg-art.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/front-art.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/logo-art.webp"
                          alt=""
                        />
                        <h3>Creative Therapy Portal</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Designing digital spaces for expressive arts engagement.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Michelle Wolski</h3>
                      <p>A vibrant creative therapy portal dedicated to healing through artistic expression. Michelle Wolski Creative Therapy provides resources, workshops, and support for those exploring art as a form of therapy. The website’s colorful and engaging layout makes it easy for users to find inspiration and connect with therapeutic art practices.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--6-->
                <div class="col-lg-4 col-md-6" data-index="24">
                <div class="single-webPortfolio static_portfolio_2">
                   <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/bg-cosmetics.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/bg-cosmetics.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/front-cosmetics.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/logo-cosmetics.webp"
                          alt=""
                        />
                        <h3>Cosmetics Website Design</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating stunning online stores for beauty brands.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>TB Cosmetics</h3>
                      <p>An elegant cosmetics website that showcases a curated selection of beauty products. TB Cosmetics offers detailed product descriptions, tutorials, and a seamless shopping experience. The website’s stylish design and user-friendly interface ensure that customers can discover and purchase their favorite beauty essentials with ease.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                
                
                <!--1--> 
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--  <div class="webPortfolio-imageArea">-->
                <!--    <div class="main-imageArea">-->
                <!--      <div class="backImage">-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/bg-fitness.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </div>-->
                <!--      <div class="frontImage">-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/bg-fitness.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div class="right-imageArea">-->
                <!--      <img-->
                <!--        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/front-fitness.webp"-->
                <!--        alt=""-->
                <!--      />-->
                <!--    </div>-->
                <!--  </div>-->
                <!--  <div class="webPortfolio-content">-->
                <!--    <div class="webPortfolio-contentArea">-->
                <!--      <div class="webPortfolio-contentTop">-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/logo-fitness.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--        <h3>Fitness & Nutrition Designs</h3>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-contentBottom">-->
                <!--        <p>Creating dynamic online platforms for training and diet plans.</p>-->
                <!--        <a href="/brief">-->
                <!--          Get Started-->
                <!--          <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--        </a>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--</div>-->
                <!--2-->
                <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/bg-massage.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/bg-massage.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/front-massage.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/logo-massage.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Skincare Website Design</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating beautiful and natural online experiences.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                <!--3-->
                <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/bg-law.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/bg-law.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/front-law.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/logo-law.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Law Firm Portal Design</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Crafting professional and trustworthy online presences for legal services.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                <!--4-->
                <!--  <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/bg-yoga.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/bg-yoga.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/front-yoga.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/logo-yoga.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Yoga & Wellness Portal</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating comfortable online environments for healthy living.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                <!--5-->
                <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/bg-art.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/bg-art.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/front-art.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/logo-art.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Creative Therapy Portal</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Designing digital spaces for expressive arts engagement.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                <!--6-->
                <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/bg-cosmetics.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/bg-cosmetics.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/front-cosmetics.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/logo-cosmetics.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Cosmetics Website Design</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating stunning online stores for beauty brands.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--      <div class="webPortfolio-imageArea">-->
                <!--        <div class="main-imageArea">-->
                <!--          <div class="backImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/main-image.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--          <div class="frontImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/main-image.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--        </div>-->
                <!--        <div class="right-imageArea">-->
                <!--          <img-->
                <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/right-image.webp"-->
                <!--            alt=""-->
                <!--          />-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-content">-->
                <!--        <div class="webPortfolio-contentArea">-->
                <!--          <div class="webPortfolio-contentTop">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/logos-04.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--            <h3>Education Portal Website</h3>-->
                <!--          </div>-->
                <!--          <div class="webPortfolio-contentBottom">-->
                <!--            <p>Designing engaging and resourceful education portals.</p>-->
                <!--            <a href="/brief">-->
                <!--              Get Started-->
                <!--              <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--            </a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
              
                <!--3-->
              <!--  <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/logos-01.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>News Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Delivering comprehensive and user-friendly news portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--4-->
               <!--<div class="col-lg-4 col-md-6">-->
               <!--     <div class="single-webPortfolio">-->
               <!--       <div class="webPortfolio-imageArea">-->
               <!--         <div class="main-imageArea">-->
               <!--           <div class="backImage">-->
               <!--             <img-->
               <!--               src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"-->
               <!--               alt=""-->
               <!--             />-->
               <!--           </div>-->
               <!--           <div class="frontImage">-->
               <!--             <img-->
               <!--               src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"-->
               <!--               alt=""-->
               <!--             />-->
               <!--           </div>-->
               <!--         </div>-->
               <!--         <div class="right-imageArea">-->
               <!--           <img-->
               <!--             src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/right-image.webp"-->
               <!--             alt=""-->
               <!--           />-->
               <!--         </div>-->
               <!--       </div>-->
               <!--       <div class="webPortfolio-content">-->
               <!--         <div class="webPortfolio-contentArea">-->
               <!--           <div class="webPortfolio-contentTop">-->
               <!--             <img-->
               <!--               src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/logo-01.webp"-->
               <!--               alt=""-->
               <!--             />-->
               <!--             <h3>Plant WordPress Website</h3>-->
               <!--           </div>-->
               <!--           <div class="webPortfolio-contentBottom">-->
               <!--             <p>Creating vibrant websites for gardening enthusiasts.</p>-->
               <!--             <a href="/brief">-->
               <!--               Get Started-->
               <!--               <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
               <!--             </a>-->
               <!--           </div>-->
               <!--         </div>-->
               <!--       </div>-->
               <!--     </div>-->
               <!--   </div>-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/logos-03.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Job Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Designing efficient and user-friendly job portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--5-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/logos-05.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Automotive Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Building dynamic and engaging automotive portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              
              <!-- soccer -->
              
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/logos-02.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Sports Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Providing dynamic and interactive sports portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              
              
              <!--6-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/logos-06.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>eCommerce Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating versatile and user-friendly eCommerce portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
          <div class="tab-pane fade" id="non-profit">
            <div class="row rowGap2">
                <!--1-->
                <div class="col-lg-4 col-md-6" data-index="25">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/bg-legal.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/bg-legal.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/front-legal.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/logo-legal.webp"
                              alt=""
                            />
                            <h3>Law Firm Website Design</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Developing professional online solutions for law practices.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Texas Legal Solutions PLLC</h3>
                      <p>A comprehensive law firm website designed to provide expert legal services. Texas Legal Solutions PLLC offers detailed case information, attorney profiles, and a user-friendly client portal. The website’s professional and accessible design ensures clients can easily navigate legal resources and connect with their legal team.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--2-->
                <div class="col-lg-4 col-md-6" data-index="26">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/bg-medical.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/bg-medical.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/front-medical.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/logo-medical.webp"
                              alt=""
                            />
                            <h3>CPR Training Website Design</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Designing user-friendly platforms for lifesaving education.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Longevity CPR</h3>
                      <p>A specialized CPR training website dedicated to saving lives through education. Longevity CPR offers a range of certification courses, instructional materials, and easy-to-access resources. The website’s clear and organized design ensures users can quickly find and enroll in the training programs they need.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--3-->
                <div class="col-lg-4 col-md-6" data-index="27">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/bg-nonprofit.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/bg-nonprofit.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/front-nonprofit.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/logo-nonprofit.webp"
                              alt=""
                            />
                            <h3>Nonprofit Website Design</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Creating impactful online platforms for charitable causes</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Bucks County Charity Foundation</h3>
                      <p>A compassionate nonprofit website focused on making a positive impact in the community. Bucks County Charity Foundation provides information on ongoing projects, donation opportunities, and volunteer programs. The website’s heartfelt and engaging design makes it easy for visitors to get involved and support meaningful causes.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--4-->
                <div class="col-lg-4 col-md-6" data-index="28">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/bg-pet.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/bg-pet.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/front-pet.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/logo-pet.webp"
                              alt=""
                            />
                            <h3>Pet Rescue Website Design</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Building heartwarming online platforms for pet adoption and care.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Furrescue</h3>
                      <p>A compassionate pet rescue website dedicated to saving and rehoming animals in need. Furrescue offers information on adoptable pets, volunteer opportunities, and donation options. The website’s heartwarming design and easy navigation make it simple for visitors to get involved and help give pets a second chance at life.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--5-->
                <div class="col-lg-4 col-md-6" data-index="29">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                      <div class="webPortfolio-imageArea">
                        <div class="main-imageArea">
                          <div class="backImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"
                              alt=""
                            />
                          </div>
                          <div class="frontImage">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="right-imageArea">
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/right-image.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="webPortfolio-content">
                        <div class="webPortfolio-contentArea">
                          <div class="webPortfolio-contentTop">
                            <img
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/logo-01.webp"
                              alt=""
                            />
                            <h3>Plant WordPress Website</h3>
                          </div>
                          <div class="webPortfolio-contentBottom">
                            <p>Creating vibrant websites for gardening enthusiasts.</p>
                            <a href="javascript:void(0);">
                              View Project
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Eco Life</h3>
                      <p>A vibrant plant-focused WordPress website designed to inspire a greener lifestyle. Eco Life provides tips on plant care, sustainable living, and an online shop for eco-friendly products. The website’s fresh and clean design ensures users can easily access valuable resources and make environmentally conscious choices.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--6-->
                <div class="col-lg-4 col-md-6" data-index="30">
                <div class="single-webPortfolio static_portfolio_2">
                  <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/logos-01.webp"
                          alt=""
                        />
                        <h3>News Portal Website</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Delivering comprehensive and user-friendly news portals.</p>
                        <a href="javascript:void(0);">
                          View Project
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Elite News</h3>
                      <p>A dynamic news portal website offering up-to-the-minute news coverage on various topics. Elite News features articles, opinion pieces, and multimedia content, all presented in a sleek and modern interface. The website’s efficient design allows readers to stay informed and engaged with the latest happenings around the world.
</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                
                
                <!--1--> 
                <!--<div class="col-lg-4 col-md-6">-->
                 <!--   <div class="single-webPortfolio">-->
                 <!--     <div class="webPortfolio-imageArea">-->
                 <!--       <div class="main-imageArea">-->
                 <!--         <div class="backImage">-->
                 <!--           <img-->
                 <!--             src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/bg-legal.webp"-->
                 <!--             alt=""-->
                 <!--           />-->
                 <!--         </div>-->
                 <!--         <div class="frontImage">-->
                 <!--           <img-->
                 <!--             src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/bg-legal.webp"-->
                 <!--             alt=""-->
                 <!--           />-->
                 <!--         </div>-->
                 <!--       </div>-->
                 <!--       <div class="right-imageArea">-->
                 <!--         <img-->
                 <!--           src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/front-legal.webp"-->
                 <!--           alt=""-->
                 <!--         />-->
                 <!--       </div>-->
                 <!--     </div>-->
                 <!--     <div class="webPortfolio-content">-->
                 <!--       <div class="webPortfolio-contentArea">-->
                 <!--         <div class="webPortfolio-contentTop">-->
                 <!--           <img-->
                 <!--             src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/logo-legal.webp"-->
                 <!--             alt=""-->
                 <!--           />-->
                 <!--           <h3>Law Firm Website Design</h3>-->
                 <!--         </div>-->
                 <!--         <div class="webPortfolio-contentBottom">-->
                 <!--           <p>Developing professional online solutions for law practices.</p>-->
                 <!--           <a href="/brief">-->
                 <!--             Get Started-->
                 <!--             <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                 <!--           </a>-->
                 <!--         </div>-->
                 <!--       </div>-->
                 <!--     </div>-->
                 <!--   </div>-->
                 <!-- </div>-->
                <!--2-->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--      <div class="webPortfolio-imageArea">-->
                <!--        <div class="main-imageArea">-->
                <!--          <div class="backImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/bg-medical.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--          <div class="frontImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/bg-medical.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--        </div>-->
                <!--        <div class="right-imageArea">-->
                <!--          <img-->
                <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/front-medical.webp"-->
                <!--            alt=""-->
                <!--          />-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-content">-->
                <!--        <div class="webPortfolio-contentArea">-->
                <!--          <div class="webPortfolio-contentTop">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/logo-medical.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--            <h3>CPR Training Website Design</h3>-->
                <!--          </div>-->
                <!--          <div class="webPortfolio-contentBottom">-->
                <!--            <p>Designing user-friendly platforms for lifesaving education.</p>-->
                <!--            <a href="/brief">-->
                <!--              Get Started-->
                <!--              <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--            </a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--3-->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--      <div class="webPortfolio-imageArea">-->
                <!--        <div class="main-imageArea">-->
                <!--          <div class="backImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/bg-nonprofit.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--          <div class="frontImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/bg-nonprofit.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--        </div>-->
                <!--        <div class="right-imageArea">-->
                <!--          <img-->
                <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/front-nonprofit.webp"-->
                <!--            alt=""-->
                <!--          />-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-content">-->
                <!--        <div class="webPortfolio-contentArea">-->
                <!--          <div class="webPortfolio-contentTop">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/logo-nonprofit.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--            <h3>Nonprofit Website Design</h3>-->
                <!--          </div>-->
                <!--          <div class="webPortfolio-contentBottom">-->
                <!--            <p>Creating impactful online platforms for charitable causes</p>-->
                <!--            <a href="/brief">-->
                <!--              Get Started-->
                <!--              <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--            </a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--4-->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--      <div class="webPortfolio-imageArea">-->
                <!--        <div class="main-imageArea">-->
                <!--          <div class="backImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/bg-pet.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--          <div class="frontImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/bg-pet.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--        </div>-->
                <!--        <div class="right-imageArea">-->
                <!--          <img-->
                <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/front-pet.webp"-->
                <!--            alt=""-->
                <!--          />-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-content">-->
                <!--        <div class="webPortfolio-contentArea">-->
                <!--          <div class="webPortfolio-contentTop">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/logo-pet.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--            <h3>Pet Rescue Website Design</h3>-->
                <!--          </div>-->
                <!--          <div class="webPortfolio-contentBottom">-->
                <!--            <p>Building heartwarming online platforms for pet adoption and care.</p>-->
                <!--            <a href="/brief">-->
                <!--              Get Started-->
                <!--              <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--            </a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--5-->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--      <div class="webPortfolio-imageArea">-->
                <!--        <div class="main-imageArea">-->
                <!--          <div class="backImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--          <div class="frontImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--        </div>-->
                <!--        <div class="right-imageArea">-->
                <!--          <img-->
                <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/right-image.webp"-->
                <!--            alt=""-->
                <!--          />-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-content">-->
                <!--        <div class="webPortfolio-contentArea">-->
                <!--          <div class="webPortfolio-contentTop">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/logo-01.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--            <h3>Plant WordPress Website</h3>-->
                <!--          </div>-->
                <!--          <div class="webPortfolio-contentBottom">-->
                <!--            <p>Creating vibrant websites for gardening enthusiasts.</p>-->
                <!--            <a href="/brief">-->
                <!--              Get Started-->
                <!--              <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--            </a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--6-->
                <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/logos-01.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>News Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Delivering comprehensive and user-friendly news portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
                 

                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="single-webPortfolio">-->
                <!--      <div class="webPortfolio-imageArea">-->
                <!--        <div class="main-imageArea">-->
                <!--          <div class="backImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/main-image.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--          <div class="frontImage">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/main-image.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--          </div>-->
                <!--        </div>-->
                <!--        <div class="right-imageArea">-->
                <!--          <img-->
                <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/right-image.webp"-->
                <!--            alt=""-->
                <!--          />-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="webPortfolio-content">-->
                <!--        <div class="webPortfolio-contentArea">-->
                <!--          <div class="webPortfolio-contentTop">-->
                <!--            <img-->
                <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/logos-04.webp"-->
                <!--              alt=""-->
                <!--            />-->
                <!--            <h3>Education Portal Website</h3>-->
                <!--          </div>-->
                <!--          <div class="webPortfolio-contentBottom">-->
                <!--            <p>Designing engaging and resourceful education portals.</p>-->
                <!--            <a href="/brief">-->
                <!--              Get Started-->
                <!--              <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
                <!--            </a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
              
              
                  
                  
                  
                  
                  
                     
                  
      
      
      
                
                
              
              
                
              
                <!--3-->
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/logos-02.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Sports Portal Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Providing dynamic and interactive sports portals.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--4-->
      
               
              <!--5-->
              
              <!--<div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/logo-06.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Footwear WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Combining style and functionality in footwear websites.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            
              
              <!-- soccer -->
              
              
              <!--6-->
              
              <!--  <div class="col-lg-4 col-md-6">-->
              <!--  <div class="single-webPortfolio">-->
              <!--    <div class="webPortfolio-imageArea">-->
              <!--      <div class="main-imageArea">-->
              <!--        <div class="backImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--        <div class="frontImage">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/main-image.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--        </div>-->
              <!--      </div>-->
              <!--      <div class="right-imageArea">-->
              <!--        <img-->
              <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/right-image.webp"-->
              <!--          alt=""-->
              <!--        />-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="webPortfolio-content">-->
              <!--      <div class="webPortfolio-contentArea">-->
              <!--        <div class="webPortfolio-contentTop">-->
              <!--          <img-->
              <!--            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/logo-02.webp"-->
              <!--            alt=""-->
              <!--          />-->
              <!--          <h3>Fitness WordPress Website</h3>-->
              <!--        </div>-->
              <!--        <div class="webPortfolio-contentBottom">-->
              <!--          <p>Creating robust websites for fitness and gym enthusiasts.</p>-->
              <!--          <a href="/brief">-->
              <!--            Get Started-->
              <!--            <i class="fa fa-arrow-right" aria-hidden="true"></i>-->
              <!--          </a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
          
          
        </div>
      </div>
        </div>
      </div>
      <div class="container mt-4">
          <div class="row">
              <div class="col-lg-12 col-sm-12 text-center">
                <ul class="partnersUl after-portfolio justify-content-center">
                  <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/after-porfolio/award.png" class="award" alt="" />
                  </li>
                  <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/after-porfolio/startup.png?v=1" alt="" />
                  </li>
                  <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/after-porfolio/fortune-500.png" alt="" />
                  </li>
                </ul>
                <div class="portfolio-bottom-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                  <p><em>From Startups to Fortune 500 Companies: Trusted by Over 100 Clients with a 4.8/5 Rating!</em></p>
                <div class="link-area">
                    <a href="{{ route('front.portfolio') }}" class="primary">View More Portfolio</a>
                </div>
              </div>
          </div>
      </div>
    </section>
    
    <!-------------------------- Scrolling Section ---------------------------->
    
    <!-------------------------- Testimonial Section ---------------------------->
    <x-testimonial-section-dark />
    
    
    <section class="section-padding pb-0 pt-double pt-default-mob">
      <div class="container">
        <div class="getStartedCTA">
          <div class="row">
            <div class="col-md-6">
              <div class="section-heading">
                <h2>Are you still scrolling?</h2>
                <p>
                  Stop scrolling and start achieving your digital goals with us!
                  Let's make your vision a reality.
                </p>
              </div>
              <div class="link-area">
                <a href="#" class="offer-btn">Activate My 70% Off Coupon</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="ctaImageArea">
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/cta/getStarted/woman.webp" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--<section class="section-padding split-section gradient-circle light-gradient rightCenter-gradient">
      <div class="container">
        <div class="row align-items-center mobile-col-order-change">
          <div class="col-lg-7 col-md-6 position-relative">
            <div class="lightBlue-area benefits-imagesArea parallax-container">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/benefits-section/1.webp" alt="" />
              <div class="benefits-images">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/benefits-section/2.webp"
                  alt=""
                  class="right-center parallax-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/benefits-section/3.webp"
                  alt=""
                  class="left-bottom parallax-image"
                  data-speed="0.05"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 position-relative">
            <div class="dark-area">
              <div class="section-heading">
                <h2>Benefits of Using Our Custom Website Services</h2>
                <p>You are turning your visitors into customers with optimized design and user experience.</p>
                <ul>
                  <li>Stunning Designs</li>
                  <li>Robust Security</li>
                  <li>Branding Excellence</li>
                  <li>Smooth Navigation</li>
                  <li>Enhanced Performance</li>
                  <li>Custom Integrations</li>
                </ul>
              </div>
              <div class="link-area">
                <a href="/brief" class="primary">Get Started Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <!-------------------------- ROI Section ---------------------------->
    <section class="section-padding overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="section-heading">
              <h2>Proven Success in Transforming and Achieving Digital Excellence</h2>
              <p>We have helped businesses enhance their online presence, boost engagement, and achieve their digital goals. Partner with us to elevate your business with advanced strategies and custom designs that deliver outstanding digital results.</p>
            </div>
            <div class="link-area">
                <a href="" class="primary offer-btn">Activate My 70% Off Coupon</a>
              </div>
          </div>
          <div class="col-md-6">
            <div class="progress-containerArea">
              <div
                class="progress-container"
                data-countTo="99"
                style="--percent: 0%"
              >
                <h3>Clickthrough Rate</h3>
                <div class="progress-area primary-first">
                  <div class="progress-inner">
                    <div class="progress-fill"></div>
                  </div>
                  <div class="progress-count"><span class="count"></span>%</div>
                </div>
              </div>
              <div
                class="progress-container"
                data-countTo="77"
                style="--percent: 0%"
              >
                <h3>The Quality Score</h3>
                <div class="progress-area primary-light">
                  <div class="progress-inner">
                    <div class="progress-fill"></div>
                  </div>
                  <div class="progress-count"><span class="count"></span>%</div>
                </div>
              </div>
              <div
                class="progress-container"
                data-countTo="89"
                style="--percent: 0%"
              >
                <h3>The Impression Share</h3>
                <div class="progress-area primary-extraLight">
                  <div class="progress-inner">
                    <div class="progress-fill"></div>
                  </div>
                  <div class="progress-count"><span class="count"></span>%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <div class="top-one">
              <p>Top 1%</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--<section class="section-padding gradient-circle rightCenter-gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading">
              <p class="topHeading">Supercharge Your Online Presence</p>
              <h2>Captivate and Retain Customers with Custom<br>Web Solutions</h2>
              <p>Website Digitals crafts custom websites that bring your vision to life. Our expert developers create user-friendly, SEO-optimized sites that convert visitors into 
              loyal customers. Enhance your digital presence and build lasting connections with tailored web solutions and CMS options. Transform your online experience today!</p>
            </div>
            <ul class="partnersUl">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/1.webp" alt="" />
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/3.webp" alt="" />
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/2.webp" alt="" />
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="convertCustomer-area">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/ipad.webp" alt="" />
              <div class="convertCustomer-images parallax-container">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/iphone.webp"
                  alt=""
                  class="bottom-left parallax-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/graph.webp"
                  alt=""
                  class="top-left parallax-image"
                  data-speed="0.035"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/editBar.webp"
                  alt=""
                  class="bottom-right parallax-image"
                  data-speed="0.05"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <!-------------------------- momentum Section ---------------------------->
    <!--<section class="section-padding dark-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>The Momentum Process</h2>
            </div>
          </div>
          <div class="col-12">
            <ul class="process-area" id="process-area">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/1.svg" alt="" />
                <div class="process-detail">
                  <h3>Web Strategy</h3>
                  <p>We analyze, research, and set goals to align your digital efforts with business objectives.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 185 41"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c0,16.8,12.1,22.7,26.5,27.5C48.5,36.2,72.2,34,93,34c29.8,0,59.3-2,89-2"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M183,31c-3-2-6-3.8-9-6"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M169,39c4.3-2.2,8.7-3.9,12-8"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/2.svg" alt="" />
                <div class="process-detail">
                  <h3>Planning & Information Architecture</h3>
                  <p>Building the foundations for seamless user experiences.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 187 89"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c37.9,0.9,75.9,2.3,113.9,3.8c15.7,0.6,36.6,0.4,50.4,8.9c14.5,8.9,21,29.1,18.2,45c-1.2,6.6-4.3,12.2-7.6,17.9c-1.2,2-3.2,6.6-5,7.4"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,76v11"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,87c3.4-0.7,6.5-1,10-1"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/3.svg" alt="" />
                <div class="process-detail">
                  <h3>Creative Design</h3>
                  <p>We bring your brand to life through stunning visuals and innovative design concepts.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 85 96"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M82.5,1.5c0,16.9,1,34,1,50.6c0,7.1-1.6,14.2-2,21.4C81.1,80.2,74,84,68.4,85.9C55,90.7,39,86.2,25.5,85.5c-7.5-0.4-14.5-2-22-2"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M1.5,83.5c1.2,3.5,5.7,7.8,8,11"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M9.5,75.5c0,3.6-5.6,6.3-8,8"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/4.svg" alt="" />
                <div class="process-detail">
                  <h3>Responsive Development</h3>
                  <p>Ensures your website looks beautiful and functions seamlessly across all devices and screen sizes.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 187 89"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c37.9,0.9,75.9,2.3,113.9,3.8c15.7,0.6,36.6,0.4,50.4,8.9c14.5,8.9,21,29.1,18.2,45c-1.2,6.6-4.3,12.2-7.6,17.9c-1.2,2-3.2,6.6-5,7.4"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,76v11"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,87c3.4-0.7,6.5-1,10-1"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/5.svg" alt="" />
                <div class="process-detail">
                  <h3>Quality Assurance (QA)</h3>
                  <p>From functionality and performance to compatibility and security, we make your website error-free.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 185 41"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c0,16.8,12.1,22.7,26.5,27.5C48.5,36.2,72.2,34,93,34c29.8,0,59.3-2,89-2"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M183,31c-3-2-6-3.8-9-6"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M169,39c4.3-2.2,8.7-3.9,12-8"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/6.svg" alt="" />
                <div class="process-detail">
                  <h3>Launch & Optimization</h3>
                  <p>Monitor performance metrics, gather user feedback, and implement optimizations.</p>
                  <div class="process-text"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>-->

    <div class="d-none d-sm-block">

    <!-------------------------- FAQs Section ---------------------------->
    </div>
    
    <!--<section class="section-padding gradient-circle rightCenter-gradient pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Frequently Asked Questions</h2>
            </div>
          </div>
          <div class="col-lg-11">
            <div class="accordion faq-accordion" id="faq-accordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-1">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-1"
                    aria-expanded="true"
                    aria-controls="faq-1"
                  >What makes Website Digitals the best no-code website builder?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our platform offers intuitive design tools and powerful features, making website creation easy and efficient without any coding required.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-2">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-2"
                    aria-expanded="false"
                    aria-controls="faq-2"
                  >How does your lead generation website builder work?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our builder is optimized for capturing leads with built-in forms, landing pages, and CRM integrations to maximize your conversion rates.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-3">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-3"
                    aria-expanded="false"
                    aria-controls="faq-3"
                  >Can you help me find awebsite builder company near me?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, Website Digitals serves clients globally and can connect you with local experts for personalized support.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-4">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-4"
                    aria-expanded="false"
                    aria-controls="faq-4"
                  >Is Website Digitals the best responsive website builder?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Absolutely! Our builder ensures your site looks great and functions perfectly on any device, providing a seamless user experience.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-5">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-5"
                    aria-expanded="false"
                    aria-controls="faq-5"
                  >Why is Website Digitals considered the best DIY website builder for SEO?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our platform includes SEO tools and guidelines, making optimizing your site and improving search engine rankings easy.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-6">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-6"
                    aria-expanded="false"
                    aria-controls="faq-6"
                  >What features make Website Digitals mobile friendly website builder?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We prioritize mobile responsiveness with adaptive layouts, touch-friendly navigation, and fast load times to ensure an excellent device experience.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-7">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-7"
                    aria-expanded="false"
                    aria-controls="faq-7"
                  >How does Website Digital’s low code website builder benefit developers?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our low-code builder allows developers to customize and extend functionality with minimal coding, speeding up the development process.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-8">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-8"
                    aria-expanded="false"
                    aria-controls="faq-8"
                  >What is abespoke website builder and how can Website Digitals help?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Abespoke website builder offers tailored solutions to meet your unique business needs. Website Digitals creates custom designs and functionalities that align 
                    perfectly with your vision.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-9">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-9"
                    aria-expanded="false"
                    aria-controls="faq-9"
                  >What is the best no code website builder for beginners?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Website Digitals is ideal for beginners due to its user-friendly interface, comprehensive tutorials, and excellent customer support.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-10">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-10"
                    aria-expanded="false"
                    aria-controls="faq-10"
                  >Why choose Website Digitals as the best website builder with SEO features?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We offer integrated SEO tools, automatic sitemap generation, and best practices to help your site rank higher on search engines effortlessly.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    
    <!-------------------------- Blog Section ---------------------------->
    <x-blog-section />
    

@push('customScripts')



@endpush

@endsection