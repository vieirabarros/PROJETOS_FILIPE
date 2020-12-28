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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_filipebarrosevc' );

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
define( 'AUTH_KEY',         ':ddBTX&UFMD^$F^E#J}y$Tq(I4.y7j$L]x )F5NU4,v m |UNlsHlj0z0=(Akdaq' );
define( 'SECURE_AUTH_KEY',  'QVf~9(-B^O|$J6FRUrtEq8U@%4}z@so3Q-x o50,7lv~S%iER1%Q!b-s$[e7@MR-' );
define( 'LOGGED_IN_KEY',    'G3bE~ur3dGL%Wa| {Bm` `X)AP&=XPEFnht}Pb]Z,2bcQ@n4f$gGE8S0Zs.WTpAt' );
define( 'NONCE_KEY',        'drsv@t?#T<o[w$]lT%HZ0eT9^L) 1R#<{8(lgp.n$AQw@YJq# Kc7y1w/*?eQnq8' );
define( 'AUTH_SALT',        '-RZ~%=!gC>KHyh1>}R}b${NaN^!)N,7{;5G8@POk$0c];_0ws>e(99&4emQF8mIp' );
define( 'SECURE_AUTH_SALT', 'zopSoBp{2jYt;l.Br,pe>*D^7=b%u-Z {$bX1C=2`=O}l+k*lGfm|U2LDN&jj|_@' );
define( 'LOGGED_IN_SALT',   '7^dF)pBZ!t.7@w9vLm3rmA2 m4p866^U8H/b^ la%Lj`FDC@8y)pepq}1vlX0K~M' );
define( 'NONCE_SALT',       'TRYDuHj9=f2fh1%I>c(!!-Zm+AlUoSljWh!i]pR~cw:|;%ZFa#Ni{dmGWBS^hFm ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
