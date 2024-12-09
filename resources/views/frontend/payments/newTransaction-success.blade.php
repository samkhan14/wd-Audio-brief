<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Payment Successful | {{ (!empty($data['itemprice']) ? "Amount: ".$data['currency'].$data['itemprice'] : "") }} {{ (!empty($data['itemname']) ? ' | Item Name: ' . $data['itemname'] : '') }}</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ env('IMAGE_PATH') == '' ? asset('frontend/assets/images/') : env('IMAGE_PATH') }}/whimstoons2-03.svg?format=png">
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/assets/payment/css/style.css?1') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
        .header { background: #fff; }
        .header { border: 1px solid #fff;}
        .header { position: relative;  width: 100%; padding: 7px 0 9px 0; z-index: 100;  transition: all .5s; }
        .bg-light {background-color: #FFC444!important;}
        .section-heading {background-color: #FFC444; }
        .section-heading{padding: 3px 10px 3px 3px; border-radius: 5px; color: #fff;}
        .generalClass .section-heading,.generalClass .btn-primary, .generalClass .btn-primary:not(:disabled):not(.disabled).active, .generalClass .btn-primary:not(:disabled):not(.disabled):active, .generalClass .show>.btn-primary.dropdown-toggle {background-color: #FFC444; border-color: #FFC444;}
        .generalClass .badge-secondary { color: #FFC444; }
        .generalClass .badge-secondary { padding: .25em 0.6em; font-size: 100%; }
        .badge-secondary { color: #FFC444; }
        .badge-secondary { background-color: #ffffff; margin-right: 10px; border-radius: .25rem 0 0 .25rem; }
        .company_number{ color: #ffffff;}


        .alertmessage{
            border-bottom: 3px solid #5cb85c;
            border-radius: 0;
            box-shadow: 3px 3px 16px -3px #ccc;

        }
        .alertmessage .alertmaindiv{
            display: flex;
            align-items: center;
        }
        .alertmessage .crossicon > a{
            color: #5cb85c;
            text-decoration: none;
            font-size: 40px;
        }
        .alertmessage h5{
            color: #5cb85c;
            margin: 0;
            font-weight: 700;
        }
        .alertmessage p{
            color: #505050;
            line-height: 1.2;
            margin-bottom: 4px;
            font-size: 14px;
            margin-top: 5px;
        }
        .alertmessage .crossicon{
            margin-right: 15px;
            margin-top: -5px;
        }
        .alertmessage .errorcontent a{
            /* margin-left: 41px; */
            color: #5cb85c;
            text-decoration: none;
            font-weight: 600;
        }
    </style>

     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78483782-1"></script>
     <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());
       gtag('config', 'UA-78483782-1');
     </script> 
     <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W85C7827');</script>
    <!-- End Google Tag Manager -->
     
     <!-- Global site tag (gtag.js) - Google Ads:944522308 -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=AW-944522308"></script>
     <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());
 
       gtag('config', 'AW-944522308',{'allow_enhanced_conversions': true});
     </script>
     
     <script>
         dataLayer.push({
           'event': 'gtm4wp.orderCompletedEEC',
           'ecommerce': {
             'purchase': {
               'actionField': {
                 'id': '{{ (!empty($data['invoice_id']) ? $data['invoice_id'] : "") }}', // Transaction ID. Required           
                 'revenue': '{{ (!empty($data['itemprice']) ? $data['itemprice'] : "") }}', // Total transaction value (incl. tax and shipping)
               },
               'products': [{ // List of productFieldObjects.
                 'name': '{{ (!empty($data['itemname']) ? $data['itemname'] : 'Item') }}', // Name or ID is required.
                 'id': '{{ (!empty($data['invoice_id']) ? $data['invoice_id'] : "") }}',
                 'price': '{{ (!empty($data['itemprice']) ? $data['itemprice'] : "") }}',
               }] //expand this array if more product exists
             }
           }
         });
     </script> 
     
     <script> 
         gtag("event", 
             "purchase", { 
                 "send_to": "UA-78483782-1",
                 "transaction_id": '{{ (!empty($data['invoice_id']) ? $data['invoice_id'] : "") }}',
                 "affiliation": "{{ (!empty($data['original_price']) ? $data['original_price'] : "") }}",
                 "value": '{{ (!empty($data['itemprice']) ? $data['itemprice'] : "") }}', 
                 "currency": "USD",
                 "items": [{
                     "id": "{{ (!empty($data['invoice_id']) ? $data['invoice_id'] : "") }}",
                     "name": "{{ (!empty($data['itemname']) ? $data['itemname'] : 'Item') }}",
                     "category": "{{ (!empty($data['category']) ? $data['category'] : "") }}",
                     "quantity": 1, 
                     "price": "{{ (!empty($data['itemprice']) ? $data['itemprice'] : "") }}"
                     },
                 ]}
             );
     </script>
     
     <!-- Google Tag Manager -->	
     <script async type="text/javascript" id="">window.$zopim||function(c,d){var b=$zopim=function(a){b._.push(a)},a=b.s=c.createElement(d),e=c.getElementsByTagName(d)[0];b.set=function(a){b.set._.push(a)};b._=[];b.set._=[];a.async=!0;a.setAttribute("charset","utf-8");a.src="//v2.zopim.com/?46s4nS77ONjbb1saytlDvaxrZFQJpC1o";b.t=+new Date;a.type="text/javascript";e.parentNode.insertBefore(a,e)}(document,"script");</script>
     <!-- End Google Tag Manager -->

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
    fbq('track', 'Purchase', {value: {{ (!empty($data['itemprice']) ? $data['itemprice'] : 0.00) }}, currency: 'USD'});
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
                        <div class="loader-bg">
                            <i class="fa fa-spinner fa-spin loader-spin" aria-hidden="true"></i>
                        </div>
                        <div class="alert alert-success alertmessage" role="alert">
                        <div class="alertmaindiv">
                            <div class="crossicon">
                                <a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                            </div>
                            <div class="errorcontent">
                                <h5>Transaction Successful!</h5>
                                <p>Thank you for choosing our services! We are delighted to inform you that your transaction has been successfully processed. Your satisfaction is our top priority, and we look forward to serving you again in the future.</p>
                            </div>
                        </div>
                    </div>
                     <input type="hidden" id="invoice_id" name="invoice_id" value="{{ (!empty($data['invoice_id']) ? $data['invoice_id'] : '') }}">        
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
                                <h5>{{ (!empty($data["itemname"]) ? $data["itemname"] : "") }}</h5>
                            </li>
                            <li>
                                <span class="thickfont">Item Price</span>
                                <b>{{ (!empty($data["currency"]) ? $data["currency"] : "") }} {{ (!empty($data["itemprice"]) ? $data["itemprice"] : "") }}</b>
                            </li>
            
                            <li>
                                <span>Total ({{ (!empty($data["currency"]) ? $data["currency"] : "") }})</span>
                                <strong>{{ (!empty($data["currency"]) ? $data["currency"] : "") }} {{ (!empty($data["itemprice"]) ? $data["itemprice"] : "") }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-center">
                                <a href="{{ route('client.payment.download.invoice',['id'=>$data['payment_id'],'download'=>'pdf']) }}" class="btn btn-success">Download Invoice</a>
                            </li>
                        </ul>

                        <div class="complete">
                            <img src="{{ asset('frontend/assets/payment/img/4.jpg') }}" alt="moneyback" />
                            <img src="{{ asset('frontend/assets/payment/img/5.png') }}" alt="moneyback" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.min.js"></script>

    <script>
        var invoice_id = $("#invoice_id").val();
        $.ajax({
            type: "POST",
            url: '{{ route("payment.sendEmailToClient") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {invoice_id:invoice_id},                     
            success: function(result) {
           
            if(result == true) {
                console.log("Sent.");
            } else {
                console.log(result.data.message);
            }
            
       }});
        
    </script>

</body>
</html>