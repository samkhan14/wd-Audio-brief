@extends('frontend.layouts.master')
@push('customStyles')

@endpush
@section('container')        
<section class="inner-banner gradient-circle leftCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="inner-bannerHeading">
              <h1>Best Content Writing Services for Websites</h1>
              <p>Are you searching for the best content writing services for websites that can improve your online presence? At Website Digitals, we are your dedicated team.</p>
              <ul>
                <li>Unique and engaging content</li>
                <li>SEO-optimized writing</li>
                <li>Tailored content strategies</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contentWriting-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/circle.png"
                class="circle-img rotation-animation"
                alt=""
              />
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/content-writing/banner-img.png"
                class="banner-img"
                alt=""
              />
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/content-writing/banner-hand.png"
                class="banner-hand"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding overflow-hidden">
      <div class="container">
        <div class="row align-items-center col-reverse-mob rowGap4">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Maximize Your Impact with Our Content Writing Services</h2>
              <p>Our web page content writing services are designed to capture your brand’s message and engage your audience. At Website Digitals, we understand the importance of content in driving 
              traffic and converting visitors into loyal customers.</p>
              <ul>
                <li>Strategic content planning</li>
                <li>Focused audience engagement</li>
                <li>Results-driven writing</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">Get Started Now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="boxes-bgArea leftBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/content-writing-services.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding split-section gradient-circle light-gradient rightCenter-gradient">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6 position-relative">
            <img
              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/content-writing-company.png"
              class="width-100 max-550"
              alt=""
            />
          </div>
          <div class="col-md-6 position-relative">
            <div class="dark-area">
              <div class="section-heading">
                <h2>A Content Writing Company You Can Trust</h2>
                <p>As a professional content writing company, we pride ourselves on delivering top-notch services. Our team of experienced writers specializes in creating unique, engaging, and 
                SEO-optimized content tailored to your needs.</p>
                <ul>
                  <li>Skilled writers</li>
                  <li>High-quality output</li>
                  <li>Custom content solutions</li>
                </ul>
              </div>
              <div class="link-area">
                <a href="#" class="primary book-your-call">Get Started Now</a>
              </div>
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
                <h2>Content Writing According to Your Needs!</h2>
                <p>Website Digitals ensures your voice is heard from the initial concept to the final launch. We take the time to understand your unique goals and suggest web solutions that 
                perfectly reflect your vision.</p>
              </div>
              <ul class="scroller-list">
                <li>
                  <a href="#web-firstScroller" class="active">
                    <span>01</span>
                    <p>Engaging and Unique Storytelling</p>
                  </a>
                </li>
                <li>
                  <a href="#web-secondScroller">
                    <span>02</span>
                    <p>Expertly Researched, Fact-Checked Material</p>
                  </a>
                </li>
                <li>
                  <a href="#web-thirdScroller">
                    <span>03</span>
                    <p>SEO-Optimized Content that Drives Traffic</p>
                  </a>
                </li>
                <li>
                  <a href="#web-forthScroller">
                    <span>04</span>
                    <p>Creative Visual and Multimedia Integration</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="scroller-item" id="web-firstScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/content-writing/1.png" alt="" />
              <h3>
                <span>01</span>
                <strong>Engaging and Unique Storytelling</strong>
              </h3>
              <p>Our creative content writing services for websites ensure that your content is engaging and tells a story that resonates with your audience. We also optimize your website for speed, 
              security, and search engine visibility to ensure your content reaches the right audience.</p>
            </div>
            <div class="scroller-item" id="web-secondScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/content-writing/2.png" alt="" />
              <h3>
                <span>02</span>
                <strong>Expertly Researched, Fact-Checked Material</strong>
              </h3>
              <p>Are you ready to advance to the next stage of your online presence? Our content writing agency in USA offers custom solutions tailored to your needs. From eye-catching designs to 
              seamless user experiences, we ensure that your website converts visitors into loyal customers.</p>
            </div>
            <div class="scroller-item" id="web-thirdScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/content-writing/3.png" alt="" />
              <h3>
                <span>03</span>
                <strong>SEO-Optimized Content that Drives Traffic</strong>
              </h3>
              <p>We are more than just content writing firms for websites; we are your strategic partners in success. With a deep understanding of the latest trends, technologies, and best practices 
              in digital marketing, we'll work with you to develop a customized strategy that delivers measurable results.</p>
            </div>
            <div class="scroller-item" id="web-forthScroller">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/content-writing/4.png" alt="" />
              <h3>
                <span>04</span>
                <strong>Creative Visual and Multimedia Integration</strong>
              </h3>
              <p>From intuitive user interfaces and seamless navigation to powerful backend functionality and robust security features, Website Digitals ensures that your web application is built to 
              deliver a superior user experience.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading text-center">
              <h2>Our Sterling Content Writing Services</h2>
              <p>Our professional content writing services in USA cover a wide range of needs, ensuring your content is always top-notch and tailored to your audience.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="contentWriting-carousel owl-carousel">
          <div class="item">
            <div class="single-contentWriting-card">
              <div class="head">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/1.png"
                  alt=""
                />
                <h3>Ebook Writing</h3>
              </div>
              <p>We provide expertly crafted ebooks that captivate your readers and establish your authority in your industry.</p>
              <ul class="checkMark-ul">
                <li>Thorough research</li>
                <li>Engaging storytelling</li>
                <li>Professional editing</li>
              </ul>
              <div class="link-area">
                <a href="{{ route('brief') }}">
                  Get Started Now
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-contentWriting-card">
              <div class="head">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/2.png"
                  alt=""
                />
                <h3>Blog Writing</h3>
              </div>
              <p>Our blog writing services ensure your blog remains active with fresh, engaging content that keeps your readers coming back for more.</p>
              <ul class="checkMark-ul">
                <li>Regular updates</li>
                <li>Engaging topics</li>
                <li>SEO-friendly content</li>
              </ul>
              <div class="link-area">
                <a href="{{ route('brief') }}">
                  Get Started Now
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-contentWriting-card">
              <div class="head">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/3.png"
                  alt=""
                />
                <h3>Article Writing</h3>
              </div>
              <p>Our article writing services deliver well-researched, informative, and engaging articles that help you stand out in your niche.</p>
              <ul class="checkMark-ul">
                <li>In-depth research</li>
                <li>Clear and concise writing</li>
                <li>SEO optimization</li>
              </ul>
              <div class="link-area">
                <a href="{{ route('brief') }}">
                  Get Started Now
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-contentWriting-card">
              <div class="head">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/web-content1.png"
                  alt=""
                />
                <h3>Web Content Writing</h3>
              </div>
              <p>Our web content writing services provide content tailored to your audience, ensuring your website effectively communicates your message.</p>
              <ul class="checkMark-ul">
                <li>Audience-focused content</li>
                <li>Clear and engaging writing</li>
                <li>SEO optimization</li>
              </ul>
              <div class="link-area">
                <a href="{{ route('brief') }}">
                  Get Started Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding primary-light-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading text-center">
              <h2>View Our Samples</h2>
            </div>
          </div>
          <div class="col-12">
            <div class="basic-tabs small-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#article-writing-samples"
                  >
                    <span>Article Writing</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#blog-writing-samples"
                  >
                    <span>Blog Writing</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#ebook-writing-samples"
                  >
                    <span>Ebook Writing</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#web-content-writing-samples"
                  >
                    <span>Web Content Writing</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="tab-content">
              <div
                class="tab-pane fade active show"
                id="article-writing-samples"
              >
                <div class="row rowGap2">
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/3.png"
                        alt=""
                      />
                      <h3>Article Writing.</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/1.pdf" data-fancybox="sample">
                            View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/3.png"
                        alt=""
                      />
                      <h3>Article Writing.</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/2.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/3.png"
                        alt=""
                      />
                      <h3>Article Writing.</h3>
                      <div class="link-area">
                         <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/3.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/3.png"
                        alt=""
                      />
                      <h3>Article Writing.</h3>
                      <div class="link-area">
                         <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/4.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="blog-writing-samples">
                <div class="row rowGap2">
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/2.png"
                        alt=""
                      />
                      <h3>Blog Writing.</h3>
                      <div class="link-area">
                         <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/5.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/2.png"
                        alt=""
                      />
                      <h3>Blog Writing.</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/6.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/2.png"
                        alt=""
                      />
                      <h3>Blog Writing.</h3>
                      <div class="link-area">
                         <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/7.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/2.png"
                        alt=""
                      />
                      <h3>Blog Writing.</h3>
                      <div class="link-area">
                         <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/8.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="ebook-writing-samples">
                <div class="row rowGap2">
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/1.png"
                        alt=""
                      />
                      <h3>Ebook Writing.</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/9.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/1.png"
                        alt=""
                      />
                      <h3>Ebook Writing.</h3>
                      <div class="link-area">
                       <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/10.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/1.png"
                        alt=""
                      />
                      <h3>Ebook Writing..</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/11.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/1.png"
                        alt=""
                      />
                      <h3>Ebook Writing.</h3>
                      <div class="link-area">
                       <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/12.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="web-content-writing-samples">
                <div class="row rowGap2">
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/web-content1.png"
                        alt=""
                      />
                      <h3>Web Content Writing</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/13.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/web-content1.png"
                        alt=""
                      />
                      <h3>Web Content Writing.</h3>
                      <div class="link-area">
                       <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/14.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/web-content1.png"
                        alt=""
                      />
                      <h3>Web Content Writing</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/15.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="single-sampleCard">
                      <img
                        src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/content-writing/types/web-content1.png"
                        alt=""
                      />
                      <h3>Web Content Writing</h3>
                      <div class="link-area">
                        <a href="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/pdf/16.pdf" data-fancybox="sample">
                          View Sample Flow
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="link-area text-center pt-oneThird">
              <a href="{{ route('brief') }}">
                Get Started
              </a>
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
              <h2>The Momentum Process</h2>
            </div>
          </div>
          <div class="col-12">
            <ul class="process-area" id="process-area">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/1.svg" alt="" />
                <div class="process-detail">
                  <h3>Research and Analysis</h3>
                  <p>We begin with thorough research and analysis to understand your industry, target audience, and competitors. This foundation ensures that our content is relevant and impactful.</p>
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
                  <h3>Creative Content Development</h3>
                  <p>Our creative writers create unique, engaging content that aligns with your brand voice and goals. We focus on storytelling that captivates your audience.</p>
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
                  <h3>SEO Optimization</h3>
                  <p>We integrate SEO best practices into our content development process, ensuring your content is optimized for search engines to drive organic traffic to your website.</p>
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
                  <h3>Quality Assurance (QA)</h3>
                  <p>Our strict quality assurance process involves thorough proofreading and editing to ensure your content is error-free, polished, and of the highest standard.</p>
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
                  <h3>Performance Tracking and Optimization</h3>
                  <p>After launching your content, we continuously monitor its performance and make data-driven adjustments to maximize its effectiveness and achieve your business objectives.</p>
                  <div class="process-text"></div>
                </div>
              </li>
            </ul>
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
                  >What makes Website Digitals the best content writing services for websites?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Website Digitals offers tailored, SEO-optimized content that engages your audience and drives traffic to your site, making us the best content writing services for websites.
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
                  >How can I hire content writing services for websites?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    You can hire content writing services for websites by contacting us through our website or giving us a call to discuss your content needs and goals.
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
                  >What are the benefits of using professional content writing services in USA?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Professional content writing services in USA ensure high-quality, engaging, and optimized content that enhances your website's performance and credibility.
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
                  >Do you offer website content writing packages?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, Website Digitals offers customizable website content writing packages to meet the specific needs and budgets of different businesses.
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
                  >Why should I choose a content writing agency in USA?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Choosing a content writing agency in USA like Website Digitals guarantees expertise in crafting content that resonates with the local audience and adheres to the latest SEO practices.
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
                  >Can Website Digitals provide high quality websites content writing services?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Absolutely. Website Digitals specializes in delivering high-quality website content writing services that help boost your online presence and effectively engage your audience.
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
                  >What types of content can I get from a content writing service provider company in USA?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    As a content writing service provider company in USA, Website Digitals offers various content types, including blog posts, articles, web pages, and more, all tailored to your 
                    business needs.
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
                  >How do content writing firms for websites improve SEO?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Content writing firms for websites like Website Digitals create SEO-optimized content that enhances your website's search engine ranking and drives organic traffic.
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
                  >Is it beneficial to outsource content writing services for websites?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Yes, outsourcing content writing services for websites allows you to leverage professional expertise, save time, and ensure high-quality, SEO-friendly content.
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
                  >What makes Website Digitals a top websites content writing services company in USA?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Website Digitals commitment to delivering unique, engaging, and SEO-optimized content makes us a top websites content writing services company in USA.
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