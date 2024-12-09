@extends('frontend.layouts.master')
@push('customStyles')

@endpush
@section('container')        
<section class="inner-banner gradient-circle leftCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-7">
            <div class="inner-bannerHeading">
              <h1>Affordable Logo Design Services by Website Digitals</h1>
              <p>At Website Digitals, we specialize in creating unique and impactful logos that capture the essence of your brand. </p>
              <!--  <p>At Website Digitals, we specialize in creating unique and impactful logos that capture the essence of your brand. A well-designed logo is the cornerstone of your brand -->
              <!--identity, visually representing your business and its values. Our expert logo designers are committed to crafting logos that look great and resonate with your target audience, -->
              <!--providing comprehensive business logo design packages.</p>-->
            </div>
            <form class="banner-form" action="{{ route('logo.brief') }}" method="GET">
              @csrf
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/pencil.png" alt="" />
              <input type="text" placeholder="Enter Your Business Name" name="cname" required id="logo-brief-cname" />
              <button type="submit">
                Let's Build
              </button>
            </form>
          </div>
          <div class="col-lg-6 col-md-5">
            <div class="logoDesign-slidersArea">
              <div class="logoDesign-sliders first-slider">
                <ul>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/1.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/2.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/3.webp"
                      alt=""
                    />
                  </li>
                
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/5.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/6.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/7.webp"
                      alt=""
                    />
                  </li>
                 
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/9.webp"
                      alt=""
                    />
                  </li>
                 
                 
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/13.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/1.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/2.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/3.webp"
                      alt=""
                    />
                  </li>
                 
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/5.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/6.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/7.webp"
                      alt=""
                    />
                  </li>
               
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/9.webp"
                      alt=""
                    />
                  </li>
                 
                 
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/13.webp"
                      alt=""
                    />
                  </li>
                </ul>
              </div>
              <div class="logoDesign-sliders first-slider">
                <ul>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/14.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/15.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/16.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/17.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/18.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/19.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/20.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/21.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/22.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/23.webp?1"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/24.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/25.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/14.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/15.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/16.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/17.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/18.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/19.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/20.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/21.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/22.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/23.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/24.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/25.webp"
                      alt=""
                    />
                  </li>
                </ul>
              </div>
              <div class="logoDesign-sliders first-slider">
                <ul>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/26.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/27.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/28.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/29.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/30.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/31.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/32.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/33.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/34.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/35.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/36.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/37.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/38.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/26.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/27.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/28.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/29.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/30.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/31.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/32.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/33.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/34.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/35.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/36.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/37.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/38.webp"
                      alt=""
                    />
                  </li>
                </ul>
              </div>
              <div class="logoDesign-sliders first-slider">
                <ul>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/39.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/40.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/41.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/42.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/43.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/44.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/45.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/46.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/47.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/48.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/49.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/50.webp"
                      alt=""
                    />
                  </li>
                     <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/39.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/40.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/41.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/42.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/43.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/44.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/45.webp"
                      alt=""
                    />
                  </li>
                  <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/46.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/47.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/48.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/49.webp"
                      alt=""
                    />
                  </li>
                   <li>
                    <img
                      src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/logo-design/new/50.webp"
                      alt=""
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Explore Our Diverse Logo Design Options</h2>
            </div>
          </div>
          <div class="col-12">
            <div class="basic-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#emblem-logo-type"
                  >
                    <span>Emblem Logo</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#wordmark-logo-type"
                  >
                    <span>WordMark Logo</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#abstract-logo-type"
                  >
                    <span>Abstract Logo</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#illustrative-logo-type"
                  >
                    <span>Illustrative Logo</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="emblem-logo-type">
                <div class="row align-items-center rowGap4 col-reverse-mob">
                  <div class="col-md-6">
                    <div class="section-heading">
                      <h2>Emblem Logo</h2>
                      <!--<h4>Logos fused with fonts and images</h4>-->
                      <p>Our emblem logos are meticulously crafted with intricate details, making them ideal for brands that want to convey a sense of tradition and authority. These 
                      logos blend classic design elements with a refined aesthetic, ensuring they stand out and leave a lasting impression. Whether you're establishing a new brand or 
                      looking to enhance an existing one, our emblem logos offer a timeless and distinguished appeal that speaks to quality and reliability.</p>
                    </div>

                    <div class="link-area">
                      <a href="#" class="book-your-call">
                        Get Started Now
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="boxes-bgArea leftBottom logo-design-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/logo-design/1.png"
                        class="width-100"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="wordmark-logo-type">
                <div class="row align-items-center rowGap4 col-reverse-mob">
                  <div class="col-md-6">
                    <div class="section-heading">
                      <h2>Wood Mark Logo</h2>
                      <p>Our wordmark logos combine simplicity and sophistication, making them the perfect choice for businesses that desire a clean and straightforward design. We craft 
                      these logos to convey your brand's message with clarity and elegance, ensuring a professional and polished look. Whether you're a startup aiming for a modern, 
                      minimalist style or an established company looking to refresh your brand identity, our wordmark logos provide a timeless and versatile solution. Embrace the power 
                      of simplicity with a design that speaks volumes without saying too much.</p>
                    </div>

                    <div class="link-area">
                      <a href="#" class="book-your-call">
                        Get Started Now
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="boxes-bgArea leftBottom logo-design-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/logo-design/2.png"
                        class="width-100"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="abstract-logo-type">
                <div class="row align-items-center rowGap4 col-reverse-mob">
                  <div class="col-md-6">
                    <div class="section-heading">
                      <h2>Abstract Logo</h2>
                      <p>For brands that value creativity, our abstract logos provide a distinctive and modern aesthetic that sets them apart. These logos utilize innovative shapes, 
                      colors, and patterns to create a strong brand identity, making them visually striking and memorable. Our approach ensures that each logo is a work of Art, reflecting 
                      your brand's unique personality and vision. Whether you're looking to make a bold statement or convey a sense of sophistication and originality, our abstract logos 
                      are the perfect solution to elevate your brand's image and leave a lasting impression on your audience.</p>
                    </div>

                    <div class="link-area">
                      <a href="#" class="book-your-call">
                        Get Started Now
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="boxes-bgArea leftBottom logo-design-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/logo-design/3.png"
                        class="width-100"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="illustrative-logo-type">
                <div class="row align-items-center rowGap4 col-reverse-mob">
                  <div class="col-md-6">
                    <div class="section-heading">
                      <h2>Illustrative Logo</h2>
                      <p>We meticulously craft illustrative logos for brands seeking designs beyond simplicity and embracing detail and narrative. We thoughtfully design each logo to tell 
                      a story, reflecting your brand's unique identity and values. We incorporate intricate elements and imaginative concepts to create a visual representation that 
                      captures the essence of your brand's journey, vision, and message. These logos serve as a distinctive mark and engage your audience on a deeper level, making your 
                      brand memorable and impactful. Whether you aim to convey a sense of tradition, innovation, or creativity, our illustrative logos are the perfect choice to bring your 
                      brand's story to life through compelling and artful design.</p>
                    </div>

                    <div class="link-area">
                      <a href="#" class="book-your-call">
                        Get Started Now
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="boxes-bgArea leftBottom logo-design-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/logo-design/4.png"
                        class="width-100"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="scroller-section gray-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="scroller-sticky">
              <div class="section-heading">
                <h2>Why Website Digitals? Because Your Brand Deserves the Best</h2>
                <!--<p>Choosing WebDigi for your logo design needs comes with numerous advantages:</p>-->
              </div>
              <ul class="scroller-list">
                <li>
                  <a href="#web-firstScroller" class="active">
                    <span>01</span>
                    <p>Custom Designs</p>
                  </a>
                </li>
                <li>
                  <a href="#web-secondScroller">
                    <span>02</span>
                    <p>Experienced Designers</p>
                  </a>
                </li>
                <li>
                  <a href="#web-thirdScroller">
                    <span>03</span>
                    <p>Client-Centric Approach</p>
                  </a>
                </li>
                <li>
                  <a href="#web-forthScroller">
                    <span>04</span>
                    <p>Fast Turnaround</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="scroller-item" id="web-firstScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/logo/1.png" alt="" />
              <h3>
                <span>01</span>
                <strong>Custom Designs</strong>
              </h3>
              <p>We uniquely craft every logo to reflect your brand's identity and values. We ensure originality and uniqueness by never using templates or pre-made designs. We offer 
              custom designs tailored to your brand's identity, experienced designers, a collaborative approach, fast turnaround, versatile logos, competitive pricing, and comprehensive 
              support, highlighting our creative agency logo designer expertise.</p>
            </div>
            <div class="scroller-item" id="web-secondScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/logo/2.png" alt="" />
              <h3>
                <span>02</span>
                <strong>Experienced Designers</strong>
              </h3>
              <p>Our team comprises industry professionals with years of experience in graphic design and branding, ensuring high-quality results.</p>
            </div>
            <div class="scroller-item" id="web-thirdScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/logo/3.png" alt="" />
              <h3>
                <span>03</span>
                <strong>Client-Centric Approach</strong>
              </h3>
              <p>We prioritize your satisfaction through a collaborative process, keeping you involved and informed at every stage. We offer custom logo design services in the USA.</p>
            </div>
            <div class="scroller-item" id="web-forthScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/logo/4.png" alt="" />
              <h3>
                <span>04</span>
                <strong>Fast Turnaround</strong>
              </h3>
              <p>Our efficient processes allow us to deliver high-quality designs within a short timeframe, understand the importance of timely delivery, and effectively manage the cost of 
              professional logo design services.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Creating Logos is our Artistry, and We are the Experts</h2>
              <p>Every business needs a unique logo to establish its identity and create a memorable brand image. Whether you prefer a Wordmark, Abstract, Illustrative, or Emblem logo,
              we ensure each design is crafted with exceptional professionalism and creativity, reflecting your brand's essence and leaving a lasting impression.</p>
            </div>
          </div>
          <div class="col-12">
            <div class="basic-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#all-logo-portfolio"
                  >
                    <span>All</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#logo-design-portfolio"
                  >
                    <span>Logo Design</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#branding-portfolio"
                  >
                    <span>Branding</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="tab-content">
            <div class="tab-pane fade" id="all-logo-portfolio">
              <div class="row rowGap2">
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/7.webp" data-fancybox="">
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/7.webp" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/9.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/9.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/3.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/3.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/5.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/7.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/7.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/8.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/10.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/10.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/11.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/12.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/12.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/13.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/13.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/15.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/15.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/16.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/16.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/17.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/17.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/18.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/18.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/19.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/19.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/20.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/21.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                       <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/20.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/20.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                       <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/22.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/22.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                       <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/1.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/1.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/5.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/6.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/4.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
               
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
            
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/12.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/12.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/10.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/10.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
              
              
              </div>
               
            </div>
            
            <div class="tab-pane fade active show" id="logo-design-portfolio">
              <div class="row rowGap2">
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/1.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/1.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/3.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/3.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/5.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/7.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/7.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/8.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/9.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/9.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/10.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/10.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/11.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/12.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/12.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/13.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/13.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/15.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/15.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/16.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/16.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/17.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/17.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/18.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/18.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/19.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/19.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/20.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/21.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/22.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/23.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="tab-pane fade" id="branding-portfolio">
              <div class="row rowGap2">
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/2.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}//assets/images/portfolio/branding/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/3.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/3.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/1.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/1.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/5.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/6.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/4.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/7.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/7.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/9.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/9.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/12.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/12.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/10.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/10.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- Momentum Section ---------------------------->
    <section class="section-padding dark-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Crafting Your Brand Identity: The Website Digitals Logo Design Process</h2>
              <p>We believe in a collaborative and transparent design process at Website Digitals, positioning us as a top logo design agency. Here's how we work:</p>
            </div>
          </div>
          <div class="col-12">
            <ul class="process-area" id="process-area">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo-design-page/process/icons_Consultation_and_Research.svg" alt="" />
                <div class="process-detail">
                  <h3>Initial Consultation</h3>
                  <p>Understanding your business, goals, and design preferences.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 185 41"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c0,16.8,12.1,22.7,26.5,27.5C48.5,36.2,72.2,34,93,34c29.8,0,59.3-2,89-2"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M183,31c-3-2-6-3.8-9-6"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M169,39c4.3-2.2,8.7-3.9,12-8"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo-design-page/process/icons_Concept_Development.svg" alt="" />
                <div class="process-detail">
                  <h3>Research and Brainstorming</h3>
                  <p>Gathering insights and inspiration to make your logo stand out.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 187 89"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c37.9,0.9,75.9,2.3,113.9,3.8c15.7,0.6,36.6,0.4,50.4,8.9c14.5,8.9,21,29.1,18.2,45c-1.2,6.6-4.3,12.2-7.6,17.9c-1.2,2-3.2,6.6-5,7.4"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,76v11"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,87c3.4-0.7,6.5-1,10-1"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo-design-page/process/icons_Design_Execution.svg" alt="" />
                <div class="process-detail">
                  <h3>Concept Development</h3>
                  <p>Creating multiple design concepts based on your feedback.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 85 96"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M82.5,1.5c0,16.9,1,34,1,50.6c0,7.1-1.6,14.2-2,21.4C81.1,80.2,74,84,68.4,85.9C55,90.7,39,86.2,25.5,85.5c-7.5-0.4-14.5-2-22-2"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M1.5,83.5c1.2,3.5,5.7,7.8,8,11"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M9.5,75.5c0,3.6-5.6,6.3-8,8"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo-design-page/process/icons_Client_Review.svg" alt="" />
                <div class="process-detail">
                  <h3>Design and Revision</h3>
                  <p>Refining your chosen concept through revisions.</p>
                  <div class="process-text"></div>
                </div>
                <div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 187 89"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c37.9,0.9,75.9,2.3,113.9,3.8c15.7,0.6,36.6,0.4,50.4,8.9c14.5,8.9,21,29.1,18.2,45c-1.2,6.6-4.3,12.2-7.6,17.9c-1.2,2-3.2,6.6-5,7.4"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,76v11"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M170,87c3.4-0.7,6.5-1,10-1"
                    />
                  </svg>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo-design-page/process/icons_Finalization.svg" alt="" />
                <div class="process-detail">
                  <h3>Final Delivery and Support</h3>
                  <p>Deliver the logo in various formats and provide ongoing support.</p>
                  <div class="process-text"></div>
                </div>
                <!--<div class="absoluteImage fillSVG">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 185 41"
                    xml:space="preserve"
                  >
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M2,2c0,16.8,12.1,22.7,26.5,27.5C48.5,36.2,72.2,34,93,34c29.8,0,59.3-2,89-2"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M183,31c-3-2-6-3.8-9-6"
                    />
                    <path
                      fill="none"
                      stroke="#00b0fb"
                      stroke-width="3"
                      stroke-linecap="round"
                      d="M169,39c4.3-2.2,8.7-3.9,12-8"
                    />
                  </svg>
                </div>-->
              </li>
              <!--<li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo-design-page/process/icons_Brand_Integration.svg" alt="" />
                <div class="process-detail">
                  <h3>Brand Integration</h3>
                  <p>Guidance on using the logo consistently across platforms.</p>
                  <div class="process-text"></div>
                </div>
              </li>-->
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-------------------------- Testimonial Section ---------------------------->
    <x-testimonial-section />

    <!-------------------------- FAQs Section ---------------------------->
    <section class="section-padding gradient-circle rightCenter-gradient">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Frequently Asked Questions</h2>
            </div>
          </div>
          <div class="col-lg-11">
            <div class="accordion faq-accordion" id="faq-accordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-1">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-1"
                    aria-expanded="true"
                    aria-controls="faq-1"
                  >What makes your logo design services unique?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion">
                  <div class="accordion-body">We offer custom designs tailored to your brand's identity, experienced designers, a collaborative approach, fast turnaround, versatile 
                  logos, competitive pricing, and comprehensive support.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-2">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-2"
                    aria-expanded="false"
                    aria-controls="faq-2"
                  >How long does the logo design process take?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Typically, the process takes 1-2 days, depending on the package selected and the number of revisions required, showcasing us as the USA's 
                  best logo design company.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-3">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-3"
                    aria-expanded="false"
                    aria-controls="faq-3"
                  >What file formats will I receive?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">You will receive your logo in various formats, including PNG, JPEG, PDF, and vector files (AI, EPS) suitable for digital and print use.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-4">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-4"
                    aria-expanded="false"
                    aria-controls="faq-4"
                  >Can I request changes after the final delivery?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Yes, we offer ongoing support and can assist with any modifications or additional design needs, affirming our position as a leading custom 
                  logo design company in the USA.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-5">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-5"
                    aria-expanded="false"
                    aria-controls="faq-5"
                  >Do you provide services as a custom logo design company near me?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Yes, we offer our services nationwide, ensuring businesses across the USA benefit from our expertise. Whether you are searching for a custom 
                  logo design company near me or anywhere in the USA, Website Digitals is here to help.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-------------------------- Contact Section ---------------------------->
    <x-contact-section />
    
    <!-------------------------- Blog Section ---------------------------->
    <x-blog-section />

@push('customScripts')



@endpush

@endsection