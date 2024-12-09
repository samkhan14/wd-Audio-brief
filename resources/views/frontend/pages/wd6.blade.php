@extends('frontend.layouts.master')
@push('customStyles')
<style>

    :root { 
        --banner-background: #68ccfb;
    }
    
    @font-face {
      font-family: "Kontora";
      src: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/kontora/kontora-extrablack.otf") format("opentype");
      font-weight: 700;
      font-style: normal;
      font-display: swap;
    }
    
    @font-face {
      font-family: "Helvetica";
      src: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/helvetica/Helvetica.ttf") format("truetype");
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }
    
    @font-face {
      font-family: "Helvetica";
      src: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/helvetica/Helvetica-Bold.ttf") format("truetype");
      font-weight: 700;
      font-style: normal;
      font-display: swap;
    }
    
    @font-face {
      font-family: "wf-visual";
      src: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/wf-visual-sans/WFVisualSansVF.ttf") format("truetype"), 
           url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/wf-visual-sans/WFVisualSansVF.woff2") format('woff2');
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
    }
    
    @font-face {
      font-family: "source-sans-pro";
      src: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/source-sans-pro/SourceSansPro-Regular.otf") format("truetype");
      font-weight: 500;
      font-style: normal;
      font-display: swap;
    }
    
    @font-face {
      font-family: "roboto";
      src: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/roboto/Roboto-Regular.ttf") format("truetype");
      font-weight: 500;
      font-style: normal;
      font-display: swap;
    }
    
    .subheadingStyle img{
        max-width: 8%;
    }
    
    .counter{
        font-family: "Kontora", sans-serif;
    }
    
    .kontora{
        font-family: "Kontora", sans-serif;
    }
    
    .source-sans-pro{
      font-family: "source-sans-pro";
      letter-spacing: 0.063rem;
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
        font-weight: 600;
        font-family: "source-sans-pro";
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

 .banner-heading > h1 {
        font-family: "wf-visual" !important;
        max-width: 30rem;
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
        margin-bottom: 1.125rem;
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
    margin-top: 2rem;
}

.banner-heading + .link-area > a {
    box-shadow: 0 0 0.625rem rgba(0,0,0,0.1);
}

/*.home-banner-area {*/
/*    min-height: calc(100vh - var(--header-height));*/
/*}*/

body {
    overflow-x: hidden;
}

#horizontal-scrollAreaContainer {
    /*overflow: hidden;*/
}

#horizontal-scrollAreaContainer .horizontal-scrollArea {
    /*position: sticky;
    top: var(--header-height);
    height: calc(100vh - var(--header-height));
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;*/
    padding: 0;
    overflow: hidden;
}

#horizontal-scrollAreaContainer .horizontal-scrollArea > .horizontal-scrollerItem {
    position: relative;
    min-width: 100vw;
    width: 100vw;
    height: calc(100vh - var(--header-height));
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    z-index: 1;
    overflow: initial;
    /*will-change: transform;*/
    transition: all 0.2s;
}
  
#horizontal-scrollAreaContainer .horizontal-scrollArea > .horizontal-scrollerItem > .container {
    margin: auto;
}

.horizontal-scrollerItem > span {
    position: absolute;
    top: 1rem;
    right: 2rem;
    font-size: 13rem;
    font-weight: 700;
    line-height: 1;
    color: var(--primary-light-bg);
    opacity: .5;
    z-index: -1;
}

.horizontal-scrollerItem:not(:last-child)::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 60%;
    height: 100%;
    background: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/bg.png") no-repeat center center;
    background-size: contain;
    opacity: 0.65;
    z-index: -2;
    transform: translate(-50%, -50%);
}

.horizontal-scrollImgArea {
    position: relative;
}

.horizontal-scrollImgArea > img {
    width: 100%;
    transform: translate(-10%, 0);
}

/*.horizontal-scrollHeading > h2 {
    font-weight: 600;
    font-size: 1.75rem;
    margin-bottom: 1rem;
}*/

.horizontal-scrollHeading > ul {
    list-style-type: none;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.625rem 0.375rem;
    font-size: 0.8125rem;
}

.horizontal-scrollHeading > ul > li {
    position: relative;
    padding-left: 1.625rem;
    /*font-family: "BlinkMacSystem", sans-serif;*/
    font-weight: 500;
    font-size: 0.8125rem;
}

.horizontal-scrollHeading > ul > li::before {
    content: "\f138";
    font-family: "Font Awesome 6 Free";
    font-size: 0.875rem;
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 0;
    background: none;
    color: var(--primary);
    transform: translate(0, -5%);
    /*width: 1.3rem;
    height: 100%;
    background: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/shapes/check-mark.png") no-repeat center center;
    background-size: contain;*/
}

.last-scrollerItem > img {
    position: absolute;
    z-index: -1;
}

.last-scrollerItem > img.bg {
    top: 0;
    /*left: 0;*/
    right: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
}

.last-scrollerItem > img.map {
    top: 0;
    right: 0;
    height: 80%;
    width: 50%;
    object-fit: contain;
    object-position: top right;
}

.last-scrollerItem > img.man {
    bottom: 0;
    right: 2%;
    width: 65%;
    height: 97%;
    object-fit: contain;
    object-position: bottom right;
    top: auto;
}

.lightGray-section {
    background: #fbfbfb;
}

.horizontal-scrollerItem.gradient-circle.light-gradient::after {
    opacity: 0.75;
}

.horizontal-scrollerItem.lightGray-section > span {
    color: var(--primary-light-bg);
    opacity: .5;
}






.seats-left-div{
        display: flex;
        gap: 0 1.5rem;
        margin-bottom: 1.5rem;
        align-items: center;
    }
    .seats-left-div > p{
        background-color: #fff;
        padding: .3rem 1rem;
        font-size: 1.2rem;
        font-weight: 500;
        border-radius: 2rem;
        margin-bottom: 0;
    }
.seeds-detailArea, .seed-countArea {
    position: relative;
    display: flex;
    align-items: center;
    white-space: nowrap;
    gap: 0.5rem;
}

.minus-oneCount {
    position: absolute;
    bottom: 100%;
    left: 1.75rem;
    font-family: "Roboto", sans-serif;
    font-weight: 600;
    color: rgba(225, 12, 12, 65%);
    opacity: 0;
}

.counted .minus-oneCount {
    animation: minusCountDown 1s linear;
}

.counted {
    animation: countScale 1s linear
}

@keyframes countScale {
  0% {
      transform: scale(1);
  }
  50% {
      transform: scale(1.025);
  }
  75% {
      transform: scale(1.025);
  }
  100% {
      transform: scale(1);
  }
}

@keyframes minusCountDown {
  0% {
      opacity: 0;
      transform: translate(0%, 100%);
  }
  75% {
      opacity: 1;
      transform: translate(0%, -30%);
  }
  100% {
      
      opacity: 0;
      transform: translate(0%, -30%);
  }
}

.seed-countArea {
    position: relative;
    transition: all 0.3s;
    font-size: 1.125rem;
    cursor: default;
    padding: .2rem 0rem;
    font-weight: 400;
    background: transparent;
    transition: all .3s ease;
    border: 0px !important;
}
.seed-countArea > span{
    display: contents;
}
.seed-countArea:hover{
    /*transform: translateY(-0.5rem);*/
}
.seed-countArea::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 2rem;
    z-index: -1;
}

.seed-countArea::before, span.addIcon {
    background: var(--primary);
    width: 2rem;
    transition: all 0.3s;
}

.seed-countArea:hover, .seed-countArea.counted {
    color: #000;
    background: transparent;
}

.seed-countArea:hover::before, .seed-countArea.counted::before {
    width: 100%;
}

span.addIcon {
    color: #000;
    border-radius: 50%;
    font-size: 0.75rem;
    padding-top: 0.125rem;
    transition: all 0.5s;
}

span.addIcon,
.emojiArea {
    display: flex;
    justify-content: center;
    align-items: center;
}

.emojiArea {
    position: relative;
}

.emojiArea > img {
    height: 1.25rem;
    transition: all 0.3s;
}

.emojiArea > img.happy {
    position: absolute;
    left: 0;
    top: 0;
}

.seed-countArea:hover .emojiArea > img.neutral,
.seed-countArea.counted .emojiArea > img.neutral,
.seed-countArea:not(.counted) .emojiArea > img.happy {
    opacity: 0;
}

.seed-countArea:hover span.addIcon,
.seed-countArea.counted span.addIcon {
    transform: rotate(180deg);
}

.seeds-detailArea > img {
    height: 4.25rem;
    margin-top: -1rem;
}





        #seed-style-text {
            overflow: hidden;
            position: relative;
            display: inline-block;
            text-decoration: none;
            --transition-duration: 0.3s;
            white-space: nowrap; /* Prevents text from wrapping */
            padding-right: 15px;
        }

        #seed-style-text::before,
        #seed-style-text .after {
            content: '';
            position: absolute;
            width: 100%;
            left: 0;
            transition: transform var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1);
        }

        #seed-style-text::before {
            background-color: transparent;
            height: 2px;
            bottom: 0;
            transform-origin: 100% 50%;
            transform: scaleX(0);
            font-weight: 500;
        }

        #seed-style-text .after {
            height: 100%;
            top: 0;
            transform-origin: 100% 50%;
            transform: translate3d(200%, 0, 0);
            color: var(--primary);
            white-space: nowrap; /* Prevents overlapping issues */
            font-weight: 500;
        }
        
        #seed-style-text .after b {
            color: var(--primary);
        }

        #seed-style-text.stop::before {
            animation: scaleIn var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1) forwards;
        }

        #seed-style-text.stop .after {
            animation: translateIn var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1) forwards;
        }

        #seed-style-text.stop .before {
            animation: translateOut var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1) forwards;
        }
        
        .bloc-time .figure span {
            font-family: "wf-visual" !important;
        }

        /* Keyframe animations */
        @keyframes scaleIn {
            from {
                transform: scaleX(0);
            }
            to {
                transform: scaleX(1);
            }
        }

        @keyframes translateIn {
            from {
                transform: translate3d(200%, 0, 0);
            }
            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes translateOut {
            from {
                transform: translate3d(0, 0, 0);
            }
            to {
                transform: translate3d(-200%, 0, 0);
            }
        }

        #seed-style-text span {
            display: inline-block;
            transition: transform var(--transition-duration) cubic-bezier(0.76, 0, 0.24, 1);
            position: relative;
            z-index: 1; /* Ensure text appears above pseudo-elements */
        }









.offer-detailArea {
    margin-bottom: 1rem;
    font-family: "BlinkMacSystem", sans-serif;
}

.offer-detailArea .pricing-price {
    background: #fff;
    box-shadow: 0 0 0.625rem rgba(0, 0, 0, 0.1);
    border-radius: 0.375rem;
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    padding: 0.5rem 1.5rem;
}

.offer-detailArea .pricing-price > * {
    margin: 0;
}

.offer-detailArea .pricing-price > p {
    font-size: 1.125rem;
    font-weight: 600;
    /*font-style: italic;*/
    line-height: 1;
}

.offer-detailArea .pricing-price > h3 {
    color: var(--primary);
    font-size: 2.25rem;
}

.offer-detailArea .pricing-price > h3 > span {
    vertical-align: middle;
}

/*countDown*/

.countDownArea {
    margin: .6rem 0 .9rem;
}

.countDownArea > .countdown {
    display: flex;
    gap: 1.25rem;
} 

.countdown .bloc-time {
  text-align: center;
}
.countdown .count-title {
    display: block;
    text-transform: uppercase;
    font-size: 0.75rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}
.countdown .figure {
  position: relative;
  float: left;
  height: 3.175rem;
  width: 2.75rem;
  margin-right: 0.25rem;
  background-color: #fff;
  border-radius: 0.5rem;
  -moz-box-shadow: 0 0.1875rem 0.25rem 0 rgba(0, 0, 0, 0.2), inset 0.125rem 0.25rem 0 0 rgba(255, 255, 255, 0.08);
  -webkit-box-shadow: 0 0.1875rem 0.25rem 0 rgba(0, 0, 0, 0.2), inset 0.125rem 0.25rem 0 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 0.1875rem 0.25rem 0 rgba(0, 0, 0, 0.2), inset 0.125rem 0.25rem 0 0 rgba(255, 255, 255, 0.08);
}
.countdown .figure:last-child {
  margin-right: 0;
}
.countdown .figure > span {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--primary);
  font-family: "wf-visual";
}
.countdown .figure .top:after,
.countdown .figure .bottom-back:after {
  content: "";
  position: absolute;
  z-index: -1;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.countdown .figure .top {
  z-index: 3;
  background-color: #f7f7f7;
  transform-origin: 50% 100%;
  -webkit-transform-origin: 50% 100%;
  -moz-border-radius-topleft: 0.625rem;
  -webkit-border-top-left-radius: 0.625rem;
  border-top-left-radius: 0.625rem;
  -moz-border-radius-topright: 0.625rem;
  -webkit-border-top-right-radius: 0.625rem;
  border-top-right-radius: 0.625rem;
  -moz-transform: perspective(12.5rem);
  -ms-transform: perspective(12.5rem);
  -webkit-transform: perspective(12.5rem);
  transform: perspective(12.5rem);
}
.countdown .figure .bottom {
  z-index: 1;
}
.countdown .figure .bottom:before {
  content: "";
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  width: 100%;
  height: 50%;
  background-color: rgba(0, 0, 0, 0.02);
}
.countdown .figure .bottom-back {
  z-index: 2;
  top: 0;
  height: 50%;
  overflow: hidden;
  background-color: #f7f7f7;
  -moz-border-radius-topleft: 0.625rem;
  -webkit-border-top-left-radius: 0.625rem;
  border-top-left-radius: 0.625rem;
  -moz-border-radius-topright: 0.625rem;
  -webkit-border-top-right-radius: 0.625rem;
  border-top-right-radius: 0.625rem;
}
.countdown .figure .bottom-back span {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin: auto;
}
.countdown .figure .top,
.countdown .figure .top-back {
  height: 50%;
  overflow: hidden;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.countdown .figure .top-back {
  z-index: 4;
  bottom: 0;
  background-color: #fff;
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -moz-transform: perspective(12.5rem) rotateX(180deg);
  -ms-transform: perspective(12.5rem) rotateX(180deg);
  -webkit-transform: perspective(12.5rem) rotateX(180deg);
  transform: perspective(12.5rem) rotateX(180deg);
  -moz-border-radius-bottomleft: 0.625rem;
  -webkit-border-bottom-left-radius: 0.625rem;
  border-bottom-left-radius: 0.625rem;
  -moz-border-radius-bottomright: 0.625rem;
  -webkit-border-bottom-right-radius: 0.625rem;
  border-bottom-right-radius: 0.625rem;
}
.countdown .figure .top-back span {
  position: absolute;
  top: -100%;
  left: 0;
  right: 0;
  margin: auto;
}

.seed-count {
    position: relative;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    font-weight: 600;
}

.seed-count > span {
    position: relative;
    display: inline-block;
    transition: transform 0.3s;
    transition-delay: 0.3s;
}

.seed-count > span.last {
    position: absolute;
    top: 0;
    right: 0;
    transform: translate(0%, 100%);
    color: var(--primary);
}

.counted .seed-count {
    color: var(--primary);
}

.counted .seed-count > span.last {
    transform: translate(0%, 0%);
}

.counted .seed-count > span.first {
    transform: translate(0%, -100%);
}

.offer-detailArea.extraPad .pricing-price {
    padding: 0.5rem 1.75rem;
}

.offer-detailArea.extraPad .pricing-price > p {
    font-size: 1.5rem;
}

.offer-detailArea .pricing-price > h3 {
    font-family: "BlinkMacSystem", sans-serif;
}

.offer-detailArea .pricing-price > h3 > span {
    font-family: "Poppins", sans-serif;
}

.offer-detailArea .pricing-price > h3 > span.off {
    padding: 0.125rem 0.5rem;
    letter-spacing: 0.0625rem;
}

.home-banner-area {
    overflow: initial;
}

#horizontal-scrollAreaContainer {
    z-index: 100;
    background: #fff;
}

        .arrow-bottom i{
            color: var(--primary);
            font-size: 1.125rem;
            animation: pulse 1.5s infinite; /* Apply the animation */
        }
        .arrow-bottom i:nth-child(1) {
            animation-delay: 0s;
        }
        
        .arrow-bottom i:nth-child(2) {
            animation-delay: 0.3s;
        }
        
        .arrow-bottom i:nth-child(3) {
            animation-delay: 0.6s;
        }
        
        .arrow-bottom i:nth-child(4) {
            animation-delay: 0.9s;
        }

        @keyframes pulse {
            0% {
                opacity: 0.3;
            }
            50% {
                opacity: 0.6;
            }
            100% {
                opacity: 1;
            }
        }



@media (min-width: 768px) {
    .single-webPortfolio > .webPortfolio-imageArea > .main-imageArea > .frontImage > img {
        aspect-ratio: 430/404;
    }
    
    .single-testimonial > .testimonial-imageArea > img {
        aspect-ratio: 72/53;
    }
    
    .single-blog > .blog-imageArea > img {
        aspect-ratio: 143/96;
        object-fit: cover;
    }
}

@media (max-width: 576px) {
    
    #horizontal-scrollAreaContainer .horizontal-scrollArea {
        position: relative;
        top: 0;
        flex-direction: column;
        height: auto;
    }
    
    .horizontal-scrollHeading > ul {
        grid-template-columns: initial;
    }
    
    .horizontal-scrollImgArea > img {
        max-width: 90%;
        display: block;
        margin: 0 auto;
        transform: translate(0%, 0);
    }
    
    #horizontal-scrollAreaContainer .horizontal-scrollArea > .horizontal-scrollerItem {
        padding: var(--sectionPadding-top) 0 var(--sectionPadding-bottom);
        height: auto;
    }
    
    #horizontal-scrollAreaContainer .horizontal-scrollArea > .horizontal-scrollerItem:last-child {
        padding-bottom: calc(var(--sectionPadding-bottom) * 2.25);
    }
    
    .horizontal-scrollerItem > span {
        font-size: 6.5rem;
    }
    
}

.popup-tempArea {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    pointer-events: none;
}

.popup-caseStudyArea {
}

.header:not(.scrolled) {
    /*background: #13ffee00;*/
}
/*#headerHeightArea {*/
/*    background: rgb(13, 9, 255);*/
/*}*/
.home-banner-area
 {
    /*background: #39ffed;*/
    background: radial-gradient(circle, rgb(60, 124, 255), rgb(13, 9, 255));
}


@media (min-width: 992px) {
    .home-banner-area {
        mask-image: linear-gradient(#000 77%, transparent 98%);
    }
    
    .about-banner-bottom::before {
        height: 10rem;
        background: linear-gradient(0deg, var(--background) 20%, rgba(255, 255, 255, 0.85) 31%, rgba(255, 255, 255, 0.2) 65%, transparent 92%);
    }
    
    #horizontal-scrollAreaContainer {
        --header-height: 4.3175rem;
    }
}

    
.banner-heading {
    color: #fff;
}

ul.green-tick > li::before{
    background: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/new/check.png') no-repeat center center;
    background-size: contain;
}

.price-font,
.horizontal-points > li > .price-cloud {
    font-family: "Kontora", sans-serif;
    letter-spacing: 0.0625rem;
}

.horizontal-points > li > .price-cloud {
    background: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/new/cloud.png') no-repeat center center;
    background-size: contain;
    color: #fff;
    padding: 0.625rem 1rem;
    margin-left: 0.5rem;
}

.horizontal-points > li > .price-cloud > span {
    position: relative;
    font-size: 0.9375rem;
    top: -0.5rem;
    font-weight: 400;
}

.horizontal-points > li{
    font-family: "roboto";
}

.scrolled-elements-center {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.mt-2rem {
    margin-top: 2rem;
}

.exclusive-badge-container {
    position: relative;
}

.exclusive-badge-container > .bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: var(--primary);
    z-index: -1;
}

.exclusive-badge-container > .heading {
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff;
}

img.exclusive-badge-img {
    height: 5rem;
    max-width: 100%;
    object-fit: contain;
    margin-bottom: 2rem;
}

img.exclusive-price-img {
    height: 8.5rem;
    max-width: 100%;
    object-fit: contain;
    margin-bottom: 1.75rem;
}

img.exclusive-price-50-img {
    height: 6.5rem;
    max-width: 100%;
    object-fit: contain;
    margin: 1.25rem 0 1rem;
}

img.exclusive-offer-50-img {
    height: 4.25rem;
    max-width: 100%;
    object-fit: contain;
    margin: 1rem 0 0.5rem;
}

.section-heading.text-center > h2, .section-heading > h2{
    font-weight: 600;
}

h2{
    font-weight: 900;
}

.horizontal-scrollerItem .section-heading > h2 {
    /*font-family: "Helvetica", sans-serif;*/
    font-family: "wf-visual";
}

.subheadingStyle {
    font-size: 1.5rem;
    display: block;
    font-family: "poppins", sans-serif;
    margin-top: 0.125rem;
}

.subheadingStyle sup {
    top: -.5rem !important;
    margin-right: 0.25rem;
    font-size: 69% !important;
}

.subheadingStyle .price-font sup {
    margin: 0 !important;
    opacity: 1 !important;
    left: 0 !important;
    top: -0.375rem !important;
}

.subheadingStyle sub {
    bottom: 0.75rem !important;
    left: .25rem !important;
    font-size: .625rem !important;
    padding: 0.125rem .4rem  !important;
    font-weight: 600 !important;
    margin-right: 0.125rem;
}

.section-heading > h2 sup > del::before {
    border-top: 2px solid #333;
    bottom: 0.625rem;
}

.section-heading.headingStyle > p {
    font-size: 0.9375rem;
} 

.pt-default-mob h2{
    font-size: 3.1rem;
}

.pt-default-mob p{
    font-family: "BlinkMacSystem", sans-serif;
}

#portfolio-sec h2{
    font-family: "wf-visual";
    /*font-weight: 900;*/
}

#portfolio-sec p{
    font-family: "source-sans-pro";
}

.horizontal-scrollAreaSection .get_everything{
    font-size: 1.525rem;
    font-weight: 600;
}

.original-discounted > li > p{
    font-family: "Kontora", sans-serif;
}

@media (min-width: 768px) {
    
    .horizontal-scrollerItem.first .section-heading > h2 {
        font-size: 3.25rem;
        font-family: "wf-visual";
        margin-bottom: 0.5rem;
    }
    
    .parallex-watermark {
        top: 0% !important;
        transform: translate(-50%, 0%) !important;
    }
}

