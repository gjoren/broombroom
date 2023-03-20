<?php
namespace CarkeysTheme;
/**
 * 
 */
use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

class ClassThemeCustomBlocks
{
	
	public function __construct()
	{
		add_action( 'carbon_fields_register_fields', array( $this, 'ThemeCustomBlocks' ) );
	}

	/**
	 * 	Theme Custom Blocks
	 */
	public function ThemeCustomBlocks()
	{		

		Block::make( __( 'Product Filter Form' ) )
			->set_icon( 'welcome-widgets-menus' )
			->add_fields( array(
				Field::make( 'html', 'filter_title_html' )
					->set_html( '<h3>'.__( 'Product Filter Form', 'carkeys' ).'</h3>' ),
				Field::make( 'text', "form_filter_title", __( 'Filter Title', 'carkeys' ) ),				
			) )
			->set_category( 'layout' )
			->set_render_callback( array( $this, 'RenderSelectFilter' ) );

		// Hero blocks
		Block::make( __( 'Hero Blocks' ) )
			->set_icon( 'welcome-widgets-menus' )
			->add_fields( array(
				Field::make( 'html', 'hero_title_html' )
					->set_html( '<h3>'.__( 'Hero Block', 'carkeys' ).'</h3>' ),
				Field::make( 'text', "hero_title", __( 'Hero Title', 'carkeys' ) ),
				Field::make( 'text', "hero_subtitle", __( 'Hero SubTitle', 'carkeys' ) ),
				Field::make( 'image', "hero_image", __( 'Hero Background Image', 'carkeys' ) ),
				Field::make( 'text', "hero_button_text", __( 'Hero Button Text', 'carkeys' ) ),
				Field::make( 'text', "hero_button_link", __( 'Hero Button Link', 'carkeys' ) ),
			) )
			->set_category( 'layout' )
			->set_render_callback( array( $this, 'RenderHero' ) );
		
	}

	/**
	  * Render Select Filter
	  * @param $blockParam
	  */
	public function RenderSelectFilter( $blockParam )
	{
		
		$html = '';
		$htmlRaw = '';

		$title = isset( $blockParam['title'] ) && $blockParam['title'] ? $blockParam['title'] : __( 'SELECT YOUR VEHICLE', 'carkeys' );

		ob_start();
			echo '<div class="select-input">';
				wp_dropdown_categories(
					array(
						'taxonomy'=> 'car_years', 
						'selected'=> '', 
						'show_option_none'=> 'Year', 
						'hide_empty' => 0, 
						'name' => 'car_years', 
						'value_field' => 'term_id' 
					)
				);
			echo '</div>';
		$htmlRaw .= ob_get_clean();

		ob_start();
			echo '<div class="select-input">';
				wp_dropdown_categories(
					array(
						'taxonomy'=> 'car_makes', 
						'selected'=> '', 
						'show_option_none'=> 'Make', 
						'hide_empty' => 0, 
						'name' => 'car_makes', 
						'value_field' => 'term_id' 
					)
				);
			echo '</div>';
		$htmlRaw .= ob_get_clean();

		ob_start();
			echo '<div class="select-input">';
			wp_dropdown_categories(
				array(
					'taxonomy'=> 'car_models', 
					'selected'=> '', 
					'show_option_none'=> 'Model', 
					'hide_empty' => 0, 
					'name' => 'listofoptions', 
					'value_field' => 'term_id' 
				)
			);
			echo '</div>';
		$htmlRaw .= ob_get_clean();

		$htmlRaw = '<form id="filter-form" class="filter-form">'.$htmlRaw.'</form>';

		ob_start();
			require( THEME_DIR_PATH.'/templates/blocks/select-filter.php' );
		$html = ob_get_clean();

		echo $html;

	}

	/**
	  * Render Hero Block
	  * @param $blockParam
	  */
	public function RenderHero( $blockParam )
	{
		$inlineStyles = '';
		$title 		= isset( $blockParam['hero_title'] ) && $blockParam['hero_title'] ? $blockParam['hero_title'] : null;
		$subtitle 	= isset( $blockParam['hero_subtitle'] ) && $blockParam['hero_subtitle'] ? $blockParam['hero_subtitle'] : null;
		$bgImage 	= isset( $blockParam['hero_image'] ) && $blockParam['hero_image'] ? wp_get_attachment_image_url( $blockParam['hero_image'], 'full' ) : null;
		$btnText 	= isset( $blockParam['hero_button_text'] ) && $blockParam['hero_button_text'] ? $blockParam['hero_button_text'] : __( 'Read more', 'carkeys' );
		$btnLink 	= isset( $blockParam['hero_button_link'] ) && $blockParam['hero_button_link'] ? $blockParam['hero_button_link'] : '';

		$inlineStyles = !is_null( $bgImage ) ? ' style="background-image: url('. $bgImage .')"' : '';
		// title
		$html = '';
		ob_start();
			require( THEME_DIR_PATH.'/templates/blocks/hero.php' );
		$html = ob_get_clean();


		echo $html;
	}
}