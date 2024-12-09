<footer class="footer">
    <div class="footer-bgLines">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container">
      <div class="footer-top">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer-logoArea">
              <a aria-label="Website Digitals">
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images-webp/logo-white.webp" alt="" />
              </a>
              <p>
                Explore Website digital's innovative web solutions tailored to elevate
                your brand. From captivating designs to seamless
                functionality, we're here to transform your vision into
                reality.
              </p>
            </div>
            <ul class="partners-rating">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images-webp/partners/2.webp" alt="" />
                <p>Clutch 4.9 Proven Client's Score</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-4">
                <div class="footer-linksArea">
                  <h3>Company</h3>
                  <ul>
                    <li>
                      <a href="{{ route('front.portfolio') }}">
                        <span>Webfolio</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.discounted.pricing') }}">
                        <span>Pricing</span>
                      </a>
                    </li>
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
                  </ul>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="footer-linksArea footerlinksmargin">
                  <ul>
                    <li>
                      <a href="{{ env('WP_PATH') ?? '' }}/resources">
                        <span>Resources</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.privacy.policy') }}">
                        <span>Privacy Policy</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.terms.condition') }}">
                        <span>Terms &amp; Conditions</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!--<div class="col-md-4">
                <div class="footer-linksArea">
                  <h3>Services</h3>
                  <ul>
                    <li>
                      <a href="{{ route('front.content.writing') }}">
                        <span>Content Writing</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.logo.design') }}">
                        <span>Logo Design</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.video.animation') }}">
                        <span>Video Animation</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.digital.marketing') }}">
                        <span>Digital Marketing</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('front.custom.website.design') }}">
                        <span>Custom Website Design</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>-->
              
              <div class="col-md-4">
                <div class="footer-linksArea">
                  <h3>Contacts</h3>
                  <ul>
                    <li>
                      <a href="tel:(646)-222-3598 ">
                        <i class="fa fa-phone"></i>
                        <span>(646)-222-3598</span>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.google.com/maps?q=Street+06,+HA-56+USA,+Florida,+65558&z=15" target="_blank">
                        <i class="fa fa-map-marker-alt"></i>
                        <span>175 Pearl Street Dumbo, 1st, 2nd and 3rd Floor, Dumbo, NY 11201</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="footer-linksArea">
                  <h3>Inquires</h3>
                  <ul>
                    <li>
                      <a href="mailto:info@websitedigitals.com">
                        <i class="fa fa-envelope"></i>
                        <span>info@websitedigitals.com</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row">
          <div class="col-md-6">
            <p class="copyright">Copyright @ 2024 - All Rights Reserved</p>
          </div>
          <div class="col-md-6">
            <ul class="social-links">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images-webp/payment/cards.webp" alt="" />
              </li>
              <!--<li>-->
              <!--  <a href="https://instagram.com" target="_blank">-->
              <!--    <i class="fab fa-instagram" aria-hidden="true"></i>-->
              <!--  </a>-->
              <!--</li>-->
              <!--<li>-->
              <!--  <a href="https://twitter.com" target="_blank">-->
              <!--    <i class="fab fa-twitter" aria-hidden="true"></i>-->
              <!--  </a>-->
              <!--</li>-->
              <!--<li>-->
              <!--  <a href="https://facebook.com" target="_blank">-->
              <!--    <i class="fab fa-facebook-f" aria-hidden="true"></i>-->
              <!--  </a>-->
              <!--</li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <div class="popup-bg offer-popup-bg hidden-onLoad"></div>
  <div class="popup-area offer-popup hidden-onLoad" id="popupformcomplete">
    <div class="popup-close">
      <i class="fa-solid fa-xmark text-dark"></i>
    </div>
    <div class="row m-0">
      <div class="col-lg-12 col-sm-12">
        <x-solution-form />
      </div>
    </div>
  </div>

  <div class="popup-bg bookNow-popup-bg hidden-onLoad"></div>
  <div class="popup-area bookNow-popup hidden-onLoad">
    <div class="popup-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="row m-0">
      <div class="col-md-6">
        <x-popup-form />
      </div>
      <div class="col-md-6">
        <div class="bookNow-right gradient-circle rightBottom-gradient">
          <h3>
            <small class="exta-small"
              >Let Your <span>Brand</span> Speak</small
            >
            FOR ITSELF WITH OUR
            <small><span>Custom Website Development</span></small>
          </h3>
          <p>
            We excel in transforming your digital presence with our top-notch custom website development services.
            Our experienced team of developers and designers work tirelessly to create visually stunning and highly 
            functional websites to meet your specific business needs. 
          
          </p>

          <ul class="partnersUl">
            <!--<li>-->
            <!--  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/1.png" alt="" />-->
            <!--</li>-->
            <li>
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/3.png" alt="" />
            </li>
            <li>
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/2.png" alt="" />
            </li>
          </ul>
          <ul class="bookNow-contactList">
            <li>
              <a href="tel:(646)-222-3598">
                <i class="fa fa-phone"></i>
                <span>(646)-222-3598</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-map-marker-alt"></i>
                <span>175 Pearl Street Dumbo, 1st, 2nd and 3rd Floor, Dumbo, NY 11201</span>
              </a>
            </li>
            <li>
              <a href="mailto:info@websitedigitals.com">
                <i class="fa fa-envelope"></i>
                <span>info@websitedigitals.com</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>