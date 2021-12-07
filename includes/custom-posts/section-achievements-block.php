<?php
    $args = array(  
        'post_type' => 'achievements',
        'post_status' => 'publish',
        'posts_per_page' => 5, 
        'orderby' => 'date', 
        'order' => 'ASC', 
    );
    ?>
<div class="achievements-block">
    <?php $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
        <div class="row">
            <div class="col">
                <div class="achievement-image-wrapper">

                    <?php $image = get_field('achievement-image'); ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <div class="triangle-shape"></div>

                <h1><?php the_excerpt() ; ?></h1>
                <span> <?php the_title(); ?> </span> 

        </div>
        </div>

   
<?php     
    endwhile;
    wp_reset_postdata(); 
?>

</div>