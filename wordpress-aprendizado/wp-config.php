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
define( 'DB_NAME', 'wordpress_aprendizado' );

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
define( 'AUTH_KEY',         '[*^!/rv_9?22mj$ImX=^kY&|N)m#Vm89%hYk{Rhv_])*[]$8N R}d7H9o= &rh?y' );
define( 'SECURE_AUTH_KEY',  'h*e*|aSh`pm~zs7pl`f[;_D5ZvV7W2]_nQ9sfgrkH>~+W/3Mu/,AN:|2[)dd%O{P' );
define( 'LOGGED_IN_KEY',    'n1cq=hC;C#z)QO+&k)Ki}K8wIJVur1[LT[_QW#)BeZm85x<5|_LUz@!l{QM9/E#N' );
define( 'NONCE_KEY',        '~/w}b1h}p-z/.P51#q2BWfS7UuROnm`1>y10 ;StE>S1/4KDo|#;UWII$@sD.V#|' );
define( 'AUTH_SALT',        ';M6*7-_|LUV3e_K,R|i^_fMKs~oL$C;g)ZvSv:@m-%5%gD0mdxrRb3B;`@xQQYG,' );
define( 'SECURE_AUTH_SALT', 'S*1W=VF=EB39C{nLN=YBg]TIf2@WDg%,x)p~s(b5[aVa%<$[-t jG1*_<jyUg~_y' );
define( 'LOGGED_IN_SALT',   ' .?|QW`Kk^etv] cvabV^CsXzp&4Gr}n[&5dfGt8F28-W&g&`?SaelKMT_,=2SX-' );
define( 'NONCE_SALT',       'a(hmo]{L7Xuv[`mSA=(&,b~7T>V=?J>=>@_$Z`LTi^T,I~;8;]/gv>,*IInR[k|w' );

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
