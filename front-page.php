<div class="top-head-box">
    <div class="top-head-wrapper">
            <?php get_header();?>
                <div class="container">
                    <?php get_template_part('includes/section'  ,'head'); ?>
            </div>
    </div>
</div>


    <div class="container">
        <?php get_template_part('includes/section'  ,'features'); ?>
        <?php get_template_part('includes/section'  ,'content'); ?>
        <?php get_template_part('includes/section'  ,'contact'); ?>
   </div>
        
   
        <?php get_template_part('includes/section'  ,'testimonial'); ?>

    <div class="container">
        <?php get_template_part('includes/section'  ,'achievements'); ?>
   </div> 
    </div>

    
<?php get_footer();?>