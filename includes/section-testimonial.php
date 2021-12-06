<?php 
$post   = get_page_by_title( 'Testimonial' );
$output =  apply_filters( 'the_content', $post->post_content );
?>


<?php $image = get_field('testimonial_image'); ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />


<p><?php the_field('testimonial_title'); ?></p>
<p><?php the_field('location_field'); ?></p>
<?php echo $output; ?>