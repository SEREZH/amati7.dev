    jQuery(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        // breakpoint and up  
        jQuery(window).resize(function(){
            if (jQuery(window).width() >= 980){  
              // when you hover a toggle show its dropdown menu
              jQuery(".navbar .dropdown-toggle").hover(function () {
                 jQuery(this).parent().toggleClass("show");
                 jQuery(this).parent().find(".dropdown-menu").toggleClass("show"); 
               });

                // hide the menu when the mouse leaves the dropdown
              jQuery( ".navbar .dropdown-menu" ).mouseleave(function() {
                jQuery(this).removeClass("show");  
              });
                // do something here
            }   
        });  
        // document ready  
    });

    jQuery(window).on('load', function () {
        var $preloader = jQuery('#ez-preloader');
        //$svg_anm   = $preloader.find('.svg_anm');
        //$svg_anm.fadeOut();
        //$preloader.delay(500).fadeOut('slow');
        $preloader.delay(500).hide('slow', function() {
          
        });
        /*$preloader.hide('slow/400/fast', function() {*/
        //$preloader.hide('slow', function() {});
    });
