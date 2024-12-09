<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @if(!empty($data['title']))
        <title>{!! $data['title'] !!}</title>
        <meta property="og:title" content="{!! $data['title'] !!}" />
    @endif  

    <link rel="canonical" href="{{ Request::url() }}" />

    @if(!empty($data['keywords']))
      <meta name="keywords" content="{{ $data['keywords'] }}">
    @endif
    
    @if(!empty($data['description']))
        <meta name="description" content="{{ $data['description'] }}">
    @endif 
    
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="Website Digitals" />
    <link rel="alternate" href="{{ Request::url() }}" hreflang="en-us" />

    <link rel="shortcut icon" href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/favicon.png" type="image/x-icon" />
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta name="description" content="Website Digitals" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />

    <meta property="og:site_name" content="Website Digitals" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" as="style"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Damion&display=swap" as="style"/>
    
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/fonts/BlinkMacSystem/BlinkMacSystem.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/intlTelInput.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" media="all"/>

      <!-- Start of  Zendesk Widget script -->
    <!--<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=dc16ae42-0766-4c19-b89a-69e3d4021fb3"> </script>-->
    <!-- End of  Zendesk Widget script -->

    @if(Request::is('wd5') || Request::is('wd6'))
    <link type="text/css" href="{{ asset('frontend/assets/css/before-after.css') }}" rel="stylesheet" media="all"/>
    @endif
    
   <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
    // window.$zopim||(function(d,s){
    //     var z = $zopim = function(c){ z._.push(c) }, 
    //         $ = z.s = d.createElement(s), 
    //         e = d.getElementsByTagName(s)[0];
    //     z.set = function(o){ z.set._.push(o) }; 
    //     z._ = []; 
    //     z.set._ = [];
    //     $.async = true; 
    //     $.setAttribute('charset', 'utf-8');
    //     $.src = '//v2.zopim.com/?46s4nS77ONjbb1saytlDvaxrZFQJpC1o';
    //     z.t = +new Date;
    //     $.type = 'text/javascript'; 
    //     e.parentNode.insertBefore($, e);
    // })(document, 'script');
    </script>
    <!--End of Zopim Live Chat Script-->

    <!-- Google Tag Manager -->
    <script>
   
       (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KHH6BNJ7');    
   
    </script>
    <!-- End Google Tag Manager -->
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-25B7VTLBTH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-25B7VTLBTH');
    </script>
    
    
    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->
    

        <script defer>
            var waitForZopim = setInterval(function () {
                    if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                        return;
                    }
                    $zopim(function() {
                            $zopim.livechat.setOnUnreadMsgs(unread);
                            function unread(number) {
                                if (number >= 1) {
                                    var ua = navigator.userAgent.toLowerCase(), platform = navigator.platform.toLowerCase();
                                    platformName = ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0],
                                    isMobile = /ios|android|webos/.test(platformName);
                                    
                                    if (!isMobile) {
                                        $zopim.livechat.window.show();
                                    } else {
                                        $zopim.livechat.window.show();
                                    }
                                    
                                }
                            }
                        }); 
                    clearInterval(waitForZopim);
                }, 1000);
        </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "https://www.websitedigitals.com/",
          "logo": "https://www.websitedigitals.com/wp-content/themes/websitedigitals/assets/images/logo.png"
        }
    </script>
    
    <!-- TikTok Pixel Code Start -->
    <script>
        !function (w, d, t) {
          w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
        var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
        ;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};
        
        
          ttq.load('CQVOF1BC77U99EQAS8H0');
          ttq.page();
        }(window, document, 'ttq');
    </script>
    <!-- TikTok Pixel Code End -->
    
    <style>
        #launcher {
            display: block !important;
            opacity: 1 !important;
            z-index: 999998 !important;
            position: fixed !important;
            visibility: visible !important;
            right: 0 !important;
            top: auto !important;
        }
    </style>

    <style id="delayed-style">
        
    </style>
    
    
    
    
<!------------------------------------------- Custom Web Design v2 CSS ------------------------------------------------>
<style>
    .banner-form {
        border-radius: 2rem;
    }
    .heading-para-div{
        margin-top: 1rem;
    }
    .hidden {
        display: none;
    }
    .heading-para-div h3 {
        font-size: 1.375rem;
        font-weight: 600;
        opacity: 0.5;
        transition: opacity 0.3s ease;
        cursor: pointer; /* Change cursor to pointer */
    }
    
    .heading-para-div h3.active {
        opacity: 1;
    }
    
    .heading-para-div p {
        display: none; /* Initially hide all paragraphs */
        font-size: .85rem;
        font-weight: 500;
    }
    
    .heading-para-div p:first-of-type {
        display: block; /* Show the first paragraph by default */
    }
    .first-webdesign-logos-slider img, .second-webdesign-logos-slider img{
        border: 1px solid #838383;
        padding: 1.5rem;
        border-radius: .2rem;
        height: 7rem;
        object-fit: contain;
        background-color: #454545;
    }
    .first-webdesign-logos-slider{
        margin-left: 3rem;
    }
    .second-webdesign-logos-slider{
        margin-left: -3rem;
        margin-top: 2.5rem;
    }
    .before-after-tab-heading{
        text-align: center;
        font-size: 2.5rem;
        font-weight: 600;
    }
    .newsletter-form{
        border: 1px solid #3c7dfd;
        border-radius: 3rem;
        background-color: #f0f3f8;
    }
    .newsletter-form input{
        border-radius: 3rem;
        background-color: #f0f3f8;
    }

