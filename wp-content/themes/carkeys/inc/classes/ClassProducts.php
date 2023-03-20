<?php
namespace CarkeysTheme;
/**
 * 
 */
class ClassProducts
{
	
	public function __construct()
	{
		add_action( 'init', array( $this, 'ProductCustomTaxonomies' ), 10 );
		
	}

	/**
	 * Custom taxonomies for woocommerce products
	 */
	public function ProductCustomTaxonomies()
	{
		// MAKE
		$labelsMake = array(
			'name' => _x( 'Make', 'taxonomy general name' ),
			'singular_name' => _x( 'Make', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Makes' ),
			'all_items' => __( 'All Make' ),
			'parent_item' => __( '' ), //Parent Subject
			'parent_item_colon' => __( '' ), //Parent Subject:
			'edit_item' => __( 'Edit Make' ), 
			'update_item' => __( 'Update Make' ),
			'add_new_item' => __( 'Add New Make' ),
			'new_item_name' => __( 'New Make Name' ),
			'menu_name' => __( 'Make' ),
		);

		register_taxonomy('car_makes',array('product'), array(
			'hierarchical' => false,
			'labels' => $labelsMake,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'make' ),
		));

		// .end make

		// MODEL
		$labelsModel = array(
			'name' => _x( 'Model', 'taxonomy general name' ),
			'singular_name' => _x( 'Model', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Model' ),
			'all_items' => __( 'All Model' ),
			'parent_item' => __( 'Parent Model' ), //
			'parent_item_colon' => __( 'Parent Model:' ), //
			'edit_item' => __( 'Edit Model' ), 
			'update_item' => __( 'Update Model' ),
			'add_new_item' => __( 'Add New Model' ),
			'new_item_name' => __( 'New Model' ),
			'menu_name' => __( 'Model' ),
		);    
			
		
		register_taxonomy('car_models',array('product'), array(
			'hierarchical' => true,
			'labels' => $labelsModel,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'model' ),
		));
		// .end model

		// MANUFACTURE YEAR
		$labelsYear = array(
			'name' => _x( 'Year', 'taxonomy general name' ),
			'singular_name' => _x( 'Year', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Year' ),
			'all_items' => __( 'All Year' ),
			'parent_item' => __( '' ),
			'parent_item_colon' => __( '' ),
			'edit_item' => __( 'Edit Year' ), 
			'update_item' => __( 'Update Year' ),
			'add_new_item' => __( 'Add New Year' ),
			'new_item_name' => __( 'New Year' ),
			'menu_name' => __( 'Year' ),
		);    
			
		// Now register the taxonomy
		register_taxonomy('car_years',array('product'), array(
			'hierarchical' => false,
			'labels' => $labelsYear,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'year' ),
		));

		// .end manufacture year
	}

	
}