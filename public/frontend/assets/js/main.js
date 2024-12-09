// Initialize Nice Select
jQuery(document).ready(function () {
  jQuery("select").niceSelect();
});

// Hidden On Load Show

jQuery(document).ready(function () {
  const hiddenOnLoad = jQuery(document).find(".hidden-onLoad");
  if (hiddenOnLoad.length) {
    jQuery(hiddenOnLoad).removeClass("hidden-onLoad");
  }
});

// Mobile Menu

jQuery(document).on("click", ".letsGetStated-toggle", function (e) {
  e.preventDefault();
  jQuery(".letsGetStated-popup").toggleClass("show");
});

// Mobile Menu

jQuery(document).on("click", ".mobile-toggle > li > a", function (e) {
  e.preventDefault();
  jQuery(".mobileMenuArea, .mobileMenuArea-bg").addClass("show-menu");
});

jQuery(document).on("click", ".mobileMenuArea-bg", function (e) {
  e.preventDefault();
  jQuery(".mobileMenuArea, .mobileMenuArea-bg").removeClass("show-menu");
});

// Parallax Effect

document.addEventListener("mousemove", function (e) {
  var images = document.querySelectorAll(".parallax-image");
  var mouseX = e.clientX;
  var mouseY = e.clientY;
  if (images) {
    images.forEach(function (image) {
      let speed = image.getAttribute("data-speed");
      if (!speed) {
        speed = 0.015;
      }
      const container = image.closest(".parallax-container");
      if (container) {
        const centerX = container.offsetWidth / 2;
        const centerY = container.offsetHeight / 2;
        const deltaX = (mouseX - centerX) * speed;
        const deltaY = (mouseY - centerY) * speed;
        image.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
      }
    });
  }
});

// Pricing Detail Toggle Script

jQuery(document).on("click", ".pricing-body > button", function () {
  jQuery(this)
    .parents(".pricing-body")
    .find(".pricing-body-details")
    .slideToggle("fast");
});

// Popup Scripts

jQuery(document).on("click", ".bookNow-popup-bg", function (e) {
  jQuery(".bookNow-popup, .bookNow-popup-bg").removeClass("show-popup");
  console.log("asd");
});

jQuery(document).on("click", ".book-your-call", function (e) {
  e.preventDefault();
  jQuery(".bookNow-popup, .bookNow-popup-bg").addClass("show-popup");
});

jQuery(document).on("click", ".bookNow-popup .popup-close", function (e) {
  e.preventDefault();
  jQuery(".bookNow-popup, .bookNow-popup-bg").removeClass("show-popup");
});

jQuery(document).on("click", ".offer-popup-bg", function (e) {
  jQuery(".offer-popup, .offer-popup-bg").removeClass("show-popup");
  console.log("asd");
});

jQuery(document).on("click", ".offer-btn", function (e) {
  e.preventDefault();
  jQuery(".offer-popup, .offer-popup-bg").addClass("show-popup");
});

jQuery(document).on("click", ".offer-popup .popup-close", function (e) {
  e.preventDefault();
  jQuery(".offer-popup, .offer-popup-bg").removeClass("show-popup");
});

/*jQuery(document).ready(function() {
  setTimeout(() => {
    jQuery(".offer-popup, .offer-popup-bg").addClass("show-popup");
  }, 5000)
})*/

// Process Animation GSAP

jQuery(document).ready(function () {
  gsap.registerPlugin(ScrollTrigger);

  const processArea = jQuery(document).find("#process-area");

  if (processArea.length) {
    setTimeout(function () {
      const processAreaList = jQuery(processArea).find("> li");

      if (processAreaList.length) {
        const tl = gsap.timeline({
          scrollTrigger: {
            trigger: jQuery(processArea),
            start: "top center",
            end: "top center",
            toggleActions: "play none none none",
          },
        });

        processAreaList.each(function (index, element) {
          const img = jQuery(element).find("> img");
          const processText = jQuery(element).find(".process-text");
          const paths = jQuery(element).find("svg");

          tl.fromTo(img, { scale: 0 }, { scale: 1, duration: 0.5 }).fromTo(
            processText,
            { backgroundPosition: "100%" },
            { backgroundPosition: "0%", duration: 0.5 }
          );

          if (jQuery(window).width() > 767) {
            tl.fromTo(
              paths,
              { strokeDashoffset: 500 },
              { strokeDashoffset: 0, duration: 1 }
            );
          }
        });
      }
    }, 2000);
  }
});


