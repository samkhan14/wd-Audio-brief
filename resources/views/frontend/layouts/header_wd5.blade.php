<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

<style>
    
    #smoothScrollContent,
    #horizontal-scrollAreaContainer {
        will-change: transform;
    }
    
    #headerHeightArea {
        --header-height: 4.25rem;
        height: var(--header-height);
    }
    
    body:has( #headerHeightArea) .header {
        position: fixed;
        transform: rotateX(0deg);
        transform-origin: 0 0;
        transition: transform 0.3s;
    }
    
    .about-banner-bottom::before {
        bottom: -0.125rem;
    }
    
    .header{
        background: #fff;
        box-shadow: none;
    }
    header.scrolled{
        background: #fff;
        box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
    }
    .progress-area.primary-first{
        --progress-color: var(--primary);
    }
    
    
    
    .pricing-head > img {
        height: 3.875rem;
    }
    .mega-price-img {
        bottom: -8rem;
    }
    .pricing-row{
        padding: 0 4rem;
    }
    .single-pricing .pricing-body-details > ul {
        height: 32vh;
        overflow-y: scroll;
    }    
        
        
    .basic-inputArea > select:has(+ .nice-select) {
        display: block !important;
        position: absolute;
        pointer-events: none;
        z-index: -1;
        opacity: 0;
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
    
    @media (max-width: 576px) {
        .letsGetStated-popup {
            max-width: 21.5rem;
        }
        .offer-left {
            aspect-ratio: 345 / 312;
        }
        
        .letsGetStated-toggle {
            top: 45%;
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
    
    .letsGetStated-popup.hideOnScroll {
        transform: translate(calc(100% + 20rem), 0%);
    }
    
    .popup-inputArea > button, .basic-inputArea > button{
        position: relative;
        overflow: hidden;
    }
    .primary:hover{
        color: #fff !important;
    }
    
    @media (min-width: 992px) {
        .letsGetStated-toggle {
            top: 45%;
        }
    }
 
    
    .letsGetStated-toggle{
        overflow: hidden;
        height: 18rem;
        font-family: "Noto Sans", sans-serif;
        flex-direction: column-reverse;
        font-size: 1rem;
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
    
    .letsGetStated-toggle > i {
        margin-top: 0.5rem;
        transform: rotate(0deg);
        transition: all 0.3s;
        color: #fff;
        z-index: 1;
    }
    
    .letsGetStated-popup.show .letsGetStated-toggle > i {
        transform: rotate(180deg);
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
            .offer-popup .bookNow-left > h3 {
                display: block;
            }
            .offer-popup .popup-close {
                color: #000;
            }
            .pricing-row {
                padding: 0 !important;
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
        
        
        
        
        
        .wd2menu{
            font-size: 0.8125rem;
            /*justify-content: center;*/
        }
        .wd2menu > li:nth-child(1){
            font-weight: 600;
        }
        .wd2menu > li:nth-child(2){
            padding-right: 1rem;
            cursor: pointer;
        }
        .wd2menu > li:nth-child(2) a{
            /*font-weight: 900;*/
            color: var(--primary);
        }
        .wd2menu > li:nth-child(2) a:hover{
            color: var(--primary);
        }
        .wd2menu .glow-text{
            animation: glow-scale 2s infinite;
        }
        .wd2menu .link-area > .primary{
            color: #fff;
            height: auto;
            min-height: auto;
            padding: 0.5rem 1.5rem;
            font-weight: 700;
            animation: glow-scale 2s infinite;
        }
        @keyframes glow-scale {
          0% {
            transform: scale(1); /* Initial scale */
          }
          50% {
            transform: scale(1.05); /* Maximum scale */
          }
          100% {
            transform: scale(1); /* Return to initial scale */
          }
        }
        .offer-popup{
            max-width: 29rem;
        }
        
          .wd2menu .link-area > .primary{
            font-size: 0.75rem;
          }
         .wd2menu > li:nth-child(1){
            font-size: 0.75rem;
         }
         
         .header > .container{
            max-width: 75.375rem;
         }
         
         .header .header_phone:hover a::before {
            content: none;
        }
         
         .header .header_phone a {
            transition: 0.3s;
        }
         
         .header .header_phone:hover a {
            color: var(--primary);
        }

          
        /*@-moz-document url-prefix() {*/
        /*  .wd2menu .link-area > .primary{*/
        /*    font-size: 0.7rem;*/
        /*  }*/
        /*      .wd2menu > li:nth-child(1){*/
        /*          font-size: 0.7rem;*/
        /*      }*/
        /*}*/
        
        /*@supports (-webkit-touch-callout: none) {*/
        /*  .wd2menu .link-area > .primary {*/
        /*    font-size: 0.7rem;*/
        /*  }*/
        
        /*  .wd2menu > li:nth-child(1) {*/
        /*    font-size: 0.7rem;*/
        /*  }*/
        /*}*/
   
        /*@media not all and (min-resolution:.001dpcm) { */
        /*  @supports (-webkit-appearance:none) {*/
        /*    .wd2menu .link-area > .primary {*/
        /*      font-size: 0.7rem;*/
        /*    }*/
        
        /*    .wd2menu > li:nth-child(1) {*/
        /*      font-size: 0.7rem;*/
        /*    }*/
        /*  }*/
        /*}*/


    </style>
    
<style defer>
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
        
        .menu > li > .link-area > button {
            font-size: 0.8125rem;
            padding: 0.85rem 2.5rem;
            min-height: auto;
            height: auto;
        }
        

        
        
@media (min-width: 768px) {
    .horizontal-scrollerItem.first .section-heading > h2 > span {
        display: block;
    }
    
    .horizontal-scrollerItem.first .section-heading > h2 {
        font-size: 3.625rem;
    }
    
    .horizontal-scrollerItem.first .section-heading > h2 > span,
    .horizontal-scrollerItem.first .offer-detailArea,
    .horizontal-scrollerItem.first .section-heading > p {
        transform: translate3d(10rem, 25%, 3rem) rotateX(-80deg);
        opacity: 0;
        transition: transform 1s, opacity 1s;
        transform-origin: 0rem 1.5rem;
    }
    
    
    .horizontal-scrollerItem.first .section-heading > h2 > span {
        transform-origin: 0rem 1.5rem;            
    }
    
    .horizontal-scrollerItem.first .section-heading > h2 > span:nth-child(2) {
        transition-delay: 0.125s;
    }
    
    .horizontal-scrollerItem.first .offer-detailArea {
        transition-delay: 0.25s;
    }
    
    .horizontal-scrollerItem.first .section-heading > p {
        transition-delay: 0.5s;
    }
    
    .horizontal-scrollerItem.first.animate .section-heading > h2 > span,
    .horizontal-scrollerItem.first.animate .offer-detailArea,
    .horizontal-scrollerItem.first.animate .section-heading > p {
        transform: translate3d(0%, 0%, 0rem) rotateX(0deg);
        opacity: 1;
    }
}
</style>




<!--------------------------- WD-9 Page CSS ------------------------------->
<style>
h2, h3{
    font-family: "Poppins", sans-serif;
}
.banner-heading > h1{
    font-family: "Helvetica", sans-serif;
    font-weight: 700;
}
.banner-bottom-text{
    opacity: 0;
}
.section-heading.text-center > h2, .section-heading > h2{
    font-weight: 700;
}
.figure span{
    font-family: "Roboto", sans-serif;
}

.section-heading > h2 sup{
    font-size: 1.1rem;
    top: -.9rem;
    opacity: .5;
    left: .4rem;
}
.section-heading > h2 sup > del{
    position: relative;
    text-decoration: none;
}
.section-heading > h2 sup > del::before{
    content: "";
    display: block;
    width: 100%;
    border-top: 1px solid #000;
    position: absolute;
    bottom: .8rem;
    left: 0;
    transform: rotate(-13deg);
}

.section-heading > h2 sub{
    bottom: 1.2rem;
    left: .4rem;
    font-size: .7rem;
    background-color: #3eb253;
    color: #fff;
    padding: 0.1rem .4rem;
    border-radius: 1rem;
    font-weight: 400;
}
.section-heading > p{
    font-size: 1.325rem;
    font-weight: 500;
}
.horizontal-scrollerItem > img {
    position: absolute;
    top: 1rem;
    right: 2rem;
    width: 16%;
    z-index: -1;
}
.last-scrollerItem .section-heading > h2{
    font-size: 2rem;
}
    .parallex-watermark{
        position: absolute;
        top: 11%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: -1;
        opacity: .8;
        width: 90%;
        height: 7.5rem;
        object-fit: contain;
    }

    .horizontal-price{
        text-align: center;
        margin-top: 1rem;
    }
    .horizontal-price > ul{
        display: inline-flex;
        justify-content: center;
        border: 3px solid #4d86fa;
        width: auto;
        border-radius: 6rem;
        margin-bottom: 1rem;
        background-color: #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        width: 100%;
    }
    .horizontal-price > ul > li{
        width: 100%;
        text-align: center;
        position: relative;
        font-size: 1.15rem;
        color: #000;
        font-weight: 500;
        height: 6.5rem;
        align-content: center;
    }
    .horizontal-price > ul > li.active{
        width: 110%;
        background: radial-gradient(circle at center, #7b7b7b59 -172%, var(--primary));
        border-radius: 6rem 5.5rem 5.5rem 6rem;
        color: #fff;
    }
    .horizontal-price > ul > li.active > p{
        font-size: 2.2rem;
    }
    .horizontal-price > ul > li > p{
        font-size: 2.2rem;
        font-weight: 600;
    }
    .horizontal-price > ul > li:nth-child(1) > img{
        position: absolute;
        top: 50%;
        right: -21%;
        transform: translate(-50%, -50%);
        width: 20%;
        z-index: 1;
    }
    .horizontal-price > ul > li:nth-child(2) > span{
        position: absolute;
        top: 0%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #3cb252;
        padding: 0.2rem 0.5rem;
        border-radius: 6px;
        color: #fff;
        font-size: 1.1rem;
    }
    
    .horizontal-scrollerItem.lightGray-section > span{
        color: #9e9e9e26 !important;
    }
    .horizontal-scrollHeading h5{
        font-size: 1.3rem;
        font-weight: 600;
    }
    .price-heading-div{
        position: absolute;
        right: 11%;
        top: 34%;
    }
    .price-heading-div > ul{
        display: inline-flex;
        border: 2px solid var(--primary);
        border-radius: 50px;
    }
    .price-heading-div > ul > li{
        height: 2.5rem;
        align-content: center;
        position: relative;
        padding: 0 .9rem;
        border-radius: 50px;
    }
    .price-heading-div > ul > li.active{
        background-color: var(--primary);
        color: #fff;
        font-size: 1.6rem;
    }
    .price-heading-div > ul > li.active sup{
        top: -0.3rem;
        font-size: .9rem;
    }
    .price-heading-div > ul > li > span{
        background-color: #3eb252;
        color: #fff;
        border-radius: 30px;
        font-size: .7rem;
        padding: 0 .5rem;
    }
    .horizontal-values-div{
        margin-top: 1.5rem;
        gap: 25px 0;
    }
    .horizontal-values-div h4{
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: .1rem;
    }
    .horizontal-values-div h4 > span{
        color: var(--primary);
    }
    .horizontal-values-div p{
        color: #000;
        font-size: .7rem;
    }
    .horizontal-values-div .col-lg-6 p:nth-child(3){
        font-size: .6rem;
    }
    
    
    .seed-countArea.counted #seed-style-text::before {
        animation: scaleIn var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1) forwards;
    }

    .seed-countArea.counted #seed-style-text .after {
        animation: translateIn var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1) forwards;
    }

    .seed-countArea.counted #seed-style-text .before {
        animation: translateOut var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1) forwards;
    }
    
    
    
   .before-after-div{
        display: flex;
        width: 100%;
        height: 22rem;
        justify-content: center;
    }
    
    .image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        
    }
    .before-div, .after-div{
        width: 50%;
        height: 100%;
        transition: transform 0.5s ease;
        position: relative;
    }
    #image-before{
        margin-top: -1.625rem;
        z-index: 1;
        pointer-events: none;
    }
    #image-after{
        margin-top: 1rem;
        margin-left: -9rem;
        pointer-events: none;
    }
    
    .offer-handAnimtion {
        position: relative;
    }
    
    .offer-handAnimtion > img {
        /*content: '\f25a';*/
        position: absolute;
        height: 77%;
        right: 100%;
        top: 50%;
        /*font-family: "Font Awesome 6 Free";*/
        color: var(--primary);
        transform: translate(-30%, -50%);
        animation: offerHandAnimtion 1.5s ease-in-out infinite;
    }
    
    @keyframes offerHandAnimtion {
        0%,
        100% {
            transform: translate(-30%, -50%);
        }
        50% {
            transform: translate(-100%, -50%);
        }
    }
    
    .before-after-div:hover #image-before {
        transform: translateX(62%);
    }
    
    .before-after-div:hover #image-after {
        transform: translateX(-62%);
        z-index: 1;
    }
    .before-after-div p {
        position: absolute;
        left: 50%;
        bottom: 0;
        width: fit-content;
        font-size: 1.125rem;
        color: #fff;
        font-weight: 600;
        padding: 0.375rem 1.25rem;
        border-radius: 2rem;
        transform: translate(-50%, 25%);
        margin: 0;
    }
    .before-after-div .before-div > p{
        /*bottom: -13%;*/
        /*left: 45%;*/
        background-color: #3cb252;
    }
    .before-after-div .after-div > p{
        /*bottom: -13%;*/
        /*left: 45%;*/
        background-color: var(--primary);
    }
    .horizontal-name-img::before{
        content: '';
        position: absolute;
        right: -2rem;
        top: -1rem;
        background: url(../frontend/assets/images/arrow-blue.png) no-repeat center center;
        background-size: contain;
        width: 19%;
        height: 100%;
    }
    .horizontal-name-img > img{
        width: 3.8rem !important;
        height: 3.8rem;
    }
    .seed-countArea{
        border: 1px solid #fff;
        border-radius: 2rem;
    }
    .seed-countArea::before, span.addIcon {
        background: #3db151 !important;
    }
    ul.green-tick > li::before{
        content: '';
        background: url(../frontend/assets/images/wd-5/green-tick.png) no-repeat center center;
        background-size: contain;
        width: 1.8rem;
        height: 1.8rem;
        top: -1px;
    }
    .tab-pane .horizontal-points > li{
        font-weight: 500;
    }
    .horizontal-points{
        display: flex;
        flex-direction: column;
        gap: .4rem 0;
        margin-bottom: 1rem;
        font-size: 1.5rem;
        font-weight: 600;
    }
    .horizontal-points > li{
        position: relative;
        padding-left: 2.2rem;
        font-weight: 700;
    }
    .horizontal-points > li::before{
        content: '\f138';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        top: 0;
        left: 0;
        color: var(--primary);
    }
    .horizontal-points > li > span{
        font-weight: 600;
    }
    .horizontal-points > li > sup{
        font-size: 1.425rem;
        font-weight: 700;
    }
    .horizontal-points > li > del{
        font-size: .9rem;
        opacity: .7;
        position: absolute;
        top: 3%;
        right: 35%;
    }
    .horizontal-points li > img{
        max-width: 50px;
        margin-top: -12px;
    }
    .horizontal-points li:nth-child(3) > img{
        max-width: 70px;
        margin-top: 0px;
    }
    .horizontal-hurrytext{
        font-size: 1rem;
    }
    .horizontal-hurrytext > strong{
        font-size: 1.5rem;
    }
    .horizontal-hurry-text ul{
        width: 100%;
    }
    .horizontal-hurry-text ul > li{
        font-size: 1.3rem;
        padding: 0;
        width: 50%;
    }
    
    .trusted-logos-one img, .trusted-logos-two img{
        margin: auto;
        width: auto;
        height: 6rem;
        object-fit: contain;
        max-width: 70%;
    }
    .portfolio-inner-tabs-div{
        margin-top: -2rem;
    }
    .portfolio-inner-tabs-div .nav-tabs > .nav-item > .nav-link{
        min-width: 3rem !important;
        padding: 1rem 1.5rem;
    }  
    .portfolio-inner-tabs-div .basic-tabs{
        margin-bottom: 2rem;
        margin-top: -4rem;
    }
    .portfolio-inner-tabs-div .tab-pane > ul{
        font-size: .9rem;
    }
    .view-before-after-div > a{
        font-size: 1.1rem; 
        min-height: auto; 
        color: #000; 
        background: transparent; 
        font-weight: 600;
    }
    .view-before-after-div > a:hover{
        color: #000 !important;
    }
    .view-before-after-div img{
        max-width: 2.3rem;
    }
    
    .letsGetStated-toggle h6 {
        position: relative;
        padding-top: 1rem;
        /*border-top: 1px solid #fff;*/
    }
    
    .letsGetStated-toggle h6::before {
        content: '';
        position: absolute;
        width: calc(100% + 2rem);
        height: 100%;
        left: 50%;
        background: #1e61eb;
        bottom: 98%;
        z-index: -1;
        transform: translate(-50%, 0);
    }
    
    
    #portfolioModal .modal-dialog{
        max-width: 70rem;
    }
    #portfolioModal .modal-dialog .modal-content{
        border: 0;
        border-radius: 0;
    }
    #portfolioModal .modal-dialog .modal-content::before{
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        background: url(../frontend/assets/images/wd-5/bg.png) no-repeat center center;
        background-size: contain;
        opacity: 0.65;
        z-index: 0;
        transform: translate(-50%, -50%);
    }
    #portfolioModal .modal-dialog .modal-content::after{
        --bg-color: #3cb8ff;
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(-50%, -50%);
        width: 22.5rem;
        height: 22.5rem;
        opacity: 0.325;
        background: radial-gradient(var(--bg-color) -30%, transparent 70%);
        z-index: 0;
    }
    
    #portfolioModal .modal-body{
        padding: 6rem 5rem;
    }
    #portfolioModal .modal-body button{
        position: absolute;
        top: 8px;
        right: 9px;
        background: #222222;
        color: #fff;
        opacity: 1;
        padding: 0 .6rem;
        border-radius: 0;
        font-size: 1.9rem;
        text-align: center;
        width: auto;
        height: auto;
        
    }
    .arrow-absolute{
        position: absolute;
        top: 44%;
        right: 0;
        transform: translate(-50%, -50%);
        max-width: 3.5rem;
    }
    #portfolioModal .before-after-div .before-div, #portfolioModal .before-after-div .after-div{
        width: 100%;
    }
    .arrow-bottom{
        display: flex;
    }
    @media (max-width: 650px) { 
        .arrow-bottom{
            text-align: center;
            margin-top: 12px;
        }
        
    }
    
    
    
    
    
    
    
    
    .original-discounted{
        display: flex;
        margin: 1.5rem 0 2rem 0;
        width: 100%;
        justify-content: center;
    }
    .original-discounted > li{
        position: relative;
        font-size: 1.2rem;
        text-align: center;
        padding: 1.3rem 0;
        background: radial-gradient(circle at center, #fff 5%, #dadada);
        border-radius: 5rem;
        width: 21%;
    }
    .original-discounted > li img{
        position: absolute;
        top: 28%;
        right: -10%;
        z-index: 1;
        max-width: 15%;
    }
    .original-discounted > li:nth-child(2){
        background: radial-gradient(circle at center, #fff 5%, #a4dafe);
    }
    .original-discounted > li > p{
        font-size: 2.3rem;
        font-weight: 800;
        color: #7a7a7a;
    }
    .original-discounted > li > p > sup{
        font-size: 1.2rem;
        font-weight: 500;
        top: -1rem;
    }
    .original-discounted > li:nth-child(2) > p{
        color: var(--primary);
    }
    .original-discounted > li > sup{
        font-weight: 400;
        font-size: 1.4rem;
    }
    .original-discounted > li:nth-child(2) span{
        font-size: 1.1rem;
        color: #fff;
        background: #3bb251;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 5rem;
        padding: .2rem .8rem;
    }
    #countdown{
        position: relative;
        top: 0;
        left: 0;
        background: none;
    }
    .subheadingStyle img{
        max-width: 7%;
    }
    .last-parallex-orig-disc{
        justify-content: left;
    }
    .last-parallex-orig-disc > li{
        width: 45%;
    }
    .last-parallex-orig-disc > li:nth-child(2){
        color: #fff;
        background: radial-gradient(circle at center, #fff -85%, var(--primary));
    }
    .last-parallex-orig-disc > li:nth-child(2) p{
        color: #fff;
    }
    
    .offer-handAnimtion > a.primary > b {
        font-weight: inherit;
    }
    
    @media (max-width: 576px) {
        .hide-mob {
            display: none;
        }
        
        .offer-handAnimtion > img {
            height: 65%;
        }
    
        @keyframes offerHandAnimtion {
            0%,
            100% {
                transform: translate(-20%, -50%);
            }
            50% {
                transform: translate(-70%, -50%);
            }
        }
    }
    
    
        
</style>
    
<style>
    .heading-glow-anim span {
        color: #fff;
        -webkit-animation: letter-glow .4s 0s ease both;
        animation: letter-glow .4s 0s ease both;
        -webkit-text-fill-color: #fff;
    }
    
    .text-glow-anim span {
        -webkit-animation: letter-glow .4s 0s ease both;
        animation: text-glow .4s 0s ease both;
        -webkit-text-fill-color: #fff;
    }
    
    .heading-glow-anim span:nth-child(1) {
        -webkit-animation-delay: 10ms;
        animation-delay: 10ms
    }
    
    .heading-glow-anim span:nth-child(2) {
        -webkit-animation-delay: .11s;
        animation-delay: .11s
    }
    
    .heading-glow-anim span:nth-child(3) {
        -webkit-animation-delay: .21s;
        animation-delay: .21s
    }
    
    .heading-glow-anim span:nth-child(4) {
        -webkit-animation-delay: .31s;
        animation-delay: .31s
    }
    
    .heading-glow-anim span:nth-child(5) {
        -webkit-animation-delay: .41s;
        animation-delay: .41s
    }
    
    .heading-glow-anim span:nth-child(6) {
        -webkit-animation-delay: .51s;
        animation-delay: .51s
    }
    
    .heading-glow-anim span:nth-child(7) {
        -webkit-animation-delay: .61s;
        animation-delay: .61s
    }
    
    .heading-glow-anim span:nth-child(8) {
        -webkit-animation-delay: .71s;
        animation-delay: .71s
    }
    
    .heading-glow-anim span:nth-child(9) {
        -webkit-animation-delay: .81s;
        animation-delay: .81s
    }
    
    .heading-glow-anim span:nth-child(10) {
        -webkit-animation-delay: .91s;
        animation-delay: .91s
    }
    
    .heading-glow-anim span:nth-child(11) {
        -webkit-animation-delay: 1.01s;
        animation-delay: 1.01s
    }
    
    .heading-glow-anim span:nth-child(12) {
        -webkit-animation-delay: 1.11s;
        animation-delay: 1.11s
    }
    
    .heading-glow-anim span:nth-child(13) {
        -webkit-animation-delay: 1.21s;
        animation-delay: 1.21s
    }
    
    .heading-glow-anim span:nth-child(14) {
        -webkit-animation-delay: 1.31s;
        animation-delay: 1.31s
    }
    
    .heading-glow-anim span:nth-child(15) {
        -webkit-animation-delay: 1.41s;
        animation-delay: 1.41s
    }
    
    .heading-glow-anim span:nth-child(16) {
        -webkit-animation-delay: 1.51s;
        animation-delay: 1.51s
    }
    
    .heading-glow-anim span:nth-child(17) {
        -webkit-animation-delay: 1.61s;
        animation-delay: 1.61s
    }
    
    .heading-glow-anim span:nth-child(18) {
        -webkit-animation-delay: 1.71s;
        animation-delay: 1.71s
    }
    
    .heading-glow-anim span:nth-child(19) {
        -webkit-animation-delay: 1.81s;
        animation-delay: 1.81s
    }
    
    .heading-glow-anim span:nth-child(20) {
        -webkit-animation-delay: 1.91s;
        animation-delay: 1.91s
    }
    
    .heading-glow-anim span:nth-child(21) {
        -webkit-animation-delay: 2.01s;
        animation-delay: 2.01s
    }
    
    .heading-glow-anim span:nth-child(22) {
        -webkit-animation-delay: 2.11s;
        animation-delay: 2.11s
    }
    
    .heading-glow-anim span:nth-child(23) {
        -webkit-animation-delay: 2.21s;
        animation-delay: 2.21s
    }
    
    .heading-glow-anim span:nth-child(24) {
        -webkit-animation-delay: 2.31s;
        animation-delay: 2.31s
    }
    
    .heading-glow-anim span:nth-child(25) {
        -webkit-animation-delay: 2.41s;
        animation-delay: 2.41s
    }
    
    .heading-glow-anim span:nth-child(26) {
        -webkit-animation-delay: 2.51s;
        animation-delay: 2.51s
    }
    
    .heading-glow-anim span:nth-child(27) {
        -webkit-animation-delay: 2.61s;
        animation-delay: 2.61s
    }
    
    .heading-glow-anim span:nth-child(28) {
        -webkit-animation-delay: 2.71s;
        animation-delay: 2.71s
    }
    
    .heading-glow-anim span:nth-child(28) {
        -webkit-animation-delay: 2.81s;
        animation-delay: 2.81s
    }
    
    .heading-glow-anim span:nth-child(29) {
        -webkit-animation-delay: 2.91s;
        animation-delay: 2.91s
    }
    
    .heading-glow-anim span:nth-child(30) {
        -webkit-animation-delay: 3.01s;
        animation-delay: 3.01s
    }
    
    .heading-glow-anim span:nth-child(31) {
        -webkit-animation-delay: 3.11s;
        animation-delay: 3.11s
    }
    
    .heading-glow-anim span:nth-child(32) {
        -webkit-animation-delay: 3.21s;
        animation-delay: 3.21s
    }
    
    .heading-glow-anim span:nth-child(33) {
        -webkit-animation-delay: 3.31s;
        animation-delay: 3.31s
    }
    
    .heading-glow-anim span:nth-child(34) {
        -webkit-animation-delay: 3.41s;
        animation-delay: 3.41s
    }
    
    .heading-glow-anim span:nth-child(35) {
        -webkit-animation-delay: 3.51s;
        animation-delay: 3.51s
    }
    
    .heading-glow-anim span:nth-child(36) {
        -webkit-animation-delay: 3.61s;
        animation-delay: 3.61s
    }
    
    .heading-glow-anim span:nth-child(37) {
        -webkit-animation-delay: 3.71s;
        animation-delay: 3.71s
    }
    
    .heading-glow-anim span:nth-child(38) {
        -webkit-animation-delay: 3.81s;
        animation-delay: 3.81s
    }
    
    .heading-glow-anim span:nth-child(39) {
        -webkit-animation-delay: 3.91s;
        animation-delay: 3.91s
    }
    
    .heading-glow-anim span:nth-child(40) {
        -webkit-animation-delay: 4.01s;
        animation-delay: 4.01s
    }
    
    .heading-glow-anim span:nth-child(41) {
        -webkit-animation-delay: 4.11s;
        animation-delay: 4.11s
    }
    
    .heading-glow-anim span:nth-child(42) {
        -webkit-animation-delay: 4.21s;
        animation-delay: 4.21s
    }
    
    .heading-glow-anim span:nth-child(43) {
        -webkit-animation-delay: 4.31s;
        animation-delay: 4.31s
    }
    
    .heading-glow-anim span:nth-child(44) {
        -webkit-animation-delay: 4.41s;
        animation-delay: 4.41s
    }
    
    .text-glow-anim span:nth-child(1) {
        -webkit-animation-delay: 3.71s;
        animation-delay: 3.71s
    }
    
    .text-glow-anim span:nth-child(2) {
        -webkit-animation-delay: 3.73s;
        animation-delay: 3.73s
    }
    
    .text-glow-anim span:nth-child(3) {
        -webkit-animation-delay: 3.75s;
        animation-delay: 3.75s
    }
    
    .text-glow-anim span:nth-child(4) {
        -webkit-animation-delay: 3.77s;
        animation-delay: 3.77s
    }
    
    .text-glow-anim span:nth-child(5) {
        -webkit-animation-delay: 3.79s;
        animation-delay: 3.79s
    }
    
    .text-glow-anim span:nth-child(6) {
        -webkit-animation-delay: 3.81s;
        animation-delay: 3.81s
    }
    
    .text-glow-anim span:nth-child(7) {
        -webkit-animation-delay: 3.83s;
        animation-delay: 3.83s
    }
    
    .text-glow-anim span:nth-child(8) {
        -webkit-animation-delay: 3.85s;
        animation-delay: 3.85s
    }
    
    .text-glow-anim span:nth-child(9) {
        -webkit-animation-delay: 3.87s;
        animation-delay: 3.87s
    }
    
    .text-glow-anim span:nth-child(10) {
        -webkit-animation-delay: 3.89s;
        animation-delay: 3.89s
    }
    
    .text-glow-anim span:nth-child(11) {
        -webkit-animation-delay: 3.91s;
        animation-delay: 3.91s
    }
    
    .text-glow-anim span:nth-child(12) {
        -webkit-animation-delay: 3.93s;
        animation-delay: 3.93s
    }
    
    .text-glow-anim span:nth-child(13) {
        -webkit-animation-delay: 3.95s;
        animation-delay: 3.95s
    }
    
    .text-glow-anim span:nth-child(14) {
        -webkit-animation-delay: 3.97s;
        animation-delay: 3.97s
    }
    
    .text-glow-anim span:nth-child(15) {
        -webkit-animation-delay: 4.01s;
        animation-delay: 4.01s
    }
    
    .text-glow-anim span:nth-child(16) {
        -webkit-animation-delay: 4.03s;
        animation-delay: 4.03s
    }
    
    .text-glow-anim span:nth-child(17) {
        -webkit-animation-delay: 4.05s;
        animation-delay: 4.05s
    }
    
    .text-glow-anim span:nth-child(18) {
        -webkit-animation-delay: 4.07s;
        animation-delay: 4.07s
    }
    
    .text-glow-anim span:nth-child(19) {
        -webkit-animation-delay: 4.09s;
        animation-delay: 4.09s
    }
    
    .text-glow-anim span:nth-child(20) {
        -webkit-animation-delay: 4.11s;
        animation-delay: 4.11s
    }
    
    .text-glow-anim span:nth-child(21) {
        -webkit-animation-delay: 4.13s;
        animation-delay: 4.13s
    }
    
    .text-glow-anim span:nth-child(22) {
        -webkit-animation-delay: 4.15s;
        animation-delay: 4.15s
    }
    
    .text-glow-anim span:nth-child(23) {
        -webkit-animation-delay: 4.17s;
        animation-delay: 4.17s
    }
    
    .text-glow-anim span:nth-child(24) {
        -webkit-animation-delay: 4.19s;
        animation-delay: 4.19s
    }
    
    .text-glow-anim span:nth-child(25) {
        -webkit-animation-delay: 4.21s;
        animation-delay: 4.21s
    }
    
    .text-glow-anim span:nth-child(26) {
        -webkit-animation-delay: 4.23s;
        animation-delay: 4.23s
    }
    
    .text-glow-anim span:nth-child(27) {
        -webkit-animation-delay: 4.25s;
        animation-delay: 4.25s
    }
    
    .text-glow-anim span:nth-child(28) {
        -webkit-animation-delay: 4.27s;
        animation-delay: 4.27s
    }
    
    .text-glow-anim span:nth-child(29) {
        -webkit-animation-delay: 4.29s;
        animation-delay: 4.29s
    }
    
    .text-glow-anim span:nth-child(30) {
        -webkit-animation-delay: 4.31s;
        animation-delay: 4.31s
    }
    
    .text-glow-anim span:nth-child(31) {
        -webkit-animation-delay: 4.33s;
        animation-delay: 4.33s
    }
    
    .text-glow-anim span:nth-child(32) {
        -webkit-animation-delay: 4.35s;
        animation-delay: 4.35s
    }
    
    .text-glow-anim span:nth-child(33) {
        -webkit-animation-delay: 4.37s;
        animation-delay: 4.37s
    }
    
    .text-glow-anim span:nth-child(34) {
        -webkit-animation-delay: 4.39s;
        animation-delay: 4.39s
    }
    
    .text-glow-anim span:nth-child(35) {
        -webkit-animation-delay: 4.41s;
        animation-delay: 4.41s
    }
    
    .text-glow-anim span:nth-child(36) {
        -webkit-animation-delay: 4.43s;
        animation-delay: 4.43s
    }
    
    .text-glow-anim span:nth-child(37) {
        -webkit-animation-delay: 4.45s;
        animation-delay: 4.45s
    }
    
    .text-glow-anim span:nth-child(38) {
        -webkit-animation-delay: 4.47s;
        animation-delay: 4.47s
    }
    
    .text-glow-anim span:nth-child(39) {
        -webkit-animation-delay: 4.49s;
        animation-delay: 4.49s
    }
    
    .text-glow-anim span:nth-child(40) {
        -webkit-animation-delay: 4.51s;
        animation-delay: 4.51s
    }
    
    .text-glow-anim span:nth-child(41) {
        -webkit-animation-delay: 4.53s;
        animation-delay: 4.53s
    }
    
    .text-glow-anim span:nth-child(42) {
        -webkit-animation-delay: 4.55s;
        animation-delay: 4.55s
    }
    
    .text-glow-anim span:nth-child(43) {
        -webkit-animation-delay: 4.57s;
        animation-delay: 4.57s
    }
    
    .text-glow-anim span:nth-child(44) {
        -webkit-animation-delay: 4.59s;
        animation-delay: 4.59s
    }
    
    .text-glow-anim span:nth-child(45) {
        -webkit-animation-delay: 4.61s;
        animation-delay: 4.61s
    }
    
    .text-glow-anim span:nth-child(46) {
        -webkit-animation-delay: 4.63s;
        animation-delay: 4.63s
    }
    
    .text-glow-anim span:nth-child(47) {
        -webkit-animation-delay: 4.65s;
        animation-delay: 4.65s
    }
    
    .text-glow-anim span:nth-child(48) {
        -webkit-animation-delay: 4.67s;
        animation-delay: 4.67s
    }
    
    .text-glow-anim span:nth-child(49) {
        -webkit-animation-delay: 4.69s;
        animation-delay: 4.69s
    }
    
    .text-glow-anim span:nth-child(50) {
        -webkit-animation-delay: 4.71s;
        animation-delay: 4.71s
    }
    
    .text-glow-anim span:nth-child(51) {
        -webkit-animation-delay: 4.73s;
        animation-delay: 4.73s
    }
    
    .text-glow-anim span:nth-child(52) {
        -webkit-animation-delay: 4.75s;
        animation-delay: 4.75s
    }
    
    .text-glow-anim span:nth-child(53) {
        -webkit-animation-delay: 4.77s;
        animation-delay: 4.77s
    }
    
    .text-glow-anim span:nth-child(54) {
        -webkit-animation-delay: 4.79s;
        animation-delay: 4.79s
    }
    
    .text-glow-anim span:nth-child(55) {
        -webkit-animation-delay: 4.81s;
        animation-delay: 4.81s
    }
    
    .text-glow-anim span:nth-child(56) {
        -webkit-animation-delay: 4.83s;
        animation-delay: 4.83s
    }
    
    .text-glow-anim span:nth-child(57) {
        -webkit-animation-delay: 4.85s;
        animation-delay: 4.85s
    }
    
    .text-glow-anim span:nth-child(58) {
        -webkit-animation-delay: 4.87s;
        animation-delay: 4.87s
    }
    
    .text-glow-anim span:nth-child(59) {
        -webkit-animation-delay: 4.89s;
        animation-delay: 4.89s
    }
    
    .text-glow-anim span:nth-child(60) {
        -webkit-animation-delay: 4.91s;
        animation-delay: 4.91s
    }
    
    .text-glow-anim span:nth-child(61) {
        -webkit-animation-delay: 4.93s;
        animation-delay: 4.93s
    }
    
    .text-glow-anim span:nth-child(62) {
        -webkit-animation-delay: 4.95s;
        animation-delay: 4.95s
    }
    
    .text-glow-anim span:nth-child(63) {
        -webkit-animation-delay: 4.97s;
        animation-delay: 4.97s
    }
    
    .text-glow-anim span:nth-child(64) {
        -webkit-animation-delay: 4.99s;
        animation-delay: 4.99s
    }
    
    .text-glow-anim span:nth-child(65) {
        -webkit-animation-delay: 5.01s;
        animation-delay: 5.01s
    }
    
    .text-glow-anim span:nth-child(66) {
        -webkit-animation-delay: 5.03s;
        animation-delay: 5.03s
    }
    
    .text-glow-anim span:nth-child(67) {
        -webkit-animation-delay: 5.05s;
        animation-delay: 5.05s
    }
    
    .text-glow-anim span:nth-child(68) {
        -webkit-animation-delay: 5.07s;
        animation-delay: 5.07s
    }
    
    .text-glow-anim span:nth-child(69) {
        -webkit-animation-delay: 5.09s;
        animation-delay: 5.09s
    }
    
    .text-glow-anim span:nth-child(70) {
        -webkit-animation-delay: 5.11s;
        animation-delay: 5.11s
    }
    
    .text-glow-anim span:nth-child(71) {
        -webkit-animation-delay: 5.13s;
        animation-delay: 5.13s
    }
    
    .text-glow-anim span:nth-child(72) {
        -webkit-animation-delay: 5.15s;
        animation-delay: 5.15s
    }
    
    .text-glow-anim span:nth-child(73) {
        -webkit-animation-delay: 5.17s;
        animation-delay: 5.17s
    }
    
    .text-glow-anim span:nth-child(74) {
        -webkit-animation-delay: 5.19s;
        animation-delay: 5.19s
    }
    
    .text-glow-anim span:nth-child(75) {
        -webkit-animation-delay: 5.21s;
        animation-delay: 5.21s
    }
    
    .text-glow-anim span:nth-child(76) {
        -webkit-animation-delay: 5.23s;
        animation-delay: 5.23s
    }
    
    .text-glow-anim span:nth-child(77) {
        -webkit-animation-delay: 5.25s;
        animation-delay: 5.25s
    }
    
    .text-glow-anim span:nth-child(78) {
        -webkit-animation-delay: 5.27s;
        animation-delay: 5.27s
    }
    
    .text-glow-anim span:nth-child(79) {
        -webkit-animation-delay: 5.29s;
        animation-delay: 5.29s
    }
    
    .text-glow-anim span:nth-child(80) {
        -webkit-animation-delay: 5.31s;
        animation-delay: 5.31s
    }
    
    .text-glow-anim span:nth-child(81) {
        -webkit-animation-delay: 5.33s;
        animation-delay: 5.33s
    }
    
    .text-glow-anim span:nth-child(82) {
        -webkit-animation-delay: 5.35s;
        animation-delay: 5.35s
    }
    
    .text-glow-anim span:nth-child(83) {
        -webkit-animation-delay: 5.37s;
        animation-delay: 5.37s
    }
    
    .text-glow-anim span:nth-child(84) {
        -webkit-animation-delay: 5.39s;
        animation-delay: 5.39s
    }
    
    .text-glow-anim span:nth-child(85) {
        -webkit-animation-delay: 5.41s;
        animation-delay: 5.41s
    }
    
    .text-glow-anim span:nth-child(86) {
        -webkit-animation-delay: 5.43s;
        animation-delay: 5.43s
    }
    
    .text-glow-anim span:nth-child(87) {
        -webkit-animation-delay: 5.45s;
        animation-delay: 5.45s
    }
    
    .text-glow-anim span:nth-child(88) {
        -webkit-animation-delay: 5.47s;
        animation-delay: 5.47s
    }
    
    .text-glow-anim span:nth-child(89) {
        -webkit-animation-delay: 5.49s;
        animation-delay: 5.49s
    }
    
    .text-glow-anim span:nth-child(90) {
        -webkit-animation-delay: 5.51s;
        animation-delay: 5.51s
    }
    
    .text-glow-anim span:nth-child(91) {
        -webkit-animation-delay: 5.53s;
        animation-delay: 5.53s
    }
    
    .text-glow-anim span:nth-child(92) {
        -webkit-animation-delay: 5.55s;
        animation-delay: 5.55s
    }
    
    .text-glow-anim span:nth-child(93) {
        -webkit-animation-delay: 5.57s;
        animation-delay: 5.57s
    }
    
    .text-glow-anim span:nth-child(94) {
        -webkit-animation-delay: 5.59s;
        animation-delay: 5.59s
    }
    
    .text-glow-anim span:nth-child(95) {
        -webkit-animation-delay: 5.61s;
        animation-delay: 5.61s
    }
    
    .text-glow-anim span:nth-child(96) {
        -webkit-animation-delay: 5.63s;
        animation-delay: 5.63s
    }
    
    .text-glow-anim span:nth-child(97) {
        -webkit-animation-delay: 5.65s;
        animation-delay: 5.65s
    }
    
    .text-glow-anim span:nth-child(98) {
        -webkit-animation-delay: 5.67s;
        animation-delay: 5.67s
    }
    
    .text-glow-anim span:nth-child(99) {
        -webkit-animation-delay: 5.69s;
        animation-delay: 5.69s
    }
    
    .text-glow-anim span:nth-child(100) {
        -webkit-animation-delay: 5.71s;
        animation-delay: 5.71s
    }
    
    @-webkit-keyframes btn-glow {
        0% {
            opacity: 0;
            transform: scale(1);
        }
    
        25% {
            opacity: 1;
            transform: scale(1.05);
        }
    
        60% {
            opacity: 1;
            transform: scale(0.95);
        }
    
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @keyframes btn-glow {
        0% {
            opacity: 0;
            transform: scale(1);
        }
    
        25% {
            opacity: 1;
            transform: scale(1.05);
        }
    
        60% {
            opacity: 1;
            transform: scale(0.95);
        }
    
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @-webkit-keyframes letter-glow {
        0% {
            opacity: 0;
            text-shadow: 0 0 1px rgba(255,255,255,.1)
        }
    
        66% {
            opacity: 1;
            text-shadow: 0 0 1.25rem rgba(255,255,255,.9)
        }
    
        77% {
            opacity: 1
        }
    
        100% {
            opacity: 1;
            text-shadow: 0 0 0.345rem rgba(255,255,255,.9)
        }
    }
    
    @keyframes letter-glow {
        0% {
            opacity: 0;
            text-shadow: 0 0 1px rgba(255,255,255,.1)
        }
    
        66% {
            opacity: 1;
            text-shadow: 0 0 1.5rem rgba(255,255,255,.9)
        }
    
        77% {
            opacity: 1
        }
    
        100% {
            opacity: 1;
            text-shadow: 0 0 0.345rem rgba(255,255,255,.9)
        }
    }
    
    @-webkit-keyframes text-glow {
        0% {
            opacity: 0;
            text-shadow: 0 0 1px rgba(255,255,255,.1)
        }
    
        66% {
            opacity: 1;
            text-shadow: 0 0 1.25rem rgba(255,255,255,.9)
        }
    
        77% {
            opacity: 1
        }
    
        100% {
            opacity: 1;
            text-shadow: none;
        }
    }
    
    @keyframes text-glow {
        0% {
            opacity: 0;
            text-shadow: 0 0 1px rgba(255,255,255,.1)
        }
    
        66% {
            opacity: 1;
            text-shadow: 0 0 1.5rem rgba(255,255,255,.9)
        }
    
        77% {
            opacity: 1
        }
    
        100% {
            opacity: 1;
            text-shadow: none;
        }
    }
</style>


    
<style>
    .price-discount-comparison {
        position: relative;
        display: flex;
        background: radial-gradient(circle at center, #fff 5%, #dadada);
        text-align: center;
        border-radius: 5rem;
        margin: 1rem 0 2.25rem 0;
        box-shadow: 0 0 1.5rem #c3c3c3 inset;
    }
    
    .price-discount-comparison > * {
        position: relative;
        padding: 1rem 2.5rem 0.375rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 1;
    }
    
    .price-discount-comparison > .prev-price,
    .price-discount-comparison > .new-price {
        
    }
    
    .price-discount-comparison * > h3 {
        font-size: 0.875rem;
        margin: 0;
    }
    
    .price-discount-comparison * > p > sup {
        font-size: 1.125rem;
        font-weight: 500;
        top: -0.9rem !important;
        left: -0.1rem !important;
    }
    
    .price-discount-comparison * > p {
        font-size: 2.375rem;
        font-weight: 700;
        font-family: "Kontora", sans-serif;
        color: #7a7a7a;
    }
    
    .price-discount-comparison .discount {
        background: #25b459;
        border-radius: 0 5rem 5rem 0;
        padding-left: 2rem;
        padding-right: 1.5rem;
        box-shadow: 0 0 1.5rem #009938 inset;
    }
    
    .price-discount-comparison .discount > p {
        color: #fff;
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        line-height: 1;
    }
    
    .price-discount-comparison .new-price {
        z-index: 2;
        margin: 0 -1.125rem;
        padding: 1rem 1.5rem 0.375rem;
    }
    
    .price-discount-comparison .new-price > .bgArea {
        position: absolute;
        width: 100%;
        height: calc(100% + 2rem);
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) skewX(-18deg);
        z-index: -1;
    }
    
    .price-discount-comparison .new-price > .bgArea::before,
    .price-discount-comparison .new-price > .bgArea::after {
        content: '';
        position: absolute;
        background: #81c4fd;
        height: 1rem;
        width: 1rem;
        z-index: -2;
    }
    
    .price-discount-comparison .new-price > .bgArea > .bg {
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: -1;
        background: #c0ecff;
        border-radius: 0.5rem 0 0.5rem 0;
        box-shadow: 0 0 1.5rem #89c4f1 inset;
    }
    
    .price-discount-comparison .new-price > .bgArea::before {
        bottom: 0;
        left: 0;
        transform: translate(-33%, 0%) skewX(36deg);
    }
    
    .price-discount-comparison .new-price > .bgArea::after {
        top: 0;
        right: 0;
        transform: translate(33%, 0%) skewX(36deg);
    }
    
    .price-discount-comparison .new-price > p {
        color: var(--primary);
    }
    
    .hurryUp-img {
        height: 3rem;
        margin: -0.25rem 0 0.125rem;
    }
    
    .thankyou-overlay {
        display: flex;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        z-index: 1;
        padding: 2.75rem 2.5rem;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s;
    }
    
    .successThank .thankyou-overlay {
        opacity: 1;
        visibility: visible;
    }
    
    .thankyou-overlay > .detailArea {
        margin: auto;
        text-align: center;
    }
    
    .thankyou-overlay > .detailArea > i,
    .thankyou-overlay > .detailArea > h2 {
        color: var(--primary);
    }
    
    .thankyou-overlay > .detailArea > h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        font-style: italic;
    }
    
    .thankyou-overlay > .detailArea > i {
        font-size: 5rem;
        margin-bottom: 1rem;
    }
    
    .thankyou-overlay > .detailArea > p {
        margin-bottom: 1.5rem;
        font-size: 0.75rem;
        max-width: 20rem;
    }
    
    #popup-confetti-1,
    #popup-confetti-2,
    #first-confetti,
    #second-confetti {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: 1;
        transform: scale(1);
        /*z-index: -1;*/
        transition: all 0.5s;
    }
    
    #popup-confetti-1,
    #popup-confetti-2 {
        overflow: hidden;
        z-index: -1;
        opacity: 0.625;
    }
    
    #second-confetti {
        z-index: -1;
    }
    
    #first-confetti.hiddenConfetti {
        opacity: 0;
        transform: scale(0.75);
    }
    
    .letsGetStated-popup .thankyou-overlay > .detailArea > h2 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }
    
    .letsGetStated-popup .thankyou-overlay > .detailArea .link-area > a.primary {
        padding: 0.5rem 2rem;
        min-height: 2rem;
        font-size: 0.9375rem;
    }
    
    .letsGetStated-popup .thankyou-overlay > .detailArea > p {
        margin-bottom: 1.125rem;
    }
    
    @media (max-width: 576px) {
        #popup-confetti-1,
        #popup-confetti-2,
        #first-confetti,
        #second-confetti {
            opacity: 0.5;
        }
        
        #smoothScrollArea {
            max-width: 100vw;
            overflow-x: hidden;
        }
    }
    
    @media (min-width: 425px) and (max-width: 450px) {
        html {
            font-size: 13.5px;
        }
    }
    
    @media (min-width: 451px) and (max-width: 470px) {
        html {
            font-size: 14.5px;
        }
    }
    
