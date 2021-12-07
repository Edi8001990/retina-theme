

<?php
    $args = array(  
        'post_type' => 'achievements',
        'post_status' => 'publish',
        'posts_per_page' => 5, 
        'orderby' => 'date', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 


         the_title(); 
         '<p class="achievement-value">' . the_excerpt() . '</p>'; 
    endwhile;

    wp_reset_postdata(); 
?>