</style>

<!----------------------------------- WD7 CSS ---------------------------------->
<style>

    .blue-hover-box-row:not(:hover) > .col-lg-4:nth-child(2) > .blue-hover-box{
          background-color: var(--primary);
      }
      .blue-hover-box-row:not(:hover) > .col-lg-4:nth-child(2) > .blue-hover-box::before{
          background: url(../frontend/assets/images/bottom-white.png) no-repeat center bottom;
          background-size: contain;
      }
      .blue-hover-box-row:not(:hover) > .col-lg-4:nth-child(2) > .blue-hover-box h3, .blue-hover-box-row:not(:hover) > .col-lg-4:nth-child(2) > .blue-hover-box hr,
      .blue-hover-box-row:not(:hover) > .col-lg-4:nth-child(2) > .blue-hover-box p, .blue-hover-box-row:not(:hover) > .col-lg-4:nth-child(2) > .blue-hover-box a,
      .blue-hover-box-row:not(:hover) > .col-lg-4:nth-child(2) > .blue-hover-box a > i{
          color: #fff;
      }
      .blue-hover-box{
          text-align: center;
          border: 2px solid var(--primary);
          border-radius: .3em;
          padding: 2.5rem 2rem;
          position: relative;
          transition: all .3s ease;
          background-color: #fff;
      }
      .blue-hover-box:hover{
          background-color: var(--primary);
      }
      .blue-hover-box:hover h3, .blue-hover-box:hover hr, .blue-hover-box:hover p, .blue-hover-box:hover a, .blue-hover-box:hover a > i{
          color: #fff;
      }
      .blue-hover-box::before{
          content: "";
          position: absolute;
          left: 0;
          bottom: 1rem;
          width: 100%;
          height: 1.125rem;
          background: url(../frontend/assets/images/bottom-blue.png) no-repeat center bottom;
          background-size: contain;
          transform: translate(0%, 100%);
          transition: all 0.3s;
          z-index: 1;
      }
      .blue-hover-box:hover::before{
          background: url(../frontend/assets/images/bottom-white.png) no-repeat center bottom;
          background-size: contain;
      }
      .blue-hover-box > h3{
          font-size: 1.3rem;
          font-weight: 600;
      }
      .blue-hover-box > hr{
          height: .1rem;
          width: 80%;
          margin: .8rem auto;
      }
      .blue-hover-box > p{
          font-size: .9rem;
      }
      .blue-hover-box > a{
          color: #000;
          font-size: 1rem;
          font-weight: 600;
      }
      .blue-hover-box > a > i{
          color: var(--primary);
      }
      
      
      #wd-7-banner{
            background: linear-gradient(to bottom, #0a09ff 51%, #ecf9ff 98%);
      }
      .bannerformheading > p{
          font-size: 1rem;
          font-weight: 500;
      }
      .bannerformheading > h2{
          font-size: 2rem;
          font-weight: 700;
          color: #0cc97c;
      }
      .about-image-box {
        display: flex;
        align-items: center;
    }
    
    .about-image-box img{
        width: 35px; 
        height: auto;
        margin-right: .7rem; 
    }
    
    .about-image-box h3 {
        font-size: 1.2rem; 
        font-weight: 700;
        color: #000;
        margin-bottom: 0;
    }
    .points-green-tick{
        font-size: .9rem;
        font-weight: 600;
        gap: .4rem 0;
        display: grid;
    }
    .points-green-tick > li{
        position: relative;
        padding-left: 1.5rem;
    }
    .points-green-tick > li::before{
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        background: url('https://www.websitedigitals.com/frontend/assets/images/wd-5/green-tick.png') no-repeat center center;
        background-size: contain;
        width: 1.2rem;
        height: 1.2rem;
    }
    #counter_sec{
        background: url('https://www.websitedigitals.com/frontend/assets/images/wd-6/counter_bg.png') no-repeat top center;
        background-size: cover;
    }
    .counter-box{
        display: grid;
        text-align: center;
        position: relative;
    }
    .counter-box::after{
        content: '';
        position: absolute;
        top: 50%;
        right: -55%;
        border-right: 2px solid #404648;
        width: 100%;
        height: 56%;
        transform: translate(-50%, -50%);
    }
    .counter-row .four:nth-child(4) .counter-box::after{
        display: none;
    }
    .counter-box:hover img{
        background-color: var(--primary);
    }
    .counter-box > img{
        background-color: #def4ff;
        border-radius: 50%;
        width: 100%;
        max-width: 3.5rem;
        padding: .6rem;
        margin: auto;
        transition: all .3s ease;
    }
    .counter-box > span{
        font-size: 2.5rem;
        font-weight: 600;
        color: #fff;
    }
    .counter-box > p{
        font-size: .8rem;
        font-weight: 300;
        color: #fff;
    }
    .counter-box .white-icon {
        display: none; /* Hide the white icon by default */
    }
    
    .counter-box:hover .color-icon {
        display: none; /* Hide color icon on hover */
    }
    
    .counter-box:hover .white-icon {
        display: block; /* Show white icon on hover */
    }
    
    
    
    .design-box{
        position: relative;
        padding: 2rem 1.3rem 1rem;
        border-radius: .3rem;
        box-shadow: 0px 0px 30px -7px #0000007a;
    }
    .design-box > img{
        position: absolute;
        background-color: #222222;
        padding: .6rem 1rem;
        width: 100%;
        max-width: 4rem;
        border-radius: .2rem;
        top: -1.2rem;
        right: -1rem;
    }
    .design-box > h3{
        font-size: 1.3rem;
        font-weight: 600;
    }
    .design-box > p{
        font-size: .8rem;
    }
    .blue-box{
        background-color: var(--primary);
        color: #fff;
        transition: all .3s ease;
    }
    .blue-box:hover{
        background-color: #fff;
        color: #000;
        transform: scale(1.05);
    }
    .white-box{
        background-color: #fff;
        color: #000;
        transition: all .3s ease;
    }
    .white-box:hover{
        background-color: var(--primary);
        color: #fff;
        transform: scale(1.05);
    }
    .trusted-logos-one img{
        margin: auto;
        width: auto;
        height: 6rem;
        object-fit: contain;
        max-width: 70%;
    }
    .single-big-pricing{
        border: 0;
        border-radius: 0;
        box-shadow: none;
        background: none;
        padding: 0;
    }
    .single-mega-pricing::before{
        display: none;
    }
    #big-pricing{
        background: url('https://www.websitedigitals.com/frontend/assets/images/wd-6/big-pricing-bg.png') no-repeat center center;
        background-size: cover;
    }
    #featuresec{
        background: linear-gradient(to top, #ecf9ff 109%, #FFf 91%);
    }
    .height-100{
        height: 100%;
    }
    .big-pricing-off{
        font-size: 1.8rem;
        font-weight: 700;
        background-color: #fff;
        border-radius: 3rem;
        width: fit-content;
        padding: .1rem 1rem;
    }
    
    
    @media (max-width: 650px) { 
        
        .hidemobile{
            display: none;
        }
        .banner-col-wd-1{
            margin-top: 9rem !important;
        }
        .blue-hover-box-row{
            gap: 1rem 0;
        }
        .counter-row{
            gap: 2rem 0;
        }
        .counter-row > .col-md-3{
            width: 50%;
        }
        .mobile-row-gap{
            gap: 2rem 0;
        }
        .text-left-mobile{
            text-align: left !important;
        }
        .design-box{
            margin: 2rem 0 0 !important;
        }
        .single-mega-pricing .pricing-body-details > ul > li {
            font-size: 1rem;
        }
        .single-mega-pricing .pricing-body-details > h3{
            font-size: 1.3rem;
        }
        .fifty-off-div{
            margin-top: 1rem !important;
            text-align: center;
        }
        .big-pricing-off {
            margin: auto;
        }
    }
