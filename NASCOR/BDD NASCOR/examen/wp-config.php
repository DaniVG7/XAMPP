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
define( 'DB_NAME', 'wp_aptfp' );

/** Database username */
define( 'DB_USER', 'wp_bgfqn' );

/** Database password */
define( 'DB_PASSWORD', 'BuTk@Jm2~*h8Uj9o' );

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
define('AUTH_KEY', 'WU619eu5@D6Oa*:okI3Gn&*pGun]J/%~9*A)Kdo9;+1#alVp2RxI36:5%0eew9:U');
define('SECURE_AUTH_KEY', 'sWrTm|H7CCAW%n((+rfC87mJWY]uSM@VA/Jg1I8G6e%4#4|#!99U(i|:i5*x)18u');
define('LOGGED_IN_KEY', 's/&sOSN+VA#83k1;L9A0LW3DljpgG3!!lzd5C;%&P!-|_2~2IT:1vvd|5EiB2P~1');
define('NONCE_KEY', 'W|/XUtx#!Zym~vS([%3AeQ@#Cx0A][wd[YM2vFTyqc36LQu~@4;4|Y5G;@&rp:K9');
define('AUTH_SALT', '36(0y6#JcDZm@FkNpL2fvC164DcC;KBy@)fvZx]0Tu_V3;5Y26P*hRqsX+os0p4A');
define('SECURE_AUTH_SALT', 'Y8N459/SP0gCM2|yBg3Tk@96E~1CJ3e6J%Ip%k5rd5x][3D1~(9o50;5C@7pTCG/');
define('LOGGED_IN_SALT', ')l&r]5;*Cus*(0U33(T2*n(b9X6*qV|2Y89j65L/4Cte6R24YMV*S1_Uju8;27i|');
define('NONCE_SALT', 'M9j3E4X0J0)/BCS-9m+~2tfY9A9[vcWSM[4P9|Wdp#1b/;%~0;ho_j[[36/K0P|[');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bmNYlpqV_';


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
