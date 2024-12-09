
<style>
    .caseStudyPopup {
        max-width: none;
        padding: 0 1rem;
        height: 100vh;
        max-height: initial;
        width: 100%;
        border-radius: 0;
        display: flex;
    }
    
    .webPortfolio-caseStudyClose-btn {
        position: absolute;
        display: flex;
        top: 0;
        right: 0;
        justify-content: center;
        align-items: center;
        width: 3.5rem;
        height: 3.5rem;
        background: var(--text-color);
        color: #fff;
        font-size: 2rem;
        cursor: pointer;
    }
    
    .portfolio-inner-tabs-div .basic-tabs {
        margin-top: -3.5rem;
    }
    
    .portfolio-inner-tabs-div .nav-tabs > .nav-item > .nav-link {
        padding: 0.75rem 1.25rem;
    }
    
    .portfolio-inner-tabs-div .nav-tabs > .nav-item > .nav-link::before {
        height: 0.75rem;
    }
    
    .arrow-absolute {
        top: 15%;
        transform: translate(25%, -50%);
    }
    
    .basic-tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 2rem;
    }
    
    #portfolioModal .modal-body button {
    position: absolute;
    top: 8px;
    right: 9px;
    background: #222222;
    color: #fff;
    opacity: 1;
    padding: 0 .6rem;
    border-radius: 0;
    font-size: 1.9rem;
    text-align: center;
    width: auto;
    height: auto;
}

#portfolioModal .modal-body {
    padding: 6rem 5rem;
}

.arrow-absolute {
    top: 15%;
    transform: translate(25%, -50%);
}

#portfolioModal .modal-dialog .modal-content::after {
    --bg-color: #3cb8ff;
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    transform: translate(-50%, -50%);
    width: 22.5rem;
    height: 22.5rem;
    opacity: 0.325;
    background: radial-gradient(var(--bg-color) -30%, transparent 70%);
    z-index: 0;
}

#portfolioModal .modal-dialog .modal-content::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    background: url(../frontend/assets/images/wd-5/bg.png) no-repeat center center;
    background-size: contain;
    opacity: 0.65;
    z-index: 0;
    transform: translate(-50%, -50%);
}

#portfolioModal .modal-dialog .modal-content {
    border: 0;
    border-radius: 0;
}

#portfolioModal .modal-dialog {
    max-width: 70rem;
}

.popup-area.beforeAfterPopup .modal-dialog {
    margin: 0 auto;
}

.popup-area.beforeAfterPopup {
    max-width: 70rem;
    border-radius: 0;
}

#portfolioModal .before-after-div .before-div, 
#portfolioModal .before-after-div .after-div {
    width: 100%;
}

#image-before {
    margin-top: -1.625rem;
    z-index: 1;
    pointer-events: none;
}

.arrow-absolute {
    position: absolute;
    top: 44%;
    right: 0;
    transform: translate(-50%, -50%);
    max-width: 3.5rem;
}

.before-after-div .before-div > p {
    background-color: #3cb252;
}

.before-after-div .after-div > p {
    background-color: var(--primary);
}

.before-after-div:hover #image-before {
    transform: translateX(62%);
}

.before-after-div:hover #image-after {
    transform: translateX(-62%);
    z-index: 1;
}

.before-div, .after-div {
    width: 50%;
    height: 100%;
    transition: transform 0.5s ease;
    position: relative;
}

#image-after {
    margin-top: 1rem;
    margin-left: -9rem;
    pointer-events: none;
}

.image {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.before-after-div p {
    position: absolute;
    left: 50%;
    bottom: 0;
    width: fit-content;
    font-size: 1.125rem;
    color: #fff;
    font-weight: 600;
    padding: 0.375rem 1.25rem;
    border-radius: 2rem;
    transform: translate(-50%, 25%);
    margin: 0;
}

.before-after-div {
    display: flex;
    width: 100%;
    height: 22rem;
    justify-content: center;
}

#portfolioModal .modal-dialog {
    max-width: 70rem;
}

#portfolioModal .modal-dialog .modal-content::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    background: url(../frontend/assets/images/wd-5/bg.png) no-repeat center center;
    background-size: contain;
    opacity: 0.65;
    z-index: 0;
    transform: translate(-50%, -50%);
}

