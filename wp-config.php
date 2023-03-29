<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'ecom_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-8)q=1d*iG@_=j-^Vtr;)f)tn?-|2%-8{o>eMh+!w[tv]JRwC%L~NiW%<p^y&B<2' );
define( 'SECURE_AUTH_KEY',  'tD?HM_StvtQx}`g+)w]~f~0.ly? #3#CGPDcl#qOE!=J=IQQ/3DT/YUi%8akhi]S' );
define( 'LOGGED_IN_KEY',    '^o ?q/Xp@=.Bhu|/x/u7UpTH)@<ecXIoeNP&0K0{2q]v$-XHv<sA~5FZTA_s3|f=' );
define( 'NONCE_KEY',        'Zn0Lz/yCF`T#ER=_Sc@b^?[~Xi-?+X_]&#FVT|v:SgDa:iB(-tV*4==veGg+K;CI' );
define( 'AUTH_SALT',        'HpMdF*8vqKw3e[p(}3A_h_YD9mAJq2WgOxMm}?]l.GOE7*A(R F#<Zir1w+I(0PX' );
define( 'SECURE_AUTH_SALT', '}yk>;qITn9tq*ZWH@biX^CJnj-QWsJ}RK-_(ZU$D N}/eNs@s@986 P]*SHS&V2H' );
define( 'LOGGED_IN_SALT',   '}&&vg><EcFd&)UDyftF!|8nYf#bN{++Cl`uuc7CIx5RM{4,eZk/4u6dU2RCQVO`,' );
define( 'NONCE_SALT',       'G01h:5Bv0)<[vCu<G /]m*b&>KSMO/{LS6ebV)CozA9}T_odPIY)lkh~uWI39Qmc' );

/**#@-*/

/**
 * WordPress database table prefix.
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
