<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rutgers250');

/** MySQL database username */
define('DB_USER', 'rutgers250');

/** MySQL database password */
define('DB_PASSWORD', 'rutgers250');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Py@6#R>3| PW38]#)+Q`pv#Rk{]EXglBR]OHXm}0O:D[7mY7~-cc#beH%k6G9-jR');
define('SECURE_AUTH_KEY',  '(qW`vE(h->UajG}0?v+lnMF,ZS#ejB9,p+vPHhajv^^FVm+-7+^{gzU2+b@@5&e3');
define('LOGGED_IN_KEY',    'h5?y$&d@aDEsWwN)<=@n]~,Vs?/-_cyHnyUhHSgx`6,T2|XY+Hdw/v4|~-eJZZR8');
define('NONCE_KEY',        'mtR~t-Qn(5#)cgI7<Ri_kMURUJ,+G_]/h<h;NS}(&W>A[]uuN|aD-U.I+/Jx?{$V');
define('AUTH_SALT',        '|a-M{y#SY#<M|/Ho_yoRN|Z`HDM_*9~#A4Bcp=xJ*iv!,U%X|Eq/,Jj-#(Nb>|NJ');
define('SECURE_AUTH_SALT', 't0YZIp| Uap.hccGs8GuelcfJXYNXxSkyT:iwv?NXfI*luf#ZrpIMsT]|x65h^+W');
define('LOGGED_IN_SALT',   'dTh1&*LIE[`FJx43Q|}i:m]J{&l@!%?Rb^3&lf~K?j`aG^T,vD]M|~0h^Pxq4y!2');
define('NONCE_SALT',       '?{DLp6PIPE_Ud-|7;9vMdp+m`N-*`w7WUQBV`Yyl8fe,X*6n2ku[~H2dKJUHa1d0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

