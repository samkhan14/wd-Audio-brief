@extends('frontend.layouts.master')
@push('customStyles')
<style>
  .basic-inputArea {
      position: relative;
  }
  
  .basic-inputArea > select:has(+ .nice-select) {
      display: block !important;
      position: absolute;
      pointer-events: none;
      z-index: -1;
      opacity: 0;
  }
</style>
@endpush
@section('container')
<section class="inner-banner">
      <div class="container">
        <div class="row rowGap4 col-reverse-mob">
          <div class="col-md-6">
            <form method="post" action="" class="contactPage-formArea" id="contactformsec">
              @csrf
              <div class="row">
                <div class="col-12">
                  <h3>Fill Out The Form And We'll Get in Touch With You Shortly.</h3>
                </div>
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <input type="text" placeholder="First Name" name="fname" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <input type="text" placeholder="Last Name" name="lname" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <input type="email" placeholder="Business Email" name="businessemail" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <input type="text" class="phone-number" name="phone" required />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="basic-inputArea">
                    <input type="text" placeholder="Company Name" name="companyname" required />
                  </div>
                </div>
                <div class="col-12">
                  <div class="basic-inputArea">
                    <select name="service" required>
                      <option selected disabled hidden value="">Select Your Service</option>
                      <option value="Custom Web Design">Custom Web Design</option>
                      <option value="Website Redesign">Website Redesign</option>
                      <option value="Wordpress Web Design">Wordpress Web Design</option>
                      <option value="Shopify Web Design">Shopify Web Design</option>
                      <option value="Magento Web Design">Magento Web Design</option>
                      <option value="Drupal Web Design">Drupal Web Design</option>
                      <option value="Joomla Web Design">Joomla Web Design</option>
                      <option value="Branding">Branding</option>
                      <option value="Digital Marketing">Digital Marketing</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="basic-inputArea">
                    <textarea placeholder="Your Project Details" name="message"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="basic-inputArea">
                    <button type="submit" name="submit">Submit Your Request</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="contactsecnpagealert mt-3">
                <div class="alert alert-success" role="alert"><p class="mb-0">Congratulations!!! Your form has been submitted.</p></div>
                <div class="alert alert-danger" role="alert"><p class="mb-0">Error submitting form!!!</p></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contactPage-heading">
              <h1>Talk To An Expert</h1>
              <p>
               At Website Digitals, we are committed to providing expert guidance and personalized solutions for all your digital needs. 
               Whether you have questions about our services, need assistance with your project, or seek professional advice, our 
               team is here to help. Contact us through our contact form, email, or phone, and let us collaborate to bring your 
               vision to life. Your success is our priority, and we look forward to working with you to achieve your goals.
              </p>
              <ul class="contactPage-list">
                <li>
                  <i class="fa fa-phone"></i>
                  <div class="contactPage-listDetail">
                    <h2>Book a Call</h2>
                    <p>
                     (646)-222-3598
                    </p>
                  </div>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <div class="contactPage-listDetail">
                    <h2>Email Us</h2>
                    <p>
                      info@websitedigitals.com
                    </p>
                  </div>
                </li>
                <li>
                  <i class="fa fa-map-marker-alt"></i>
                  <div class="contactPage-listDetail">
                    <h2>Location</h2>
                    <p>175 Pearl Street Dumbo, 1st, 2nd and 3rd Floor, Dumbo, NY 11201</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="afterBanner-partnersSection dark-section">
      <div class="container">
        <ul class="afterBanner-partners">
          <li>
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/white/1.webp" alt="" />
          </li>
          <li>
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/white/2.webp" alt="" />
          </li>
          <li>
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/white/3.webp" alt="" />
          </li>
          <li>
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/white/4.webp" alt="" />
          </li>
          <li>
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/white/5.webp" alt="" />
          </li>
        </ul>
      </div>
    </section>

    <section class="section-padding primary-extra-light-bg">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6">
            <div class="section-heading pb-half">
              <h2>We Delivered Globally</h2>
              <p>Years of dedication and experience helped us serve:</p>
            </div>
            <div class="row rowGap2 counter-container">
              <div class="col-6">
                <div class="contact-featureArea">
                  <div class="contact-featureImage">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/contact/feature/1.png" alt="" />
                  </div>
                  <div class="contact-featureContent">
                    <h3>
                      <span class="simple-counter" data-countTo="100">0</span>+
                    </h3>
                    <p>Million Words</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="contact-featureArea">
                  <div class="contact-featureImage">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/contact/feature/2.png" alt="" />
                  </div>
                  <div class="contact-featureContent">
                    <h3>
                      <span class="simple-counter" data-countTo="100">0</span>K+
                    </h3>
                    <p>Content Delivered</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="contact-featureArea">
                  <div class="contact-featureImage">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/contact/feature/3.png" alt="" />
                  </div>
                  <div class="contact-featureContent">
                    <h3>
                      <span class="simple-counter" data-countTo="15">0</span>+
                    </h3>
                    <p>Countries Served</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="contact-featureArea">
                  <div class="contact-featureImage">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/contact/feature/4.png" alt="" />
                  </div>
                  <div class="contact-featureContent">
                    <h3>
                      <span class="simple-counter" data-countTo="100">0</span>+
                    </h3>
                    <p>Clients Catered</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/contact/map.png" alt="" class="mapImage" />
          </div>
        </div>
      </div>
    </section>

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
                  >How can I contact Website Digitals?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    You can reach us via our contact form, email, or phone. All details are available on our Contact Us page.
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
                  >What services does Website Digitals offer?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We provide a range of digital solutions including web development, digital marketing, SEO, and more.
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
                  >What is the response time for inquiries?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    During the business day, we attempt to reply to all queries within 24 hours.
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
                  >Can I schedule a consultation with your experts?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, you can schedule a consultation by filling out the form on our Contact Us page.
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
                  >Where is Website Digitals located?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our office location and mailing address can be found on the Contact Us page.
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
                  >Do you offer customer support after project completion?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, we give continuous maintenance and support to all completed projects.
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
                  >What details should I provide in my inquiry?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Please include your name, contact information, and a brief description of your needs or questions.
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
                  >How do I request a quote for a project?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    You can request a quote by contacting us through the form on our Contact Us page, providing details about your project.
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
                  >Is there a phone number I can call for immediate assistance?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, our contact number is listed on the Contact Us page for immediate assistance during business hours.
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
                  >What are your business hours?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our office is open from 9 AM to 6 PM, Monday to Friday. Kindly go to our Contact Us page for additional details.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-------------------------- Blog Section ---------------------------->
    <x-blog-section />

      

@push('customScripts')

@endpush

@endsection