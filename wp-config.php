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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpdb');

/** MySQL database password */
define('DB_PASSWORD', '89718971');

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
define('AUTH_KEY',         'U!$,5z+mst:fMx.(1!aIP{KDv%@x>!/@OBRR.>.1sU+ts!+0;H2zSK o8_&L1;nO');
define('SECURE_AUTH_KEY',  'w10849Tmdmv#&2~#=iXzj2D;Nx<HU]]p5N<K6P_.>+R+e+5QsEuz(CK% A%0xhZX');
define('LOGGED_IN_KEY',    'L{YA:Z#.>NdzBq/gaJQTrBM9EIzAxFxnMws#~-Q OItcjL^u^1yZ-$>f1[p-z`Jt');
define('NONCE_KEY',        'IkDT@l*%2{61<+AuPJ^}q9;c{W_%4}Z&$e&3hu aqRd+{REeqS!1bz.RaC`l+y2Q');
define('AUTH_SALT',        'TOKsflB&4k>sn>QMZm[zy){%-Q/B~B-0Hdu|Hh1:TKGy4WdBO9S8|O 0VE=)dNUC');
define('SECURE_AUTH_SALT', 'rYagYHMSJ),xab4*k;g~YCy%M]+h?G^W*_Pc!Rd!8*7B4}&^9BiOrMdmSO-z:6Nb');
define('LOGGED_IN_SALT',   'qWv?x0%Kz=.:+.?<FI;uavqIziG:$F1`h%e3X!qSHH}2Ct0S-:I6yq<OCZfdUe>(');
define('NONCE_SALT',       ' 9DTsa;Z^]Kj/Aiet~zv$K5~88^Pf;KQ$H5OJDrhRYGBx+vhg3I)7vx]4,]k+zuA');

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
