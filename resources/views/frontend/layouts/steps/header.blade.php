<header class="header step-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-2 col-6">
          <a href="{{ route('front.home') }}" class="logo" aria-label="Website Digitals">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo-brief.png" id="brief_logo" alt="" />
          </a>
        </div>
        <div class="col-md-10 col-6">
          <nav>
            <ul class="menu stepMenuArea">
              {{-- <a href="javascript:void(0)" class="chatEnd">End Chat & Continue</a> --}}
              <li>
                <a href="tel:(646)-222-3598" class="" id="brief_header_phone">
                  <i class="fa fa-phone"></i>
                  <span>(646)-222-3598</span>
                </a>
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
        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/logo.png" alt="" />
      </a>
    </div>
    <nav>
      <ul class="mobileMenu">
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
      </ul>
      <ul class="mobileMenu">
        <li class="btn-li">
          <div class="link-area">
            <button type="button" class="book-your-call">
              Book Your Call
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </li>
      </ul>
    </nav>
  </div>

  <div class="step-progress-area">
    <div class="step-progressBar"></div>
  </div>