</style>
    
    @stack('customStyles')
    @routes
  </head>

  <body>
      <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHH6BNJ7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @if(Request::is('wd1') || Request::is('wd3'))
        @include('frontend.layouts.header_wd1')
    @elseif(Request::routeIs('front.home') || Request::is('wd2') || Request::is('custom-website-design') || Request::is('digital-marketing') || Request::is('logo-design') || Request::is('content-writing') || Request::is('video-animation') || Request::is('portfolio') || Request::is('about-us') || Request::is('contact-us') || Request::is('privacy-policy') || Request::is('terms-conditions'))
        @include('frontend.layouts.header_wd2')
    @elseif(Request::is('wd4'))
        @include('frontend.layouts.header_wd4')
    @elseif(Request::is('discounted-pricing'))
        @include('frontend.layouts.header_discounted')
    @elseif(Request::is('wd5') || Request::is('wd6') )
        @include('frontend.layouts.header_wd5')
    @else  
        @include('frontend.layouts.header')
    @endif

    @yield('container')

    @if(Request::is('wd1') || Request::is('wd3') || Request::is('discounted-pricing'))
        @include('frontend.layouts.footer_wd1')
    @elseif(Request::routeIs('front.home') || Request::is('wd2') || Request::is('custom-website-design') || Request::is('digital-marketing') || Request::is('logo-design') || Request::is('content-writing') || Request::is('video-animation') || Request::is('portfolio') || Request::is('about-us') || Request::is('contact-us') || Request::is('privacy-policy') || Request::is('terms-conditions'))
        @include('frontend.layouts.footer_wd2')
    @elseif(Request::is('wd4'))
        @include('frontend.layouts.footer_wd4')
    @elseif(Request::is('wd5') || Request::is('wd6'))
        @include('frontend.layouts.footer_wd5')
    @else 
        @include('frontend.layouts.footer')
    @endif

 

       
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/ScrollTrigger.min.js   ') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/intlTelInput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/typewriter-effect@2.21.0/dist/core.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/main.js') }}"></script>

     
    @if(Request::is('wd2') || Request::is('discounted-pricing'))
    <script type="text/javascript" src="{{ asset('frontend/assets/js/formbackend-wd2.js') }}"></script>
    @else
        <script type="text/javascript" src="{{ asset('frontend/assets/js/formbackend.js') }}"></script>
    @endif

    @if(Request::is('logo-brief') || Request::is('brief') || Request::is('brief-new'))
    <script type="text/javascript" src="{{ asset('frontend/assets/js/brief.js') }}"></script>
    @endif


    @if(Request::is('portfolio') || Request::is('industry/agriculture-and-outdoor') || Request::is('industry/art-and-photography') || Request::is('industry/beauty-and-spa') || Request::is('industry/building-and-construction') || Request::is('industry/business-and-finance') || Request::is('industry/children') || Request::is('industry/creative') || Request::is('industry/education') || Request::is('industry/fashion') || Request::is('industry/food-and-drinks') || Request::is('industry/games-and-betting') || Request::is('industry/health-and-medical') || Request::is('industry/home-service') || Request::is('industry/law') || Request::is('industry/music') || Request::is('industry/pet-and-animal') || Request::is('industry/real-estate') || Request::is('industry/religious') || Request::is('industry/science') || Request::is('industry/security') || Request::is('industry/sports') || Request::is('industry/transportation') || Request::is('industry/travel-and-tourism'))
    <script type="text/javascript" src="{{ asset('frontend/assets/js/portfolio-scrollable.js') }}"></script>
    @endif

    @if(Request::is('wd5') || Request::is('wd6'))
    <!--<script src="{{ asset('frontend/assets/js/butter.js') }}"></script>-->
    @endif

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/parallax.min.js') }}"></script>
  
    <script type="text/javascript" src="{{ asset('frontend/assets/js/signup-zopim.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/popupform-zopim.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/growthpopup-zopim.js') }}"></script>

    <script>
        window.Laravel = {
            routes: {
                webBrief: "{{ route('brief') }}",
                logoBrief: "{{ route('logo.brief') }}",
                storePopupForm: "{{ route('popup.store') }}",
                thankyouWebBrief: "{{ route('brief.thankyou') }}",
                thankyouLogoBrief: "{{ route('logo.brief.thankyou') }}",
                thankyou: "{{ route('front.thankyou') }}",
                storeSolutionForm: "{{ route('solution.store') }}",
                storeSignupForm: "{{ route('signup.store') }}",
                storeContactForm: "{{ route('contact.store') }}",
            }
        };
    </script>

    <script>
        function getLastSegment() {
        var path = window.location.pathname;
        var segments = path.split('/');
        return segments[segments.length - 1];
    }

    const lastSegment = getLastSegment();

    </script>



