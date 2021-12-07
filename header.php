<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
    <title>Document</title>

    <?php wp_head(); ?>
    
</head>
<body>
    
<header>

<!-- Custom logo -->

<?php
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
?>

<!-- Main Menu -->

<?php wp_nav_menu( array( 'theme_location' => 'top-menu' )); ?>

</header>