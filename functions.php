<?php


function load_css(){

// Load Bootstrap CSS
   wp_register_style('bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
   wp_enqueue_style('bootstrap');


// Load Custom CSS
   wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
   wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts' , 'load_css');







// Load Bootstrap JS + Jquery Library..

function load_js(){
    wp_enqueue_script('jquery'); 

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts' , 'load_js');


// Load Font Awesome icons for the footer 

function load_font_awesome(){
    wp_enqueue_script('fascript', 'https://kit.fontawesome.com/a076d05399.js');
}

add_action('wp_enqueue_scripts' , 'load_font_awesome');



// Theme Options
add_theme_support('menus');
add_theme_support('widgets');



// Main menu LOGO

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// Menus

function register_my_menus() {
    register_nav_menus(
      array(
        'top-menu' => 'Main Menu',
        'footer-menu-1' => __( 'Footer Menu Block 1' ),
        'footer-menu-2' => __( 'Footer Menu Block 2' ),
        'footer-menu-3' => __( 'Footer Menu Block 3' ),
        'social-media-menu' => __( 'Social Media Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );




// Register Sidebars



add_action('widgets-init', 'my-sidebars');

// Custom SMTP mailing for Contact Form 7...

function custom_mailer($php_mail){
    $php_mail->SetFrom('selected-------@------mail.com', 'Mateusz T'); // Type correct email address
    $php_mail->Host = 'smtp.gmail.com';
    $php_mail->Port = 465;
    $php_mail->SMTPAuth = true;
    $php_mail->SMTPSecure = 'ssl';
    $php_mail->Username = SMTP_LOGIN; // needs to be specified at wp-config.php file
    $php_mail->Password = SMTP_PASSWORD; // needs to be specified at wp-config.php file
    $php_mail->IsSMTP();
}

add_action('phpmailer_init', 'custom_mailer');

?>