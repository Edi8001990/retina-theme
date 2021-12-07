<?php 
        $post   = get_page_by_title( 'Achievements' );
        $output =  apply_filters( 'the_content', $post->post_content );
?>

<section>
    <div class="achievements-section">
    
        <h1><?php the_field('achievement_header'); ?></h1>
        <?php  echo '<span class="achievement-paragraph">' . $output . '</span>'; ?>

        <?php get_template_part('includes/custom-posts/section' , 'achievements-block'); ?>


        <!-- Custom CTA -->

        <div class="cta-wrapper-blue">
            <a class="btn" href="<?php the_field('cta_achievement'); ?>">Contact Us
            <i class='fas fa-angle-right'></i>
        </a>
        
    </div>
</div>
</section>

