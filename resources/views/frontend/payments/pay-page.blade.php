<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <title>Payment Checkout {{ (!empty($item_detail) ? " | Item Name: ".$item_detail->item_name : "") }} | Amount : {{ (!empty($country_currency) ? $country_currency->currency_symbol : "") }}{{ (!empty($item_detail) ? $item_detail->price : "") }} | Whimsitoons</title>

    <link rel="icon" type="image/x-icon" href="{{ env('IMAGE_PATH') == '' ? asset('frontend/assets/images/') : env('IMAGE_PATH') }}/whimstoons2-03.svg?format=png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('frontend/assets/payment/css/style.css?1') }}" rel="stylesheet" type="text/css" />

    <style>
        :root {
            --default-color: #FFC444;
            /*--bg-color: #FFC444;*/
            --bg-color: #f5f4f4;
            --nav-bg-color: #fff;
            --border-radius: 5px;
            --menu-padding: 20px 15px;
            --bg-shadow: rgba(0, 0, 0, 0.06) 1px 1px 0px 1px;
            --bg-padding: 20px;
            --heading-font-size: 24px;
            --container-width: 1170px;
            --default-fontFamily: "Poppins", sans-serif;
            --header-fontFamily: "Poppins", sans-serif;
            --header-fontColor: #ffffff;
        }
        
        .loader-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, .6); border-radius: calc(var(--border-radius) * 2); z-index: 10000; transition: all .3s; opacity: 0; visibility: hidden; display: flex; justify-content: center; align-items: center; }
        .show-bg, .show-popup { opacity: 1; visibility: visible; }
        .loader-spin { color: #ffffff; font-size: 3em !important; }
        .card-errors > ul > li {margin-top: -14px; margin-bottom: 14px; color: #ff0000; font-size: 13px;}
        .alert-div { position: absolute; bottom: 0px; transform: translate(0, calc(100% + 6px)); z-index: 10; left: 0px; display: none; background: #f8d7da; color: #721c24; max-width: fit-content; padding: 8px 12px; border-radius: 4px; font-size: 13px; }
        .alert-div:before { content: ""; display: block; position: absolute; top: -18px; left: 20px; transform: rotate(359deg); border-width: 10px; border-style: solid; border-color: transparent transparent #f8d7da transparent; }
        .details-area{ position: relative; }

        @media (max-width: 767px) {
          :root {
            --heading-font-size: 20px !important;
          }
        
          .packageDetails > li > h5 {
            font-size: 18px;
          }
        
          .cardnumberarea {
            padding-left: 0;
          }
          
          .cardInputArea::before {
            display: none;
          }
        
          .cvcarea {
            min-width: 46px;
          }
        
          .exp-datearea {
            min-width: 72px;
          }
        
          #cvc, #exp-date {
            padding-left: 7px;
            padding-right: 7px;
          }
          
          .detailsInput input, .detailsInput select {
            font-size: 14px;
          }
        }
   </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W85C7827');</script>
    

    	<script async type="text/javascript" id="">window.$zopim||function(c,d){var b=$zopim=function(a){b._.push(a)},a=b.s=c.createElement(d),e=c.getElementsByTagName(d)[0];b.set=function(a){b.set._.push(a)};b._=[];b.set._=[];a.async=!0;a.setAttribute("charset","utf-8");a.src="//v2.zopim.com/?46s4nS77ONjbb1saytlDvaxrZFQJpC1o";b.t=+new Date;a.type="text/javascript";e.parentNode.insertBefore(a,e)}(document,"script");</script>
    <!-- End Google Tag Manager -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78483782-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-78483782-1');
    </script>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '844508477215698');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=844508477215698&ev=PageView&noscript=1"
    /></noscript>
<!-- End Meta Pixel Code -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W85C7827"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{ route('front.home') }}">
                            <img loading="lazy" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/assets/images/') : env('IMAGE_PATH') }}/whimstoons2-01.svg?format=png" alt="Site Logo - Whimsitoons" />
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="tel:(917) 999-9640"><i class="fa fa-phone">&nbsp;</i>(917) 999-9640</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="form-area">
        <div class="container">
            <div class="row mob-reverse">
                <div class="col-md-8">
                   
                    <div class="details-area">
                        <div class="loader-bg">
                            <i class="fa fa-spinner fa-spin loader-spin" aria-hidden="true"></i>
                        </div>
                        <form id="payment-form">
                            @csrf
                            <div class="details-heading">
                                <span class="desktop-num">1</span>
                                <span class="mobile-num">2</span>
                                <h2>Billing Information</h2>
                            </div>
                            <div class="details-input-area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control firstname" id="firstname" name="firstname" placeholder="First Name" autocomplete="given-name" value="{{ isset($oldInput['firstname']) ? $oldInput['firstname'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control lastname" id="lastname" name="lastname" placeholder="Last Name" autocomplete="family-name" value="{{ isset($oldInput['lastname']) ? $oldInput['lastname'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control clientemail" id="email" data-type="email" name="clientemail" placeholder="Email Address" autocomplete="email username" value="{{ isset($oldInput['clientemail']) ? $oldInput['clientemail'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detailsInput">
                                            <input type="text" id="phone" name="phonenum" data-maxlength="20" data-type="number" class="form-control phonenum" autocomplete="off" value="{{ isset($oldInput['phonenum']) ? $oldInput['phonenum'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control address" id="address" name="address" data-maxlength="600" placeholder="Address" autocomplete="address-line1" value="{{ isset($oldInput['address']) ? $oldInput['address'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control companyName" id="companyName" name="companyname" data-maxlength="50" placeholder="Company Name" autocomplete="organization" value="{{ isset($oldInput['companyname']) ? $oldInput['companyname'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detailsInput">
                                            <select name="country" id="country" class="form-control country" autocomplete="country">
                                                @if(!empty($oldInput['country']))
                                                <option value="{{ isset($oldInput['country']) ? $oldInput['country'] : ''}}" selected>{{ $oldInput['country'] }}</option>
                                                @else
                                                <option value="" selected disabled>Select Your Country</option>
                                                @endif
                                            </select>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control statename" name="statename" id="statename" placeholder="State" autocomplete="address-level1" value="{{ isset($oldInput['statename']) ? $oldInput['statename'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control city" id="city" name="city" placeholder="City" autocomplete="address-level2" value="{{ isset($oldInput['city']) ? $oldInput['city'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="detailsInput">
                                            <input type="text" class="form-control zipcode" name="zipcode" data-minlength="3" min="0" data-maxlength="9" id="zip" placeholder="Zip Code" autocomplete="postal-code" value="{{ isset($oldInput['zipcode']) ? $oldInput['zipcode'] : ''}}"/>
                                            <div class="alert-div" id="form-error-box"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="details-heading">
                                <span class="desktop-num">2</span>
                                <span class="mobile-num">3</span>
                                <h2>Payment Information</h2>
                            </div>
                            <div class="details-input-area">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="detailsInput cardInputArea" id="cardInputArea">
                                            <div class="cardnumberarea detailsInput m-0">
                                              <input type="text" class="form-control cardNo" name="cardNo" id="cardnumber" inputmode="numeric" placeholder="Card number"/>
                                              <div class="alert-div" id="form-error-box"></div>
                                            </div>
                                            <div class="exp-datearea detailsInput m-0">
                                              <input type="text" class="form-control exp-date" name="exp-date" id="exp-date" inputmode="numeric" placeholder="MM / YY"/>
                                              <div class="alert-div" id="form-error-box"></div>
                                            </div>
                                            <div class="cvcarea detailsInput m-0">
                                              <input type="text" class="form-control cvc" name="cvc" id="cvc" inputmode="numeric" placeholder="CVC"/>
                                              <div class="alert-div" id="form-error-box"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 error-box" id="error-box"></div>
                                    <div class="col-12">
                                        <input type="hidden" id="final_itemprice" name="itemprice" class="itemprice" value="{{ (!empty($item_detail) ? $item_detail->price : '') }}" />
                                        <input type="hidden" name="itemname" id="itemname" class="itemname" value="{{ (!empty($item_detail) ? $item_detail->item_name : '') }}" />
                                        <input type="hidden" name="ptoken" value="{{ (!empty($item_detail) ? $item_detail->token : '') }}" />
                                        <input type="hidden" name="discount" id="discount" value="{{ (!empty($item_detail) ? $item_detail->discount : '') }}">
                                        <input type="hidden" name="original_amount" id="original_amount" value="{{ (!empty($item_detail) ? $item_detail->price : '') }}">
                                        <input type="hidden" name="payment_gateway" value="{{ (!empty($item_detail) ? $item_detail->payment_gateway : '') }}">
                                        <input type="hidden" name="currency" value="{{ (!empty($country_currency) ? $country_currency->currency_code : "") }}" />
                                        <input type="hidden" id="coupon_id" name="coupon_id" class="coupon_id" value="" />
                                        <input type="hidden" id="currency_symbol" name="currency_symbol" value="{{ (!empty($country_currency) ? $country_currency->currency_symbol : "") }}">
                                        <input type="hidden" id="payment_error" name="payment_error" value="">
                                        <input type="hidden" id="payment_message" name="payment_message" value="">
                                        <input type="hidden" id="payment_response" name="payment_response" value="">
                                        <input type="hidden" id="3DSecure_Popup" name="3DSecure_Popup" value="0">
                                        <div class="card-errors"></div>
                                        <button type="submit" id="card-button" class="form-submit">Pay Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="details-area">
                        <div class="details-heading">
                            <span class="desktop-num">3</span>
                            <span class="mobile-num">1</span>
                            <h2>Billing Invoice</h2>
                        </div>
                        <ul class="packageDetails">
                            <li>
                                <h5>{{ (!empty($item_detail) ? $item_detail->item_name : "") }}</h5>
                            </li>
                            <li>
                                <span class="thickfont">Item Price</span>
                                <b>{{ (!empty($country_currency) ? $country_currency->currency_code : "") }} {{ (!empty($item_detail) ? $item_detail->original_price : "") }}</b>
                            </li>
                            
                            @if(!empty($item_detail->discount))
                                <li class="discount">
                                    <span class="thickfont">Discount</span>
                                    <b>{{ $country_currency->currency_code }} {{ $item_detail->original_price - $item_detail->price }}</b>
                                </li>
                            @endif

                            <li>
                                <span>Total ({{ (!empty($country_currency) ? $country_currency->currency_code : "") }})</span>
                                <strong>{{ (!empty($country_currency) ? $country_currency->currency_code : "") }} {{ (!empty($item_detail) ? $item_detail->price : "") }}</strong>
                            </li>
                        </ul>
                        
                        <div class="coupon-div"> 
                            <div class="input-group">
                                <input type="text" class="form-control coupon-code" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="button" id="" class="btn btn-secondary apply-coupon">Redeem</button>
                                </div>
                            </div> 
                            <div class="coupon-response-div"></div>
                        </div>
                        
                        <div class="complete">
                            <img src="{{ asset('frontend/assets/payment/img/4.jpg') }}" alt="moneyback" />
                            <img src="{{ asset('frontend/assets/payment/img/5.png') }}" alt="moneyback" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js" integrity="sha512-+gShyB8GWoOiXNwOlBaYXdLTiZt10Iy6xjACGadpqMs20aJOoh+PJt3bwUVA6Cefe7yF7vblX6QwyXZiVwTWGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('frontend/assets/payment/js/countries.js') }}"></script>
    <script src="{{ asset('frontend/assets/payment/js/payment.js') }}"></script>
    <script src="{{ asset('frontend/assets/payment/js/stripe.js') }}" 
    data-publicKey="{{ $payment_gateway->public_key }}"
    data-createPaymentMethod="{{ route('payment.stripe.createPaymentMethod') }}"
    data-checkoutRoute="{{ route('payment.store.checkout') }}"
    data-paymentintent="{{ route('payment.stripe.paymentIntent_3d') }}"
></script>

<script>
    var waitForZopim = setInterval(function () {
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        }
        
        $zopim(function() {
            $zopim.livechat.setOnUnreadMsgs(unread);
            function unread(number) {
                if (number>=1) {
                    var ua = navigator.userAgent.toLowerCase(), platform = navigator.platform.toLowerCase();
                    platformName = ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0],
                    isMobile = /ios|android|webos/.test(platformName);
                    if (!isMobile) {
                        $zopim.livechat.window.show();
                    }
                    $zopim.livechat.window.hide();
                }
            }
        }); 
        clearInterval(waitForZopim);
    }, 3000);
    
    $(document).on("change", "#lastname", function(e) {
        let firstName = $("#firstname").val();
        let lastName = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee Name: "+firstName+" "+lastName);
                    $zopim.livechat.appendNotes("Payee Name: "+firstName+" "+lastName);
                });    
            }
        }
    });
    
    $(document).on("change", "#email", function(e) {
        let email = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee Email: "+email);
                    $zopim.livechat.appendNotes("Payee Email: "+email);
                });    
            }
        }
    });
    
    $(document).on("change", "#phone", function(e) {
        let phone = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee Phone: "+phone);
                    $zopim.livechat.appendNotes("Payee Phone: "+phone);
                });    
            }
        }
    });
    
    $(document).on("change", "#address", function(e) {
        let address = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee Address: "+address);
                    $zopim.livechat.appendNotes("Payee Address: "+address);
                });    
            }
        }
    });
    
    $(document).on("change", "#companyName", function(e) {
        let companyName = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee Company Name: "+companyName);
                    $zopim.livechat.appendNotes("Payee Company Name: "+companyName);
                });    
            }
        }
    });
    
    $(document).on("change", "#country", function(e) {
        let country = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee Country: "+country);
                    $zopim.livechat.appendNotes("Payee Country: "+country);
                });    
            }
        }
    });
    
    $(document).on("change", "#statename", function(e) {
        let statename = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee State Name: "+statename);
                    $zopim.livechat.appendNotes("Payee State Name: "+statename);
                });    
            }
        }
    });
    
    $(document).on("change", "#city", function(e) {
        let city = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee City: "+city);
                    $zopim.livechat.appendNotes("Payee City: "+city);
                });    
            }
        }
    });
    
    $(document).on("change", "#zip", function(e) {
        let zip = $(this).val();
        
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        } else {
            if(waitForZopim) {
                $zopim(function() {
                    $zopim.livechat.addTags("Payee Zip Code: "+zip);
                    $zopim.livechat.appendNotes("Payee Zip Code: "+zip);
                });    
            }
        }
    });
</script>
</body>

</html>