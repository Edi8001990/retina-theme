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