// Web Portfolio Case Study

jQuery(document).ready(function () {
    
    
  jQuery(".single-webPortfolio.static-portfolio").click(function () {
    const index = parseInt(jQuery(this).closest(".col-md-6").data("index"), 10);
    const row = jQuery(this).closest(".row");

    const multiplier = 3;

    const insertAfterIndex = jQuery(window).width() < 767 ? index : Math.ceil(index / 3) * multiplier;

    let newContentArea = jQuery(".new-content-area");

    const hiddenCaseStudyData = jQuery(this).find(".hidden-caseStudyData");

    if (hiddenCaseStudyData.length) {
      const images = hiddenCaseStudyData.find(".images > img");

      let tabs = "";
      let tabContents = "";

      images.each(function (i, img) {
        const activeClass = i === 0 ? "active" : "";
        tabs += `<li class="nav-item">
          <a class="nav-link ${activeClass}" data-bs-toggle="tab" href="#website-caseStudy${
          i + 1
        }">
            <img src="${jQuery(img).attr("src")}" alt="" />
          </a>
        </li>`;

        tabContents += `<div class="tab-pane fade ${activeClass} ${
          i === 0 ? "show" : ""
        }" id="website-caseStudy${i + 1}">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('${jQuery(
            img
          ).attr("src")}');"></div>
        </div>`;
      });
      
      
      
      const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="link-area">
                  <a href="${hiddenCaseStudyData
                    .find(".links a.launch")
                    .attr(
                      "href"
                    )}" class="primary" style="font-size: 13px; min-height: auto; padding: 13px 18px;">View Case study</a>
                  <a href="https://websitedigitals.com/brief/" style="font-size: 13px; min-height: auto; font-weight: 700;background: transparent; color: #000;">Let's build website 
                  <i class="fa-solid fa-angles-right"></i></a>
                    
                </div>
              </div>
            </div>
          </div>
        </div>`;

    /*const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="link-area">
                  <a href="https://websitedigitals.com/brief/" class="primary" style="font-size: 13px; min-height: auto; padding: 13px 18px;">View Case study
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>`;*/

      /*const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="webPortfolio-linkArea">
                  <a href="${hiddenCaseStudyData
                    .find(".links a.launch")
                    .attr(
                      "href"
                    )}" class="launch"><span>Make your personalize website</span><i class="fa-solid fa-angles-right"></i></a>
                  <a href="${hiddenCaseStudyData
                    .find(".links a.request")
                    .attr(
                      "href"
                    )}" class="request"><span>Schedule your meetup call</span><i class="fa-solid fa-angles-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>`;*/

      if (!newContentArea.length) {
        newContentArea = jQuery("<div>", {
          class: "col-12 new-content-area",
          html: detail,
        });
      } else {
        newContentArea.html(detail);
      }

      if (newContentArea.parent().length) {
        newContentArea.parent().find(newContentArea).remove();
      }

      const insertAfterItem = row.find(
        `.col-md-6[data-index="${insertAfterIndex}"]`
      );
      if (insertAfterItem.length) {
        insertAfterItem.after(newContentArea);
      } else {
        row.append(newContentArea);
      }

      if (newContentArea.length) {
        const newContentAreaPosition = jQuery(newContentArea).offset().top;
        const headerHeight = jQuery(".header").innerHeight();
        console.log(headerHeight);
        jQuery("html, body").animate({
          scrollTop: newContentAreaPosition - headerHeight,
        }, 0);
      }
    } else {
      newContentArea.parent().find(newContentArea).remove();
    }
  });
  
 
  
});

jQuery(document).on("click", ".webPortfolio-caseStudyClose", function () {
  let newContentArea = document.querySelector(".new-content-area");

  if (newContentArea.parentNode) {
    newContentArea.parentNode.removeChild(newContentArea);
  }
});




// Web Portfolio WD1, WD2 and WD3

