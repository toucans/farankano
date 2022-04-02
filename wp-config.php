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
define( 'DB_NAME', 'farankano' );

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
define( 'AUTH_KEY',         'w*KDM+lc1O{,k-nF]m#_cx~ cG,Q@zEOzuu.oH3FN[ponN7Nno}3]Z?^qE=&U/[6' );
define( 'SECURE_AUTH_KEY',  '.h#P@vhBm|8MS*X8DM[3xZy4G/qbV56~J>1;32D,tNSJrT|t.50nI8L]1rO,m+gF' );
define( 'LOGGED_IN_KEY',    '8=>pBtaB/qQxSZ)zViQOD3@ImO_}s;B|ghRA:/c/We=ZV6d;<^>W$M3y[p*qS8Z4' );
define( 'NONCE_KEY',        'qP@Jn/h!;p) _*Fk,#5b7Al<1cG!9ZV-N?^fceH250qNzYb->la&i(3Ep!mhlWX3' );
define( 'AUTH_SALT',        '.f#kXjuO$E._In;LAvX5t~AIzB5FL5-cnYIw?z]zp34WKZ4%a=x&=m4cTp8!E(5{' );
define( 'SECURE_AUTH_SALT', 'c}usd$:a.Q~`CvpWO9]NPt{Yg4sIoZnhASl5Orl|nUOC7e@sV O;m,Km6&NO5U!#' );
define( 'LOGGED_IN_SALT',   'Xv.h>]M~<4*}X{6qsrAP:O-Ood]baGifd4{Ol!2Kom2>BAOYautUXAc{i@pbZ!PK' );
define( 'NONCE_SALT',       '7eM_Acra(Sfk6gmq6|Q&4@UY(Qd:Z)gEQ8Xcz8JhRL+K?6(<*i*J-Q)m292fb*o]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
