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
define( 'DB_NAME', 'wp_fsutq' );

/** Database username */
define( 'DB_USER', 'wp_vaztu' );

/** Database password */
define( 'DB_PASSWORD', 'UuL^0ehVOD9ZgH#8' );

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
define('AUTH_KEY', 'JFQaR-dx2_e7OJ8w5|icnD@K7YFjKRN%0|~n69K_hpbcV:0+~l)Mpk:7F0cr0M2/');
define('SECURE_AUTH_KEY', '2838(gMc356Uq)nJwURYoVRQ|nl+q]A+3UgA5SY0537t3)_q5]]W~2|QSeP2(7bP');
define('LOGGED_IN_KEY', '#D~*3T+j0bJ36Qk8n021gY74ibP!Dh3M6y_*+Bl723GszD13K6kSaLy2ICxh0z3M');
define('NONCE_KEY', '&/pPK1w08;~|t7p69ZjNKSubI857:-42h51#4_8TFB4PO#Q3a564sHkw@2G!2w+v');
define('AUTH_SALT', 'aht9V1[8;C461z5cO|#0d)jhJo@Fc_mf*i3N4[b~|Ch:Ow1Zv9Bt8%-07A5ax[M9');
define('SECURE_AUTH_SALT', '&VU]kQ7vez239hl#IwjH6|#XgMF]-tj169b0W7s5lvcI9]X4Jt8UtiY0u2lX*6-V');
define('LOGGED_IN_SALT', 'g2|stL2/P6n|Aq:_;B#27oofh7jQr:]bf9BKW*6Lk3G)FyY3Y#n18#4[:Z0B6KY2');
define('NONCE_SALT', '//x#WO%KK5Bd2)_AL6S)_f/8-:gL_2cc*56Q~(0aC8!wk%)Y**Q_LKVcqB0ay/w(');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QjRiI0_';


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