jQuery(document).ready(function () {
  jQuery(".single-webPortfolio.static_portfolio_2").click(function () {
    const index = parseInt(jQuery(this).closest(".col-md-6").data("index"), 10);
    const row = jQuery(this).closest(".row");

    const multiplier = 3;

    const insertAfterIndex = jQuery(window).width() < 767 ? index : Math.ceil(index / 3) * multiplier;

    let newContentArea = jQuery(".new-content-area");

    const hiddenCaseStudyData = jQuery(this).find(".hidden-caseStudyData");

    if (hiddenCaseStudyData.length) {
      const images = hiddenCaseStudyData.find(".images > img");

      let tabs = "";
      let tabContents = "";

      images.each(function (i, img) {
        const activeClass = i === 0 ? "active" : "";
        tabs += `<li class="nav-item">
          <a class="nav-link ${activeClass}" data-bs-toggle="tab" href="#website-caseStudy${
          i + 1
        }">
            <img src="${jQuery(img).attr("src")}" alt="" />
          </a>
        </li>`;

        tabContents += `<div class="tab-pane fade ${activeClass} ${
          i === 0 ? "show" : ""
        }" id="website-caseStudy${i + 1}">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('${jQuery(
            img
          ).attr("src")}');"></div>
        </div>`;
      });
      
      
      
      const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="link-area">
                  <a href="#" class="primary offer-btn" style="font-size: 13px; min-height: auto; padding: 13px 18px;">Get Free Consultation</a>
                  
                    
                </div>
              </div>
            </div>
          </div>
        </div>`;

    /*const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="link-area">
                  <a href="https://websitedigitals.com/brief/" class="primary" style="font-size: 13px; min-height: auto; padding: 13px 18px;">View Case study
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>`;*/

      /*const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="webPortfolio-linkArea">
                  <a href="${hiddenCaseStudyData
                    .find(".links a.launch")
                    .attr(
                      "href"
                    )}" class="launch"><span>Make your personalize website</span><i class="fa-solid fa-angles-right"></i></a>
                  <a href="${hiddenCaseStudyData
                    .find(".links a.request")
                    .attr(
                      "href"
                    )}" class="request"><span>Schedule your meetup call</span><i class="fa-solid fa-angles-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>`;*/

      if (!newContentArea.length) {
        newContentArea = jQuery("<div>", {
          class: "col-12 new-content-area",
          html: detail,
        });
      } else {
        newContentArea.html(detail);
      }

      if (newContentArea.parent().length) {
        newContentArea.parent().find(newContentArea).remove();
      }

      const insertAfterItem = row.find(
        `.col-md-6[data-index="${insertAfterIndex}"]`
      );
      if (insertAfterItem.length) {
        insertAfterItem.after(newContentArea);
      } else {
        row.append(newContentArea);
      }

      if (newContentArea.length) {
        const newContentAreaPosition = jQuery(newContentArea).offset().top;
        const headerHeight = jQuery(".header").innerHeight();
        console.log(headerHeight);
        jQuery("html, body").animate({
          scrollTop: newContentAreaPosition - headerHeight,
        }, 0);
      }
    } else {
      newContentArea.parent().find(newContentArea).remove();
    }
  });
});


// Web Portfolio WD5

