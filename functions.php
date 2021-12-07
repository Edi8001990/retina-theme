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

    wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', 'jquery', false, true);
    wp_enqueue_script('custom-js');

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
add_theme_support('post-thumbnails');



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
        'top-menu' => __( 'Main Menu Header'),
        'footer-menu-1' => __( 'Footer Menu Block 1' ),
        'footer-menu-2' => __( 'Footer Menu Block 2' ),
        'footer-menu-3' => __( 'Footer Menu Block 3' ),
        'social-media-menu' => __( 'Follow Us' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );




// Register Sidebars

add_action('widgets-init', 'my-sidebars');


// ------ Custom Post Types
// Achievements
function custom_post_type_achievements(){

    $args = array(
        
        'labels' => array(
            'name' => 'Achievements',
            'singular_name' => 'Achievements',

        ),

        'hierarchical' => true,
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'custom-fields'),

    );

    register_post_type('achievements', $args);
}

add_action('init', 'custom_post_type_achievements');



// Achievemnts category

function custom_post_taxonomy_achievements(){
    $args = array(
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy( 'achievements', array('achievements'), $args);
}

add_action('init', 'custom_post_taxonomy_achievements');


// Features
function custom_post_type_features(){

    $args = array(
        
        'labels' => array(
            'name' => 'Features',
            'singular_name' => 'Features',

        ),

        'hierarchical' => true,
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-forms',
        'supports' => array('title', 'editor', 'custom-fields'),

    );

    register_post_type('features', $args);
}

add_action('init', 'custom_post_type_features');


// Features category

function custom_post_taxonomy_features(){
    $args = array(
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy( 'features', array('features'), $args);
}

add_action('init', 'custom_post_taxonomy_features');


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