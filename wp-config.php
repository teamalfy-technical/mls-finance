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
define( 'DB_NAME', 'msl_database' );

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
define( 'AUTH_KEY',         'M1/X98AP9Xi>Q6_t,Ns@h9tiF^^{AkRGb~wwp*lgdYge7BfqQ`#2i#E{TF$#0pn0' );
define( 'SECURE_AUTH_KEY',  'z/p| oiP0(fVIyBfDN#^{C&dgj$|dz[CUZYN8OC=xjC/mM?4EJ38nUMzm)Pv:Peu' );
define( 'LOGGED_IN_KEY',    '=!pZ$dC_M7O@^R,vFQPtF0Py>9/!(upTgF&*_,>=-Y*vKF(V%aFAQ~OoLZnr5Vsj' );
define( 'NONCE_KEY',        'C/HL$]GhrUR/QHS6}gES;sL=Nhv$^01):vs`2vqXTXRQyP=|9cvtP2+)nLBWJtt5' );
define( 'AUTH_SALT',        'HoX 7Q~r^hESdB7CH:??l:|4H$cl*2M&k:Oq0dbMa@|^XH`O8:AH*,+.uA9ul*v7' );
define( 'SECURE_AUTH_SALT', '33 D.G|R8L%0](JYb8u]O8h}M #,ZhBIOrA(..b2HHb=U7~+Uw`:?|hc|$SA)>px' );
define( 'LOGGED_IN_SALT',   '>0[_>#n?Q>tlyTWz?R^y/.6N_Umi~/1@/7qU#9kqWF.w7 0?od=NBJCC=gulPsd_' );
define( 'NONCE_SALT',       ';QI SFIu/dgQIr`QSV<1w5=&nZfX<cwtThqa)G=PBQnvPWK$0JweztZeFWfr.dst' );

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