#portfolioModal .modal-dialog .modal-content::after {
    --bg-color: #3cb8ff;
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    transform: translate(-50%, -50%);
    width: 22.5rem;
    height: 22.5rem;
    opacity: 0.325;
    background: radial-gradient(var(--bg-color) -30%, transparent 70%);
    z-index: 0;
}
</style>


    
<div class="popup-area caseStudyPopup caseStudyPopup-1">
    <div class="row webPortfolio-caseStudyArea">
      <div class="webPortfolio-caseStudyClose-btn">
        <i class="fa-solid fa-xmark"></i>
      </div>
      <div class="col-md-8">
        <div class="webPortfolio-caseStudyTabsArea">
          <div class="webPortfolio-caseStudyTabs">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
                    <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/website.webp?format=png" alt="">
                  </a>
                </li><li class="nav-item">
                  <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
                    <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/innerpage1.webp?format=png" alt="">
                  </a>
                </li><li class="nav-item">
                  <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
                    <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/innerpage2.webp?format=png" alt="">
                  </a>
                </li><li class="nav-item">
                  <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
                    <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/innerpage3.webp?format=png" alt="">
                  </a>
                </li>
            </ul>
          </div>
          <div class="tab-content webPortfolio-caseStudy-content">
            <div class="tab-pane fade active show" id="website-caseStudy1">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/website.webp'></div>
    </div><div class="tab-pane fade" id="website-caseStudy2">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/innerpage1.webp'></div>
    </div><div class="tab-pane fade" id="website-caseStudy3">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/innerpage2.webp'></div>
    </div><div class="tab-pane fade" id="website-caseStudy4">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/innerpage3.webp'></div>
    </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="webPortfolio-caseStudyDetailArea">
          <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/1/logo-energy.webp?format=png" alt="">
            <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We revamped EnergyLand's website to focus on attracting B2B clients in the solar and renewable energy market. The new design emphasizes clear information, 
                    easy navigation, and optimized lead generation to drive business growth.</p>
          <div class="webPortfolio-caseStudyDetail">
            
                    <!--<p class="portfolio-para">We revamped EnergyLand's website to focus on attracting B2B clients in the solar and renewable energy market. The new design emphasizes clear information, 
                    easy navigation, and optimized lead generation to drive business growth.</p>-->
                    
                <div class="portfolio-inner-tabs-div">
                    <div class="basic-tabs small-tabs">
                        <ul class="nav nav-tabs inner-tabs" id="myTabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#goals1">Goals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#obstacles1">Obstacles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#results1">Results</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content web-portfolio-content inner-tab-content">
                            <div class="tab-pane fade active show" id="goals1">
                                <ul class="horizontal-points goals-data">
                                    <li>Design a professional website tailored for B2B clients in the renewable energy sector.</li>
                                    <li>Enhance lead generation with an optimized layout and effective calls to action.</li>
                                    <li>Improve site navigation to provide a seamless and user-friendly experience.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="obstacles1">
                                <ul class="horizontal-points obstacles-data">
                                    <li>The previous website lacked a B2B focus, targeting more general consumers.</li>
                                    <li>Outdated design and structure caused low engagement and poor conversions.</li>
                                    <li>Limited tools were available to capture and nurture business leads effectively.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="results1">
                                <ul class="horizontal-points results-data">
                                    <li>Launched a new B2B-focused website that highlighted EnergyLand’s expertise and services.</li>
                                    <li>Increased business leads through an improved design with clear calls to action.</li>
                                    <li>Boosted engagement and conversions with a user-friendly, seamless online experience.</li>
                                </ul>
                            </div>
                        </div>
                </div>
                    
                    



                  <!--<h3>Energyland</h3>
                  <p>A forward-thinking renewable energy platform that provides innovative solutions in solar and wind energy. Energyland offers detailed project insights, customizable energy plans, and a user-friendly interface for seamless interaction. It integrates with smart home systems and includes a robust support network for consumers, ensuring an eco-friendly transition is both smooth and efficient.</p>
                -->
                
                  
            <div class="view-before-after-div">
                <!--<a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal" id="portfolioModalopen"></a>-->
              <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
              <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-2">
    <div class="row webPortfolio-caseStudyArea">
      <div class="webPortfolio-caseStudyClose-btn">
        <i class="fa-solid fa-xmark"></i>
      </div>
      <div class="col-md-8">
        <div class="webPortfolio-caseStudyTabsArea">
          <div class="webPortfolio-caseStudyTabs">
            <ul class="nav nav-tabs">
              <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
        <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/website.webp?format=png" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
        <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/innerpage1.webp?format=png" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
        <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/innerpage2.webp?format=png" alt="">
      </a>
    </li><li class="nav-item">
      <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
        <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/innerpage3.webp?format=png" alt="">
      </a>
    </li>
            </ul>
          </div>
          <div class="tab-content webPortfolio-caseStudy-content">
            <div class="tab-pane fade active show" id="website-caseStudy1">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/website.webp'></div>
    </div><div class="tab-pane fade" id="website-caseStudy2">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/innerpage1.webp'></div>
    </div><div class="tab-pane fade" id="website-caseStudy3">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/innerpage2.webp'></div>
    </div><div class="tab-pane fade" id="website-caseStudy4">
      <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/innerpage3.webp'></div>
    </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="webPortfolio-caseStudyDetailArea">
          <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/2/logo-flight.webp?format=png" alt="">
            <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a brand-new website for Exclusive Aircraft to establish a powerful online presence in the private jet and aviation industry. The focus was on 
                    attracting B2B clients through an exclusive and professional online experience.</p>
          <div class="webPortfolio-caseStudyDetail">
            
                  
                  <div class="portfolio-inner-tabs-div">
                        <div class="basic-tabs small-tabs">
                            <ul class="nav nav-tabs inner-tabs">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#goals2">Goals</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#obstacles2">Obstacles</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#results2">Results</a>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="tab-content web-portfolio-content inner-tab-content">
                            <div class="tab-pane fade show active" id="goals2">
                                <ul class="horizontal-points">
                                    <li>Build a premium website tailored to high-end B2B clients in the aviation industry.</li>
                                    <li>Integrate lead generation tools to attract and convert premium aircraft service clients.</li>
                                    <li>Design a user-friendly experience to improve client engagement and navigation.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="obstacles2">
                                <ul class="horizontal-points">
                                    <li>No previous website to showcase the luxury and exclusivity of the brand’s services.</li>
                                    <li>Limited resources to effectively capture and convert high-value business clients.</li>
                                    <li>The need for a clear structure to guide clients through the offered services seamlessly.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="results2">
                                <ul class="horizontal-points">
                                    <li>Launched a new, high-end website that communicates luxury to premium business clients.</li>
                                    <li>Implemented lead capture tools that significantly increased inquiries and client leads.</li>
                                    <li>Delivered a smooth, user-friendly experience that improved engagement and conversions.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                  
                  
            <div class="view-before-after-div">
              <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
              <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<div class="popup-area caseStudyPopup caseStudyPopup-3">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/3/logo-food.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a new website for Simply Meals, focusing on delivering a smooth and engaging online experience for B2B clients in the food delivery and catering 
                        services industry. The website was designed to highlight their unique services and drive lead generation.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals3">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles3">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results3">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals3">
                                    <ul class="horizontal-points">
                                        <li>Build a modern website tailored for B2B clients in the food delivery industry.</li>
                                        <li>Integrate lead generation features to attract and convert high-value business clients.</li>
                                        <li>Improve the user experience to ensure smooth navigation and better engagement.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles3">
                                    <ul class="horizontal-points">
                                        <li>No prior website existed to showcase Simply Meals' unique food services to businesses.</li>
                                        <li>Limited tools for lead generation, making it difficult to capture potential clients.</li>
                                        <li>The need for an organized structure to present services clearly and professionally.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results3">
                                    <ul class="horizontal-points">
                                        <li>Successfully launched a modern B2B website that effectively showcases Simply Meals’ offerings.</li>
                                        <li>Integrated lead capture tools that significantly boosted client inquiries and conversions.</li>
                                        <li>Delivered a user-friendly website that improved engagement and streamlined navigation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>


