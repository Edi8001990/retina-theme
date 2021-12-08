<?php 
$post   = get_page_by_title( 'Hero Header Title' );
$output =  apply_filters( 'the_content', $post->post_content );
$page_title = apply_filters( 'the_title', $post->post_title );

echo $page_title;
echo $output;
?>


<section></section>

<!-- Customizable top section CTA's -->

<?php if( get_field('choose_industry_filter') ): ?>
	<a href="<?php the_field('choose_industry_filter'); ?>">Choose Industry</a>
<?php endif; ?>


<?php if( get_field('choose_degree_filter') ): ?>
	<a href="<?php the_field('choose_degree_filter'); ?>">Choose Degree</a>
<?php endif; ?>

