<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carkeys' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/Q?FX(FlW$)N~eNI8,r!2g-@,d1:z[=Hg=Iqhd14Kjs*Hbl83b{|*2R/l7!9K<lJ' );
define( 'SECURE_AUTH_KEY',  '#s201vnRAToCiQJ[~:CUYMlH7<H0hQ#%rURt>; 2M7pt:_-XVXL v$(`e#U .#8+' );
define( 'LOGGED_IN_KEY',    '<j$H>WB^ZohKD3&Iif_<4?aV*=QCEScp98~ix$#.)v(-?5#Ild11zBv!{4U|tNz:' );
define( 'NONCE_KEY',        'w-WEFD@#^rE`Q41oZ=zgMlEH)~mxg*up~=|)D3RixjZ(k,}w8$sk3g#e^TQ>{8l+' );
define( 'AUTH_SALT',        'gwD11+Pg78)3HJQxmAp[ObkH&oQK|m*s9q<R*=!wkFp^8z;5Y|9] t{Ha-F2VP4 ' );
define( 'SECURE_AUTH_SALT', '`MGC3XO=H@ALQ#3KtX@j3@MTM$7@qu2G<Lq$i00;*Hv&^.t|JqL8W1!P0vlbR]4$' );
define( 'LOGGED_IN_SALT',   'd&K{1o&[SKg/W9.e~//9`zwcJ6.oQ6n0*?luQhR38RK>P)tjZPtKoHj3?mhEAQTC' );
define( 'NONCE_SALT',       '|s%ugBG9*AP.DjkPF#cvS!;q*rl!],bt_8MF7{M*jP}krPKq,0Sx/3:r/9xW+Rf|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ck_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