jQuery(document).ready(function () {
  jQuery(".single-webPortfolio.static_portfolio_5").click(function () {
      jQuery('body').css('height', 'auto');
    const index = parseInt(jQuery(this).closest(".col-md-6").data("index"), 10);
    const row = jQuery(this).closest(".row");

    const multiplier = 3;

    const insertAfterIndex = jQuery(window).width() < 767 ? index : Math.ceil(index / 3) * multiplier;

    let newContentArea = jQuery(".new-content-area");

    const hiddenCaseStudyData = jQuery(this).find(".hidden-caseStudyData");

    if (hiddenCaseStudyData.length) {
      const images = hiddenCaseStudyData.find(".images > img");

      let tabs = "";
      let tabContents = "";

      images.each(function (i, img) {
        const activeClass = i === 0 ? "active" : "";
        tabs += `<li class="nav-item">
          <a class="nav-link ${activeClass}" data-bs-toggle="tab" href="#website-caseStudy${
          i + 1
        }">
            <img src="${jQuery(img).attr("src")}" alt="" />
          </a>
        </li>`;

        tabContents += `<div class="tab-pane fade ${activeClass} ${
          i === 0 ? "show" : ""
        }" id="website-caseStudy${i + 1}">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('${jQuery(
            img
          ).attr("src")}');"></div>
        </div>`;
      });
      
        var originalContent = jQuery(this).find(".hidden-caseStudyData #dynamicContent").html();
        console.log("Original Content: ", originalContent);
    
        var beforeafterdiv = jQuery(this).find(".hidden-caseStudyData .before-after-div").html();
        console.log(beforeafterdiv);
        
        var modalpopup = `
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
                          <p>Compare the before and after to see how a fresh design boosts your site’s performance.</p>
                        </div>
                        <img class="arrow-absolute" src="https://www.websitedigitals.com/frontend/assets/images/arrow-blue.png" width="100%" alt="Arrow">
                      </div>
                      <div class="col-lg-7 col-sm-12">
                        <div class="before-after-div">
                          ${beforeafterdiv}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>`;
            
            jQuery('#portfolioModal').empty();
            jQuery('#portfolioModal').append(modalpopup);
             

      const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
                <p style="font-size: .9rem; margin-bottom: 3rem; padding: 0 2rem 1.5rem 2rem;">${originalContent}</p>
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="view-before-after-div">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal" id="portfolioModalopen">View Before & After
                  <img src="` + window.Laravel.imagePath + `/assets/images/arrow-blue.png" width="100%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>`;

      if (!newContentArea.length) {
        newContentArea = jQuery("<div>", {
          class: "col-12 new-content-area",
          html: detail,
        });
      } else {
        newContentArea.html(detail);
      }

      if (newContentArea.parent().length) {
        newContentArea.parent().find(newContentArea).remove();
      }

      const insertAfterItem = row.find(
        `.col-md-6[data-index="${insertAfterIndex}"]`
      );
      if (insertAfterItem.length) {
        insertAfterItem.after(newContentArea);
      } else {
        row.append(newContentArea);
      }

      if (newContentArea.length) {
        const newContentAreaPosition = jQuery(newContentArea).offset().top;
        const headerHeight = jQuery(".header").innerHeight();
        console.log(headerHeight);
        
        /*jQuery("html, body").animate({
          scrollTop: newContentAreaPosition - headerHeight,
        }, 0);*/
        
      }
    } else {
      newContentArea.parent().find(newContentArea).remove();
    }
    
  });
  
});

jQuery(document).on("click", ".webPortfolio-caseStudyClose", function () {
  let newContentArea = document.querySelector(".new-content-area");

  if (newContentArea.parentNode) {
    newContentArea.parentNode.removeChild(newContentArea);
  }
});





// Web Portfolio Home

