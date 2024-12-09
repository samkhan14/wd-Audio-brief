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
        
        
        jQuery(document).ready(function () {
            setTimeout(function(){ 
             let companyName = jQuery("#companyName").val();
          
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                       
                        $zopim.livechat.setName(companyName); 
                        $zopim.livechat.addTags("Company Name: "+companyName);
                        $zopim.livechat.appendNotes("Company Name: "+companyName);
                    });    
                }
            }
            }, 3500);
        });
        
        
        jQuery("#cname").change(function(e) {
            let cname = jQuery("#cname").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                       
                        $zopim.livechat.setName(cname); 
                        $zopim.livechat.addTags("Company Name: "+cname);
                        $zopim.livechat.appendNotes("Company Name: "+cname);
                    });    
                }
            }
        });
        

         jQuery("#slogan").change(function(e) {
            let slogan = jQuery("#slogan").val();
            let companyName = jQuery("#companyName").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Company Name: "+companyName);
                        $zopim.livechat.addTags("Company Slogan: "+slogan);
                        $zopim.livechat.appendNotes("Company Slogan: "+slogan);
                    });    
                }
            }
        });
        
        jQuery("#industry").change(function(e) {
            var selectedOption = jQuery(this).find('option:selected');
            var industryName = selectedOption.data('industryname');
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Industry: "+industryName);
                        $zopim.livechat.appendNotes("Industry: "+industryName);
                    });    
                }
            }
        });
        
        
           jQuery("#keyword").change(function(e) {
            let keyword = jQuery("#keyword").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                      
                        $zopim.livechat.addTags("Keyword: "+keyword);
                        $zopim.livechat.appendNotes("Keyword: "+keyword);
                    });    
                }
            }
        });

         jQuery("#cus_name").change(function(e) {
            let cus_name = jQuery("#cus_name").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Customer Name: "+cus_name);
                        $zopim.livechat.appendNotes("Customer Name: "+cus_name);
                    });    
                }
            }
        });
        
        
         jQuery("#cus_email").change(function(e) {
            let cus_email = jQuery("#cus_email").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                        
                        $zopim.livechat.addTags("Customer Email: "+cus_email);
                        $zopim.livechat.appendNotes("Customer Email: "+cus_email);
                    });    
                }
            }
        });
        
        
        jQuery("#cus_phone").change(function(e) {
            let cus_phone = jQuery("#cus_phone").val();
              
            if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
                return;
            } else {
                if(waitForZopim) {
                    $zopim(function() {
                       
                        $zopim.livechat.addTags("Customer Phone: "+cus_phone);
                        $zopim.livechat.appendNotes("Customer Phone: "+cus_phone);
                    });    
                }
            }
        });