.horizontal-points {
    font-family: "Helvetica", sans-serif;
    font-size: 1.375rem;
}

.hScroller-linkArea > a.primary {
    padding: 0.5rem 3rem;
    min-height: 2rem;
}

.horizontal-hurrytext > strong {
    font-size: 1.3125rem;
}

@media (max-width: 768px) {
    .home-banner-area {
        overflow: hidden;
    }
    
    .horizontal-points,
    .horizontal-points > li > sup {
        font-size: 1.25rem;
    }
    
    .arrow-bottom {
        margin-top: 0px;
    }
    
    .horizontal-name-img::before {
        display: none;
    }
    
    .seed-countArea {
        flex-wrap: wrap;
    }
    
    .last-scrollerItem > img.bg {
        right: 0;
    }
    
    .about-banner-bottom {
        height: auto;
    }
    
    .about-banner-bottom::before {
        height: 20rem;
        background: linear-gradient(0deg, var(--background) 14%, transparent);
    }
    
    img.exclusive-price-img {
        height: 6.5rem;
    }
    .count_section_img {
        top: 19rem !important;
    }
    
    
}

@media(max-width: 992px) and (min-width: 767px){
    
    .count_section_img {
        top: 3rem !important;
    }
}

@media(max-width: 1366px){
    ul.green-tick > li::before{
        top: 0.25rem;
    }
}

#countdown{
    z-index: 1;
}

.count_section_img {
    position: absolute;
    top: 0rem;
    right: 1rem;
    width: 16%;
    z-index: -1;
}

.horizontal-points li > img{
    max-width: 70px;
}

.horizontal-points li:nth-child(3) > img{
    max-width: 90px;
}

.horizontal-scrollHeading{
    position: relative;
}

/*.discount_round img{*/
/*    max-width: 84px !important;*/
/*}*/

@media(max-width: 1400px){
    .drive_result br{
        display: none;
    }
    .horizontal-scrollerItem.first .section-heading > h2 {
        font-size: 3.225rem !important
    }
    .parallex-watermark{
        width: 80% !important;
        /*top: 6% !important;*/
    }
}

.hp_small{
    font-size: 1.2rem !important;
    margin-top: 1.2rem;
}

.original_discounted_small{
    margin: 1.5rem 0 1rem 0 !important;
}

.original_discounted_small > li{
    padding: 1.125rem 0 0.75rem !important;
    width: 43% !important;
}

.original-discounted > li > p{
    font-size: 2.375rem !important;
}

.original-discounted > li > p > sup{
    top: -0.9rem !important;
    left: -0.1rem !important;
}

.original-discounted > li{
    padding: 1rem 0 0.25rem !important;
    font-weight: 500;
}

.parallex-watermark {
    object-position: top center;
}

.original-discounted > li:nth-child(2) span {
    font-weight: 600;
}
</style>
@endpush
@section('container')

<style>

.popup-area.beforeAfterPopup {
    max-width: 70rem;
    border-radius: 0;
}

.popup-area.beforeAfterPopup .modal-dialog {
    margin: 0 auto;
}

.gotoNextArea {
    display: flex;
    justify-content:center;
    align-items: center;
    gap: 1rem;
}

.gotoNextArea > h4 {
    font-size: 1.25rem;
    font-weight: 700;
}

.parallex-watermark {
    width: 74%;
    height: 5.5rem;
}

.original-discounted > li:nth-child(2) span {
    font-size: 0.75rem;
}

.hScroller-linkArea > a.primary {
    min-width: 16.25rem;
    text-align: center;
}

.offer-handAnimtion > a.primary {
    min-width: 26.5rem;
}

.last-scrollerItem .section-heading > p {
    font-size: 1.25rem;
    font-weight: 600;
}

.gotoNextArea {
    gap: 0.5rem;
    flex-direction: column;
}

.gotoNextArea .arrow-bottom {
    flex-direction: column;
}

.gotoNextArea .arrow-bottom > i {
    transform: rotate(90deg);
    margin-top: -0.25rem;
}
    
.gotoNextArea .arrow-bottom > i:nth-child(4) {
    display: none;
}

.hScroller-linkArea > a {
    background: #3bb251 !important;
}

.header.hidden-top {
    transform: rotateX(-90deg) !important;
}

.banner-heading + .link-area > a {
    -webkit-animation: btn-glow .4s 0s ease both;
    animation: btn-glow 1.5s 0s ease both;
    -webkit-animation-delay: 4s;
    animation-delay: 4s
}

@media (min-width: 768px) {
    .horizontal-scrollerItem.first .section-heading > h2 {
        font-size: 3.25rem;
        line-height: 1.1;
    }
    
    .horizontal-points {
        font-size: 1.25rem;
    }
    
    .original-discounted {
        margin: 1rem 0 1.75rem 0;
    }
    
    .homeBanner-sliders:nth-child(2) {
      top: calc(calc(var(--height) + 0.875rem) * 1);
    }
    
    .homeBanner-sliders:nth-child(3) {
      top: calc(calc(var(--height) + 0.875rem) * 2);
    }
}

@media (max-width: 768px){
    .original-discounted > li {
        width: 48%;
    }
    
    .horizontal-scrollerItem.first .section-heading > h2 {
        font-size: 2.125rem !important;
    }
    
    .horizontal-points {
        font-size: 1.25rem;
    }
    
    .horizontal-scrollerItem .arrow-bottom {
        margin-top: 0;
    }
    
    .original_discounted_small {
        justify-content: center;
    }
    
    .original_discounted_small > li {
        width: 48% !important;
    }
    
    .home-portfolio-tabs > .nav-tabs {
        border-radius: 4rem;
    }
    
    .banner-heading + .link-area > a {
        padding: 0.75rem 1.5rem;
        font-size: 0.9375rem;
        min-height: auto;
    }
    
    .parallex-watermark {
        top: 0;
        height: 2.5rem;
    }
    
    .gotoNextArea {
        flex-direction: column;
    }
    
    .gotoNextArea .arrow-bottom {
        flex-direction: column;
    }
    
    .gotoNextArea .arrow-bottom > i {
        transform: rotate(90deg)
    }
    
    .container, .container-fluid {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        
    }
    
    .last-scrollerItem > img.man {
        display: none;
    }
    
    .original_discounted_small {
        margin: 2.5rem 0 2.4375rem 0 !important;
    }
    
    .seed-countArea {
        line-height: 1;
        margin-bottom: 1.5rem;
    }
    
    .last-scrollerItem .section-heading > h2 {
        font-size: 1.875rem;
        margin-bottom: 2.25rem !important;
    }
    
    .hScroller-linkArea {
        margin-top: 2rem !important;
    }
    
    .section-heading > p {
        font-size: 1.125rem;
    }
    
    .original-discounted {
        margin: 0.5rem 0 0rem 0;
    }
    
    .horizontal-points {
        margin-top: 1.5rem !important;
    }
    
    .gotoNextArea .arrow-bottom > i:nth-child(4) {
        display: none;
    }
    
    .gotoNextArea.mt-3 {
        margin-top: 4rem !important;
    }
    
    .count_section_img {
        right: 1rem !important;
        top: 21.5rem !important;
    }
    
    .before-after-div p {
        bottom: 8%;
    }
    
    #image-after {
        margin-left: -3rem;
    }
    
    .before-after-div:hover #image-before {
        transform: translateX(77%) rotateX(5deg) rotateY(-5deg) rotateZ(0deg);
    }
    
    .before-after-div:hover #image-after {
        transform: translateX(-77%) rotateX(-5deg) rotateY(5deg) rotateZ(0deg);
    }
    
    .last-scrollerItem > img.map {
        width: 112%;
    }
    
    .mobile-toggle .link-area > :is(a, button) {
        margin-top: 0.875rem !important;
    }
    
    #horizontal-scrollAreaContainer .horizontal-scrollArea > .horizontal-scrollerItem:last-child {
        padding-bottom: var(--sectionPadding-bottom);
    }
    
    .webPortfolio-caseStudyDetailArea .webPortfolio-caseStudyDetail {
        margin-top: 6rem;
    }
    
    .portfolio-inner-tabs-div .basic-tabs {
        margin-top: -6.5rem !important;
    }
    
    .webPortfolio-caseStudyImage {
        max-height: 24rem;
    }
    
    #portfolioModal .modal-body {
        padding: 3rem 2rem;
    }
    
    #portfolioModal .arrow-absolute {
        display: none;
    }
    
    #portfolioModal .modal-body button {
        padding: 0.125rem .5rem 0;
        font-size: 1.5rem;
    }
    
    .banner-center-container.homeBannerSlider {
        bottom: 18% !important;
    }
    
    .webPortfolio-caseStudyArea {
        padding: 4.25rem 0 0;
    }
    
    .webPortfolio-caseStudyDetailArea > p {
        display: none;
    }
    
    .webPortfolio-caseStudyDetailArea > img {
        width: 100%;
        object-position: center center;
    }
    
    .pt-default-mob h2 {
        font-size: 2.125rem;
    }
    
    .offer-handAnimtion > a.primary {
        min-width: 15rem;
    }
}

