<div class="top-head-box">
    <div class="top-head-wrapper">
            <?php get_header();?>
                <div class="container">
                    <?php get_template_part('includes/section'  ,'head'); ?>
            </div>
    </div>
</div>

<section>
    <div class="container">

        
       
            <br>
        <?php get_template_part('includes/section'  ,'features'); ?>
        
        <?php get_template_part('includes/section'  ,'content'); ?>
        <?php get_template_part('includes/section'  ,'contact'); ?>

        <br>
        <br>

        <?php get_template_part('includes/section'  ,'testimonial'); ?>

        <?php get_template_part('includes/section'  ,'achievements'); ?>
        
        
        
    </div>
</section>

<?php get_footer();?>