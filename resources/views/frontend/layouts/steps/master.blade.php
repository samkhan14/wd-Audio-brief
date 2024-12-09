<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"/>
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     @if(!empty($data['title']))
     <title>{!! $data['title'] !!}</title>
     @endif

     <link rel="canonical" href="{{ Request::url() }}" />

     @if(!empty($data['keywords']))
       <meta name="keywords" content="{{ $data['keywords'] }}">
     @endif
     @if(!empty($data['description']))
     <meta name="description" content="{{ $data['description'] }}" />
     @endif

    <link rel="shortcut icon" href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/favicon.png" type="image/x-icon" />


    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    @if(!empty($data['title']))
    <meta property="og:title" content="{!! $data['title'] !!}" />
    @endif
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="Website Digitals" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/fonts/BlinkMacSystem/BlinkMacSystem.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/intlTelInput.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" media="all"/>
    <link type="text/css" href="{{ asset('frontend/assets/css/briefchat.css') }}" rel="stylesheet" media="all"/>

    @if(Request::is('wd5'))
    <link type="text/css" href="{{ asset('frontend/assets/css/before-after.css') }}" rel="stylesheet" media="all"/>
    @endif

    <!-- Start of  Zendesk Widget script -->
    <!--<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=dc16ae42-0766-4c19-b89a-69e3d4021fb3"> </script>-->
    <!-- End of  Zendesk Widget script -->

    <style>
    .npf, .YZwOTD2EENzum3jNWMgw0NiMMUZgjQDtheme--light{
            display: none !important;
        }

        .remove-step #step-1, .remove-step #step-2{
            display: none;
        }
    </style>

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

    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>

    <script>
        /*jQuery(window).on('load', function() {
        if (jQuery('#step-7').hasClass('stepsevenactive')) {
            jQuery("#step-1").remove();
            jQuery("#step-2").remove();
            jQuery("#step-3").remove();
            jQuery("#step-4").remove();
            jQuery("#step-5").remove();
            jQuery("#step-6").remove();
            jQuery('#step-2').removeClass('active');
            jQuery('#step-7').addClass('active');

            jQuery('#brief_section').addClass('brief_step_7');

            jQuery("#brief_logo").attr('src', '` + window.Laravel.imagePath + `/assets/images/logo-white.png');
            jQuery("#brief_header_phone").addClass('brief_header_number');
            jQuery(".step-progressBar").css('width', '100%');

            var fieldValue = localStorage.getItem('fieldValue');

            jQuery("#briefthankyou").html("Thank You, <strong style='background: #3c7cff; color: #fff; border-radius: 6px; padding: 6px 15px; font-weight: 600;'>" + fieldValue + "</strong>");
        }

    });*/
    </script>

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
        <script>
            // (function(w, d, s, l, i) {
            //     w[l] = w[l] || [];
            //     w[l].push({
            //         'gtm.start': new Date().getTime(),
            //         event: 'gtm.js'
            //     });
            //     var f = d.getElementsByTagName(s)[0],
            //         j = d.createElement(s),
            //         dl = l != 'dataLayer' ? '&l=' + l : '';
            //     j.async = true;
            //     j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            //     f.parentNode.insertBefore(j, f);
            // })(window, document, 'script', 'dataLayer', 'GTM-W6NLP7');
        </script>
        <!-- End Google Tag Manager -->

        <!--<script>-->
        <!--    setTimeout(function() {-->
        <!--        window.$zopim || function(c, d) {-->
        <!--            var b = $zopim = function(a) {-->
        <!--                    b._.push(a)-->
        <!--                },-->
        <!--                a = b.s = c.createElement(d),-->
        <!--                e = c.getElementsByTagName(d)[0];-->
        <!--            b.set = function(a) {-->
        <!--                b.set._.push(a)-->
        <!--            };-->
        <!--            b._ = [];-->
        <!--            b.set._ = [];-->
        <!--            a.async = !0;-->
        <!--            a.setAttribute("charset", "utf-8");-->
        <!--            a.src = "//v2.zopim.com/?46s4nS77ONjbb1saytlDvaxrZFQJpC1o";-->
        <!--            b.t = +new Date;-->
        <!--            a.type = "text/javascript";-->
        <!--            e.parentNode.insertBefore(a, e)-->
        <!--        }(document, "script");-->

        <!--    }, 4000);-->
        <!--</script>-->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script>
            // jQuery.getScript("https://www.googletagmanager.com/gtag/js?id=AW-944522308", function() {
            //     window.dataLayer = window.dataLayer || [];

            //     function gtag() {
            //         dataLayer.push(arguments);
            //     }
            //     gtag('js', new Date());
            //     gtag('config', 'AW-944522308');
            //     console.log("Done");
            // });
        </script>

        <script defer>
            (function ($) {

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

            })(jQuery);
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
        #briefthankyou{
            margin: 10px 0;
        }
        .npf, .YZwOTD2EENzum3jNWMgw0NiMMUZgjQDtheme--light{
            display: none !important;
        }

        .submitformdiv{
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .menu > li > a.brief_header_number{
            color: #fff;
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

    @if(Request::is('logo-brief/thankyou') || Request::is('brief/thank-you') || Request::is('thank-you'))
        @include('frontend.layouts.steps.header_thankyou')
    @else
        @include('frontend.layouts.steps.header')
    @endif

    @yield('container')


    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>



    <script>
        window.Laravel = {
            routes: {
                storeWebBrief: "{{ route('brief.store') }}",
                storeLogoBrief: "{{ route('logo.brief.store') }}",
                thankyouWebBrief: "{{ route('brief.thankyou') }}",
                thankyouLogoBrief: "{{ route('logo.brief.thankyou') }}",
                thankyou: "{{ route('front.thankyou') }}",
            },
            imagePath: "{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}",
        };
    </script>

    <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/ScrollTrigger.min.js   ') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/intlTelInput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/typewriter-effect@2.21.0/dist/core.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/briefchat.js') }}"></script>


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

    @if(Request::is('brief'))
    <script type="text/javascript" src="{{ asset('frontend/assets/js/webbrief-zopim.js') }}"></script>
    @endif

    @if(Request::is('logo-brief'))
    <script type="text/javascript" src="{{ asset('frontend/assets/js/logobrief-zopim.js') }}"></script>
    @endif

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/parallax.min.js') }}"></script>


