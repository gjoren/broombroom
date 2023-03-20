<?php

	define( 'THEME_DIR_URL', get_template_directory_uri() );
	define( 'THEME_DIR_PATH', get_stylesheet_directory() );
	define( 'THEME_VERSION', '1.0');

	// autoload
	require_once( THEME_DIR_PATH . "/vendor/autoload.php" );

	use CarkeysTheme\ClassTheme as Theme;
	use CarkeysTheme\ClassShortCodes as ShortCodes;
	use CarkeysTheme\ClassThemeCustomBlocks as CustomBlocks;
	use CarkeysTheme\ClassProducts as Products;

	$theme 		= new Theme;
	$shortcoes 	= new ShortCodes;
	$blocks 	= new CustomBlocks;
	$products 	= new Products;