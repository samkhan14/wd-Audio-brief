@push('customStyles')
<style>

    :root {
        --banner-background: #68ccfb;
    }

    @font-face {
      font-family: "redHat";
      src: url("{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/fonts/red-hat/RedHatDisplay-Bold.ttf") format("opentype");
      font-weight: 800;
      font-style: normal;
      font-display: swap;
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

    .redHat_font{
        font-family: "redHat", sans-serif;
    }

    .questrial_font{
        font-family: "Questrial", sans-serif;
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
            max-height: 91vh;
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
    padding: 1rem 2.5rem;
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
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
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
    background: url("https://websitedigitals.imglab-cdn.net/assets/images/wd-5/bg.png?format=webp&width=880") no-repeat center center;
    background-size: contain;
    opacity: 0.65;
    z-index: -2;
    transform: translate(-50%, -50%);
}

.horizontal-scrollImgArea {
    position: relative;
}

.horizontal-scrollImgArea > img {
    width: 110%;
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
    background: url("https://websitedigitals.imglab-cdn.net/assets/images/shapes/check-mark.png?format=webp") no-repeat center center;
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




        #seed-style-textContainer {
            position: relative;
            padding: 0 1.25rem;
        }

        #seed-style-textContainer::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 55%;
            width: 110%;
            height: 130%;
            transform: translate(-50%, -50%);
            background: url("https://websitedigitals.imglab-cdn.net/assets/images/badge.png?format=webp&width=180") center center no-repeat;
            background-size: contain;
        }

        #seed-style-text {
            overflow: hidden;
            position: relative;
            display: inline-block;
            text-decoration: none;
            --transition-duration: 0.3s;
            white-space: nowrap; /* Prevents text from wrapping */
            padding: 0;
            text-align: center;
            color: #fff;
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
            color: #fde734;
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
    margin: .5rem 0 .625rem;
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
  height: 2.75rem;
  width: 2.5rem;
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
  font-size: 2.125rem;
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
        /*position: relative;
        top: 0;
        flex-direction: column;
        height: auto;*/
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

    .seed-countArea > span > b {
        display: block;
        width: 100%;
    }

    #seed-style-textContainer::after {
        width: 125%;
        height: 165%;
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
    background: linear-gradient(135deg, #8c38d8 0%, rgb(13, 9, 255) 100%);
    /*background: rgb(13, 9, 255);*/
    /*background: url("https://websitedigitals.imglab-cdn.net/assets/images/wd-5/banner_bg.jpg") no-repeat center center;*/
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
    background: url('https://websitedigitals.imglab-cdn.net/assets/images/wd-5/new/check.png') no-repeat center center;
    background-size: contain;
}

.price-font,
.horizontal-points > li > .price-cloud {
    font-family: "Kontora", sans-serif;
    letter-spacing: 0.0625rem;
}

.horizontal-points > li > .price-cloud {
    background: url('https://websitedigitals.imglab-cdn.net/assets/images/wd-5/new/cloud.png') no-repeat center center;
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
    font-family: "redHat";
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
    font-size: 1.375rem;
    font-weight: 500;
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

.horizontal-name-img::before{
        content: '';
        position: absolute;
        right: -5rem !important;
        top: -1rem;
        background: url("https://websitedigitals.imglab-cdn.net/assets/images/arrow.png?format=webp&width=120") no-repeat center center;
        background-size: contain;
        width: 19%;
        height: 100%;
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
        font-size: 3.225rem !important;
        max-width: 55rem !important;
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
    height: 4.75rem;
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
        font-size: 3rem;
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
        border-radius: 3.625rem;
    }

    .banner-heading + .link-area > a {
        padding: 0.75rem 1.5rem;
        font-size: 0.9375rem;
        min-height: auto;
    }

    .parallex-watermark {
        top: 2%;
        height: 2.5rem;
        opacity: 1;
    }

    /*.gotoNextArea {
        flex-direction: column;
    }

    .gotoNextArea .arrow-bottom {
        flex-direction: column;
    }

    .gotoNextArea .arrow-bottom > i {
        transform: rotate(90deg)
    }*/

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
        margin-top: 1.75rem !important;
    }

    /*.gotoNextArea .arrow-bottom > i:nth-child(4) {
        display: none;
    }*/

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
        transform: translateX(77%);
    }

    .before-after-div:hover #image-after {
        transform: translateX(-77%);
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
        bottom: 22% !important;
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

    .hScroller-linkArea > a.primary {
        padding: 0.75rem 3rem;
    }

    .horizontal-scrollAreaSection .get_everything {
        font-size: 1.375rem;
        max-width: 22.5rem !important;
    }

    .price-discount-comparison {
        margin-top: 2.5rem;
        margin-bottom: 1.375rem;
    }
}

.quoteArea {
    position: relative;
}