<div class="popup-area caseStudyPopup caseStudyPopup-4">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/4/logo-legal.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We crafted a custom web solution for The Griffin Law Firm to establish a compelling digital presence. The project focused on enhancing client trust, 
                        simplifying service discovery, and building pathways to legal consultations.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals4">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles4">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results4">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals4">
                                    <ul class="horizontal-points">
                                        <li>Develop a professional and secure website that instills trust in potential legal clients.</li>
                                        <li>Implement clear contact forms and appointment scheduling for easy client interaction.</li>
                                        <li>Ensure legal service information is easy to find, promoting client education and engagement.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles4">
                                    <ul class="horizontal-points">
                                        <li>The firm lacked a digital presence, making it difficult for clients to find and trust their services online.</li>
                                        <li>There was no effective way for clients to schedule consultations or access legal resources.</li>
                                        <li>Legal services were not clearly categorized, leading to confusion for potential clients.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results4">
                                    <ul class="horizontal-points">
                                        <li>Successfully launched a secure and trustworthy website that enhanced the firm’s credibility online.</li>
                                        <li>Integrated a simple and effective scheduling system that made booking consultations easier.</li>
                                        <li>Streamlined legal service categories, improving client understanding and access to information.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-5">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/5/logo-medical.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created an intuitive and informative website for IHMP Health Management to better serve their clients in the healthcare sector. The project focused on 
                        enhancing service visibility, client engagement, and providing easy access to health management resources.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals5">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles5">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results5">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals5">
                                    <ul class="horizontal-points">
                                        <li>Build an easy-to-navigate website to clearly showcase IHMP’s health management services.</li>
                                        <li>Develop resource pages that provide useful health information and engage clients.</li>
                                        <li>Ensure the website is mobile-responsive to cater to clients accessing services on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles5">
                                    <ul class="horizontal-points">
                                        <li>The lack of an online platform made it difficult for clients to find information about their services.</li>
                                        <li>No digital system existed for sharing health management resources with their clients.</li>
                                        <li>Ensuring the website was optimized for mobile use while maintaining a professional design.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results5">
                                    <ul class="horizontal-points">
                                        <li>Created a user-friendly website that showcased health management services clearly and effectively.</li>
                                        <li>Developed resource pages that provided valuable health content, increasing client engagement.</li>
                                        <li>Successfully launched a mobile-responsive website, improving access for clients on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-6">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/cms/6/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/portal/4/logos-03.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a comprehensive website for Jobzilla, designed to streamline their recruitment services and improve their connection with job seekers and 
                        employers. The focus was on creating a functional platform that supports both recruitment and job search.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals6">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles6">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results6">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals6">
                                    <ul class="horizontal-points">
                                        <li>Build a streamlined platform for job seekers and employers to connect efficiently.</li>
                                        <li>Implement job listing features that allow easy filtering and application tracking.</li>
                                        <li>Ensure the website provides a seamless user experience for both desktop and mobile users.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles6">
                                    <ul class="horizontal-points">
                                        <li>The company had no digital platform to host job listings and manage applications.</li>
                                        <li>No system was in place to enable employers to post jobs and track applications efficiently.</li>
                                        <li>Designing a dual-user interface that caters to both job seekers and employers was challenging.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results6">
                                    <ul class="horizontal-points">
                                        <li>Launched a fully functional platform where job seekers and employers could connect easily.</li>
                                        <li>Integrated advanced job posting and application tracking features, enhancing user efficiency.</li>
                                        <li>Delivered a responsive, user-friendly experience that worked well across all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-7">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/5/logo-restaurant.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a visually appealing and engaging website for Ocean Grill, focusing on showcasing their fresh seafood offerings and unique dining 
                    experience. The project aimed to attract more customers by enhancing their online presence and simplifying reservations.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals7">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles7">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results7">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals7">
                                    <ul class="horizontal-points">
                                        <li>Create an attractive website to showcase the restaurant’s fresh seafood menu and ambiance.</li>
                                        <li>Implement an online reservation system to simplify table bookings for customers.</li>
                                        <li>Ensure the website is mobile-friendly for customers browsing and booking on-the-go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles7">
                                    <ul class="horizontal-points">
                                        <li>The restaurant had no online presence to effectively showcase its menu or atmosphere.</li>
                                        <li>Lacked a streamlined booking system for customers to reserve tables easily.</li>
                                        <li>Needed a design that balanced visual appeal with functionality across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results7">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually engaging website that highlighted the fresh seafood menu and dining experience.</li>
                                        <li>Integrated an easy-to-use online reservation system, simplifying the booking process.</li>
                                        <li>Delivered a mobile-responsive website, ensuring a seamless experience for customers on all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-8">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/edu-logo.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built an educational platform for Kingster University that allows students and faculty to easily access information about courses, 
                    admissions, and university news. The website focuses on improving communication and accessibility for prospective and current students.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals8">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles8">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results8">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals8">
                                    <ul class="horizontal-points">
                                        <li>Develop an informative and user-friendly platform to provide details about courses and admissions.</li>
                                        <li>Implement a student portal for accessing academic information and university updates.</li>
                                        <li>Ensure the website is accessible on mobile devices to enhance user experience on all platforms.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles8">
                                    <ul class="horizontal-points">
                                        <li>The university had no comprehensive online platform to centralize course information and admissions details.</li>
                                        <li>There was no digital portal for students to access academic resources or updates.</li>
                                        <li>The challenge was ensuring the website remained easy to navigate while handling a large amount of content.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results8">
                                    <ul class="horizontal-points">
                                        <li>Successfully created a dynamic platform that streamlined access to course details, admissions, and university resources.</li>
                                        <li>Integrated a student portal, allowing students to easily access academic information and updates.</li>
                                        <li>Launched a mobile-friendly website that provided a seamless experience across various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-9">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/logo-04.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a comprehensive website for Flamekast Estate &amp; Builders, focusing on showcasing their construction projects and real estate 
                    services. The website was built to highlight their expertise and provide an easy way for clients to explore available properties and services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals9">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles9">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results9">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals9">
                                    <ul class="horizontal-points">
                                        <li>Build a professional website to showcase Flamekast’s real estate and construction projects.</li>
                                        <li>Implement property listings and project galleries to engage potential clients and investors.</li>
                                        <li>Ensure the website is optimized for mobile access, providing a seamless browsing experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles9">
                                    <ul class="horizontal-points">
                                        <li>The company lacked a digital platform to display their portfolio of real estate and construction projects.</li>
                                        <li>There was no system for showcasing properties and ongoing projects to potential clients online.</li>
                                        <li>Designing a visually appealing yet functional site to accommodate property listings and project galleries.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results9">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually striking website that effectively showcased real estate and construction projects.</li>
                                        <li>Integrated a property listing system, making it easy for clients to browse and inquire about properties.</li>
                                        <li>Delivered a mobile-optimized platform that improved user engagement and access on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-10">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/3/jewelery-logo.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a visually appealing and functional website for Zen Crystals of NY, focusing on showcasing their crystal products and enhancing 
                    the online shopping experience. The project aimed to connect with wellness enthusiasts and drive online sales.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals10">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles10">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results10">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals10">
                                    <ul class="horizontal-points">
                                        <li>Create an aesthetically pleasing website to highlight the beauty of crystal products and their uses.</li>
                                        <li>Develop an e-commerce platform to facilitate seamless online purchases for customers.</li>
                                        <li>Ensure the website is optimized for mobile shopping to enhance user convenience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles10">
                                    <ul class="horizontal-points">
                                        <li>The brand had no existing online store to showcase its unique crystal products and accessories.</li>
                                        <li>There was no e-commerce system in place for handling orders, payments, or customer inquiries.</li>
                                        <li>Needed to balance visual appeal with functionality to ensure a smooth shopping experience across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results10">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually captivating website that effectively showcased crystal products and their benefits.</li>
                                        <li>Integrated a user-friendly e-commerce system that streamlined online sales and customer inquiries.</li>
                                        <li>Delivered a mobile-responsive platform, ensuring easy and convenient shopping for customers on the go.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-11">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/2/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/4/logo-pet.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a comprehensive website for PawCare, aimed at promoting their pet care services and improving customer interaction. The site 
                    focuses on showcasing their expertise in pet care and providing a user-friendly way for customers to book appointments and access services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals11">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles11">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results11">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals11">
                                    <ul class="horizontal-points">
                                        <li>Develop an engaging website that highlights PawCare’s wide range of pet care services.</li>
                                        <li>Implement an online booking system to streamline appointments for pet owners.</li>
                                        <li>Ensure the website is optimized for mobile devices to cater to customers on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles11">
                                    <ul class="horizontal-points">
                                        <li>The company had no online platform to promote their pet care services effectively.</li>
                                        <li>There was no system in place for scheduling pet care appointments digitally.</li>
                                        <li>Ensuring the design balanced informative content with easy navigation across devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results11">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually engaging website that effectively showcased PawCare’s services and expertise.</li>
                                        <li>Integrated a convenient booking system, making it easier for customers to schedule pet care appointments.</li>
                                        <li>Delivered a mobile-friendly site that ensured a seamless experience for customers on all devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-12">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/6/logo-education1.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a feature-rich website for Aspire Academy to provide students and parents with access to academic programs, enrollment 
                    information, and educational resources. The project focused on creating a platform that supports student engagement and academic growth.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals12">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles12">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results12">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals12">
                                    <ul class="horizontal-points">
                                        <li>Build an educational platform that clearly presents Aspire Academy’s academic programs and resources.</li>
                                        <li>Implement an online enrollment system to simplify the application process for new students.</li>
                                        <li>Ensure the website is mobile-responsive for easy access by students and parents on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles12">
                                    <ul class="horizontal-points">
                                        <li>The academy lacked an online presence to display its programs and communicate with students and parents.</li>
                                        <li>There was no system for handling online enrollment, making it difficult for prospective students to apply.</li>
                                        <li>The challenge was organizing large amounts of academic information in a clear, accessible way.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results12">
                                    <ul class="horizontal-points">
                                        <li>Launched a comprehensive website that effectively showcases academic programs and educational resources.</li>
                                        <li>Integrated an online enrollment system, streamlining the application process for new students.</li>
                                        <li>Delivered a mobile-friendly site, providing seamless access to the academy’s resources on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-13">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/1/logo-01.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a fully functional e-commerce platform for Pixio, aimed at improving their online shopping experience and boosting sales. The 
                    project focused on delivering a user-friendly interface, product visibility, and streamlined shopping functionality for customers.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals13">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles13">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results13">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals13">
                                    <ul class="horizontal-points">
                                        <li>Build a user-friendly e-commerce platform to showcase Pixio’s wide range of products.</li>
                                        <li>Implement a secure payment system for seamless and safe transactions.</li>
                                        <li>Ensure the website is mobile-optimized to enhance the shopping experience for customers on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles13">
                                    <ul class="horizontal-points">
                                        <li>Pixio had no online store to sell their products, limiting their digital reach and potential sales.</li>
                                        <li>No system was in place for managing secure transactions or tracking customer orders.</li>
                                        <li>Designing an intuitive and visually appealing layout for the e-commerce site was a challenge.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results13">
                                    <ul class="horizontal-points">
                                        <li>Launched a responsive e-commerce platform that showcased Pixio’s product range clearly and attractively.</li>
                                        <li>Integrated a secure payment gateway, making transactions smooth and safe for customers.</li>
                                        <li>Delivered a mobile-friendly shopping experience, improving customer engagement and sales on various devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-14">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/4/logo-04.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a sleek and modern e-commerce platform for Sofee Cosmetics, aimed at enhancing their online presence and driving product sales. 
                    The focus was on creating an appealing online store that reflects their brand's identity and provides a seamless shopping experience.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals14">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles14">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results14">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals14">
                                    <ul class="horizontal-points">
                                        <li>Build a visually appealing e-commerce platform to highlight Sofee Cosmetics’ product line.</li>
                                        <li>Implement a smooth checkout process to ensure a hassle-free shopping experience for customers.</li>
                                        <li>Ensure the website is optimized for mobile devices to enhance accessibility and convenience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles14">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked a digital storefront to showcase their cosmetics products and drive online sales.</li>
                                        <li>No system was in place for managing customer orders or offering a seamless checkout experience.</li>
                                        <li>Designing a site that balanced aesthetics with functionality, ensuring both product appeal and usability.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results14">
                                    <ul class="horizontal-points">
                                        <li>Launched a stylish and responsive e-commerce platform that beautifully displayed Sofee’s product range.</li>
                                        <li>Integrated a user-friendly checkout system, making it easier for customers to complete purchases.</li>
                                        <li>Delivered a mobile-optimized platform that improved accessibility, increasing customer engagement and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-15">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/5/logo-06.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a functional and aesthetically pleasing e-commerce platform for Timetrek, a brand focused on selling high-quality timepieces. The 
                    project centered on delivering a smooth shopping experience while highlighting their collection of luxury watches.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals15">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles15">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results15">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals15">
                                    <ul class="horizontal-points">
                                        <li>Build a high-end e-commerce website to showcase Timetrek’s luxury watch collection.</li>
                                        <li>Implement a streamlined checkout process to make purchasing quick and easy for customers.</li>
                                        <li>Ensure the site is mobile-responsive to provide a seamless shopping experience across devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles15">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online presence to effectively display their timepieces and increase sales.</li>
                                        <li>No system existed for handling secure transactions or tracking customer purchases efficiently.</li>
                                        <li>The challenge was to design a site that balanced luxury aesthetics with user-friendly functionality.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results15">
                                    <ul class="horizontal-points">
                                        <li>Launched a sophisticated e-commerce platform that perfectly showcased Timetrek’s timepiece collection.</li>
                                        <li>Integrated a secure and easy-to-use checkout system that improved the overall shopping experience.</li>
                                        <li>Delivered a mobile-optimized site, increasing customer engagement and sales across multiple devices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-16">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/2/logo-02.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We designed a modern e-commerce platform for Flamekast, specializing in luxury furniture. The project focused on creating a visually 
                    appealing website that offers seamless navigation for customers.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals16">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles16">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results16">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals16">
                                    <ul class="horizontal-points">
                                        <li>Create an elegant website to showcase Flamekast's luxury furniture collection.</li>
                                        <li>Implement a detailed product catalog to allow customers to explore and purchase furniture online.</li>
                                        <li>Ensure the platform is mobile-responsive for an improved user experience on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles16">
                                    <ul class="horizontal-points">
                                        <li>No online presence to showcase the wide range of Flamekast’s premium furniture.</li>
                                        <li>Lack of a proper system to manage online transactions and product inquiries.</li>
                                        <li>Designing a site that combined luxury appeal with easy navigation for online shopping.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results16">
                                    <ul class="horizontal-points">
                                        <li>Launched a visually appealing e-commerce site that effectively displayed the furniture collection.</li>
                                        <li>Integrated a user-friendly product catalog and checkout process for smooth transactions.</li>
                                        <li>Delivered a mobile-responsive platform, increasing customer engagement and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-17">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/6/logo-05.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built a robust e-commerce platform for Exotec Cars, allowing users to explore and purchase luxury car accessories. The project focused on 
                    creating a streamlined shopping experience that reflected the brand's premium nature.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                     
                        <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals17">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles17">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results17">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals17">
                                    <ul class="horizontal-points">
                                        <li>Create a sleek website that highlights Exotec’s range of luxury car accessories.</li>
                                        <li>Develop a smooth and secure checkout process to ensure customer satisfaction.</li>
                                        <li>Optimize the site for mobile devices to enhance the user experience on all platforms.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles17">
                                    <ul class="horizontal-points">
                                        <li>No digital storefront to showcase Exotec’s premium car accessories, limiting sales opportunities.</li>
                                        <li>No system in place to manage product listings or process transactions effectively.</li>
                                        <li>Balancing visual appeal with functionality to ensure a seamless shopping experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results17">
                                    <ul class="horizontal-points">
                                        <li>Launched a sleek e-commerce site that showcased Exotec’s luxury car accessories effectively.</li>
                                        <li>Integrated a secure checkout system, providing a smooth and reliable shopping experience.</li>
                                        <li>Delivered a mobile-optimized site, boosting user engagement and product sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                     
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-18">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/e-com/3/logo-03.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a performance-driven e-commerce platform for Noxbe, specializing in outdoor and cycling gear. The project focused on creating a 
                    user-friendly website that enhances customer engagement and drives sales.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals18">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles18">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results18">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals18">
                                    <ul class="horizontal-points">
                                        <li>Build a functional and user-friendly website to promote Noxbe’s outdoor and cycling products.</li>
                                        <li>Implement an efficient product filtering system to help customers find the right products quickly.</li>
                                        <li>Ensure the platform is mobile-responsive for easy shopping across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles18">
                                    <ul class="horizontal-points">
                                        <li>No online store to display Noxbe’s wide range of cycling gear, reducing sales potential.</li>
                                        <li>No filtering system in place for customers to find specific products based on their preferences.</li>
                                        <li>Ensuring the site was optimized for both desktop and mobile users while maintaining functionality.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results18">
                                    <ul class="horizontal-points">
                                        <li>Created an intuitive e-commerce site that showcased Noxbe’s outdoor and cycling products effectively.</li>
                                        <li>Integrated a product filtering system, improving the shopping experience for customers.</li>
                                        <li>Delivered a mobile-responsive platform, resulting in increased traffic and sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-19">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/4/logo-fitness.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a dynamic website for Pride Fitness and Nutrition, designed to enhance their online presence and promote fitness coaching and 
                    nutritional advice. The project focused on building a platform that connects with clients and delivers personalized services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals19">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles19">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results19">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals19">
                                    <ul class="horizontal-points">
                                        <li>Build a website that showcases Pride’s fitness coaching and nutritional services.</li>
                                        <li>Integrate a booking system to allow clients to schedule fitness sessions easily.</li>
                                        <li>Ensure the platform is mobile-responsive to cater to users accessing it on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles19">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked a digital platform to promote fitness services and connect with clients effectively.</li>
                                        <li>No system existed for clients to schedule fitness or nutrition consultations online.</li>
                                        <li>Designing an engaging site that reflects the brand’s focus on fitness and wellness.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results19">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant website that effectively showcased Pride’s fitness and nutritional services.</li>
                                        <li>Integrated an easy-to-use booking system, improving client interaction and appointment scheduling.</li>
                                        <li>Delivered a mobile-optimized platform, increasing client engagement and session bookings.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-20">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/logo-massage.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a clean and elegant website for AQuicki Skincare to promote their skincare products and services. The project centered around 
                    building a visually appealing platform that enhances customer interaction and product discovery.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals20">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles20">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results20">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals20">
                                    <ul class="horizontal-points">
                                        <li>Create a visually stunning website to showcase AQuicki’s skincare products and treatments.</li>
                                        <li>Implement an e-commerce feature to allow customers to purchase skincare products online.</li>
                                        <li>Ensure the platform is optimized for mobile devices to cater to on-the-go customers.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles20">
                                    <ul class="horizontal-points">
                                        <li>The brand had no digital storefront to effectively display its skincare products and services.</li>
                                        <li>No system existed for processing online orders and managing customer inquiries.</li>
                                        <li>Designing a luxurious, yet functional website to appeal to skincare enthusiasts.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results20">
                                    <ul class="horizontal-points">
                                        <li>Launched a beautifully designed e-commerce site that effectively showcased AQuicki’s skincare line.</li>
                                        <li>Integrated a seamless checkout system, allowing customers to easily purchase products online.</li>
                                        <li>Delivered a mobile-friendly platform, improving customer engagement and boosting online sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-21">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/3/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/logo-law.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a professional website for Davalos Defense Law Firm to showcase their legal expertise and services. The project focused on 
                    building trust with potential clients and providing clear paths to schedule consultations.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals21">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles21">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results21">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals21">
                                    <ul class="horizontal-points">
                                        <li>Create a professional website that highlights the law firm’s legal services and areas of expertise.</li>
                                        <li>Implement a contact form for potential clients to easily request legal consultations.</li>
                                        <li>Ensure the site is mobile-responsive to provide a seamless experience for clients on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles21">
                                    <ul class="horizontal-points">
                                        <li>The firm lacked a digital platform to showcase its legal services and connect with potential clients.</li>
                                        <li>No system existed for clients to request consultations or legal assistance online.</li>
                                        <li>Designing a professional, informative site that reflects the firm's credibility and expertise.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results21">
                                    <ul class="horizontal-points">
                                        <li>Launched a professional and responsive website that effectively displayed the firm’s legal services.</li>
                                        <li>Integrated a contact form, improving client inquiries and consultation requests.</li>
                                        <li>Delivered a mobile-optimized platform, enhancing accessibility and client engagement.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-22">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/4/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/4/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/4/innerpage2.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/4/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/4/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/4/innerpage2.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/2/logo-yoga.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We designed a calming and intuitive website for Fassler Yoga &amp; Wellness, focused on promoting yoga classes and wellness retreats. The project 
                    aimed at building a platform that connects with clients seeking physical and mental well-being.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals22">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles22">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results22">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals22">
                                    <ul class="horizontal-points">
                                        <li>Create a serene website to promote yoga classes, wellness programs, and retreats.</li>
                                        <li>Implement an easy booking system for clients to register for yoga classes and wellness events.</li>
                                        <li>Ensure the site is optimized for mobile devices to make it accessible for users on the go.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles22">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online presence to promote its wellness services and engage with potential clients.</li>
                                        <li>No system existed for clients to book yoga sessions or wellness programs online.</li>
                                        <li>Designing a calming, wellness-focused site that maintained functionality for easy navigation.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results22">
                                    <ul class="horizontal-points">
                                        <li>Launched a serene and user-friendly website that showcased yoga and wellness services effectively.</li>
                                        <li>Integrated a booking system, allowing clients to easily sign up for classes and wellness events.</li>
                                        <li>Delivered a mobile-responsive platform, improving accessibility and increasing class bookings.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-23">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/5/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/1/logo-art.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built a vibrant and artistic website for Michelle Wolski, a creative therapy professional. The site was designed to reflect the therapeutic 
                    nature of art and attract clients interested in creative therapy services.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals23">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles23">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results23">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals23">
                                    <ul class="horizontal-points">
                                        <li>Build a vibrant and artistic website to showcase Michelle’s creative therapy services.</li>
                                        <li>Implement an appointment scheduling system to allow clients to book therapy sessions easily.</li>
                                        <li>Ensure the site is optimized for both desktop and mobile devices for a seamless experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles23">
                                    <ul class="horizontal-points">
                                        <li>The brand lacked an online presence to promote creative therapy services and connect with potential clients.</li>
                                        <li>No system was in place for scheduling therapy sessions or consultations online.</li>
                                        <li>Designing a visually artistic yet functional site that reflected the creativity of the therapy practice.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results23">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant and creative website that effectively displayed therapy services and offerings.</li>
                                        <li>Integrated an easy-to-use scheduling system, simplifying client bookings for therapy sessions.</li>
                                        <li>Delivered a mobile-friendly site, enhancing user engagement and increasing session appointments.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-24">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/personal-brand/6/logo-cosmetics.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a stylish e-commerce platform for Fahri Cosmetics, focused on promoting beauty products and cosmetics. The project was centered 
                    around creating an appealing online store that captures the essence of the beauty industry.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals24">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles24">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results24">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals24">
                                    <ul class="horizontal-points">
                                        <li>Create a visually stunning website to showcase a variety of beauty and cosmetics products.</li>
                                        <li>Implement an e-commerce system to facilitate online sales and smooth checkout experiences.</li>
                                        <li>Ensure the platform is mobile-responsive for a seamless shopping experience on all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles24">
                                    <ul class="horizontal-points">
                                        <li>The brand had no online store to effectively display and sell its range of cosmetics products.</li>
                                        <li>No system existed for managing online orders, payments, or customer inquiries.</li>
                                        <li>Designing a visually appealing yet functional e-commerce site that attracts beauty enthusiasts.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results24">
                                    <ul class="horizontal-points">
                                        <li>Launched a stylish e-commerce platform that effectively showcased the cosmetics product line.</li>
                                        <li>Integrated a seamless checkout system, making it easy for customers to purchase products online.</li>
                                        <li>Delivered a mobile-optimized platform, boosting customer engagement and driving online sales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-25">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/1/logo-legal.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a professional and user-friendly website for Texas Legal Solutions, focused on promoting their legal aid services for underserved 
                    communities. The project aimed to increase accessibility to legal resources and allow individuals to seek help easily.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals25">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles25">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results25">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals25">
                                    <ul class="horizontal-points">
                                        <li>Create a professional website to promote legal services for low-income individuals and underserved communities.</li>
                                        <li>Implement an easy-to-navigate system to provide information on available legal aid services.</li>
                                        <li>Ensure the site is mobile-optimized to allow for easy access on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles25">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no online platform to reach underserved communities in need of legal assistance.</li>
                                        <li>No system existed to provide detailed information about legal aid services in a user-friendly format.</li>
                                        <li>Designing a professional and informative site while ensuring it was accessible across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results25">
                                    <ul class="horizontal-points">
                                        <li>Launched a professional and easy-to-use website that effectively promoted legal aid services.</li>
                                        <li>Integrated a clear navigation system, making it simple for individuals to find and access legal resources.</li>
                                        <li>Delivered a mobile-responsive platform, increasing accessibility for underserved communities.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-26">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/2/logo-medical.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We built an engaging website for Longevity CPR, a non-profit focused on offering CPR and first aid training. The website was designed to help 
                    individuals find training programs, register for classes, and learn more about the importance of CPR.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals26">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles26">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results26">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals26">
                                    <ul class="horizontal-points">
                                        <li>Build an informative website to promote CPR and first aid training programs for the community.</li>
                                        <li>Implement an easy registration system for individuals to sign up for training sessions.</li>
                                        <li>Ensure the platform is mobile-responsive to allow users to access information and register on various devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles26">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no digital platform to promote CPR training programs or manage class registrations.</li>
                                        <li>No system existed for potential trainees to easily sign up for sessions or access resources.</li>
                                        <li>Balancing the need for an informative site while maintaining simplicity for ease of use.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results26">
                                    <ul class="horizontal-points">
                                        <li>Launched an engaging website that effectively promoted CPR training and first aid programs.</li>
                                        <li>Integrated a registration system, allowing users to easily sign up for training sessions online.</li>
                                        <li>Delivered a mobile-optimized site, increasing engagement and registrations for CPR programs.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-27">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/3/logo-nonprofit.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a heartwarming and impactful website for Bucks County Charity Foundation, focused on promoting their charitable efforts and 
                    increasing donations to support children and families in need.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals27">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles27">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results27">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals27">
                                    <ul class="horizontal-points">
                                        <li>Build a heartwarming website to showcase the foundation’s charitable initiatives and success stories.</li>
                                        <li>Implement an easy-to-use donation system to encourage contributions from supporters.</li>
                                        <li>Ensure the site is optimized for mobile access to make it convenient for users to donate and engage with the foundation.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles27">
                                    <ul class="horizontal-points">
                                        <li>The foundation lacked an online presence to promote its charitable work and encourage donations.</li>
                                        <li>No system existed for managing donations or providing information on how funds were being used.</li>
                                        <li>Designing an emotionally compelling yet functional site to appeal to potential donors and supporters.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results27">
                                    <ul class="horizontal-points">
                                        <li>Launched a heartwarming website that effectively showcased the foundation’s charitable work and initiatives.</li>
                                        <li>Integrated a donation system, making it easier for supporters to contribute and track the impact of their donations.</li>
                                        <li>Delivered a mobile-friendly platform, improving donor engagement and increasing contributions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-28">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/4/logo-pet.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a heartfelt and functional website for Furrescue, focused on promoting pet adoption and animal rescue initiatives. The project 
                    aimed to increase awareness of their cause and simplify the adoption process for potential pet owners.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals28">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles28">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results28">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals28">
                                    <ul class="horizontal-points">
                                        <li>Create a warm and engaging website to promote pet adoption and animal rescue services.</li>
                                        <li>Implement an easy-to-navigate adoption system to allow potential pet owners to find and adopt animals.</li>
                                        <li>Ensure the platform is optimized for mobile devices to reach a wider audience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles28">
                                    <ul class="horizontal-points">
                                        <li>The non-profit had no online presence to promote animal rescue efforts or manage the adoption process.</li>
                                        <li>No system existed for potential adopters to browse available animals or start the adoption process online.</li>
                                        <li>Designing an emotionally compelling yet functional site to encourage pet adoptions.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results28">
                                    <ul class="horizontal-points">
                                        <li>Launched an engaging and user-friendly website that effectively promoted pet adoption and rescue services.</li>
                                        <li>Integrated an adoption system, allowing potential pet owners to browse animals and start the adoption process online.</li>
                                        <li>Delivered a mobile-optimized platform, increasing awareness and adoption rates.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-29">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/5/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/wordpress/1/logo-01.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We created a vibrant and informative website for Eco Life, a non-profit organization dedicated to promoting sustainable living and plant-based 
                    initiatives. The project focused on educating the public about eco-friendly practices and providing resources for a greener lifestyle.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals29">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles29">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results29">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals29">
                                    <ul class="horizontal-points">
                                        <li>Build an informative website to educate the public on sustainable living and eco-friendly practices.</li>
                                        <li>Implement a resource hub to provide guides and tips for adopting a more eco-conscious lifestyle.</li>
                                        <li>Ensure the site is mobile-responsive to make information easily accessible across all devices.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles29">
                                    <ul class="horizontal-points">
                                        <li>The organization lacked an online platform to educate the public and promote eco-friendly initiatives.</li>
                                        <li>No system was in place to provide educational resources or guide individuals on sustainable practices.</li>
                                        <li>Designing an engaging, content-rich site while ensuring ease of use and accessibility.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results29">
                                    <ul class="horizontal-points">
                                        <li>Launched a vibrant and informative website that effectively promoted sustainable living practices.</li>
                                        <li>Integrated a resource hub, providing guides and tips for individuals looking to adopt an eco-conscious lifestyle.</li>
                                        <li>Delivered a mobile-friendly site, improving accessibility and increasing engagement with the cause.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="popup-area caseStudyPopup caseStudyPopup-30">
    <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose-btn">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#website-caseStudy1">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/website.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy2">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/innerpage1.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy3">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/innerpage2.webp?format=png" alt="">
          </a>
        </li><li class="nav-item">
          <a class="nav-link " data-bs-toggle="tab" href="#website-caseStudy4">
            <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/innerpage3.webp?format=png" alt="">
          </a>
        </li>
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                <div class="tab-pane fade active show" id="website-caseStudy1">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/website.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy2">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/innerpage1.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy3">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/innerpage2.webp'></div>
        </div><div class="tab-pane fade" id="website-caseStudy4">
          <div class="webPortfolio-caseStudyImage" data-bg='https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/non-profit/6/innerpage3.webp'></div>
        </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="" data-src="https://websitedigitals.imglab-cdn.net/assets/images/portfolio/web/portal/1/logos-01.webp?format=png" alt="">
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">We developed a modern and functional news portal for Elite News, focused on delivering up-to-date information and articles on various topics. 
                    The project aimed to provide a seamless news browsing experience and increase readership.</p>
              <div class="webPortfolio-caseStudyDetail">
                
                      
                      <div class="portfolio-inner-tabs-div">
                            <div class="basic-tabs small-tabs">
                                <ul class="nav nav-tabs inner-tabs" id="scrollable-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#goals30">Goals</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#obstacles30">Obstacles</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#results30">Results</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="tab-content web-portfolio-content inner-tab-content">
                                <div class="tab-pane fade show active" id="goals30">
                                    <ul class="horizontal-points">
                                        <li>Create a modern news portal to deliver timely articles and information to the public.</li>
                                        <li>Implement a user-friendly navigation system to allow visitors to easily browse different news categories.</li>
                                        <li>Ensure the platform is optimized for mobile devices to enhance accessibility and reach.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="obstacles30">
                                    <ul class="horizontal-points">
                                        <li>The organization had no digital platform to distribute news articles or engage with readers.</li>
                                        <li>No system was in place for organizing and categorizing news content for easy access by users.</li>
                                        <li>Designing a content-rich site while maintaining a simple and intuitive user experience.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="results30">
                                    <ul class="horizontal-points">
                                        <li>Launched a sleek news portal that effectively delivered timely articles and information to readers.</li>
                                        <li>Integrated an easy-to-navigate system, allowing users to browse various news categories with ease.</li>
                                        <li>Delivered a mobile-responsive platform, boosting readership and improving engagement with news content.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                      
                <div class="view-before-after-div">
                  <a href="#" class="beforeAfterBtnToggle">View Before &amp; After
                  <img src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>


<div class="popup-bg beforeAfterPopupBg"></div>
<div class="popup-area beforeAfterPopup" id="portfolioModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="row">
          <div class="col-lg-5 col-sm-12 my-auto position-relative">
            <div class="section-heading">
              <h2>Revitalize Your Website Design</h2>
              <p>Compare the before and after to see how a fresh design boosts your sites performance.</p>
            </div>
            <img class="arrow-absolute" src="https://websitedigitals.imglab-cdn.net/assets/images/arrow-blue.png?format=png" width="100%" alt="Arrow">
          </div>
          <div class="col-lg-7 col-sm-12">
            <div class="before-after-div">
              
            <div class="before-div" id="image-before">
                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/before.png?format=png" alt="Before" class="image image1" loading="lazy">
                <p>Before</p>
            </div>
            <div class="after-div" id="image-after">
                <p>After</p>
                <img src="https://websitedigitals.imglab-cdn.net/assets/images/wd-5/after.png?format=png" alt="After" class="image image2" loading="lazy">
            </div>                   
        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>