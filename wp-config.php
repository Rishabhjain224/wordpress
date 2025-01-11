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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '}qW~0S8(SO$s./2o.q{#Gx!bA=?e9e{)*Z]l7qM`Cs!(ZF7G%6hGeZLhO[`rbEBH' );
define( 'SECURE_AUTH_KEY',  'cxlc@]md90_LiQct?7OS&ov+W~dN}=!#^MlH)~4{4xV6.{!V`@}.A^Wn6>rIZ<W}' );
define( 'LOGGED_IN_KEY',    'oZm.9m47fzM!mTjhfr_,2[NZWe~^sCostlvz*4.;Ub5.51(`cSaA20CPB5)~DvK)' );
define( 'NONCE_KEY',        '` y$n=+M#x|9OH]UW)NSqGk?-v74h]mI,SX=,`9`z@Rys_vO3<:WcVuTwnaaOE9;' );
define( 'AUTH_SALT',        '9djn;!xzv_Gen.:C2QO*[/A0O%6~^Xawls:w9p#T2kjH:z%ywz%QX6td ernYf,O' );
define( 'SECURE_AUTH_SALT', 'K,.q`49zI7q&7k7O* )+uOwX#-h}2#RR{5O*2Hm[+DJg4U8P0,9HEh:H]prDUKyk' );
define( 'LOGGED_IN_SALT',   'UrPa3m}|13!d|9X;9su-auXqHYko-n~kGym/[rY^a,`_NYxY$HXR+Ox8M~C;]~LP' );
define( 'NONCE_SALT',       '-+ufpF~K6WSKZkp+slgbsy]cDG:}8CdJoPjGpHbO6}q} VcmP =+MxZKRHv`-UIJ' );

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



define( 'SURECART_ENCRYPTION_KEY', 'oZm.9m47fzM!mTjhfr_,2[NZWe~^sCostlvz*4.;Ub5.51(`cSaA20CPB5)~DvK)' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
