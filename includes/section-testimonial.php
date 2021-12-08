<?php 
        $post   = get_page_by_title( 'Testimonial' );
        $output =  apply_filters( 'the_content', $post->post_content );
?>

        <section>
        <div class="testimonial-section">
        <div class="testimonial-section-wrapper">
        <div class="container">
                        
        <div class="row">
                <div class="col-3 first">
                        <span class="fill-icon"></span>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span class="location-text"><?php the_field('location_field'); ?></span>
                </div>
                        <div class="col-3 second">
                                <?php $image = get_field('testimonial_image'); ?>
                                <img class="testimonial-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                <div class="col-3 third">
                        <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                </div>
        </div>
                <div class="testimonial-text-container">
                                <h1><?php the_field('testimonial_title'); ?></h1>
                                <span class="testimonial-paragraph"><?php echo $output; ?></span>
                                </div>
                        </div> 
                        </div>                   
        </div>  
        </section>





      