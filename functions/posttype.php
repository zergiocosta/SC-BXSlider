<?php

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
			'taxonomies'          => array( 'post_tag' ),
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