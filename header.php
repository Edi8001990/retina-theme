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



<div class="top-menu-box main-header-navigation">
    <div class="container">
        <div class="row">
            <!-- Custom logo -->
                <div class="col-4"> <?php  if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?></div>

            <!-- Main Menu -->
                <div class="col">  <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'nav')); ?></div>
         </div>
</div>
</div>


<div class="top-menu-box main-header-navigation-mobile">
    <div class="container">
        <div class="mobile-nav-row">
            <!-- Custom logo -->
                <div class="mobile-nav-block"> <?php  if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
                <div class="trigger-icon">
                    <i class="fa fa-bars burger-menu" aria-hidden="true"></i>
                </div>
            </div>

            <!-- Main Menu -->
                <div class="mobile-nav-block">  <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'nav')); ?></div>
         </div>
</div>
</div>






</header>