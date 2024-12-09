@extends('frontend.layouts.master')
@push('customStyles')
<style>
    html, body{
        overflow-x: hidden;
    }
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
   
   .banner-form{
        max-width: 35rem !important;
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

.first-trustedwebdesignlogo img, .second-trustedwebdesignlogo img{
    filter: grayscale(100%) brightness(60%) contrast(100%);
    opacity: .3;
    height: 7rem;
    object-fit: contain;
}

.bg-logos{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    text-align: center;
}
    

.text-number {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 6rem;
    background-color: var(--primary);
    padding: 1.5rem 1.8rem;
}

.text-number .text {
    flex: 1;
    margin-bottom: 0;
    font-size: 1rem;
    color: #fff;
}

.text-number .number {
    margin-left: .8rem;
    margin-bottom: 0;
    font-size: 3rem;
    font-weight: 700;
    color: var(--primary);
    background-color: #fff;
    padding: 1rem 1.5rem;
    border-radius: 50%;
}
.sideheadingh3{
    color: #000;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 0;
}
.why-choose-row{
    gap: 4rem 0;
    position: relative;
    margin-top: 2rem;
}
.why-choose-row::before{
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: url('https://www.websitedigitals.com/frontend/assets/images/magento-webdesign/line.png') no-repeat center center;
    background-size: contain;
    height: 109%;
    width: 100%;
}
</style>


@endpush
@section('container')
<section class="home-banner-area" id="wd-7-banner">
      <section class="home-banner gradient-circle leftCenter-gradient">
        <div class="container banner-center-container height-100">
          <div class="row height-100">
            <div class="col-lg-6 col-sm-12 banner-col-wd-1 my-auto">
              <div class="banner-heading">
                <p class="text-white">Custom Website Development Solution</p>
                <h1 class="text-white">Top e-Commerce Development Company</h1>
                <p class="text-white">Design, build, and scale with ease. Our powerful website builder and advanced business tools are designed to support your success every step of the way.</p>
              </div>
                <ul class="points-green-tick mt-3 mb-4 text-white">
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                </ul>
                <form class="banner-form text-center" action="{{ route('brief') }}" method="GET" id="bannerForm">
                  @csrf
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/pencil_2.png" alt="">
                    <input type="text" name="company_name" placeholder="Enter Your Business Name Here...">
                    <button type="submit" class="btn_black">Let's Build</button>
                  </form>
            </div>
            <div class="col-lg-6 col-sm-12 my-auto hidemobile">
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/ecommerce-webdesign/1.png" width="100%" alt="">
            </div>
          </div>
          
        </div>
      </section>
    </section>
    
    <!----------------------------------- Features Section --------------------------------------->
    <section class="section-padding primary-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 my-auto">
                    <div class="section-heading">
                        <h2><span class="color-primary">eCommerce</span> Development Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                        nostrud exercitation</p>
                    </div>
                    
                    <div class="heading-para-div">
                        <h3 class="first-heading active" onclick="toggleParagraph('first')">
                            <span class="color-primary">01</span> eCommerce Web Design
                        </h3>
                        <p class="first-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                        <h3 class="second-heading" onclick="toggleParagraph('second')">
                            <span class="color-primary">02</span> eCommerce Web Design
                        </h3>
                        <p class="second-para hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                        <h3 class="third-heading" onclick="toggleParagraph('third')">
                            <span class="color-primary">03</span> eCommerce Web Design
                        </h3>
                        <p class="third-para hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                        <h3 class="fourth-heading" onclick="toggleParagraph('fourth')">
                            <span class="color-primary">04</span> eCommerce Web Design
                        </h3>
                        <p class="fourth-para hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12">
                    <form method="post" action="" class="contactPage-formArea" id="contactformsec">
                      <div class="row">
                        <div class="col-12 text-center bannerformheading">
                            <p class="mb-0">Chat With Us To</p>
                            <h2>Avail 75% Discount</h2>
                        </div>
                        <div class="col-md-12">
                          <div class="basic-inputArea">
                            <input type="text" placeholder="Your Name" name="name" required />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="basic-inputArea">
                            <input type="email" placeholder="Email Address" name="email" required />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="basic-inputArea">
                            <input type="text" class="phone-number" placeholder="Phone Number" name="phone" required />
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="basic-inputArea">
                            <textarea placeholder="How Can We Help?" name="message"></textarea>
                          </div>
                        </div>
                        <div class="col-12 text-center">
                          <div class="link-area">
                            <button type="submit" name="submit">Talk To Our Design Consultant</button>
                          </div>
                        </div>
                      </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    
    <!----------------------------------- Web Design Agency Section --------------------------------------->
    <section class="section-padding dark-section">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="section-heading text-center">
                      <h2>Trusted Web Design Agency</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    
                    <div class="owl-carousel owl-theme first-webdesign-logos-slider">
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo1.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo2.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo3.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo4.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo5.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo6.png" width="100%" alt="">
                        </div>
                    </div>
                    
                    <div class="owl-carousel owl-theme second-webdesign-logos-slider">
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo7.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo8.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo9.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo1.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo2.png" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/logo3.png" width="100%" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
    </section>
    
    <!------------------------------------ Portfolio Section ---------------------------------------->
    <section class="section-padding z-index1" id="portfolio-sec">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-heading text-center">
                    <h2>Our Success <span class="color-primary">Stories</span> and <span class="color-primary">Milestones</span></h2>
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
    
    <!-------------------------- momentum Section ---------------------------->
    <section class="section-padding dark-section">
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
    </section>
    
    <!-------------------------- Magento Specialist Section ---------------------------->
    <section class="section-padding position-relative" style="background-color: #ffffff;">
        <div class="bg-logos">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/shopify-webdesign/2.png" width="80%" alt="" style="opacity: .5;">
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="section-heading text-center mb-0">
                    <h2>Speak With Our Reliable <span class="color-primary">eCommerce Development</span> Experts</h2>
                </div>
                <div class="link-area mt-4">
                    <a href="" class="primary offer-btn">Book A Consultation</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-------------------------- Featured Website Design Section ---------------------------->
    <section class="section-padding primary-extra-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="section-heading">
                        <h2>Featured Website <span class="color-primary">Redesigns</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                      </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 col-sm-12">
                    <div class="basic-tabs small-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" href="#cms-website"><span>CMS Website</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#ecommerce-website"><span>E-commerce Website</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#wordpress-website"><span>WordPress Website</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#portal-website"><span>Portal Website</span></a>
                            </li>
                        </ul>
                      </div>
                      <div class="tab-content web-portfolio-content">
                            <div class="tab-pane fade active show" id="cms-website">
                                <h3 class="before-after-tab-heading">Before & <span class="color-primary">After</span></h3>
                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/cms-before-after.png" width="100%" alt="">
                            </div>
                            <div class="tab-pane fade" id="ecommerce-website">
                                <h3 class="before-after-tab-heading">Before & <span class="color-primary">After</span></h3>
                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/ecommerce-before-after.png" width="100%" alt="">
                            </div>
                            <div class="tab-pane fade" id="wordpress-website">
                                <h3 class="before-after-tab-heading">Before & <span class="color-primary">After</span></h3>
                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/wordpress-before-after.png" width="100%" alt="">
                            </div>
                            <div class="tab-pane fade" id="portal-website">
                                <h3 class="before-after-tab-heading">Before & <span class="color-primary">After</span></h3>
                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/portal-before-after.png" width="100%" alt="">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-------------------------- Scrolling Section ---------------------------->
    <section class="section-padding pt-double pt-default-mob">
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
                <a href="#" class="offer-btn">Get Free Insights</a>
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
    
    <!-------------------------- FAQs Section ---------------------------->
    <section class="section-padding gradient-circle rightCenter-gradient pt-0">
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
                  >What makes Website Digitals the best content writing services for websites?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Website Digitals offers tailored, SEO-optimized content that engages your audience and drives traffic to your site, making us the best content writing services for websites.
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
                  >How can I hire content writing services for websites?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    You can hire content writing services for websites by contacting us through our website or giving us a call to discuss your content needs and goals.
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
                  >What are the benefits of using professional content writing services in USA?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Professional content writing services in USA ensure high-quality, engaging, and optimized content that enhances your website's performance and credibility.
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
                  >Do you offer website content writing packages?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, Website Digitals offers customizable website content writing packages to meet the specific needs and budgets of different businesses.
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
                  >Why should I choose a content writing agency in USA?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Choosing a content writing agency in USA like Website Digitals guarantees expertise in crafting content that resonates with the local audience and adheres to the latest SEO practices.
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
                  >Can Website Digitals provide high quality websites content writing services?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Absolutely. Website Digitals specializes in delivering high-quality website content writing services that help boost your online presence and effectively engage your audience.
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
                  >What types of content can I get from a content writing service provider company in USA?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    As a content writing service provider company in USA, Website Digitals offers various content types, including blog posts, articles, web pages, and more, all tailored to your 
                    business needs.
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
                  >How do content writing firms for websites improve SEO?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Content writing firms for websites like Website Digitals create SEO-optimized content that enhances your website's search engine ranking and drives organic traffic.
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
                  >Is it beneficial to outsource content writing services for websites?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Yes, outsourcing content writing services for websites allows you to leverage professional expertise, save time, and ensure high-quality, SEO-friendly content.
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
                  >What makes Website Digitals a top websites content writing services company in USA?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Website Digitals commitment to delivering unique, engaging, and SEO-optimized content makes us a top websites content writing services company in USA.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!----------------------------------- Newsletter Section --------------------------------------->
    <section class="section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 my-auto">
                    <div class="section-heading">
                        <p class="mb-2">Digital Trends Guide</p>
                        <h2><span class="color-primary">Download</span> Our 2024 Guide To Growing Brands Online</h2>
                    </div>
                    <form class="banner-form newsletter-form" action="" method="post" id="newsletterform">
                        <input type="text" name="company_name" placeholder="Enter Your Email">
                        <button type="submit" class="btn_black">Download</button>
                      </form>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/custom-webdesign/book.png" alt="" width="100%"/>
                </div>
            </div>
        </div>
    </section>
    
    <!-------------------------- Blog Section ---------------------------->
    <x-blog-section />
    
@push('customScripts')

@endpush

@endsection