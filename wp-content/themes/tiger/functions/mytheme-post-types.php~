<?php 

/* Create a custom post type called News */

function dw_create_post_type_news() 
{
	$labels = array(
		'name' => __( 'News','your_text_domain'),
		'singular_name' => __( 'News','your_text_domain' ),
		'add_new' => __('Create New','your_text_domain'),
		'add_new_item' => __('Create A New News','your_text_domain'),
		'edit_item' => __('Edit News','your_text_domain'),
		'new_item' => __('Create News','your_text_domain'),
		'view_item' => __('View News','your_text_domain'),
		'search_items' => __('Search News','your_text_domain'),
		'not_found' =>  __('Sorry, no news found.','your_text_domain'),
		'not_found_in_trash' => __('No news found in trash.','your_text_domain'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		// Uncomment the following line to change the slug; 
		// You must also save your permalink structure to prevent 404 errors
		//'rewrite' => array( 'slug' => 'news' ), 
		'supports' => array('title','editor','thumbnail','custom-fields','page-attributes','excerpt')
	  ); 
	  
	  register_post_type(__( 'news' ),$args);
}
	
add_action( 'init', 'dw_create_post_type_news' );