<script>
    jQuery( document ).ready(function() {
        jQuery('img').attr('loading', 'lazy');
    });
        
    </script>
    
    
    <script>
        /*const offerEndDate = new Date('2024-08-24T00:00:00').getTime();
    
        function updateCountdown() {
            const now = new Date().getTime();
            const timeRemaining = offerEndDate - now;
    
            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
    
            jQuery('.offerCountDown .days').html(days);
            jQuery('.offerCountDown .hours').html(hours);
            jQuery('.offerCountDown .min').html(minutes);
            jQuery('.offerCountDown .sec').html(seconds);
    
            if (timeRemaining < 0) {
                clearInterval(countdownInterval);
                jQuery('.offerCountDown .days').html(0);
                jQuery('.offerCountDown .hours').html(0);
                jQuery('.offerCountDown .min').html(0);
                jQuery('.offerCountDown .sec').html0;
            }
        }
    
        const countdownInterval = setInterval(updateCountdown, 1000);*/
    </script>

    @if(Request::routeIs('front.home') || Request::is('wd2') || Request::is('wd4') || Request::is('custom-website-design') || Request::is('digital-marketing') || Request::is('logo-design') || Request::is('content-writing') || Request::is('video-animation') || Request::is('portfolio') || Request::is('about-us') || Request::is('contact-us') || Request::is('privacy-policy') || Request::is('terms-conditions'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cookieConsentBanner = document.getElementById("cookieConsentBanner");
            var acceptCookies = document.getElementById("acceptCookies");
            var declineCookies = document.getElementById("declineCookies");

            // Check if cookies are already accepted
            if (!localStorage.getItem("cookiesAccepted")) {
                cookieConsentBanner.style.display = "block";
            }

            // Handle acceptance
            acceptCookies.addEventListener("click", function() {
                localStorage.setItem("cookiesAccepted", "true");
                cookieConsentBanner.style.display = "none";
                // Initialize cookies or tracking scripts here
                initializeTrackingScripts();
                console.log('Cookies accepted');
            });

            // Handle decline
            declineCookies.addEventListener("click", function() {
                localStorage.setItem("cookiesAccepted", "false");
                cookieConsentBanner.style.display = "none";
                // Optionally, disable tracking scripts here
                console.log('Cookies declined');
            });
        });

        function initializeTrackingScripts() {
            // Example of initializing Google Analytics script
            var gaScript = document.createElement('script');
            gaScript.src = "https://www.googletagmanager.com/gtag/js?id=AW-16658381160";
            gaScript.async = true;
            document.head.appendChild(gaScript);

            gaScript.onload = function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'AW-16658381160');
            };

            // Add other scripts for cookies or tracking services here
            console.log('Tracking scripts initialized');
        }
    </script>

    @endif

    <script>
        jQuery(document).ready(function() {
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 50) { // Change 50 to the scroll position where you want to add the class
                    jQuery('.header').addClass('scrolled');
                } else {
                    jQuery('.header').removeClass('scrolled');
                }
            });
        });
        </script>
    
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the current page URL
            var currentUrl = window.location.href;
    
            // Select all menu items
            var menuItems = document.querySelectorAll('.menu li a');
            if (currentUrl) {
                
                if (currentUrl.includes("/industry/")) {
                    document.querySelector(".industries-click").classList.add("active");
                } else if(
                    currentUrl.includes("/custom-website-design") 
                    || currentUrl.includes("/content-writing")
                    || currentUrl.includes("/digital-marketing")
                    || currentUrl.includes("/video-animation")
                    || currentUrl.includes("/logo-design")
                ) {
                    document.querySelector(".services-click").classList.add("active");
                } else {
                    // Iterate through the menu items
                    menuItems.forEach(function(item) {
                        // Get the href attribute of each link
                        var linkUrl = item.getAttribute('href');
                        
                        if (currentUrl.indexOf(linkUrl) !== -1) {
                            // Add the active class to the parent li element
                            item.parentElement.classList.add('active');
                        }
                    });
                }
            }
        });
    </script>
    
    <script>
        
        jQuery('.industries-click > a').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior
    
            // Toggle the 'active' class on the industries-dropdown
            jQuery('.industries-dropdown').toggle();
            jQuery('.industries-click').addClass("active");
            jQuery('.megaMenuArea').hide();
            jQuery('.services-click').removeClass("active");
            
             // Toggle the icon
            jQuery('.industries-click a').find('.fa-solid').toggleClass('fa-angle-down fa-angle-up');
            jQuery('.services-click a').find('.fa-solid').removeClass('fa-angle-up').addClass('fa-angle-down');
        });
        
        jQuery('.industries-dropdown a').on('click', function(e) {
            // Allow default action for links
            e.stopPropagation(); // Stop click event from propagating up to the parent
        });
        
        jQuery('.services-click > a').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior
    
            // Toggle the 'active' class on the industries-dropdown
            jQuery('.megaMenuArea').toggle();
            jQuery('.services-click').addClass("active");
            jQuery('.industries-dropdown').hide();
            jQuery('.industries-click').removeClass("active");
            
             // Toggle the icon
            jQuery('.services-click a').find('.fa-solid').toggleClass('fa-angle-down fa-angle-up');
            jQuery('.industries-click a').find('.fa-solid').removeClass('fa-angle-up').addClass('fa-angle-down');
        });
        
        jQuery('.services-click a').on('click', function(e) {
            // Allow default action for links
            e.stopPropagation(); // Stop click event from propagating up to the parent
        });
        
        jQuery(document).on("click", ".scroll-to-link", function(e) {
            e.preventDefault();
            const headerHeight = jQuery(".header").height();
            const thisLink = jQuery(this).attr("href");
            jQuery('html, body').animate({
            scrollTop: jQuery(thisLink).offset().top - headerHeight
        }, 700);
        })
        
    </script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const bannerForm = document.getElementById('bannerForm');
        const companyNameInput = document.getElementById('companyNameInput');
        const logoBriefCname = document.getElementById('logo-brief-cname');
        const submitBannerForm = document.getElementById('submitBannerForm');
        
        if (companyNameInput) {
            companyNameInput.addEventListener("input", function(e) {
                e.target.value = e.target.value.replace(/[^a-zA-Z0-9 ]/g, '');
            })
        }
        
        if (logoBriefCname) {
            logoBriefCname.addEventListener("input", function(e) {
                e.target.value = e.target.value.replace(/[^a-zA-Z0-9 ]/g, '');
            })
        }
        
    
        // submitBannerForm.addEventListener('click', function(event) {
        //     event.preventDefault();
    
        //     // Get the input value
        //     const companyName = companyNameInput.value;
    
        //     // Set the value to the corresponding input in the step form
        //     // const stepFormCompanyNameInput = document.querySelector('input[name="company_name"]');
        //     // if (stepFormCompanyNameInput) {
        //     //     stepFormCompanyNameInput.value = companyName;
        //     // }
    
        //     // Optionally, you can submit the step form programmatically
        //     const stepForm = document.getElementById('bannerForm');
        //     if (stepForm && companyName) {
        //         window.location.href = `/brief/?company_name=${companyName}`;
        //     }
        // });
    });
    </script>
    
    <script>
        jQuery(document).ready(function(){
        setTimeout(function(){
             //var tag_new = jQuery("template").eq(38).attr("id");
             var tag_new = jQuery("template").last().attr("id");
             console.log(tag_new);
             //alert(tag_new);
             jQuery("#" + tag_new).css("display", "none");
             jQuery("#" + tag_new).next().next().css("display", "none");
        }, 100);
        });
        
        
        /*jQuery(document).ready(function() {
            
            jQuery('.single-webPortfolio').on('click', function() {
                // Your code here to scroll to the header
                var headerHeight = jQuery('header').outerHeight(); 
                var newPosition = jQuery('.new-content-area').offset().top - headerHeight;
        
                jQuery('html, body').animate({
                    scrollTop: newPosition
                }, 100); 
            });
        });*/
    </script>
    
    
