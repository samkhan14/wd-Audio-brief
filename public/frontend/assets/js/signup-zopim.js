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
        
        
        jQuery("#signup_name").change(function(e) {
            let signup_name = jQuery("#signup_name").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        console.log(signup_name);
                        $zopim.livechat.addTags("Customer Name: "+signup_name);
                        $zopim.livechat.appendNotes("Customer Name: "+signup_name);
                    });    
                }
            }
        });
        
  
        jQuery("#signup_service").change(function(e) {
            var selectedOption = jQuery(this).find('option:selected');
            var signup_service = selectedOption.data('service');
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        console.log(signup_service);
                        $zopim.livechat.addTags("Service: "+signup_service);
                        $zopim.livechat.appendNotes("Service: "+signup_service);
                    });    
                }
            }
        });
        
        
         jQuery("#signup_email").change(function(e) {
            let signup_email = jQuery("#signup_email").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        console.log(signup_email);
                        $zopim.livechat.addTags("Customer Email: "+signup_email);
                        $zopim.livechat.appendNotes("Customer Email: "+signup_email);
                    });    
                }
            }
        });
        
        jQuery("#signup_phone").change(function(e) {
            let signup_phone = jQuery("#signup_phone").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        console.log(signup_phone);
                        $zopim.livechat.addTags("Customer Phone: "+signup_phone);
                        $zopim.livechat.appendNotes("Customer Phone: "+signup_phone);
                    });    
                }
            }
        });