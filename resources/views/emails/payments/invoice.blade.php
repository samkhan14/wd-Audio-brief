<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
    	body,table,thead,tbody,tr,td,img { padding: 0; margin: 0; border: none; border-spacing: 0px; border-collapse: collapse; vertical-align: top; font-family: 'Helvetica', 'Arial', sans-serif; font-size: 14px; color: #9c9c9c; }
        .background { background-color: #FFC444; }
        .white-background { background-color: #ffffff; }
        .background p { font-weight: 500; margin: 0; line-height: 1.5; }
        .header-padding { padding: 30px 20px; color: #ffffff; }
        .header-padding p { text-align: right; }
        .header-padding a { color: #ffffff; text-decoration: none; }
        .logo { width: 100%; max-width: 150px; }
        .customer-sec-padding { padding: 30px 20px; }
        .customer-padding h1 { font-size: 12px; color: #9c9c9c; margin-top: 0; }
        .customer-padding p { font-weight: 600; margin: 0; line-height: 1.5; color: #000000; }
        .customer-padding h2 { color: #FFC444; margin-top: 0; font-size: 34px; }
        .client-heading { padding: 10px 20px; }
        .client-heading p { color: #ffffff; font-size: 16px; }
        .client-detail { padding: 14px 20px; font-weight: 600; color: #666666; }
        .client-detail a { color: #666666; text-decoration: none; }
        .dark { background: #f0f0f0; }
        .client-detail b { font-weight: 800; color: #777777; }
        .footer-text p { margin: 0; line-height: 1.5; }
        .footer-text a { color: #9c9c9c; text-decoration: none; }
        .footer-text h2 { margin: 0; color: #FFC444; font-size: 31px; font-weight: 900; line-height: 1; }
        .top-footer { border-bottom: 2px solid; #FFC444; padding: 30px 20px 15px 20px; }
        .bottom-footer { padding: 15px 30px 30px 20px; }
    </style>


</head>

<body>

    	<table width="100%">
        <tbody>
        	<tr>
                <td width="800%" align="center">
					<table cellpadding="0" cellspacing="0" class="background" style="width: 100%; max-width: 800px;">
                        <tbody><tr>
                            <td>
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="left" class="header-padding">
                                                <img src="{{ asset('frontend/assets/images/logo-black-white.png') }}" alt="BrandCRM" class="logo">
                                            </td>
                                            <td align="right" class="header-padding" style="width: 150px;"> 
                                                <p>(917) 999-9640</p>
                                                <p><a rel="nofollow" style='text-decoration:none; color:#ffffff'>info@whimsitoons.com</a></p>
                                                <p><a rel="nofollow" style='text-decoration:none; color:#ffffff'>{{ url('') }}</a></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody></table>
                    <table cellpadding="0" cellspacing="0" class="white-background" style="width: 100%; max-width: 800px;">
                        <tbody><tr>
                            <td class="customer-sec-padding">
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="left" class="customer-padding" style="width: 200px;">
                                                <h1>Billed To:</h1>
                                                <p>{{ isset($first_name) ? $first_name : '' }} {{ isset($last_name) ? $last_name : '' }}</p>
                                                <p>{{ isset($address) ? $address : '' }} {{ isset($city) ? $city.', ' : '' }} {{ isset($state) ? $state.', ' : '' }} {{ isset($country_name) ? $country_name.'. ' : ''}}</p>
                                            </td>
                                            <td align="left" class="customer-padding">
                                                <table width="100%">
                                                    <tbody><tr>
                                                        <td>
                                                            <h1>Invoice No:</h1>
                                                            <p>{{ isset($invoice_no) ? $invoice_no : '' }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-top: 20px;">
                                                            <h1>Issue Date:</h1>
                                                            <p>{{ isset($invoice_date) ? $invoice_date : '' }}</p>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                            <td align="right" class="customer-padding" style="width: 300px;"> 
                                                <h1>Invoice Total:</h1>
                                                <h2>{{ isset($currency_symbol) ? $currency_symbol : '' }} {{ isset($price) ? $price : '' }}</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody></table>
                    <table cellpadding="0" cellspacing="0" class="white-background" style="width: 100%; max-width: 800px;">
                        <tbody><tr>
                            <td>
                                <table width="100%" class="background">
                                    <tbody>
                                        <tr>
                                            <td align="left" class="client-heading">
                                                <p>Client Information</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                        <table width="100%" class="white-background client-table" style="border-bottom: 1px solid #9c9c9c;">
                                    <tbody>
                                        <tr>
                                            <td align="left" class="client-detail">
                                             Full Name 
                                            </td>
                                            <td align="left" class="client-detail">
                                                {{ isset($first_name) ? $first_name : ''}} {{ isset($last_name) ? $last_name : '' }}
                                            </td>
                                        </tr>
                                        <tr class="dark">
                                            <td align="left" class="client-detail">
                                              Company 
                                            </td>
                                            <td align="left" class="client-detail">
                                                Whimsitoons
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" class="client-detail">
                                             Email
                                            </td>
                                            <td align="left" class="client-detail">
                                                <a rel="nofollow" style='text-decoration:none; color:#666666'>{{ isset($email) ? $email : '' }}</a>
                                               
                                            </td>
                                        </tr>
                                        <tr class="dark">
                                            <td align="left" class="client-detail">
                                               
                                               Phone No 
                                             
                                            </td>
                                            <td align="left" class="client-detail">
                                                {{ isset($phone_number) ? $phone_number : '' }}
                                             
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" class="client-detail">
                                             Order Category
                                            </td>
                                            <td align="left" class="client-detail">
                                                {{ isset($name) ? $name : '' }}
                                            </td>
                                        </tr><tr class="dark">
                                            
                                         <td align="left" class="client-detail">
                                              Order Description
                                            </td>
                                            <td align="left" class="client-detail">
                                                {!!isset($item_description) ? $item_description : ''!!}
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                        
                                        
                                            <td align="left" class="client-detail">
                                             Package Detail
                                            </td>
                                            <td align="left" class="client-detail">
                                                {{ isset($item_name) ? $item_name : '' }}
                                                {{ isset($currency_symbol) ? $currency_symbol : '' }} {{ isset($price) ? $price : '' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="right" class="white-background">
                                    <tbody>
                                        <tr>
                                            <td align="left" class="client-detail">
                                                <b>Grand Total</b>
                                            </td>
                                            <td align="left" class="client-detail">
                                                <b>{{ isset($currency_symbol) ? $currency_symbol : '' }} {{ isset($price) ? $price : '' }}</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody></table>

                    <table cellpadding="0" cellspacing="0" class="white-background" style="width: 100%; max-width: 800px;">
                        <tbody><tr>
                            <td class="footer top-footer">
                                <table width="100%" class="white-background">
                                    <tbody>
                                        <tr>
                                            <td align="left" class="footer-text">
                                                <p>Questions?</p>
                                                <p><a rel="nofollow" style='text-decoration:none; color:#666666'>info@whimsitoons.com</a></p>
                                                <p>(917) 999-9640</p>
                                            </td>
                                            <td align="right" class="footer-text" style="width: 150px">
                                                <h2>Thank<br>You!</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="footer bottom-footer">
                                <table width="100%" class="white-background">
                                    <tbody>
                                       <!-- <tr>
                                            <td align="left" class="footer-text">
                                                <p><b>Note:</b> We have received reports of chargebacks recently solely due to the customer not knowing our merchant name for the charges applied to their card, Please remember that our merchant account is </i><b>"Orbit Technologies LLC"</b>
                                            </td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody></table>


                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>