@if(Request::is('wd2') || Request::is('wd4') || Request::is('custom-website-design') || Request::is('digital-marketing') || Request::is('logo-design') || Request::is('content-writing') || Request::is('video-animation') || Request::is('portfolio') || Request::is('about-us') || Request::is('contact-us') || Request::is('privacy-policy') || Request::is('terms-conditions'))
<script>
	
	
	
	jQuery(document).ready(function() {
        var popupShown = false; // Flag to prevent multiple popups
    
        jQuery(window).on('scroll', function() {
            // Only proceed if the popup hasn't been shown yet
            if (!popupShown) {
                var windowTop = jQuery(window).scrollTop();
                var windowBottom = windowTop + jQuery(window).height();
                
                var sectionTop = jQuery('#portfolio-sec').offset().top;
                var sectionBottom = sectionTop + jQuery('#portfolio-sec').outerHeight();
        
                // Check if the section is in the viewport
                if (windowBottom > sectionTop && windowTop < sectionBottom) {
                    setTimeout(function() {
                        jQuery('#popupformcomplete').addClass("show-popup");
                        jQuery('.offer-popup-bg').addClass("show-popup");
                        popupShown = true; // Set the flag to prevent multiple popups
                    }, 40000); // 5000 milliseconds = 5 seconds
                }
            }
        });
    });

	
	
	
	
	
	
        jQuery(document).ready(function() {
            // Check if the cookie exists and show popup accordingly
            setTimeout(function() {
            if (getCookie('popupShown') !== 'true') {
                jQuery('#popupformcomplete').addClass("show-popup");
                jQuery('.offer-popup-bg').addClass("show-popup");
            }
            }, 40000); // 5000 milliseconds = 5 seconds
        
            // Close popup and set cookie when close button is clicked
            jQuery('.popup-close').click(function() {
                jQuery('#popupformcomplete').hide();
                jQuery('.offer-popup-bg').hide();
                // Set a cookie to prevent the popup from showing for 24 hours
                setCookie('popupShown', 'true', 1);
            });
        
            // Function to set a cookie
            function setCookie(name, value, days) {
                var expires = '';
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = '; expires=' + date.toUTCString();
                }
                document.cookie = name + '=' + value + expires + '; path=/';
            }
        
            // Function to get the value of a cookie
            function getCookie(name) {
                var nameEQ = name + '=';
                var cookies = document.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = cookies[i];
                    while (cookie.charAt(0) === ' ') {
                        cookie = cookie.substring(1, cookie.length);
                    }
                    if (cookie.indexOf(nameEQ) === 0) {
                        return cookie.substring(nameEQ.length, cookie.length);
                    }
                }
                return null;
            }
        });
    </script>

    @else

    <script>
    
    
    
        jQuery(document).ready(function() {
            var popupShown = false; // Flag to prevent multiple popups
        
            jQuery(window).on('scroll', function() {
                // Only proceed if the popup hasn't been shown yet
                if (!popupShown) {
                    var windowTop = jQuery(window).scrollTop();
                    var windowBottom = windowTop + jQuery(window).height();
                    
                    var sectionTop = jQuery('#portfolio-sec').offset().top;
                    var sectionBottom = sectionTop + jQuery('#portfolio-sec').outerHeight();
            
                    // Check if the section is in the viewport
                    // if (windowBottom > sectionTop && windowTop < sectionBottom) {
                    //     setTimeout(function() {
                    //         jQuery('#popupformcomplete').addClass("show-popup");
                    //         jQuery('.offer-popup-bg').addClass("show-popup");
                    //         popupShown = true; // Set the flag to prevent multiple popups
                    //     }, 40000); // 5000 milliseconds = 5 seconds
                    // }
                }
            });
        });
    
    
    
    
    
    
    
        /*jQuery(document).ready(function() {
            // Check if the cookie exists and show popup accordingly
            setTimeout(function() {
            if (getCookie('popupShown') !== 'true') {
                jQuery('#popupformcomplete').addClass("show-popup");
                jQuery('.offer-popup-bg').addClass("show-popup");
            }
            }, 40000); 
            5000 milliseconds = 5 seconds
        
            // Close popup and set cookie when close button is clicked
            jQuery('.popup-close').click(function() {
                jQuery('#popupformcomplete').hide();
                jQuery('.offer-popup-bg').hide();
                // Set a cookie to prevent the popup from showing for 24 hours
                setCookie('popupShown', 'true', 1);
            });
        
            // Function to set a cookie
            function setCookie(name, value, days) {
                var expires = '';
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = '; expires=' + date.toUTCString();
                }
                document.cookie = name + '=' + value + expires + '; path=/';
            }
        
            // Function to get the value of a cookie
            function getCookie(name) {
                var nameEQ = name + '=';
                var cookies = document.cookie.split(';');
                for (var i = 0; i < cookies.length; i++) {
                    var cookie = cookies[i];
                    while (cookie.charAt(0) === ' ') {
                        cookie = cookie.substring(1, cookie.length);
                    }
                    if (cookie.indexOf(nameEQ) === 0) {
                        return cookie.substring(nameEQ.length, cookie.length);
                    }
                }
                return null;
            }
        });*/
    </script>

