<?php get_header();?>


<section>
    <div class="container">

        
        <?php get_template_part('includes/section'  ,'head'); ?>
        
        <?php get_template_part('includes/section'  ,'content'); ?>
        <?php get_template_part('includes/section'  ,'contact'); ?>

        <br>
        <br>

        <?php get_template_part('includes/section'  ,'testimonial'); ?>


        <?php get_template_part('includes/custom-posts/section' , 'achievements'); ?>
        
        
    </div>
</section>

<?php get_footer();?>