</style>
    <section class="home-banner-area">
        
      <div id="headerHeightArea"></div>
      <section class="home-banner gradient-circle leftCenter-gradient pb-5">
        <div class="container banner-center-container">
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <div class="banner-heading">
                <!--<h5>Premium Web Design for Less</h5>-->
                <!--<h1>Build, <span>Launch</span>, and Grow Your <span>Online</span> Presence&mdash;Fast</h1>-->
                <h1 class="heading-glow-anim">
                    <span>B</span><span>u</span><span>i</span><span>l</span><span>d</span><span>,</span>
                    <span>L</span><span>a</span><span>u</span><span>n</span><span>c</span><span>h</span><span>,</span>
                    <span>a</span><span>n</span><span>d</span>
                    <span>G</span><span>r</span><span>o</span><span>w</span>
                    <span>Y</span><span>o</span><span>u</span><span>r</span>
                    <span>O</span><span>n</span><span>l</span><span>i</span><span>n</span><span>e</span>
                    <span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>c</span><span>e</span>
                    <span>&mdash;</span>
                    <span>F</span><span>a</span><span>s</span><span>t</span>
                </h1>
                
                <p class="text-glow-anim">
                    <span>F</span><span>i</span><span>n</span><span>d</span> <span>o</span><span>u</span><span>t</span>
                    <span>h</span><span>o</span><span>w</span> <span>m</span><span>a</span><span>n</span><span>y</span> 
                    <span>b</span><span>u</span><span>y</span><span>e</span><span>r</span><span>s</span> 
                    <span>s</span><span>e</span><span>a</span><span>r</span><span>c</span><span>h</span>
                    <span>i</span><span>n</span><span>g</span> <span>f</span><span>o</span><span>r</span> 
                    <span>y</span><span>o</span><span>u</span><span>r</span> <span>p</span><span>r</span><span>o</span><span>d</span><span>u</span><span>c</span><span>t</span><span>s</span>
                    <span>a</span><span>n</span><span>d</span> <span>s</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span> 
                    <span>o</span><span>n</span><span>l</span><span>i</span><span>n</span><span>e</span><span>?</span>
                </p>
              </div>
              <div class="link-area">
                  <a href="javascript:void(0);" class="offer-btn primary">Get Your Free Online Business Intelligence Report</a>
              </div>
            </div>
          </div>
        </div>
        <div class="container banner-center-container homeBannerSlider">
          <div class="row">
            <div class="col-md-6 offset-md-6">
              <div class="homeBanner-slidersArea">
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/1.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/2.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/3.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/4.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/5.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/6.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/7.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/8.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/9.webp" alt="" />
                    </li>
                    <!--<li>-->
                    <!--  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/10.webp" alt="" />-->
                    <!--</li>-->
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/11.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/1.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/2.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/3.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/4.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/5.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/6.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/7.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/8.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/9.webp" alt="" />
                    </li>
                    <!--<li>-->
                    <!--  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/10.webp" alt="" />-->
                    <!--</li>-->
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/11.webp" alt="" />
                    </li>

                  </ul>
                </div>
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/12.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/13.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/14.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/15.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/16.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/17.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/18.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/19.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/20.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/21.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/12.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/13.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/14.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/15.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/16.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/17.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/18.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/19.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/20.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/21.webp" alt="" />
                    </li>
                    
                  </ul>
                </div>
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/22.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/23.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/24.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/25.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/26.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/27.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/28.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/29.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/30.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/31.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/22.webp" alt="" />
                    </li>
                     <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/23.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/24.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/25.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/26.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/27.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/28.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/29.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/30.webp" alt="" />
                    </li>
                    <li>
                      <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/home/top/31.webp" alt="" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      
      <section class="section-padding about-banner-bottom p-0">
        <!--<div class="container">
          <div class="row">
            <div class="col-12">
              <div class="about-top-text">
                <p>
                  Our customers say Excellent
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/about/rating.png" alt="" />
                  4.7 out 5 stars based on 89,720 reviews
                </p>
              </div>
            </div>
          </div>
        </div>-->
      </section>
      
      <div class="banner-bottom-text">
          <a class="scroll-to-link">
          <p>Check out our awesome <span>Webfolio</span></p>
              <div class="basic-modern-dots white-dots" id="banner-dots-link">     
                <div class="dot first-circle"></div> 
                <div class="dot second-circle"></div> 
                <div class="dot third-circle"></div> 
            </div>
          </a>
      </div>
    </section>
    
    <section class="horizontal-scrollAreaSection">
        <div class="position-relative white-section" id="horizontal-scrollAreaContainer">
            <div class="horizontal-scrollArea" id="horizontal-scrollArea">
                <div class="horizontal-scrollerItem first gradient-circle leftCenter-gradient">
                    <div class="container position-relative">
                        <!--<p class="parallex-watermark">SPOILER ALERT</p>-->
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/best-value.png" class="parallex-watermark" alt="" width="100%" />
                        <div class="section-heading text-center mt-3 p-0 mb-0 drive_result">
                            <h2 style="max-width: 100%;"><span>Comprehensive <span class="color-primary">Website Solutions </span><br>That <span class="color-primary">Drive Results</span></span></h2>
                            <p class="source-sans-pro get_everything">Get Everything You Need to Succeed Online:</p>
                        </div>
                        <div class="scrolled-elements-center discount_round">
                            <ul class="horizontal-points mt-3 mb-3 green-tick centered-list" style="gap: 0.875rem 0;">
                                <li>Custom Website Design <img style="max-width: 4.275rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/699-off.png" alt="" width="100%" /></li>
                                <li>Complete Website Development <img style="max-width: 4.275rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/699-off.png" alt="" width="100%" /></li>
                                <li>Exclusive Bonuses For Website <img style="max-width: 6rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/free-pic.png" alt="" width="100%" /></li>
                            </ul>
                            
                            <div class="price-discount-comparison">
                                <div class="prev-price">
                                    <h3>Original Price</h3>
                                    <p><sup>$</sup>1999</p>
                                </div>
                                <div class="new-price">
                                    <div class="bgArea">
                                        <div class="bg"></div>
                                    </div>
                                    <h3>Discounted Price</h3>
                                    <p><sup>$</sup>1399</p>
                                </div>
                                <div class="discount">
                                    <p>20%<br/>OFF</p>
                                </div>
                            </div>
                            
                            <!--<ul class="original-discounted">
                                <li>Original Price<p class="mb-0"><sup>$</sup>1999</p> <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/vs-light.png" alt="" width="100%" /></li>
                                <li>Discounted Price<span>20% OFF</span><p class="mb-0"><sup>$</sup>1399</p></li>
                            </ul>-->
                            
                            <div class="link-area hScroller-linkArea offer-handAnimtion">
                              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/poke.svg" alt="" />
                              <a href="javascript:void(0);" class="primary offer-btn" id="primary_white"><b class="hide-mob">Limited Time Offer - </b>Signup In <span class="text-light countdownSimple" id="countdown"></span></a>
                            </div>
                            
                            <!--<div class="exclusive-badge-container">
                                <span class="before"></span>
                                <span class="after"></span>
                                <div class="bg"></div>
                                <span class="heading">Exclusive Bonuses For Websites</span>
                            </div>-->
                            <div class="mt-3 gotoNextArea">
                                <h4 class="mb-0">See what's included in the offer</h4>
                                <div class="arrow-bottom">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row justify-content-center">
                            <div class="col-lg-7 col-sm-12 my-auto">
                                <ul class="horizontal-points mt-4 mb-3 green-tick centered-list" style="gap: .75rem 0;">
                                    <li>Custom Website Design<sup class="color-primary price-cloud"><span>$</span>499</sup></li>
                                    <li>Complete Website Development<sup class="color-primary price-cloud"><span>$</span>499</sup></li>
                                    <li>Exclusive Bonuses For Website<sup class="color-primary">Free</sup></li>
                                </ul>
                                <div class="horizontal-price mt-5">
                                    <ul class="">
                                        <li>Total Value<p class="mb-0" style="color: #9c9c9c;">$999</p>
                                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/vs.png" alt="Tick">
                                        </li>
                                        <li class="active"><span>20% Off</span>After Discount<p class="mb-0">$699</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="row justify-content-center mt-3">
                            <div class="col-lg-6 col-sm-12 text-center">
                                <div class="row">
                                    <div class="col-md-9 text-end">
                                        <h4 class="mb-0" style="font-size: 1.25rem;font-weight: 700;">What's included in the offer</h4>
                                    </div>
                                    <div class="col-md-3 my-auto text-start">
                                        <div class="arrow-bottom">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="horizontal-scrollerItem gradient-circle leftCenter-gradient lightGray-section">
                    <!--<span>01</span>-->
                    <img class="count_section_img" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/1.png">
                    <div class="container">
                        <div class="row rowGap2 align-items-center">
                            <div class="col-md-6">
                                <div class="horizontal-scrollImgArea">
                                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/first.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section-heading horizontal-scrollHeading headingStyle discount_round">
                                    <h2>Custom <span class="color-primary">Website Design</span>
                                        <span class="subheadingStyle">
                                            Worth Of
                                            <span class="color-primary price-font"><del><sup>$</sup><span class="counter" data-value="899">899</span></del></span>
                                            After
                                            <img style="max-width: 4.625rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/699-off.png" width="100%">
                                        </span>
                                        <!--<span style="font-size: 2rem; font-weight: 600;">Worth Of</span><sup>(<del>$899</del>)</sup> 
                                        <span style="font-size: 2rem; font-weight: 600;">After</span><sub>20% OFF</sub> 
                                        <span class="color-primary" class="price-font"><sup>$</sup>699</span>-->
                                    </h2>
                                    
                                    <!--<div class="price-heading-div">
                                        <ul>
                                            <li><span>Value</span></li>
                                            <li class="active"><sup>$</sup>699</li>
                                        </ul>
                                    </div>-->
                                    
                                    <p>Get noticed instantly with a website designed just for your brand.</p>
                                    <h5>What's Includes:</h5>
                                    <ul>
                                        <li>Custom 5 Page Website Design</li>
                                        <li>Modern UI/UX Design</li>
                                        <li>Typography with Readability</li>
                                        <li>From Industry Expert Designers</li>
                                        <li>On-Trend Styles</li>
                                        <li>100% Unique Design Guarantee</li>
                                        <li>Up to 5 Custom Made Banner Designs</li>
                                        <li>Upto 5 Stock Photos</li>
                                        <li>Upto 5 Revisions</li>
                                        <li>All Essential File Formats</li>
                                    </ul>
                                    <!--<div class="link-area hScroller-linkArea mt-4">
                                      <a href="javascript:void(0);" class="primary offer-btn" id="primary_white">Signup In <span class="text-light countdownSimple" id="countdown"></span></a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                            <div class="gotoNextArea" style="margin-top: 5rem;">
                                <h4 class="mb-0">See What's Included Next</h4>
                                <div class="arrow-bottom">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="horizontal-scrollerItem gradient-circle leftCenter-gradient">
                    <img class="count_section_img" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/2.png">
                    <div class="container">
                        <div class="row rowGap2 align-items-center">
                            <div class="col-md-6">
                                <div class="horizontal-scrollImgArea">
                                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/second.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section-heading horizontal-scrollHeading headingStyle discount_round">
                                    <h2>Custom <span class="color-primary">Web Development</span>
                                        <span class="subheadingStyle">
                                            Worth Of
                                            <span class="color-primary price-font"><del><sup>$</sup><span class="counter" data-value="899">899</span></del></span>
                                            After
                                            <img style="max-width: 4.625rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/699-off.png" width="100%">
                                        </span>
                                    </h2>
                                    <p>Ensure fast, secure, and scalable websites with responsive layouts.</p>
                                    <h5>What's Includes:</h5>
                                    <ul>
                                        <li>Complete W3C Certified HTML</li>
                                        <li>Content Management System</li>
                                        <li>Optimized structure</li>
                                        <li>Modern Animations & Hover Effects</li>
                                        <li>Custom Sliders</li>
                                        <li>Upto 2 Plugins Integrations</li>
                                        <li>Responsive Across All Devices</li>
                                        <li>SEO-Friendly Structure</li>
                                        <li>FREE Google Friendly Sitemap</li>
                                        <li>Upto 5 revisions</li>
                                    </ul>
                                    <!--<div class="link-area hScroller-linkArea mt-4">
                                      <a href="javascript:void(0);" class="primary offer-btn" id="primary_white">Signup In <span class="text-light countdownSimple" id="countdown"></span></a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="gotoNextArea" style="margin-top: 5rem;">
                                <h4 class="mb-0">See What's Included Next</h4>
                                <div class="arrow-bottom">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="horizontal-scrollerItem gradient-circle leftCenter-gradient lightGray-section">
                    <img class="count_section_img" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/3.png">
                    <div class="container">
                        <div class="row rowGap2 align-items-center">
                            <div class="col-md-6">
                                <div class="horizontal-scrollImgArea">
                                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/third.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section-heading horizontal-scrollHeading headingStyle">
                                    <h2>Free bonuses For <span class="color-primary">Website</span>
                                        <span class="subheadingStyle">
                                            Worth Of
                                            <span class="color-primary price-font"><del><sup>$</sup><span class="counter" data-value="899">899</span></del></span>
                                            After
                                            <img style="max-width: 5.625rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/free-pic.png" width="100%">
                                        </span>
                                    </h2>
                                    <p>Instantly improve your site and make a strong impact with our free bonuses.</p>
                                    <h5>What's Includes:</h5>
                                    <ul>
                                        <li>Google My Business Listing Setup</li>
                                        <li>Facebook Pixel Integration</li>
                                        <li>CMS Training Session</li>
                                        <li>Branded Social Media Graphics</li>
                                        <li>Live Chat Integration</li>
                                        <li>Basic On-Page SEO Setup</li>
                                        <li>Branded Email Signature Template</li>
                                        <li>Google Analytics Setup</li>
                                        <li>Free SSL Certificate Installation</li>
                                        <li>Business Email Setup</li>
                                    </ul>
                                    <!--<div class="link-area hScroller-linkArea mt-4">
                                      <a href="javascript:void(0);" class="primary offer-btn" id="primary_white">Signup In <span class="text-light countdownSimple" id="countdown"></span></a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                         <div class="gotoNextArea" style="margin-top: 4.3rem;">
                                <h4 class="mb-0">See What's Included Next</h4>
                                <div class="arrow-bottom">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="horizontal-scrollerItem gradient-circle leftCenter-gradient">
                    <div class="container">
                        <div class="row rowGap2 align-items-center">
                            <!--<div class="col-md-6">
                                <div class="horizontal-scrollImgArea">
                                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/first.png" alt=""/>
                                </div>
                            </div>-->
                            <div class="col-lg-12 col-sm-12">
                                <div class="basic-tabs small-tabs">
                                    <ul class="nav nav-tabs" id="scrollable-tabs" role="tablist">
                                        <li class="nav-item">
                                          <a class="nav-link active" data-bs-toggle="tab" href="#b-two-b"><span>B2B</span></a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" data-bs-toggle="tab" href="#b-two-c"><span>B2C</span></a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" data-bs-toggle="tab" href="#e-commerce"><span>E-COMMERCE</span></a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" data-bs-toggle="tab" href="#personal"><span>PERSONAL BRAND</span></a>
                                        </li>
                                    </ul>
                                  </div>
                                  <div class="tab-content web-portfolio-content">
                                    <div class="tab-pane fade active show" id="b-two-b">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="section-heading horizontal-scrollHeading">
                                                    <h2 style="font-size: 2.1rem;">What <span class="color-primary">We</span> Have <span class="color-primary">Done ?</span></h2>
                                                </div>
                                                <div class="testimoinal-userArea horizontal-name-img">
                                                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/testi-5.png" width="100%" alt=""/>
                                                  <div class="testimoinal-userDetail">
                                                    <p><strong>John Anderson</strong></p>
                                                    <p>Marketing Director</p>
                                                  </div>
                                                </div>
                                                <p class="mt-4">Working with this team has transformed our business! The results were beyond our expectations, from a clear boost in leads to 
                                                improved brand visibility. Their strategy and execution are unmatched.</p>
                                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/stars.png" width="30%">
                                                <div class="row horizontal-values-div">
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span class="counter" data-value="200">0</span>%</h4>
                                                        <p class="mb-0">Increase in Sales</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span class="counter" data-value="3">0</span>x</h4>
                                                        <p class="mb-0">More Traffic</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span class="counter" data-value="2">0</span>x</h4>
                                                        <p class="mb-0">More ROI</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                
                                                <div class="before-after-div">
                                                    <div class="before-div" id="image-before">
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/b2b/before.png" alt="Before"  class="image image1">
                                                        <p>Before</p>
                                                    </div>
                                                    <div class="after-div" id="image-after">
                                                        <p>After</p>
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/b2b/after.png" alt="After"  class="image image2">
                                                    </div>
                                                    
                                                    <!--<img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/before.png" alt="Before" id="image1" class="image image1">
                                                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/after.png" alt="After" id="image2" class="image image2">-->
                                                    
                                                </div>
                                                
                                                <!--<div id="w-node-d64108ec-afee-0705-4dd5-c79a61807646-1fc6a182" class="content_item-component is-glow-up">
                                                    <div id="w-node-d64108ec-afee-0705-4dd5-c79a61807647-1fc6a182" data-w-id="d64108ec-afee-0705-4dd5-c79a61807647" class="image-wrapper is-glow-up _1">
                                                        <div class="image-overlay is-px-upgrade"></div>
                                                        <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/6359525e71a0980a87bb3ff6/65cec68b0143f11f615de4b6_eightx-before.png" class="image is-glow-up" />
                                                        <div class="px-upgrade_text-wrapper is-before"><div class="text-size-medium">BEFORE</div></div>
                                                    </div>
                                                    <div id="w-node-d64108ec-afee-0705-4dd5-c79a6180764d-1fc6a182" data-w-id="d64108ec-afee-0705-4dd5-c79a6180764d" class="image-wrapper is-glow-up _2">
                                                        <div class="image-overlay is-glow-up"></div>
                                                        <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/6359525e71a0980a87bb3ff6/65cec68e7522f4057854fd28_eightX-after.png" class="image is-glow-up" />
                                                        <div class="image-overlay is-px-upgrade"></div>
                                                        <div class="px-upgrade_text-wrapper"><div class="text-size-medium">AFTER</div></div>
                                                    </div>
                                                    <div id="w-node-d64108ec-afee-0705-4dd5-c79a61807654-1fc6a182" data-w-id="d64108ec-afee-0705-4dd5-c79a61807654" class="image-wrapper is-glow-up _3">
                                                        <div class="image-overlay is-px-upgrade"></div>
                                                        <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/6359525e71a0980a87bb3ff6/65cec68b0143f11f615de4b6_eightx-before.png" class="image is-glow-up" />
                                                        <div class="px-upgrade_text-wrapper is-before"><div class="text-size-medium">BEFORE</div></div>
                                                    </div>
                                                </div>-->
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="b-two-c">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="section-heading horizontal-scrollHeading">
                                                    <h2 style="font-size: 2.1rem;">What <span class="color-primary">We</span> Have <span class="color-primary">Done</span></h2>
                                                </div>
                                                <div class="testimoinal-userArea horizontal-name-img">
                                                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/testi-2.png" width="100%" alt=""/>
                                                  <div class="testimoinal-userDetail">
                                                    <p><strong>Sarah Lee</strong></p>
                                                    <p>CEO, FreshStart Wellness</p>
                                                  </div>
                                                </div>
                                                <p class="mt-4">The team helped us connect with our target audience in ways we never thought possible. Our brand now speaks directly to our 
                                                consumers, and we've seen a tremendous boost in sales.</p>
                                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/stars.png" width="30%">
                                                <div class="row horizontal-values-div">
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>150</span>%</h4>
                                                        <p class="mb-0">Increase in Sales</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>4</span>x</h4>
                                                        <p class="mb-0">Boost in Brand</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>2.5</span>x</h4>
                                                        <p class="mb-0">More ROI</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                
                                                <div class="before-after-div">
                                                    <div class="before-div" id="image-before">
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/b2c/before.png" alt="Before"  class="image image1">
                                                        <p>Before</p>
                                                    </div>
                                                    <div class="after-div" id="image-after">
                                                        <p>After</p>
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/b2c/after.png" alt="After"  class="image image2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="e-commerce">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="section-heading horizontal-scrollHeading">
                                                    <h2 style="font-size: 2.1rem;">What <span class="color-primary">We</span> Have <span class="color-primary">Done</span></h2>
                                                </div>
                                                <div class="testimoinal-userArea horizontal-name-img">
                                                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/testi-4.png" width="100%" alt=""/>
                                                  <div class="testimoinal-userDetail">
                                                    <p><strong>David Chang</strong></p>
                                                    <p>Founder, HomeGoods Hub</p>
                                                  </div>
                                                </div>
                                                <p class="mt-4">Thanks to their e-commerce strategies, our store's traffic and conversion rates have skyrocketed. Our product listings are 
                                                now optimized, and customers are finding exactly what they need!</p>
                                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/stars.png" width="30%">
                                                <div class="row horizontal-values-div">
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>250</span>%</h4>
                                                        <p class="mb-0">Increase in Rates</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>3</span>x</h4>
                                                        <p class="mb-0">More Web Traffic</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>2</span>x</h4>
                                                        <p class="mb-0">More ROI</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                
                                                <div class="before-after-div">
                                                    <div class="before-div" id="image-before">
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/e-commerce/before.png" alt="Before"  class="image image1">
                                                        <p>Before</p>
                                                    </div>
                                                    <div class="after-div" id="image-after">
                                                        <p>After</p>
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/e-commerce/after.png" alt="After"  class="image image2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="personal">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="section-heading horizontal-scrollHeading">
                                                    <h2 style="font-size: 2.1rem;">What <span class="color-primary">We</span> Have <span class="color-primary">Done</span></h2>
                                                </div>
                                                <div class="testimoinal-userArea horizontal-name-img">
                                                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/testi-3.png" width="100%" alt=""/>
                                                  <div class="testimoinal-userDetail">
                                                    <p><strong>Emily Rodriguez</strong></p>
                                                    <p>CEO</p>
                                                  </div>
                                                </div>
                                                <p class="mt-4">Their personalized approach to building my brand has been transformative. I now have a clear, strong message that resonates 
                                                with my audience, and my online presence has grown exponentially.</p>
                                                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/stars.png" width="30%">
                                                <div class="row horizontal-values-div">
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>300</span>%</h4>
                                                        <p class="mb-0">Increase in Sales</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>2.5</span>x</h4>
                                                        <p class="mb-0">More Web Traffic</p>
                                                    </div>
                                                    <div class="col-lg-4 col-4 text-center">
                                                        <h4><span>4</span>x</h4>
                                                        <p class="mb-0">More ROI</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                
                                                <div class="before-after-div">
                                                    <div class="before-div" id="image-before">
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/personal-brand/before.png" alt="Before"  class="image image1">
                                                        <p>Before</p>
                                                    </div>
                                                    <div class="after-div" id="image-after">
                                                        <p>After</p>
                                                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/personal-brand/after.png" alt="After"  class="image image2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                
                                <!--<div class="section-heading horizontal-scrollHeading">
                                    <h2>Crafted Website Design For <span class="color-primary">Lasting Success</span></h2>
                                    <div class="price-heading-div">
                                        <ul>
                                            <li><span>Value</span></li>
                                            <li class="active"><sup>$</sup>799</li>
                                        </ul>
                                    </div>
                                    <p>Tailored to your brand with mobile-first design principles.</p>
                                    <h5>What's Includes:</h5>
                                    <ul>
                                        <li>Custom 5 Page Website Design</li>
                                        <li>Modern UI/UX Design</li>
                                        <li>Typography with Readability</li>
                                        <li>From Industry Expert Designers</li>
                                        <li>On-Trend Styles</li>
                                        <li>100% Unique Design Guarantee</li>
                                        <li>Up to 5 Custom Made Banner Designs</li>
                                        <li>Upto 5 Stock Photos</li>
                                        <li>Upto 5 Revisions</li>
                                        <li>All Essential File Formats</li>
                                    </ul>
                                </div>-->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal-scrollerItem last-scrollerItem">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/last/bg.jpg" alt="" class="bg"/>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/last/map.png" alt="" class="map"/>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/last/man.png" alt="" class="man"/>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-heading">
                                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/hurry_up.png"  alt="" class="hurryUp-img">
                                    <!--<p class="horizontal-hurrytext mb-0">Hurry Up!</p>-->
                                    <h2 class="mb-0">Get Your <span class="color-primary">50%</span> OFF On <br>Complete <span class="color-primary">Web Package</span></h2>
                                </div>
                                
                                <ul class="horizontal-points mb-3 green-tick centered-list hp_small" style="gap: .75rem 0;">
                                    <li>Custom Website Design <img style="max-width: 4.275rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/699-off.png" alt="" width="100%" /></li>
                                    <li>Complete Website Development <img style="max-width: 4.275rem" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/699-off.png" alt="" width="100%" /></li>
                                    <li>Exclusive Bonuses For Website <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/free-pic.png" alt="" width="100%" style="max-width: 6rem" /></li>
                                </ul>
                                
                                <ul class="original-discounted last-parallex-orig-disc original_discounted_small">
                                    <li>Original Price<p class="mb-0"><sup>$</sup>1999</p> <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/vs.png" alt="" width="100%" /></li>
                                    <li>Discounted Price<span>50% OFF</span><p class="mb-0"><sup>$</sup>999</p></li>
                                </ul>
                                
                                <div class="seats-left-div mb-2">
                                    <div class="seeds-detailArea">
                                        <div class="seed-countArea">
                                            <span>
                                                <b>Hurry Up! Offer Ends Soon —</b>
                                                <span class="position-relative">
                                                    <span class="minus-oneCount">-1</span>
                                                    <span class="seed-count" style="font-weight: bolder;">Only 0<span class="first">5</span><span class="last">4</span></span>
                                                </span>
                                                <b href="#" id="seed-style-text" data-replace="Spots Left for Our Premium Package">
                                                    <span class="before">Spots Left!</span>
                                                    <span class="after color-primary" style="font-weight: inherit;">Spots Left!</span>
                                                </b>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="countDownArea">
                                    <div class="countdown">
                                        <div class="bloc-time hours" data-init-value="4">
                                          <span class="count-title">Hours</span>
                                    
                                          <div class="figure hours hours-1">
                                            <span class="top">2</span>
                                            <span class="top-back">
                                              <span>2</span>
                                            </span>
                                            <span class="bottom">2</span>
                                            <span class="bottom-back">
                                              <span>2</span>
                                            </span>
                                          </div>
                                    
                                          <div class="figure hours hours-2">
                                            <span class="top">4</span>
                                            <span class="top-back">
                                              <span>4</span>
                                            </span>
                                            <span class="bottom">4</span>
                                            <span class="bottom-back">
                                              <span>4</span>
                                            </span>
                                          </div>
                                        </div>
                                        
                                        <div class="bloc-time min" data-init-value="59">
                                          <span class="count-title">Minutes</span>
                                    
                                          <div class="figure min min-1">
                                            <span class="top">0</span>
                                            <span class="top-back">
                                              <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                              <span>0</span>
                                            </span>        
                                          </div>
                                    
                                          <div class="figure min min-2">
                                           <span class="top">0</span>
                                            <span class="top-back">
                                              <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                              <span>0</span>
                                            </span>
                                          </div>
                                        </div>
                                    
                                        <div class="bloc-time sec" data-init-value="59">
                                          <span class="count-title">Seconds</span>
                                    
                                            <div class="figure sec sec-1">
                                            <span class="top">0</span>
                                            <span class="top-back">
                                              <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                              <span>0</span>
                                            </span>          
                                          </div>
                                    
                                          <div class="figure sec sec-2">
                                            <span class="top">0</span>
                                            <span class="top-back">
                                              <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                              <span>0</span>
                                            </span>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                <!--<div class="seats-left-div">
                                    <div class="seeds-detailArea">
                                        <div class="seed-countArea">
                                            <span>
                                                <span class="seed-count">0<span class="first">5</span><span class="last">4</span></span>
                                                <a href="#" id="seed-style-text" data-replace="Spots Left for Our Premium Package"><span class="before"><b>Spots</b> Left for Our Premium Package </span> <span class="after"><b>Spots</b> Left for Our Premium Package </span></a>
                                            </span>
                                        </div>
                                        <span class="minus-oneCount">-1</span>
                                    </div>
                                </div>-->
                                
                                <!--<div class="seats-left-div">
                                    <div class="seeds-detailArea">
                                        <div class="seed-countArea">
                                            <span>
                                                <span class="seed-count">0<span class="first">5</span><span class="last">4</span></span>
                                                seeds left from 50
                                            </span>
                                        </div>
                                        <span class="minus-oneCount">-1</span>
                                    </div>
                                </div>-->
                                
                                <div class="link-area hScroller-linkArea mt-4">
                                    <a href="javascript:void(0);" class="primary offer-btn">Claim Your Discount Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-------------------------------- Pricing Section -------------------------------->
    <!--<section class="section-padding pt-0" id="pricing">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
                <h2>Affordable Web Design <span class="color-primary">Packages</span></h2>
                <p>Get premium web design at unbeatable prices. Our packages are designed to fit your budget while delivering top-tier, customised solutions to boost your online presence.</p>
            </div>
          </div>
          <div class="col-12">
              <div class="row rowGap2 pricing-row">
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Startup Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>189
                          <span class="old-price">$599</span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Startup Web Design') . '/' . 189 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                                <li>3 Page Website Design</li>
                                <li>3 Banner Design</li>
                                <li>5 Stock Photos</li>
                                <li>Up to 3 Revisions</li>
                                <li>48 to 72 hours TAT</li>
                                <li>100% Ownership Rights</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Unique Design Guarantee</li>
                                <li>100% Money Back Guarantee *</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Professional Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>399
                          <span class="old-price">$899 </span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Professional Website Design') . '/' . 399 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>6 Pages Website Design</li>
                            <li>8 Stock images</li>
                            <li>5 Banner Designs</li>
                            <li>Unlimited Revisions</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Business Pro Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>599
                          <span class="old-price">$1199</span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Business Pro Website Design') . '/' . 599 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>8-10 Page Website Design</li>
                            <li>Conceptual Website Design</li>
                            <li>Lead Capturing Forms Design</li>
                            <li>5 Stock Photos</li>
                              <li>Unlimited Revisions</li>
                            <li>6 Unique Banner Design</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Ecommerce Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>799
                          <span class="old-price">$1299 </span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Ecommerce Website Design') . '/' . 799 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>Upto 15 Unique Pages Website</li>
                            <li>Conceptual Website Design</li>
                            <li>Product Search Design</li>
                            <li>10 Products images design</li>
                            <li>Up to 5 Custom Made Banner Designs</li>
                            <li>10 Stock Images</li>
                            <li>Search Bar Design</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>Unlimited Revisions</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Pro Ecommerce Website Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>999
                          <span class="old-price">$1899 </span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Pro Ecommerce Website Design') . '/' . 999 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>Upto 15 Unique Pages Website</li>
                            <li>Conceptual Website Design</li>
                            <li>Product Search Design</li>
                            <li>20 Products images design</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>Unlimited Revisions</li>
                            <li>20 Stock Images</li>
                            <li>Signup Area (For Newsletters, Offers etc.) Design</li>
                            <li>Search Bar Design</li>
                            <li>Industry Specified Team of Expert Designers</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <div class="single-pricing">
                      <div class="pricing-head">
                        <h2>Business Ecom Web Design</h2>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/1.png" alt="" />
                      </div>
                      <div class="pricing-price">
                        <p>Best Value for Money Guaranteed!</p>
                        <h3>
                          <small>$</small>1199
                          <span class="old-price">$2199</span>
                          <span class="off">70% off</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Business Ecom Web Design') . '/' . 1199 . '/' . rawurlencode('Website Development') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                      <div class="pricing-body">
                        <button type="button">
                          <span>What's Include</span>
                          <i class="fa-solid fa-angles-down"></i>
                        </button>
                        <div class="pricing-body-details">
                          <h3>Package Features:</h3>
                          <ul>
                            <li>Unlimited Unique Pages Website</li>
                            <li>Conceptual Website Design</li>
                            <li>Product Search Design</li>
                            <li>20 Products images design</li>
                            <li>Up to 10 Custom Made Banner Designs</li>
                            <li>Unlimited Revisions</li>
                            <li>30 Stock Images</li>
                            <li>Signup Area (For Newsletters, Offers etc.) Design</li>
                            <li>Search Bar Design</li>
                            <li>Industry Specified Team of Expert Designers</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-padding gray-section gradient-circle rightCenter-gradient">
      <div class="container">
        <div class="row">
          <div class="col-12">
              
            <div class="single-big-pricing single-mega-pricing">
              <div class="row rowGap2">
            
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-12">
                
                      <div class="big-pricing-head">
                        <h2>Complete Branding Design Solution</h2>
                        <p>One Stop Design Solution For All Startup and Business. </p>
                      </div>
                    </div>
                    <div class="col-12 d-md-none">
                      <div class="pricing-price">
                        <h3>
                          <span class="off">70% off</span>
                        </h3>
                        <h3>
                          <small>$</small>1099
                          <span class="old-price">$2099</span>
                        </h3>
                        <div class="link-area">
                          <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Complete Branding Sol') . '/' . 1099 . '/' . rawurlencode('Logo Design') . '/USD' ?>" class="primary">
                            Start Your Project
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row pt-oneThird">
                    <div class="col-md-4">
                      <div class="pricing-body-details">
                        <h3 class="mt-0">Website Design</h3>
                        <ul>
                           <li>8-10 Page Website Design</li>
                            <li>Conceptual Website Design</li>
                            <li>Lead Capturing Forms Design</li>
                            <li>5 Stock Photos</li>
                            <li>6 Unique Banner Design</li>
                            <li>48 to 72 hours TAT</li>
                            <li>Facebook Page Design</li>
                            <li>Twitter Page Design</li>
                            <li>YouTube Page Design</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pricing-body-details">
                        <h3>Logo Design</h3>
                        <ul>
                          <li>Logo Design</li>
                          <li>Unlimited Logo Concepts</li>
                          <li>Unlimited Revisions</li>
                          <li>File Formats (PSD, PDF, A1, JPEG, PNG)</li>
                        </ul>
                        <h3>Stationary Design</h3>
                        <ul>
                          <li>Stationary</li>
                          <li>Custom Stationery Designs</li>
                          <li>
                            MS Word Letterhead (Letterhead, Envelope, Business
                            Card, Invoice)
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pricing-body-details">
                          <h3>Social Media</h3>
                            <ul>
                              <li>Social Media</li>
                              <li>Facebook Page Design</li>
                              <li>Twitter Page Design</li>
                              <li>YouTube Page Design</li>
                            </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-md-block d-none">
                  <div class="pricing-price">
                    <h3>
                      <span class="off">70% off</span>
                    </h3>
                    <h3>
                      <small>$</small>1099
                          <span class="old-price">$2099</span>
                    </h3>
                    <div class="link-area">
                      <a href="<?php echo 'https://websitedigitals.com/crm/payment/paynow/' . rawurlencode('Complete Branding Sol') . '/' . 1499 . '/' . rawurlencode('Logo Design') . '/USD' ?>" class="primary">
                        Start Your Project
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/pricing/mega-price-img-2.png"
                alt=""
                class="mega-price-img"
              />
            </div>
          </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-lg-12 col-sm-12">
                <div class="link-area">
                    <a href="#" class="primary offer-btn">Activate My 70% Off Coupon</a>
                </div>
            </div>
        </div>
      </div>
    </section>-->

    <!--<section class="scroller-section white-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="scroller-sticky pt-0 gradient-circle leftCenter-gradient">
              <div class="section-heading">
                <h2>Pioneering Web Agency Delivering Bespoke Solutions</h2>
              </div>
              <ul class="scroller-list mb-4">
                <li>
                  <a href="#web-firstScroller" class="active">
                    <span>01</span>
                    <p>Custom Web Design Solutions <span class="bluecolortext">To Boost Web Conversions</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-secondScroller">
                    <span>02</span>
                    <p>Successful Marketing Campaigns <span class="bluecolortext">To Accelerate Growth</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-thirdScroller">
                    <span>03</span>
                    <p>Personalized Branding Strategies <span class="bluecolortext">To Maximize Engagement</span></p>
                  </a>
                </li>
              </ul>
              
              <ul class="partnersUl display-none-mobile">
                  <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/3.webp" alt="" />
                  </li>
                    <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/1.webp" alt="" />
                  </li>
                  <li>
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/2.webp" alt="" />
                  </li>
              </ul>
              
            </div>
          </div>
          <div class="col-md-6 margin-top-mobile-20">
            <div class="scroller-item pt-0" id="web-firstScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/home/scroll1.webp?v=2" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>01</span>
                  </h3>
              <h3>Custom Web Design Solutions <span class="bluecolortext">To Boost Web Conversions</span></h3>
              </div>
              
              <ul class="scrollerpointsul">
                  <li>
                    <strong>User Experience (UX): <span>Navigate and Convert</span></strong>
                    <p>We create easy-to-use pathways that help visitors find what they need and encourage them to become loyal customers.</p>
                  </li>
                  <li>
                    <strong>Strategic CTA Placement: <span>Capture and Engage</span></strong>
                    <p>We place eye-catching call-to-action buttons where they have the most impact, encouraging visitors to interact and engage with your site.</p>
                  </li>
                  <li>
                    <strong>Mobile-First Design: <span>Seamless Everywhere</span></strong>
                    <p>Our designs ensure your website looks great and works well on all devices, from phones to tablets to desktops.</p>
                  </li>
                  <li>
                    <strong>Fast Load Times: <span>Speed Matters</span></strong>
                    <p>We make sure your site loads quickly to keep visitors interested and reduce the chances they leave.</p>
                  </li>
                  <li>
                    <strong>Clear Value Proposition: <span>Stand Out</span></strong>
                    <p>We clearly communicate your unique benefits to persuade visitors to choose you and build their loyalty.</p>
                  </li>
              </ul>
              <p class="postHeading">Ready to transform your online presence?</p>
              <div class="link-area">
                <a href="#" class="primary book-your-call">Get Started Today!</a>
              </div>
            </div>
            <div class="scroller-item" id="web-secondScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/home/3.png" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>02</span>
                  </h3>
              <h3>Successful Marketing Campaigns <span class="bluecolortext">To Accelerate Growth</span></h3>
              </div>
            
              <ul class="scrollerpointsul">
                  <li>
                    <strong>Targeted Segmentation: <span>Reach the Right Audience</span></strong>
                    <p>Focus on specific audience groups to engage the right people, boosting engagement and conversions.</p>
                  </li>
                  <li>
                    <strong>Data-Driven Decisions: <span>Optimize on the Fly</span></strong>
                    <p>Use data to make smart decisions and improve campaign performance, driving better results and maximizing returns.</p>
                  </li>
                  <li>
                    <strong>Compelling Content: <span>Inspire Action</span></strong>
                    <p>Create high-quality content that resonates with your audience and motivates them to take action.</p>
                  </li>
                  <li>
                    <strong>Multi-Channel Strategy: <span>Maximize Your Reach</span></strong>
                    <p>Use social media, email, and ads to increase exposure and ensure consistent messaging across all platforms.</p>
                  </li>
                  <li>
                    <strong>Performance Optimization: <span>Peak Results</span></strong>
                    <p>Keep refining strategies to stay ahead of trends and achieve best results.</p>
                  </li>
              </ul>
              
              <p class="postHeading">Ready to Transform Your Marketing?</p>
              <div class="link-area">
                <a href="#" class="primary book-your-call">Get Started Today!</a>
              </div>
            </div>
            <div class="scroller-item" id="web-thirdScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/home/scroll3.webp?v=1" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>03</span>
                  </h3>
              <h3>Personalized Branding Strategies <span class="bluecolortext">To Maximize User Engagement</span></h3>
              </div>
        
              <ul class="scrollerpointsul">
                  <li>
                    <strong>Unique Visual Identity: <span>Make Your Brand Stand Out</span></strong>
                    <p>We design unique logos and pick colors that make your business look special and easy to remember.</p>
                  </li>
                  <li>
                    <strong>Personalized Content: <span>Create Tailored Experiences</span></strong>
                    <p>We use data to create content that fits each person’s likes and interests, making it more engaging for them.</p>
                  </li>
                  <li>
                    <strong>Interactive Experiences: <span>Engage and Captivate</span></strong>
                    <p>We add fun elements like quizzes and personalized suggestions to keep your audience interested and involved.</p>
                  </li>
                  <li>
                    <strong>Consistent Voice: <span>Build Trust Across Channels</span></strong>
                    <p>We make sure your business sounds the same and trustworthy everywhere, helping to build strong relationships with your customers.</p>
                  </li>
                  <li>
                    <strong>Data-Driven Decisions: <span>Optimize on the Fly</span></strong>
                    <p>Use data to make smart decisions and improve ads performance, driving better results and maximizing returns.</p>
                  </li>
              </ul>
              
              <p class="postHeading">Ready to Transform Your Brand?</p>
              <div class="link-area">
                <a href="#" class="primary book-your-call">Let Us Help You Get Started Today!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

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
              <ul class="nav nav-tabs" id="outerTabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#cms-portfolio">
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
                  <a class="nav-link" data-bs-toggle="tab" href="#ecom-portfolio">
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
                  <a class="nav-link" data-bs-toggle="tab" href="#wordpress-portfolio">
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
                  <a class="nav-link" data-bs-toggle="tab" href="#portal-portfolio">
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
                  <a class="nav-link" data-bs-toggle="tab" href="#non-profit">
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
        <div class="tab-content web-portfolio-content" id="outerTabContent">
            
            <div class="tab-pane fade active show" id="cms-portfolio">
            <div class="row rowGap2">
                
              <!--1-->
              <div class="col-lg-4 col-md-6" data-index="7">
                  
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="1">
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
                        <h3>EnergyLand - Solar & Renewable Energy </h3>
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
                    <p id="dynamicContent">We revamped EnergyLand's website to focus on attracting B2B clients in the solar and renewable energy market. The new design emphasizes clear information, 
                        easy navigation, and optimized lead generation to drive business growth.</p>
                        
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
                        
                    <div class="detail">
                        <!--<p class="portfolio-para">We revamped EnergyLand's website to focus on attracting B2B clients in the solar and renewable energy market. The new design emphasizes clear information, 
                        easy navigation, and optimized lead generation to drive business growth.</p>-->
                        
                    <div class="portfolio-inner-tabs-div">
                        <div class="basic-tabs small-tabs">
                            <ul class="nav nav-tabs inner-tabs" id="myTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#goals1">Goals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#obstacles1">Obstacles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#results1">Results</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade active show" id="goals1">
                                    <ul class="horizontal-points goals-data">
                                        <li>Design a professional website tailored for B2B clients in the renewable energy sector.</li>
                                        <li>Enhance lead generation with an optimized layout and effective calls to action.</li>
                                        <li>Improve site navigation to provide a seamless and user-friendly experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles1">
                                    <ul class="horizontal-points obstacles-data">
                                        <li>The previous website lacked a B2B focus, targeting more general consumers.</li>
                                        <li>Outdated design and structure caused low engagement and poor conversions.</li>
                                        <li>Limited tools were available to capture and nurture business leads effectively.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results1">
                                    <ul class="horizontal-points results-data">
                                        <li>Launched a new B2B-focused website that highlighted EnergyLand’s expertise and services.</li>
                                        <li>Increased business leads through an improved design with clear calls to action.</li>
                                        <li>Boosted engagement and conversions with a user-friendly, seamless online experience.</li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                        
                        



                      <!--<h3>Energyland</h3>
                      <p>A forward-thinking renewable energy platform that provides innovative solutions in solar and wind energy. Energyland offers detailed project insights, customizable energy plans, and a user-friendly interface for seamless interaction. It integrates with smart home systems and includes a robust support network for consumers, ensuring an eco-friendly transition is both smooth and efficient.</p>
                    -->
                    
                    </div>
                    <div class="links d-none">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!--2-->
              <div class="col-lg-4 col-md-6" data-index="8">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="2">
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
                        <h3>Exclusive Aircraft</h3>
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
                    <p id="dynamicContent">We developed a brand-new website for Exclusive Aircraft to establish a powerful online presence in the private jet and aviation industry. The focus was on 
                        attracting B2B clients through an exclusive and professional online experience.</p>
                        
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2b/aircraft-before.png" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2b/aircraft-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                        
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" >
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals2">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles2">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results2">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals2">
                                    <ul class="horizontal-points">
                                        <li>Build a premium website tailored to high-end B2B clients in the aviation industry.</li>
                                        <li>Integrate lead generation tools to attract and convert premium aircraft service clients.</li>
                                        <li>Design a user-friendly experience to improve client engagement and navigation.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles2">
                                    <ul class="horizontal-points">
                                        <li>No previous website to showcase the luxury and exclusivity of the brand’s services.</li>
                                        <li>Limited resources to effectively capture and convert high-value business clients.</li>
                                        <li>The need for a clear structure to guide clients through the offered services seamlessly.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results2">
                                    <ul class="horizontal-points">
                                        <li>Launched a new, high-end website that communicates luxury to premium business clients.</li>
                                        <li>Implemented lead capture tools that significantly increased inquiries and client leads.</li>
                                        <li>Delivered a smooth, user-friendly experience that improved engagement and conversions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--3-->
              <div class="col-lg-4 col-md-6" data-index="9">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="3">
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
                        <h3>Simply Meals</h3>
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
                    <p id="dynamicContent">We created a new website for Simply Meals, focusing on delivering a smooth and engaging online experience for B2B clients in the food delivery and catering 
                        services industry. The website was designed to highlight their unique services and drive lead generation.</p>
                        
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2b/simple-meals/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2b/meal-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                        
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals3">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles3">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results3">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals3">
                                    <ul class="horizontal-points">
                                        <li>Build a modern website tailored for B2B clients in the food delivery industry.</li>
                                        <li>Integrate lead generation features to attract and convert high-value business clients.</li>
                                        <li>Improve the user experience to ensure smooth navigation and better engagement.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles3">
                                    <ul class="horizontal-points">
                                        <li>No prior website existed to showcase Simply Meals' unique food services to businesses.</li>
                                        <li>Limited tools for lead generation, making it difficult to capture potential clients.</li>
                                        <li>The need for an organized structure to present services clearly and professionally.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results3">
                                    <ul class="horizontal-points">
                                        <li>Successfully launched a modern B2B website that effectively showcases Simply Meals’ offerings.</li>
                                        <li>Integrated lead capture tools that significantly boosted client inquiries and conversions.</li>
                                        <li>Delivered a user-friendly website that improved engagement and streamlined navigation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--4-->
              <div class="col-lg-4 col-md-6" data-index="10">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="4">
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
                        <h3>The Griffin Law Firm</h3>
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
                    <p id="dynamicContent">We crafted a custom web solution for The Griffin Law Firm to establish a compelling digital presence. The project focused on enhancing client trust, 
                        simplifying service discovery, and building pathways to legal consultations.</p>
                        
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2b/the-griffin/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2b/griffin-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                        
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals4">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles4">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results4">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals4">
                                    <ul class="horizontal-points">
                                        <li>Develop a professional and secure website that instills trust in potential legal clients.</li>
                                        <li>Implement clear contact forms and appointment scheduling for easy client interaction.</li>
                                        <li>Ensure legal service information is easy to find, promoting client education and engagement.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles4">
                                    <ul class="horizontal-points">
                                        <li>The firm lacked a digital presence, making it difficult for clients to find and trust their services online.</li>
                                        <li>There was no effective way for clients to schedule consultations or access legal resources.</li>
                                        <li>Legal services were not clearly categorized, leading to confusion for potential clients.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results4">
                                    <ul class="horizontal-points">
                                        <li>Successfully launched a secure and trustworthy website that enhanced the firm’s credibility online.</li>
                                        <li>Integrated a simple and effective scheduling system that made booking consultations easier.</li>
                                        <li>Streamlined legal service categories, improving client understanding and access to information.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--5-->
              <div class="col-lg-4 col-md-6" data-index="11">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="5">
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
                        <h3>IHMP Health Management</h3>
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
                    <p id="dynamicContent">We created an intuitive and informative website for IHMP Health Management to better serve their clients in the healthcare sector. The project focused on 
                        enhancing service visibility, client engagement, and providing easy access to health management resources.</p>
                        
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2b/ihmp/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2b/ihmp-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>    
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals5">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles5">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results5">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals5">
                                    <ul class="horizontal-points">
                                        <li>Build an easy-to-navigate website to clearly showcase IHMP’s health management services.</li>
                                        <li>Develop resource pages that provide useful health information and engage clients.</li>
                                        <li>Ensure the website is mobile-responsive to cater to clients accessing services on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles5">
                                    <ul class="horizontal-points">
                                        <li>The lack of an online platform made it difficult for clients to find information about their services.</li>
                                        <li>No digital system existed for sharing health management resources with their clients.</li>
                                        <li>Ensuring the website was optimized for mobile use while maintaining a professional design.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results5">
                                    <ul class="horizontal-points">
                                        <li>Created a user-friendly website that showcased health management services clearly and effectively.</li>
                                        <li>Developed resource pages that provided valuable health content, increasing client engagement.</li>
                                        <li>Successfully launched a mobile-responsive website, improving access for clients on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--6-->
              <div class="col-lg-4 col-md-6" data-index="12">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="6">
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
                        <h3>Jobzilla - Web Design Project</h3>
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
                    <p id="dynamicContent">We developed a comprehensive website for Jobzilla, designed to streamline their recruitment services and improve their connection with job seekers and 
                        employers. The focus was on creating a functional platform that supports both recruitment and job search.</p>
                        
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2b/jobzilla/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2b/jobzilla-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>    
                        
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals6">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles6">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results6">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals6">
                                    <ul class="horizontal-points">
                                        <li>Build a streamlined platform for job seekers and employers to connect efficiently.</li>
                                        <li>Implement job listing features that allow easy filtering and application tracking.</li>
                                        <li>Ensure the website provides a seamless user experience for both desktop and mobile users.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles6">
                                    <ul class="horizontal-points">
                                        <li>The company had no digital platform to host job listings and manage applications.</li>
                                        <li>No system was in place to enable employers to post jobs and track applications efficiently.</li>
                                        <li>Designing a dual-user interface that caters to both job seekers and employers was challenging.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results6">
                                    <ul class="horizontal-points">
                                        <li>Launched a fully functional platform where job seekers and employers could connect easily.</li>
                                        <li>Integrated advanced job posting and application tracking features, enhancing user efficiency.</li>
                                        <li>Delivered a responsive, user-friendly experience that worked well across all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
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
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="7">
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
                        <h3>Ocean Grill</h3>
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
                    <p id="dynamicContent">We developed a visually appealing and engaging website for Ocean Grill, focusing on showcasing their fresh seafood offerings and unique dining 
                    experience. The project aimed to attract more customers by enhancing their online presence and simplifying reservations.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2c/ocean-grill/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2c/ocean-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals7">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles7">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results7">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals7">
                                    <ul class="horizontal-points">
                                        <li>Create an attractive website to showcase the restaurant’s fresh seafood menu and ambiance.</li>
                                        <li>Implement an online reservation system to simplify table bookings for customers.</li>
                                        <li>Ensure the website is mobile-friendly for customers browsing and booking on-the-go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles7">
                                    <ul class="horizontal-points">
                                        <li>The restaurant had no online presence to effectively showcase its menu or atmosphere.</li>
                                        <li>Lacked a streamlined booking system for customers to reserve tables easily.</li>
                                        <li>Needed a design that balanced visual appeal with functionality across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results7">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually engaging website that highlighted the fresh seafood menu and dining experience.</li>
                                        <li>Integrated an easy-to-use online reservation system, simplifying the booking process.</li>
                                        <li>Delivered a mobile-responsive website, ensuring a seamless experience for customers on all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--2-->
                <div class="col-lg-4 col-md-6" data-index="14">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="8">
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
                            <h3>Kingster University</h3>
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
                    <p id="dynamicContent">We built an educational platform for Kingster University that allows students and faculty to easily access information about courses, 
                    admissions, and university news. The website focuses on improving communication and accessibility for prospective and current students.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2c/kingster-university/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2c/kingster-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals8">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles8">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results8">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals8">
                                    <ul class="horizontal-points">
                                        <li>Develop an informative and user-friendly platform to provide details about courses and admissions.</li>
                                        <li>Implement a student portal for accessing academic information and university updates.</li>
                                        <li>Ensure the website is accessible on mobile devices to enhance user experience on all platforms.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles8">
                                    <ul class="horizontal-points">
                                        <li>The university had no comprehensive online platform to centralize course information and admissions details.</li>
                                        <li>There was no digital portal for students to access academic resources or updates.</li>
                                        <li>The challenge was ensuring the website remained easy to navigate while handling a large amount of content.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results8">
                                    <ul class="horizontal-points">
                                        <li>Successfully created a dynamic platform that streamlined access to course details, admissions, and university resources.</li>
                                        <li>Integrated a student portal, allowing students to easily access academic information and updates.</li>
                                        <li>Launched a mobile-friendly website that provided a seamless experience across various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--3-->
                <div class="col-lg-4 col-md-6" data-index="15">
                 <div class="single-webPortfolio caseStudyPopupTrigger" data-id="9">
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
                        <h3>Flamekast Estate & Builders</h3>
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
                    <p id="dynamicContent">We created a comprehensive website for Flamekast Estate & Builders, focusing on showcasing their construction projects and real estate 
                    services. The website was built to highlight their expertise and provide an easy way for clients to explore available properties and services.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2c/flamkast/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2c/flamekast-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals9">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles9">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results9">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals9">
                                    <ul class="horizontal-points">
                                        <li>Build a professional website to showcase Flamekast’s real estate and construction projects.</li>
                                        <li>Implement property listings and project galleries to engage potential clients and investors.</li>
                                        <li>Ensure the website is optimized for mobile access, providing a seamless browsing experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles9">
                                    <ul class="horizontal-points">
                                        <li>The company lacked a digital platform to display their portfolio of real estate and construction projects.</li>
                                        <li>There was no system for showcasing properties and ongoing projects to potential clients online.</li>
                                        <li>Designing a visually appealing yet functional site to accommodate property listings and project galleries.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results9">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually striking website that effectively showcased real estate and construction projects.</li>
                                        <li>Integrated a property listing system, making it easy for clients to browse and inquire about properties.</li>
                                        <li>Delivered a mobile-optimized platform that improved user engagement and access on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
                </div>
                <!--4-->
                <div class="col-lg-4 col-md-6" data-index="16">
                 <div class="single-webPortfolio caseStudyPopupTrigger" data-id="10">
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
                            <h3>Zen Crystals of NY</h3>
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
                    <p id="dynamicContent">We developed a visually appealing and functional website for Zen Crystals of NY, focusing on showcasing their crystal products and enhancing 
                    the online shopping experience. The project aimed to connect with wellness enthusiasts and drive online sales.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2c/zen-crystals/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2c/zen-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals10">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles10">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results10">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals10">
                                    <ul class="horizontal-points">
                                        <li>Create an aesthetically pleasing website to highlight the beauty of crystal products and their uses.</li>
                                        <li>Develop an e-commerce platform to facilitate seamless online purchases for customers.</li>
                                        <li>Ensure the website is optimized for mobile shopping to enhance user convenience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles10">
                                    <ul class="horizontal-points">
                                        <li>The brand had no existing online store to showcase its unique crystal products and accessories.</li>
                                        <li>There was no e-commerce system in place for handling orders, payments, or customer inquiries.</li>
                                        <li>Needed to balance visual appeal with functionality to ensure a smooth shopping experience across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results10">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually captivating website that effectively showcased crystal products and their benefits.</li>
                                        <li>Integrated a user-friendly e-commerce system that streamlined online sales and customer inquiries.</li>
                                        <li>Delivered a mobile-responsive platform, ensuring easy and convenient shopping for customers on the go.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
                </div>
                <!--5-->
                <div class="col-lg-4 col-md-6" data-index="17">
                 <div class="single-webPortfolio caseStudyPopupTrigger" data-id="11">
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
                            <h3>PawCare</h3>
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
                    <p id="dynamicContent">We created a comprehensive website for PawCare, aimed at promoting their pet care services and improving customer interaction. The site 
                    focuses on showcasing their expertise in pet care and providing a user-friendly way for customers to book appointments and access services.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2c/paw-care/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/b2c/paw-care/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals11">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles11">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results11">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals11">
                                    <ul class="horizontal-points">
                                        <li>Develop an engaging website that highlights PawCare’s wide range of pet care services.</li>
                                        <li>Implement an online booking system to streamline appointments for pet owners.</li>
                                        <li>Ensure the website is optimized for mobile devices to cater to customers on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles11">
                                    <ul class="horizontal-points">
                                        <li>The company had no online platform to promote their pet care services effectively.</li>
                                        <li>There was no system in place for scheduling pet care appointments digitally.</li>
                                        <li>Ensuring the design balanced informative content with easy navigation across devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results11">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually engaging website that effectively showcased PawCare’s services and expertise.</li>
                                        <li>Integrated a convenient booking system, making it easier for customers to schedule pet care appointments.</li>
                                        <li>Delivered a mobile-friendly site that ensured a seamless experience for customers on all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
                </div>
                <!--6-->
                <div class="col-lg-4 col-md-6" data-index="18">
                 <div class="single-webPortfolio caseStudyPopupTrigger" data-id="12">
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
                            <h3>Aspire Academy</h3>
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
                    <p id="dynamicContent">We developed a feature-rich website for Aspire Academy to provide students and parents with access to academic programs, enrollment 
                    information, and educational resources. The project focused on creating a platform that supports student engagement and academic growth.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2c/aspire-before.png" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/b2c/aspire-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals12">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles12">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results12">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals12">
                                    <ul class="horizontal-points">
                                        <li>Build an educational platform that clearly presents Aspire Academy’s academic programs and resources.</li>
                                        <li>Implement an online enrollment system to simplify the application process for new students.</li>
                                        <li>Ensure the website is mobile-responsive for easy access by students and parents on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles12">
                                    <ul class="horizontal-points">
                                        <li>The academy lacked an online presence to display its programs and communicate with students and parents.</li>
                                        <li>There was no system for handling online enrollment, making it difficult for prospective students to apply.</li>
                                        <li>The challenge was organizing large amounts of academic information in a clear, accessible way.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results12">
                                    <ul class="horizontal-points">
                                        <li>Launched a comprehensive website that effectively showcases academic programs and educational resources.</li>
                                        <li>Integrated an online enrollment system, streamlining the application process for new students.</li>
                                        <li>Delivered a mobile-friendly site, providing seamless access to the academy’s resources on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
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
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="13">
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
                        <h3>Pixio</h3>
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
                    <p id="dynamicContent">We created a fully functional e-commerce platform for Pixio, aimed at improving their online shopping experience and boosting sales. The 
                    project focused on delivering a user-friendly interface, product visibility, and streamlined shopping functionality for customers.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/ecommerce/pixio-before.png" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/ecommerce/pixio-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals13">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles13">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results13">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals13">
                                    <ul class="horizontal-points">
                                        <li>Build a user-friendly e-commerce platform to showcase Pixio’s wide range of products.</li>
                                        <li>Implement a secure payment system for seamless and safe transactions.</li>
                                        <li>Ensure the website is mobile-optimized to enhance the shopping experience for customers on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles13">
                                    <ul class="horizontal-points">
                                        <li>Pixio had no online store to sell their products, limiting their digital reach and potential sales.</li>
                                        <li>No system was in place for managing secure transactions or tracking customer orders.</li>
                                        <li>Designing an intuitive and visually appealing layout for the e-commerce site was a challenge.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results13">
                                    <ul class="horizontal-points">
                                        <li>Launched a responsive e-commerce platform that showcased Pixio’s product range clearly and attractively.</li>
                                        <li>Integrated a secure payment gateway, making transactions smooth and safe for customers.</li>
                                        <li>Delivered a mobile-friendly shopping experience, improving customer engagement and sales on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--2-->
              <div class="col-lg-4 col-md-6" data-index="2">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="14">
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
                        <h3>Sofee Cosmetics</h3>
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
                    <p id="dynamicContent">We developed a sleek and modern e-commerce platform for Sofee Cosmetics, aimed at enhancing their online presence and driving product sales. 
                    The focus was on creating an appealing online store that reflects their brand's identity and provides a seamless shopping experience.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/e-commerce/sofee/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/e-commerce/sofee/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals14">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles14">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results14">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals14">
                                    <ul class="horizontal-points">
                                        <li>Build a visually appealing e-commerce platform to highlight Sofee Cosmetics’ product line.</li>
                                        <li>Implement a smooth checkout process to ensure a hassle-free shopping experience for customers.</li>
                                        <li>Ensure the website is optimized for mobile devices to enhance accessibility and convenience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles14">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked a digital storefront to showcase their cosmetics products and drive online sales.</li>
                                        <li>No system was in place for managing customer orders or offering a seamless checkout experience.</li>
                                        <li>Designing a site that balanced aesthetics with functionality, ensuring both product appeal and usability.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results14">
                                    <ul class="horizontal-points">
                                        <li>Launched a stylish and responsive e-commerce platform that beautifully displayed Sofee’s product range.</li>
                                        <li>Integrated a user-friendly checkout system, making it easier for customers to complete purchases.</li>
                                        <li>Delivered a mobile-optimized platform that improved accessibility, increasing customer engagement and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--3-->
              <div class="col-lg-4 col-md-6" data-index="3">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="15">
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
                        <h3>Timetrek</h3>
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
                    <p id="dynamicContent">We created a functional and aesthetically pleasing e-commerce platform for Timetrek, a brand focused on selling high-quality timepieces. The 
                    project centered on delivering a smooth shopping experience while highlighting their collection of luxury watches.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/e-commerce/timetrk/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/e-commerce/timetrk/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals15">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles15">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results15">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals15">
                                    <ul class="horizontal-points">
                                        <li>Build a high-end e-commerce website to showcase Timetrek’s luxury watch collection.</li>
                                        <li>Implement a streamlined checkout process to make purchasing quick and easy for customers.</li>
                                        <li>Ensure the site is mobile-responsive to provide a seamless shopping experience across devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles15">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online presence to effectively display their timepieces and increase sales.</li>
                                        <li>No system existed for handling secure transactions or tracking customer purchases efficiently.</li>
                                        <li>The challenge was to design a site that balanced luxury aesthetics with user-friendly functionality.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results15">
                                    <ul class="horizontal-points">
                                        <li>Launched a sophisticated e-commerce platform that perfectly showcased Timetrek’s timepiece collection.</li>
                                        <li>Integrated a secure and easy-to-use checkout system that improved the overall shopping experience.</li>
                                        <li>Delivered a mobile-optimized site, increasing customer engagement and sales across multiple devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--4-->
              <div class="col-lg-4 col-md-6" data-index="4">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="16">
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
                        <h3>Flamekast</h3>
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
                    <p id="dynamicContent">We designed a modern e-commerce platform for Flamekast, specializing in luxury furniture. The project focused on creating a visually 
                    appealing website that offers seamless navigation for customers.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/e-commerce/flamekast/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/ecommerce/flamekast-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals16">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles16">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results16">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals16">
                                    <ul class="horizontal-points">
                                        <li>Create an elegant website to showcase Flamekast's luxury furniture collection.</li>
                                        <li>Implement a detailed product catalog to allow customers to explore and purchase furniture online.</li>
                                        <li>Ensure the platform is mobile-responsive for an improved user experience on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles16">
                                    <ul class="horizontal-points">
                                        <li>No online presence to showcase the wide range of Flamekast’s premium furniture.</li>
                                        <li>Lack of a proper system to manage online transactions and product inquiries.</li>
                                        <li>Designing a site that combined luxury appeal with easy navigation for online shopping.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results16">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually appealing e-commerce site that effectively displayed the furniture collection.</li>
                                        <li>Integrated a user-friendly product catalog and checkout process for smooth transactions.</li>
                                        <li>Delivered a mobile-responsive platform, increasing customer engagement and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--5-->
              <div class="col-lg-4 col-md-6" data-index="5">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="17">
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
                        <h3>Exotec Cars</h3>
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
                    <p id="dynamicContent">We built a robust e-commerce platform for Exotec Cars, allowing users to explore and purchase luxury car accessories. The project focused on 
                    creating a streamlined shopping experience that reflected the brand's premium nature.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/e-commerce/exotec-cars/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/ecommerce/cars-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                     
                        <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals17">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles17">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results17">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals17">
                                    <ul class="horizontal-points">
                                        <li>Create a sleek website that highlights Exotec’s range of luxury car accessories.</li>
                                        <li>Develop a smooth and secure checkout process to ensure customer satisfaction.</li>
                                        <li>Optimize the site for mobile devices to enhance the user experience on all platforms.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles17">
                                    <ul class="horizontal-points">
                                        <li>No digital storefront to showcase Exotec’s premium car accessories, limiting sales opportunities.</li>
                                        <li>No system in place to manage product listings or process transactions effectively.</li>
                                        <li>Balancing visual appeal with functionality to ensure a seamless shopping experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results17">
                                    <ul class="horizontal-points">
                                        <li>Launched a sleek e-commerce site that showcased Exotec’s luxury car accessories effectively.</li>
                                        <li>Integrated a secure checkout system, providing a smooth and reliable shopping experience.</li>
                                        <li>Delivered a mobile-optimized site, boosting user engagement and product sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                     
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--6-->
              <div class="col-lg-4 col-md-6" data-index="6">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="18">
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
                        <h3>Noxbe</h3>
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
                    <p id="dynamicContent">We developed a performance-driven e-commerce platform for Noxbe, specializing in outdoor and cycling gear. The project focused on creating a 
                    user-friendly website that enhances customer engagement and drives sales.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/e-commerce/nxobe/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/ecommerce/noxbe-after.png" alt="After" class="image image2">
                        </div>                   
                    </div>
                    
                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals18">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles18">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results18">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals18">
                                    <ul class="horizontal-points">
                                        <li>Build a functional and user-friendly website to promote Noxbe’s outdoor and cycling products.</li>
                                        <li>Implement an efficient product filtering system to help customers find the right products quickly.</li>
                                        <li>Ensure the platform is mobile-responsive for easy shopping across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles18">
                                    <ul class="horizontal-points">
                                        <li>No online store to display Noxbe’s wide range of cycling gear, reducing sales potential.</li>
                                        <li>No filtering system in place for customers to find specific products based on their preferences.</li>
                                        <li>Ensuring the site was optimized for both desktop and mobile users while maintaining functionality.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results18">
                                    <ul class="horizontal-points">
                                        <li>Created an intuitive e-commerce site that showcased Noxbe’s outdoor and cycling products effectively.</li>
                                        <li>Integrated a product filtering system, improving the shopping experience for customers.</li>
                                        <li>Delivered a mobile-responsive platform, resulting in increased traffic and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
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
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="19">
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
                        <h3>Pride Fitness and Nutrition</h3>
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
                    <p id="dynamicContent">We created a dynamic website for Pride Fitness and Nutrition, designed to enhance their online presence and promote fitness coaching and 
                    nutritional advice. The project focused on building a platform that connects with clients and delivers personalized services.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/pride-fitness/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/pride-fitness/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals19">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles19">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results19">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals19">
                                    <ul class="horizontal-points">
                                        <li>Build a website that showcases Pride’s fitness coaching and nutritional services.</li>
                                        <li>Integrate a booking system to allow clients to schedule fitness sessions easily.</li>
                                        <li>Ensure the platform is mobile-responsive to cater to users accessing it on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles19">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked a digital platform to promote fitness services and connect with clients effectively.</li>
                                        <li>No system existed for clients to schedule fitness or nutrition consultations online.</li>
                                        <li>Designing an engaging site that reflects the brand’s focus on fitness and wellness.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results19">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant website that effectively showcased Pride’s fitness and nutritional services.</li>
                                        <li>Integrated an easy-to-use booking system, improving client interaction and appointment scheduling.</li>
                                        <li>Delivered a mobile-optimized platform, increasing client engagement and session bookings.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--2-->
                <div class="col-lg-4 col-md-6" data-index="20">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="20">
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
                        <h3>AQuicki Skincare</h3>
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
                    <p id="dynamicContent">We developed a clean and elegant website for AQuicki Skincare to promote their skincare products and services. The project centered around 
                    building a visually appealing platform that enhances customer interaction and product discovery.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/aqucki/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/aqucki/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals20">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles20">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results20">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals20">
                                    <ul class="horizontal-points">
                                        <li>Create a visually stunning website to showcase AQuicki’s skincare products and treatments.</li>
                                        <li>Implement an e-commerce feature to allow customers to purchase skincare products online.</li>
                                        <li>Ensure the platform is optimized for mobile devices to cater to on-the-go customers.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles20">
                                    <ul class="horizontal-points">
                                        <li>The brand had no digital storefront to effectively display its skincare products and services.</li>
                                        <li>No system existed for processing online orders and managing customer inquiries.</li>
                                        <li>Designing a luxurious, yet functional website to appeal to skincare enthusiasts.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results20">
                                    <ul class="horizontal-points">
                                        <li>Launched a beautifully designed e-commerce site that effectively showcased AQuicki’s skincare line.</li>
                                        <li>Integrated a seamless checkout system, allowing customers to easily purchase products online.</li>
                                        <li>Delivered a mobile-friendly platform, improving customer engagement and boosting online sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--3-->
                <div class="col-lg-4 col-md-6" data-index="21">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="21">
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
                        <h3>Davalos Defense Law Firm</h3>
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
                    <p id="dynamicContent">We developed a professional website for Davalos Defense Law Firm to showcase their legal expertise and services. The project focused on 
                    building trust with potential clients and providing clear paths to schedule consultations.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/davalos/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/davalos/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals21">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles21">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results21">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals21">
                                    <ul class="horizontal-points">
                                        <li>Create a professional website that highlights the law firm’s legal services and areas of expertise.</li>
                                        <li>Implement a contact form for potential clients to easily request legal consultations.</li>
                                        <li>Ensure the site is mobile-responsive to provide a seamless experience for clients on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles21">
                                    <ul class="horizontal-points">
                                        <li>The firm lacked a digital platform to showcase its legal services and connect with potential clients.</li>
                                        <li>No system existed for clients to request consultations or legal assistance online.</li>
                                        <li>Designing a professional, informative site that reflects the firm's credibility and expertise.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results21">
                                    <ul class="horizontal-points">
                                        <li>Launched a professional and responsive website that effectively displayed the firm’s legal services.</li>
                                        <li>Integrated a contact form, improving client inquiries and consultation requests.</li>
                                        <li>Delivered a mobile-optimized platform, enhancing accessibility and client engagement.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--4-->
                <div class="col-lg-4 col-md-6" data-index="22">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="22">
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
                        <h3>Fassler Yoga & Wellness</h3>
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
                    <p id="dynamicContent">We designed a calming and intuitive website for Fassler Yoga & Wellness, focused on promoting yoga classes and wellness retreats. The project 
                    aimed at building a platform that connects with clients seeking physical and mental well-being.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/fassler/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/fassler/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals22">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles22">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results22">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals22">
                                    <ul class="horizontal-points">
                                        <li>Create a serene website to promote yoga classes, wellness programs, and retreats.</li>
                                        <li>Implement an easy booking system for clients to register for yoga classes and wellness events.</li>
                                        <li>Ensure the site is optimized for mobile devices to make it accessible for users on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles22">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online presence to promote its wellness services and engage with potential clients.</li>
                                        <li>No system existed for clients to book yoga sessions or wellness programs online.</li>
                                        <li>Designing a calming, wellness-focused site that maintained functionality for easy navigation.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results22">
                                    <ul class="horizontal-points">
                                        <li>Launched a serene and user-friendly website that showcased yoga and wellness services effectively.</li>
                                        <li>Integrated a booking system, allowing clients to easily sign up for classes and wellness events.</li>
                                        <li>Delivered a mobile-responsive platform, improving accessibility and increasing class bookings.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--5-->
                <div class="col-lg-4 col-md-6" data-index="23">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="23">
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
                        <h3>Michelle Wolski</h3>
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
                    <p id="dynamicContent">We built a vibrant and artistic website for Michelle Wolski, a creative therapy professional. The site was designed to reflect the therapeutic 
                    nature of art and attract clients interested in creative therapy services.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/therapy/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/therapy/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals23">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles23">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results23">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals23">
                                    <ul class="horizontal-points">
                                        <li>Build a vibrant and artistic website to showcase Michelle’s creative therapy services.</li>
                                        <li>Implement an appointment scheduling system to allow clients to book therapy sessions easily.</li>
                                        <li>Ensure the site is optimized for both desktop and mobile devices for a seamless experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles23">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked an online presence to promote creative therapy services and connect with potential clients.</li>
                                        <li>No system was in place for scheduling therapy sessions or consultations online.</li>
                                        <li>Designing a visually artistic yet functional site that reflected the creativity of the therapy practice.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results23">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant and creative website that effectively displayed therapy services and offerings.</li>
                                        <li>Integrated an easy-to-use scheduling system, simplifying client bookings for therapy sessions.</li>
                                        <li>Delivered a mobile-friendly site, enhancing user engagement and increasing session appointments.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--6-->
                <div class="col-lg-4 col-md-6" data-index="24">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="24">
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
                        <h3>Fahri Cosmetics</h3>
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
                    <p id="dynamicContent">We developed a stylish e-commerce platform for Fahri Cosmetics, focused on promoting beauty products and cosmetics. The project was centered 
                    around creating an appealing online store that captures the essence of the beauty industry.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/cosmetics/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/personal-brand/cosmetics/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals24">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles24">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results24">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals24">
                                    <ul class="horizontal-points">
                                        <li>Create a visually stunning website to showcase a variety of beauty and cosmetics products.</li>
                                        <li>Implement an e-commerce system to facilitate online sales and smooth checkout experiences.</li>
                                        <li>Ensure the platform is mobile-responsive for a seamless shopping experience on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles24">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online store to effectively display and sell its range of cosmetics products.</li>
                                        <li>No system existed for managing online orders, payments, or customer inquiries.</li>
                                        <li>Designing a visually appealing yet functional e-commerce site that attracts beauty enthusiasts.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results24">
                                    <ul class="horizontal-points">
                                        <li>Launched a stylish e-commerce platform that effectively showcased the cosmetics product line.</li>
                                        <li>Integrated a seamless checkout system, making it easy for customers to purchase products online.</li>
                                        <li>Delivered a mobile-optimized platform, boosting customer engagement and driving online sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
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
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="25">
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
                            <h3>Texas Legal Solutions</h3>
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
                    <p id="dynamicContent">We developed a professional and user-friendly website for Texas Legal Solutions, focused on promoting their legal aid services for underserved 
                    communities. The project aimed to increase accessibility to legal resources and allow individuals to seek help easily.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/texas-legal/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/texas-legal/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals25">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles25">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results25">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals25">
                                    <ul class="horizontal-points">
                                        <li>Create a professional website to promote legal services for low-income individuals and underserved communities.</li>
                                        <li>Implement an easy-to-navigate system to provide information on available legal aid services.</li>
                                        <li>Ensure the site is mobile-optimized to allow for easy access on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles25">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no online platform to reach underserved communities in need of legal assistance.</li>
                                        <li>No system existed to provide detailed information about legal aid services in a user-friendly format.</li>
                                        <li>Designing a professional and informative site while ensuring it was accessible across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results25">
                                    <ul class="horizontal-points">
                                        <li>Launched a professional and easy-to-use website that effectively promoted legal aid services.</li>
                                        <li>Integrated a clear navigation system, making it simple for individuals to find and access legal resources.</li>
                                        <li>Delivered a mobile-responsive platform, increasing accessibility for underserved communities.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--2-->
                <div class="col-lg-4 col-md-6" data-index="26">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="26">
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
                            <h3>Longevity CPR</h3>
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
                    <p id="dynamicContent">We built an engaging website for Longevity CPR, a non-profit focused on offering CPR and first aid training. The website was designed to help 
                    individuals find training programs, register for classes, and learn more about the importance of CPR.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/longevity-cpr/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/longevity-cpr/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals26">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles26">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results26">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals26">
                                    <ul class="horizontal-points">
                                        <li>Build an informative website to promote CPR and first aid training programs for the community.</li>
                                        <li>Implement an easy registration system for individuals to sign up for training sessions.</li>
                                        <li>Ensure the platform is mobile-responsive to allow users to access information and register on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles26">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no digital platform to promote CPR training programs or manage class registrations.</li>
                                        <li>No system existed for potential trainees to easily sign up for sessions or access resources.</li>
                                        <li>Balancing the need for an informative site while maintaining simplicity for ease of use.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results26">
                                    <ul class="horizontal-points">
                                        <li>Launched an engaging website that effectively promoted CPR training and first aid programs.</li>
                                        <li>Integrated a registration system, allowing users to easily sign up for training sessions online.</li>
                                        <li>Delivered a mobile-optimized site, increasing engagement and registrations for CPR programs.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--3-->
                <div class="col-lg-4 col-md-6" data-index="27">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="27">
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
                            <h3>Bucks County Charity Foundation</h3>
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
                    <p id="dynamicContent">We developed a heartwarming and impactful website for Bucks County Charity Foundation, focused on promoting their charitable efforts and 
                    increasing donations to support children and families in need.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/bucks-county/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/bucks-county/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals27">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles27">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results27">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals27">
                                    <ul class="horizontal-points">
                                        <li>Build a heartwarming website to showcase the foundation’s charitable initiatives and success stories.</li>
                                        <li>Implement an easy-to-use donation system to encourage contributions from supporters.</li>
                                        <li>Ensure the site is optimized for mobile access to make it convenient for users to donate and engage with the foundation.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles27">
                                    <ul class="horizontal-points">
                                        <li>The foundation lacked an online presence to promote its charitable work and encourage donations.</li>
                                        <li>No system existed for managing donations or providing information on how funds were being used.</li>
                                        <li>Designing an emotionally compelling yet functional site to appeal to potential donors and supporters.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results27">
                                    <ul class="horizontal-points">
                                        <li>Launched a heartwarming website that effectively showcased the foundation’s charitable work and initiatives.</li>
                                        <li>Integrated a donation system, making it easier for supporters to contribute and track the impact of their donations.</li>
                                        <li>Delivered a mobile-friendly platform, improving donor engagement and increasing contributions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--4-->
                <div class="col-lg-4 col-md-6" data-index="28">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="28">
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
                            <h3>Furrescue</h3>
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
                    <p id="dynamicContent">We developed a heartfelt and functional website for Furrescue, focused on promoting pet adoption and animal rescue initiatives. The project 
                    aimed to increase awareness of their cause and simplify the adoption process for potential pet owners.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/furrescue/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/furrescue/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals28">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles28">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results28">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals28">
                                    <ul class="horizontal-points">
                                        <li>Create a warm and engaging website to promote pet adoption and animal rescue services.</li>
                                        <li>Implement an easy-to-navigate adoption system to allow potential pet owners to find and adopt animals.</li>
                                        <li>Ensure the platform is optimized for mobile devices to reach a wider audience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles28">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no online presence to promote animal rescue efforts or manage the adoption process.</li>
                                        <li>No system existed for potential adopters to browse available animals or start the adoption process online.</li>
                                        <li>Designing an emotionally compelling yet functional site to encourage pet adoptions.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results28">
                                    <ul class="horizontal-points">
                                        <li>Launched an engaging and user-friendly website that effectively promoted pet adoption and rescue services.</li>
                                        <li>Integrated an adoption system, allowing potential pet owners to browse animals and start the adoption process online.</li>
                                        <li>Delivered a mobile-optimized platform, increasing awareness and adoption rates.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--5-->
                <div class="col-lg-4 col-md-6" data-index="29">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="29">
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
                            <h3>Eco Life</h3>
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
                    <p id="dynamicContent">We created a vibrant and informative website for Eco Life, a non-profit organization dedicated to promoting sustainable living and plant-based 
                    initiatives. The project focused on educating the public about eco-friendly practices and providing resources for a greener lifestyle.</p>
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/eco-life/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/eco-life/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals29">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles29">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results29">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals29">
                                    <ul class="horizontal-points">
                                        <li>Build an informative website to educate the public on sustainable living and eco-friendly practices.</li>
                                        <li>Implement a resource hub to provide guides and tips for adopting a more eco-conscious lifestyle.</li>
                                        <li>Ensure the site is mobile-responsive to make information easily accessible across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles29">
                                    <ul class="horizontal-points">
                                        <li>The organization lacked an online platform to educate the public and promote eco-friendly initiatives.</li>
                                        <li>No system was in place to provide educational resources or guide individuals on sustainable practices.</li>
                                        <li>Designing an engaging, content-rich site while ensuring ease of use and accessibility.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results29">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant and informative website that effectively promoted sustainable living practices.</li>
                                        <li>Integrated a resource hub, providing guides and tips for individuals looking to adopt an eco-conscious lifestyle.</li>
                                        <li>Delivered a mobile-friendly site, improving accessibility and increasing engagement with the cause.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
                <!--6-->
                <div class="col-lg-4 col-md-6" data-index="30">
                <div class="single-webPortfolio caseStudyPopupTrigger" data-id="30">
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
                        <h3>Elite News</h3>
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
                    <p id="dynamicContent">We developed a modern and functional news portal for Elite News, focused on delivering up-to-date information and articles on various topics. 
                    The project aimed to provide a seamless news browsing experience and increase readership.</p>
                    
                    
                    <div class="before-after-div">
                        <div class="before-div" id="image-before">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/elite-news/before.webp" alt="Before" class="image image1">
                            <p>Before</p>
                        </div>
                        <div class="after-div" id="image-after">
                            <p>After</p>
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-9/before-after/non-profit/elite-news/after.webp" alt="After" class="image image2">
                        </div>                   
                    </div>

                    <div class="detail">
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals30">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles30">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results30">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals30">
                                    <ul class="horizontal-points">
                                        <li>Create a modern news portal to deliver timely articles and information to the public.</li>
                                        <li>Implement a user-friendly navigation system to allow visitors to easily browse different news categories.</li>
                                        <li>Ensure the platform is optimized for mobile devices to enhance accessibility and reach.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles30">
                                    <ul class="horizontal-points">
                                        <li>The organization had no digital platform to distribute news articles or engage with readers.</li>
                                        <li>No system was in place for organizing and categorizing news content for easy access by users.</li>
                                        <li>Designing a content-rich site while maintaining a simple and intuitive user experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results30">
                                    <ul class="horizontal-points">
                                        <li>Launched a sleek news portal that effectively delivered timely articles and information to readers.</li>
                                        <li>Integrated an easy-to-navigate system, allowing users to browse various news categories with ease.</li>
                                        <li>Delivered a mobile-responsive platform, boosting readership and improving engagement with news content.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    </div>
                    <div class="links">
                      <a href="{{ env('WP_PATH') ?? '' }}/case-study/ekommart" class="launch"></a>
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
                  <div class="link-area mb-5">
                    <a href="javascript:void(0);" class="offer-btn primary">Schedule Your Free Consultation Now!</a>
                </div>
                <div class="portfolio-bottom-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                  <p><em>From Startups to Fortune 500 Companies: Trusted by Over 100 Clients with a 4.8/5 Rating!</em></p>
              </div>
          </div>
          <div class="row mt-4">
              <div class="col-lg-12 col-sm-12 text-center">
                  <div class="section-heading">
                      <h2>Trusted By <span class="color-primary">Us</span></h2>
                    </div>
              </div>
              <div class="col-lg-12 col-sm-12 mt-3">
                  <div class="owl-carousel owl-theme trusted-logos-one">
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/1.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/2.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/3.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/4.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/5.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/6.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/7.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/8.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/9.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/10.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/11.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/12.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/13.png" width="100%">
                        </div>
                        <div class="item">
                            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/14.png" width="100%">
                        </div>
                        <!--<div class="item">-->
                        <!--    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/15.png" width="100%">-->
                        <!--</div>-->
                        <!--<div class="item">-->
                        <!--    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/16.png" width="100%">-->
                        <!--</div>-->
                        <!--<div class="item">-->
                        <!--    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/logos/17.png" width="100%">-->
                        <!--</div>-->
                    </div>
              </div>
          </div>
      </div>
    </section>
    
    <!-------------------------- Scrolling Section ---------------------------->
    <section class="section-padding pt-0 pt-default-mob">
      <div class="container">
        <div class="getStartedCTA">
          <div class="row">
            <div class="col-md-7">
              <div class="section-heading">
                <h2>Everything You <span class="color-primary">Need</span> to <span class="color-primary">Grow</span></h2>
                <p>Take advantage of our complete web solution, packed with bonuses and backed by our satisfaction guarantee.</p>
              </div>
              <div class="link-area">
                <a href="#" class="offer-btn">Get Started Now - Schedule Your Free Consultation</a>
              </div>
            </div>
            <div class="col-md-5">
              <div class="ctaImageArea">
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/cta/getStarted/woman.webp" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    


