  var waitForZopim = setInterval(function () {
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            }
            
            $zopim(function() {
                $zopim.livechat.setOnUnreadMsgs(unread);
                function unread(number) {
                    if (number>=1) {
                        var ua = navigator.userAgent.toLowerCase(), platform = navigator.platform.toLowerCase();
                        platformName = ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0],
                        isMobile = /ios|android|webos/.test(platformName);
                        if (!isMobile) {
                            $zopim.livechat.window.show();
                        }
                        $zopim.livechat.window.hide();
                    }
                }
            }); 
            clearInterval(waitForZopim);
        }, 3000);
        
        
        jQuery("#popup_name").change(function(e) {
            let popup_name = jQuery("#popup_name").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        $zopim.livechat.addTags("Customer Name: "+popup_name);
                        $zopim.livechat.appendNotes("Customer Name: "+popup_name);
                    });    
                }
            }
        });
        
  
        jQuery("#popup_service").change(function(e) {
            var selectedOption = jQuery(this).find('option:selected');
            var popup_service = selectedOption.data('service');
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Service: "+popup_service);
                        $zopim.livechat.appendNotes("Service: "+popup_service);
                    });    
                }
            }
        });
        
        
         jQuery("#popup_email").change(function(e) {
            let popup_email = jQuery("#popup_email").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Customer Email: "+popup_email);
                        $zopim.livechat.appendNotes("Customer Email: "+popup_email);
                    });    
                }
            }
        });
        
        jQuery("#popup_phone").change(function(e) {
            let popup_phone = jQuery("#popup_phone").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Customer Phone: "+popup_phone);
                        $zopim.livechat.appendNotes("Customer Phone: "+popup_phone);
                    });    
                }
            }
        });