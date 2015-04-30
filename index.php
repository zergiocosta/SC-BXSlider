<?php
/**
 * Plugin Name: SC BXSlider
 * Plugin URI: https://profiles.wordpress.org/sergiuscosta
 * Description: A simple responsive slideshow to your website
 * Version: 1.0.0
 * Author: Sergio Costa
 * Author URI: http://sergiocosta.net.br/
 * Text Domain: scbxslider
 * License: GPLv2 or later
 */

// Register Custom Post Type sc_bxslider_posttype
if ( ! function_exists('sc_bxslider_posttype') ) {
	function sc_bxslider_posttype() {
		$labels = array(
			'name'                => __('Sliders'),
			'singular_name'       => __('Slider'),
			'menu_name'           => __('SC BXSlider'),
			'name_admin_bar'      => __('SC BXSlider'),
			'parent_item_colon'   => __('Parent Item:'),
			'all_items'           => __('All Items'),
			'add_new_item'        => __('Add New Item'),
			'add_new'             => __('Add New'),
			'new_item'            => __('New Item'),
			'edit_item'           => __('Edit Item'),
			'update_item'         => __('Update Item'),
			'view_item'           => __('View Item'),
			'search_items'        => __('Search Item'),
			'not_found'           => __('Not found'),
			'not_found_in_trash'  => __('Not found in Trash'),
		);
		$args = array(
			'label'               => 'sc_bxslider_posttype',
			'description'         => __('SC BXSlider plugin'),
			'labels'              => $labels,
			'supports'            => array( 'title', 'thumbnail', ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'sc_bxslider_posttype', $args );
	}
	// Hook into the 'init' action
	add_action( 'init', 'sc_bxslider_posttype', 0 );
}

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
			$image_attr = wp_get_attachment_image_src( get_post_thumbnail_id(), $size, $icon ); ?> 
			<li><img src="<?php echo $image_attr[0]; ?>" title="<?php the_title(); ?>" /></li> <?php
		endwhile; ?>
		</ul> <?php
	endif;
}
add_shortcode( 'sc_bxslider', 'sc_bxslider_display' );

// enqueue files
add_action( 'wp_enqueue_scripts', 'sc_bxslider_files' );
function sc_bxslider_files() { 
    wp_enqueue_script( 'sc-bxslider', plugins_url( 'js/sc-bxslider.min.js', __FILE__ ), array( 'jquery' ), null, true );
    wp_enqueue_style( 'sc-bxslider', plugins_url( 'css/sc-bxslider.css', __FILE__ ), array(), null, 'all' );
}

// call plugin
add_action( 'wp_footer', 'sc_bxslider_call', 9999 );
function sc_bxslider_call() { ?>

	<script>
		jQuery(document).ready(function(){
			jQuery('.sc-bxslider').sc_bxslider({
				mode: 'fade',
				captions: true
			});
		});
	</script>

<?php }

?>