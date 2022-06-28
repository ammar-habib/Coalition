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
define( 'DB_NAME', 'coalition' );

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
define( 'AUTH_KEY',         'Jop*TVfY|(px#J1{RY7Pdo,2NfO3+u!#F=,|W,BfUcFrg;2ogJG!r,q tWMRBbNO' );
define( 'SECURE_AUTH_KEY',  '8J<w|H8ew=(b@NL&.>;=aSCl&%I8AdZ#Y~p,yO6gCVrvCAwHg|(i=-goc.]~e!/i' );
define( 'LOGGED_IN_KEY',    'Hj-c(+}AfYy9K*)f_AZ,%t8}Z ?4@YlRwB!|jhL.hRoD^}9NS9^D|1%/S8oC;$dp' );
define( 'NONCE_KEY',        ':RPv9/kVKCMkTE6#(aJ8a=QQ1{jvy@IibH@BF$=y&>:]Az5nbQEbMV$lM+dWIawV' );
define( 'AUTH_SALT',        'a,ZPj/vbvu#%DYfC9!6l^&cU3A5`x/~E_pFOVwD4O^#N)).~6Wp,3s({0hv?HHk&' );
define( 'SECURE_AUTH_SALT', ']I9GP8dec&V@TZ (d|**k_0,dd::U;*+3A4p:r(9Z<YIMjXZD>3<-3QiOID#EM1|' );
define( 'LOGGED_IN_SALT',   '<1U6US=hf>eM.fgW)`N=i__Dkb]._rS=),=kNZ2E6e+T=6*M-+Z3tW0Wj)Whu&#I' );
define( 'NONCE_SALT',       'n]q~0XcN+($2&I9kY1_D><{0r;TR$$~Nm)piA?p5=UqqtI9k0=*XJ^_G~^,ZuHfw' );

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
