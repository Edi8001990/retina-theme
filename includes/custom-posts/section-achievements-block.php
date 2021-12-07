<?php
    $args = array(  
        'post_type' => 'achievements',
        'post_status' => 'publish',
        'posts_per_page' => 5, 
        'orderby' => 'date', 
        'order' => 'ASC', 
    );
    ?>

    <?php $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php $image = get_field('achievement-image'); ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          
          <h1><?php the_excerpt() ; ?></h1>
          <h1> <?php the_title(); ?> </h1> 

          
   
<?php     
    endwhile;
    wp_reset_postdata(); 
?>