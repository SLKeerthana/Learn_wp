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
define('DB_NAME', 'wordpress461');

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
define('AUTH_KEY',         'BFz5rS}U<+KA1fLx,7Y`F0IN&,^dh{w*ZQv-DNgB=%![ZHOFMGL>-e+MZnZrXefm');
define('SECURE_AUTH_KEY',  'y)OT7T=7`RSxyR)j*/GV.3j`TTf-`X>dP9zhYx?2V$*)x!]Vw`q{.PSAHM5MJ6nL');
define('LOGGED_IN_KEY',    'xd81iEg-JsopT4.e[Z6X.Zf7+ymgAlvzu,C`E-:9AJ>ZQG}89jA_.a6$9_]f8Vz2');
define('NONCE_KEY',        '=&VR$RFcxy|y@Q-(Z]^L.(|cL^37]t5ETN)*6G40^M@pK?7ar^0vE%DzT&iha`RR');
define('AUTH_SALT',        '+Qs$$34sz$Qx%iR4wv/K$(C<@[LI8W +rx4bj;L TvItxJlgE:11:W|v?`hfex1r');
define('SECURE_AUTH_SALT', 'Lgy#X~]O9Ka~@ozW@oN_H@e?6EDF&vPWb4g4#o)tWKzXF)mwRH^;,:kvB5e)j@t^');
define('LOGGED_IN_SALT',   'zIC|/7<AhPyxFdtqd)%ZhJB]q7?vl1BqoBhuI>K1rpn=XQ@`N|oNZH]QY9lNN5-A');
define('NONCE_SALT',       'Nt.MCd}g@eH{DOVn)7$F(c4Il@N,~9JrIH$]ci*v )!t dSX`$x0tlNi3iJup!Xh');

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
