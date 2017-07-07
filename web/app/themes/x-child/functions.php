<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

function custom_post_type() {
  
  $lp_labels = array(
		'name'                => _x( 'Landing Pages', 'Post Type General Name', 'betheme-child' ),
		'singular_name'       => _x( 'Landing Page', 'Post Type Singular Name', 'betheme-child' ),
		'menu_name'           => __( 'Landing Pages', 'betheme-child' ),
		'parent_item_colon'   => __( 'Parent Landing Page', 'betheme-child' ),
		'all_items'           => __( 'All Landing Pages', 'betheme-child' ),
		'view_item'           => __( 'View Landing Page', 'betheme-child' ),
		'add_new_item'        => __( 'Add New Landing Page', 'betheme-child' ),
		'add_new'             => __( 'Add New', 'betheme-child' ),
		'edit_item'           => __( 'Edit Landing Page', 'betheme-child' ),
		'update_item'         => __( 'Update Landing Page', 'betheme-child' ),
		'search_items'        => __( 'Search Landing Page', 'betheme-child' ),
		'not_found'           => __( 'Not Found', 'betheme-child' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'betheme-child' ),
	);
	
  // Set other options for Custom Post Type
	$lp_args = array(
		'label'               => __( 'Landing Pages', 'betheme-child' ),
		'description'         => __( 'Bolstra Landing Pages', 'betheme-child' ),
		'labels'              => $lp_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics','category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
  $news_labels = array(
		'name'                => _x( 'News And Press', 'Post Type General Name', 'betheme-child' ),
		'singular_name'       => _x( 'News Item', 'Post Type Singular Name', 'betheme-child' ),
		'menu_name'           => __( 'News & Press', 'betheme-child' ),
		'parent_item_colon'   => __( 'Parent News Item', 'betheme-child' ),
		'all_items'           => __( 'All News & Press', 'betheme-child' ),
		'view_item'           => __( 'View News Item', 'betheme-child' ),
		'add_new_item'        => __( 'Add New News Item', 'betheme-child' ),
		'add_new'             => __( 'Add New', 'betheme-child' ),
		'edit_item'           => __( 'Edit News Item', 'betheme-child' ),
		'update_item'         => __( 'Update News Item', 'betheme-child' ),
		'search_items'        => __( 'Search News Item', 'betheme-child' ),
		'not_found'           => __( 'Not Found', 'betheme-child' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'betheme-child' ),
	);
	
  // Set other options for Custom Post Type
	$news_args = array(
		'label'               => __( 'News & Press', 'betheme-child' ),
		'description'         => __( 'Bolstra News & Press', 'betheme-child' ),
		'labels'              => $news_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics','category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
  $pr_labels = array(
		'name'                => _x( 'Press Releases', 'Post Type General Name', 'betheme-child' ),
		'singular_name'       => _x( 'Press Release', 'Post Type Singular Name', 'betheme-child' ),
		'menu_name'           => __( 'Press Releases', 'betheme-child' ),
		'parent_item_colon'   => __( 'Parent Press Release', 'betheme-child' ),
		'all_items'           => __( 'All Press Releases', 'betheme-child' ),
		'view_item'           => __( 'View Press Release', 'betheme-child' ),
		'add_new_item'        => __( 'Add New Press Release', 'betheme-child' ),
		'add_new'             => __( 'Add New', 'betheme-child' ),
		'edit_item'           => __( 'Edit Press Release', 'betheme-child' ),
		'update_item'         => __( 'Update Press Release', 'betheme-child' ),
		'search_items'        => __( 'Search Press Release', 'betheme-child' ),
		'not_found'           => __( 'Not Found', 'betheme-child' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'betheme-child' ),
	);
	
  // Set other options for Custom Post Type
	$pr_args = array(
		'label'               => __( 'Press Releases', 'betheme-child' ),
		'description'         => __( 'Bolstra Press Releases', 'betheme-child' ),
		'labels'              => $pr_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics','category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	  $preso_labels = array(
		'name'                => _x( 'Presentations', 'Post Type General Name', 'betheme-child' ),
		'singular_name'       => _x( 'Presentation', 'Post Type Singular Name', 'betheme-child' ),
		'menu_name'           => __( 'Presentations', 'betheme-child' ),
		'parent_item_colon'   => __( 'Parent Presentation', 'betheme-child' ),
		'all_items'           => __( 'All Presentations', 'betheme-child' ),
		'view_item'           => __( 'View Presentation', 'betheme-child' ),
		'add_new_item'        => __( 'Add New Presentation', 'betheme-child' ),
		'add_new'             => __( 'Add New', 'betheme-child' ),
		'edit_item'           => __( 'Edit Presentation', 'betheme-child' ),
		'update_item'         => __( 'Update Presentation', 'betheme-child' ),
		'search_items'        => __( 'Search Presentation', 'betheme-child' ),
		'not_found'           => __( 'Not Found', 'betheme-child' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'betheme-child' ),
	);
	
  // Set other options for Custom Post Type
	$preso_args = array(
		'label'               => __( 'Presentations', 'betheme-child' ),
		'description'         => __( 'Bolstra Presentations', 'betheme-child' ),
		'labels'              => $preso_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics','category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
  // Set UI labels for Custom Post Type
	$cs_labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'betheme-child' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'betheme-child' ),
		'menu_name'           => __( 'Case Studies', 'betheme-child' ),
		'parent_item_colon'   => __( 'Parent Case Study', 'betheme-child' ),
		'all_items'           => __( 'All Case Studies', 'betheme-child' ),
		'view_item'           => __( 'View Case Study', 'betheme-child' ),
		'add_new_item'        => __( 'Add New Case Study', 'betheme-child' ),
		'add_new'             => __( 'Add New', 'betheme-child' ),
		'edit_item'           => __( 'Edit Case Study', 'betheme-child' ),
		'update_item'         => __( 'Update Case Study', 'betheme-child' ),
		'search_items'        => __( 'Search Case Study', 'betheme-child' ),
		'not_found'           => __( 'Not Found', 'betheme-child' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'betheme-child' ),
	);
	
  // Set other options for Custom Post Type
	$cs_args = array(
		'label'               => __( 'Case Studies', 'betheme-child' ),
		'description'         => __( 'Bolstra Case Studies', 'betheme-child' ),
		'labels'              => $cs_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics','category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

  // Set UI labels for Custom Post Type
	$vid_labels = array(
		'name'                => _x( 'Videos', 'Post Type General Name', 'betheme-child' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'betheme-child' ),
		'menu_name'           => __( 'Videos', 'betheme-child' ),
		'parent_item_colon'   => __( 'Parent Video', 'betheme-child' ),
		'all_items'           => __( 'All Videos', 'betheme-child' ),
		'view_item'           => __( 'View Video', 'betheme-child' ),
		'add_new_item'        => __( 'Add New Video', 'betheme-child' ),
		'add_new'             => __( 'Add New', 'betheme-child' ),
		'edit_item'           => __( 'Edit Video', 'betheme-child' ),
		'update_item'         => __( 'Update Video', 'betheme-child' ),
		'search_items'        => __( 'Search Video', 'betheme-child' ),
		'not_found'           => __( 'Not Found', 'betheme-child' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'betheme-child' ),
	);
	
  // Set other options for Custom Post Type
	$vid_args = array(
		'label'               => __( 'Videos', 'betheme-child' ),
		'description'         => __( 'Bolstra Videos', 'betheme-child' ),
		'labels'              => $vid_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics','category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	  // Set UI labels for Custom Post Type
	$ebook_labels = array(
		'name'                => _x( 'eBooks', 'Post Type General Name', 'betheme-child' ),
		'singular_name'       => _x( 'eBook', 'Post Type Singular Name', 'betheme-child' ),
		'menu_name'           => __( 'eBooks', 'betheme-child' ),
		'parent_item_colon'   => __( 'Parent eBook', 'betheme-child' ),
		'all_items'           => __( 'All eBooks', 'betheme-child' ),
		'view_item'           => __( 'View eBook', 'betheme-child' ),
		'add_new_item'        => __( 'Add New eBook', 'betheme-child' ),
		'add_new'             => __( 'Add New', 'betheme-child' ),
		'edit_item'           => __( 'Edit eBook', 'betheme-child' ),
		'update_item'         => __( 'Update eBook', 'betheme-child' ),
		'search_items'        => __( 'Search eBook', 'betheme-child' ),
		'not_found'           => __( 'Not Found', 'betheme-child' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'betheme-child' ),
	);
	
  // Set other options for Custom Post Type
	$ebook_args = array(
		'label'               => __( 'eBooks', 'betheme-child' ),
		'description'         => __( 'Bolstra eBooks', 'betheme-child' ),
		'labels'              => $ebook_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'topics','category' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'Landing Pages', $lp_args );
	register_post_type( 'News & Press', $news_args );
	register_post_type( 'Videos', $vid_args );
	register_post_type( 'eBooks', $ebook_args );
	register_post_type( 'Success ', $cs_args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );