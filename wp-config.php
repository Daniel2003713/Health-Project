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
define( 'DB_NAME', 'my_wordpress_exam' );

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
define( 'AUTH_KEY',         '211HmRfL^*{e9]P)sC:BQ8D@j@>75Z 2uZN]y.bz)otV`%MfMUMjudlm?ROp>;:)' );
define( 'SECURE_AUTH_KEY',  'Wz2Bs+1?{!xwFU#gP|,[ UMXacNWPvsyR@l>?R9.%U_m<cqfIv>k(#Y+ARA%h<A ' );
define( 'LOGGED_IN_KEY',    'yttu9O(?|(yra-s^HELp_t!?K!Woq{^x]h0<tDG/N}VE!)AA*)::^:1ACtv,-<LP' );
define( 'NONCE_KEY',        'Pba*gho@tW`~gJM7)sO-1uqpuFAkJt{yf=++@0153)6MY;{RbiE;5^RYLNjpDv$?' );
define( 'AUTH_SALT',        'yp@9}H]mS;M4Ecvl_h^4Km}eB[FZ7w{;gs[1og<GR*%KJ<N[?QwUXJhxMOL8R2Fn' );
define( 'SECURE_AUTH_SALT', '[Iej#$^Dm}Or`eM^v 1OQs-,lLjtSb[J7yHFf(9&yTaCjy7@>&2gUe/Uk;~R.|0S' );
define( 'LOGGED_IN_SALT',   '0?F*^xK-y4J4&1B0^Kj0`_o_-B}=-*-t@!m-wM2u71xea6`x$Rcd@I-S<%?L*AbC' );
define( 'NONCE_SALT',       '#_f>GKao,baqm-#mLc_O>0F##rfR@4(4Q,<Hi/<k3Z`xZ:2 FD3psd-|?P&MsD#(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_713';

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


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);