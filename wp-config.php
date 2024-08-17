<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'I%k%L+882$m: lYk-x/1@D^S(xA:e=6{<Pvo$1viYABfK,!#uou%W_oeZ7/.2dub' );
define( 'SECURE_AUTH_KEY',  '[{trE`ev7*;Q*Z[C=Wk(;{prjV,&&W }-s%6^{RZ %X$l)?:dU=vXiP5)/;.z9W:' );
define( 'LOGGED_IN_KEY',    'zLX!<$l_*XPP~AU&|(Kb2k(7_9u,`l~Xt~edwl|7 DS*5j9Rdu0/vVPasex:8Yfo' );
define( 'NONCE_KEY',        '@onWqAK<Px$Pw3vsTCVkx>WxAXrR8&HvjFfkQbCH{8:FZ%A-*rDo=)+axq@[+^AF' );
define( 'AUTH_SALT',        'X|w94m8H;onv|-Yv;&=3j/HwCPKPU!-z{G+;eEG*{-QqF+Hpb9)&8Z),RAq-Auk>' );
define( 'SECURE_AUTH_SALT', 'SFKoL<F]M{@LpD;?(09_TPznAH=%?]W4Nm|TI][Ir^+3_2MV99 Q|kbXb^C!T+RA' );
define( 'LOGGED_IN_SALT',   'x6<BieV7-2p-pc!}#SUmn=`O?4%mJ|e!<]iU|YES?k%YND=*hyH,mTk._C+7$Fj6' );
define( 'NONCE_SALT',       '1%,fI!F{mC]X[44euzf+vMkF@l;TZ?!p}BR[,4=.jU9CpuYEuX2L>90% =n3aw$|' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
