This si from Features block

<?php
    $args = array(  
        'post_type' => 'features',
        'post_status' => 'publish',
        'posts_per_page' => 6, 
        'orderby' => 'date', 
        'order' => 'ASC', 
    );
    ?>
<div class="features-block">
    <?php $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="row">
                    <div class="col col-green">
                    <span class="close-toggle"><i class="far fa-times-circle"></i></span>
                        <div class="features-image-wrapper">
                                <?php $image = get_field('feature_image_url'); ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                        
                    
                     <h6 class="feature-header"><?php the_field('feature_header'); ?></h6>
                     <p class="feature-description"><?php the_field('feature_description'); ?></p>
                     <a class="feature-page-url" href="<?php the_field('freature_page_url'); ?>">CTA TO PAGE
                     <i class="fas fa-angle-right" aria-hidden="true"></i>
                    </a>

                       
                    <span class="plus-toggle"><i class="fa fa-plus" aria-hidden="true"></i></span>

                </div>
                </div>
   
<?php     
    endwhile;
    wp_reset_postdata(); 
?>

</div>