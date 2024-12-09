@extends('frontend.layouts.master')
@push('customStyles')

@endpush
@section('container')
<section class="inner-banner gradient-circle leftCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="inner-bannerHeading">
              <h1>Expert Custom Web Design Services Company</h1>
              <p>Welcome to Website Digitals, where we transform your vision into a digital masterpiece. Our custom web design services are tailored to meet your unique needs, ensuring a 
              seamless, engaging, and visually stunning online presence. Discover the difference that personalized web solutions can make for your business.</p>
              <ul>
                <li><strong>Tailored Designs:</strong> Reflecting your brand's unique identity.</li>
                <li><strong>Seamless User Experience:</strong> Designed for intuitive navigation.</li>
                <li><strong>Engaging Visuals:</strong> Captivating and aesthetically pleasing.</li>
                <li><strong>Latest Technologies:</strong> Cutting-edge tools and techniques.</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="webDesign-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/circle.png"
                class="circle-img rotation-animation"
                alt=""
              />
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images-webp/banner/web-design/banner-img.webp"
                class="banner-img"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding pb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="about-top-text m-0">
              <p>
                Our customers say <strong>Excellent</strong>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/about/rating.png" alt="" />
                4.7 out 5 stars based on 89,720 reviews
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding pb-0 overflow-hidden">
      <div class="container">
        <div class="row align-items-center col-reverse-mob rowGap4">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Custom Website Design</h2>
              <p>Every business is unique at Website Digitals, and your website should reflect that individuality. Our local website design services are crafted to meet your requirements, 
              providing a distinct online identity that sets you apart from the competition. From initial concept to final launch, we work closely with you to create a website that looks 
              great and delivers an exceptional user experience.</p>
              <p><strong>Key Features:</strong></p>
              <ul>
                  <li>Unique design tailored to your brand.</li>
                  <li>Focus on user experience (UX) and interface (UI) design.</li>
                  <li>Integration with the latest web technologies.</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="boxes-bgArea leftBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/web-design/1.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--<section class="section-padding pb-0 overflow-hidden">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6">
            <div class="boxes-bgArea rightBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/web-design/2.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Responsive Design</h2>
              <p>Your website must perform well on all devices in today's digital world. Our professional, responsive website design services ensure your website looks 
              and functions perfectly, whether viewed on a desktop, tablet, or smartphone. We prioritize mobile-first design to guarantee optimal performance across all platforms.</p>
              <p><strong>Key Features:</strong></p>
              <ul>
                  <li>Mobile-first approach for seamless user experience</li>
                  <li>Cross-browser compatibility</li>
                  <li>Fast loading times and smooth navigation</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <!--<section class="section-padding pb-0 overflow-hidden">
      <div class="container">
        <div class="row align-items-center col-reverse-mob rowGap4">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>User Experience (UX) Design</h2>
              <p>A great website goes beyond aesthetics; it provides users with an intuitive and enjoyable experience. Our UX design services focus on understanding your audience and 
              creating a website that meets their needs. We use data-driven insights and best practices to design interfaces that are easy to navigate and engaging.</p>
              <p><strong>Key Features:</strong></p>
              <ul>
                  <li>User research and persona development</li>
                  <li>Wireframing and prototyping</li>
                  <li>Usability testing and iterative improvements</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="boxes-bgArea leftBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/web-design/3.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
    <!--<section class="section-padding pb-0 overflow-hidden">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6">
            <div class="boxes-bgArea rightBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/web-design/2.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Website Redesign</h2>
              <p>Does your current website need to be updated, or underperforming? Our website redesign services can breathe new life into your online presence. We analyze your existing 
              site, identify areas for improvement, and create a fresh, modern design that aligns with your brand and business goals.</p>
              <p><strong>Key Features:</strong></p>
              <ul>
                  <li>Comprehensive website audit</li>
                  <li>Modern design updates</li>
                  <li>Enhanced functionality and performance</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
    <section class="section-padding pb-0 overflow-hidden">
      <div class="container">
        <div class="row align-items-center col-reverse-mob rowGap4">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>CMS Integration</h2>
              <p>Use our custom CMS web design services to manage your website content easily. We design custom websites compatible with popular content management systems 
              like WordPress, Joomla, and Drupal. Our solutions empower you to update and manage your content without extensive technical knowledge.</p>
              <p><strong>Key Features:</strong></p>
              <ul>
                  <li>Custom themes and templates</li>
                  <li>User-friendly backend interface</li>
                  <li>Ongoing support and maintenance</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="boxes-bgArea leftBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/web-design/3.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-padding overflow-hidden">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6">
            <div class="boxes-bgArea rightBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/web-design/2.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-heading">
              <h2>E-commerce Design</h2>
              <p>Maximize your online sales with our custom e-commerce design solutions. We create user-friendly, secure, visually appealing online stores that convert visitors into 
              customers. Whether you're starting a new e-commerce venture or revamping an existing one, our team has the expertise to deliver a high-performing online store.</p>
              <p><strong>Key Features:</strong></p>
              <ul>
                  <li>Customizable shopping cart and checkout processes</li>
                  <li>Integration with popular payment gateways</li>
                  <li>Scalable solutions to grow your business</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="scroller-section gray-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="scroller-sticky">
              <div class="section-heading">
                <h2>What Sets Website Digitals Apart: Our Unique Advantages</h2>
                <p>At Website Digitals, we pride ourselves on delivering exceptional web design services that stand out in the crowded digital landscape. Here's what makes us unique:</p>
              </div>
              <ul class="scroller-list">
                <li>
                  <a href="#web-firstScroller" class="active">
                    <span>01</span>
                    <p>Tailored Solutions</p>
                  </a>
                </li>
                <li>
                  <a href="#web-secondScroller">
                    <span>02</span>
                    <p>Expert Team</p>
                  </a>
                </li>
                <li>
                  <a href="#web-thirdScroller">
                    <span>03</span>
                    <p>Cutting-Edge Technology</p>
                  </a>
                </li>
                <li>
                  <a href="#web-forthScroller">
                    <span>04</span>
                    <p>Client-Centric Approach</p>
                  </a>
                </li>
                <li>
                  <a href="#web-fifthScroller">
                    <span>05</span>
                    <p>Proven Track Record</p>
                  </a>
                </li>
                <li>
                  <a href="#web-sixthScroller">
                    <span>06</span>
                    <p>Comprehensive Services</p>
                  </a>
                </li>
                <li>
                  <a href="#web-seventhScroller">
                    <span>07</span>
                    <p>Transparent Process</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="scroller-item" id="web-firstScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/web/1.png" alt="" />
              <h3>
                <span>01</span>
                <strong>Tailored Solutions</strong>
              </h3>
              <p>Every business has its own set of goals, challenges, and identity. We don't believe in one-size-fits-all solutions. Our team takes the time to understand your specific 
              needs and crafts a bespoke website that perfectly aligns with your brand and objectives. Whether you're a startup looking to make a bold entrance or an established business 
              seeking a fresh look, our custom designs are made to fit you like a glove.</p>
            </div>
            <div class="scroller-item" id="web-secondScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/web/2.png" alt="" />
              <h3>
                <span>02</span>
                <strong>Expert Team</strong>
              </h3>
              <p>Our team is comprised of highly skilled and experienced professionals who are passionate about web design. From talented designers and innovative developers to strategic 
              planners and diligent project managers, each team member brings expertise and creativity. We stay ahead of industry trends to deliver cutting-edge solutions that give you a 
              competitive edge. If you're looking for professional website design services, our team at Website Digitals is your go-to choice for excellence and innovation.</p>
            </div>
            <div class="scroller-item" id="web-thirdScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/web/3.png" alt="" />
              <h3>
                <span>03</span>
                <strong>Cutting-Edge Technology</strong>
              </h3>
              <p>Staying current with technology is crucial in the fast-evolving digital world. Website Digitals leverages the latest tools, frameworks, and technologies to build robust, 
              high-performing websites. Our commitment to using cutting-edge technology ensures that your website is visually appealing but also fast, secure, and scalable. If you're 
              looking for website design services and solutions, our expertise and dedication to innovation make us the ideal choice.</p>
            </div>
            <div class="scroller-item" id="web-forthScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/web/4.png" alt="" />
              <h3>
                <span>04</span>
                <strong>Client-Centric Approach</strong>
              </h3>
              <p>Your satisfaction is our top priority. We believe in building strong, collaborative relationships with our clients. We maintain clear and open communication throughout 
              the project, incorporating your feedback at every stage. Our client-centric approach ensures that the final product truly reflects your vision and meets all your 
              expectations. If you're looking for custom web design services in the USA, Website Digitals is dedicated to delivering exceptional results that align with your vision.</p>
            </div>
            
            <div class="scroller-item" id="web-fifthScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/web/2.png" alt="" />
              <h3>
                <span>05</span>
                <strong>Proven Track Record</strong>
              </h3>
              <p>With a portfolio of successful projects and numerous satisfied clients, Website Digitals has a proven track record of delivering exceptional results. Our professional 
              website design and management services, showcased through our case studies and client testimonials, speak volumes about our ability to create impactful, high-quality 
              websites that drive business success.</p>
            </div>
            <div class="scroller-item" id="web-sixthScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/web/3.png" alt="" />
              <h3>
                <span>06</span>
                <strong>Comprehensive Services</strong>
              </h3>
              <p>Custom website design agency near me: We offer a full range of web design services, from initial consultation and strategy development to design, development, testing, 
              and ongoing support. Our comprehensive approach means you don't have to juggle multiple vendors. We handle everything, ensuring a seamless and cohesive process from start 
              to finish.</p>
            </div>
            <div class="scroller-item" id="web-seventhScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/web/4.png" alt="" />
              <h3>
                <span>07</span>
                <strong>Transparent Process</strong>
              </h3>
              <p>Transparency is a cornerstone of our approach. We believe in keeping our clients informed and involved throughout the project. From clear project timelines and regular 
              updates to detailed progress reports and transparent pricing, we ensure you always know where we stand. If you're searching for affordable custom website design near me, 
              Website Digitals offers the perfect blend of quality and transparency to meet your needs.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-padding mesh-shapes z-index1">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="basic-tabs small-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#cms-portfolio"
                  >
                    <span>CMS Website</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#ecomm-portfolio"
                  >
                    <span>Ecommerce Website</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#wordpress-portfolio"
                  >
                    <span>WordPress Website</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#portal-portfolio"
                  >
                    <span>Portal Website</span>
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/1/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/2/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/3/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/4/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/5/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/cms/6/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
          <div class="tab-pane fade" id="ecomm-portfolio">
            <div class="row rowGap2">
              <div class="col-lg-4 col-md-6">
                <div class="single-webPortfolio">
                  <div class="webPortfolio-imageArea">
                    <div class="main-imageArea">
                      <div class="backImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/1/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/2/logo.web"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/3/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/4/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/5/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/e-com/6/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/1/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/2/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/3/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/4/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/5/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/wordpress/6/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/1/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/2/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/3/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/4/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/5/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/main-image.webp"
                          alt=""
                        />
                      </div>
                      <div class="frontImage">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/main-image.webp"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="right-imageArea">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/right-image.webp"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="webPortfolio-content">
                    <div class="webPortfolio-contentArea">
                      <div class="webPortfolio-contentTop">
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/web/portal/6/logo.webp"
                          alt=""
                        />
                        <h3>Quality pet food</h3>
                      </div>
                      <div class="webPortfolio-contentBottom">
                        <p>Click to easily edit or add entire sections — like a photo gallery, menu, or price list</p>
                        <a href="#">
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
    </section>

    <section class="section-padding split-section gradient-circle light-gradient rightCenter-gradient">
      <div class="container">
        <div class="row align-items-center col-reverse-mob">
          <div class="col-lg-5 col-md-6 position-relative">
            <div class="dark-area leftSided">
              <div class="section-heading">
                <h2>Benefits of Using Our Website Builder</h2>
                <p>
                  Turning your visitors into customers with optimized design and
                  user experience.
                </p>
                <ul>
                  <li>Stunning Visual Designs</li>
                  <li>Robust Security</li>
                  <li>Branding Excellence</li>
                  <li>Smooth Navigation</li>
                </ul>
              </div>
              <div class="link-area">
                <a href="{{ route('brief') }}" class="primary">Get Started Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 position-relative">
            <div class="lightBlue-area benefits-imagesArea parallax-container">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/benefits-section/1.png" alt="" />
              <div class="benefits-images">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/benefits-section/2.png"
                  alt=""
                  class="right-center parallax-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/benefits-section/3.png"
                  alt=""
                  class="left-bottom parallax-image"
                  data-speed="0.05"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- Momentum Section ---------------------------->
    <section class="section-padding dark-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Our Process</h2>
              <p>At Website Digitals, we follow a structured process to ensure the successful delivery of every project. We provide the best custom-designed website solutions to meet 
              your needs.</p>
            </div>
          </div>
          <div class="col-12">
            <ul class="process-area" id="process-area">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/1.svg" alt="" />
                <div class="process-detail">
                  <h3>Consultation</h3>
                  <p>We start by understanding your needs, goals, and vision for your website.</p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/2.svg" alt="" />
                <div class="process-detail">
                  <h3>Research & Planning</h3>
                  <p>We conduct market research and develop a strategy tailored to your business.</p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/3.svg" alt="" />
                <div class="process-detail">
                  <h3>Design &amp; Development</h3>
                  <p>Our team creates a unique design and develops a fully functional website.</p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/4.svg" alt="" />
                <div class="process-detail">
                  <h3>Testing &amp; Launch</h3>
                  <p>We rigorously test the site to ensure it works flawlessly before launch.</p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/5.svg" alt="" />
                <div class="process-detail">
                  <h3>Ongoing Support</h3>
                  <p>Post-launch, we provide maintenance and support to keep your website running smoothly.</p>
                  <div class="process-text"></div>
                </div>
                <!--<div class="absoluteImage fillSVG">
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
                </div>-->
              </li>
              <!--<li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/6.svg" alt="" />
                <div class="process-detail">
                  <h3>Launch & Optimization</h3>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    industry. Lorem Ipsum is simply dummy text Of the
                  </p>
                  <div class="process-text"></div>
                </div>
              </li>-->
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- Scrolling Section ---------------------------->
    <section class="section-padding pt-double pt-default-mob">
      <div class="container">
        <div class="getStartedCTA">
          <div class="row">
            <div class="col-md-6">
              <div class="section-heading">
                <h2>Ready to elevate your online presence?</h2>
                <p>Contact us today for a consultation and discover how Website Digitals can transform your digital experience. Fill out our contact form, call us at [Phone Number], 
                or email us at [Email Address].</p>
              </div>
              <div class="link-area">
                <a href="#" class="book-your-call">Get Started Now</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="ctaImageArea">
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/cta/getStarted/woman.webp" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
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
                  >Why should I choose a custom web design over a template?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Custom web design offers several advantages over templates, including a unique look that aligns with your brand, enhanced functionality 
                  tailored to your needs, and a better user experience. Templates can be limiting and often result in generic-looking websites.</div>
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
                  <div class="accordion-body">We offer a wide range of services, including Small business website design services in the USA, Custom Website Design, Responsive Design, 
                  E-commerce Design, User Experience (UX) Design, Website Redesign, and CMS Integration.</div>
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
                  >How does responsive design work?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Responsive design ensures your website looks and functions perfectly on all devices, including desktops, tablets, and smartphones. We use a 
                  mobile-first approach to create seamless user experiences across all platforms.</div>
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
                  >Can you help redesign my existing website?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Yes, we offer comprehensive, accessible website design services for website redesigns. We analyze your current site, identify areas for 
                  improvement, and create a modern, functional design that aligns with your brand and goals.</div>
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
                  >What is CMS integration, and why is it important?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">CMS integration involves designing custom websites compatible with content management systems like WordPress, Joomla, and Drupal. It lets 
                  you easily manage and update your website content without extensive technical knowledge.</div>
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
                  >What is your design and development process?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Our process includes five key steps: consultation, Research and planning, Design and development, Testing and launch, and Ongoing Support. 
                  This structured approach ensures we deliver high-quality, fully functional websites that meet your needs through our 
                  Creative Website Design Services.</div>
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
                  >How long does it take to design and develop a custom website?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">The timeline for designing and developing a custom website varies based on the project's complexity and requirements. On average, it can 
                  take anywhere from 2 to 4 weeks. We provide a detailed timeline after the initial consultation.</div>
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
                  >Can I update my website after it's launched?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Yes, we provide CMS integration, which allows you to update and manage your website content easily. We also offer training and ongoing 
                  support to help you make the most of your new site.</div>
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
                  >What sets Website Digitals apart from other web design companies?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Our unique selling propositions include Tailored Solutions, an Expert Team, Cutting-Edge Technology, a Client-Centric Approach, and a 
                  Proven Track Record. We are committed to delivering exceptional, customized web solutions that drive your business forward. Additionally, our 
                  website design services prices are competitive and transparent, ensuring you receive the best value for your investment.</div>
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
                  >Can you provide examples of your previous work?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">Our portfolio, which showcases our previous projects and client success stories, is available on our website. We are proud of the work we 
                  have done and the positive impact it has had on our clients' businesses.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-11">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-11"
                    aria-expanded="false"
                    aria-controls="faq-11"
                  >Do you offer support after the website is launched?</button>
                </h2>
                <div
                  id="faq-11"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-11"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">We provide ongoing support and maintenance to ensure your website runs smoothly and efficiently. We are here to help with any updates, 
                  troubleshooting, or additional features you may need.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading-12">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-12"
                    aria-expanded="false"
                    aria-controls="faq-12"
                  >How can I get in touch with Website Digitals?</button>
                </h2>
                <div
                  id="faq-12"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-12"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">You can contact us by filling out the contact form on our website, calling us at <a href="tel:+38 086 273 2200">+38 086 273 2200</a>, or emailing us at 
                  <a href="mailto:admin@websitedigitals.com">admin@websitedigitals.com</a>. We look forward to discussing how we can help with your web design needs.</div>
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