<?php wp_footer(); ?>


<!-- Footer Menu -->
<h1><?php echo get_bloginfo( 'name' ); ?></h1>
<?php  wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
<?php  wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
<?php  wp_nav_menu( array( 'theme_location' => 'footer-menu-3' ) ); ?>
<?php  wp_nav_menu( array( 'theme_location' => 'social-media-menu' ) ); ?>


<!-- Custom logo -->



<?php
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
?>

<p> © Copyright © <?php echo date("Y")?> <?php echo get_bloginfo( 'name' ); ?>. All Rights Reserved.</p>

</body>
</html>