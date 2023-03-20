<?php
namespace CarkeysTheme;
/**
 * 
 */
class ClassTheme
{
	
	public function __construct()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'EnqueueStyles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'EnqueueScripts' ) );

		add_theme_support( 'menus' );
		add_action( 'after_setup_theme', array( $this, 'ThemeSetup' ), 0 );

		// Register the Static Widget Areas
		add_action( 'widgets_init', array( &$this, 'RegisterStaticWidgetAreas' ), 10 );
	}

	/**
	 * 	Theme CSS/Styling
	 */
	public function EnqueueStyles()
	{	
		wp_enqueue_style( 'font-awesome-styles', THEME_DIR_URL . '/assets/css/font-awesome.min.css?v=' . THEME_VERSION, false, THEME_VERSION, 'all' );	
		wp_enqueue_style( 'theme-styles', THEME_DIR_URL . '/assets/css/app.min.css?v=' . THEME_VERSION, false, THEME_VERSION, 'all' );
	}

	/**
	* Theme JS
	*/
	public function EnqueueScripts()
	{
		wp_dequeue_script('jquery');
		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery', THEME_DIR_URL . '/assets/js/jquery-3.5.1.min.js', false, '3.5.1', 'all' );
		wp_enqueue_script( 'theme-js', THEME_DIR_URL . '/assets/js/app.min.js', array( 'jquery' ), THEME_VERSION, true );
		wp_localize_script( 'theme-js', 'carkeys',
			array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
		);
	}

	/**
	 * 	Registering menus
	 */
	public function ThemeSetup()
	{
		register_nav_menus(
			array(
				'main_menu'   => __( 'Main Menu' ), // for header main menu
				'footer_menu' => __( 'Footer-Menü' ) // for footer menu
			)
		);

		\Carbon_Fields\Carbon_Fields::boot();
	}

	/**
	 * 	Registering widgets
	 */
	public function RegisterStaticWidgetAreas()
	{
		register_sidebar( array(
			'id'            => 'left_sidebar',
			'name'          => 'Left Sidebar Widgets',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		) );


		register_sidebar( array(
			'id'            => 'right_sidebar',
			'name'          => 'Right Sidebar Widgets',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		) );

		register_sidebar( array(
			'id'            => 'header_widget_area',
			'name'          => 'Header Widgets besides main menu',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}

}