@push('customScripts')


<style>
    .caseStudyPopup {
        max-width: none;
        padding: 0 1rem;
        height: 100vh;
        max-height: initial;
        width: 100%;
        border-radius: 0;
        display: flex;
    }
    
    .webPortfolio-caseStudyClose-btn {
        position: absolute;
        display: flex;
        top: 0;
        right: 0;
        justify-content: center;
        align-items: center;
        width: 3.5rem;
        height: 3.5rem;
        background: var(--text-color);
        color: #fff;
        font-size: 2rem;
        cursor: pointer;
    }
    
    .portfolio-inner-tabs-div .basic-tabs {
        margin-top: -3.5rem;
    }
    
    .portfolio-inner-tabs-div .nav-tabs > .nav-item > .nav-link {
        padding: 0.75rem 1.25rem;
    }
    
    .portfolio-inner-tabs-div .nav-tabs > .nav-item > .nav-link::before {
        height: 0.75rem;
    }
    
    .arrow-absolute {
        top: 15%;
        transform: translate(25%, -50%);
    }
</style>


    
<div class="popup-area caseStudyPopup caseStudyPopup-1">
    <div class="row webPortfolio-caseStudyArea">
      <div class="webPortfolio-caseStudyClose-btn">
        <i class="fa-solid fa-xmark"></i>
      </div>
      <div class="col-md-8">
        <div class="webPortfolio-caseStudyTabsArea">
          <div class="webPortfolio-caseStudyTabs">
            <ul class="nav nav-tabs">
              <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/website.webp" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage1.webp" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage2.webp" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage3.webp" alt="">
      </a>
    </li>
            </ul>
          </div>
          <div class="tab-content webPortfolio-caseStudy-content">
            <div class="tab-pane fade active show" id="website-caseStudy1">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/website.webp');"></div>
    </div><div class="tab-pane fade  " id="website-caseStudy2">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage1.webp');"></div>
    </div><div class="tab-pane fade  " id="website-caseStudy3">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage2.webp');"></div>
    </div><div class="tab-pane fade  " id="website-caseStudy4">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/innerpage3.webp');"></div>
    </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="webPortfolio-caseStudyDetailArea">
          <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/logo-energy.webp" alt="">
            <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We revamped EnergyLand's website to focus on attracting B2B clients in the solar and renewable energy market. The new design emphasizes clear information, 
                    easy navigation, and optimized lead generation to drive business growth.</p>
          <div class="webPortfolio-caseStudyDetail">
            
                    <!--<p class="portfolio-para">We revamped EnergyLand's website to focus on attracting B2B clients in the solar and renewable energy market. The new design emphasizes clear information, 
                    easy navigation, and optimized lead generation to drive business growth.</p>-->
                    
                <div class="portfolio-inner-tabs-div">
                    <div class="basic-tabs small-tabs">
                        <ul class="nav nav-tabs inner-tabs" id="myTabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#goals1">Goals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#obstacles1">Obstacles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#results1">Results</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content web-portfolio-content inner-tab-content">
                            <div class="tab-pane fade active show" id="goals1">
                                <ul class="horizontal-points goals-data">
                                    <li>Design a professional website tailored for B2B clients in the renewable energy sector.</li>
                                    <li>Enhance lead generation with an optimized layout and effective calls to action.</li>
                                    <li>Improve site navigation to provide a seamless and user-friendly experience.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="obstacles1">
                                <ul class="horizontal-points obstacles-data">
                                    <li>The previous website lacked a B2B focus, targeting more general consumers.</li>
                                    <li>Outdated design and structure caused low engagement and poor conversions.</li>
                                    <li>Limited tools were available to capture and nurture business leads effectively.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="results1">
                                <ul class="horizontal-points results-data">
                                    <li>Launched a new B2B-focused website that highlighted EnergyLand’s expertise and services.</li>
                                    <li>Increased business leads through an improved design with clear calls to action.</li>
                                    <li>Boosted engagement and conversions with a user-friendly, seamless online experience.</li>
                                </ul>
                            </div>
                        </div>
                </div>
                    
                    



                  <!--<h3>Energyland</h3>
                  <p>A forward-thinking renewable energy platform that provides innovative solutions in solar and wind energy. Energyland offers detailed project insights, customizable energy plans, and a user-friendly interface for seamless interaction. It integrates with smart home systems and includes a robust support network for consumers, ensuring an eco-friendly transition is both smooth and efficient.</p>
                -->
                
                  
            <div class="view-before-after-div">
                <!--<a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal" id="portfolioModalopen"></a>-->
              <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-2">
    <div class="row webPortfolio-caseStudyArea">
      <div class="webPortfolio-caseStudyClose-btn">
        <i class="fa-solid fa-xmark"></i>
      </div>
      <div class="col-md-8">
        <div class="webPortfolio-caseStudyTabsArea">
          <div class="webPortfolio-caseStudyTabs">
            <ul class="nav nav-tabs">
              <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/website.webp" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage1.webp" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage2.webp" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage3.webp" alt="">
      </a>
    </li>
            </ul>
          </div>
          <div class="tab-content webPortfolio-caseStudy-content">
            <div class="tab-pane fade active show" id="website-caseStudy1">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/website.webp');"></div>
    </div><div class="tab-pane fade  " id="website-caseStudy2">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage1.webp');"></div>
    </div><div class="tab-pane fade  " id="website-caseStudy3">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage2.webp');"></div>
    </div><div class="tab-pane fade  " id="website-caseStudy4">
      <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/innerpage3.webp');"></div>
    </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="webPortfolio-caseStudyDetailArea">
          <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/logo-flight.webp" alt="">
            <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a brand-new website for Exclusive Aircraft to establish a powerful online presence in the private jet and aviation industry. The focus was on 
                    attracting B2B clients through an exclusive and professional online experience.</p>
          <div class="webPortfolio-caseStudyDetail">
            
                  
                  <div class="portfolio-inner-tabs-div">
                        <div class="basic-tabs small-tabs">
                            <ul class="nav nav-tabs inner-tabs">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#goals2">Goals</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#obstacles2">Obstacles</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#results2">Results</a>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="tab-content web-portfolio-content inner-tab-content">
                            <div class="tab-pane fade show active" id="goals2">
                                <ul class="horizontal-points">
                                    <li>Build a premium website tailored to high-end B2B clients in the aviation industry.</li>
                                    <li>Integrate lead generation tools to attract and convert premium aircraft service clients.</li>
                                    <li>Design a user-friendly experience to improve client engagement and navigation.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="obstacles2">
                                <ul class="horizontal-points">
                                    <li>No previous website to showcase the luxury and exclusivity of the brand’s services.</li>
                                    <li>Limited resources to effectively capture and convert high-value business clients.</li>
                                    <li>The need for a clear structure to guide clients through the offered services seamlessly.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="results2">
                                <ul class="horizontal-points">
                                    <li>Launched a new, high-end website that communicates luxury to premium business clients.</li>
                                    <li>Implemented lead capture tools that significantly increased inquiries and client leads.</li>
                                    <li>Delivered a smooth, user-friendly experience that improved engagement and conversions.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                  
                  
            <div class="view-before-after-div">
              <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<div class="popup-area caseStudyPopup caseStudyPopup-3">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/logo-food.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a new website for Simply Meals, focusing on delivering a smooth and engaging online experience for B2B clients in the food delivery and catering 
                        services industry. The website was designed to highlight their unique services and drive lead generation.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals3">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles3">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results3">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals3">
                                    <ul class="horizontal-points">
                                        <li>Build a modern website tailored for B2B clients in the food delivery industry.</li>
                                        <li>Integrate lead generation features to attract and convert high-value business clients.</li>
                                        <li>Improve the user experience to ensure smooth navigation and better engagement.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles3">
                                    <ul class="horizontal-points">
                                        <li>No prior website existed to showcase Simply Meals' unique food services to businesses.</li>
                                        <li>Limited tools for lead generation, making it difficult to capture potential clients.</li>
                                        <li>The need for an organized structure to present services clearly and professionally.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results3">
                                    <ul class="horizontal-points">
                                        <li>Successfully launched a modern B2B website that effectively showcases Simply Meals’ offerings.</li>
                                        <li>Integrated lead capture tools that significantly boosted client inquiries and conversions.</li>
                                        <li>Delivered a user-friendly website that improved engagement and streamlined navigation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>