</style>


        <!-------------------------- Portfolio Popup -------------------------->
        <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
            <!--<div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                  <div class="row">
                      <div class="col-lg-5 col-sm-12 my-auto position-relative">
                          <div class="section-heading">
                              <h2>Featured Web Makeover</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                          </div>
                          <img class="arrow-absolute" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                      </div>
                      <div class="col-lg-7 col-sm-12">
                          <div class="before-after-div">
                              <div class="before-div" id="image-before">
                                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/before.png" alt="Before" class="image image1">
                                  <p>Before</p>
                              </div>
                              <div class="after-div" id="image-after">
                                  <p>After</p>
                                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/after.png" alt="After" class="image image2">
                              </div>                   
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>-->
          </div>

          <header class="header hidden-top">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-2 col-4 col-sm-2">
                  <a href="javascript:void(0)" class="logo" aria-label="Website Digitals">
                    <img loading="lazy" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo.png" alt="" />
                  </a>
                </div>
                <div class="col-md-10 col-8 col-sm-10">
                  <nav>
                <ul class="menu">
                  <li>
                    <a href="{{ route('front.home') }}">
                      <span>Try Out Website Builder</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('front.portfolio') }}">
                      <span>Webfolio</span>
                    </a>
                  </li>
                  <!--<li>-->
                  <!--  <a href="{{ env('WP_PATH') ?? '' }}/case-study">-->
                  <!--    <span>Case Study</span>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <li>
                    <a href="{{ route('front.about') }}">
                      <span>About Us</span>
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
                            <button type="button" class="mt-2 mb-2 headerbookacall" onclick="$zopim.livechat.window.toggle()">Live Chat With Professional</button>
                          <!--<button type="button" class="book-your-call">
                            Get Free Consultation
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                          </button>-->
                        </div>
                      </li>
                </ul>
                    <!--<ul class="menu wd2menu">-->
                        
                        <!--<li>
                    <!--        <span>-->
                    <!--            Limited-time Discount Available Now!-->
                    <!--        </span>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--       <div class="link-area">-->
                    <!--          <a href="#" class="primary offer-btn">Activate Your 70% Off Coupon</a>-->
                    <!--      </div>-->
                    <!--    </li>-->
                        
                    <!--  <li class="header_phone">-->
                    <!--    <a href="tel:(646)-222-3598">-->
                    <!--      <span><i class="fa-solid fa-phone color-primary"></i>&nbsp;(646)-222-3598</span>-->
                    <!--    </a>-->
                    <!--  </li>-->
                    <!--  <li class="btn-li">-->
                    <!--    <div class="link-area">-->
                    <!--        <button type="button" class="mt-2 mb-2 headerbookacall" onclick="$zopim.livechat.window.toggle()">Live Chat With Professional</button>-->
                          <!--<button type="button" class="book-your-call">
                    <!--        Get Free Consultation-->
                    <!--        <span></span>-->
                    <!--        <span></span>-->
                    <!--        <span></span>-->
                    <!--        <span></span>-->
                    <!--      </button>-->
                    <!--    </div>-->
                    <!--  </li>-->
                    <!--</ul>-->
                    <ul class="menu mobile-toggle">
                        <!--<li class="header_phone">
                        <a href="tel:(646)-222-3598">
                          <span><i class="fa-solid fa-phone color-primary"></i>&nbsp;(646)-222-3598</span>
                        </a>
                      </li>-->
                      <li>
                          <div class="link-area">
                              <a type="button" class="mt-3 mb-2 offer-btn" href="javascript:void(0)" onclick="$zopim.livechat.window.toggle()" style="padding: 0.625rem 1.25rem 0.5rem;min-height: 2.5rem;display: flex;align-items: center;justify-content: center;margin-bottom: 0.875rem !important;">Live Chat With Professional</a>
                          </div>
                        <!--<a href="javascript:void(0)">
                          <i class="fa fa-bars"></i>
                        </a>-->
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
              <div class="link-area">
                    <button type="button" class="offer-btn">Activate My 20% Off Coupon</button>
                  </div>
            </div>
            
            <!--<nav>
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
                    <button type="button" class="book-your-call">Get Free Consultation</button>
                  </div>
                </li>
              </ul>
            </nav>-->
            
          </div>
      
          <div class="letsGetStated-popup hidden-onLoad hideOnScroll">
            <div class="letsGetStated-toggle">
              <!--<i class="fa-solid fa-paper-plane"></i>-->
              <i class="fa-solid fa-angles-left"></i>
              <h6>Get Your Free Online BI Report </h6>
            </div>
            <form action="" method="post" id="signupform-wd5">
                @csrf
              <h2><small>Sign Up Now &</small> Talk With Expert</h2>
              <div class="basic-inputArea">
                <input type="text" placeholder="Enter your name" name="name" id="signup_name" required />
              </div>
              <div class="basic-inputArea">
                <input type="email" placeholder="Enter your email" name="email" id="signup_email" required />
              </div>
              <div class="basic-inputArea">
                <input type="text" class="phone-number" name="phone" id="signup_phone" required/>
              </div>
              <div class="basic-inputArea">
                <select name="service" required id="signup_service">
                  <option selected disabled hidden value="">Select Your Service</option>
                  <option value="Custom Web Design" data-service="Custom Web Design">Custom Web Design</option>
                  <option value="Website Redesign" data-service="Website Redesign">Website Redesign</option>
                  <option value="Branding Identity" data-service="Branding Identity">Branding Identity</option>
                  <option value="Digital Marketing" data-service="Digital Marketing">Digital Marketing</option>
                  <option value="Wordpress Web Design" data-service="Wordpress Web Design">Wordpress Web Design</option>
                  <option value="Shopify Web Design" data-service="Shopify Web Design">Shopify Web Design</option>
                  <option value="Magento Web Design" data-service="Magento Web Design">Magento Web Design</option>
                  <option value="Drupal Web Design" data-service="Drupal Web Design">Drupal Web Design</option>
                  <option value="Joomla Web Design" data-service="Joomla Web Design">Joomla Web Design</option>
                </select>
              </div>
                <div class="popup-inputArea">
                    <div class="form-group g-recaptcha-response">
                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_CAPTCHA_SITE_KEY')}}"></div>
                    </div>
                    <span class="validation-error text-danger g-recaptcha-error"></span>
                </div>
              <div class="link-area">
                <button type="submit" name="submit">Get My Discounted Offer</button>
              </div>
            </form>
            <div class="signupformalert">
              <div class="alert alert-success">
                  <i class="fa-solid fa-circle-check"></i>
                  <h3>Thank you!!!</h3>
                  <p class="mb-0">Your form has been submitted.</p>
                  <!--<div class="link-area mt-3">
                  <a href="{{ route('front.discounted.pricing') }}" class="primary">Checkout Our Pricing</a>
                  </div>-->
              </div>
              <div class="alert alert-danger mt-3" role="alert"><p class="mb-0">Error submitting form!!!</p></div>
          </div>
          
            <div class="thankyou-overlay">
                <div id="popup-confetti-2"></div>
                <div class="detailArea">
                    <i class="fa-solid fa-circle-check"></i>
                    <h2>Thank you!</h2>
                    <p>Your discount is confirmed! <br>Expect to hear from our support team shortly.</p>
                    <div class="link-area">
                        <a href="javascript:void(0);" class="primary close-thankYou" onclick="$zopim.livechat.window.toggle()">Live Chat With Expert</a>
                    </div>
                </div>
            </div>
          </div>
      
      <main id="smoothScrollArea">
          <section id="smoothScrollContent">