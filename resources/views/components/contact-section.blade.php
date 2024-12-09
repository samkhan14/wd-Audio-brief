<style>
    .contactPage-listDetail 
    {
        max-width: 16rem;
    }
</style>

    <section class="section-padding split-section innerPage-contactSection gradient-circle light-gradient rightCenter-gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-6 position-relative">
            <div class="lightBlue-area">
              <div class="section-heading">
                <p class="topHeading">Get In touch</p>
                <h2>Let's Build Together</h2>
                <p>
                  At Website Digitals, we are committed to providing expert
                  guidance and personalized solutions for all your digital
                  needs. Whether you have questions about our services, need
                  assistance or seek professional advice, our
                  team is here to help.
                </p>
              </div>
              <ul class="contactPage-list">
                <li>
                  <i class="fa fa-phone"></i>
                  <div class="contactPage-listDetail">
                    <h2>Phone Number</h2>
                    <a href="tel:(646)-222-3598">(646)-222-3598</a>
                  </div>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <div class="contactPage-listDetail">
                    <h2>Email</h2>
                    <a href="mailto:info@websitedigitals.com">info@websitedigitals.com</a>
                  </div>
                </li>
                <li>
                  <i class="fa fa-map-marker-alt"></i>
                  <div class="contactPage-listDetail">
                    <h2>Address</h2>
                    <p>175 Pearl Street Dumbo, 1st, 2nd and 3rd Floor, Dumbo, NY 11201</p>
                  </div>
                </li>
              </ul>
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/contact/inner-contact.png" class="inner-contactImg" alt="" />
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <div class="dark-area innerPage-contactArea">
                
            <form method="post" action="" id="contactformsec">
              @csrf
                <div class="row">
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <label>First Name</label>
                    <input type="text" placeholder="" name="fname" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <label>Last Name</label>
                    <input type="text" placeholder="" name="lname" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <label>Business Email</label>
                    <input type="email" placeholder="" name="businessemail" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="basic-inputArea">
                    <label>Phone Number</label>
                    <input type="text" class="phone-number" name="phone" required />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="basic-inputArea">
                    <label>Company Name</label>
                    <input type="text" placeholder="" name="companyname" required />
                  </div>
                </div>
                <!--<div class="col-md-6">
                  <div class="basic-inputArea">
                    <label>Company Location</label>
                    <input type="text" placeholder="" name="companylocation" required />
                  </div>
                </div>-->
                <div class="col-12">
                  <div class="basic-inputArea">
                    <label>What can we help with you?</label>
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
                    <label>Message</label>
                    <textarea placeholder="" name="message"></textarea>
                  </div>
                </div>
                <div class="col-12 mt-3">
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
          </div>
        </div>
      </div>
    </section>

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