jQuery(document).ready(function () {
  jQuery(".single-webPortfolio.static_portfolio__home").click(function () {
    const index = parseInt(jQuery(this).closest(".col-md-6").data("index"), 10);
    const row = jQuery(this).closest(".row");

    const multiplier = 3;

    const insertAfterIndex = jQuery(window).width() < 767 ? index : Math.ceil(index / 3) * multiplier;

    let newContentArea = jQuery(".new-content-area");

    const hiddenCaseStudyData = jQuery(this).find(".hidden-caseStudyData");

    if (hiddenCaseStudyData.length) {
      const images = hiddenCaseStudyData.find(".images > img");

      let tabs = "";
      let tabContents = "";

      images.each(function (i, img) {
        const activeClass = i === 0 ? "active" : "";
        tabs += `<li class="nav-item">
          <a class="nav-link ${activeClass}" data-bs-toggle="tab" href="#website-caseStudy${
          i + 1
        }">
            <img src="${jQuery(img).attr("src")}" alt="" />
          </a>
        </li>`;

        tabContents += `<div class="tab-pane fade ${activeClass} ${
          i === 0 ? "show" : ""
        }" id="website-caseStudy${i + 1}">
          <div class="webPortfolio-caseStudyImage" style="background-image: url('${jQuery(
            img
          ).attr("src")}');"></div>
        </div>`;
      });
      
      
      
      const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="link-area">
                  <a href="https://websitedigitals.com/brief/" class="primary" style="font-size: 13px; min-height: auto; padding: 13px 18px;">Let's build website 
                  <i class="fa-solid fa-angles-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>`;

    /*const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="link-area">
                  <a href="https://websitedigitals.com/brief/" class="primary" style="font-size: 13px; min-height: auto; padding: 13px 18px;">View Case study
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>`;*/

      /*const detail = `
        <div class="row webPortfolio-caseStudyArea">
          <div class="webPortfolio-caseStudyClose">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="col-md-8">
            <div class="webPortfolio-caseStudyTabsArea">
              <div class="webPortfolio-caseStudyTabs">
                <ul class="nav nav-tabs">
                  ${tabs}
                </ul>
              </div>
              <div class="tab-content webPortfolio-caseStudy-content">
                ${tabContents}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="webPortfolio-caseStudyDetailArea">
              <img src="${jQuery(this)
                .find(".webPortfolio-contentTop > img")
                .attr("src")}" alt="" />
              <div class="webPortfolio-caseStudyDetail">
                ${hiddenCaseStudyData.find(".detail").html()}  
                <div class="webPortfolio-linkArea">
                  <a href="${hiddenCaseStudyData
                    .find(".links a.launch")
                    .attr(
                      "href"
                    )}" class="launch"><span>Make your personalize website</span><i class="fa-solid fa-angles-right"></i></a>
                  <a href="${hiddenCaseStudyData
                    .find(".links a.request")
                    .attr(
                      "href"
                    )}" class="request"><span>Schedule your meetup call</span><i class="fa-solid fa-angles-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>`;*/

      if (!newContentArea.length) {
        newContentArea = jQuery("<div>", {
          class: "col-12 new-content-area",
          html: detail,
        });
      } else {
        newContentArea.html(detail);
      }

      if (newContentArea.parent().length) {
        newContentArea.parent().find(newContentArea).remove();
      }

      const insertAfterItem = row.find(
        `.col-md-6[data-index="${insertAfterIndex}"]`
      );
      if (insertAfterItem.length) {
        insertAfterItem.after(newContentArea);
      } else {
        row.append(newContentArea);
      }

      if (newContentArea.length) {
        const newContentAreaPosition = jQuery(newContentArea).offset().top;
        const headerHeight = jQuery(".header").innerHeight();
        console.log(headerHeight);
        jQuery("html, body").animate({
          scrollTop: newContentAreaPosition - headerHeight,
        }, 0);
      }
    } else {
      newContentArea.parent().find(newContentArea).remove();
    }
  });
});

jQuery(document).on("click", ".webPortfolio-caseStudyClose", function () {
  let newContentArea = document.querySelector(".new-content-area");

  if (newContentArea.parentNode) {
    newContentArea.parentNode.removeChild(newContentArea);
  }
});




// Scroller Script

if (document.querySelectorAll(".scroller-section")) {
  document.addEventListener("scroll", function (e) {
    const sections = document.querySelectorAll(".scroller-item");
    let currentSection = "";
    const buffer = window.innerHeight / 2;
    if (sections) {
      sections.forEach((section) => {
        const sectionTop = section.getBoundingClientRect().top;
        const sectionBottom = section.getBoundingClientRect().bottom;
        if (
          sectionTop < window.innerHeight - buffer &&
          sectionBottom > buffer
        ) {
          currentSection = section.getAttribute("id");
        }
      });
      if (currentSection) {
        document
          .querySelectorAll(".scroller-sticky .scroller-list a")
          .forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href").endsWith(currentSection)) {
              link.classList.add("active");
            }
          });
      }
    }
  });
}

// Counter Script

var a = 0;
jQuery(window).scroll(function () {
  const progressContainer = jQuery(document).find(".progress-containerArea");
  if (progressContainer.length) {
    let oTop = progressContainer.offset().top - window.innerHeight;
    if (a == 0 && jQuery(window).scrollTop() > oTop) {
      jQuery(progressContainer)
        .find(".progress-container")
        .each(function () {
          function updateCount() {
            const count = Math.floor(this.countNum);
            $this.css("--percent", count + "%");
            $this.find(".progress-count .count").text(count);
            const countPer = parseInt((count / parseInt(countTo)) * 115);

            $this
              .find(".progress-count")
              .css(
                "transform",
                `translate(${countPer ? countPer * -1 : 0}%, -50% )`
              );
          }

          let $this = jQuery(this),
            countTo = $this.attr("data-countTo");
          jQuery({
            countNum: $this.css("--percent"),
          }).animate(
            {
              countNum: countTo,
            },
            {
              duration: 2000,
              easing: "swing",
              step: updateCount,
              complete: updateCount,
            }
          );
        });
      a = 1;
    }
  }
});