.quoteArea::before {
    content: '';
    position: absolute;
    width: 3.875rem;
    height: 3.5rem;
    right: 100%;
    top: 0;
    opacity: 0.4;
    transform: translate(-25%, -25%);
    background: url("https://websitedigitals.imglab-cdn.net/assets/images/quote.png?format=webp&width=85") center center no-repeat;
    background-size: contain;
}


    .basic-tabs.small-tabs > .nav-tabs > .nav-item > .nav-link {
        min-width: 9.75rem;
    }

    .basic-tabs > .nav-tabs > .nav-item > .nav-link::before{
        height: 0.9rem;
    }

    .banner-bgSpin {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 10%;
        -webkit-transform: translate(-15%, -8%);
        transform: translate(-15%, -8%);
        -webkit-animation: rotation 16s infinite linear;
        animation: rotation 16s infinite linear;
        -webkit-transform-origin: center;
        transform-origin: center;
        z-index: -2;
        opacity: 0.85;
    }

    .mt-default {
        margin-top: var(--sectionPadding-top);
    }

    .banner-bgSpin > img {
        width: 100%;
        max-width: 100%;
        height: auto;
        -webkit-transform: scale(2.5);
        transform: scale(2.5);
        -webkit-filter: blur(0.125rem);
        filter: blur(0.125rem);
        pointer-events: none;
    }

    @media (min-width: 768px) {
        .horizontal-scrollerItem .before-after-div {
            padding-top: 1rem;
        }
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }

        to {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
    }

    @keyframes rotation {
        from {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }

        to {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
    }

    .menu > li > a::before {
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        height: 1.125rem;
        background: url(../frontend/assets/images/bottom-blue.png) no-repeat center bottom;
        background-size: contain;
        transform: translate(0%, -100%) scaleY(-1);
        opacity: 0;
        transition: all 0.3s;
        z-index: 1;
    }

    .menu > li:hover > a::before,
    .menu > li.active > a::before {
        transform: translate(0%, 0%) scaleY(-1);
        opacity: 1;
    }

    .backgroundImages-addOn {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .backgroundImages-addOn > img {
        position: absolute;
    }

    .backgroundImages-addOn > img.top {
        top: 0;
        left: 0;
        width: 100%;
    }
    .backgroundImages-addOn > img.right {
        top: 0;
        right: 0;
        height: 100%;
    }
    .backgroundImages-addOn > img.bottom {
        bottom: -7%;
        left: 0;
        width: 100%;
    }
    .backgroundImages-addOn > img.left {
        top: 0;
        left: 0;
        height: 100%;
    }
    .backgroundImages-addOn > img.bottom-coins {
        bottom: 0;
        left: 38%;
        transform: translate(-50%, 0%);
        height: 10rem;
    }
    .backgroundImages-addOn > img.bonuses {
        top: 0;
        left: 68%;
        transform: translate(-50%, 0%);
        height: 6rem;
    }

    .flexHeading {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .flexHeading > h2 {
        margin: 0;
    }

    .flexHeading > .treasure {
        height: 7rem;
    }

    .row.mlr--7 {
        margin: 0 -0.4375rem;
    }

    .row.mlr--7 > * {
        padding: 0 0.4375rem;
    }

    .singleAddonList {
        background: #fff;
        box-shadow: 0 0 0.625rem rgba(0, 0, 0, 0.15);
        border-radius: 0.5rem;
        overflow: hidden;
        opacity: 0;
    }

    .singleAddonList.animated  {
        animation: fadeIn 1.5s forwards;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }


    .singleAddonList > h2 {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        background: var(--primary);
        font-size: 1.0625rem;
        text-align: center;
        font-weight: 500;
        padding: 0.375rem 0.375rem;
        height: 3.625rem;
        margin: 0;
    }

    .singleAddonList > ul {
        display: flex;
        padding: 0.75rem 0.5rem;
        font-size: 0.6875rem;
        flex-direction: column;
        gap: 0.125rem;
        max-height: 23.5rem;
        overflow: auto;
    }

    .singleAddonList > ul::-webkit-scrollbar {
        width: 6px;
    }

    .singleAddonList > ul > li {
        position: relative;
        padding-left: 1.25rem;
    }

    .singleAddonList > ul > li::before {
        content: '';
        position: absolute;
        left: 0;
        width: 1rem;
        height: 1rem;
        background: url("https://websitedigitals.imglab-cdn.net/assets/images/wd-5/green-tick.png?format=webp&width=24") no-repeat center center;
        background-size: contain;
    }

    .absoluteNext {
        position: absolute;
        left: 50%;
        bottom: 0.75rem;
        width: auto;
    }

    @media (max-height: 750px) {
        .absoluteNext {
            left: 67.5%;
            bottom: 10%;
        }

        .gotoNextArea.absoluteNext > h4 {
            font-size: 1.125rem;
        }
    }

    @media (max-width: 576px) {

        #horizontal-scrollAreaContainer .horizontal-scrollArea > .horizontal-scrollerItem {
            --sectionPadding-top: 3.75rem;
            --sectionPadding-bottom: 4.3125rem;
        }

        .singleAddonList > ul {
            font-size: 0.875rem;
            gap: 0.25rem;
            max-height: 32.5rem;
        }

        .absoluteNext {
            left: 50%;
            bottom: 0%;
            transform: translate(-50%, calc(100% + 2rem));
        }

        .quoteArea {
            padding-left: 3rem;
        }

        .quoteArea::before {
            right: auto;
            left: 0;
            transform: translate(0%, -25%);
            width: 2.5rem;
            height: 2.5rem;
        }

        .flexHeading {
            margin-bottom: 1rem;
        }

        .flexHeading > .treasure {
            height: 5rem;
        }

        #horizontal-scrollArea .before-after-div {
            display: none;
        }

        .flexHeading {
            display: inline-flex;
        }

        .trusted-logos-one {
            margin-top: 1.5rem;
        }

        .trusted-logos-one img {
            height: 5rem;
        }
    }

    ul.new-offerArea {
        align-items: start;
        font-size: 1.0625rem;
        gap: 1.0625rem 0;
    }

    .new-offerArea > li {
        border: 0.125rem solid var(--primary);
        padding: 0.375rem 2.25rem 0.4375rem;
        border-radius: 5rem;
        background: #fff;
    }
    .new-offerArea > li::before {
        display: none;
    }

    .new-offerArea > li > span {
        position: absolute;
    }

    .new-offerArea > li > span.price-left {
        background: var(--primary);
        border-radius: 50%;
        left: 0%;
        top: 50%;
        transform: translate(-50%, -50%);
        height: 3.125rem;
        width: 3.125rem;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 0.9375rem;
        color: #fff;
        box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.5);
    }

    .new-offerArea > li > img.tickImg {
        margin: -0.3125rem 0 0 0;
        max-width: none;
        height: 1.25rem;
    }

    .new-offerArea > li > img.exclamation {
        position: absolute;
        right: 3%;
        bottom: 78%;
        transform: translate(-50%, 50%);
        height: 2rem;
    }

    .new-offerArea > li > span.price-left.offer-left-free {
        background: url("https://websitedigitals.imglab-cdn.net/assets/images/free-red.png?format=webp&width=75") center center no-repeat;
        background-size: contain;
        box-shadow: none;
        backdrop-filter: drop-shadow(0 0 0.5rem rgba(0, 0, 0, 0.5));
        height: 3.4375rem;
        width: 3.4375rem;
    }

    .new-offerArea > li > span.limited-text {
        background: var(--primary);
        color: #fff;
        padding: 0.1875rem 0.5rem;
        border-radius: 2rem;
        font-size: 0.5rem;
        white-space: nowrap;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-2deg);
    }

    .last-scrollerItem ul.new-offerArea {
        padding-left: 1.5rem;
    }

    @media (max-width: 1399px) and (min-width: 1200px) {
        .horizontal-scrollerItem.first .section-heading > h2 {
            max-width: none !important;
            font-size: 2.375rem !important;
        }

        .horizontal-scrollerItem.first .section-heading > h2 br {
            display: block;
        }

        .parallex-watermark {
            height: 5.125rem;
            top: 0 !important;
        }

        .horizontal-scrollAreaSection .get_everything {
            font-size: 1.25rem;
            font-weight: 500;
            margin-bottom: 0.3125rem;
        }

        .price-discount-comparison * > h3 {
            font-size: 0.75rem;
        }

        .price-discount-comparison * > p {
            font-size: 2.75rem !important;
        }

        .price-discount-comparison .discount > p {
            font-size: 1.25rem !important;
        }

        ul.new-offerArea {
            font-size: 1rem;
            gap: 1rem 0;
        }

        .new-offerArea > li {
            padding: 0.375rem 2.125rem;
        }

        .new-offerArea > li > span.price-left {
            height: 3rem;
            width: 3rem;
            font-size: 0.875rem;
        }

        .new-offerArea > li > span.price-left.offer-left-free {
            height: 3.25rem;
            width: 3.25rem;
        }

        .gotoNextArea > h4 {
            font-size: 1.125rem;
        }

        .hurryUp-img {
            height: 2.75rem;
        }

        .last-scrollerItem .section-heading > h2 {
            font-size: 1.75rem;
        }

        .original-discounted > li {
            font-size: 0.8125rem;
        }

        .original_discounted_small {
            margin: 1.125rem 0 0.625rem 0 !important;
            max-width: 33rem;
        }

        .original-discounted > li > p {
            font-size: 2.275rem !important;
        }

        .original-discounted > li:nth-child(2) span {
            font-size: 0.625rem;
        }

        .seed-countArea {
            font-size: 1rem;
        }

        .countdown .count-title {
            font-size: 0.625rem;
        }

        .countdown .figure {
            height: 2.5rem;
            width: 2.25rem;
        }

        .countdown .figure > span {
            font-size: 1.9375rem;
        }

        .hScroller-linkArea > a.primary {
            padding: 0.4375rem 2rem;
        }

        .price-discount-comparison > * {
            padding-bottom: 0;
        }

        .price-discount-comparison {
            margin: 1rem 0 2rem 0;
        }

        .beforeAfterScrollSection .gotoNextArea {
            margin-top: 3.5rem !important;
        }
    }

    @media (max-width: 1399px) and (min-width: 1200px) and (max-height: 615px) and (min-height: 580px) {
        .flexHeading > .treasure {
            height: 6rem;
        }

        .backgroundImages-addOn > img.bonuses {
            height: 5.5rem;
        }

        .flexHeading > h2 {
            font-size: 2.25rem;
        }

        .singleAddonList > h2 {
            font-size: 0.9375rem;
            height: 3.25rem;
        }

        .singleAddonList > ul {
            max-height: 22rem;
        }

        .beforeAfterScrollSection .gotoNextArea {
            margin-top: 2.5rem !important;
        }

        .last-scrollerItem .section-heading > h2 {
            font-size: 1.625rem;
        }

        .seats-left-div {
            margin-bottom: 0.375rem !important;
        }

        .hScroller-linkArea > a.primary {
            font-size: 0.875rem;
        }

        .price-discount-comparison * > p {
            font-size: 2.5rem !important;
        }

        .price-discount-comparison .discount > p {
            font-size: 1.125rem !important;
            margin-bottom: 0.625rem;
        }

        .price-discount-comparison > *,
        .price-discount-comparison .new-price{
            padding: 0.875rem 2.125rem 0.125rem;
        }

        .gotoNextArea > h4 {
            font-size: 1rem;
        }

        .horizontal-scrollAreaSection .get_everything {
            font-size: 1.125rem;
        }

        .basic-tabs > .nav-tabs > .nav-item > .nav-link::before {
            height: 0.75rem;
        }

        .beforeAfterScrollSection .basic-tabs > .nav-tabs > .nav-item > .nav-link {
            padding: 0.875rem 2.5rem;
        }

        .original-discounted > li {
            padding: 0.875rem 0 0.125rem !important;
        }

        .original_discounted_small {
            max-width: 29rem;
        }

        ul.new-offerArea {
            font-size: 0.9375rem;
        }

        .new-offerArea > li > span.limited-text {
            top: calc(100% + 0.125rem);
        }

        .horizontal-scrollerItem.first .hScroller-linkArea > a.primary {
            min-width: 17.5rem !important;
        }
    }


    @media (max-width: 1399px) and (min-width: 1200px) and (max-height: 579px) and (min-height: 550px) {
        html {
            font-size: 14px;
        }

        .horizontal-scrollerItem.first .section-heading > h2 {
            font-size: 2.125rem !important;
        }

        .horizontal-scrollAreaSection .get_everything {
            font-size: 1.125rem;
        }

        .parallex-watermark {
            height: 4.5rem;
        }

        .price-discount-comparison * > p {
            font-size: 2.3755rem !important;
        }

        .price-discount-comparison .discount > p {
            font-size: 1.125rem !important;
        }

        .first .hScroller-linkArea > a.primary {
            max-width: 18rem !important;
        }
    }

    @media (max-width: 576px) {
        .horizontal-scrollerItem ul.new-offerArea {
            gap: 1.75rem 0;
            font-size: 1.25rem;

        }

        .horizontal-scrollerItem .new-offerArea > li > span.price-left {
            height: 3.6255rem;
            width: 3.625rem;
            font-size: 1.125rem;
        }

        .horizontal-scrollerItem .new-offerArea > li > span.price-left.offer-left-free {
            height: 3.75rem;
            width: 3.75rem;
        }
    }

    @media (-webkit-device-pixel-ratio: 1.9125) {
        html {
            font-size: 14.5px;
        }
    }


