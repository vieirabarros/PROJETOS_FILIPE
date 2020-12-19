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
define( 'DB_NAME', 'wordpress_tabernaculo_slz' );

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
define( 'AUTH_KEY',         '>^_A(Ydh(Wm4e?<}hTs3SrId|,X/0CDfy<gB-+QJS-?n}*sHjc[~c5/om$%0^Xrz' );
define( 'SECURE_AUTH_KEY',  '<xt9g)NUCD3N 98]kzSsSi]r$(j@#=en3dm9v;J4BqL5=?s2te+.f?QY@|54CCVY' );
define( 'LOGGED_IN_KEY',    'buyjj4&*z6qshiLLtG/{vLdGPXz}[$(gfYUXYM,9pB4CyKLLE1d&;vWx9t)MdP6`' );
define( 'NONCE_KEY',        '2na!#[:_@(_VHsdh}]pckB_(1$6lv4wn8U/jFxQ[B:7df6g& miJS]2|u9+D68[(' );
define( 'AUTH_SALT',        '=&.Q_o%%fTLh{f8c=8X84htBj`z$>F57VgnUH`z1c${SzB_YXZSWq9VHGW=^aF=,' );
define( 'SECURE_AUTH_SALT', ']:2bgdt1)c9gaZ9eVXZayBE8h<(k0l)sQ`cm4z0Y[R4>OC)!CJ7$+UwnSC,>>T+J' );
define( 'LOGGED_IN_SALT',   ' ESfb2ziwv]0sqQuAceN6Wky*Q+95c}<X;m>=8)Mw~}PV_a%-d1~nC.yFn1q j~A' );
define( 'NONCE_SALT',       'tZ71r;u,)=N.i)JGW_eKXd]ay(+&w!UiE[b!O_Hbv2Z&pKL$Gf,$+)L2!4k3pP$Q' );

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
