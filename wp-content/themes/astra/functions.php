<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.0.2' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=wp&utm_medium=dashboard' );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.0.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';



/**
 * 
 */

 //hook into the init action and call create_book_taxonomies when it fires
  
add_action( 'init', 'create_custom_taxonomy_make', 0 );
add_action( 'init', 'create_custom_taxonomy_model', 0 );
add_action( 'init', 'create_custom_taxonomy_manufactured_year', 0 );
  
//create a custom taxonomy
function create_custom_taxonomy_make() {

	$labels = array(
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

	// Now register the taxonomy
	register_taxonomy('car_makes',array('product'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'make' ),
	));
  
}

//create a custom taxonomy
function create_custom_taxonomy_model() {

	$labels = array(
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
		
	// Now register the taxonomy
	register_taxonomy('car_models',array('product'), array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'show_in_rest' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'model' ),
	));
}

// //create a custom taxonomy
function create_custom_taxonomy_manufactured_year() {

	$labels = array(
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
	'labels' => $labels,
	'show_ui' => true,
	'show_in_rest' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'year' ),
	));
}

function dp_year() { 
	wp_dropdown_categories(
		array(
			'taxonomy'=> 'car_years', 
			'selected'=> '', 
			'show_option_none'=> 'Year', 
			'hide_empty' => 0, 
			'name' => 'listofoptions', 
			'value_field' => 'slug' 
		)
	);
}
add_shortcode('select_year', 'dp_year');

function dp_make() {
	wp_dropdown_categories(
		array(
			'taxonomy'=> 'car_makes', 
			'selected'=> '', 
			'show_option_none'=> 'Make', 
			'hide_empty' => 0, 
			'name' => 'listofoptions', 
			'value_field' => 'slug' 
		)
	);
}
add_shortcode('select_make', 'dp_make');

function dp_model() {
	// wp_dropdown_categories(
	// 	array(
	// 		'taxonomy'=> 'car_models', 
	// 		'selected'=> '', 
	// 		'show_option_none'=> 'Model', 
	// 		'hide_empty' => 0, 
	// 		'name' => 'listofoptions', 
	// 		'value_field' => 'slug' 
	// 	)
	// );

	$this_category = get_category(1);
        $cats=get_categories(array('hide_empty' => '0', 'parent'=>$this_category ->cat_ID,'order'=> 'ASC','depth'=> '1'));

        if(!empty($cats)){
            foreach ($cats as $cat) {
                $newargs = array(
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'name',
                                'terms' => $cat->name,
                                        )
                             )
                          );
                echo'<div>';
                echo '<span class="subhead-title">'.$cat->name.'</span>';
                $nopostsparent= new wp_query( $newargs );
                if ($nopostsparent->have_posts()) {
                    echo '<ul class="cat-arc-links">';
                while ($nopostsparent->have_posts() ){
                    $nopostsparent->the_post();
                       echo'<li><a href="'. get_permalink() .'" class="product-link">'.get_the_title().'</a></li>';
                }
                wp_reset_query();
                echo '</ul></div>';
             }
            }
        }else{
        $newargs = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'name',
                        'terms' => $this_category->name,
                    )
                  )
            );
            $nopostsparent= new wp_query( $newargs );
            if ($nopostsparent->have_posts()) {
              echo '<ul class="cat-arc-links">';
            while ($nopostsparent->have_posts() ){
             $nopostsparent->the_post();
             echo'<li><a href="'. get_permalink() .'" class="product-link">'.get_the_title().'</a></li>';
            }
            wp_reset_query();
                echo '</ul></div>';
            }
        }
		
}
add_shortcode('select_model', 'dp_model');