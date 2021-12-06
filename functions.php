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