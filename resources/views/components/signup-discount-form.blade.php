<form action="" method="post" id="signupform">
    @csrf
    <h2><small>Sign Up Now &</small> Let's Get Started</h2>
    <div class="basic-inputArea">
      <input type="text" placeholder="Enter your name" name="name" id="signup_name" required />
    </div>
    <div class="basic-inputArea">
      <input type="email" placeholder="Enter your email" name="email" id="signup_email" required />
    </div>
    <div class="basic-inputArea">
      <input type="text" class="phone-number" name="phone" id="signup_phone" required/>
    </div>
    <div class="basic-inputArea">
      <select name="service" required id="signup_service">
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
    <div class="link-area">
      <button type="submit" name="submit">Get My Discount</button>
    </div>
  </form>

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