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
        

        jQuery("#growth_name").change(function(e) {
            let growth_name = jQuery("#growth_name").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        $zopim.livechat.addTags("Customer Name: "+growth_name);
                        $zopim.livechat.appendNotes("Customer Name: "+growth_name);
                    });    
                }
            }
        });
        
  
        jQuery("#growth_service").change(function(e) {
            var selectedOption = jQuery(this).find('option:selected');
            var growth_service = selectedOption.data('service');
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Service: "+growth_service);
                        $zopim.livechat.appendNotes("Service: "+growth_service);
                    });    
                }
            }
        });
        
        
         jQuery("#growth_email").change(function(e) {
            let growth_email = jQuery("#growth_email").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Customer Email: "+growth_email);
                        $zopim.livechat.appendNotes("Customer Email: "+growth_email);
                    });    
                }
            }
        });
        
        jQuery("#growth_phone").change(function(e) {
            let growth_phone = jQuery("#growth_phone").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Customer Phone: "+growth_phone);
                        $zopim.livechat.appendNotes("Customer Phone: "+growth_phone);
                    });    
                }
            }
        });