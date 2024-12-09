<style>
    .dark-section .single-testimonial {
        color: var(--text-color);
    }
</style>

<section class="section-padding dark-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>What Our Clients Says</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <ul class="testimonials-statsUl">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/stats/1-w.png" alt="" />
                <div class="testimonials-stats-details">
                  <h3>4.8/5 Star Rating</h3>
                  <p>Exceptional service and results.</p>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/stats/2-w.png" alt="" />
                <div class="testimonials-stats-details">
                  <h3>24/7 Design Support</h3>
                  <p>We're here round-the-clock.</p>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/stats/3-w.png" alt="" />
                <div class="testimonials-stats-details">
                  <h3>417,789</h3>
                  <p>Customers have trusted us.</p>
                </div>
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/stats/4-w.png" alt="" />
                <div class="testimonials-stats-details">
                  <h3>634+ Projects</h3>
                  <p>Over six hundred projects were completed.</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="testimonial-carousel owl-carousel">
              <div class="item">
                <div class="single-testimonial">
                  <div class="testimonial-imageArea">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/1.jpg" alt="" />
                  </div>
                  <div class="testimonial-detail">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <p>
                     The redesign of our website was exceptional; the new look is sleek and modern. Highly recommended!
                    </p>
                    <div class="testimoinal-userArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/client/1.webp"
                        alt=""
                      />
                      <div class="testimoinal-userDetail">
                        <p><strong>Amanda Kirsten</strong></p>
                        <p>CEO</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-testimonial">
                  <div class="testimonial-imageArea">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/1.webp" alt="" />
                  </div>
                  <div class="testimonial-detail">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <p>
                      Outstanding service! The design team was responsive and delivered a website that perfectly fits our brand.
                    </p>
                    <div class="testimoinal-userArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/client/2.webp"
                        alt=""
                      />
                      <div class="testimoinal-userDetail">
                        <p><strong>Tanya Shawn</strong></p>
                        <p>Startup Owner</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-testimonial">
                  <div class="testimonial-imageArea">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/3.webp" alt="" />
                  </div>
                  <div class="testimonial-detail">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <p>
                      Our website now attracts more visitors thanks to the stunning redesign. Excellent work!
                    </p>
                    <div class="testimoinal-userArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/client/3.webp"
                        alt=""
                      />
                      <div class="testimoinal-userDetail">
                        <p><strong>Carlos Leanard</strong></p>
                        <p>Brand Manager</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-testimonial">
                  <div class="testimonial-imageArea">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/2.jpg" alt="" />
                  </div>
                  <div class="testimonial-detail">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <p>
                     Professional and efficient! The design exceeded our expectations, enhancing both look and functionality.
                    </p>
                    <div class="testimoinal-userArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/testimonials/client/4.webp"
                        alt=""
                      />
                      <div class="testimoinal-userDetail">
                        <p><strong>Amit Tundrikar</strong></p>
                        <p>Digital Marketer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>