@endif
    
    
    <script>
        
        jQuery(document).ready(function($) {
            // Prevent default behavior for anchor tags within .subsubsub class
            jQuery('.lwptoc .lwptoc_i a').on('click', function(event) {
                event.preventDefault();
                var href = $(this).attr('href');
                console.log('Link clicked: ' + href); // For debugging purposes
                // You can perform additional actions here if needed
                window.location.href = href; // Navigate to the link's href without appending #
            });
        });
        
    </script>
    
    {{-- <script>
    jQuery(function($) {
        var timeout = null;
        var searchInput = $('.blogPage-search input[type="text"]');
        var suggestionsContainer = $('.search-suggestions-container');
        var suggestionsList = $('.search-suggestions-list');
    
        searchInput.on('input', function() {
            var query = $(this).val();
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                if (query.length > 0) {
                    $.ajax({
                        url: 'admin-ajax.php',
                        type: 'POST',
                        data: {
                            action: 'search_blog',
                            query: query,
                        },
                        success: function(response) {
                            suggestionsList.empty();
                            suggestionsContainer.show();
                            if (response.length > 0) {
                                var suggestions = JSON.parse(response);
                                suggestions.forEach(function(post) {
                                    suggestionsList.append('<li><a href="' + post.link + '"><div class="imgArea"><img src="' + post.thumbnail + '" alt="' + post.title + '"></div><h3><ul class="blog-timeAuthor"><li><i class="fa fa-calendar"></i><span>' + post.date + '</span></li></ul><strong>' + post.title + '</strong></h3></a></li>');
                                });
                            } else {
                                suggestionsList.append('<li>No results found</li>');
                            }
                        },
                    });
                } else {
                    suggestionsList.empty();
                    suggestionsContainer.hide();
                }
            }, 300);
        });
    
        // Hide suggestions on click outside the container
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.search-suggestions-container').length) {
                suggestionsContainer.hide();
            }
        });
    });
    </script>
     --}}
    
    
    <script>
    // jQuery to make entire .single-blog-container clickable
    jQuery(function($) {
    $(document).ready(function($) {
        $('.single-blog-container').click(function() {
            var url = $(this).find('.read-more-link').attr('href');
            if (url) {
                window.location = url;
            }
            return false;
        });
    });
    });
    </script>
    
    <script>
    
        var currentUrl = window.location.href;
    
            var url1 = 'https://websitedigitals.com/brief/';
            var url2 = 'https://websitedigitals.com/brief/thank-you/';
    
        // Check if URL is not 'https://websitedigitals.com/brief/'
        if (currentUrl !== url1 || currentUrl !== url2) {
            // If not equal, remove stepsevenactive class from step-7 and clear local storage
            localStorage.removeItem('fieldValue');
            localStorage.removeItem('fname');
            localStorage.removeItem('fullName');
        }
        
    </script>
    
    
    <script>
    /*jQuery(document).ready(function() {
    
        console.log(jQuery("#bannerselect").find("option:selected"))
        
        var typewriterContainer = document.getElementById('typewriter-container');
        var typewriter = new Typewriter(typewriterContainer, {
            loop: true,
            delay: 60,
            deleteSpeed: 30
        });
        
        function updateOptionText() {
            var newText = typewriterContainer.textContent.trim();
            const select = jQuery(document).find("#bannerForm .nice-select");
            if(!select.find(".selected").attr("data-value")) {
                var $firstOption = jQuery('#bannerselect').find('option').first();
                if ($firstOption.text() !== newText) {
                    $firstOption.text(newText);
                    select.find(".current").text(newText);
                }
            }
        }
        
        typewriter.typeString('Need a Website That Stands Out?')
            .pauseFor(2500)
            .deleteAll()
            .callFunction(() => {
                // Debounce the update to avoid rapid changes
                clearTimeout(window.typewriterUpdateTimeout);
                window.typewriterUpdateTimeout = setTimeout(updateOptionText, 100);
            })
            .start();
    
        // MutationObserver to monitor text changes in typewriterContainer
        var observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList') {
                    updateOptionText();
                }
            });
        });
    
        observer.observe(typewriterContainer, { childList: true, subtree: true });
    });*/
    </script>
    
    <script>
        jQuery(window).on('load', function() {
            // Set a timeout to delay the style injection
            setTimeout(function() {
                // Define the CSS rules as a string
                var bookacallcss = `
                    .headerbookacall::before {
                        content: "";
                        position: absolute;
                        top: -133%;
                        left: -50%;
                        width: 22%;
                        height: 410%;
                        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0));
                        animation: shine 1.1s linear infinite;
                        transform: rotate(45deg);
                        transform-origin: center;
                    }
                    
                    .letsGetStated-popup .letsGetStated-toggle::before{
                        content: "";
                        position: absolute;
                        top: -136%;
                        left: -50%;
                        width: 50%;
                        height: 280%;
                        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0));
                        animation: shinesidebar 1.1s linear infinite;
                        transform: rotate(45deg);
                        transform-origin: center;
                    }
                `;
                
                // Inject the CSS into the <style> element
                jQuery('#delayed-style').text(bookacallcss);
            }, 5000); // Delay in milliseconds (e.g., 1000ms = 1 second)
        });
    </script>