<div class="popup-area caseStudyPopup caseStudyPopup-4">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/logo-legal.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We crafted a custom web solution for The Griffin Law Firm to establish a compelling digital presence. The project focused on enhancing client trust, 
                        simplifying service discovery, and building pathways to legal consultations.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals4">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles4">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results4">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals4">
                                    <ul class="horizontal-points">
                                        <li>Develop a professional and secure website that instills trust in potential legal clients.</li>
                                        <li>Implement clear contact forms and appointment scheduling for easy client interaction.</li>
                                        <li>Ensure legal service information is easy to find, promoting client education and engagement.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles4">
                                    <ul class="horizontal-points">
                                        <li>The firm lacked a digital presence, making it difficult for clients to find and trust their services online.</li>
                                        <li>There was no effective way for clients to schedule consultations or access legal resources.</li>
                                        <li>Legal services were not clearly categorized, leading to confusion for potential clients.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results4">
                                    <ul class="horizontal-points">
                                        <li>Successfully launched a secure and trustworthy website that enhanced the firm’s credibility online.</li>
                                        <li>Integrated a simple and effective scheduling system that made booking consultations easier.</li>
                                        <li>Streamlined legal service categories, improving client understanding and access to information.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-5">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/logo-medical.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created an intuitive and informative website for IHMP Health Management to better serve their clients in the healthcare sector. The project focused on 
                        enhancing service visibility, client engagement, and providing easy access to health management resources.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals5">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles5">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results5">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals5">
                                    <ul class="horizontal-points">
                                        <li>Build an easy-to-navigate website to clearly showcase IHMP’s health management services.</li>
                                        <li>Develop resource pages that provide useful health information and engage clients.</li>
                                        <li>Ensure the website is mobile-responsive to cater to clients accessing services on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles5">
                                    <ul class="horizontal-points">
                                        <li>The lack of an online platform made it difficult for clients to find information about their services.</li>
                                        <li>No digital system existed for sharing health management resources with their clients.</li>
                                        <li>Ensuring the website was optimized for mobile use while maintaining a professional design.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results5">
                                    <ul class="horizontal-points">
                                        <li>Created a user-friendly website that showcased health management services clearly and effectively.</li>
                                        <li>Developed resource pages that provided valuable health content, increasing client engagement.</li>
                                        <li>Successfully launched a mobile-responsive website, improving access for clients on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-6">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/logos-03.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a comprehensive website for Jobzilla, designed to streamline their recruitment services and improve their connection with job seekers and 
                        employers. The focus was on creating a functional platform that supports both recruitment and job search.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals6">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles6">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results6">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals6">
                                    <ul class="horizontal-points">
                                        <li>Build a streamlined platform for job seekers and employers to connect efficiently.</li>
                                        <li>Implement job listing features that allow easy filtering and application tracking.</li>
                                        <li>Ensure the website provides a seamless user experience for both desktop and mobile users.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles6">
                                    <ul class="horizontal-points">
                                        <li>The company had no digital platform to host job listings and manage applications.</li>
                                        <li>No system was in place to enable employers to post jobs and track applications efficiently.</li>
                                        <li>Designing a dual-user interface that caters to both job seekers and employers was challenging.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results6">
                                    <ul class="horizontal-points">
                                        <li>Launched a fully functional platform where job seekers and employers could connect easily.</li>
                                        <li>Integrated advanced job posting and application tracking features, enhancing user efficiency.</li>
                                        <li>Delivered a responsive, user-friendly experience that worked well across all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-7">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/logo-restaurant.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a visually appealing and engaging website for Ocean Grill, focusing on showcasing their fresh seafood offerings and unique dining 
                    experience. The project aimed to attract more customers by enhancing their online presence and simplifying reservations.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals7">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles7">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results7">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals7">
                                    <ul class="horizontal-points">
                                        <li>Create an attractive website to showcase the restaurant’s fresh seafood menu and ambiance.</li>
                                        <li>Implement an online reservation system to simplify table bookings for customers.</li>
                                        <li>Ensure the website is mobile-friendly for customers browsing and booking on-the-go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles7">
                                    <ul class="horizontal-points">
                                        <li>The restaurant had no online presence to effectively showcase its menu or atmosphere.</li>
                                        <li>Lacked a streamlined booking system for customers to reserve tables easily.</li>
                                        <li>Needed a design that balanced visual appeal with functionality across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results7">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually engaging website that highlighted the fresh seafood menu and dining experience.</li>
                                        <li>Integrated an easy-to-use online reservation system, simplifying the booking process.</li>
                                        <li>Delivered a mobile-responsive website, ensuring a seamless experience for customers on all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-8">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/edu-logo.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built an educational platform for Kingster University that allows students and faculty to easily access information about courses, 
                    admissions, and university news. The website focuses on improving communication and accessibility for prospective and current students.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals8">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles8">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results8">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals8">
                                    <ul class="horizontal-points">
                                        <li>Develop an informative and user-friendly platform to provide details about courses and admissions.</li>
                                        <li>Implement a student portal for accessing academic information and university updates.</li>
                                        <li>Ensure the website is accessible on mobile devices to enhance user experience on all platforms.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles8">
                                    <ul class="horizontal-points">
                                        <li>The university had no comprehensive online platform to centralize course information and admissions details.</li>
                                        <li>There was no digital portal for students to access academic resources or updates.</li>
                                        <li>The challenge was ensuring the website remained easy to navigate while handling a large amount of content.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results8">
                                    <ul class="horizontal-points">
                                        <li>Successfully created a dynamic platform that streamlined access to course details, admissions, and university resources.</li>
                                        <li>Integrated a student portal, allowing students to easily access academic information and updates.</li>
                                        <li>Launched a mobile-friendly website that provided a seamless experience across various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-9">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo-04.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a comprehensive website for Flamekast Estate &amp; Builders, focusing on showcasing their construction projects and real estate 
                    services. The website was built to highlight their expertise and provide an easy way for clients to explore available properties and services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals9">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles9">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results9">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals9">
                                    <ul class="horizontal-points">
                                        <li>Build a professional website to showcase Flamekast’s real estate and construction projects.</li>
                                        <li>Implement property listings and project galleries to engage potential clients and investors.</li>
                                        <li>Ensure the website is optimized for mobile access, providing a seamless browsing experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles9">
                                    <ul class="horizontal-points">
                                        <li>The company lacked a digital platform to display their portfolio of real estate and construction projects.</li>
                                        <li>There was no system for showcasing properties and ongoing projects to potential clients online.</li>
                                        <li>Designing a visually appealing yet functional site to accommodate property listings and project galleries.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results9">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually striking website that effectively showcased real estate and construction projects.</li>
                                        <li>Integrated a property listing system, making it easy for clients to browse and inquire about properties.</li>
                                        <li>Delivered a mobile-optimized platform that improved user engagement and access on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-10">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/jewelery-logo.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a visually appealing and functional website for Zen Crystals of NY, focusing on showcasing their crystal products and enhancing 
                    the online shopping experience. The project aimed to connect with wellness enthusiasts and drive online sales.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals10">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles10">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results10">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals10">
                                    <ul class="horizontal-points">
                                        <li>Create an aesthetically pleasing website to highlight the beauty of crystal products and their uses.</li>
                                        <li>Develop an e-commerce platform to facilitate seamless online purchases for customers.</li>
                                        <li>Ensure the website is optimized for mobile shopping to enhance user convenience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles10">
                                    <ul class="horizontal-points">
                                        <li>The brand had no existing online store to showcase its unique crystal products and accessories.</li>
                                        <li>There was no e-commerce system in place for handling orders, payments, or customer inquiries.</li>
                                        <li>Needed to balance visual appeal with functionality to ensure a smooth shopping experience across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results10">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually captivating website that effectively showcased crystal products and their benefits.</li>
                                        <li>Integrated a user-friendly e-commerce system that streamlined online sales and customer inquiries.</li>
                                        <li>Delivered a mobile-responsive platform, ensuring easy and convenient shopping for customers on the go.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-11">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo-pet.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a comprehensive website for PawCare, aimed at promoting their pet care services and improving customer interaction. The site 
                    focuses on showcasing their expertise in pet care and providing a user-friendly way for customers to book appointments and access services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals11">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles11">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results11">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals11">
                                    <ul class="horizontal-points">
                                        <li>Develop an engaging website that highlights PawCare’s wide range of pet care services.</li>
                                        <li>Implement an online booking system to streamline appointments for pet owners.</li>
                                        <li>Ensure the website is optimized for mobile devices to cater to customers on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles11">
                                    <ul class="horizontal-points">
                                        <li>The company had no online platform to promote their pet care services effectively.</li>
                                        <li>There was no system in place for scheduling pet care appointments digitally.</li>
                                        <li>Ensuring the design balanced informative content with easy navigation across devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results11">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually engaging website that effectively showcased PawCare’s services and expertise.</li>
                                        <li>Integrated a convenient booking system, making it easier for customers to schedule pet care appointments.</li>
                                        <li>Delivered a mobile-friendly site that ensured a seamless experience for customers on all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-12">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/logo-education1.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a feature-rich website for Aspire Academy to provide students and parents with access to academic programs, enrollment 
                    information, and educational resources. The project focused on creating a platform that supports student engagement and academic growth.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals12">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles12">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results12">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals12">
                                    <ul class="horizontal-points">
                                        <li>Build an educational platform that clearly presents Aspire Academy’s academic programs and resources.</li>
                                        <li>Implement an online enrollment system to simplify the application process for new students.</li>
                                        <li>Ensure the website is mobile-responsive for easy access by students and parents on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles12">
                                    <ul class="horizontal-points">
                                        <li>The academy lacked an online presence to display its programs and communicate with students and parents.</li>
                                        <li>There was no system for handling online enrollment, making it difficult for prospective students to apply.</li>
                                        <li>The challenge was organizing large amounts of academic information in a clear, accessible way.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results12">
                                    <ul class="horizontal-points">
                                        <li>Launched a comprehensive website that effectively showcases academic programs and educational resources.</li>
                                        <li>Integrated an online enrollment system, streamlining the application process for new students.</li>
                                        <li>Delivered a mobile-friendly site, providing seamless access to the academy’s resources on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-13">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/logo-01.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a fully functional e-commerce platform for Pixio, aimed at improving their online shopping experience and boosting sales. The 
                    project focused on delivering a user-friendly interface, product visibility, and streamlined shopping functionality for customers.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals13">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles13">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results13">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals13">
                                    <ul class="horizontal-points">
                                        <li>Build a user-friendly e-commerce platform to showcase Pixio’s wide range of products.</li>
                                        <li>Implement a secure payment system for seamless and safe transactions.</li>
                                        <li>Ensure the website is mobile-optimized to enhance the shopping experience for customers on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles13">
                                    <ul class="horizontal-points">
                                        <li>Pixio had no online store to sell their products, limiting their digital reach and potential sales.</li>
                                        <li>No system was in place for managing secure transactions or tracking customer orders.</li>
                                        <li>Designing an intuitive and visually appealing layout for the e-commerce site was a challenge.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results13">
                                    <ul class="horizontal-points">
                                        <li>Launched a responsive e-commerce platform that showcased Pixio’s product range clearly and attractively.</li>
                                        <li>Integrated a secure payment gateway, making transactions smooth and safe for customers.</li>
                                        <li>Delivered a mobile-friendly shopping experience, improving customer engagement and sales on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-14">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/logo-04.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a sleek and modern e-commerce platform for Sofee Cosmetics, aimed at enhancing their online presence and driving product sales. 
                    The focus was on creating an appealing online store that reflects their brand's identity and provides a seamless shopping experience.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals14">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles14">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results14">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals14">
                                    <ul class="horizontal-points">
                                        <li>Build a visually appealing e-commerce platform to highlight Sofee Cosmetics’ product line.</li>
                                        <li>Implement a smooth checkout process to ensure a hassle-free shopping experience for customers.</li>
                                        <li>Ensure the website is optimized for mobile devices to enhance accessibility and convenience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles14">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked a digital storefront to showcase their cosmetics products and drive online sales.</li>
                                        <li>No system was in place for managing customer orders or offering a seamless checkout experience.</li>
                                        <li>Designing a site that balanced aesthetics with functionality, ensuring both product appeal and usability.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results14">
                                    <ul class="horizontal-points">
                                        <li>Launched a stylish and responsive e-commerce platform that beautifully displayed Sofee’s product range.</li>
                                        <li>Integrated a user-friendly checkout system, making it easier for customers to complete purchases.</li>
                                        <li>Delivered a mobile-optimized platform that improved accessibility, increasing customer engagement and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-15">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/logo-06.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a functional and aesthetically pleasing e-commerce platform for Timetrek, a brand focused on selling high-quality timepieces. The 
                    project centered on delivering a smooth shopping experience while highlighting their collection of luxury watches.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals15">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles15">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results15">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals15">
                                    <ul class="horizontal-points">
                                        <li>Build a high-end e-commerce website to showcase Timetrek’s luxury watch collection.</li>
                                        <li>Implement a streamlined checkout process to make purchasing quick and easy for customers.</li>
                                        <li>Ensure the site is mobile-responsive to provide a seamless shopping experience across devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles15">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online presence to effectively display their timepieces and increase sales.</li>
                                        <li>No system existed for handling secure transactions or tracking customer purchases efficiently.</li>
                                        <li>The challenge was to design a site that balanced luxury aesthetics with user-friendly functionality.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results15">
                                    <ul class="horizontal-points">
                                        <li>Launched a sophisticated e-commerce platform that perfectly showcased Timetrek’s timepiece collection.</li>
                                        <li>Integrated a secure and easy-to-use checkout system that improved the overall shopping experience.</li>
                                        <li>Delivered a mobile-optimized site, increasing customer engagement and sales across multiple devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-16">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/logo-02.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We designed a modern e-commerce platform for Flamekast, specializing in luxury furniture. The project focused on creating a visually 
                    appealing website that offers seamless navigation for customers.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals16">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles16">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results16">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals16">
                                    <ul class="horizontal-points">
                                        <li>Create an elegant website to showcase Flamekast's luxury furniture collection.</li>
                                        <li>Implement a detailed product catalog to allow customers to explore and purchase furniture online.</li>
                                        <li>Ensure the platform is mobile-responsive for an improved user experience on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles16">
                                    <ul class="horizontal-points">
                                        <li>No online presence to showcase the wide range of Flamekast’s premium furniture.</li>
                                        <li>Lack of a proper system to manage online transactions and product inquiries.</li>
                                        <li>Designing a site that combined luxury appeal with easy navigation for online shopping.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results16">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually appealing e-commerce site that effectively displayed the furniture collection.</li>
                                        <li>Integrated a user-friendly product catalog and checkout process for smooth transactions.</li>
                                        <li>Delivered a mobile-responsive platform, increasing customer engagement and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-17">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/logo-05.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built a robust e-commerce platform for Exotec Cars, allowing users to explore and purchase luxury car accessories. The project focused on 
                    creating a streamlined shopping experience that reflected the brand's premium nature.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                     
                        <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals17">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles17">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results17">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals17">
                                    <ul class="horizontal-points">
                                        <li>Create a sleek website that highlights Exotec’s range of luxury car accessories.</li>
                                        <li>Develop a smooth and secure checkout process to ensure customer satisfaction.</li>
                                        <li>Optimize the site for mobile devices to enhance the user experience on all platforms.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles17">
                                    <ul class="horizontal-points">
                                        <li>No digital storefront to showcase Exotec’s premium car accessories, limiting sales opportunities.</li>
                                        <li>No system in place to manage product listings or process transactions effectively.</li>
                                        <li>Balancing visual appeal with functionality to ensure a seamless shopping experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results17">
                                    <ul class="horizontal-points">
                                        <li>Launched a sleek e-commerce site that showcased Exotec’s luxury car accessories effectively.</li>
                                        <li>Integrated a secure checkout system, providing a smooth and reliable shopping experience.</li>
                                        <li>Delivered a mobile-optimized site, boosting user engagement and product sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                     
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-18">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/logo-03.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a performance-driven e-commerce platform for Noxbe, specializing in outdoor and cycling gear. The project focused on creating a 
                    user-friendly website that enhances customer engagement and drives sales.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals18">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles18">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results18">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals18">
                                    <ul class="horizontal-points">
                                        <li>Build a functional and user-friendly website to promote Noxbe’s outdoor and cycling products.</li>
                                        <li>Implement an efficient product filtering system to help customers find the right products quickly.</li>
                                        <li>Ensure the platform is mobile-responsive for easy shopping across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles18">
                                    <ul class="horizontal-points">
                                        <li>No online store to display Noxbe’s wide range of cycling gear, reducing sales potential.</li>
                                        <li>No filtering system in place for customers to find specific products based on their preferences.</li>
                                        <li>Ensuring the site was optimized for both desktop and mobile users while maintaining functionality.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results18">
                                    <ul class="horizontal-points">
                                        <li>Created an intuitive e-commerce site that showcased Noxbe’s outdoor and cycling products effectively.</li>
                                        <li>Integrated a product filtering system, improving the shopping experience for customers.</li>
                                        <li>Delivered a mobile-responsive platform, resulting in increased traffic and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-19">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/logo-fitness.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a dynamic website for Pride Fitness and Nutrition, designed to enhance their online presence and promote fitness coaching and 
                    nutritional advice. The project focused on building a platform that connects with clients and delivers personalized services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals19">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles19">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results19">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals19">
                                    <ul class="horizontal-points">
                                        <li>Build a website that showcases Pride’s fitness coaching and nutritional services.</li>
                                        <li>Integrate a booking system to allow clients to schedule fitness sessions easily.</li>
                                        <li>Ensure the platform is mobile-responsive to cater to users accessing it on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles19">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked a digital platform to promote fitness services and connect with clients effectively.</li>
                                        <li>No system existed for clients to schedule fitness or nutrition consultations online.</li>
                                        <li>Designing an engaging site that reflects the brand’s focus on fitness and wellness.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results19">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant website that effectively showcased Pride’s fitness and nutritional services.</li>
                                        <li>Integrated an easy-to-use booking system, improving client interaction and appointment scheduling.</li>
                                        <li>Delivered a mobile-optimized platform, increasing client engagement and session bookings.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-20">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/logo-massage.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a clean and elegant website for AQuicki Skincare to promote their skincare products and services. The project centered around 
                    building a visually appealing platform that enhances customer interaction and product discovery.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals20">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles20">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results20">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals20">
                                    <ul class="horizontal-points">
                                        <li>Create a visually stunning website to showcase AQuicki’s skincare products and treatments.</li>
                                        <li>Implement an e-commerce feature to allow customers to purchase skincare products online.</li>
                                        <li>Ensure the platform is optimized for mobile devices to cater to on-the-go customers.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles20">
                                    <ul class="horizontal-points">
                                        <li>The brand had no digital storefront to effectively display its skincare products and services.</li>
                                        <li>No system existed for processing online orders and managing customer inquiries.</li>
                                        <li>Designing a luxurious, yet functional website to appeal to skincare enthusiasts.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results20">
                                    <ul class="horizontal-points">
                                        <li>Launched a beautifully designed e-commerce site that effectively showcased AQuicki’s skincare line.</li>
                                        <li>Integrated a seamless checkout system, allowing customers to easily purchase products online.</li>
                                        <li>Delivered a mobile-friendly platform, improving customer engagement and boosting online sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-21">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/3/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/logo-law.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a professional website for Davalos Defense Law Firm to showcase their legal expertise and services. The project focused on 
                    building trust with potential clients and providing clear paths to schedule consultations.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals21">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles21">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results21">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals21">
                                    <ul class="horizontal-points">
                                        <li>Create a professional website that highlights the law firm’s legal services and areas of expertise.</li>
                                        <li>Implement a contact form for potential clients to easily request legal consultations.</li>
                                        <li>Ensure the site is mobile-responsive to provide a seamless experience for clients on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles21">
                                    <ul class="horizontal-points">
                                        <li>The firm lacked a digital platform to showcase its legal services and connect with potential clients.</li>
                                        <li>No system existed for clients to request consultations or legal assistance online.</li>
                                        <li>Designing a professional, informative site that reflects the firm's credibility and expertise.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results21">
                                    <ul class="horizontal-points">
                                        <li>Launched a professional and responsive website that effectively displayed the firm’s legal services.</li>
                                        <li>Integrated a contact form, improving client inquiries and consultation requests.</li>
                                        <li>Delivered a mobile-optimized platform, enhancing accessibility and client engagement.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-22">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/4/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/2/logo-yoga.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We designed a calming and intuitive website for Fassler Yoga &amp; Wellness, focused on promoting yoga classes and wellness retreats. The project 
                    aimed at building a platform that connects with clients seeking physical and mental well-being.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals22">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles22">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results22">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals22">
                                    <ul class="horizontal-points">
                                        <li>Create a serene website to promote yoga classes, wellness programs, and retreats.</li>
                                        <li>Implement an easy booking system for clients to register for yoga classes and wellness events.</li>
                                        <li>Ensure the site is optimized for mobile devices to make it accessible for users on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles22">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online presence to promote its wellness services and engage with potential clients.</li>
                                        <li>No system existed for clients to book yoga sessions or wellness programs online.</li>
                                        <li>Designing a calming, wellness-focused site that maintained functionality for easy navigation.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results22">
                                    <ul class="horizontal-points">
                                        <li>Launched a serene and user-friendly website that showcased yoga and wellness services effectively.</li>
                                        <li>Integrated a booking system, allowing clients to easily sign up for classes and wellness events.</li>
                                        <li>Delivered a mobile-responsive platform, improving accessibility and increasing class bookings.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-23">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/5/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/1/logo-art.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built a vibrant and artistic website for Michelle Wolski, a creative therapy professional. The site was designed to reflect the therapeutic 
                    nature of art and attract clients interested in creative therapy services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals23">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles23">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results23">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals23">
                                    <ul class="horizontal-points">
                                        <li>Build a vibrant and artistic website to showcase Michelle’s creative therapy services.</li>
                                        <li>Implement an appointment scheduling system to allow clients to book therapy sessions easily.</li>
                                        <li>Ensure the site is optimized for both desktop and mobile devices for a seamless experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles23">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked an online presence to promote creative therapy services and connect with potential clients.</li>
                                        <li>No system was in place for scheduling therapy sessions or consultations online.</li>
                                        <li>Designing a visually artistic yet functional site that reflected the creativity of the therapy practice.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results23">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant and creative website that effectively displayed therapy services and offerings.</li>
                                        <li>Integrated an easy-to-use scheduling system, simplifying client bookings for therapy sessions.</li>
                                        <li>Delivered a mobile-friendly site, enhancing user engagement and increasing session appointments.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-24">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/personal-brand/6/logo-cosmetics.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a stylish e-commerce platform for Fahri Cosmetics, focused on promoting beauty products and cosmetics. The project was centered 
                    around creating an appealing online store that captures the essence of the beauty industry.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals24">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles24">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results24">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals24">
                                    <ul class="horizontal-points">
                                        <li>Create a visually stunning website to showcase a variety of beauty and cosmetics products.</li>
                                        <li>Implement an e-commerce system to facilitate online sales and smooth checkout experiences.</li>
                                        <li>Ensure the platform is mobile-responsive for a seamless shopping experience on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles24">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online store to effectively display and sell its range of cosmetics products.</li>
                                        <li>No system existed for managing online orders, payments, or customer inquiries.</li>
                                        <li>Designing a visually appealing yet functional e-commerce site that attracts beauty enthusiasts.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results24">
                                    <ul class="horizontal-points">
                                        <li>Launched a stylish e-commerce platform that effectively showcased the cosmetics product line.</li>
                                        <li>Integrated a seamless checkout system, making it easy for customers to purchase products online.</li>
                                        <li>Delivered a mobile-optimized platform, boosting customer engagement and driving online sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-25">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/1/logo-legal.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a professional and user-friendly website for Texas Legal Solutions, focused on promoting their legal aid services for underserved 
                    communities. The project aimed to increase accessibility to legal resources and allow individuals to seek help easily.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals25">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles25">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results25">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals25">
                                    <ul class="horizontal-points">
                                        <li>Create a professional website to promote legal services for low-income individuals and underserved communities.</li>
                                        <li>Implement an easy-to-navigate system to provide information on available legal aid services.</li>
                                        <li>Ensure the site is mobile-optimized to allow for easy access on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles25">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no online platform to reach underserved communities in need of legal assistance.</li>
                                        <li>No system existed to provide detailed information about legal aid services in a user-friendly format.</li>
                                        <li>Designing a professional and informative site while ensuring it was accessible across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results25">
                                    <ul class="horizontal-points">
                                        <li>Launched a professional and easy-to-use website that effectively promoted legal aid services.</li>
                                        <li>Integrated a clear navigation system, making it simple for individuals to find and access legal resources.</li>
                                        <li>Delivered a mobile-responsive platform, increasing accessibility for underserved communities.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-26">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/2/logo-medical.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built an engaging website for Longevity CPR, a non-profit focused on offering CPR and first aid training. The website was designed to help 
                    individuals find training programs, register for classes, and learn more about the importance of CPR.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals26">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles26">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results26">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals26">
                                    <ul class="horizontal-points">
                                        <li>Build an informative website to promote CPR and first aid training programs for the community.</li>
                                        <li>Implement an easy registration system for individuals to sign up for training sessions.</li>
                                        <li>Ensure the platform is mobile-responsive to allow users to access information and register on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles26">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no digital platform to promote CPR training programs or manage class registrations.</li>
                                        <li>No system existed for potential trainees to easily sign up for sessions or access resources.</li>
                                        <li>Balancing the need for an informative site while maintaining simplicity for ease of use.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results26">
                                    <ul class="horizontal-points">
                                        <li>Launched an engaging website that effectively promoted CPR training and first aid programs.</li>
                                        <li>Integrated a registration system, allowing users to easily sign up for training sessions online.</li>
                                        <li>Delivered a mobile-optimized site, increasing engagement and registrations for CPR programs.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-27">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/3/logo-nonprofit.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a heartwarming and impactful website for Bucks County Charity Foundation, focused on promoting their charitable efforts and 
                    increasing donations to support children and families in need.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals27">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles27">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results27">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals27">
                                    <ul class="horizontal-points">
                                        <li>Build a heartwarming website to showcase the foundation’s charitable initiatives and success stories.</li>
                                        <li>Implement an easy-to-use donation system to encourage contributions from supporters.</li>
                                        <li>Ensure the site is optimized for mobile access to make it convenient for users to donate and engage with the foundation.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles27">
                                    <ul class="horizontal-points">
                                        <li>The foundation lacked an online presence to promote its charitable work and encourage donations.</li>
                                        <li>No system existed for managing donations or providing information on how funds were being used.</li>
                                        <li>Designing an emotionally compelling yet functional site to appeal to potential donors and supporters.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results27">
                                    <ul class="horizontal-points">
                                        <li>Launched a heartwarming website that effectively showcased the foundation’s charitable work and initiatives.</li>
                                        <li>Integrated a donation system, making it easier for supporters to contribute and track the impact of their donations.</li>
                                        <li>Delivered a mobile-friendly platform, improving donor engagement and increasing contributions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-28">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/4/logo-pet.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a heartfelt and functional website for Furrescue, focused on promoting pet adoption and animal rescue initiatives. The project 
                    aimed to increase awareness of their cause and simplify the adoption process for potential pet owners.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals28">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles28">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results28">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals28">
                                    <ul class="horizontal-points">
                                        <li>Create a warm and engaging website to promote pet adoption and animal rescue services.</li>
                                        <li>Implement an easy-to-navigate adoption system to allow potential pet owners to find and adopt animals.</li>
                                        <li>Ensure the platform is optimized for mobile devices to reach a wider audience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles28">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no online presence to promote animal rescue efforts or manage the adoption process.</li>
                                        <li>No system existed for potential adopters to browse available animals or start the adoption process online.</li>
                                        <li>Designing an emotionally compelling yet functional site to encourage pet adoptions.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results28">
                                    <ul class="horizontal-points">
                                        <li>Launched an engaging and user-friendly website that effectively promoted pet adoption and rescue services.</li>
                                        <li>Integrated an adoption system, allowing potential pet owners to browse animals and start the adoption process online.</li>
                                        <li>Delivered a mobile-optimized platform, increasing awareness and adoption rates.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-29">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/5/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/logo-01.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a vibrant and informative website for Eco Life, a non-profit organization dedicated to promoting sustainable living and plant-based 
                    initiatives. The project focused on educating the public about eco-friendly practices and providing resources for a greener lifestyle.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals29">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles29">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results29">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals29">
                                    <ul class="horizontal-points">
                                        <li>Build an informative website to educate the public on sustainable living and eco-friendly practices.</li>
                                        <li>Implement a resource hub to provide guides and tips for adopting a more eco-conscious lifestyle.</li>
                                        <li>Ensure the site is mobile-responsive to make information easily accessible across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles29">
                                    <ul class="horizontal-points">
                                        <li>The organization lacked an online platform to educate the public and promote eco-friendly initiatives.</li>
                                        <li>No system was in place to provide educational resources or guide individuals on sustainable practices.</li>
                                        <li>Designing an engaging, content-rich site while ensuring ease of use and accessibility.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results29">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant and informative website that effectively promoted sustainable living practices.</li>
                                        <li>Integrated a resource hub, providing guides and tips for individuals looking to adopt an eco-conscious lifestyle.</li>
                                        <li>Delivered a mobile-friendly site, improving accessibility and increasing engagement with the cause.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-30">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/website.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage1.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage2.webp" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage3.webp" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/website.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage1.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage2.webp');"></div>
        </div><div class="tab-pane fade  " id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/non-profit/6/innerpage3.webp');"></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/logos-01.webp" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a modern and functional news portal for Elite News, focused on delivering up-to-date information and articles on various topics. 
                    The project aimed to provide a seamless news browsing experience and increase readership.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals30">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles30">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results30">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals30">
                                    <ul class="horizontal-points">
                                        <li>Create a modern news portal to deliver timely articles and information to the public.</li>
                                        <li>Implement a user-friendly navigation system to allow visitors to easily browse different news categories.</li>
                                        <li>Ensure the platform is optimized for mobile devices to enhance accessibility and reach.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles30">
                                    <ul class="horizontal-points">
                                        <li>The organization had no digital platform to distribute news articles or engage with readers.</li>
                                        <li>No system was in place for organizing and categorizing news content for easy access by users.</li>
                                        <li>Designing a content-rich site while maintaining a simple and intuitive user experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results30">
                                    <ul class="horizontal-points">
                                        <li>Launched a sleek news portal that effectively delivered timely articles and information to readers.</li>
                                        <li>Integrated an easy-to-navigate system, allowing users to browse various news categories with ease.</li>
                                        <li>Delivered a mobile-responsive platform, boosting readership and improving engagement with news content.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>


