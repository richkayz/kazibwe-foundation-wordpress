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
define( 'DB_NAME', 'kazibwe' );

/** Database username */
define( 'DB_USER', 'kazibwe' );

/** Database password */
define( 'DB_PASSWORD', '1HCK!-EN]GR9sV.m' );

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
define( 'AUTH_KEY',         '!Q^q.)V)q./#nk+%^TZiF7uV,=).=J `6;e[?05[{hk`8uuKuMV@MaSOE^[7>zO}' );
define( 'SECURE_AUTH_KEY',  'DU?n(kRa5ATHn{cn?7izORHf=)4;{8$-<*;3E>xPB8v;2m|J>S,-tN~vK4N1UMYR' );
define( 'LOGGED_IN_KEY',    'hz@|Ax<DFKs.2WvKL(V23sM?dmSWkPuXw/l?9A<Z`d0-7st]bh UG{7oHOWU==3{' );
define( 'NONCE_KEY',        '{qQANxE5sfP:JtBy(Erw^[.aL;j([RZg%/musBtgEEe>f[.UZ`RxsgE^dJIpnLjh' );
define( 'AUTH_SALT',        ',a/U<X!kw0Pe[ajdO<Q_SK<?mU Aj;,#57JBD%fs?x_][t/$`BD(^G*J2s3kei#l' );
define( 'SECURE_AUTH_SALT', 'd`4d(0an&SJcPtL;s_.FWJ7o0S+);V DTI7uRwM{7mz81lS@7R)F_OnVry}%)mAd' );
define( 'LOGGED_IN_SALT',   'WJu.NbwCX4y]YQ[(kqbX4+VX:Z!w2Cr96qYx~/n?~b$=~MqU:XAQ&;5&!IbIsgwb' );
define( 'NONCE_SALT',       'b%bLPZQ:xWeF}3e*z+ioku8LA/PH KB|d}hAHyZ6#w+f0R%*=d+(xfYX`$3,]/nO' );

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
$table_prefix = 'webAuth_';

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