<script>
//     jQuery(document).ready(function() {
//     // Function to toggle buttons based on active step
//     function toggleButtons() {
//         var step7 = jQuery('#step-7');
//         var nextStepButton = jQuery('#controls-step-1');
//         var submitButton = jQuery('#controls-step-7');

//         if (step7.hasClass('active')) {
//             nextStepButton.hide();
//             submitButton.show();
//         }
//         else {
//             nextStepButton.show();
//             submitButton.hide();
//         }
//     }

//     // Event listener for when the steps change (assuming you have a mechanism to toggle active classes on steps)
//     jQuery('.next-step').on('click', function() {
//         // Toggle buttons whenever a step area is clicked (assuming this changes the active state of steps)
//         toggleButtons();
//     });

//     // You might need to adjust the event triggering based on how your steps are navigated (click, scroll, etc.)

//     jQuery( "#nextstepsubmit" ).on( "click", function() {
//       setTimeout(function() {
//         jQuery("#step-7").addClass("completed");
//         jQuery("#step-7").removeClass("active");
//         jQuery("#step-8").addClass("active");
//     }, 3000);
//     });
// });

jQuery(document).ready(function(){

    // Get the current URL

        setTimeout(function(){
             //var tag_new = jQuery("template").eq(38).attr("id");
             var tag_new = jQuery("template").last().attr("id");
             console.log(tag_new);
             //alert(tag_new);
             jQuery("#" + tag_new).css("display", "none");
             jQuery("#" + tag_new).next().next().css("display", "none");
        }, 100);
        });

    jQuery(document).ready(function() {
        jQuery("#industry").change(function(e) {
            var selectedOption = jQuery(this).find('option:selected');
            var industryName = selectedOption.data('industryname');
            jQuery(document).find('#industryName').val(industryName);
            console.log('Selected industry name: ' + industryName);
        });

        jQuery.ajax({
            type: "GET",
            url: 'https://www.websitedigitals.com/website-builder/api/project/industry',
            success: function (response) {
                let industryHTML = '<option selected disabled hidden>Please Select Your Industry</option>';
                //let industryHTMLDiv = '<li data-value="Select Your Industry" class="option selected disabled focus">Select Your Industry</li>';

                if(response?.data) {
                    const industries = response?.data;

                    industries?.forEach((record) => {
                        industryHTML += '<option value="' + record.id + '" data-industryName="' + record.industry + '">' + record.industry + '</option>';
                    });

                } else {
                    alert('There is no project.');
                }
                const industryDiv = jQuery(document).find('.industryDiv');
                industryDiv.find('#industry').html(industryHTML);

                jQuery('select').niceSelect('update');
            },
            error: function () {
                /*jQuery('.contactsecnpagealert .alert-danger').fadeIn();*/
            }
        });
    });

</script>

<script>
        jQuery(document).ready(function() {
            // Check if the cookie exists and show popup accordingly
            setTimeout(function() {
            if (getCookie('popupShown') !== 'true') {
                jQuery('#popupformcomplete').addClass("show-popup");
                jQuery('.offer-popup-bg').addClass("show-popup");
            }
            }, 7000); // 5000 milliseconds = 5 seconds

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


    <script>

    </script>


    <script>
    /*jQuery(document).ready(function () {
        // Function to add stepsevenactive class and save it in local storage
        function addStepSevenActiveClass() {
            if (jQuery('#step-7').hasClass('active')) {
                jQuery('#step-7').addClass('stepsevenactive');
                // Save to local storage
                localStorage.setItem('stepSevenActive', 'true');

                jQuery('.steps-form').addClass('remove-step');

                jQuery("#step-1").remove();
                jQuery("#step-2").remove();
                jQuery("#step-3").remove();
                jQuery("#step-4").remove();
                jQuery("#step-5").remove();
                jQuery("#step-6").remove();
            }
        }

        // On click of .next-step button
        jQuery(".next-step").click(function() {
            addStepSevenActiveClass();
        });

        // On page load, check if the stepsevenactive class should be re-applied
        if (localStorage.getItem('stepSevenActive') === 'true') {
            jQuery('#step-7').addClass('stepsevenactive');
        }
    });*/


    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
</script>


<script>

    document.addEventListener('DOMContentLoaded', function() {
        var getUrl = window.location.href;
        console.log(getUrl);
        var urlname = 'https://websitedigitals.com/thank-you/';

        // Ensure you are on the thank-you page

            // Retrieve the 'fullName' value from localStorage
            var getfullname = localStorage.getItem("fullName");

            // Check if 'fullName' exists in localStorage
            if (getfullname) {
                // Set the text content of the element with id 'thankyougetname'
                document.getElementById('thankyougetname').textContent = getfullname;
            }
            else {
                // Fallback text if 'fullName' is not available
                document.getElementById('thankyougetname').textContent = 'Guest';
            }

            // Optionally clear localStorage if it's no longer needed
            /*localStorage.removeItem('fullName');*/

    });

</script>

@stack('customScripts')
  </body>
</html>
