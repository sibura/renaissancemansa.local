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
define('DB_NAME', 'renaissancemen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '>KJ!Z!As>zv&8k5Jht&G,/F;H=qj#5;8LjvamlAx(u^MSbQKL3>8oqG(!6(@$auv');
define('SECURE_AUTH_KEY',  ';dKmkKR&wQNdsCDFORAT[C?&lzO1`15B0i5e1{dw]m}K1|<NO+ElWS6ZjPH{j)(`');
define('LOGGED_IN_KEY',    'Hh#WT!:j#{mPA(=W5uf:W+)+z^-QxUlsJNPX>kVpH6?stY0.`X+rmV  e@&K=Y e');
define('NONCE_KEY',        'AU%qyHfW0bQj.(&E?J[91JvN#78L}QsYXtOEh.1lTCHa+OU!{5ejJAvT7K$VI.4/');
define('AUTH_SALT',        ')k.5Wxy~-[rV%wbVvt=9+,P+@Sv7in@^UlYyk:.z;waK-2hg<ah7|?yICGd%}MVr');
define('SECURE_AUTH_SALT', ';5d q*C*Wy${DiE1p]Z;]yp?+@8c[06Uw3|UxV-|IWBz};Y>xA7O>UbqDAEpKEhk');
define('LOGGED_IN_SALT',   'guZ{ToBgrmeK1D@}o/Ks8w2aZHh=?djK *%2x{~iTs?inz3d}tfYO*1?n%e@u40g');
define('NONCE_SALT',       'P%Ws?~@*b[H2^L)/!Y?(NPsZgzKfm_`~$o>F11jq`0*L`}f,qTtLL@/ze]zVmY l');

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
