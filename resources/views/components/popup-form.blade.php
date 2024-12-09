<form method="post" action="" class="bookNow-left gradient-circle light-gradient leftCenter-gradient" id="popupform">
    @csrf
    <h3>Get it Now! Increase Your Business Growth By 70%</h3>
    <div class="popup-inputArea">
      <label>Full Name*</label>
      <input type="text" name="name" id="popup_name" required />
    </div>
    <div class="popup-inputArea">
      <label>Email*</label>
      <input type="email" name="email" id="popup_email" required />
    </div>
    <div class="popup-inputArea">
      <label>Phone Number</label>
      <input type="text" class="phone-number" id="popup_phone" name="phone" required/>
    </div>
    <div class="popup-inputArea">
      <label>What can we help with you?</label>
      <select name="service" required id="popup_service">
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
     <div class="basic-inputArea">
        <div class="form-group g-recaptcha-response">
            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_CAPTCHA_SITE_KEY')}}"></div>
        </div>
        <span class="validation-error text-danger g-recaptcha-error"></span>
    </div>
    <div class="popup-inputArea">
      <button type="submit" name="submit">Submit Your Request</button>
    </div>
    <div class="popupformalert mt-3">
        <div class="alert alert-success" role="alert"><p class="mb-0" style="font-size: 14px;">Your form has been submitted.</p></div>
        <div class="alert alert-danger" role="alert"><p class="mb-0" style="font-size: 14px;">Error submitting form!!!</p></div>
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
  </style>