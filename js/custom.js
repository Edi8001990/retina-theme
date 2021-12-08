// Add .active CSS class to features to make it hidden or visible 

jQuery(document).ready(function(){
    jQuery(".plus-toggle").click(function(){
            jQuery(this)
            .closest('.row')
            .find(".plus-toggle, .show-text, .close-toggle, .features-image-wrapper, .feature-description, .col-green, .feature-page-url, .feature-header")
            .addClass('active');
    });

    jQuery(".close-toggle").click(function(){
        jQuery(this)
            .closest('.row')
            .find(".plus-toggle, .show-text, .close-toggle, .features-image-wrapper, .feature-description, .col-green, .feature-page-url, .feature-header")
            .removeClass('active');
    });
});

// Add boostrap class to select input in the form
jQuery(document).ready(function(){
    jQuery( ".country-select .wpcf7-form-control-wrap select" ).addClass("form-select"); 
    jQuery( ".education-level .wpcf7-form-control-wrap select" ).addClass("form-select"); 
    
    // Add Counter class to achievements values
    jQuery( ".achievements-block .row .col h1 p" ).addClass("counter");
    // Count Achievements Values
    $('.counter').countUp();
});


