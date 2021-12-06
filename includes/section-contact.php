<?php 
$post   = get_page_by_title( 'Contact Us' );
$output =  apply_filters( 'the_content', $post->post_content );
echo $output;
?>