</style>

<section class="home-banner-area">
  <div id="headerHeightArea"></div>
  <!--<div class="banner-bgSpin">-->
  <!--    <img src="https://websitedigitals.imglab-cdn.net/assets/images/bg_blur.png?format=webp" alt=""/>-->
  <!--</div>-->
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
                <span>s</span><span>e</span><span>a</span><span>r</span><span>c</span><span>h</span><span>i</span><span>n</span><span>g</span>
                <span>f</span><span>o</span><span>r</span>
                <span>y</span><span>o</span><span>u</span><span>r</span> <span>p</span><span>r</span><span>o</span><span>d</span><span>u</span><span>c</span><span>t</span><span>s</span>
                <span>a</span><span>n</span><span>d</span> <span>s</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span>
                <span>o</span><span>n</span><span>l</span><span>i</span><span>n</span><span>e</span><span>?</span>
            </p>

          </div>
          {{-- <div class="link-area">
              <a href="javascript:void(0);" class="offer-btn business-report-btn primary">Get Your Free Online Business Intelligence Report</a>
          </div> --}}
          <div class="link-area">
            <a href="{{ route('brief')}}" class="briefForm business-report-btn primary">Get Your Free Online Business Intelligence Report</a>
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
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/1.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/2.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/3.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/4.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/5.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/6.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/7.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/8.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/9.webp?format=webp&width=350" alt="" />
                </li>
                <!--<li>-->
                <!--  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/10.webp?format=webp&width=350" alt="" />-->
                <!--</li>-->
                 <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/11.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/1.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/2.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/3.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/4.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/5.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/6.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/7.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/8.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/9.webp?format=webp&width=350" alt="" />
                </li>
                <!--<li>-->
                <!--  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/10.webp?format=webp&width=350" alt="" />-->
                <!--</li>-->
                 <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/11.webp?format=webp&width=350" alt="" />
                </li>

              </ul>
            </div>
            <div class="homeBanner-sliders first-slider">
              <ul>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/12.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/13.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/14.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/15.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/16.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/17.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/18.webp?format=webp&width=350" alt="" />
                </li>
                 <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/19.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/20.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/21.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/12.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/13.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/14.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/15.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/16.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/17.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/18.webp?format=webp&width=350" alt="" />
                </li>
                 <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/19.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/20.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/21.webp?format=webp&width=350" alt="" />
                </li>

              </ul>
            </div>
            <div class="homeBanner-sliders first-slider">
              <ul>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/22.webp?format=webp&width=350" alt="" />
                </li>
                 <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/23.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/24.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/25.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/26.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/27.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/28.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/29.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/30.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/31.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/22.webp?format=webp&width=350" alt="" />
                </li>
                 <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/23.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/24.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/25.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/26.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/27.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/28.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/29.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/30.webp?format=webp&width=350" alt="" />
                </li>
                <li>
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/banner/home/top/31.webp?format=webp&width=350" alt="" />
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
              <img src="https://websitedigitals.imglab-cdn.net/assets/images/about/rating.png?format=webp" alt="" />
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
                <div id="first-confetti" class="hiddenConfetti"></div>
                <div class="container position-relative">
                    <!--<p class="parallex-watermark">SPOILER ALERT</p>-->
                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/best-value.png?format=webp&width=1100" class="parallex-watermark" alt="" width="100%" />
                    <div class="section-heading text-center mt-3 p-0 mb-0 drive_result">
                        <h2 style="max-width: 100%;"><span>Comprehensive <span class="color-primary">Website Solutions </span><br>That <span class="color-primary">Drive Results</span></span></h2>
                        <p class="questrial_font get_everything">Get Everything You Need to Succeed Online:</p>
                    </div>
                    <div class="scrolled-elements-center discount_round">
                        <ul class="horizontal-points mt-3 mb-3 green-tick centered-list new-offerArea">
                            <li>
                                <span class="price-left">$999</span>
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/green-tick.png?format=webp&width=28" alt="" class="tickImg"/>
                                Website Design
                            </li>
                            <li>
                                <span class="price-left">$999</span>
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/green-tick.png?format=webp&width=28" alt="" class="tickImg"/>
                                Website Development
                            </li>
                            <li>
                                <span class="price-left offer-left-free"></span>
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/green-tick.png?format=webp&width=28" alt="" class="tickImg"/>
                                Bonuses For Website
                                <span class="limited-text">For Limited Time</span>
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/exclamation.png?format=webp&width=20" alt="" class="exclamation"/>
                            </li>
                        </ul>

                        <div class="price-discount-comparison">
                            <div class="prev-price">
                                <h3>Original Price</h3>
                                <p style="font-size: 3rem;"><sup style="1.3rem; top:-1.1rem !important; left:-0.2rem !important;">$</sup>1999</p>
                            </div>
                            <div class="new-price">
                                <div class="bgArea">
                                    <div class="bg"></div>
                                </div>
                                <h3>Discounted Price</h3>
                                <p style="font-size: 3rem;"><sup style="1.3rem; top:-1.1rem !important; left:-0.2rem !important;">$</sup>1599</p>
                            </div>
                            <div class="discount">
                                <p>20%<br/>OFF</p>
                            </div>
                        </div>

                        <!--<ul class="original-discounted">
                            <li>Original Price<p class="mb-0"><sup>$</sup>1999</p> <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/vs-light.png?format=webp" alt="" width="100%" /></li>
                            <li>Discounted Price<span>20% OFF</span><p class="mb-0"><sup>$</sup>1399</p></li>
                        </ul>-->

                        <div class="link-area hScroller-linkArea offer-handAnimtion">
                          <img src="https://websitedigitals.imglab-cdn.net/assets/images/poke.png?format=webp&width=70" alt="" />
                          <!--<a href="javascript:void(0);" class="primary offer-btn" id="primary_white"><b class="hide-mob">Limited Time Offer - </b>Signup In <span class="text-light countdownSimple" id="countdown"></span></a>-->
                          <a href="javascript:void(0);" class="primary offer-btn twentyPerOff-btn" id="primary_white" style="min-width: 20.5rem;">Signup In <span class="text-light countdownSimple" id="countdown"></span></a>
                        </div>

                        <!--<div class="exclusive-badge-container">
                            <span class="before"></span>
                            <span class="after"></span>
                            <div class="bg"></div>
                            <span class="heading">Exclusive Bonuses For Websites</span>
                        </div>-->
                        <div class="mt-3 gotoNextArea">
                            <!--<h4 class="mb-0">See what's included in the offer</h4>-->
                            <h4 class="mb-0">See what else is included</h4>
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
                                        <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/vs.png?format=webp" alt="Tick">
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
                <img class="count_section_img" src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/1.png?format=webp&width=300" alt="">
                <div class="container">
                    <div class="row rowGap2 align-items-center">
                        <div class="col-md-6">
                            <div class="horizontal-scrollImgArea">
                                <!--<img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/first.png?format=webp" alt=""/>-->
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/1-1.png?format=webp&width=850" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="section-heading horizontal-scrollHeading headingStyle discount_round">
                                <h2>Custom <span class="color-primary">Website Design</span>
                                    <span class="subheadingStyle">
                                        Worth Of
                                        <span class="color-primary price-font"><del><sup>$</sup><span class="counter" data-value="999">999</span></del></span>
                                        After
                                        <img style="max-width: 4.625rem" src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/799-off.png?format=webp&width=200" width="100%" alt="">
                                    </span>
                                    <!--<span style="font-size: 2rem; font-weight: 600;">Worth Of</span><sup>(<del>$999</del>)</sup>
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
                            <h4 class="mb-0">See what else is included</h4>
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
                <img class="count_section_img" src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/2.png?format=webp&width=300" alt="">
                <div class="container">
                    <div class="row rowGap2 align-items-center">
                        <div class="col-md-6">
                            <div class="horizontal-scrollImgArea">
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/second03.png?format=webp&width=850" alt=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="section-heading horizontal-scrollHeading headingStyle discount_round">
                                <h2>Custom <span class="color-primary">Web Development</span>
                                    <span class="subheadingStyle">
                                        Worth Of
                                        <span class="color-primary price-font"><del><sup>$</sup><span class="counter" data-value="999">999</span></del></span>
                                        After
                                        <img style="max-width: 4.625rem" src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/799-off.png?format=webp&width=200" width="100%" alt="">
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
                            </div>
                        </div>
                    </div>
                    <div class="gotoNextArea" style="margin-top: 5rem;">
                            <h4 class="mb-0">See what else is included</h4>
                            <div class="arrow-bottom">
                                <i class="fa-solid fa-chevron-right"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                </div>
            </div>
            <div class="horizontal-scrollerItem gradient-circle leftCenter-gradient lightGray-section addOnScrollableArea">
                <div class="backgroundImages-addOn">
                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/latest/top.png?format=webp&width=1920" alt="" class="top"/>
                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/latest/right.png?format=webp&width=150" alt="" class="right"/>
                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/latest/bottom.png?format=webp&width=1920" alt="" class="bottom"/>
                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/latest/left.png?format=webp&width=150" alt="" class="left"/>
                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/latest/bottom-coins.png?format=webp&width=550" alt="" class="bottom-coins"/>
                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/latest/bonuses.png?format=webp&width=350" alt="" class="bonuses"/>
                </div>
                <div class="container">
                    <div class="row rowGap align-items-center">
                        <div class="col-12 stickHeadingContainer">
                            <div class="section-heading horizontal-scrollHeading headingStyle flexHeading stickHeading">
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/latest/treasure.png?format=webp&width=180" alt="" class="treasure"/>
                                <h2>Free bonuses For <span class="color-primary">Website</span>
                                    <span class="subheadingStyle">
                                        Worth Of
                                        <span class="color-primary price-font"><del><sup>$</sup><span class="counter" data-value="999">999</span></del></span>
                                        After
                                        <img style="max-width: 5.625rem" src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/free-pic.png?format=webp&width=200" width="100%" alt="">
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row mlr--7 rowGap2 position-relative">
                                <div class="col-md-2 col-2">
                                    <div class="singleAddonList">
                                        <h2><span>Web Design <br>(UI/UX Design)</span></h2>
                                        <ul>
                                            <li>5 Pages Custom Design</li>
                                            <li>Interactive Web Design</li>
                                            <li>User-friendly Navigation</li>
                                            <li>Responsive Design Implementation</li>
                                            <li>Landing Page Design</li>
                                            <li>Website Redesign</li>
                                            <li>Modern UI/UX Design</li>
                                            <li>Wireframing and Prototyping</li>
                                            <li>Typography with Readability</li>
                                            <li>Mobile-Friendly Design</li>
                                            <li>Up to 5 Custom Banner Designs</li>
                                            <li>Upto 5 Stock Photos</li>
                                            <li>From Industry Specific Designers</li>
                                            <li>100% Unique Design Guaranteed</li>
                                            <li>All Essential File Formats</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="singleAddonList">
                                        <h2><span>Web Development</span></h2>
                                        <ul>
                                            <li>Complete W3C Certified HTML</li>
                                            <li>Modern Animations & Hover Effects</li>
                                            <li>Optimized for Speed and Performance</li>
                                            <li>Scalable Infrastructure</li>
                                            <li>SEO-Friendly Development</li>
                                            <li>Custom Functionalities</li>
                                            <li>Custom forms</li>
                                            <li>Advanced Security Protocols</li>
                                            <li>SSL Certificate Integration</li>
                                            <li>Content Management System (CMS)</li>
                                            <li>CMS integration (WordPress, Shopify, etc)</li>
                                            <li>Drag-and-Drop Content Editor</li>
                                            <li>High-resolution Media support</li>
                                            <li>Third-party API integrations</li>
                                            <li>100% Clean & Efficient Code Guaranteed</li>
                                            <li>Cross-Browser Support Guaranteed</li>
                                            <li>All Essential File Formats</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="singleAddonList">
                                        <h2><span>Google Add ons</span></h2>
                                        <ul>
                                            <li>Google Analytics Setup</li>
                                            <li>Google Search Console Setup</li>
                                            <li>Google Tag Manager Integration</li>
                                            <li>Google My Business Listing Setup</li>
                                            <li>Google Sitemap Submission</li>
                                            <li>Google Ads Account Setup</li>
                                            <li>Google Data Studio Dashboard Creation</li>
                                            <li>Basic Heatmap Setup</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="singleAddonList">
                                        <h2><span>Animation Add ons</span></h2>
                                        <ul>
                                            <li>Custom CSS Animations</li>
                                            <li>Logo Animation</li>
                                            <li>Scroll-Triggered Animations</li>
                                            <li>Motion Graphics</li>
                                            <li>Background Video Integration</li>
                                            <li>Microanimations for Buttons and Icons</li>
                                            <li>Animated Call-to-Actions (CTAs)</li>
                                            <li>Animated Page Transitions</li>
                                            <li>Animated Illustrations</li>
                                            <li>Animated Charts and Graphs</li>
                                            <li>Animated Loading Screens</li>
                                            <li>3D Model Integration</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="singleAddonList">
                                        <h2><span>Branding Add ons</span></h2>
                                        <ul>
                                            <li>Logo Design Makeover</li>
                                            <li>Brand Style Guide Creation</li>
                                            <li>Letterhead Design</li>
                                            <li>Envelope Design</li>
                                            <li>Brochure and Flyer Design</li>
                                            <li>Custom Icon Design</li>
                                            <li>Business Card Design</li>
                                            <li>Email Signature Design</li>
                                            <li>Signage Design</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="singleAddonList">
                                        <h2><span>Social Media <br>Add ons</span></h2>
                                        <ul>
                                            <li>Social Media Profile Photo</li>
                                            <li>Social Media Covers Design</li>
                                            <li>Social Media Post (Weekly)</li>
                                            <li>Social Media Share Buttons</li>
                                            <li>Social Media Feed Integration</li>
                                            <li>Instagram Gallery Setup</li>
                                            <li>Facebook Page Integration</li>
                                            <li>LinkedIn Profile Integration</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gotoNextArea absoluteNext">
                                    <h4 class="mb-0">See what else is included</h4>
                                    <div class="arrow-bottom">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        <i class="fa-solid fa-chevron-right"></i>
                                        <i class="fa-solid fa-chevron-right"></i>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="horizontal-scrollerItem gradient-circle leftCenter-gradient beforeAfterScrollSection">
                <div class="container">
                    <div class="row rowGap2 align-items-center">
                        <!--<div class="col-md-6">
                            <div class="horizontal-scrollImgArea">
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/first.png?format=webp" alt=""/>
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
                                        <div class="col-lg-5 col-sm-12">
                                            <div class="section-heading horizontal-scrollHeading">
                                                <h2 style="font-size: 1.75rem;">How We Helped <span class="color-primary">Zen Crystal,</span> Increase Their <span class="color-primary">Sales </span> by <span class="color-primary">200%</span></h2>
                                            </div>
                                            <div class="testimoinal-userArea horizontal-name-img">
                                              <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/testi-5.png?format=webp&width=83" width="100%" alt=""/>
                                              <div class="testimoinal-userDetail">
                                                <p><strong>Amit Tundrikar</strong></p>
                                                <p>Digital Marketer, Zen Crystal</p>
                                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/stars.png?format=webp&width=130" width="40%" alt="">
                                              </div>
                                            </div>
                                            <p class="mt-4 quoteArea">We collaborated closely with Website Digitals to swiftly launch a new promotion and integrate additional effective persuasion techniques into our messaging strategy.</p>
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
                                        <div class="col-lg-7 col-sm-12">

                                            <div class="before-after-div">
                                                <div class="before-div" id="image-before">
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/b2b/before.png?format=webp&width=450" alt="Before"  class="image image1">
                                                    <p>Before</p>
                                                </div>
                                                <div class="after-div" id="image-after">
                                                    <p>After</p>
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/b2b/after.png?format=webp&width=450" alt="After"  class="image image2">
                                                </div>

                                                <!--<img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/before.png?format=webp&width=450" alt="Before" id="image1" class="image image1">
                                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/after.png?format=webp&width=450" alt="After" id="image2" class="image image2">-->

                                            </div>

                                            <!--<div id="w-node-d64108ec-afee-0705-4dd5-c79a61807646-1fc6a182" class="content_item-component is-glow-up">
                                                <div id="w-node-d64108ec-afee-0705-4dd5-c79a61807647-1fc6a182" data-w-id="d64108ec-afee-0705-4dd5-c79a61807647" class="image-wrapper is-glow-up _1">
                                                    <div class="image-overlay is-px-upgrade"></div>
                                                    <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/6359525e71a0980a87bb3ff6/65cec68b0143f11f615de4b6_eightx-before.png?format=webp&width=450" class="image is-glow-up" />
                                                    <div class="px-upgrade_text-wrapper is-before"><div class="text-size-medium">BEFORE</div></div>
                                                </div>
                                                <div id="w-node-d64108ec-afee-0705-4dd5-c79a6180764d-1fc6a182" data-w-id="d64108ec-afee-0705-4dd5-c79a6180764d" class="image-wrapper is-glow-up _2">
                                                    <div class="image-overlay is-glow-up"></div>
                                                    <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/6359525e71a0980a87bb3ff6/65cec68e7522f4057854fd28_eightX-after.png?format=webp&width=450" class="image is-glow-up" />
                                                    <div class="image-overlay is-px-upgrade"></div>
                                                    <div class="px-upgrade_text-wrapper"><div class="text-size-medium">AFTER</div></div>
                                                </div>
                                                <div id="w-node-d64108ec-afee-0705-4dd5-c79a61807654-1fc6a182" data-w-id="d64108ec-afee-0705-4dd5-c79a61807654" class="image-wrapper is-glow-up _3">
                                                    <div class="image-overlay is-px-upgrade"></div>
                                                    <img loading="lazy" alt="" src="https://cdn.prod.website-files.com/6359525e71a0980a87bb3ff6/65cec68b0143f11f615de4b6_eightx-before.png?format=webp&width=450" class="image is-glow-up" />
                                                    <div class="px-upgrade_text-wrapper is-before"><div class="text-size-medium">BEFORE</div></div>
                                                </div>
                                            </div>-->

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="b-two-c">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-12">
                                            <div class="section-heading horizontal-scrollHeading">
                                                <h2 style="font-size: 1.75rem;">How We Helped <span class="color-primary">Flamekast,</span> Improve Their <span class="color-primary">ROI</span> by <span class="color-primary">2x</span></h2>
                                            </div>
                                            <div class="testimoinal-userArea horizontal-name-img">
                                              <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/testi-2.png?format=webp&width=83" width="100%" alt=""/>
                                              <div class="testimoinal-userDetail">
                                                <p><strong>Sarah Lee</strong></p>
                                                <p>CEO, Flamekast</p>
                                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/stars.png?format=webp&width=130" width="40%" alt="">
                                              </div>
                                            </div>
                                            <p class="mt-4 quoteArea">The team helped us connect with our target audience in ways we never thought possible. Our brand now speaks directly to our
                                            consumers, and we've seen a tremendous boost in sales.</p>
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
                                                    <h4><span>2</span>x</h4>
                                                    <p class="mb-0">More ROI</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-sm-12">

                                            <div class="before-after-div">
                                                <div class="before-div" id="image-before">
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/b2c/before.png?format=webp&width=450" alt="Before"  class="image image1">
                                                    <p>Before</p>
                                                </div>
                                                <div class="after-div" id="image-after">
                                                    <p>After</p>
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/b2c/after.png?format=webp&width=450" alt="After"  class="image image2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="e-commerce">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-12">
                                            <div class="section-heading horizontal-scrollHeading">
                                                <h2 style="font-size: 1.75rem;">How We Helped <span class="color-primary">Sofee,</span> Increase Their <span class="color-primary">Web Traffic</span> by <span class="color-primary">3x</span></h2>
                                            </div>
                                            <div class="testimoinal-userArea horizontal-name-img">
                                              <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/testi-4.png?format=webp&width=83" width="100%" alt=""/>
                                              <div class="testimoinal-userDetail">
                                                <p><strong>David Chang</strong></p>
                                                <p>Founder, Sofee</p>
                                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/stars.png?format=webp&width=130" width="40%" alt="">
                                              </div>
                                            </div>
                                            <p class="mt-4 quoteArea">Thanks to their e-commerce strategies, our store's traffic and conversion rates have skyrocketed. Our product listings are
                                            now optimized, and customers are finding exactly what they need!</p>
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
                                        <div class="col-lg-7 col-sm-12">

                                            <div class="before-after-div">
                                                <div class="before-div" id="image-before">
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/e-commerce/before.png?format=webp&width=450" alt="Before"  class="image image1">
                                                    <p>Before</p>
                                                </div>
                                                <div class="after-div" id="image-after">
                                                    <p>After</p>
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/e-commerce/after.png?format=webp&width=450" alt="After"  class="image image2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="personal">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-12">
                                            <div class="section-heading horizontal-scrollHeading">
                                                <h2 style="font-size: 1.75rem;">How We Helped <span class="color-primary">Pride Fitness,</span> Increase Their <span class="color-primary">Sales</span> by <span class="color-primary">300%</span></h2>
                                            </div>
                                            <div class="testimoinal-userArea horizontal-name-img">
                                              <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/testi-3.png?format=webp&width=83" width="100%" alt=""/>
                                              <div class="testimoinal-userDetail">
                                                <p><strong>Liz Anderson</strong></p>
                                                <p>CEO, Pride Fitness</p>
                                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/stars.png?format=webp&width=130" width="40%" alt="">
                                              </div>
                                            </div>
                                            <p class="mt-4 quoteArea">Their personalized approach to building my brand has been transformative. I now have a clear, strong message that resonates
                                            with my audience, and my online presence has grown exponentially.</p>
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
                                        <div class="col-lg-7 col-sm-12">

                                            <div class="before-after-div">
                                                <div class="before-div" id="image-before">
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/personal-brand/before.png?format=webp&width=450" alt="Before"  class="image image1">
                                                    <p>Before</p>
                                                </div>
                                                <div class="after-div" id="image-after">
                                                    <p>After</p>
                                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/personal-brand/after.png?format=webp&width=450" alt="After"  class="image image2">
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
                    <div class="gotoNextArea" style="margin-top: 4.3rem;">
                            <h4 class="mb-0">See what else is included</h4>
                            <div class="arrow-bottom">
                                <i class="fa-solid fa-chevron-right"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                </div>
            </div>
            <div class="horizontal-scrollerItem last-scrollerItem">
                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/last/bg.jpg?format=webp&width=1440" alt="" class="bg"/>
                <div id="second-confetti"></div>
                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/last/map.png?format=webp&width=965" alt="" class="map"/>
                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/last/man.png?format=webp&width=800" alt="" class="man"/>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-heading">
                                <img src="https://websitedigitals.imglab-cdn.net/assets/images/hurry_up.png?format=webp&width=200"  alt="" class="hurryUp-img">
                                <!--<p class="horizontal-hurrytext mb-0">Hurry Up!</p>-->
                                <h2 class="mb-0">Get Your <span class="color-primary">50%</span> OFF On <br>Complete <span class="color-primary">Web Package</span></h2>
                            </div>

                            <ul class="horizontal-points mt-3 mb-3 green-tick centered-list new-offerArea">
                                <li>
                                    <span class="price-left">$999</span>
                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/green-tick.png?format=webp&width=28" alt="" class="tickImg"/>
                                    Website Design
                                </li>
                                <li>
                                    <span class="price-left">$999</span>
                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/green-tick.png?format=webp&width=28" alt="" class="tickImg"/>
                                    Website Development
                                </li>
                                <li>
                                    <span class="price-left offer-left-free"></span>
                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/green-tick.png?format=webp&width=28" alt="" class="tickImg"/>
                                    Bonuses For Website
                                    <span class="limited-text">For Limited Time</span>
                                    <img src="https://websitedigitals.imglab-cdn.net/assets/images/exclamation.png?format=webp&width=17" alt="" class="exclamation"/>
                                </li>
                            </ul>

                            <!--<ul class="horizontal-points mb-3 green-tick centered-list hp_small" style="gap: .625rem 0;">
                                <li>Custom Website Design <img style="max-width: 4.275rem" src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/499-off.webp?format=webp" alt="" width="100%" /></li>
                                <li>Complete Website Development <img style="max-width: 4.275rem" src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/499-off.webp?format=webp" alt="" width="100%" /></li>
                                <li>Exclusive Bonuses For Website <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-9/free-pic.png?format=webp" alt="" width="100%" style="max-width: 6rem" /></li>
                            </ul>-->

                            <ul class="original-discounted last-parallex-orig-disc original_discounted_small">
                                <li>Original Price<p class="mb-0" style="font-size: 3rem;"><sup style="1.3rem; top:-0.75rem !important; left:-0.125rem !important;">$</sup>1999</p> <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/vs.png?format=webp&width=50" alt="" width="100%" /></li>
                                <li>Discounted Price<span>50% OFF</span><p class="mb-0" style="font-size: 3rem;"><sup style="top:-0.75rem !important; left:-0.125rem !important;">$</sup>999</p></li>
                            </ul>

                            <div class="seats-left-div mb-2">
                                <div class="seeds-detailArea">
                                    <div class="seed-countArea">
                                        <span>
                                            <b>Limited Time Offer Ends Soon:</b>
                                            <span>Only </span>
                                            <!--<span class="position-relative">
                                                <span class="minus-oneCount">-1</span>
                                                <span class="seed-count" style="font-weight: bolder;">Only 0<span class="first">5</span><span class="last">4</span></span>
                                            </span>-->
                                            <span id="seed-style-textContainer">
                                                <b href="#" id="seed-style-text" data-replace="Spots Left for Our Premium Package">
                                                    <span class="before">05 Spots</span>
                                                    <span class="after color-primary" style="font-weight: inherit;">04 Spots</span>
                                                </b>
                                            </span>
                                            <span class="ps-2">Left!</span>
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

                            <div class="link-area hScroller-linkArea mt-3">
                                <a href="javascript:void(0);" class="primary offer-btn fiftyPerOff-btn">Claim Your Discount Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding z-index1" id="portfolio-sec">
  <x-portfolio-component/>