<div class="popup-bg beforeAfterPopupBg"></div>
<div class="popup-area beforeAfterPopup" id="portfolioModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="row">
          <div class="col-lg-5 col-sm-12 my-auto position-relative">
            <div class="section-heading">
              <h2>Revitalize Your Website Design</h2>
              <p>Compare the before and after to see how a fresh design boosts your sites performance.</p>
            </div>
            <img class="arrow-absolute" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%" alt="Arrow">
          </div>
          <div class="col-lg-7 col-sm-12">
            <div class="before-after-div">
              
            <div class="before-div" id="image-before">
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/before.png" alt="Before" class="image image1" loading="lazy">
                <p>Before</p>
            </div>
            <div class="after-div" id="image-after">
                <p>After</p>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/wd-5/after.png" alt="After" class="image image2" loading="lazy">
            </div>                   
        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    /*jQuery(document).ready(function() {
        // Base price and discount
        const basePrice = 499;

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

            jQuery('.link-area a').attr('href', newHref);
        }

        // Initial update on page load
        updatePricing();

        // Update pricing when an add-on is checked or unchecked
        jQuery('.form-check-input').on('change', function() {
            updatePricing();
        });
    });*/
    
</script>


<script>
    /*document.addEventListener("DOMContentLoaded", (event) => {
    
        let smootherInitialized = false;
    
        var workflowSectionContainer = document.querySelector('#horizontal-scrollAreaContainer');
        var workflowSection = document.querySelector('#horizontal-scrollArea');
    
        gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
    
        let clamp = gsap.utils.clamp(-15, 15);
    
        if (workflowSection && workflowSectionContainer) {
            const headerHeight = document.querySelector(".header").offsetHeight;
            const scrollItems = document.querySelectorAll(".horizontal-scrollerItem");
            const itemCount = scrollItems.length;
    
            const updateStyles = () => {
                const windowWidth = window.innerWidth;
                
                const isMobile = windowWidth < 700;
    
                if (isMobile) {
                    workflowSection.style.width = '';
                    workflowSection.style.transform = '';
                    workflowSectionContainer.style.height = '';
                    ScrollTrigger.getAll().forEach(trigger => trigger.kill());
                    console.log('Mobile detected:', windowWidth);
                    return;
                }
    
                const totalWidth = itemCount * windowWidth;
                const adjustedHeight = totalWidth + window.innerHeight - windowWidth;
    
                workflowSection.style.width = `${totalWidth}px`;
    
                ScrollTrigger.create({
                    trigger: workflowSectionContainer,
                    start: `top ${headerHeight}px`,
                    // start: "top top",
                    end: `+=${totalWidth}`,
                    pin: workflowSectionContainer,
                    scrub: 5,
                    onUpdate: (self) => {
                        const scrollY = self.progress * (totalWidth - windowWidth);
                        workflowSection.style.transform = `translateX(-${scrollY}px)`;
                    }
                });
                
                if (!smootherInitialized) { 
                    const smoother = ScrollSmoother.create({
                        wrapper: "#smoothScrollArea",
                        content: "#smoothScrollContent",
                        smooth: 2.5,
                        effects: window.innerWidth < 1025 ? false : true,
                        smoothTouch: 0.1,
                        normalizeScroll: true,
                        ignoreMobileResize: true,
                        onUpdate: self => {
                            if (!smootherInitialized) {
                                smootherInitialized = true;
                                document.querySelector("#smoothScrollArea").classList.add("loaded");
                            }
                        },
                    });
                }
            };
            
            const updateItemStyles = () => {
                const firstItem = scrollItems[0];
                const firstItemTop = firstItem.getBoundingClientRect().top;
                const screenMidPoint = window.innerHeight / 1.25;
            
                if (firstItemTop <= screenMidPoint) {
                    firstItem.classList.add("animate");
                }
            
                const screenMidWidthPoint = window.innerWidth / 2;
    
                scrollItems.forEach((item, index) => {
                    const itemLeft = item.getBoundingClientRect().left;
            
                    if (itemLeft <= screenMidWidthPoint) {
                        const counters = item.querySelectorAll(".counter");
            
                        counters.forEach(counter => {
                            const targetValue = parseInt(counter.getAttribute("data-value"), 10);
                            const currentValue = parseInt(counter.innerHTML, 10) || 0;
            
                            if (!counter.classList.contains("counting")) {
                                counter.classList.add("counting");
            
                                countUp(counter, currentValue, targetValue);
                            }
                        });
                    }
                });
            };
    
    
            const countUp = (element, start, end) => {
                let obj = { value: start };
                const duration = Math.min(Math.max(Math.abs(end - start) / 50, 1), 1.5);
            
                gsap.to(obj, {
                    value: end,
                    duration: duration,
                    ease: "power1.out",
                    onUpdate: () => {
                        element.innerHTML = Math.floor(obj.value);
                    }
                });
            };
    
            window.addEventListener('scroll', updateItemStyles);
    
            updateStyles();
            window.addEventListener('resize', updateStyles);
        }
    });*/
    
   /* 
    const loadScroller = (parent, container) => {

        
    }
    
    document.addEventListener("DOMContentLoaded", (event) => {
    let smootherInitialized = false;

    const workflowSectionContainer = document.querySelector('#horizontal-scrollAreaContainer');
    const workflowSection = document.querySelector('#horizontal-scrollArea');
    const header = document.querySelector(".header");

    let clamp = (min, max) => value => Math.min(Math.max(value, min), max);

    if (workflowSection && workflowSectionContainer && header) {
        const headerHeight = header.offsetHeight;
        const scrollItems = document.querySelectorAll(".horizontal-scrollerItem");
        const itemCount = scrollItems.length;

        const updateStyles = () => {
            const windowWidth = Math.min(window.innerWidth, document.documentElement.clientWidth);
            const isMobile = windowWidth < 700;

            if (isMobile) {
                workflowSection.style.width = '';
                workflowSection.style.transform = '';
                workflowSectionContainer.style.height = '';
                console.log('Mobile detected:', windowWidth);
                return;
            }

            const totalWidth = itemCount * windowWidth;
            const adjustedHeight = totalWidth + window.innerHeight - windowWidth;
            workflowSection.style.width = `${totalWidth}px`;
            workflowSectionContainer.style.height = `${adjustedHeight}px`;

            window.addEventListener('scroll', function () {
                const sectionTop = workflowSectionContainer.getBoundingClientRect().top;
                const scrollY = window.scrollY || window.pageYOffset;

                if (sectionTop <= headerHeight && sectionTop > -(totalWidth - window.innerWidth)) {
                    const maxScroll = adjustedHeight - window.innerHeight;
                    const clampedScrollY = clamp(0, maxScroll)(scrollY - workflowSectionContainer.offsetTop + headerHeight);

                    const horizontalScroll = (clampedScrollY / maxScroll) * (totalWidth - window.innerWidth);
                    workflowSection.style.transform = `translateX(-${horizontalScroll}px)`;
                }
            });
            
            if(!smootherInitialized) {
                loadScroller("#smoothScrollArea", "#smoothScrollContent")
            }
        };

        const updateItemStyles = () => {
            const firstItem = scrollItems[0];
            const firstItemTop = firstItem.getBoundingClientRect().top;
            const screenMidPoint = window.innerHeight / 1.25;

            if (firstItemTop <= screenMidPoint) {
                firstItem.classList.add("animate");
            }

            const screenMidWidthPoint = window.innerWidth / 2;

            scrollItems.forEach((item, index) => {
                const itemLeft = item.getBoundingClientRect().left;

                if (itemLeft <= screenMidWidthPoint) {
                    const counters = item.querySelectorAll(".counter");

                    counters.forEach(counter => {
                        const targetValue = parseInt(counter.getAttribute("data-value"), 10);
                        const currentValue = parseInt(counter.innerHTML, 10) || 0;

                        if (!counter.classList.contains("counting")) {
                            counter.classList.add("counting");

                            countUp(counter, currentValue, targetValue);
                        }
                    });
                }
            });
        };

        const countUp = (element, start, end) => {
            let obj = { value: start };
            const duration = Math.min(Math.max(Math.abs(end - start) / 50, 1), 1.5);
        
            gsap.to(obj, {
                value: end,
                duration: duration,
                ease: "power1.out",
                onUpdate: () => {
                    element.innerHTML = Math.floor(obj.value);
                }
            });
        };

        window.addEventListener('scroll', updateItemStyles);

        updateStyles();
        window.addEventListener('resize', updateStyles);
    }
});*/


