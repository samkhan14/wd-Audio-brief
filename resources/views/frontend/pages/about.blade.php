@extends('frontend.layouts.master')
@push('customStyles')

@endpush
@section('container')
<section class="inner-banner gradient-circle leftCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="inner-bannerHeading">
              <h1>About Us</h1>
              <p>Are you looking for professional website building services to boost your online presence? At WebDigi, we're your dedicated team.</p>
              <ul>
                <li>Beautiful, responsive designs</li>
                <li>Highly secured coding</li>
                <li>Outperforming branding services</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="{{ route('brief') }}">Get Started Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/about/banner/circle.png"
                class="circle-img rotation-animation"
                alt=""
              />
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/about/banner/banner-img.webp"
                class="banner-img"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- ROI Section ---------------------------->
    <section class="section-padding pb-half overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="section-heading">
              <h2>Improve Your ROI With Scalable PPC Marketing</h2>
              <p>Utilize scalable PPC marketing solutions to increase your return on investment. Our tailored PPC strategies are designed to drive targeted traffic to your website, 
              increase conversions, and maximize your ROI.</p>
            </div>
            <ul class="partnersUl">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/1.png" alt="" />
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/3.png" alt="" />
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/2.png" alt="" />
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="progress-containerArea">
              <div
                class="progress-container"
                data-countTo="99"
                style="--percent: 0%"
              >
                <h3>Clickthrough Rate</h3>
                <div class="progress-area primary">
                  <div class="progress-inner">
                    <div class="progress-fill"></div>
                  </div>
                  <div class="progress-count"><span class="count"></span>%</div>
                </div>
              </div>
              <div
                class="progress-container"
                data-countTo="77"
                style="--percent: 0%"
              >
                <h3>The Quality Score</h3>
                <div class="progress-area primary-light">
                  <div class="progress-inner">
                    <div class="progress-fill"></div>
                  </div>
                  <div class="progress-count"><span class="count"></span>%</div>
                </div>
              </div>
              <div
                class="progress-container"
                data-countTo="89"
                style="--percent: 0%"
              >
                <h3>The Impression Share</h3>
                <div class="progress-area primary-extraLight">
                  <div class="progress-inner">
                    <div class="progress-fill"></div>
                  </div>
                  <div class="progress-count"><span class="count"></span>%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <div class="top-one">
              <p>Top 1%</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding gradient-circle leftCenter-gradient">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Why Choose Us?</h2>
              <p>At WebDigi, we're committed to turning your WordPress website dreams into reality. Our team of WordPress enthusiasts is dedicated to providing top-notch custom 
              development services that promote your online presence.</p>
            </div>
          </div>
        </div>
        <div class="row rowGap4">
          <div class="col-md-4">
            <div class="single-whyChooseUs">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/why-choose-us/1.png" alt="" />
              <h3>Years Of Experience</h3>
              <p>With years of experience, we have polished our skills to provide exceptional services that meet your needs and exceed your expectations.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-whyChooseUs">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/why-choose-us/2.png" alt="" />
              <h3>Full-Service Studio</h3>
              <p>We are a full-service studio offering comprehensive solutions from development to marketing. We ensure all your digital needs are met under one roof.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-whyChooseUs">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/why-choose-us/3.png" alt="" />
              <h3>Quality Work</h3>
              <p>Our focus on quality ensures that every project we undertake meets the highest standards of excellence and professionalism.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-whyChooseUs">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/why-choose-us/4.png" alt="" />
              <h3>Affordable</h3>
              <p>We believe in delivering high-quality services at affordable prices, ensuring that you get the best value for your investment.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-whyChooseUs">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/why-choose-us/5.png" alt="" />
              <h3>Quick Turnaround Time</h3>
              <p>Our efficient processes and dedicated team ensure quick turnaround times without compromising on quality.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-whyChooseUs">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/why-choose-us/6.png" alt="" />
              <h3>Latest Technology</h3>
              <p>We leverage the latest technology to deliver innovative solutions that keep you ahead of the competition.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding dark-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Meet Dedicated Team</h2>
              <p>Our team is composed of passionate professionals who are experts in their fields. We work together to bring your vision to life with creativity and technical expertise.</p>
            </div>
          </div>
          <div class="col-12">
            <div class="teams-carousel owl-carousel">
              <div class="item">
                <div class="single-team">
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/team/1.webp" alt="" />
                  <div class="team-content">
                    <h3>Robert Turner</h3>
                    <p>CSO</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-team">
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/team/2.webp" alt="" />
                  <div class="team-content">
                    <h3>Emily Davis</h3>
                    <p>CHRO</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-team">
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/team/3.webp" alt="" />
                  <div class="team-content">
                    <h3>David Sullivan</h3>
                    <p>CMO</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-team">
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/team/4.webp" alt="" />
                  <div class="team-content">
                    <h3>John Maxwell</h3>
                    <p>CQO</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-team">
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/team/5.webp" alt="" />
                  <div class="team-content">
                    <h3>Sarah Anderson</h3>
                    <p>CEO</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-team">
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/team/6.webp" alt="" />
                  <div class="team-content">
                    <h3>James Mitchell</h3>
                    <p>HOD</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single-team">
                  <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/team/7.webp" alt="" />
                  <div class="team-content">
                    <h3>Jennifer Roberts</h3>
                    <p>COO</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding primary-extra-light-bg">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/about/chat.webp" alt="" class="width-100" />
          </div>
          <div class="col-md-6">
            <div class="section-heading">
              <h2>24/7 World-Class Support</h2>
              <p>At WebDigi, we provide 24/7 support to ensure that your website is always running smoothly. Our dedicated team is here to assist you with any issues at any time.</p>
              <ul>
                <li>Round-the-clock assistance</li>
                <li>Prompt resolution of issues</li>
                <li>Dedicated support team</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- Scrolling Section ---------------------------->
    <x-scrolling-section />
    
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
                  >What services does Website Digitals offer?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We provide custom web design and development, eCommerce solutions, website marketing, web app design, and WordPress development.
                  </div>
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
                  >How long has Website Digitals been in business?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We have over ten years of experience in the digital services industry.
                  </div>
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
                  >What makes Website Digitals different from other web design companies?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our personalized approach, expertise, and focus on measurable results set us apart from the competition.
                  </div>
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
                  >Do you offer support after the website is launched?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We provide continuous support and upkeep to optimize and protect your website.
                  </div>
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
                  >Can Website Digitals help improve my website's SEO?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our website marketing services include strategies to enhance your SEO and online visibility.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-6">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-6"
                    aria-expanded="false"
                    aria-controls="faq-6"
                  >What industries do you specialize in?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   We tailor our services to meet each client's specific needs, working with a wide range of industries.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-7">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-7"
                    aria-expanded="false"
                    aria-controls="faq-7"
                  >How do I get started with Website Digitals?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   You can contact us through our website to discuss your project and get a customized proposal.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-8">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-8"
                    aria-expanded="false"
                    aria-controls="faq-8"
                  >What is your process for custom web development?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Our process includes discovery, design, development, testing, and deployment, ensuring a seamless experience from start to finish.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-9">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-9"
                    aria-expanded="false"
                    aria-controls="faq-9"
                  >Do you offer eCommerce solutions for small businesses?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Yes, we provide scalable eCommerce solutions suitable for businesses of all sizes.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-10">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-10"
                    aria-expanded="false"
                    aria-controls="faq-10"
                  >How do you ensure the security of the websites you develop?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   We implement robust security measures, regular updates, and continuous monitoring to keep your website safe and secure.
                  </div>
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