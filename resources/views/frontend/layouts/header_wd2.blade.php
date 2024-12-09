<style>
    
    .progress-area.primary-first{
        --progress-color: var(--primary);
    }
    
    
    .scrollerpointsul{
        display: flex;
        flex-direction: column;
        gap: 1rem 0;
        margin-top: 1.5rem;
        font-size: .92rem;
    }
    .scrollerpointsul li{
        position: relative;
        padding-left: 4.35rem;
    }
    .scrollerpointsul li::before{
        content: "";
        position: absolute;
        left: 6.8%;
        top: -4%;
        width: 1.3rem;
        height: 100%;
        background: url(../frontend/assets/images/shapes/check-mark.png) no-repeat center center;
        background-size: contain;
        background-position-y: 15%;
    }
    .scrollerpointsul li > strong{
        font-weight: 600;
    }
    .scroller-list .bluecolortext{
        font-weight: 600;
    }
    .bluecolortext{
        color: var(--primary);
    }
    .portfoliobottomimg{
        max-width: 5rem;
        margin-bottom: 1rem;
    }
    .portfolio-bottom-star{
        display: flex;
        gap: 0 0.5rem;
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    .portfolio-bottom-star > i{
        color: var(--primary);
        font-size: 1.1rem;
    }
    .feature-sec-heading{
        display: flex;
        gap: 0.5rem;
    }
    .feature-sec-heading h3{
        font-size: 1.625rem;
        font-weight: 600;
    }
    .feature-sec-heading h3 > span{
        color: var(--primary);
    }
    
    #consultationform .nice-select .option{
        color: #000;
    }
    
    @media (max-width: 576px) {
        .letsGetStated-popup {
            max-width: 18.5rem;
        }
        .offer-left {
            aspect-ratio: 345 / 312;
        }
    }
    
    
    
    
   /*--------------------------------- banner three dots css -----------------------------------*/ 
   .banner-bottom-text{
        bottom: 0%;
        left: 50%;
        position: absolute;
        z-index: 1;
        text-align: center;
        transform: translate(-50%, -50%);
   }
   .banner-bottom-text p{
        font-size: 1rem;
        font-weight: 500;
        text-transform: capitalize;
        font-style: italic;
   }
   .banner-bottom-text p > span{
       color: var(--primary);
   }
            .basic-modern-dots {
                display: inline-block;
                padding: 3px 10px;
                cursor: pointer;
                transform: scaleY(-1);
            }
          .basic-modern-dots .dot {
                background-color: #0038e3;
                border-radius: 50%;
                -webkit-box-shadow: 0 0 12px #def0ff;
                box-shadow: 0 0 12px #def0ff;
                -webkit-animation: separator-bounce 1.4s ease-in-out 0s infinite both;
                animation: separator-bounce 1.4s ease-in-out 0s infinite both;
                width: 12px;
                height: 12px;
            }
          .basic-modern-dots.white-dots .dot {
                background-color: var(--primary);
                -webkit-box-shadow: 0 0 12px #fff;
                box-shadow: 0 0 12px var(--primary);
            }
          body.template-color-6 .basic-modern-dots .dot {
                background-color: #f05874;
            }
          .basic-modern-dots .dot.second-circle {
                margin-top: 18px;
                -webkit-animation-delay: -.16s;
                animation-delay: -.16s;
            }
          .basic-modern-dots .dot.third-circle {
                margin-top: 14px;
                -webkit-animation-delay: -.32s;
                animation-delay: -.32s;
            }
          @keyframes separator-bounce {
            0%, 80%, 100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
            }
            40% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
          }
          
          @media (max-width: 650px) {
              .basic-modern-dots {
                bottom: 14%;
            }
          }
    
    /*---------------------------------new button css-----------------------------------*/
    
    .popup-inputArea > button, .basic-inputArea > button{
        position: relative;
        overflow: hidden;
    }
    .primary:hover{
        color: #fff !important;
    }
 
    
    .letsGetStated-toggle{
        overflow: hidden;
    }
    .letsGetStated-toggle:hover::before{
        content: "";
        position: absolute;
        top: -136%;
        left: -50%;
        width: 50%;
        height: 280%;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0));
        animation: shinesidebar 1.1s linear;
        transform: rotate(45deg);
        transform-origin: center;
    }
    @keyframes shinesidebar {
              0% {
                left: -50%;
              }
              100% {
                left: 550%;
              }
            }
    
    
    .caseStudy-partners-carousel .item > img {
        max-height: 248px;
        object-fit: contain;
        width: 85%;
        text-align: center;
        margin: auto 0;
        
    }
    .caseStudy-partners-carousel .item{
        margin: auto 0;
    }
    .caseStudy-partners{
        margin-bottom: 4.75rem;
    }
    /*.caseStudyPage-carousel{
        display: none !important;
    }*/
    .menu > li > a{
        font-size: .82rem;
    }
    
    @media only screen and (min-device-width: 1400px) and (max-device-width: 1550px) {
          .banner-form > button {
            padding: 0.75rem 1.5rem;
        }
    }
    /*---------------------------------- Portfolio CSS --------------------------------*/
        .video-animation-portfolio .portfolio-imageArea a::after {
          content: "";
          background:url(../frontend/assets/images/videoplaybtn.png) no-repeat;
          background-size:cover;
            width: 80px;
            height: 80px;
        }
        
        
        .videoAnimation-details > h3 
        {
            font-size: 1.1rem;
        }
        .portfolio-tabs {
        	/*overflow: hidden;*/
            position: relative;
        	width: 100%;
        }
        .portfolio-tabs ul {
            position: relative;
        	text-align: center;
        	flex-wrap: nowrap !important;
            overflow-y: hidden;
            scroll-behavior: smooth;
            white-space: nowrap;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            /*margin-bottom: 15px;*/
        }
        ul.scrollable-tabs {
        	-webkit-box-pack: start;
            justify-content: flex-start !important;
        }
        
        .scrollable-tabs ~ .next-portfolio {
        	visibility: visible;
        	opacity: 1;
        }
        .prev-portfolio, .next-portfolio {
        	position: absolute;
            top: 50%;
            background-color: var(--secondary);
            color: #fff;
            opacity: 0.6;
            /* width: 4rem; */
            height: calc(100% - 1rem);
            border-radius: 50%;
            font-size: 0.875rem !important;
            transition: opacity 0.3s;
            cursor: pointer;
            text-align: center;
            display: grid;
            align-items: center;
            transform: translate(0%, -50%);
            box-shadow: 0.625rem 0px 2rem 0.625rem rgba(255, 255, 255, .9);
            aspect-ratio: 1;
        }
        
        .prev-portfolio {
        	left: 0.5rem;
        	visibility: hidden;
        	opacity: 0;
        }
        
        .next-portfolio {
        	right: 0.5rem;
        	visibility: hidden;
        	opacity: 0;
        }
        
        .prev-portfolio i, .next-portfolio i{
            font-size: 1.25rem;
        }
        
        #website-caseStudy2 .webPortfolio-caseStudyImage, #website-caseStudy3 .webPortfolio-caseStudyImage, #website-caseStudy4 .webPortfolio-caseStudyImage{
            transition: background-position 2.8s;
        }
        
        @media (max-width: 576px) {
            .prev-portfolio, .next-portfolio {
                height: calc(100% - 1.75rem);
            }
            
            .prev-portfolio {
            	left: 0.875rem;
            }
            
            .next-portfolio {
            	right: 0.875rem;
            }
        }


    
    /*---------------------------------- Signup side Form CSS --------------------------------*/
    .signupformalert .alert-success{
        background: transparent;
        text-align: center;
        border: 0;
    }
    .signupformalert .alert-success i{
        color: var(--primary);
        font-size: 80px;
    }
    .signupformalert .alert-success h3{
        font-size: 32px;
        color: #000;
        font-weight: 700;
        margin: 18px 0;
    }
    .signupformalert .alert-success p{
        color: #000;
        font-size: 16px;
        font-weight: 500;
    }
    
    /*---------------------------------- Blog CSS --------------------------------*/
        .single-blog-content h1{
            font-size: 2rem;
            font-weight: 700;
        }
        .single-blog-content h2{
            font-size: 1.5rem;
            font-weight: 400;
        }
        .single-blog-content h3{
            font-size: 1.2rem;
            font-weight: 400;
        }
        .faq-single > h6{
            padding: 0 0 15px;
            font-size: 1.1rem;
            color: var(--text-color);
            font-weight: 500;
            border-bottom: 1px solid #e3e3e3;
            margin-bottom: 15px;
        }
        .faq-single > p{
            font-size: 18px;
            color: #222222;
        }
        .blogcontent ul{
            list-style-type: disc;
            padding-left: 2.5rem;
            margin-bottom: 15px;
        }
        .blogcontent ol{
            padding-left: 1rem;
        }
        .blogcontent table {
            border: 2px solid #000;
            width: 100%;
            margin-bottom: 20px;
        }
        .blogcontent table tr:nth-child(1) {
            background: #bdbdbd;
        }
        .blogcontent table tr {
            color: #000;
            border-bottom: 2px solid #000;
        }
        .blogcontent table tr td {
            padding: 8px 10px;
            font-size: 18px;
            border-right: 2px solid #000;
        }
        .tableofcontent > h3 {
            font-size: 18px;
            font-weight: 800;
            border-bottom: 1px solid #000;
            padding: 0px 0px 20px 0px;
            margin-right: 34px;
        }
        .lwptoc_header {
            display: none;
        }
        .lwptoc-left {
            background: #fff;
            box-shadow: 0px 0px 22px -12px #0000007a;
            padding: 20px 20px;
        }
        .lwptoc_item a{
            color: #000;
            text-decoration: none;
            font-size: 16px;
            font-weight: 700;
        }
        .tableofcontent {
            padding-left: 45px;
        }
        .lwptoc_items {
            font-size: 16px;
            height: 500px;
            overflow-y: scroll;
            padding-bottom: 35px;
            padding-right: 10px;
        }
        #filtersCol {
          position: relative;
        }
        
        .filterContainer {
            height: 1300px;
            padding-top: 12px;
        }
        .lwptoc-transparent .lwptoc_i {
            border: 0 !important;
        }
        .lwptoc_i {
            padding: 0 !important;
            text-align: left !important;
        }
        .lwptoc .lwptoc_i a{
            font-size: 14px;
            font-weight: 600;
            line-height: 1.7;
        }
        .lwptoc .lwptoc-notInherit .lwptoc_i div a:hover{
            border-bottom: 0 !important;
        }
        .lwptoc-notInherit .lwptoc_i div a:hover{
            color: #3c7cff;
        }
        
        .sticky-top {
            top: 100px;
            z-index: 9;
        }
        .npf, .YZwOTD2EENzum3jNWMgw0NiMMUZgjQDtheme--light{
            display: none !important;
        }
        
        .footer-logoArea > a > img{
            filter: none;
        }
        
        .banner-form > img{
            filter: none;
        }
        
        
        
        
        @media (max-width: 650px) { 
            /*html, body{
                overflow-x: hidden;
            }*/
            #filtersCol{
                display: none;
            }
            .single-blog-content h1{
                font-size: 2.5rem;
            }
            .singleblogimg > img{
                width: 100%;
                height: auto;
            }
            .singlebloglogodiv img{
                width: 100%;
                max-width: 250px;
                margin-bottom: 22px;
            }
            .blogcontent p, .blogcontent ul, .blogcontent table tr td, .blogcontent table tr th, .singlebloglogodiv p{
                font-size: 18px;
            }
            .blogcontent h3{
                font-size: 20px;
            }
        }
        
        
        
        
        @media (max-width: 650px) { 
            .mobile-col-order-change .col-lg-7{
                order: 2;
                margin-top: 8rem;
            }
            .mobile-col-order-change .dark-area{
                padding: 0;
            }
            .mobile-col-order-change .dark-area::before{
                height: 140%;
                top: -22%;
            }
            .mobile-col-order-change .lightBlue-area{
                padding-bottom: 0;
            }
            .margin-top-mobile-20{
                margin-top: 2rem;
            }
            .display-none-mobile{
                display: none;
            }
        }
        
        .signupformalert .primary{
            min-height: 2rem;
            padding: 0.75rem 1.5rem;
        }
        
        
        .menu li.active > a::before {
            width: 100%;
        }
        .menu li.active > a {
            color: var(--primary);
        }
        #thankyougetname{
            background: #3c7cff;
            color: #fff;
            border-radius: 6px;
            padding: 6px 15px;
            font-weight: 600;
        }
        
        #signupform .nice-select{
            font-size: 0.875rem;
        }
        
        
    </style>

