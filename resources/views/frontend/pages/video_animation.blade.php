@extends('frontend.layouts.master')
@push('customStyles')
<style>

.portfolio-imageArea a::after 
{
    content: "";
    background:url(../frontend/assets/images/videoplaybtn.png) no-repeat;
    background-size:cover;
    width: 80px;
    height: 80px;
}

    .videoAnimation-details > h3 
    {
        font-size: 1.1rem;
    }
.portfolio-imageArea
{
    position:relative;
}
.portfolio_btn 
{
    position: absolute;
    bottom: 29px;
    left: 38px;
    color: #fff;
    font-size: 14px;
}
</style>
@endpush
@section('container')        
<section class="inner-banner videoAnimation-banner gradient-circle leftCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="inner-bannerHeading">
              <h1>Best Video Animation Company</h1>
              <p>
               Are you looking for top-notch animation services that can elevate your brand to new heights? At WebDigi, 
               we're proud to be recognized as the best video animation company. Our expertise and dedication ensure your 
               vision comes to life through captivating animations.
              </p>
              <ul>
                <li>Creative storytelling techniques</li>
                <li>Customizable animation styles</li>
                <li>Industry-leading animation software</li>
              </ul>
            </div>
            <div class="link-area">
              <a href="#" class="book-your-call">
                Get Started Now
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="videoAnimation-imageArea">
              <div class="videoAnimation-imageContainer first-container">
                <video
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/video-animation/1.webm"
                  autoplay
                  muted
                  loop
                ></video>
                <video
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/video-animation/2.webm"
                  autoplay
                  muted
                  loop
                ></video>
              </div>
              <div class="videoAnimation-imageContainer second-container">
                <video
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/video-animation/3.webm"
                  autoplay
                  muted
                  loop
                ></video>
                <video
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/video-animation/4.webm"
                  autoplay
                  muted
                  loop
                ></video>
                <video
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/video-animation/5.webm"
                  autoplay
                  muted
                  loop
                ></video>
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

    <section class="section-padding pb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Video Animation Services</h2>
              <p>
                At WebDigi, our video animation services are designed to meet the diverse needs of our clients. 
                As a leading video production company animation studio, we provide various animation solutions 
                to help you engage your audience and communicate your message effectively.
              </p>
            </div>
          </div>
        </div>
        <div class="row rowGap2">
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/explainer-1.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/explainer-1.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Explainer Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Our animation and video production company creates engaging explainer videos that simplify complex ideas for your audience.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/Educational1.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/Educational.webp"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Educational Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>We excel as an animation video production company, producing educational videos that are both informative and visually appealing.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/promotional.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/promotional-gif.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Promotional Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Our team delivers professional video animation services for promotional videos, highlighting the unique aspects of your products.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/DEMO.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/demovideos.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Demo Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>We offer custom video animation services to create demo videos that effectively showcase your products or services.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/advertise1.jpg"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/advertise.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Advertisement Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Stand out with advertisement videos created by our experts, designed to capture attention and convey your message powerfully.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/social-media.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/social-media-gif.webp"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Social Media</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Improve your training programs with our high-quality, engaging videos designed to deliver information transparent and clearly.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/training.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/trainingvideo.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Training Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Improve your corporate image with our professional videos expertly showcasing your company's strengths and achievements.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/corporate.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/corporatevideo.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Corporate Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Create an immersive experience for your viewers with our interactive videos, offering them an engaging way to explore your content.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/storytelling.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/storytellingvideo.webp"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Story Telling Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Connect with your audience on a deeper level with our storytelling videos, designed to compellingly convey your brand's narrative.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/Infographics.jpg"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/infographics-video.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Infographic Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Communicate complex data quickly and clearly with our infographic videos, which combine informative content with appealing visuals.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/motiongraphic.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/Motiongraphicvideo.webp"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Motion Graphic Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Engage your audience with dynamic motion graphic videos that bring your ideas to life through movement and creativity.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="single-videoAnimation-type">
              <div class="videoAnimation-imageArea">
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/Interactive.webp"
                  alt=""
                  class="static-image"
                />
                <img
                  src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/videoanimationseries/interactive-video.gif"
                  alt=""
                  class="animated-image"
                />
              </div>
              <div class="videoAnimation-detailsArea">
                <div class="videoAnimation-details">
                  <h3>Interactive Videos</h3>
                  <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <strong>(4.9/5)</strong>
                  </div>
                  <p>Create an immersive experience for your viewers with our interactive videos, offering them an engaging way to explore your content.</p>
                </div>
                <div class="videoAnimation-detailsLink">
                  <a href="javascript:void(0);" class="book-your-call">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Logo Designing Is An Art And We Are Master Artists</h2>
              <p>
                Every business demands a different kind of logo. Be it a
                Wordmark Logo, Abstract Logo, Illustrative Logo, or Emblem Logo,
                we craft them with stellar professionalism.
              </p>
            </div>
          </div>
          <div class="col-12">
            <div class="basic-tabs small-tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#all-video-animation-portfolio"
                  >
                    <span>All</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#dd-explainer-portfolio"
                  >
                    <span>2d Videos</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#ddd-explainer-portfolio"
                  >
                    <span>3d Videos</span>
                  </a>
                </li>
                <!--<li class="nav-item">-->
                <!--  <a-->
                <!--    class="nav-link"-->
                <!--    data-bs-toggle="tab"-->
                <!--    href="#explainer-portfolio"-->
                <!--  >-->
                <!--    <span>Explainer</span>-->
                <!--  </a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--  <a-->
                <!--    class="nav-link"-->
                <!--    data-bs-toggle="tab"-->
                <!--    href="#whiteboard-portfolio"-->
                <!--  >-->
                <!--    <span>Whiteboard</span>-->
                <!--  </a>-->
                <!--</li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="tab-content">
            <div
              class="tab-pane fade "
              id="all-video-animation-portfolio"
            >
              <div class="row rowGap2">

           <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/aoMy905iPrM" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/1.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Interactive Video</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/QxS19l9vTmY" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/02.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Interactive Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/zeEpwh8KvW8" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/3.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Motion Graphic Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/UDFWnUQXcEE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/4.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Motion Graphic Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/Vq-xC9cT4mE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/5.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Infographic Video</button>
                    </div>
                  </div>
                </div>
                                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/UDFWnUQXcEE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/6.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Infographic Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/4gnWRlA5NWQ" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/7.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Story Telling Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/JfzcASi8df0Q" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/8.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Story Telling Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/wgcUHp9nTIM" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/9.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Corporate Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/ShZ-D03KVPs" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/10.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Corporate Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/lFy5YD2SXwc" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/11.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Training Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/Csu7fEMmHlM" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/12.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Social Media Video</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/x2R5tIaoGZE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/13.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Social Media Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/vpJ3lWyoO7I" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/14.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Advertisement Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/FcCmN-UK8TQ" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/15.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Advertisement Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/I3KynpVrhvc" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/16.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Demo Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/uZ5mn-hTyVY" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/17.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Demo Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/lFy5YD2SXwc" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/18.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Promotional Video</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/Hjzt-6rj8tU" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/19.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Education Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/OEUn0cQ1HEs" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/20.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Education Video</button>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/mHneUY5wHJs"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/1.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/SSlB8qcPKyc"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/2.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/ybMV9uHiZVI"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/3.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/id7GmzNBbwg"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/4.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/PGVoA5fqx3o"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/5.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
               
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/yabHqncdzj0"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/7.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/HnHArxv4NZY"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/8.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
            
            <div class="tab-pane fade active show" id="dd-explainer-portfolio">
              <div class="row rowGap2">
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/aoMy905iPrM" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/1.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Interactive Video</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/QxS19l9vTmY" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/02.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Interactive Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/zeEpwh8KvW8" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/3.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Motion Graphic Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/UDFWnUQXcEE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/4.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Motion Graphic Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/Vq-xC9cT4mE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/5.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Infographic Video</button>
                    </div>
                  </div>
                </div>
                                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/UDFWnUQXcEE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/6.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Infographic Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/4gnWRlA5NWQ" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/7.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Story Telling Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/JfzcASi8df0Q" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/8.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Story Telling Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/wgcUHp9nTIM" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/9.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Corporate Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/ShZ-D03KVPs" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/10.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Corporate Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/lFy5YD2SXwc" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/11.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Training Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/Csu7fEMmHlM" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/12.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Social Media Video</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/x2R5tIaoGZE" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/13.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Social Media Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/vpJ3lWyoO7I" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/14.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Advertisement Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/FcCmN-UK8TQ" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/15.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Advertisement Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/I3KynpVrhvc" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/16.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Demo Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/uZ5mn-hTyVY" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/17.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Demo Video</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/lFy5YD2SXwc" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/18.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Promotional Video</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/Hjzt-6rj8tU" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/19.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Education Video</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a href="https://www.youtube.com/embed/OEUn0cQ1HEs" data-fancybox>
                        <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/new/20.webp" alt=""/>
                      </a>
                      <button class="portfolio_btn">Education Video</button>
                    </div>
                  </div>
                </div>
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/5NP4Owz4agk"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/2.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/DhjyuxBKsNg"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/3.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/hJNuccOcENI"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/4.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--  <div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/fP9Y02ypPaI"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/5.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/LoqTzou4LnA"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/6.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/lvvzHgRmQkU"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/7.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/lvvzHgRmQkU"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/8.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/WUOblzsnpN4"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/9.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/6omTMGipAvg"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/10.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--  <div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/XMryelyYNyE"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/11.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-6">-->
                <!--  <div class="portfolio-imageArea">-->
                <!--    <div class="full-imageArea">-->
                <!--      <a-->
                <!--        href="https://www.youtube.com/embed/qcIjFCGpo0A"-->
                <!--        data-fancybox-->
                <!--      >-->
                <!--        <img-->
                <!--          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/2dexplainer/12.webp"-->
                <!--          alt=""-->
                <!--        />-->
                <!--      </a>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </div>
            
            <div class="tab-pane fade" id="ddd-explainer-portfolio">
              <div class="row rowGap2">
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/mHneUY5wHJs"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/1.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/SSlB8qcPKyc"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/2.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/ybMV9uHiZVI"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/3.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/id7GmzNBbwg"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/4.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/PGVoA5fqx3o"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/5.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/yabHqncdzj0"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/7.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/HnHArxv4NZY"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/8.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="portfolio-imageArea">
                    <div class="full-imageArea">
                      <a
                        href="https://www.youtube.com/embed/zLnHo87smzE"
                        data-fancybox
                      >
                        <img
                          src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/3dexplainer/new/9.webp"
                          alt=""
                        />
                      </a>
                        <button class="portfolio_btn">3d Animation</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--<div class="tab-pane fade" id="explainer-portfolio">-->
            <!--  <div class="row rowGap2">-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/kRWU8M362Pw"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/1.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
               
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/8DcsWfSr-us"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/3.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/ojEzAJl-VEQ"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/4.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/IiuLL3qHKHI"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/5.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/-99fLi0JfDM"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/6.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/wejvHjrucYM"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/7.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/g1wpDZbNWrE"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/8.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/g1wpDZbNWrE"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/9.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--     <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/XtRpSYMls-w"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/10.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--     <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/4a3fLabSRLU"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/explainer/11.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
                
            <!--  </div>-->
            <!--</div>-->
            
            <!--<div class="tab-pane fade" id="whiteboard-portfolio">-->
            <!--  <div class="row rowGap2">-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/r24WuSauCZo"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/whiteboard/1.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/7i1lEz8IxVE"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/whiteboard/2.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/Hj-RbANQaa4"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/whiteboard/3.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/KP53l9ijXgA"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/whiteboard/4.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/SfLDN9Bgvdc"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/whiteboard/5.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/jqKzBviQ8cs"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/whiteboard/6.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-3 col-md-6">-->
            <!--      <div class="portfolio-imageArea">-->
            <!--        <div class="full-imageArea">-->
            <!--          <a-->
            <!--            href="https://www.youtube.com/embed/jqKzBviQ8cs"-->
            <!--            data-fancybox-->
            <!--          >-->
            <!--            <img-->
            <!--              src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/portfolio/videoanimation/whiteboard/7.webp"-->
            <!--              alt=""-->
            <!--            />-->
            <!--          </a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding split-section gradient-circle light-gradient rightCenter-gradient">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 position-relative">
            <div class="lightBlue-area videoAnimation-splitArea">
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/banner/circle.png"
                class="circle-img rotation-animation"
                alt=""
              />
              <img
                src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/services/video-animation/high-quality.png"
                class="banner-img"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <div class="dark-area">
              <div class="section-heading">
                <h2>High-Quality Animation Services</h2>
                <p>
                  Promote your business and reach the right audience with our high-quality 
                  animation services. Our commitment to excellence ensures that every project 
                  is crafted with maximum care and precision.
                </p>
                <ul>
                  <li>Stunning and captivating visuals</li>
                  <li>Secure and perfect animation production</li>
                  <li>Exceptional and effective branding animations</li>
                </ul>
              </div>
              <div class="link-area">
                <a href="#" class="primary book-your-call">
                  Get Started Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/icon_Creative Design.svg" alt="" />
                <div class="process-detail">
                  <h3>Creative Design</h3>
                  <p>
                        We start with a solid visual concept that aligns with your brand's identity, creating unique and engaging animations.
                  </p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/icon_Storyboadign and planning.svg" alt="" />
                <div class="process-detail">
                  <h3>Storyboarding & Planning</h3>
                  <p>
                    We thoroughly storyboard and plan your project to ensure a readable and compelling narrative.
                  </p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/icon_Animation Production.svg" alt="" />
                <div class="process-detail">
                  <h3>Animation Production</h3>
                  <p>
                        Our skilled animators bring your vision to life with the latest techniques and software, ensuring stunning and responsive animations.
                  </p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/icon_Quality Assurance.svg" alt="" />
                <div class="process-detail">
                  <h3>Quality Assurance (QA)</h3>
                  <p>
                        We strictly test our animations for visual consistency, technical performance, and overall impact to guarantee flawless delivery.
                  </p>
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
                <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/process/icon_Launch And Optimization.svg" alt="" />
                <div class="process-detail">
                  <h3>Finalize & Launch</h3>
                  <p>
                    After launch, we monitor and optimize performance to enhance engagement and effectiveness, ensuring your animation reaches its full potential.
                  </p>
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
                  >
                   How long does it take to complete a video animation project?
                   
                  </button>
                </h2>
                <div
                  id="faq-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="faq-heading-1"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    The timeline for completing a video animation project depends on its complexity and requirements. Projects typically have a duration of several weeks to a few months.
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
                  >
                    What industries do you serve with your animation services?

                  </button>
                </h2>
                <div
                  id="faq-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-2"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   We serve various industries, including education, healthcare, technology, retail, and more, providing tailored animations that meet industry-specific needs.

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
                  >
                    Can you handle large-scale animation projects?

                  </button>
                </h2>
                <div
                  id="faq-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-3"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Yes, we have the capacity and expertise to manage large-scale animation projects, ensuring high quality and timely delivery.
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
                  >
                   What is the process for starting a video animation project with WebDigi?
                  </button>
                </h2>
                <div
                  id="faq-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-4"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    To start a project, simply contact us with your requirements. We'll discuss your needs, create a plan, and begin the animation process.

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
                  >
                    Do you provide support and revisions during the animation process?

                  </button>
                </h2>
                <div
                  id="faq-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-5"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Yes, we offer ongoing support and revisions during the animation process to ensure the final product meets your expectations and objectives.

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
                  >
                   What do your video production animation services include?

                  </button>
                </h2>
                <div
                  id="faq-6"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-6"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                   Our video production animation services include explainer videos, promotional videos, educational videos, and more, tailored to meet your specific needs.

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
                  >
                  Why are you considered the best video animation services USA?

                  </button>
                </h2>
                <div
                  id="faq-7"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">
                    We are recognized as the best video animation services USA due to our high-quality production, creative storytelling, and commitment to customer satisfaction.

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
                  >
                  How can video animation production companies help my business?


                  </button>
                </h2>
                <div
                  id="faq-8"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-7"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">

                    Video animation production companies can enhance your marketing efforts, improve engagement, and effectively communicate your message through compelling animations.

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
                  >
                    What makes WebDigi the best video animation agency?

                  </button>
                </h2>
                <div
                  id="faq-9"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-9"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">

                    WebDigi is the best video animation agency because of our innovative approach, skilled animators, and dedication to delivering exceptional results.
    

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
                  >
                    Do you offer customized video production animation services?

                  </button>
                </h2>
                <div
                  id="faq-10"
                  class="accordion-collapse collapse"
                  aria-labelledby="faq-heading-10"
                  data-bs-parent="#faq-accordion"
                >
                  <div class="accordion-body">

                        Yes, we offer customized video production animation services to ensure your animations are unique and aligned with your brand's vision.

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