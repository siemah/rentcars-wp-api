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
define('DB_NAME', 'cars');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'P3.+ 9c?Sl>:+g{LwNsYo4G3;f:EpyHEPtcw!R-AMNW)}b+`q<)ODL#1l(,s#;WJ');
define('SECURE_AUTH_KEY',  'Dkbj-vj kdK^`L8NcTaWx=#J^Z(PL&$?~N,;VZq=#HS*{8Z2yUBt~%LHiaWSP=a~');
define('LOGGED_IN_KEY',    'i?NhV1887*U%o8+sPG[jr?gpF+.xO&_1usX5P5]+U-wZrrbOtIdH%3Gl0`mA[Of#');
define('NONCE_KEY',        'a?g)c:,A(H-ON;<GH^Fum-*/>G]$41t#SXfA|WKwkXwf}n>XVmyjwgW_zd],|W| ');
define('AUTH_SALT',        'h<D|<hi}K4G(@`E<0sN)=iRr^JH}g_Gibss4s,pQ{<I5gi/?#uIS1AmdLPNlP?H]');
define('SECURE_AUTH_SALT', ':!Xso)1;B(3(#7BbSj>V-tG[[YI/7dovQ?LA6tJ)8>>/DHWfjED3,% I,HC&_Dt(');
define('LOGGED_IN_SALT',   'HGlMyGntXyQlWw,pVGt%X^X!(G]e{gI[-TY1)=Fy3LF3hE`oz3W>D>DLhM[;DMaR');
define('NONCE_SALT',       '#<wnW`.qITVu/}wms2~W|e@C5)fF!.F5s~ ym+[ 2Q2r@wTBN1=J<,4A+2]#ntvM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