/*document.addEventListener("DOMContentLoaded", () => {
    let smootherInitialized = false;
    const container = document.querySelector('#horizontal-scrollAreaContainer');
    const items = document.querySelectorAll('.horizontal-scrollerItem');
    const header = document.querySelector(".header");
    const scrollItems = document.querySelectorAll(".horizontal-scrollerItem");
    
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    if (!container || !items.length || !header) return;
    
    const headerHeight = header.offsetHeight;
    
    const updateStyles = () => {
        const screenMidHeightPoint = window.innerHeight / 2;

        scrollItems.forEach((item, index) => {
            const itemTop = item.getBoundingClientRect().top;
            // console.log(itemTop, screenMidHeightPoint)

            if (itemTop <= screenMidHeightPoint) {
                const counters = item.querySelectorAll(".counter");

                counters.forEach(counter => {
                    const targetValue = parseInt(counter.getAttribute("data-value"), 10);
                    const currentValue = parseInt(counter.innerHTML, 10) || 0;

                    if (!counter.classList.contains("counting")) {
                        counter.classList.add("counting");

                        countUp(counter, currentValue, targetValue);
                    }
                });
            }
        });
    };

    const updateItemStyles = () => {
        const windowWidth = window.innerWidth;

        if (windowWidth < 700) {
            items.forEach((item) => {
                item.style.transform = '';
                item.style.opacity = '';
            });
            return;
        }
        
        if (!smootherInitialized) { 
            const smoother = ScrollSmoother.create({
                wrapper: "#smoothScrollArea",
                content: "#smoothScrollContent",
                smooth: 2.5,
                effects: window.innerWidth < 1025 ? false : true,
                smoothTouch: 0.1,
                normalizeScroll: true,
                ignoreMobileResize: true,
                onUpdate: self => {
                    if (!smootherInitialized) {
                        smootherInitialized = true;
                        document.querySelector("#smoothScrollArea").classList.add("loaded");
                    }
                },
            });
        }
    };

    // Initial call to handle window resize or first load with small window
    window.addEventListener('scroll', updateStyles);
    window.addEventListener('resize', updateItemStyles);
    updateItemStyles();

    // Setup GSAP ScrollTrigger animations
    items.forEach((item, index) => {
        gsap.fromTo(item, 
            {
                scale: 0.75,
                opacity: 0
            }, 
            {
                scale: 1,
                opacity: 1,
                scrollTrigger: {
                    trigger: item,
                    start: "top center",  // Start when the top of the item hits the center of the viewport
                    end: `top ${headerHeight}px`,  // End 50px from the top of the viewport
                    scrub: true,  // Enable smooth scrubbing during scroll
                    onEnter: () => item.classList.add("animate"),  // Add the animate class when entering the view
                    onLeaveBack: () => item.classList.remove("animate"),  // Remove the class when scrolling back
                    markers: false  // Enable this to debug scroll positions
                }
            }
        );
    });

    const firstItem = items[0];
    gsap.to(firstItem, {
        scrollTrigger: {
            trigger: firstItem,
            start: "top center",
            end: "top top",
            toggleClass: "animate",  // Add "animate" class when the first item scrolls into view
            markers: false
        }
    });
    
    
    const countUp = (element, start, end) => {
        let obj = { value: start };
        const duration = Math.min(Math.max(Math.abs(end - start) / 50, 1), 1.5);
    
        gsap.to(obj, {
            value: end,
            duration: duration,
            ease: "power1.out",
            onUpdate: () => {
                element.innerHTML = Math.floor(obj.value);
            }
        });
    };
});*/

