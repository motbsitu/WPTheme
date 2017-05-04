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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpstart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '8~%-Ntj` PRIU)4tB/-n0Z:dkJGlyOjjVm#GM$;u<8-V{ir2z>A,;Q20)-XD8(Jf');
 define('SECURE_AUTH_KEY',  '@wTX&CWs.~#.LY)klQIh!@2t/:^#+qZ;k]sj$>E-AJ|6+s]/!Xc.&.cX.fh{;{Ot');
 define('LOGGED_IN_KEY',    'fc?)v[O=@$dr`&)Dx*]/F,g[kOwxF|U+hLde2/XuVP85Q7!99/+r/3n/W~&ke&/=');
 define('NONCE_KEY',        'ZAStAp{pn1CVCW)x;Nu2T#R)+LwDqDqijoW+xwF7{UAL=fT;lk.KB;vsBHu~NRW:');
 define('AUTH_SALT',        'ekW{pn?.Z$:w/fY2FCb)4-A[|au^7TA+~Tk--z1iHyjQd!z#e5b1@VnzBZ+J4yuR');
 define('SECURE_AUTH_SALT', 'PyZ@0&lov{3}01O$M7lAcx`eQ;d?i=&+Asy_Pe9z@xLivz5OS[>qIpyt.5_tYk+A');
 define('LOGGED_IN_SALT',   'qfduCK&P]?g1}#(Ob]T}t5&d>i$94Bm[2OzE<mO[(#^7>iwM+@&s)T6TXYO@(+4<');
 define('NONCE_SALT',       'jl|6ke?%C69KzsFS=)|C.x^/r;5G~T![_|(iR&-B=jXBtSxWK@SV8_p;>^z|^50@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sfewt5';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
