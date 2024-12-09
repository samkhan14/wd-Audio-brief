<?php get_header(); ?>

<style>
    .home-banner {
        min-height: 43rem;
    }
    .scroller-list > li > a{
        font-size: 1.07rem;
    }
    .banner-center-container {
        top: 43%;
    }
    .banner-heading > p{
        text-transform: capitalize;
    }
    .banner-heading > h5{
        font-size: 1.35rem;
        font-weight: 600;
    }
    @media (max-width: 650px) { 
        .home-banner{
            min-height: 5rem;
            max-height: 45rem;
        }
        .banner-center-container {
            top: 38%;
        }
        .banner-center-container.homeBannerSlider {
            bottom: 4% !important;
        }
        .about-banner-bottom{
            height: 15rem;
        }
        .about-banner-bottom::before{
            bottom: -30px;
            height: 22rem;
        }
        
    }
</style>

<section class="home-banner-area">
      <section class="home-banner gradient-circle leftCenter-gradient">
        <div class="container banner-center-container">
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <div class="banner-heading">
                <h5>EXPERT WEB DESIGN AGENCY</h5>
                <h1>Grow Your <span>Business</span> Online With Us</h1>
                <p>Custom website services, branding &amp; digital marketing solutions.</p>
              </div>
            <form action="<?php echo home_url(); ?>/brief/" class="banner-form" id="bannerForm">
                <img src="<?php echo get_template_directory_uri().'/assets/images/banner/pencil_2.png'; ?>" alt="" />
                <input type="text" id="companyNameInput"  autofocus placeholder="Enter Your Business Name" name="company_name" required/>
                <button type="submit" id="submitBannerForm">Start Your Project</button>
            </form>
              <!--<ul class="partnersUl">
                <li>
                  <img src="<?php echo get_template_directory_uri().'/assets/images/partners/1.webp'; ?>" alt="" />
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri().'/assets/images/partners/2.webp'; ?>" alt="" />
                </li>
              </ul>-->
            </div>
          </div>
        </div>
        <div class="container banner-center-container homeBannerSlider">
          <div class="row">
            <div class="col-md-6 offset-md-6">
              <div class="homeBanner-slidersArea">
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/1.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/2.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/3.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/4.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/5.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/6.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/7.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/8.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/9.webp'; ?>" alt="" />
                    </li>
                    <!--<li>-->
                    <!--  <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/10.webp'; ?>" alt="" />-->
                    <!--</li>-->
                     <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/11.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/1.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/2.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/3.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/4.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/5.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/6.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/7.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/8.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/9.webp'; ?>" alt="" />
                    </li>
                    <!--<li>-->
                    <!--  <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/10.webp'; ?>" alt="" />-->
                    <!--</li>-->
                     <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/11.webp'; ?>" alt="" />
                    </li>

                  </ul>
                </div>
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/12.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/13.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/14.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/15.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/16.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/17.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/18.webp'; ?>" alt="" />
                    </li>
                     <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/19.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/20.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/21.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/12.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/13.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/14.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/15.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/16.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/17.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/18.webp'; ?>" alt="" />
                    </li>
                     <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/19.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/20.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/21.webp'; ?>" alt="" />
                    </li>
                    
                  </ul>
                </div>
                <div class="homeBanner-sliders first-slider">
                  <ul>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/22.webp'; ?>" alt="" />
                    </li>
                     <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/23.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/24.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/25.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/26.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/27.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/28.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/29.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/30.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/31.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/22.webp'; ?>" alt="" />
                    </li>
                     <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/23.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/24.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/25.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/26.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/27.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/28.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/29.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/30.webp'; ?>" alt="" />
                    </li>
                    <li>
                      <img src="<?php echo get_template_directory_uri().'/assets/images/banner/home/top/31.webp'; ?>" alt="" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      
      <section class="section-padding about-banner-bottom p-0">
        <!--<div class="container">
          <div class="row">
            <div class="col-12">
              <div class="about-top-text">
                <p>
                  Our customers say Excellent
                  <img src="<?php echo get_template_directory_uri().'/assets/images/about/rating.png'; ?>" alt="" />
                  4.7 out 5 stars based on 89,720 reviews
                </p>
              </div>
            </div>
          </div>
        </div>-->
      </section>
      
      <div class="banner-bottom-text">
          <a href="#portfolio-sec">
          <p>Check out our awesome <span>Webfolio</span></p>
              <div class="basic-modern-dots white-dots" id="banner-dots-link">     
                <div class="dot first-circle"></div> 
                <div class="dot second-circle"></div> 
                <div class="dot third-circle"></div> 
            </div>
          </a>
      </div>
      
        
    </section>

    <section class="scroller-section white-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="scroller-sticky pt-0">
              <div class="section-heading">
                <h2>Pioneering Web Agency Delivering Bespoke Solutions</h2>
                <!--<p>Website Digitals ensures your voice is heard, from the initial concept to the final launch. We take the time to understand your unique goals and suggest web solutions that perfectly 
                reflect your vision, making us the best website builder for lead generation.</p>-->
              </div>
              <ul class="scroller-list mb-4">
                <li>
                  <a href="#web-firstScroller" class="active">
                    <span>01</span>
                    <p>Custom Web Design Solutions <span class="bluecolortext">To Boost Web Conversions</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-secondScroller">
                    <span>02</span>
                    <p>Successful Marketing Campaigns <span class="bluecolortext">To Accelerate Growth</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-thirdScroller">
                    <span>03</span>
                    <p>Personalized Branding Strategies <span class="bluecolortext">To Maximize User Engagement</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-fourthScroller">
                    <span>04</span>
                    <p>Global Reach <span class="bluecolortext">To Increase Sales Potentials</span></p>
                  </a>
                </li>
                <li>
                  <a href="#web-fifthScroller">
                    <span>05</span>
                    <p>Proven Content Creation Techniques <span class="bluecolortext">To Captivate Audience</span></p>
                  </a>
                </li>
              </ul>
              
              <ul class="partnersUl display-none-mobile">
                  <li>
                    <img src="<?php echo get_template_directory_uri().'/assets/images/partners/3.webp'; ?>" alt="" />
                  </li>
                    <li>
                    <img src="<?php echo get_template_directory_uri().'/assets/images/partners/1.webp'; ?>" alt="" />
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri().'/assets/images/partners/2.webp'; ?>" alt="" />
                  </li>
              </ul>
              
            </div>
          </div>
          <div class="col-md-6 margin-top-mobile-20">
            <div class="scroller-item pt-0" id="web-firstScroller">
              <img src="<?php echo get_template_directory_uri().'/assets/images/scroller/content-writing/custom-website.png'; ?>" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>01</span>
                  </h3>
              <h3>Custom Web Design Solutions <span class="bluecolortext">To Boost Web Conversions</span></h3>
              </div>
              
              <ul class="scrollerpointsul">
                  <li><strong>User Experience (UX):</strong> Design intuitive pathways that match user behavior to boost conversions.</li>
                  <li><strong>Strategic CTA Placement:</strong> Position eye-catching calls-to-action to drive engagement.</li>
                  <li><strong>Mobile-First Design:</strong> Ensure full responsiveness for seamless use on all devices.</li>
                  <li><strong>Fast Load Times:</strong> Optimize performance to minimize load times and reduce drop-offs.</li>
                  <li><strong>Clear Value Proposition:</strong> Highlight unique benefits to persuade visitors effectively.</li>
              </ul>
              <!--<p>Our custom web design services focus on creating visually appealing and conversion-driven websites for your brand’s unique needs. By adding strategic design features and 
              user-centric layouts, we make sure your site not only attracts user's interest but also encourages them to take action. This approach maximizes user engagement and boosts 
              conversion rates, turning your online presence into a powerful sales tool.</p>-->
            </div>
            <div class="scroller-item" id="web-secondScroller">
              <img src="<?php echo get_template_directory_uri().'/assets/images/scroller/home/3.png'; ?>" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>02</span>
                  </h3>
              <h3>Successful Marketing Campaigns <span class="bluecolortext">To Accelerate Growth</span></h3>
              </div>
              <!--<h3>
                <span>02</span>
                Successful Marketing Campaigns to <span class="bluecolortext">Accelerate Growth</span>
              </h3>-->
              <ul class="scrollerpointsul">
                  <li><strong>Targeted Segmentation:</strong> Focus on specific audience groups to boost engagement.</li>
                  <li><strong>Data-Driven Decisions:</strong> Use analytics to optimize campaigns in real-time.</li>
                  <li><strong>Compelling Content:</strong> Create high-quality content that resonates and drives action.</li>
                  <li><strong>Multi-Channel Strategy:</strong> Leverage social media, email, and PPC for wider reach.</li>
                  <li><strong>Performance Optimization:</strong> Continuously monitor and refine strategies for better results.</li>
              </ul>
            </div>
            <div class="scroller-item" id="web-thirdScroller">
              <img src="<?php echo get_template_directory_uri().'/assets/images/scroller/content-writing/personalized-branding.png'; ?>" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>03</span>
                  </h3>
              <h3>Personalized Branding Strategies <span class="bluecolortext">To Maximize User Engagement</span></h3>
              </div>
              <ul class="scrollerpointsul">
                  <li><strong>Customized Messaging:</strong> Craft messages that resonate with your audience's values and needs.</li>
                  <li><strong>Unique Visual Identity:</strong> Develop distinctive logos and color schemes that reflect your brand.</li>
                  <li><strong>Personalized Content:</strong> Use data to tailor content to individual preferences, creating compelling experiences.</li>
                  <li><strong>Interactive Experiences:</strong> Engage your audience with quizzes and personalized recommendations.</li>
                  <li><strong>Consistent Voice:</strong> Maintain a consistent and authentic voice across all channels to build trust and connection.</li>
              </ul>
            </div>
            <div class="scroller-item" id="web-fourthScroller">
              <img src="<?php echo get_template_directory_uri().'/assets/images/scroller/home/global-reach.png'; ?>" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>04</span>
                  </h3>
              <h3>Global Reach <span class="bluecolortext">To Increase Sales Potentials</span></h3>
              </div>
              <ul class="scrollerpointsul">
                  <li><strong>Localized Marketing:</strong> Tailor campaigns to specific regions using local languages and cultural nuances.</li>
                  <li><strong>Global SEO:</strong> Optimize for region-specific SEO to boost international visibility and sales.</li>
                  <li><strong>Multi-Currency &amp; Language:</strong> Support local currencies and languages for a seamless shopping experience.</li>
                  <li><strong>Cross-Border Payments:</strong> Offer diverse, secure payment options for international customers.</li>
                  <li><strong>Scalable Infrastructure:</strong> Build a robust, scalable website to handle increased global traffic and transactions efficiently.</li>
              </ul>
            </div>
            <div class="scroller-item" id="web-fifthScroller">
              <img src="<?php echo get_template_directory_uri().'/assets/images/scroller/content-writing/proven-content.png'; ?>" alt="" />
              <div class="feature-sec-heading">
                  <h3>
                    <span>05</span>
                  </h3>
              <h3>Proven Content Creation Techniques <span class="bluecolortext">To Captivate Audience</span></h3>
              </div>
              <ul class="scrollerpointsul">
                  <li><strong>Compelling Storytelling:</strong> Create narratives that emotionally resonate with your audience.</li>
                  <li><strong>Visual Excellence:</strong> Use high-quality visuals to capture attention and enhance appeal.</li>
                  <li><strong>Data-Driven Insights:</strong> Utilize analytics to tailor content for higher engagement.</li>
                  <li><strong>Interactive Elements:</strong> Add polls, quizzes, and dynamic infographics to boost participation.</li>
                  <li><strong>Consistent Branding:</strong> Maintain a cohesive brand voice across all content for strong recognition.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding pt-0 z-index1" id="portfolio-sec">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-heading text-center">
                    <h2>Our Success Stories and Milestones</h2>
                    <p>As a leading high level website builder, our team combines the latest technologies with best practices to ensure top-quality projects that meet diverse 
                    client needs.</p>
                  </div>
              </div>
          </div>
        <div class="row">
          <div class="col-12">
            <div class="basic-tabs home-portfolio-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#cms-portfolio"
                  >
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/1.webp'; ?>"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/1-colored.webp'; ?>"
                      alt=""
                    />
                    <span>CMS</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#ecom-portfolio"
                  >
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/2.webp'; ?>"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/2-colored.webp'; ?>"
                      alt=""
                    />
                    <span>E-Com</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#wordpress-portfolio"
                  >
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/3.webp'; ?>"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/3-colored.webp'; ?>"
                      alt=""
                    />
                    <span>WORDPRESS</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#portal-portfolio"
                  >
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/4.webp'; ?>"
                      alt=""
                      class="white-img"
                    />
                    <img
                      src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/tabs/4-colored.webp'; ?>"
                      alt=""
                    />
                    <span>Portal</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
      <div class="container-fluid">
        <div class="tab-content web-portfolio-content">
          <div class="tab-pane fade active show" id="cms-portfolio">
            <div class="row rowGap2">
                
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/1/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/1/logo.webp'; ?>"
                          alt=""
                        />
                        <h3>Pet Food Web Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Engaging users with seamless functionality and modern design.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/2/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/2/logo.webp'; ?>"
                          alt=""
                        />
                        <h3>Travel Website Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Immersing users with intuitive navigation and vibrant visuals.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/3/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/3/logo.webp'; ?>"
                          alt=""
                        />
                        <h3>Sports Website Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Delivering fast performance and captivating user experiences.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/4/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/4/logo.webp'; ?>"
                          alt=""
                        />
                        <h3>Beauty Website Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Offering a luxurious browsing experience with stylish design.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/5/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/5/logo.webp'; ?>"
                          alt=""
                        />
                        <h3>Furniture Website Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Showcasing elegance through sophisticated and functional design.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/6/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/cms/6/logo.webp'; ?>"
                          alt=""
                        />
                        <h3>Automotive Website Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Focusing on innovation with sleek and user-friendly interfaces.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="tab-pane fade" id="ecom-portfolio">
            <div class="row rowGap2">
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/1/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/1/logo-01.webp'; ?>"
                          alt=""
                        />
                        <h3>Fashion eCommerce Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Tailoring vibrant and modern eCommerce websites.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/2/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/2/logo-02.webp'; ?>"
                          alt=""
                        />
                        <h3>Furniture eCommerce Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Highlighting elegance and functionality in design.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/3/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/3/logo-03.webp'; ?>"
                          alt=""
                        />
                        <h3>Cycling eCommerce Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Emphasizing adventure with high-performance websites.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/4/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/4/logo-04.webp'; ?>"
                          alt=""
                        />
                        <h3>Beauty eCommerce Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating elegant and user-friendly beauty eCommerce websites.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/5/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/5/logo-06.webp'; ?>"
                          alt=""
                        />
                        <h3>Watch eCommerce Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Designing sleek and modern watch eCommerce websites.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/6/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/e-com/6/logo-05.webp'; ?>"
                          alt=""
                        />
                        <h3>Luxury Car eCommerce Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Crafting sleek and high-end eCommerce websites for luxury cars.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="wordpress-portfolio">
            <div class="row rowGap2">
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/1/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/1/logo-01.webp'; ?>"
                          alt=""
                        />
                        <h3>Plant WordPress Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating vibrant websites for gardening enthusiasts.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/2/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/2/logo-03.webp'; ?>"
                          alt=""
                        />
                        <h3>Car WordPress Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Designing sleek websites for automotive enthusiasts.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/3/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/3/logos-05.webp'; ?>"
                          alt=""
                        />
                        <h3>Food WordPress Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Building appetizing websites for culinary delights.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/4/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/4/logo-04.webp'; ?>"
                          alt=""
                        />
                        <h3>Financial WordPress Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Ensuring security and user-friendliness in financial services.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/5/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/5/logo-06.webp'; ?>"
                          alt=""
                        />
                        <h3>Footwear WordPress Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Combining style and functionality in footwear websites.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/6/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/wordpress/6/logo-02.webp'; ?>"
                          alt=""
                        />
                        <h3>Fitness WordPress Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating robust websites for fitness and gym enthusiasts.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="portal-portfolio">
            <div class="row rowGap2">
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/1/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/1/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/1/logos-01.webp'; ?>"
                          alt=""
                        />
                        <h3>News Portal Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Delivering comprehensive and user-friendly news portals.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/2/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/2/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/2/logos-02.webp'; ?>"
                          alt=""
                        />
                        <h3>Sports Portal Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Providing dynamic and interactive sports portals.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/3/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/3/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/3/logos-04.webp'; ?>"
                          alt=""
                        />
                        <h3>Education Portal Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Designing engaging and resourceful education portals.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/4/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/4/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/4/logos-03.webp'; ?>"
                          alt=""
                        />
                        <h3>Job Portal Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Designing efficient and user-friendly job portals.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/5/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/5/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/5/logos-05.webp'; ?>"
                          alt=""
                        />
                        <h3>Automotive Portal Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Building dynamic and engaging automotive portals.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/6/main-image.webp'; ?>"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/6/right-image.webp'; ?>"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="<?php echo get_template_directory_uri().'/assets/images/portfolio/web/portal/6/logos-06.webp'; ?>"
                          alt=""
                        />
                        <h3>eCommerce Portal Development</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Creating versatile and user-friendly eCommerce portals.</p>
                        <a href="/brief">
                          Get Started
                          <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-4">
          <div class="row">
              <div class="col-lg-12 col-sm-12 text-center">
                <div class="portfolio-bottom-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                  <p>Folks think we're rad. We're rated 4.8/5 from 100+ customer reviews.</p>
                <div class="link-area">
                    <a href="<?php echo home_url(); ?>/portfolio" class="primary">Explore more Here</a>
                </div>
              </div>
          </div>
      </div>
      
    </section>

    <section class="section-padding split-section gradient-circle light-gradient rightCenter-gradient">
      <div class="container">
        <div class="row align-items-center mobile-col-order-change">
          <div class="col-lg-7 col-md-6 position-relative">
            <div class="lightBlue-area benefits-imagesArea parallax-container">
              <img src="<?php echo get_template_directory_uri().'/assets/images/benefits-section/1.webp'; ?>" alt="" />
              <div class="benefits-images">
                <img
                  src="<?php echo get_template_directory_uri().'/assets/images/benefits-section/2.webp'; ?>"
                  alt=""
                  class="right-center parallax-image"
                />
                <img
                  src="<?php echo get_template_directory_uri().'/assets/images/benefits-section/3.webp'; ?>"
                  alt=""
                  class="left-bottom parallax-image"
                  data-speed="0.05"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 position-relative">
            <div class="dark-area">
              <div class="section-heading">
                <h2>Benefits of Using Our Custom Website Services</h2>
                <p>You are turning your visitors into customers with optimized design and user experience.</p>
                <ul>
                  <li>Stunning Designs</li>
                  <li>Robust Security</li>
                  <li>Branding Excellence</li>
                  <li>Smooth Navigation</li>
                  <li>Enhanced Performance</li>
                  <li>Custom Integrations</li>
                </ul>
              </div>
              <div class="link-area">
                <a href="/brief" class="primary">Get Started Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- ROI Section ---------------------------->
    <section class="section-padding overflow-hidden" style="background: #232323;">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="section-heading">
              <h2 class="text-white">Boost Your Website's Performance with Our Custom Website Services</h2>
              <p class="text-white">Enhance your online presence with our custom website services. Our scalable and efficient solutions create stunning, responsive websites tailored to 
              your needs. Increase traffic, improve user experience, and boost ROI with our innovative web strategies designed to make your business stand out.</p>
            </div>
            <div class="link-area">
                <a href="/brief" class="primary">Get Started Now</a>
              </div>
          </div>
          <div class="col-md-6">
            <div class="progress-containerArea">
              <div
                class="progress-container"
                data-countTo="99"
                style="--percent: 0%"
              >
                <h3 class="text-white">Clickthrough Rate</h3>
                <div class="progress-area primary-first">
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
                <h3 class="text-white">The Quality Score</h3>
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
                <h3 class="text-white">The Impression Share</h3>
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

    <section class="section-padding gradient-circle rightCenter-gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading">
              <p class="topHeading">Supercharge Your Online Presence</p>
              <h2>Captivate and Retain Customers with Custom<br>Web Solutions</h2>
              <p>Website Digitals crafts custom websites that bring your vision to life. Our expert developers create user-friendly, SEO-optimized sites that convert visitors into 
              loyal customers. Enhance your digital presence and build lasting connections with tailored web solutions and CMS options. Transform your online experience today!</p>
            </div>
            <ul class="partnersUl">
              <li>
                <img src="<?php echo get_template_directory_uri().'/assets/images/partners/1.webp'; ?>" alt="" />
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri().'/assets/images/partners/3.webp'; ?>" alt="" />
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri().'/assets/images/partners/2.webp'; ?>" alt="" />
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="convertCustomer-area">
              <img src="<?php echo get_template_directory_uri().'/assets/images/convert-customer/ipad.webp'; ?>" alt="" />
              <div class="convertCustomer-images parallax-container">
                <img
                  src="<?php echo get_template_directory_uri().'/assets/images/convert-customer/iphone.webp'; ?>"
                  alt=""
                  class="bottom-left parallax-image"
                />
                <img
                  src="<?php echo get_template_directory_uri().'/assets/images/convert-customer/graph.webp'; ?>"
                  alt=""
                  class="top-left parallax-image"
                  data-speed="0.035"
                />
                <img
                  src="<?php echo get_template_directory_uri().'/assets/images/convert-customer/editBar.webp'; ?>"
                  alt=""
                  class="bottom-right parallax-image"
                  data-speed="0.05"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- momentum Section ---------------------------->
    <section class="section-padding dark-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>The Momentum Process</h2>
            </div>
          </div>
          <div class="col-12">
            <ul class="process-area" id="process-area">
              <li>
                <img src="<?php echo get_template_directory_uri().'/assets/images/process/1.svg'; ?>" alt="" />
                <div class="process-detail">
                  <h3>Web Strategy</h3>
                  <p>We analyze, research, and set goals to align your digital efforts with business objectives.</p>
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
                <img src="<?php echo get_template_directory_uri().'/assets/images/process/2.svg'; ?>" alt="" />
                <div class="process-detail">
                  <h3>Planning & Information Architecture</h3>
                  <p>Building the foundations for seamless user experiences.</p>
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
                <img src="<?php echo get_template_directory_uri().'/assets/images/process/3.svg'; ?>" alt="" />
                <div class="process-detail">
                  <h3>Creative Design</h3>
                  <p>We bring your brand to life through stunning visuals and innovative design concepts.</p>
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
                <img src="<?php echo get_template_directory_uri().'/assets/images/process/4.svg'; ?>" alt="" />
                <div class="process-detail">
                  <h3>Responsive Development</h3>
                  <p>Ensures your website looks beautiful and functions seamlessly across all devices and screen sizes.</p>
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
                <img src="<?php echo get_template_directory_uri().'/assets/images/process/5.svg'; ?>" alt="" />
                <div class="process-detail">
                  <h3>Quality Assurance (QA)</h3>
                  <p>From functionality and performance to compatibility and security, we make your website error-free.</p>
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
                <img src="<?php echo get_template_directory_uri().'/assets/images/process/6.svg'; ?>" alt="" />
                <div class="process-detail">
                  <h3>Launch & Optimization</h3>
                  <p>Monitor performance metrics, gather user feedback, and implement optimizations.</p>
                  <div class="process-text"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="d-none d-sm-block">
    <!-------------------------- Testimonial Section ---------------------------->
    <?php get_template_part( 'templates/testimonial-section'); ?>

    <!-------------------------- FAQs Section ---------------------------->
    </div>
    
    <!--<section class="section-padding gradient-circle rightCenter-gradient pb-0">
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
                  >What makes Website Digitals the best no-code website builder?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our platform offers intuitive design tools and powerful features, making website creation easy and efficient without any coding required.
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
                  >How does your lead generation website builder work?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our builder is optimized for capturing leads with built-in forms, landing pages, and CRM integrations to maximize your conversion rates.
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
                  >Can you help me find awebsite builder company near me?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, Website Digitals serves clients globally and can connect you with local experts for personalized support.
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
                  >Is Website Digitals the best responsive website builder?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Absolutely! Our builder ensures your site looks great and functions perfectly on any device, providing a seamless user experience.
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
                  >Why is Website Digitals considered the best DIY website builder for SEO?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our platform includes SEO tools and guidelines, making optimizing your site and improving search engine rankings easy.
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
                  >What features make Website Digitals mobile friendly website builder?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We prioritize mobile responsiveness with adaptive layouts, touch-friendly navigation, and fast load times to ensure an excellent device experience.
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
                  >How does Website Digital’s low code website builder benefit developers?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Our low-code builder allows developers to customize and extend functionality with minimal coding, speeding up the development process.
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
                  >What is abespoke website builder and how can Website Digitals help?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Abespoke website builder offers tailored solutions to meet your unique business needs. Website Digitals creates custom designs and functionalities that align 
                    perfectly with your vision.
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
                  >What is the best no code website builder for beginners?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Website Digitals is ideal for beginners due to its user-friendly interface, comprehensive tutorials, and excellent customer support.
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
                  >Why choose Website Digitals as the best website builder with SEO features?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We offer integrated SEO tools, automatic sitemap generation, and best practices to help your site rank higher on search engines effortlessly.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
    <!-------------------------- Scrolling Section ---------------------------->
    <?php get_template_part( 'templates/scrolling-section'); ?>
    
    <!-------------------------- Blog Section ---------------------------->
    <?php get_template_part( 'templates/blog-section'); ?>
    
<?php get_footer(); ?>