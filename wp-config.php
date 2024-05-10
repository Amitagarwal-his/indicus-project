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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hiplstaging1_wp_5frui' );

/** Database username */
define( 'DB_USER', 'hiplstaging1_wp_cw8oj' );

/** Database password */
define( 'DB_PASSWORD', 'H#~!z6#@1v00NUDp' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '0I1DP_630DIih)p678Bsz(]jD0XcFNU1geGa~0%[5/m-z_4D)gF1tRz0)o4R45(s');
define('SECURE_AUTH_KEY', 'r6/Mc+A*r7]3Rq3(@;+Q#D:Q*_D!A382-3ZUd4x98923G8_8e55u-gHw25Q5LJ1#');
define('LOGGED_IN_KEY', 'Md4LQ*7)4T1_*dQ_x17CdD548_8yp]&2m-807!|dfc9L44)#j1v4m#eaq2P8W_]8');
define('NONCE_KEY', 'B4w4g+91vMpC:*adD1sQzn6|F2/y1v]5)xPc!p[2v|YEd7]1u|2[fIWlMh958#m%');
define('AUTH_SALT', 'dH&%O0N3kIaY&Q75Cyd|%_8n&o0N#r#3b46_%W~5Xz98PTf+;47D%/954oi00ky)');
define('SECURE_AUTH_SALT', 'nTW&08-x)_#f28Y1PN3N_0a3j%H]trma&TW4MuEfoX(%3bX[4rJQ8r5m|sV6[9/1');
define('LOGGED_IN_SALT', '@vgs(|&B)X+qd7hq8%4ZoCnM6;)qMO]1O(%T10cvW&if15L8c|:1|706/IK-_;pd');
define('NONCE_SALT', '!8VT*;wD_q*S)sTEgaU6Qdn(0[E86x-0aI_)[+9h@G5xL7@VX6sVMs1uR35&;]DW');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'RLkToD_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
/*if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}*/

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
