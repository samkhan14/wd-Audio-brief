<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Website Digitals</title>
    <style>
    .invoice-box{ max-width:800px; margin:auto; padding: 30px; border:1px solid #eee; box-shadow:0 0 10px rgba(0, 0, 0, .15); font-size:16px; line-height:24px; font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color:#555; }
    .invoice-box table{ width:100%; line-height:inherit; text-align: left; }
    .invoice-box table td{ padding:5px; vertical-align:top; }
    .invoice-box table tr td:nth-child(2){ text-align: right; }
    .invoice-box table tr.top table td{ padding-bottom:20px; }
    .invoice-box table tr.top table td.title { font-size:45px; line-height:45px; color:#333; }
    .invoice-box table tr.information table td{ padding-bottom:40px; }
    .invoice-box table tr.heading td{ background:#eee; border-bottom:1px solid #ddd; font-weight:bold; }
    .invoice-box table tr.details td{ padding-bottom:1px solid #eee; }
    .invoice-box table tr.item td{ border-bottom:1px solid #eee; }
    .invoice-box table tr.item.last td{ border-bottom:none; }
    .invoice-box table tr.total td:nth-child(2){ border-top:2px solid #eee; font-weight:bold; }
    .btn-div { margin-bottom: 30px; margin-top: 10px; }
    .btn-div a { background: linear-gradient(to right, #3c7cff 0%, #3c7cff 100%) !important; margin-left: 10px; color: white; font-weight: 600; border-radius: 4px; padding: 12px 45px; margin: 0 auto; text-align: center; text-decoration: none; margin-left: 20px; }
    .highlight{ background: linear-gradient(to right, #3c7cff 0%, #3c7cff 100%); color: white; padding: 4px; border-radius: 10px; }
    #read_main { display: none; }
    .btn-success { color: #fff; background-color: #28a745; border-color: #28a745;}

    .btn-success:hover { color: #fff; background-color: #218838; border-color: #1e7e34; }
    .btn-success:focus, .btn-success.focus { box-shadow: 0 0 0 0.2rem rgba(72,180,97,.5); }
    .btn.focus, .btn:focus { outline: 0; }
    .btn:hover { text-decoration: none; }

    .btn { display: inline-block; font-weight: 400; text-align: center; vertical-align: middle; -moz-user-select: none; -ms-user-select: none; user-select: none; border: 1px solid transparent; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; border-radius: 0.25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{ width:100%; display:block; text-align:center; }
        .invoice-box table tr.information table td{ width:100%; display:block; text-align:center; }
    }
    </style>

</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo.png" alt="Site Logo - Website Digitals" style="width:100%; max-width:200px;">
                            </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <!--<tr>
                <td colspan="2">{{ (!empty($data["name"]) ? "Hi ".$data["name"]."," : "Dear Customer,") }} <br><br>
                    I am Ron, Custom Design Unit Manager from LogoGrand. I just got your logo briefing from the website. Our team of dedicated designers will be getting started on your project.
                    <br><br>Meanwhile, you can discuss with us on website chat or view our packages. If you have any questions, just reply on this email, I am always here to help. <br><br>
                    <div class="btn-div" align="center"><a href="" class="btn"> Discuss Now </a> <a href="" class="btn"> View Packages </a></td>
            </tr>-->
            
            <tr class="heading">
                <td>
                    Client Information For Brief
                </td>
                
                <td>
                    
                </td>
            </tr>

            <tr class="item">
                <td> Customer Name </td>
                
                <td>
                    <b>{{ $data['name'] }}</b>
                </td>
            </tr>
           
            @if(!empty($data['cname']) && $data['cname']>0)
            <tr class="item">
                <td> Business Name </td>
                
                <td>
                    <b>{{ $data['cname'] }}</b>
                </td>
            </tr>
            @endif

            <tr class="item">
                <td> Customer Email </td>
                
                <td>
                    <b><a rel="nofollow" style='text-decoration:none; color:#666666'>{{ $data['email'] }}</a></b>
                </td>
            </tr>
            
            @if(!empty($data['number']) && $data['number']>0)
                <tr class="item">
                    <td> Mobile No # </td>
                    
                    <td>
                        <b>{{ $data['number'] }}</b>
                    </td>
                </tr>
            @endif
            
            @if(!empty($data['industry']) && $data['industry']>0)
            <tr class="item">
                <td> Industry </td>
                
                <td>
                    <span class="highlight">{!! $data['industry'] !!}</span> 
                </td>
            </tr>
            @endif
            
            @if(!empty($data['keyword']) && $data['keyword']>0)
                <tr class="item">
                    <td> Keyword </td>
                    
                    <td>
                        <b>{{ $data['keyword'] }}</b>
                    </td>
                </tr>
            @endif

            @if(!empty($data['slogan']) && $data['slogan']>0)
                <tr class="item">
                    <td> Slogan </td>
                    
                    <td>
                        <b>{{ $data['slogan'] }}</b>
                    </td>
                </tr>
            @endif

            
            @if(!empty($data['websiteType']) && $data['websiteType']>0)
            <tr class="item">
                <td> Website Service </td>
                
                <td>
                    <span class="highlight">{{ $data['websiteType'] }}</span>
                </td>
            </tr>
            @endif

            @if(!empty($data['service']) && $data['service']>0)
            <tr class="item">
                <td> Website Category </td>
                
                <td>
                    <b>{{ $data['service'] }}</b>
                </td>
            </tr>
            @endif
            
            @if(!empty($data['style']) && $data['style']>0)
            <tr class="item">
                <td> Style </td>
                
                <td>
                    @php
                            $selected_styles = explode(",", $data['style']);
                            foreach($selected_styles as $style) {
                                echo '<span class="highlight">'.$style.'</span> ';
                            }
                    @endphp
                </td>
            </tr>
            @endif


        </table>
    </div>
</body>
</html>
