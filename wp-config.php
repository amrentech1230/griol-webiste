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
define( 'DB_NAME', 'griol' );

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
define( 'AUTH_KEY',         '=moN?1?.gfG`(/y!e{Lqs;u^N/M-zc.I_L^RtQE7{#_V^Z:#JGq4`wJTgp=/wnX_' );
define( 'SECURE_AUTH_KEY',  'aDQ&*l0W387aCs.1f@F[)YKqe#Y0~[%7+wKirA}oY8-P0uBk@|a05-CD=k21Ic%e' );
define( 'LOGGED_IN_KEY',    'F[*Lnu#X_%VkG#),Uq5>3IYFyyG?+`Daq^&19k9NxYR4*`Y6 TXvqx~vCf])((Z>' );
define( 'NONCE_KEY',        '=!LPL;9s>GF#?dl#]Od99r8nmHMp#)Hc|SOm1N!=EfOZ3l*t4yv>jO40GP+L^pBa' );
define( 'AUTH_SALT',        'Ry?^x[M (i**#{ebeiz;OZK(N++fuMrnI{cl v)<cYV(aW:}3P[M#DAsSzTL0OyQ' );
define( 'SECURE_AUTH_SALT', '}p._Q(]@OzsDv=-e9Ge]Bx^hcFa/#[X#i!xq>Sn_G[5)?Zfn%_h&L_J_IOZ[M,Pt' );
define( 'LOGGED_IN_SALT',   'V6|co9N$y/{X[M$RX DZRkTWJq*OvHQy.t`|!%`|96m1ZQaMT1$glrF*LWozfht(' );
define( 'NONCE_SALT',       'p!eztPG(-e+6H?GF@m!%;s5Yp7qjc>%@W<H13;?jVQJ1}&GIh),Hb~YG:y_{}Gw!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
