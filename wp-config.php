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

define('CONCATENATE_SCRIPTS', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GWbAYaCkuI&L=Og.~trctvZfx67P:/zYb.)F%UAN;Xup{*J?N@~?SUE1*$c3vWK-');
define('SECURE_AUTH_KEY',  '_(.ZsZ!-T50)GNV7#k/dEKNwX0Nr2E]9[K+BE;IMp?BYHl(9^_XgaPcnv-J]v!P~');
define('LOGGED_IN_KEY',    'i&v$RvdI T&J=^BY)Kr+6ws>n<pCE2v6gkwk8im);Br@+fIE$6LV4:+P28HYfFX;');
define('NONCE_KEY',        'Z7:K4R:ncH#`IQ6uu]G*f=H=K6RPLqxMVJ7;&nXq_l&_r{QS2Z>?kjh1`,]AxHqy');
define('AUTH_SALT',        'jc*Xbl!+trw+}yB!zqzUpHa=$^@4/]<LJJ]EHR_e+Z6;v*cX[=Bq4u}m>#|F@&fn');
define('SECURE_AUTH_SALT', 'E0Rt1;2il/OR,Zl>gC~;J542<j:p%)th5LtFEeh`Szgz|C>.Rlv]z&k-m%,GQ<{q');
define('LOGGED_IN_SALT',   '{f#?_{4rK$ysUO+3TvLi}6vqGcUi2B`JWVDeyIu4X|!`.7Z9sAz*e_;6:A@bd4g ');
define('NONCE_SALT',       '{@ao5|wX~X=fkGN3U:RhteHOpFj_9V]H7pBb]8U:F8aY+sD3FT7{pMSE|`,3Gk`d');


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
