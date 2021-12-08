<div class="footer">
    <div class="container">
        <?php wp_footer(); ?>


        <!-- Footer Menu -->
        
        <h5 class="footer-site-name"><?php echo get_bloginfo( 'name' ); ?></h5>
        <div class="footer-items d-flex justify-content-between">
        
                <?php  wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
                <?php  wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
                <?php  wp_nav_menu( array( 'theme_location' => 'footer-menu-3' ) ); ?>
                
                
               
                <div class="social-media-icons">
                       

                        <?php  
                        // Get social media menu name
                        $_menu_object = wp_get_nav_menu_object( 6 );
                        $nav_menu_selected_title = $_menu_object->name;
                        echo ('<h5 class="social-media-menu-name">' . $nav_menu_selected_title  .  '</h5>');
                        wp_nav_menu( array( 'theme_location' => 'social-media-menu' ) ); 
                        
                        
                            
                            ?>
                </div>
                

                <div class="company-info-footer-container">
                    <div class="footer-logo"><?php if ( function_exists( 'the_custom_logo' )) { the_custom_logo(); } ?></div>
                    <span class="footer-company-info">© Copyright © <?php echo date("Y")?> <?php echo get_bloginfo( 'name' ); ?>. All Rights Reserved.</span>
                </div>
        </div>
        

        <!-- Custom logo -->



        

        
    </div>
  </div>

<!-- Counter Pluggin copied From Jquery library:
https://www.jqueryscript.net/other/Counting-Up-To-Numerical-Values-On-Scroll-jQuery-Countup-js.html
-->

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script>
        /*!
* jquery.countup.js 1.0.3
*
* Copyright 2016, Adrián Guerra Marrero http://agmstudio.io @AGMStudio_io
* Released under the MIT License
*
* Date: Oct 27, 2016
*/
(function( $ ){
  "use strict";

  $.fn.countUp = function( options ) {

    // Defaults
    var settings = $.extend({
        'time': 2000,
        'delay': 10
    }, options);

    return this.each(function(){

        // Store the object
        var $this = $(this);
        var $settings = settings;

        var counterUpper = function() {
            if(!$this.data('counterupTo')) {
                $this.data('counterupTo',$this.text());
            }
            var time = parseInt($this.data("counter-time")) > 0 ? parseInt($this.data("counter-time")) : $settings.time;
            var delay = parseInt($this.data("counter-delay")) > 0 ? parseInt($this.data("counter-delay")) : $settings.delay;
            var divisions = time / delay;
            var num = $this.data('counterupTo');
            var nums = [num];
            var isComma = /[0-9]+,[0-9]+/.test(num);
            num = num.replace(/,/g, '');
            var isInt = /^[0-9]+$/.test(num);
            var isFloat = /^[0-9]+\.[0-9]+$/.test(num);
            var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;

            // Generate list of incremental numbers to display
            for (var i = divisions; i >= 1; i--) {

                // Preserve as int if input was int
                var newNum = parseInt(Math.round(num / divisions * i));

                // Preserve float if input was float
                if (isFloat) {
                    newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
                }

                // Preserve commas if input had commas
                if (isComma) {
                    while (/(\d+)(\d{3})/.test(newNum.toString())) {
                        newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
                    }
                }

                nums.unshift(newNum);
            }

            $this.data('counterup-nums', nums);
            $this.text('0');

            // Updates the number until we're done
            var f = function() {
                $this.text($this.data('counterup-nums').shift());
                if ($this.data('counterup-nums').length) {
                    setTimeout($this.data('counterup-func'),delay);
                } else {
                    delete $this.data('counterup-nums');
                    $this.data('counterup-nums', null);
                    $this.data('counterup-func', null);
                }
            };
            $this.data('counterup-func', f);

            // Start the count up
            setTimeout($this.data('counterup-func'),delay);
        };

        // Perform counts when the element gets into view
        $this.waypoint(counterUpper, { offset: '100%', triggerOnce: true });
    });

  };

})( jQuery );

    </script>
</body>
</html>