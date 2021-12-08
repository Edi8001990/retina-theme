<?php 
$post   = get_page_by_title( 'Contact Us' );
$output =  apply_filters( 'the_content', $post->post_content );
?>


<section>
    <div class="contact-section">
        <h1><?php the_field('contact_us_header'); ?></h1>
        <span class="contact-paragraph"><?php echo $output; ?></span>
    </div>
</div>