// Counter Simple Script
var b = 0;
jQuery(window).scroll(function () {
  const counterContainer = jQuery(document).find(".counter-container");
  if (counterContainer.length) {
    let oTop = counterContainer.offset().top - window.innerHeight;
    if (b == 0 && jQuery(window).scrollTop() > oTop) {
      jQuery(counterContainer)
        .find(".simple-counter")
        .each(function () {
          function updateCount() {
            const count = Math.floor(this.countNum);
            $this.text(count);
          }

          let $this = jQuery(this),
            countTo = $this.attr("data-countTo");
          jQuery({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },
            {
              duration: 2000,
              easing: "swing",
              step: updateCount,
              complete: updateCount,
            }
          );
        });
      b = 1;
    }
  }
});

// Carousels

const testimonialCarousel = jQuery(document).find(".testimonial-carousel");
if (testimonialCarousel.length) {
  testimonialCarousel.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    margin: 0,
    navText: ["", '<i class="fa-solid fa-arrow-right"></i>'],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      767: {
        items: 2,
        nav: false,
      },
      769: {
        nav: true,
      },
      1000: {
        items: 3,
        nav: true,
      },
    },
  });
}

const teamsCarousel = jQuery(document).find(".teams-carousel");
if (teamsCarousel.length) {
  teamsCarousel.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    margin: 0,
    navText: [
      '<i class="fa-solid fa-arrow-left"></i>',
      '<i class="fa-solid fa-arrow-right"></i>',
    ],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      767: {
        items: 2,
        nav: false,
      },
      769: {
        nav: true,
      },
      1000: {
        items: 3,
        nav: true,
      },
    },
  });
}

const contentWritingCarousel = jQuery(document).find(".contentWriting-carousel");
if (contentWritingCarousel.length) {
  contentWritingCarousel.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    margin: 0,
    navText: [
      '<i class="fa-solid fa-arrow-left"></i>',
      '<i class="fa-solid fa-arrow-right"></i>',
    ],
    center: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      767: {
        items: 2,
        nav: false,
      },
      769: {
        nav: true,
      },
      1000: {
        items: 3,
        nav: true,
      },
    },
  });
}

const digitalMarketingCarousel = jQuery(document).find(
  ".digital-marketing-carousel"
);
if (digitalMarketingCarousel.length) {
  digitalMarketingCarousel.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    margin: 0,
    navText: [
      '<i class="fa-solid fa-arrow-left"></i>',
      '<i class="fa-solid fa-arrow-right"></i>',
    ],
    center: true,
    nav: true,
    dots: false,
    items: 1,
    responsive: {
      0: {
        nav: false,
      },
      767: {
        nav: false,
      },
      769: {
        nav: true,
      },
      1000: {
        nav: true,
      },
    },
  });
}

const caseStudyPageCarousel = jQuery(document).find(".caseStudyPage-carousel");
if (caseStudyPageCarousel.length) {
  caseStudyPageCarousel.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    margin: 0,
    navText: [
      '<i class="fa-solid fa-arrow-left"></i>',
      '<i class="fa-solid fa-arrow-right"></i>',
    ],
    center: true,
    nav: false,
    dots: true,
    items: 1,
  });
}

const caseStudyPartnersCarousel = jQuery(document).find(
  ".caseStudy-partners-carousel"
);
if (caseStudyPartnersCarousel.length) {
  caseStudyPartnersCarousel.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    margin: 0,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 3,
      },
      767: {
        items: 4,
      },
      1000: {
        items: 5,
      },
    },
  });
}




// Phone Input

var phoneInputs = document.querySelectorAll(".phone-number");
phoneInputs.forEach(function (phoneInput) {
  window.intlTelInput(phoneInput, {
    initialCountry: "auto",
    geoIpLookup: function (callback) {
      jQuery.get("https://ipinfo.io", function () {}, "jsonp").always(function (
        resp
      ) {
        var countryCode = resp && resp.country ? resp.country : "";
        callback(countryCode);
      });
    },
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.7/js/utils.min.js",
  });
});