@if(!Request::is('wd2') && !Request::is('wd4') && !Request::is('custom-website-design') && !Request::is('digital-marketing') && !Request::is('logo-design') && !Request::is('content-writing') && !Request::is('video-animation') && !Request::is('portfolio') && !Request::is('about-us') && !Request::is('contact-us') && !Request::is('privacy-policy') && !Request::is('terms-conditions'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Parallax for each parallax-container
            var containers = document.querySelectorAll('.object');
            
            containers.forEach(function(container) {
                new Parallax(container);
            });
        });
    </script>
    @endif

    
    @if(Request::is('wd1') || Request::is('wd3') || Request::is('discounted-pricing'))
        <script>
            jQuery(document).ready(function() {
                // Base price and discount
                const basePrice = 1099;
        
                // Function to update the pricing and link href
                function updatePricing() {
                    let totalPrice = basePrice;
        
                    // Iterate over all checked add-ons and sum their prices
                    jQuery('.addons .form-check-input:checked').each(function() {
                        // Extract the price from the closest span element
                        let addonPriceText = jQuery(this).closest('li').find('span').text();
                        let addonPrice = parseFloat(addonPriceText.replace('$', '')) || 0; // Fallback to 0 if parse fails
                        totalPrice += addonPrice;
                    });
        
                    // Update the displayed price
                    jQuery('.updatedvalue').html('<span class="off">50% off</span><small>$</small>' + totalPrice + '<span class="old-price">$999</span>');
        
                    // Update the href with the new price
                    const newHref = 'https://websitedigitals.com/crm/payment/paynow/' + 
                        encodeURIComponent('Complete Branding Sol') + '/' + 
                        totalPrice + '/' + 
                        encodeURIComponent('Logo Design') + '/USD';
        
                    jQuery('.megapricebtn a').attr('href', newHref);
                }
        
                // Initial update on page load
                updatePricing();
        
                // Update pricing when an add-on is checked or unchecked
                jQuery('.form-check-input').on('change', function() {
                    updatePricing();
                });
            });
        </script>
    @elseif(!Request::is('wd2') && !Request::is('wd4') && !Request::is('wd5') && !Request::is('wd6') && !Request::is('custom-website-design') && !Request::is('digital-marketing') && !Request::is('logo-design') && !Request::is('content-writing') && !Request::is('video-animation') && !Request::is('portfolio') && !Request::is('about-us') && !Request::is('contact-us') && !Request::is('privacy-policy') && !Request::is('terms-conditions'))
    <script>
        // script.js
        document.addEventListener('DOMContentLoaded', function() {
            const section = document.getElementById('bg-change');
            const primaryColor = '#3c7cff'; // Primary color (blue shade)
        
            function getRandomBlueShade() {
                // Generate a random blue shade by varying the green and red components
                const r = Math.floor(Math.random() * 50); // Small range for red component
                const g = Math.floor(Math.random() * 50); // Small range for green component
                const b = 255; // Maximum blue component
                return `rgb(${r}, ${g}, ${b})`;
            }
        
            function changeBackgroundColor() {
                // Create a new radial gradient with the primary color and a random blue shade
                const secondaryColor = getRandomBlueShade();
                section.style.background = `radial-gradient(circle, ${primaryColor}, ${secondaryColor})`;
            }
        
            // Change background gradient every 3 seconds
            setInterval(changeBackgroundColor, 3000);
        });
        </script>
    @endif
    
    
    <script>
        $(document).ready(function() {
            $('.counter').each(function () {
                let $this = $(this);
                let countTo = $this.hasClass('percent') ? 100 : parseInt($this.text()); // Check for percentage
    
                $this.prop('Counter', 0).animate({
                    Counter: countTo
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        if ($this.hasClass('percent')) {
                            $this.text(Math.ceil(now) + '%'); // Add "%" for percentage
                        } else {
                            $this.text(Math.ceil(now) + '+'); // Add "+" for other counters
                        }
                    }
                });
            });
            
            $('.trusted-logos-one').owlCarousel({
                loop:true,
                margin:30,
                dots: false,
                nav:false,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        });
    </script>
    
    
    <script>
        function toggleParagraph(heading) {
            // Hide all paragraphs
            const paragraphs = document.querySelectorAll('.heading-para-div p');
            paragraphs.forEach(p => {
                p.style.display = 'none';
            });
        
            // Reset all headings' opacity
            const headings = document.querySelectorAll('.heading-para-div h3');
            headings.forEach(h => {
                h.classList.remove('active');
                h.style.opacity = '0.3';
            });
        
            // Show the clicked heading's paragraph
            const activeParagraph = document.querySelector(`.${heading}-para`);
            activeParagraph.style.display = 'block'; // Show the corresponding paragraph
        
            // Set the clicked heading's opacity to 1
            const activeHeading = document.querySelector(`.${heading}-heading`);
            activeHeading.classList.add('active');
            activeHeading.style.opacity = '1';
        }
        
        // Initially show the first paragraph and set the first heading as active
        document.addEventListener("DOMContentLoaded", function() {
            const firstHeading = document.querySelector('.first-heading');
            firstHeading.click(); // Simulate a click to show the first paragraph
        });
        
        
        $('.first-webdesign-logos-slider').owlCarousel({
            loop:true,
            margin:40,
            nav:false,
            dots:false,
            autoplay: true,
            autoPlaySpeed: 1000,
            autoPlayTimeout: 3000,
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
        
        $('.second-webdesign-logos-slider').owlCarousel({
            rtl:true,
            loop:true,
            margin:40,
            nav:false,
            dots:false,
            autoplay: true,
            autoPlaySpeed: 1000,
            autoPlayTimeout: 3000,
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
        
        $('.first-trustedwebdesignlogo').owlCarousel({
            loop:true,
            margin:40,
            nav:false,
            dots:false,
            autoplay: true,
            autoPlaySpeed: 1000,
            autoPlayTimeout: 3000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
        
        $('.second-trustedwebdesignlogo').owlCarousel({
            rtl:true,
            loop:true,
            margin:40,
            nav:false,
            dots:false,
            autoplay: true,
            autoPlaySpeed: 1000,
            autoPlayTimeout: 3000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });

    </script>


    
    @stack('customScripts')
</body>
</html>