<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (!empty($failed_data['title']) ? $failed_data['title'] : "Page Expired") }}</title>
    
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
        .alertmessage{ border-bottom: 3px solid #ff3e2d; border-radius: 0; box-shadow: 3px 3px 16px -3px #ccc; background-color: #fee3e1; }
        .alertmessage .alertmaindiv { display: flex; align-items: center; }
        .alertmessage .crossicon > a { color: #ff3e2d; text-decoration: none; font-size: 40px; }
        .alertmessage h5{
            color: #ff3e2d;
            margin: 0;
            font-weight: 700;
            font-size: 1rem;
        }
        .alertmessage p{
            color: #505050;
            line-height: 1.2;
            margin-bottom: 4px;
            font-size: 14px;
            margin-top: 5px;
        }
        .alertmessage .crossicon { margin-right: 15px; margin-top: -5px; }
        .alertmessage .errorcontent a { color: #ff3e2d; text-decoration: none; font-weight: 600; }
    </style>
</head>

<body>
  
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
                            <h5>Error!!!</h5>
                            <p>{{ (!empty($failed_data['heading']) ? $failed_data['heading'] : "Page Expired") }}</p>
                            <p>{{ (!empty($failed_data['message']) ? $failed_data['message'] : "" ) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if(!empty($data))
                <div class="col-md-4">
                    <div class="details-area">
                        <div class="details-heading">
                            <span class="desktop-num">3</span>
                            <span class="mobile-num">1</span>
                            <h2>Billing Invoice</h2>
                        </div>
                        <ul class="packageDetails">
                            <li>
                                <h5>{{ (!empty($data["item_name"]) ? $data["item_name"] : "") }}</h5>
                            </li>
                            <li>
                                <span class="thickfont">Item Price</span>
                                <b>{{ (!empty($data["countrycurrencies"]["currency_code"]) ? $data["countrycurrencies"]["currency_code"] : "") }} {{ (!empty($data["price"]) ? $data["price"] : "") }}</b>
                            </li>
            
                            <li>
                                <span>Total ({{ (!empty($data["countrycurrencies"]["currency_code"]) ? $data["countrycurrencies"]["currency_code"] : "") }})</span>
                                <strong>{{ (!empty($data["countrycurrencies"]["currency_code"]) ? $data["countrycurrencies"]["currency_code"] : "") }} {{ (!empty($data["price"]) ? $data["price"] : "") }}</strong>
                            </li>
                            
                        </ul>

                        <div class="complete">
                            <img src="{{ asset('frontend/assets/payment/img/4.jpg') }}" alt="moneyback" />
                            <img src="{{ asset('frontend/assets/payment/img/5.png') }}" alt="moneyback" />
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>