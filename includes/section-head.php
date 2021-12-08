<?php 
		$post   = get_page_by_title( 'Hero Header Title' );
		$output =  apply_filters( 'the_content', $post->post_content );
		$page_title = apply_filters( 'the_title', $post->post_title );

?>

<div class="top-section-wrapper">
		<h1><?php echo $page_title; ?></h1>
		<h4><?php echo $output; ?><h4>

		<div class="top-section-wrapper-cta">
				<div class="cta-wrapper-blue">
						<?php if( get_field('choose_industry_filter') ): ?>
							<a class="btn" href="<?php the_field('choose_industry_filter'); ?>">Choose Industry
							<i class='fas fa-angle-right'></i>
					</a>
						<?php endif; ?>
				</div>

				<div class="cta-wrapper-blue">
						<?php if( get_field('choose_degree_filter') ): ?>
							<a class="btn" href="<?php the_field('choose_degree_filter'); ?>">Choose Degree
							<i class='fas fa-angle-right'></i>
					</a>
						<?php endif; ?>
				</div>
		</div>
</div>

<!-- Customizable top section CTA's -->



