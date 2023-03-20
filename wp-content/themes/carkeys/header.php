<!doctype html>
<html class="no-js" lang="de">
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/b/378 -->
    <!-- DEV NOTE: whenever possible set the HTTP-Header for X-UA-Compatible too to avoid problems with intranet zones -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- do not detect phone numbers -->
    <meta name="format-detection" content="telephone=no">

    <?php if (!empty($_GET['im'])) { ?>
        <meta name="robots" content="noindex">
    <?php } ?>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_DIR_URL ?>/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo THEME_DIR_URL ?>/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_DIR_URL ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_DIR_URL ?>/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_DIR_URL ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo THEME_DIR_URL ?>/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo THEME_DIR_URL ?>/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
<style>
    .otgs-development-site-front-end{display:none;} /*hide wpml dev banner */
</style>
    <?php wp_head(); ?>
</head>

<body cz-shortcut-listen="true" class="<?php echo (is_front_page()) ? 'home' : ''; ?>">

<header class="site-header">
    <div class="container header-container">
        <div class="header-item site-logo">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo THEME_DIR_URL ?>/assets/images/logos/logo.png">
            </a>
        </div>
        <div class="header-item menu-container">
            <?php echo wp_nav_menu(array('theme_location' => 'main_menu', 'container_class' => 'menu-main-container' ) ); ?>
        </div>
        <?php if( is_active_sidebar( 'header_widget_area' ) ):?>
            <div class="header-item header-widget-container"><?php dynamic_sidebar( 'header_widget_area' );?></div>
        <?php endif;?>
    </div>
</header>