document.addEventListener("DOMContentLoaded", () => {
    const container = document.querySelector('#horizontal-scrollAreaContainer');
    const items = document.querySelectorAll('.horizontal-scrollerItem');
    const header = document.querySelector(".header");
    
    let smootherInitialized = false;

    if (!container || !items.length || !header) return;

    const updateItemStyles = () => {
        const windowWidth = window.innerWidth;

        if (windowWidth < 700) {
            items.forEach((item) => {
                item.style.transform = '';
                item.style.opacity = '';
            });
            return;
        }
        
        if (!smootherInitialized) { 
            const smoother = ScrollSmoother.create({
                wrapper: "#smoothScrollArea",
                content: "#smoothScrollContent",
                smooth: 2.5,
                effects: window.innerWidth < 1025 ? false : true,
                smoothTouch: 0.1,
                normalizeScroll: true,
                ignoreMobileResize: true,
                onUpdate: self => {
                    if (!smootherInitialized) {
                        smootherInitialized = true;
                        document.querySelector("#smoothScrollArea").classList.add("loaded");
                    }
                },
            });
        }
        
        
        const firstItem = items[0];
        const firstItemTop = firstItem.getBoundingClientRect().top;
        const screenMidPoint = window.innerHeight / 2;
        
        if (firstItemTop <= screenMidPoint) {
            firstItem.classList.add("animate");
        }

        const headerHeight = header.offsetHeight;
        const windowHeightMinusHeader = window.innerHeight - headerHeight;
        const containerTop = container.offsetTop;
        const scrollY = window.scrollY;

        items.forEach((item, index) => {
            const itemTop = containerTop + windowHeightMinusHeader * index;
            const distance = itemTop - scrollY;
            let progress;

            if (distance > 0) {
                progress = Math.min(Math.max((windowHeightMinusHeader - distance + headerHeight) / windowHeightMinusHeader, 0), 1);
                item.style.transform = `scale(${0.75 + progress * 0.25})`;
                item.style.opacity = progress;
            } else if (index !== items.length - 1) {
                progress = Math.min(Math.max((windowHeightMinusHeader + distance - headerHeight) / windowHeightMinusHeader, 0), 1);
                item.style.transform = `scale(${0.75 + progress * 0.25})`;
                item.style.opacity = progress;
            }
        });
    };

    window.addEventListener('scroll', updateItemStyles);
    window.addEventListener('resize', updateItemStyles);
});





</script>

<script>
    
(function($){
    
    var Countdown = {

      // Backbone-like structure
      $el: $('.countdown'),
      
      // Params
      countdown_interval: null,
      total_seconds     : 0,
      
      // Initialize the countdown  
      init: function() {
        
        // DOM
            this.$ = {
            hours  : this.$el.find('.bloc-time.hours .figure'),
            minutes: this.$el.find('.bloc-time.min .figure'),
            seconds: this.$el.find('.bloc-time.sec .figure')
           };
    
        // Init countdown values
        this.values = {
              hours  : this.$.hours.parent().attr('data-init-value'),
            minutes: this.$.minutes.parent().attr('data-init-value'),
            seconds: this.$.seconds.parent().attr('data-init-value'),
        };
        
        // Initialize total seconds
        this.total_seconds = this.values.hours * 60 * 60 + (this.values.minutes * 60) + this.values.seconds;
    
        // Animate countdown to the end 
        this.count();    
      },
      
      count: function() {
        
        var that    = this,
            $hour_1 = this.$.hours.eq(0),
            $hour_2 = this.$.hours.eq(1),
            $min_1  = this.$.minutes.eq(0),
            $min_2  = this.$.minutes.eq(1),
            $sec_1  = this.$.seconds.eq(0),
            $sec_2  = this.$.seconds.eq(1);
        
            this.countdown_interval = setInterval(function() {
    
            if(that.total_seconds > 0) {
    
                --that.values.seconds;              
    
                if(that.values.minutes >= 0 && that.values.seconds < 0) {
    
                    that.values.seconds = 59;
                    --that.values.minutes;
                }
    
                if(that.values.hours >= 0 && that.values.minutes < 0) {
    
                    that.values.minutes = 59;
                    --that.values.hours;
                }
    
                // Update DOM values
                // Hours
                that.checkHour(that.values.hours, $hour_1, $hour_2);
    
                // Minutes
                that.checkHour(that.values.minutes, $min_1, $min_2);
    
                // Seconds
                that.checkHour(that.values.seconds, $sec_1, $sec_2);
    
                --that.total_seconds;
            }
            else {
                clearInterval(that.countdown_interval);
            }
        }, 1000);    
      },
      
      animateFigure: function($el, value) {
        
         var that         = this,
                 $top         = $el.find('.top'),
             $bottom      = $el.find('.bottom'),
             $back_top    = $el.find('.top-back'),
             $back_bottom = $el.find('.bottom-back');
    
        // Before we begin, change the back value
        $back_top.find('span').html(value);
    
        // Also change the back bottom value
        $back_bottom.find('span').html(value);
    
        // Then animate
        TweenMax.to($top, 0.8, {
            rotationX           : '-180deg',
            transformPerspective: 300,
              ease                : Quart.easeOut,
            onComplete          : function() {
    
                $top.html(value);
    
                $bottom.html(value);
    
                TweenMax.set($top, { rotationX: 0 });
            }
        });
    
        TweenMax.to($back_top, 0.8, { 
            rotationX           : 0,
            transformPerspective: 300,
              ease                : Quart.easeOut, 
            clearProps          : 'all' 
        });    
      },
      
      checkHour: function(value, $el_1, $el_2) {
        
        var val_1       = value.toString().charAt(0),
            val_2       = value.toString().charAt(1),
            fig_1_value = $el_1.find('.top').html(),
            fig_2_value = $el_2.find('.top').html();
    
        if(value >= 10) {
    
            // Animate only if the figure has changed
            if(fig_1_value !== val_1) this.animateFigure($el_1, val_1);
            if(fig_2_value !== val_2) this.animateFigure($el_2, val_2);
        }
        else {
    
            // If we are under 10, replace first figure with 0
            if(fig_1_value !== '0') this.animateFigure($el_1, 0);
            if(fig_2_value !== val_1) this.animateFigure($el_2, val_1);
        }    
      }
    };
    
    // Let's go !
    Countdown.init();
    
    $(document).on("mouseover", ".seed-countArea", function() {
        $(document).find(".seed-countArea").addClass("counted");
    })
    
    if (getCookie('seedCounted') === 'true') {
        $(document).find(".seed-countArea").addClass("counted");
    }
    
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
})(jQuery);
</script>

<script>
jQuery( document ).ready(function() {
    jQuery('.trusted-logos-one').owlCarousel({
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
    
    jQuery('.trusted-logos-two').owlCarousel({
        loop:true,
        rtl:true,
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

document.addEventListener('DOMContentLoaded', function() {
    var element = document.getElementById('seed-style-text');

    element.addEventListener('mouseover', function() {
        if (!this.classList.contains('stop')) {
            this.classList.add('stop');
        }
    });
}); 
</script>

<script>
// Set the countdown time (e.g., 4 hours, 59 minutes, 0 seconds from now)
const countdownEnd = new Date().getTime() + (4 * 60 * 60 * 1000) + (59 * 60 * 1000); // 4 hours 59 minutes in milliseconds

function formatTime(ms) {
  // Calculate hours, minutes, and seconds from milliseconds
  const hours = Math.floor(ms / (1000 * 60 * 60));
  const minutes = Math.floor((ms % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((ms % (1000 * 60)) / 1000);

  // Pad the values with leading zeros
  const pad = (num) => String(num).padStart(2, '0');

  return `${pad(hours)}:${pad(minutes)}:${pad(seconds)}`;
}

function updateCountdown() {
  const now = new Date().getTime();
  const distance = countdownEnd - now;

  // Update the countdown display for all elements with the class 'countdown'
  document.querySelectorAll(".countdownSimple").forEach((element) => {
    element.innerHTML = formatTime(distance);
  });

  // If the countdown is finished, display "00:00:00" in all countdown elements
  if (distance < 0) {
    clearInterval(timerInterval);
    document.querySelectorAll(".countdownSimple").forEach((element) => {
      element.innerHTML = "00:00:00";
    });
  }
}

// Update the countdown every 1 second
const timerInterval = setInterval(updateCountdown, 1000);

// Initialize countdown immediately
updateCountdown();
</script>

<script>
    jQuery(document).ready(function($) {
        // Handle tab clicks
        $(document).on('click', ".webPortfolio-caseStudyDetail .inner-tabs .nav-link", function(event) {
            event.preventDefault();

            var targetPaneId = $(this).attr('href');

            $(this).parents(".portfolio-inner-tabs-div").find('.inner-tab-content .tab-pane').removeClass('active show');

            $(this).parents(".inner-tabs").find('.nav-link').removeClass('active');

            $(this).addClass('active');
            
            $(this).parents(".portfolio-inner-tabs-div").find(`.inner-tab-content .tab-pane${targetPaneId}`).addClass('active show');
        });
        
        $(document).on('click', ".webPortfolio-caseStudyTabs > .nav-tabs .nav-link", function(event) {
            event.preventDefault();

            var targetPaneId = $(this).attr('href');

            $(this).parents(".webPortfolio-caseStudyTabsArea").find('.webPortfolio-caseStudy-content .tab-pane').removeClass('active show');

            $(this).parents(".nav-tabs").find('.nav-link').removeClass('active');

            $(this).addClass('active');
            
            $(this).parents(".webPortfolio-caseStudyTabsArea").find(`.webPortfolio-caseStudy-content .tab-pane${targetPaneId}`).addClass('active show');
        });
        
        $(document).on("click", ".caseStudyPopupTrigger",  function(e) {
            e.preventDefault();
            
            const dataID = $(this).attr("data-id");
            $(document).find(`.caseStudyPopup-${dataID}`).addClass("show-popup");
            
            
            var beforeafterdiv = $(this).find(".hidden-caseStudyData .before-after-div").html();
            
            var modalpopup = `
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="row">
                      <div class="col-lg-5 col-sm-12 my-auto position-relative">
                        <div class="section-heading">
                          <h2>Revitalize Your Website Design</h2>
                          <p>Compare the before and after to see how a fresh design boosts your sites performance.</p>
                        </div>
                        <img class="arrow-absolute" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/arrow-blue.png" width="100%" alt="Arrow">
                      </div>
                      <div class="col-lg-7 col-sm-12">
                        <div class="before-after-div">
                          ${beforeafterdiv}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>`;
            
            $(document).find('.beforeAfterPopup').html(modalpopup);
        })
        
        $(document).on("click", ".webPortfolio-caseStudyClose-btn", function(e) {
            e.preventDefault();
            $(document).find(".caseStudyPopup").removeClass("show-popup");
            
        })
        
        $(document).on("click", ".beforeAfterBtnToggle", function(e) {
            e.preventDefault();
            $(document).find(".beforeAfterPopup, .beforeAfterPopupBg").addClass("show-popup");
            
        });
        
        $(document).on("click", ".beforeAfterPopup .modal-body button", function(e) {
            e.preventDefault();
            $(document).find(".beforeAfterPopup, .beforeAfterPopupBg").removeClass("show-popup");
            
        });
        
        setTimeout(function() {
            $(document).find(".header").removeClass("hidden-top")
        }, 500)
        
    });
</script>
@endpush

@endsection