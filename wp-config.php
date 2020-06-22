<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdevxx' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'SJ-JUj~rEOX1-Y!FN2ga66U(qhd&X.e>cY,PaGL&X;eWmfChE/ Vo8f?]U+YCqe6' );
define( 'SECURE_AUTH_KEY', 'D6u`FY&<qU8.;6%$b9]$rm7RD@GZ;|J!@j?i;=IqNN1Q^96@8YFcq6I7uBD-fzD$' );
define( 'LOGGED_IN_KEY', '7IjV oDB $hip}tJ 1=:5 r*k5jA07kXkju6ijHjVw.+o~2nyGF,k.-=ak_byfI@' );
define( 'NONCE_KEY', '`_h:wqCY=g0L!MTm(W9 w|QMGx5eMVwD+,K1Y:3 JZ>?xN<g`^p$q<&/vYgC=OD!' );
define( 'AUTH_SALT', '?<<;E!i.aLX~B/|Shh9?O7[+%}3tK=4!]t75AoFE|/2_r+`*srEt$,T+MM4pT [8' );
define( 'SECURE_AUTH_SALT', ',;-D&Wj1XpudSxR8:%grCeVVOBHTsN#Dz.Nl_ijhI BYKag459wawuTBvI:P+ZhG' );
define( 'LOGGED_IN_SALT', '~d33IU]=JO([Ma>gN^wxHS;K7YoJC^S6O0A0FgO+GCo$6rA$tu&HI#Jlm~OA+3#4' );
define( 'NONCE_SALT', '^3Cl2-Ef<)rG7xF;WT#T288gR}Gc(6z>j=b0Pd=Pfid6;CSq}k0gJwrr4@Ng-cTv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

$root_dir = dirname( __DIR__ );

$webroot_dir = $root_dir;

/** I don't want to miss any errors! */
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_LOG', true );

define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_HOME', 'http://wpdevxx.com' );

define( 'WP_SITEURL', 'http://wpdevxx.com/bin' );

/** define( 'WPINC', 'assets' ); */

define( 'WP_CONTENT_DIR', $webroot_dir . '/app' );

define( 'WP_CONTENT_URL', 'http://wpdevxx.com/app' );

/** define('WP_CONTENT_DIR', dirname(__FILE__) . '/path/to/my/content-dir'); */

/** define('WP_CONTENT_URL', 'http://mysite.com/path/to/my/content-dir'); */

define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/services' );

define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/services' );

/** Without a trailing slash, this path must not be absolute: it is relative to the ABSPATH constant defined by WordPress. */

define( 'UPLOADS', '/media' );

define( 'AUTOMATIC_UPDATER_DISABLED', true );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'SCRIPT_DEBUG', false );

define( 'SAVEQUERIES', false );

/** define( 'WP_PLUGIN_DIR', dirname( __FILE__ ) . '/app/services' ); */
 
/** I don't want to create revisions */
/** define( 'WP_POST_REVISIONS', false ); */

/** I love revisions! */ 
define( 'WP_POST_REVISIONS', true );

/** Too many revisions?  */
define( 'WP_POST_REVISIONS', 2 );

/** That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/bin' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . '/wp-settings.php';