</section>

<!-------------------------- Scrolling Section ---------------------------->
<section class="section-padding pt-0 pt-default-mob">
  <div class="container">
    <div class="getStartedCTA">
      <div class="row">
        <div class="col-md-7">
          <div class="section-heading">
            <h2>Ready To <span class="color-primary">Transform</span> Your <span class="color-primary">Online Presence?</span></h2>
            <p>Don't miss out on this unbeatable offer.</p>
          </div>
          <div class="link-area">
            <!--<a href="#" class="offer-btn">Get Started Now - Schedule Your Free Consultation</a>-->
            <a href="#" class="offer-btn business-report-btn">Get Your Free Online Business Intelligence Report</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="ctaImageArea">
            <img src="https://websitedigitals.imglab-cdn.net/assets/images/cta/getStarted/woman.webp?format=webp&width=700" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@push('customScripts')

<script type="text/javascript" src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/js/first-confetti.js?v=1"></script>

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

        $('.trusted-logos-two').owlCarousel({
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
    })(jQuery);
</script>

<script>
    var smootherInitialized = false;
    var smoother;

    const loadScroller = () => {
        const isMobile = window.innerWidth < 700;

        if (!smootherInitialized) {
            smoother = ScrollSmoother.create({
                wrapper: "#smoothScrollArea",
                content: "#smoothScrollContent",
                smooth: !isMobile ? 1 : 2.5,
                effects: !isMobile,
                smoothTouch: !isMobile ? 1 : 0.1,
                normalizeScroll: !isMobile,
                ignoreMobileResize: true,
                onUpdate: () => {
                    if (!smootherInitialized) {
                        smootherInitialized = true;
                        document.querySelector("#smoothScrollArea").classList.add("loaded");
                    }
                }
            });
        }
    }


    const countUp = (element, start, end) => {
        let obj = { value: start };
        const duration = Math.min(Math.max(Math.abs(end - start) / 50, 1), 1.5);

        gsap.to(obj, {
            value: end,
            duration,
            ease: "power1.out",
            onUpdate: () => {
                element.innerHTML = Math.floor(obj.value);
            }
        });
    };

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

            const tabPaneID = $(this).parents(".portfolio-inner-tabs-div").find(`.inner-tab-content .tab-pane${targetPaneId}`)

            tabPaneID.addClass('active show');

        });

        $(document).on('click', ".webPortfolio-caseStudyTabs > .nav-tabs .nav-link", function(event) {
            event.preventDefault();

            var targetPaneId = $(this).attr('href');

            $(this).parents(".webPortfolio-caseStudyTabsArea").find('.webPortfolio-caseStudy-content .tab-pane').removeClass('active show');

            $(this).parents(".nav-tabs").find('.nav-link').removeClass('active');

            $(this).addClass('active');

            const tabPaneID = $(this).parents(".webPortfolio-caseStudyTabsArea").find(`.webPortfolio-caseStudy-content .tab-pane${targetPaneId}`)

            tabPaneID.find(".webPortfolio-caseStudyImage").each(function() {
                const src = $(this).data("bg");
                $(this).css("background-image", `url("${src}")`);
            });

            tabPaneID.addClass('active show');
        });

        $(document).on("click", ".caseStudyPopupTrigger",  function(e) {
            e.preventDefault();
            const dataID = $(this).attr("data-id");

            const popupClass = $(document).find(`.caseStudyPopup-${dataID}`);

            popupClass.find("img").each(function() {
                const src = $(this).data("src");
                $(this).attr("src", src);
            });

            popupClass.find(".webPortfolio-caseStudy-content .active .webPortfolio-caseStudyImage").each(function() {
                const src = $(this).data("bg");
                $(this).css("background-image", `url("${src}")`);
            });

            popupClass.addClass("show-popup");


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
                        <img class="arrow-absolute" src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=webp&width=200" width="100%" alt="Arrow">
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

        $(document).on("click", ".business-report-btn", function() {
            $(document).find(".offer-popup button[type=submit]").text("Get Your Free Online BI Report");
        })

        $(document).on("click", ".twentyPerOff-btn", function() {
            $(document).find(".offer-popup button[type=submit]").text("Avail My 20% Discount");
        })

        $(document).on("click", ".fiftyPerOff-btn", function() {
            $(document).find(".offer-popup button[type=submit]").text("Avail My 50% Discount");
        })

        $(window).on('scroll', function () {
            var sectionOffset = $('.horizontal-scrollAreaSection').offset().top;
            var scrollPosition = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (scrollPosition + (windowHeight * 0.25) >= sectionOffset) {
                $(document).find(".letsGetStated-popup").removeClass("hideOnScroll");
            } else {
                $(document).find(".letsGetStated-popup").addClass("hideOnScroll");
            }
        });

        const hideConffetii = () => {
            setTimeout(() => {
                $(document).find(".popup-area, .letsGetStated-popup").removeClass("successThank");
            }, 300)
        }


        $(document).on("click", ".popup-close, .popup-bg, .letsGetStated-toggle", function () {
            hideConffetii();
        })

        $(document).on("click", ".close-thankYou", function () {
            $(document).find(".popup-area, .popup-bg").removeClass("show-popup");
            $(document).find(".letsGetStated-popup").removeClass("show");
            hideConffetii();
        })
    });
</script>

@endpush
