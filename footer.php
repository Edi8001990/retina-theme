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
</body>
</html>