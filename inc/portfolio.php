<?php 
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'wplearning' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'wplearning' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'wplearning' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'wplearning' ),
		'archives' => __( 'Portfolio Archives', 'wplearning' ),
		'attributes' => __( 'Portfolio Attributes', 'wplearning' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'wplearning' ),
		'all_items' => __( 'All Portfolios', 'wplearning' ),
		'add_new_item' => __( 'Add New Portfolio', 'wplearning' ),
		'add_new' => __( 'Add New', 'wplearning' ),
		'new_item' => __( 'New Portfolio', 'wplearning' ),
		'edit_item' => __( 'Edit Portfolio', 'wplearning' ),
		'update_item' => __( 'Update Portfolio', 'wplearning' ),
		'view_item' => __( 'View Portfolio', 'wplearning' ),
		'view_items' => __( 'View Portfolios', 'wplearning' ),
		'search_items' => __( 'Search Portfolio', 'wplearning' ),
		'not_found' => __( 'Not found', 'wplearning' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wplearning' ),
		'featured_image' => __( 'Featured Image', 'wplearning' ),
		'set_featured_image' => __( 'Set featured image', 'wplearning' ),
		'remove_featured_image' => __( 'Remove featured image', 'wplearning' ),
		'use_featured_image' => __( 'Use as featured image', 'wplearning' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'wplearning' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'wplearning' ),
		'items_list' => __( 'Portfolios list', 'wplearning' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'wplearning' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'wplearning' ),
        
	);
	$args = array(
		'label' => __( 'Portfolio', 'wplearning' ),
		'description' => __( '', 'wplearning' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );
 ?>