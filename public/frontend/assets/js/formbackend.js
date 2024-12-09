
jQuery( document ).ready(function() {


    /*jQuery("#contactformsec").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();
        console.log(getfields);

        jQuery.ajax({
            type: "POST",
            url: ajaxurl, // Replace with the actual path to your PHP script
            data: getfields + '&action=contact_form_sec',
            success: function (response) {
                jQuery('.contactsecnpagealert .alert-success').fadeIn();
                jQuery('#contactformsec')[0].reset();
                jQuery('#contactformsec').find('select').each(function() {
                    this.selectedIndex = 0;
                });

            },
            error: function () {
                jQuery('.contactsecnpagealert .alert-danger').fadeIn();
            }
        });
    });*/




    jQuery("#contactformsec").on("submit", function (event) {
        event.preventDefault();
        var getfields = jQuery(this).serialize();
        const fname = jQuery("input[name='fname']").val();
        const lname = jQuery("input[name='lname']").val();

        const fullName = fname + ' ' + lname;
        localStorage.setItem('fullName', fullName);

        console.log(getfields);

        jQuery.ajax({
            type: "POST",
            url: window.Laravel.routes.storeContactForm, // Replace with the actual path to your PHP script
            data: getfields,
            success: function (response) {
                let data = JSON.parse(response);
                /*jQuery('.contactsecnpagealert .alert-success').fadeIn();*/

                jQuery('#contactformsec')[0].reset();
                jQuery('#contactformsec').find('select').each(function() {
                    this.selectedIndex = 0;
                });

                // Redirect to the thank-you page
                window.location.href =  window.Laravel.routes.thankyouWebBrief + '?customer_name=' + data?.name;

            },
            error: function () {
                jQuery('.contactsecnpagealert .alert-danger').fadeIn();
            }
        });
    });




    jQuery("#signupform").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();
        console.log(getfields);

        const fullName = jQuery("input[name='signupname']").val();

        localStorage.setItem('fullName', fullName);

        jQuery.ajax({
            type: "POST",
            url: window.Laravel.routes.storeSignupForm, // Replace with the actual path to your PHP script
            data: getfields,
            success: function (response) {
                let data = JSON.parse(response);
                /*jQuery('.signupformalert .alert-success').fadeIn();
                jQuery('#signupform').hide();
                jQuery('#signupform')[0].reset();
                setTimeout(function () {
                    jQuery('#signupform').fadeIn();
                    jQuery('.signupformalert .alert-success').hide();
                }, 700000);*/

                window.location.href =  window.Laravel.routes.thankyouWebBrief + '?customer_name=' + data?.name;

            },
            error: function () {
                jQuery('.signupformalert .alert-danger').fadeIn();
            }
        });
    });





    jQuery("#popupform").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();

        const fullName = jQuery("input[name='popupname']").val();
        localStorage.setItem('fullName', fullName);

        jQuery.ajax({
            type: "POST",
            url: window.Laravel.routes.storePopupForm, // Replace with the actual path to your PHP script
            data: getfields,
            success: function (response) {
                let data = JSON.parse(response);
                jQuery('#popupform')[0].reset();

                window.location.href = window.Laravel.routes.thankyouWebBrief + '?customer_name=' + data?.name;
            },
            error: function () {
                jQuery('.popupformalert .alert-danger').fadeIn();
            }
        });
    });





    jQuery("#popupformsubmit").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();

        const fullName = jQuery("input[name='name']").val();
        localStorage.setItem('fullName', fullName);

        jQuery.ajax({
            type: "POST",
            url: window.Laravel.routes.storeSolutionForm, // Replace with the actual path to your PHP script
            data: getfields,
            success: function (response) {
                let data = JSON.parse(response);
                /*jQuery('.popupformalert .alert-success').fadeIn();*/
                jQuery('#popupformsubmit')[0].reset();
                window.location.href = window.Laravel.routes.thankyouWebBrief + '?customer_name=' + data?.name;
            },
            error: function () {
                jQuery('.popupformalert .alert-danger').fadeIn();
            }
        });
    });



    jQuery("#consultationform").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: ajaxurl, // Replace with the actual path to your PHP script
            data: getfields + '&action=consultation_form',
            success: function (response) {
                jQuery('.consultationformalert .alert-success').fadeIn();
                jQuery('#consultationform')[0].reset();
            },
            error: function () {
                jQuery('.consultationformalert .alert-danger').fadeIn();
            }
        });
    });

    jQuery("#solutionform").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();

        const fullName = jQuery("input[name='industry']").val();
        localStorage.setItem('fullName', fullName);

        jQuery.ajax({
            type: "POST",
            url: ajaxurl, // Replace with the actual path to your PHP script
            data: getfields + '&action=solution_form',
            success: function (response) {

                jQuery('#solutionform')[0].reset();
                window.location.href = 'https://websitedigitals.com/thank-you/';
            },
            error: function () {
                jQuery('.solutionformalert .alert-danger').fadeIn();
            }
        });
    });

    jQuery("#logostepform").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();

        console.log(getfields);
        var fieldValuelogo = jQuery(this).find('[name="name"]').val();
        console.log(fieldValuelogo);

        localStorage.setItem('fieldValue', fieldValuelogo);

        /*jQuery("#briefthankyou").html("Thank You, <strong style='background: #3c7cff; color: #fff; border-radius: 6px; padding: 6px 15px; font-weight: 600;'>" + fieldValuelogo + "</strong>");*/

        const brief_section = document.getElementById('brief_section');

        var currentUrl = window.location.href;
        var companyName = '';

        try {
            // Create a URL object from the current URL
            var url = new URL(currentUrl);

            // Get the value of 'company_name' from the search params
            companyName = url.searchParams.get('cname') ? url.searchParams.get('cname') : jQuery(this).find('[name="cname"]').val();
            getfields += '&cname=' + encodeURIComponent(companyName);

            // Log the value to the console
            console.log(companyName);

        }
        catch (error) {
            console.error('Error parsing URL:', error);
        }

        jQuery.ajax({
            type: "POST",
            url: window.Laravel.routes.storeLogoBrief, // Replace with the actual path to your PHP script
            data: getfields,
            success: function (response) {

                /*const nextBtn = jQuery(".next-step");
                nextBtn.attr("type", "button");
                jQuery(nextBtn).trigger("click");
                brief_section.classList.add('logo_brief_step_7');
                jQuery("#brief_logo").attr('src', '` + window.Laravel.imagePath + `/assets/images/logo-white.png');
                jQuery("#brief_header_phone").addClass('brief_header_number');*/

                let data = JSON.parse(response);
                console.log(data);

                jQuery(document).find('#build-website').attr('href', (data?.data?.url ? data.data.url : '#'));

                window.location.href = window.Laravel.routes.thankyouLogoBrief +'?brief_id=' + data?.id + '&company_name=' + data?.company_name + '&email=' + data?.data?.email + '&customer_name=' + data?.data?.name;

                /*const nextBtn = jQuery(".next-step");
                nextBtn.attr("type", "button");
                jQuery(nextBtn).trigger("click");*/
                /*jQuery('.contactsecnpagealert .alert-success').fadeIn();
                jQuery('#logostepform')[0].reset();
                jQuery('#logostepform').find('select').each(function() {
                    this.selectedIndex = 0;
                });*/

            },
            error: function () {
                /*jQuery('.contactsecnpagealert .alert-danger').fadeIn();*/
            }
        });
    });

    jQuery("#homebrief").on("submit", function (event) {
        event.preventDefault();
        getfields = jQuery(this).serialize();
        var fieldValue = jQuery(this).find('[name="name"]').val();
        localStorage.setItem('fieldValue', fieldValue);
        // Retrieve the audioQAData from localStorage
        let audioQAData = localStorage.getItem('audioQAData');
        if (audioQAData) {
            getfields += '&audioQAData=' + encodeURIComponent(audioQAData);
        }

        console.log("getfields",getfields);
        var currentUrl = window.location.href;
        var companyName = '';
        var email = jQuery(this).find('[name="email"]').val();

        try {
            var url = new URL(currentUrl);
            companyName = url.searchParams.get('company_name') ? url.searchParams.get('company_name') : jQuery(this).find('[name="cname"]').val();
            getfields += '&company_name=' + encodeURIComponent(companyName);
            getfields += '&email=' + encodeURIComponent(email);

            console.log(companyName);
            console.log("email:", email);
        }
        catch (error) {
            console.error('Error parsing URL:', error);
        }

        jQuery.ajax({
            type: "POST",
            url: window.Laravel.routes.storeWebBrief,
            data: getfields,
            success: function (data) {
                //  console.log("data check:", data);
                // console.log("this is URLLL", data?.url, data.data);
                jQuery(document).find('#build-website').attr('href', (data?.url ? data.url : '#'));
                console.log('check URL:', window.Laravel.routes.thankyouWebBrief + '?brief_id=' + data?.id + '&company_name=' + data?.company_name + '&email=' + email + '&customer_name=' + data?.data?.name + '&url=' + data?.url);
                window.location.href = window.Laravel.routes.thankyouWebBrief + '?brief_id=' + data?.id + '&company_name=' + data?.company_name + '&email=' + email + '&customer_name=' + data?.data?.name + '&url=' + data?.url;
            },
            error: function () {
                jQuery('.contactsecnpagealert .alert-danger').fadeIn();
            }
        });
    });

});
