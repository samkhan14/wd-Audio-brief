@extends('frontend.layouts.master')
@push('customStyles')

@endpush
@section('container')        
<section class="inner-banner gradient-circle leftCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="inner-bannerHeading">
              <h1>Best Digital Marketing Company in USA</h1>
              <p>Are you seeking to enhance your online presence? We are the best digital marketing company in USA, specializing in implementing cutting-edge strategies to deliver tangible 
              outcomes. Our dedicated team is deeply committed to offering cost-effective and efficient solutions customized to meet your specific requirements.</p>
              <ul>
                <li>Comprehensive digital marketing services</li>
                <li>Customized strategies for maximum impact</li>
                <li>Dedicated support from industry professionals</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">
                Get Started Now
              </a>
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
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/digital-marketing/banner-img.png"
                class="width-100"
                alt=""
              />
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
              <h2>Digital Marketing That Boosts Visibility</h2>
              <p>Our digital marketing services are designed to enhance your online presence and boost your visibility across various platforms. We utilize the latest techniques and proven 
              strategies to ensure your brand stands out in the competitive digital marketplace. Whether you are considering hiring a digital marketing agency for the first time or looking 
              to switch, we provide the expertise and results you need.</p>
              <ul>
                <li>Targeted advertising campaigns</li>
                <li>Comprehensive SEO strategies</li>
                <li>Engaging social media marketing</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">
                Get Started Now
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="boxes-bgArea leftBottom">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/digital-marketing-boost.png"
                class="width-100"
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
              <h2>Promote Your Brand with Customized Digital Marketing Strategies</h2>
              <p>Transform your online presence and grow your brand with our bespoke digital marketing solutions. Being a top digital marketing company in the USA, we specialize in 
              creating strategies that drive targeted traffic, enhance engagement, and boost conversions, ensuring your business achieves remarkable growth and visibility.</p>
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

    <section class="section-padding position-relative z-index1 overflow-hidden primary-extra-light-bg">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6">
            <div class="boxes-bgArea rightBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/types/1.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-heading">
              <h2>
                SEO <span class="thin">(Search Engine Optimization)</span>
              </h2>
              <p>Our SEO services guarantee that your website achieves high rankings on search engines, leading to increased organic traffic and visibility. We focus on both on-page and 
              off-page optimization techniques to deliver long-term results.</p>
              <ul>
                <li>Keyword research and analysis</li>
                <li>On-page optimization</li>
                <li>Link building and outreach</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">
                Get Started Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding position-relative z-index1 overflow-hidden">
      <div class="container">
        <div class="row align-items-center col-reverse-mob rowGap4">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>SMM <span class="thin">(Socila Media Marketing)</span></h2>
              <p>Utilize the potential of social media through our SMM services. We specialize in developing compelling content and executing efficient strategies to enhance your brand's 
              visibility across all major platforms.</p>
              <ul>
                <li>Social media strategy development</li>
                <li>Content creation and scheduling</li>
                <li>Audience engagement and growth</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">
                Get Started Now
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="boxes-bgArea leftBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/types/2.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding position-relative z-index1 overflow-hidden primary-extra-light-bg">
      <div class="container">
        <div class="row align-items-center rowGap4">
          <div class="col-md-6">
            <div class="boxes-bgArea rightBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/types/3.png"
                class="width-100"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-heading">
              <h2>PPC <span class="thin">(Pay-Per-Click Advertising)</span></h2>
              <p>Maximize your ROI with our PPC services. We manage and optimize your ad campaigns to ensure you get the best results for your budget.</p>
              <ul>
                <li>Campaign setup and management</li>
                <li>Keyword research and targeting</li>
                <li>Performance tracking and reporting</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">
                Get Started Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding position-relative z-index1 overflow-hidden">
      <div class="container">
        <div class="row align-items-center col-reverse-mob rowGap4">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Email Marketing</h2>
              <p>Our tailored email marketing campaigns can help you stay in touch with your intended audience. We craft personalized messages that resonate with your customers and drive 
              conversions.</p>
              <ul>
                <li>Campaign strategy and design</li>
                <li>List segmentation and targeting</li>
                <li>Performance analysis and optimization</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">
                Get Started Now
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="boxes-bgArea leftBottom web-design-imageArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/types/4.png"
                class="width-100"
                alt=""
              />
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
                <h2>Digital Marketing According to Your Needs!</h2>
                <p>Our digital marketing services are tailored to meet your business's unique needs. As an affordable digital marketing agency in USA, we create comprehensive strategies 
                that enhance your online presence, engage your audience, and drive conversions.</p>
              </div>
              <ul class="scroller-list">
                <li>
                  <a href="#web-firstScroller" class="active">
                    <span>01</span>
                    <p>Innovative Strategies That Deliver</p>
                  </a>
                </li>
                <li>
                  <a href="#web-secondScroller">
                    <span>02</span>
                    <p>Results-Driven Approach</p>
                  </a>
                </li>
                <li>
                  <a href="#web-thirdScroller">
                    <span>03</span>
                    <p>Expert Team of Professionals</p>
                  </a>
                </li>
                <li>
                  <a href="#web-forthScroller">
                    <span>04</span>
                    <p>Customized Client Solutions</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="scroller-item" id="web-firstScroller">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/digital-marketing/1.png"
                alt=""
              />
              <h3>
                <span>01</span>
                <strong>Innovative Strategies That Deliver</strong>
              </h3>
              <p>We utilize innovative strategies to ensure your digital marketing efforts deliver the desired results. Our approach combines creativity with data-driven insights to 
              craft campaigns that resonate with your audience.</p>
            </div>
            <div class="scroller-item" id="web-secondScroller">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/digital-marketing/2.png"
                alt=""
              />
              <h3>
                <span>02</span>
                <strong>Results-Driven Approach</strong>
              </h3>
              <p>Our results-driven approach focuses on achieving measurable outcomes. We set clear goals and track progress to ensure your marketing campaigns are effective and provide 
              a strong ROI.</p>
            </div>
            <div class="scroller-item" id="web-thirdScroller">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/digital-marketing/3.png"
                alt=""
              />
              <h3>
                <span>03</span>
                <strong>Expert Team of Professionals</strong>
              </h3>
              <p>Our team consists of industry professionals with years of experience in digital marketing. We stay updated with the latest trends and technologies to provide the best 
              services.</p>
            </div>
            <div class="scroller-item" id="web-forthScroller">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/scroller/digital-marketing/4.png"
                alt=""
              />
              <h3>
                <span>04</span>
                <strong>Customized Client Solutions</strong>
              </h3>
              <p>We understand that every business is unique. That’s why we offer bespoke solutions tailored to your specific needs and goals. Our personalized approach ensures you get 
              the best of digital marketing services for USA.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding split-section gradient-circle light-gradient rightCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 position-relative">
            <div class="lightBlue-area digitalMarketing-splitArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/circle.png"
                class="circle-img rotation-animation"
                alt=""
              />
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/seo-circle.png"
                class="banner-img"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <div class="dark-area">
              <div class="section-heading">
                <h2>Professional SEO Services</h2>
                <p>Our professional SEO services help your business achieve higher rankings and more visibility online. As one of the top digital marketing companies in USA, we use 
                proven techniques to drive organic traffic and improve your search engine presence.</p>
                <ul>
                  <li>Comprehensive SEO audits</li>
                  <li>Content creation and optimization</li>
                  <li>Local SEO for targeted visibility</li>
                  <li>Technical SEO improvements</li>
                  <li>Ongoing performance monitoring</li>
                </ul>
              </div>
              <div class="link-area">
                <a href="{{ route('brief') }}" class="primary">
                  Get Started Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding pb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Digital Marketing Services</h2>
            </div>
          </div>
          <div class="col-12">
            <div class="basic-tabs small-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#seo-digitalMarketing-service"
                  >
                    <span>SEO</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#ppc-digitalMarketing-service"
                  >
                    <span>PPC</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#content-writing-digitalMarketing-service"
                  >
                    <span>Content Writing</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#smm-digitalMarketing-service"
                  >
                    <span>SMM</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#email-marketing-digitalMarketing-service"
                  >
                    <span>Email Marketing</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="tab-content digitalMarketing-caseStudy">
              <div
                class="tab-pane fade active show"
                id="seo-digitalMarketing-service"
              >
                <div class="digital-marketing-carousel owl-carousel">
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>ZAD</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>45% increase in organic revenue in the first year!</h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>56%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>38%</h3>
                              <p>Increase in Organic Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>57%</h3>
                              <p>Increase in Organic Visitors</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>The fitness website faced low visibility and engagement due to outdated SEO practices and lack of targeted content, resulting in minimal organic traffic and user 
                                interaction.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Implementing a comprehensive digital marketing strategy, including modern SEO techniques, targeted content creation, and active social media campaigns, addressed the 
                                engagement and visibility issues.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>The big changes we made helped us get a lot more people visiting our website without needing to pay for ads. Our total earnings went up by 42% in the first year, 
                                showing that the new marketing plans really worked.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Metro</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/2/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>
                            <strong>43%</strong>
                            increase in organic revenue in the first year!
                          </h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>60%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>40%</h3>
                              <p>Increase in Web Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>51%</h3>
                              <p>Increase in Visitor Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>The website struggled with low organic visibility and minimal user engagement due to outdated SEO practices and a lack of targeted content, resulting in poor 
                                organic traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Implementing a comprehensive digital marketing strategy, including advanced SEO techniques, targeted content creation, and robust social media campaigns, 
                                effectively addressed these challenges.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These efforts led to significant improvements, with a notable increase in organic sessions and a substantial boost in overall revenue, demonstrating the success of 
                                the implemented strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="ppc-digitalMarketing-service">
                <div class="digital-marketing-carousel owl-carousel">
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Radiant</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/3/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>
                            <strong>48%</strong>
                            Increase in Google Shopping Revenue
                          </h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>53%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>37%</h3>
                              <p>Increase in Organic Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>54%</h3>
                              <p>Increase in Visitor Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>Radiant faced significant issues with low visibility and user engagement, primarily due to outdated SEO methods and a lack of relevant content, leading to minimal 
                                organic traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Adopting a holistic digital marketing approach, including modern SEO techniques, targeted content creation, and robust social media campaigns, effectively addressed 
                                these challenges.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These strategies led to remarkable improvements, with a significant rise in organic sessions and a substantial boost in overall revenue, demonstrating the success of 
                                the marketing initiatives.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Beauty BD</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/4/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>
                            <strong>41%</strong>
                            Increase in Google Shopping Revenue
                          </h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>53%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>35%</h3>
                              <p>Increase in Organic Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>54%</h3>
                              <p>Increase in User Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>Beauty BD faced challenges with low visibility and minimal user engagement due to outdated SEO techniques and lack of relevant content, resulting in poor organic 
                                traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Implementing a comprehensive digital marketing strategy, including modern SEO practices, targeted content creation, and robust social media marketing, effectively 
                                addressed these challenges.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These efforts resulted in significant improvements, with a marked increase in organic sessions and a substantial boost in overall revenue, demonstrating the success 
                                of the implemented strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="content-writing-digitalMarketing-service">
                <div class="digital-marketing-carousel owl-carousel">
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Shop Fisher</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/5/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>Customized Content Solutions Tailored to Increase 100% Effectiveness</h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>56%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>38%</h3>
                              <p>Increase in Organic Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>61%</h3>
                              <p>Increase in Visitor Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>Shop Fisher faced challenges related to low organic visibility and minimal user engagement, primarily due to outdated SEO practices and insufficiently targeted 
                                content, leading to reduced organic traffic and site interaction.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>To overcome these issues, a comprehensive digital marketing strategy was implemented. This included modern SEO techniques, creating targeted and engaging content, 
                                and leveraging robust social media marketing campaigns to increase visibility and attract more visitors.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These efforts resulted in a significant improvement in site performance, with a notable increase in organic sessions and a substantial boost in overall revenue, 
                                demonstrating the effectiveness of the new marketing strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Take chef</h2>
                          <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/6/main.webp" alt=""/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>Customized Content Solutions Tailored to Increase 100% Effectiveness</h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>58%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>40%</h3>
                              <p>Increase in Website Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>35%</h3>
                              <p>Increase in User Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>Take Chef faced challenges with low visibility and engagement due to outdated SEO practices and lack of targeted content, resulting in minimal organic traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Implementing modern SEO techniques, targeted content creation, and robust social media strategies effectively addressed these issues, enhancing site visibility and 
                                user engagement.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These strategic efforts led to significant improvements, including a notable increase in organic sessions and a substantial boost in overall revenue, demonstrating 
                                the success of the implemented marketing strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="smm-digitalMarketing-service">
                <div class="digital-marketing-carousel owl-carousel">
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Social</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/7/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>Attract 70% More Qualified Leads and Prospects Through Strategic SMM Efforts, Fueling Your Sales Pipeline For Growth</h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>40%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>46%</h3>
                              <p>Increase in Website Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>60%</h3>
                              <p>Increase in User Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>Social faced challenges related to low organic visibility and minimal user engagement due to outdated SEO practices and insufficiently targeted content, leading to 
                                reduced organic traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Implementing modern SEO techniques, creating targeted and engaging content, and leveraging robust social media marketing campaigns effectively addressed these 
                                issues, improving visibility and user engagement.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These efforts led to significant improvements, with a notable increase in organic sessions and a substantial boost in overall revenue, demonstrating the success of 
                                the implemented marketing strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Dashboard</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/8/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>Drive a 70% Increase in Qualified Leads with Expert Social Media Marketing Strategies</h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>62%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>72%</h3>
                              <p>Increase in Website Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>40%</h3>
                              <p>Increase in User Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>The main challenges included low organic visibility and minimal user engagement due to outdated SEO practices and lack of targeted content, resulting in reduced 
                                organic traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Implementing modern SEO techniques, creating targeted and engaging content, and leveraging robust social media marketing campaigns effectively addressed these 
                                issues, improving visibility and user engagement.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These efforts led to significant improvements, with a notable increase in organic sessions and a substantial boost in overall revenue, demonstrating the success of 
                                the implemented marketing strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="email-marketing-digitalMarketing-service">
                <div class="digital-marketing-carousel owl-carousel">
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Coffee Shop</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/9/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>Enhance Customer Relationships Through Personalized Emails, Increasing Loyalty and Engagement Rates by 70%</h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>39%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>56%</h3>
                              <p>Increase in Website Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>60%</h3>
                              <p>Increase in User Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>The coffee shop faced challenges with low visibility and minimal user engagement due to outdated SEO practices and lack of targeted content, resulting in poor 
                                organic traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>By adopting modern SEO techniques, creating engaging content, and leveraging robust social media campaigns, the visibility and user engagement issues were 
                                effectively addressed.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These strategic efforts led to significant improvements, including a notable increase in organic sessions and a substantial boost in overall revenue, demonstrating 
                                the success of the implemented marketing strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-imageArea">
                          <h2>Buoux Eclore</h2>
                          <img
                            src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/10/main.webp"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="digitalMarketing-caseStudy-detailArea">
                          <h3>Boost 65% Sales with Targeted Email Campaigns, Driving Conversions and Maximizing ROI</h3>
                          <ul>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/1.png"
                                alt=""
                              />
                              <h3>60%</h3>
                              <p>Increase in Organic Sessions</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/2.png"
                                alt=""
                              />
                              <h3>42%</h3>
                              <p>Increase in Website Traffic</p>
                            </li>
                            <li>
                              <img
                                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/stats/3.png"
                                alt=""
                              />
                              <h3>58%</h3>
                              <p>Increase in User Engagement</p>
                            </li>
                          </ul>
                          <div class="digitalMarketing-caseStudy-details">
                            <div class="row rowGap2">
                              <div class="col-md-4">
                                <h3>Challenges</h3>
                                <p>Buoux Eclore faced challenges with low visibility and minimal user engagement due to outdated SEO practices and lack of targeted content, resulting in poor organic 
                                traffic.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Solutions</h3>
                                <p>Adopting modern SEO techniques, creating targeted and engaging content, and leveraging robust social media campaigns effectively addressed these challenges.</p>
                              </div>
                              <div class="col-md-4">
                                <h3>Results</h3>
                                <p>These efforts led to significant improvements, including a notable increase in organic sessions and a substantial boost in overall revenue, demonstrating the 
                                success of the implemented marketing strategies.</p>
                                <img
                                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/digital-marketing/case-study/1/result.png"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
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

    <section class="section-padding gradient-circle rightCenter-gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading">
              <p class="topHeading">Elevate Your Social Media Presence</p>
              <h2>Engage and Convert with Innovative Digital Marketing Approaches</h2>
              <p>At Website Digitals, effective digital marketing goes beyond visibility. It's about building meaningful connections and driving real engagement. Our innovative approaches 
              captivate your audience and convert visitors into loyal customers. By leveraging advanced techniques and creative strategies, we ensure your brand stands out with bespoke 
              engagement, compelling content, and continuous optimization. Let us transform your online presence into a dynamic, engaging platform, encouraging connections that drive 
              sustained business growth.</p>
            </div>
            <ul class="partnersUl">
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/1.png" alt="" />
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/2.png" alt="" />
              </li>
              <li>
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/partners/3.png" alt="" />
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="convertCustomer-area">
              <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/ipad.png" alt="" />
              <div class="convertCustomer-images parallax-container">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/iphone.png"
                  alt=""
                  class="bottom-left parallax-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/graph.png"
                  alt=""
                  class="top-left parallax-image"
                  data-speed="0.035"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/convert-customer/editBar.png"
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
                  <h3>Strategic Planning</h3>
                  <p>We start with strategic planning to understand your business goals and target audience. This helps us create a comprehensive digital marketing plan specified to 
                  your needs.</p>
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
                  <h3>Content Creation & Optimization</h3>
                  <p>Our team develops high-quality content that engages your audience and is optimized for search engines. This includes blog posts, social media updates, and other 
                  digital assets.</p>
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
                  <h3>Campaign Management</h3>
                  <p>We manage your digital marketing campaigns across various platforms to ensure consistent and compelling messaging. Increasing engagement and conversions is our 
                  main goal.</p>
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
                  <h3>Performance Tracking &amp; Analysis</h3>
                  <p>We use advanced analytics tools to track the performance of your digital marketing efforts. This allows us to make data-driven decisions and continuously optimize 
                  your campaigns.</p>
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
                  <h3>Continuous Improvement</h3>
                  <p>Our process involves continuous improvement based on performance data and feedback. We refine strategies and tactics to ensure your digital marketing efforts 
                  remain effective and aligned with your goals.</p>
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
                  >What makes your agency stand out among digital marketing service companies in USA?</button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We stand out due to our innovative strategies, personalized approach, and commitment to delivering measurable results for our clients.
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
                  >Why should I choose a digital marketing firm USA?</button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Choosing a digital marketing firm USA ensures you work with experts familiar with the local market dynamics and industry standards.
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
                  >How do top digital marketing agencies USA deliver effective results?</button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Top digital marketing agencies USA use data-driven strategies, latest tools, and experienced professionals to deliver effective results.
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
                  >What services does the best digital marketing agency USA offer?</button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    The best digital marketing agency USA offers comprehensive services, including SEO, PPC, social media marketing, content creation, and email marketing.
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
                  >How do I find the best digital marketing firms in USA?</button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Look for firms with a proven track record, client testimonials, a strong portfolio, and bespoke marketing solutions to find the best digital marketing firms in USA.
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
                  >Why should I hire a digital marketing expert in USA?</button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Hiring a digital marketing expert in the USA provides you with specialized knowledge, local market insights, and strategies tailored to your business needs.
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
                  >How does your company stay updated with digital marketing trends?</button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We stay current by attending industry events, webinars, and ongoing professional development.
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
                  >Can your strategies be customized for small businesses?</button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-8"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Yes, we tailor scalable and effective digital marketing strategies to meet the unique needs of small businesses.
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
                  >How do you measure campaign success?</button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We use KPIs like website traffic, conversion rates, click-through rates, and ROI to gauge success.
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
                  >What support can clients expect during a campaign?</button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    Clients receive regular updates, performance reports, strategy sessions, and direct access to our experts.
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