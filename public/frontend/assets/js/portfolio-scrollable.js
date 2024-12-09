jQuery(document).ready(function() {
    setScrollablePortfolio();
    jQuery(window).on('resize', function() {
        setScrollablePortfolio();
    });
    
    function setScrollablePortfolio() {
		var tabsWidthTotal = jQuery('#scrollable-tabs').get(0).scrollWidth;
		var tabsWidth = jQuery('#scrollable-tabs').width();
        if (tabsWidthTotal > tabsWidth) {
			jQuery("#scrollable-tabs").addClass('scrollable-tabs');
		} else {
            jQuery("#scrollable-tabs").removeClass('scrollable-tabs');
        }
    }  
});


jQuery(".next-portfolio").click(function() {
  	nextPortTab();
  	jQuery("#scrollable-tabs").scroll(function() {
  		checkPortPos();
  	});
});

jQuery(".prev-portfolio").click(function() {
  	prevPortTab();
  	jQuery("#scrollable-tabs").scroll(function() {
  		checkPortPos();
  	});
});

function nextPortTab() {
	var scrollerWidth = jQuery('.portfolio-scroll-tabs').width() - 120;
	document.getElementById('scrollable-tabs').scrollBy(scrollerWidth, 0);
}

function prevPortTab() {
	var scrollerWidth = jQuery('.portfolio-scroll-tabs').width() - 120;
	document.getElementById('scrollable-tabs').scrollBy(-scrollerWidth, 0);
}

function checkPortPos() {
	nextCheck();
  	prevCheck();
}

function prevCheck() {
	var totalWidthTab = jQuery('.scrollable-tabs').get(0).scrollWidth - jQuery('.scrollable-tabs').width();
	var scrollLeftValue = jQuery('.scrollable-tabs').scrollLeft();
	if (scrollLeftValue == 0) {
		jQuery(".prev-portfolio").css('visibility','hidden');
		jQuery(".prev-portfolio").css('opacity','0');
	}
	else {
		jQuery(".prev-portfolio").css('visibility','visible');
		jQuery(".prev-portfolio").css('opacity','1');
	}
}

function nextCheck() {
	var totalWidthTab = jQuery('.scrollable-tabs').get(0).scrollWidth - jQuery('.scrollable-tabs').width();
	var scrollLeftValue = jQuery('.scrollable-tabs').scrollLeft();
	if (scrollLeftValue >= totalWidthTab - 20) {
		jQuery(".next-portfolio").css('visibility','hidden');
		jQuery(".next-portfolio").css('opacity','0');
	}
	else {
		jQuery(".next-portfolio").css('visibility','visible');
		jQuery(".next-portfolio").css('opacity','1');
	}
}