@extends('frontend.layouts.master')
@push('customStyles')

@endpush
@section('container')        
<section class="inner-banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="inner-bannerHeading text-center">
              <h1>What We have Done So Far</h1>
              <p>Check out the selected collection of our most recent projects, which demonstrate our skill and dedication to providing great digital solutions. At Website Digitals, we 
              pride ourselves on crafting optimized, secure, and user-friendly websites tailored to meet our clients' unique needs.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <section class="section-padding mesh-shapes z-index1 pb-0 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="half-blueBefore">
                
              <div class="basic-tabs small-tabs portfolio-tabs portfolio-scroll-tabs">
                <ul class="nav nav-tabs" id="scrollable-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#informational-portfolio"><span>Informational Websites</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#ecommerce-portfolio"><span>E-commerce Websites</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#social-portfolio"><span>Social Platform</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#portfolio-portfolio"><span>Portfolio Websites</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#news-portfolio"><span>News and Media Websites</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#video-animation-portfolio"><span>Video Animation</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#branding-portfolio"><span>Branding</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#logo-design-portfolio"><span>Logo Design</span></a>
                    </li>
                </ul>
                <div class="prev-portfolio"><i class="fas fa-arrow-left"></i></div>
                <div class="next-portfolio"><i class="fas fa-arrow-right"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="tab-content web-portfolio-content">
            
          <div class="tab-pane fade active show" id="informational-portfolio">
            <div class="row rowGap2">
              <div class="col-lg-4 col-md-6" data-index="1">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/1/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/1/logo-white-01.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Travel & Tourism</button>
                        <!--<p> Creating a transparent shopping experience with smooth and modern design.</p>-->
                        <p>Offering an immersive travel experience with vibrant visuals.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/1/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/1/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/1/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Goyto</h3>
                      <p>A vibrant and user-friendly travel agency website, featuring comprehensive destination guides, customizable travel packages, and a seamless online booking 
                      system. It includes detailed customer reviews and integrates with social media platforms to share travel experiences and engage with potential travelers. The 
                      website is designed to be visually appealing and easy to navigate, ensuring a smooth user experience from planning to booking.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/goyto" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="2">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/2/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/2/logo-white.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Education</button>
                        <p>Creating engaging and interactive education portals.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/2/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/2/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/2/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Apple</h3>
                      <p>An engaging and interactive kids learning website featuring a wide array of educational games, colorful graphics, and a user-friendly interface. The platform 
                      includes progress tracking and parental controls, ensuring a safe and productive learning environment. Additionally, it offers a resource section for parents, 
                      providing tips and activities to support their children's education. The website is designed to make learning fun and interactive, encouraging kids to explore 
                      and learn at their own pace.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/apple" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="3">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/3/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/3/logo-white.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Sports</button>
                        <p>Delivering a thrilling sports experience with dynamic design.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/3/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/3/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/3/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Raccer</h3>
                      <p>A high-energy website for a sports racing brand, showcasing race schedules, driver profiles, and live race updates. It includes an online store for merchandise and ticket sales, optimized for mobile viewing to ensure fans stay connected on the go. The site also features interactive elements such as live commentary and race highlights, providing an immersive experience for racing enthusiasts. Social media integration allows fans to share their experiences and stay updated with the latest news.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/raccer" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="4">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/4/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/4/logo-white-01.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">News</button>
                        <p>Providing up-to-date news with a sleek and modern layout.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/4/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/4/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3> Wikilogy</h3>
                      <p>A comprehensive news website with up-to-date articles, interactive media, and user-friendly navigation. Features include categories for various news topics, in-depth analysis, and social media sharing capabilities. The site is designed to provide a rich and engaging news consumption experience, with multimedia content such as videos and infographics to enhance storytelling. SEO optimization ensures high visibility and easy access to the latest news.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/wikilogy" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="5">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/5/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/5/logo-white-01.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Informational</button>
                        <p>Delivering comprehensive information with an elegant design.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/5/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/5/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/5/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>eGovenz</h3>
                      <p>A platform to raise awareness about government programs and services, featuring informative articles, resource links, and user-friendly navigation. The site includes detailed explanations of government initiatives, eligibility criteria, and application processes. User-friendly design ensures that citizens can easily find and understand the information they need. Additionally, interactive tools and FAQs provide quick answers to common questions, enhancing public understanding and engagement.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/egovenz" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="6">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/6/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/6/logo-white-01.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Sports</button>
                        <p>Enhancing user engagement with an exciting sports interface.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/6/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/6/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/informational-website/6/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Sportix Sc</h3>
                      <p>A detailed soccer scoring website with live match updates, player statistics, and team profiles. It includes a fan engagement section where users can discuss matches, share opinions, and participate in polls. Social media integration allows for seamless sharing of updates and highlights. The site is designed to be a comprehensive hub for soccer fans, providing real-time information and fostering a vibrant community.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/sportix-sc" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
            <div class="tab-pane fade" id="ecommerce-portfolio">
                <div class="row rowGap2">
              <div class="col-lg-4 col-md-6" data-index="1">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/1/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/1/logo.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Fashion & Apparel</button>
                        <p>Tailoring vibrant and modern eCommerce websites.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/1/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/1/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/1/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>ekommart</h3>
                      <p>A sleek and modern eCommerce site for the fashion industry, featuring advanced search functionality, personalized recommendations, and secure checkout processes. Optimized for mobile devices, it includes robust inventory management and analytics tools to help businesses grow. The site offers a visually appealing shopping experience with high-quality images and detailed product descriptions, ensuring customer satisfaction and loyalty.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ekommart" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="2">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/2/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/2/logo-white-01.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Food & Drinks</button>
                        <p>Building appetizing websites for culinary delights.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/2/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/2/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/2/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Freshio</h3>
                      <p>A fresh and inviting website for an organic food brand aimed at diet-conscious consumers. Features include product catalogs, nutritional information, and an online store, as well as a blog for healthy eating tips and recipes. The site is designed to highlight the benefits of organic foods and make it easy for customers to find and purchase products. Integration with social media and email marketing helps build a community of health-conscious individuals.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/freshio" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="3">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/3/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/3/logo-white-01.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Pet & Animal</button>
                        <p>Engaging users with seamless functionality and modern design.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/3/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/3/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/3/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Patte</h3>
                      <p>An engaging and informative website for a pet care brand, featuring product listings, pet care tips, and an appointment booking system for veterinary services. The site integrates with social media to connect with pet owners and foster a supportive community. Detailed product descriptions, customer reviews, and expert advice ensure pet owners have all the information they need to make informed decisions for their pets' well-being.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/patte/" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="4">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/4/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/4/logo-white.webp"
                          alt=""
                        />
                        <button class="portfolio_btn">Security</button>
                        <p>Ensuring security and user-friendliness in financial services.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/4/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/4/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/4/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Blackcats</h3>
                      <p>A professional and secure website for a security services company, featuring detailed service descriptions, client testimonials, and a secure client portal for service management. Crafted to appeal to search engines, it effectively draws in prospective customers. The site emphasizes trust and reliability, showcasing the company's expertise and successful.</p>
                    </div>
                    <div class="links">
                      <a class="launch" href="/case-study/blackcats/"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="5">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/5/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/5/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Fashion & Apparel</button>
                        <p>Tailoring vibrant and modern eCommerce websites.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/5/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/5/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/5/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Barly</h3>
                      <p>A stylish fashion website featuring trend updates, designer profiles, and an online store. Mobile-optimized with a sleek, modern design, it provides an engaging shopping experience and showcases the latest in fashion trends. High-quality imagery and editorial content keep users informed and inspired. The site also offers a personalized shopping experience with curated collections and style recommendations.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/barly" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="6">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/6/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/6/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Games</button>
                        <p>Connecting users with reliable services through smooth design and real-time features.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/6/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/6/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/ecommerce-website/6/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>ELLA</h3>
                      <p>A vibrant website for gaming accessories, featuring product reviews, an online store, and user forums. Social media integration for community engagement ensures gamers can connect and share their experiences. The site offers detailed product information, user ratings, and expert reviews to help customers make informed purchases. Interactive features like wishlists and pre-order options enhance the shopping experience.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/ella" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            
            <div class="tab-pane fade" id="social-portfolio">
                <div class="row rowGap2">
              <div class="col-lg-4 col-md-6" data-index="1">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/1/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/1/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Social Networking</button>
                        <p>Connecting people with a seamless and intuitive social platform.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/1/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/1/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/1/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Friend Finder</h3>
                      <p>A modern dating website with user profiles, match suggestions, and secure messaging. Features include a mobile app for on-the-go access, allowing users to connect and find matches conveniently from their smartphones. The site offers advanced search filters and personalized match recommendations, enhancing the user experience. Safety and privacy are prioritized, with robust security measures in place.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/friend-finder" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="2">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/2/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/2/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Social Networking</button>
                        <p>Creating meaningful connections with a user-friendly dating site.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/2/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/2/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/2/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>TuruLav</h3>
                      <p>A sleek dating website with advanced matching algorithms, user profiles, and secure messaging. Mobile-optimized with social media integration, it provides a seamless and engaging experience for users looking for meaningful connections. The platform offers various communication tools and icebreakers to help users initiate conversations. Regularly updated content and tips on dating enhance user engagement.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/turulav" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="3">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/3/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/3/logo-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Social Networking</button>
                        <p>Enhancing romance with a beautifully designed matchmaking service.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/3/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/3/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/3/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>CUPID LOVE</h3>
                      <p>A user-friendly dating website featuring match suggestions, secure messaging, and event planning. The mobile app available for easy access ensures users can connect and interact with potential matches anytime, anywhere. The site includes interactive features such as virtual dates and community events, fostering a dynamic and engaging environment for users.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/cupid-love" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="4">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/4/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/4/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Social Networking</button>
                        <p>Offering a seamless influencer hiring experience with advanced tools.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/4/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/4/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/4/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>INFLANAR</h3>
                      <p>A platform connecting brands with influencers, featuring profile browsing, contract management, and performance analytics. It streamlines the influencer hiring process, making it easier for brands to find the right influencers for their campaigns. The platform offers tools for campaign tracking and ROI measurement, ensuring successful collaborations. Detailed profiles and portfolio showcases help brands make informed decisions.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/inflanar" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="5">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/5/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/5/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Social Networking</button>
                        <p>Empowering communities with a dynamic social activism platform.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/5/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/5/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/5/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>SOCIAL ACTIVISM</h3>
                      <p>A platform for human rights activism, featuring news articles, resource links, and event planning tools. Social media integration for community building helps activists connect and collaborate on important issues. The site offers detailed information on various causes, ways to get involved, and success stories to inspire action. Interactive features like petitions and fundraising tools enhance user participation</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/social-activism" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="6">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/6/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/6/logo-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Social Networking</button>
                        <p>Connecting users through an innovative and engaging social network.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/6/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/6/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/social-website/6/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Cirkle</h3>
                      <p>A social networking site with user profiles, interest groups, and event planning tools. Features robust privacy settings and mobile app access, ensuring a secure and convenient user experience. The platform allows users to create and join groups based on their interests, share updates, and organize events. User-friendly design and regular updates keep the community active and engaged.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/cirkle" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            
            <div class="tab-pane fade" id="portfolio-portfolio">
                <div class="row rowGap2">
              <div class="col-lg-4 col-md-6" data-index="1">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/1/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/1/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Business & Finance</button>
                        <p>Offering a sophisticated business interface with professional design.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/1/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/1/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/1/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>ZEV</h3>
                      <p>A professional website for a digital marketing agency, showcasing services, client testimonials, and case studies. SEO optimized for high visibility, it helps attract and convert potential clients. The site highlights the agency's expertise through detailed case studies and success stories. Clear navigation and compelling calls-to-action guide visitors towards engaging with the agency.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/zev" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="2">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/2/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/2/logo-white-02.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Professional Portfolio</button>
                        <p>Showcasing talents with a beautifully crafted portfolio layout.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/2/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/2/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/2/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Kylo</h3>
                      <p>A sleek personal portfolio website featuring project showcases, a blog, and a contact form. Mobile-optimized with a modern design, it effectively highlights the individual's skills and achievements. The site includes detailed project descriptions, client testimonials, and an easy-to-use contact form. Regularly updated blog content keeps the audience engaged and informed.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/kylo" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="3">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                         <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/3/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/3/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Professional Portfolio</button>
                        <p>Presenting professional achievements with a sleek and modern portfolio.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/3/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/3/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/3/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>STAG</h3>
                      <p>A professional portfolio website with project showcases, a resume section, and a contact form. Optimized for mobile devices, it provides a comprehensive view of the individual's work and expertise. The site is designed to be visually appealing and easy to navigate, making it simple for potential clients or employers to explore the individual's portfolio.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/stag" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="4">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                         <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/4/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/4/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Business & Finance</button>
                        <p>Enhancing productivity with a stylish and organized workspace design.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/4/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/4/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/4/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Lekker</h3>
                      <p> A creative design agency website showcasing portfolios, client testimonials, and service descriptions. Features a blog and contact form, providing a platform to display creativity and attract new clients. The site highlights the agency's unique approach and successful projects, engaging visitors with compelling visuals and content.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/lekker" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="5">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/5/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/5/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Creative Agency</button>
                        <p>Empowering businesses with innovative and efficient digital solutions.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/5/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/5/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/5/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Awa</h3>
                      <p>A modern design agency website featuring project portfolios, client reviews, and service descriptions. SEO optimized and mobile-friendly, it helps attract potential clients and showcase the agency's work. The site includes case studies and detailed project descriptions, demonstrating the agency's capabilities and achievements.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/awa" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="6">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/6/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/6/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">Digital Agency</button>
                        <p>Delivering advanced financial tools with a sleek and intuitive interface.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/6/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/6/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/portfolio-website/6/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>ORACLE</h3>
                      <p>A comprehensive website for a digital marketing agency, highlighting services, case studies, and client testimonials. Mobile-optimized with a modern design, it effectively showcases the agency's expertise and results. The site is designed to be visually appealing and informative, with clear calls-to-action to engage potential clients.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/oracle" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            
            <div class="tab-pane fade" id="news-portfolio">
                <div class="row rowGap2">
              <div class="col-lg-4 col-md-6" data-index="1">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/1/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/1/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">News & Media</button>
                        <p>Delivering global news with a cutting-edge magazine interface.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/1/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/1/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/1/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/1/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Binduz</h3>
                      <p>A dynamic news website featuring up-to-date articles, interactive media, and user-friendly navigation. SEO optimized for high visibility, it ensures that users can easily find and engage with the latest news. The site includes multimedia content such as videos and infographics, enhancing the storytelling experience. Social media integration allows for easy sharing and increased engagement.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/binduz" class="launch"></a>
                      <a href="#" class="request book-your-call"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="2">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/2/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/2/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">News & Media</button>
                        <p>Bringing live updates with a seamless and interactive news platform.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/2/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/2/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/2/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/2/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>Newz LIVE</h3>
                      <p>A live news website with real-time updates, video content, and user-friendly navigation. Mobile-optimized and integrated with social media, it keeps users informed and connected on the go. The site offers a wide range of news categories and interactive features, providing a comprehensive news consumption experience.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/news-live" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="3">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/3/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/3/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">News & Media</button>
                        <p>Offering a vibrant and engaging news reading experience.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/3/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/3/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/3/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/3/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>VIBENEWS</h3>
                      <p>A vibrant news website with categorized articles, interactive media, and social media sharing. Mobile-friendly with a modern design, it offers a rich and engaging news consumption experience. The site includes detailed reporting and analysis, ensuring users receive in-depth information on various topics. SEO optimization ensures high visibility and easy access to content.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/vibenews" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="4">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/4/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/4/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">News & Media</button>
                        <p>Enhancing your news experience with flexible and comprehensive coverage.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/4/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/4/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/4/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/4/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>MEDIA FLEX</h3>
                      <p>A comprehensive TV news website with live updates, video content, and user-friendly navigation. SEO optimized and mobile-friendly, it ensures users can stay informed and engaged. The site features breaking news, exclusive interviews, and in-depth reports, providing a rich and diverse news experience. Interactive elements like live chats and polls engage the audience.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/media-flex" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="5">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/5/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/5/logo-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">News & Media</button>
                        <p>Offering a premium streaming experience with a vast selection of media.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/5/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/5/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/5/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/5/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>streamo</h3>
                      <p>A streaming website for TV shows, web series, and movies. Features include user profiles, watchlists, and secure payment options, providing a seamless and personalized viewing experience. The site offers a wide range of content genres and recommendations based on user preferences. Social media integration allows users to share their favorite shows and movies.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/streamo" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-index="6">
                <div class="single-webPortfolio static-portfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/6/image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/6/logo-white-01.svg"
                          alt=""
                        />
                        <button class="portfolio_btn">News & Media</button>
                        <p>Delivering engaging video content with a user-friendly interface.</p>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-caseStudyData">
                    <div class="images">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/6/website.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/6/inner-page-1.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/6/inner-page-2.webp"
                        alt=""
                      />
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/news-website/6/inner-page-3.webp"
                        alt=""
                      />
                    </div>
                    <div class="detail">
                      <h3>VIDEOSPIRE</h3>
                      <p> A dynamic streaming platform for TV shows and movies, featuring user profiles, watchlists, and interactive media. Mobile-optimized with secure payment options, it offers a convenient and engaging entertainment experience. The platform includes exclusive content and early access to new releases, enhancing user satisfaction. Detailed content descriptions and ratings help users make informed viewing choices.</p>
                    </div>
                    <div class="links">
                      <a href="/case-study/videospire" class="launch"></a>
                      <a href="#request" class="request"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            
          <div class="tab-pane fade video-animation-portfolio" id="video-animation-portfolio">
            <div class="row rowGap2">
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/j4eR12qIJEY" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/1.webp" alt=""/>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/5NP4Owz4agk"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/DhjyuxBKsNg"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/3.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/hJNuccOcENI"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/fP9Y02ypPaI"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/LoqTzou4LnA"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/lvvzHgRmQkU"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/7.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/lvvzHgRmQkU"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/WUOblzsnpN4"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/9.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/TAXZV604XMw"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/1.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/MJf0LK9WdVQ"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/u1hOWAllq48"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/3.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/61jwxTWMbNg"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/F907Z-NgwzI"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/P2tX-hdu85I"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/q_UR-Om8a1I"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/7.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/DdVc92YiR0o"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/4Lk8gm8E9pQ"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/9.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/DpZk-Cq8DBs"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/10.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/IsEQiUTA6kM"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/egWSuJ0_O-Y"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/0012.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/xxXi1Xc-UoQ"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/13.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/owMX3S2bKX0"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/14.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/DHLJ5RPi_TY"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/15.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="branding-portfolio">
            <div class="row rowGap2">
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/2.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}//assets/images/portfolio/branding/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/3.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/3.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/1.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/1.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/5.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/6.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/4.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/7.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/7.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/9.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/9.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/12.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/12.webp"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="half-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/10.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/branding/10.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="logo-design-portfolio">
              <div class="row rowGap2">
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/1.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/1.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/2.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/3.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/3.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/4.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/5.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/5.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/6.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/7.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/7.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/8.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/8.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/9.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/9.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/10.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/10.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/11.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/11.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/12.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/12.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/13.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/13.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/15.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/15.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/16.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/16.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/17.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/17.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/18.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/18.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/19.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/19.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/20.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/21.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/22.webp"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/logodesign/23.webp"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- Scrolling Section ---------------------------->
    <x-scrolling-section />

    <!-------------------------- Blog Section ---------------------------->
    <x-blog-section />


@push('customScripts')



@endpush

@endsection