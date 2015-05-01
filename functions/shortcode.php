<?php

// Add Shortcode to display slider
function sc_bxslider_display() { 	
	$args = array(
		'post_type' 		=> 'sc_bxslider_posttype',
		'posts_per_page' 	=> 5
	);
	$sc_bxslider_query = new WP_QUERY($args);
	if ($sc_bxslider_query->have_posts()) : ?>
		<ul class="sc-bxslider"> <?php
		while ($sc_bxslider_query->have_posts()) : $sc_bxslider_query->the_post();
			$image_attr = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?> 
			<li><img src="<?php echo $image_attr[0]; ?>" title="<?php the_title(); ?>" /></li> <?php
		endwhile; ?>
		</ul> <?php
	endif;
}
add_shortcode( 'sc_bxslider', 'sc_bxslider_display' );