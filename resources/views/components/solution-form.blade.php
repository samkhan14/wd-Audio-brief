<form class="bookNow-left white-area gradient-circle rightCenter-gradient" method="post" action="" id="popupformsubmit">
    @csrf
    <h3>Get it Now! Increase Your Business Growth By {{ Request::is('wd5') || Request::is('wd6') ? '200' : '70' }}%</h3>
    <div class="popup-inputArea">
      <label>Full Name*</label>
      <input type="text" placeholder="Enter Your Full Name" name="name" id="growth_name" required />
    </div>
    <div class="popup-inputArea">
      <label>Email*</label>
      <input type="email" placeholder="Enter Your Email" name="email" id="growth_email" required />
    </div>
    <div class="popup-inputArea">
      <label>Phone Number</label>
      <input type="text" class="phone-number" name="phone" id="growth_phone" required/>
    </div>
    <div class="popup-inputArea">
      <label>What can we help with you?</label>
      <select name="service" required id="growth_service">
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
    <div class="popup-inputArea">
      <button type="submit" name="submit">Avail My {{ Request::is('wd5') || Request::is('wd6') ? '50' : '70' }}% Discount</button>
    </div>
    <div class="popupformalert">
        <div class="alert alert-success" role="alert"><p class="mb-0">Your form has been submitted.</p></div>
        <div class="alert alert-danger" role="alert"><p class="mb-0">Error submitting form!!!</p></div>
    </div>
  </form>

  <style>
    .popup-inputArea {
        position: relative;
    }
    
    .popup-inputArea > select:has(+ .nice-select) {
        display: block !important;
        position: absolute;
        pointer-events: none;
        z-index: -1;
        opacity: 0;
    }
    .offer-popup{
        max-width: 29rem;
    }
  </style>