<header class="header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-2 col-6">
          <a href="{{ route('front.home') }}" class="logo" aria-label="Website Digitals">
            <img loading="lazy" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images-webp/logo.webp" alt="" />
          </a>
        </div>
        <div class="col-md-10 col-6">
          <nav>
            <ul class="menu">
              <li class="industries-click">
                <a href="javascript:void(0)">
                  <span>Industries</span>
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                
                <div class="industries-dropdown" style="display: none;">
                  <h3>Industries</h3>
                  <ul>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/agriculture-and-outdoor/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/1.png"
                          alt=""
                        />
                        <span>Agriculture & Outdoor</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/art-and-photography/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/2.png"
                          alt=""
                        />
                        <span>Art & Photography</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/building-and-construction/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/3.png"
                          alt=""
                        />
                        <span>Building & Construction</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/business-and-finance/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/4.png"
                          alt=""
                        />
                        <span>Business & Finance</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/children/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/5.png"
                          alt=""
                        />
                        <span>Children</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/religious/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/6.png"
                          alt=""
                        />
                        <span>Religious</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/fashion/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/7.png"
                          alt=""
                        />
                        <span>Fashion</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/food-and-drinks/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/8.png"
                          alt=""
                        />
                        <span>Food & Drinks</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/games-and-betting/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/9.png"
                          alt=""
                        />
                        <span>Games & Betting</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/health-and-medical/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/10.png"
                          alt=""
                        />
                        <span>Health & Medical</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/travel-and-tourism/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/11.png"
                          alt=""
                        />
                        <span>Travel & Tourism</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/education/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/12.png"
                          alt=""
                        />
                        <span>Education</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/pet-and-animal/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/13.png"
                          alt=""
                        />
                        <span>Pet & Animal</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/home-service/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/14.png"
                          alt=""
                        />
                        <span>Home Service</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/real-estate/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/15.png"
                          alt=""
                        />
                        <span>Real Estate</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/security/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/16.png"
                          alt=""
                        />
                        <span>Security</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/law/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/17.png"
                          alt=""
                        />
                        <span>Law</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/beauty-and-spa/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/18.png"
                          alt=""
                        />
                        <span>Beauty & Spa</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/creative/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/19.png"
                          alt=""
                        />
                        <span>Creative</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/sports/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/20.png"
                          alt=""
                        />
                        <span>Sports</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/science/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/21.png"
                          alt=""
                        />
                        <span>Science</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/transportation/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/22.png"
                          alt=""
                        />
                        <span>Transportation</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry/music/">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/23.png"
                          alt=""
                        />
                        <span>Music</span>
                      </a>
                    </li>
                    <!--<li>
                      <a href="{{ env('WP_PATH') ?? '' }}/industry">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/industries/24.png"
                          alt=""
                        />
                        <span>Other</span>
                      </a>
                    </li>-->
                  </ul>
                </div>
                
              </li>
              <li class="services-click">
                <a href="javascript:void(0)">
                  <span>Services</span>
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <div class="megaMenuArea" style="display: none;">
                  <div class="megaMenu-top">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="megaMenuLeft-detail">
                            <img loading="lazy"
                              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/benefits-section/1.png"
                              alt=""
                            />
                            <h3>Build Your Website Now</h3>
                            <p>
                             You are turning your visitors into customers with optimized design and user experience.
                            </p>
                            <a href="{{ route('brief') }}">
                              <span>Build Now</span>
                              <i class="fa fa-arrow-right-long"></i>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="megaMenuRight">
                            <h3>Our Core Services</h3>
                            <ul class="megaMenuRight-list">
                                <li>
                                <a href="{{ route('front.custom.website.design') }}">
                                  <img loading="lazy"
                                    src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/web-design.jpg"
                                    alt=""
                                  />
                                  <div class="megaMenuRight-listDetail">
                                    <h3>Website Development</h3>
                                    <p>
                                      Custom web design services are tailored to meet your unique needs.
                                    </p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="{{ route('front.content.writing') }}">
                                  <img loading="lazy"
                                    src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/content-writing.jpg"
                                    alt=""
                                  />
                                  <div class="megaMenuRight-listDetail">
                                    <h3>Content Writing</h3>
                                    <p>
                                      Content for websites that can improve your online presence.
                                    </p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="{{ route('front.digital.marketing') }}">
                                  <img loading="lazy"
                                    src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/digital-marketing.jpg"
                                    alt=""
                                  />
                                  <div class="megaMenuRight-listDetail">
                                    <h3>Digital Marketing</h3>
                                    <p>
                                   Implementing cutting-edge strategies to deliver tangible outcomes.
                                    </p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="{{ route('front.video.animation') }}">
                                  <img loading="lazy"
                                    src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/video-animation.jpg"
                                    alt=""
                                  />
                                  <div class="megaMenuRight-listDetail">
                                    <h3>Video Animation</h3>
                                    <p>
                                     Top-notch animation that can elevate your brand to new heights.
                                    </p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="{{ route('front.logo.design') }}">
                                  <img loading="lazy"
                                    src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/menu/logo.jpg"
                                    alt=""
                                  />
                                  <div class="megaMenuRight-listDetail">
                                    <h3>Logo Design</h3>
                                    <p>
                                      Creating unique and impactful logos to lead your brand.
                                    </p>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="megaMenu-bottom">
                    <ul class="megaMenu-bottomUl">
                      <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <p>
                         Meets the highest standards of excellence and professionalism.
                        </p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <p>
                         Efficient processes & dedicated team ensure quick turnaround times.
                        </p>
                      </li>
                      <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <p>
                         Years of experience for providing exceptional services to consumers.
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a href="{{ route('front.portfolio') }}">
                  <span>Webfolio</span>
                </a>
              </li>
              <!--<li>-->
              <!--  <a href="/case-study">-->
              <!--    <span>Case Study</span>-->
              <!--  </a>-->
              <!--</li>-->
              <li>
                <a href="{{ route('front.about') }}">
                  <span>About Us</span>
                </a>
              </li>
              <!--<li>
                <a href="{{ route('front.discounted.pricing') }}">
                  <span>Pricing</span>
                </a>
              </li>-->
              <li>
                <a href="{{ env('WP_PATH') ?? '' }}/resources">
                  <span>Resources</span>
                </a>
              </li>
                 <li>
                <a href="{{ route('front.contact') }}">
                  <span>Contact Us</span>
                </a>
              </li>
              <li class="header_phone">
                <a href="tel:(646)-222-3598">
                  <span><i class="fa-solid fa-phone color-primary"></i>&nbsp;(646)-222-3598</span>
                </a>
              </li>
              <li class="btn-li">
                <div class="link-area">
                    <button type="button" class="book-your-call headerbookacall">Book Your Call</button>
                  <!--<button type="button" class="book-your-call">
                    Book Your Call
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </button>-->
                </div>
              </li>
            </ul>
            <ul class="menu mobile-toggle">
              <li>
                <a href="javascript:void(0)">
                  <i class="fa fa-bars"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <div class="mobileMenuArea-bg hidden-onLoad"></div>
  <div class="mobileMenuArea hidden-onLoad">
    <div class="logo">
      <a href="{{ route('front.home') }}">
        <img loading="lazy" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo.png" alt="" />
      </a>
    </div>
    <nav>
      <ul class="mobileMenu">
          <li>
          <a href="{{ env('WP_PATH') ?? '' }}/industry">
            <span>Industry</span>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <span>Services</span>
            <i class="fa-solid fa-angle-down"></i>
          </a>
          <ul>
            <li>
              <a href="{{ route('front.logo.design') }}">
                <span>Logo Design</span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.custom.website.design') }}">
                <span>Custom Website Design</span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.video.animation') }}">
                <span>Video Animation</span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.content.writing') }}">
                <span>Content Writing</span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.digital.marketing') }}">
                <span>Digital Marketing</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ route('front.portfolio') }}">
            <span>Webfolio</span>
          </a>
        </li>
        <!--<li>-->
        <!--  <a href="/case-study">-->
        <!--      <span>Case Study</span>-->
        <!--  </a>-->
        <!--  </li>-->
        <li>
          <a href="{{ route('front.about') }}">
            <span>About Us</span>
          </a>
        </li>
        <li>
          <a href="{{ route('front.discounted.pricing') }}">
            <span>Pricing</span>
          </a>
        </li>
        <li>
          <a href="{{ env('WP_PATH') ?? '' }}/resources">
            <span>Resources</span>
          </a>
        </li>
        <li>
          <a href="{{ route('front.contact') }}">
            <span>Contact Us</span>
          </a>
        </li>
        <li>
          <a href="tel:(888)-888-8888">
              <span><i class="fa-solid fa-phone color-primary"></i>&nbsp;(888)-888-8888</span>
          </a>
          </li>
      </ul>
      <ul class="mobileMenu">
        <li class="btn-li">
          <div class="link-area">
            <button type="button" class="book-your-call">Book Your Call</button>
          </div>
        </li>
      </ul>
    </nav>
  </div>

  <div class="letsGetStated-popup hidden-onLoad">
    <div class="letsGetStated-toggle">
      <!--<i class="fa-solid fa-paper-plane"></i>-->
      <!--<h6>Get Instant 20% Discount</h6>-->
      <h6>Get Free Consultation</h6>
    </div>
    <x-signup-discount-form />
    <div class="signupformalert">
      <div class="alert alert-success">
          <i class="fa-solid fa-circle-check"></i>
          <h3>Thank you!!!</h3>
          <p class="mb-0">Your form has been submitted.</p>
          <div class="link-area mt-3">
          <a href="{{ route('front.discounted.pricing') }}" class="primary">Checkout Our Pricing</a>
          </div>
      </div>
      <div class="alert alert-danger mt-3" role="alert"><p class="mb-0">Error submitting form!!!</p></div>
  </div>
  </div>