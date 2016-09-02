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
define('DB_NAME', 'wp_pg');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'fpEpMQt6ufnF3csf');

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
define('AUTH_KEY',         '4A=CG-<}mMehT/#] BkxYCk#?.}ak(7!l xx?ZJ{@ujbsk0:`~F9@D1@3Nze*u0R');
define('SECURE_AUTH_KEY',  '22{Y0ubKuD*%Rsv9>V]V![.W@g@3eIippZCZ3Yx5FdC7;3^ EY.ClgQ[!49p&3<U');
define('LOGGED_IN_KEY',    '=dF^p/{kNAXWBN/MN-oLf(-+VDI]]:GHs.W`Xdn0E2SVMi?-9b)U?~T0N^Nu|~e3');
define('NONCE_KEY',        '_N6*/(>lWkR>8wkrH+/~_I;r0A5wt2_Wa5}C|vO:T`08|1DTX4!$9*NO?raTVVk~');
define('AUTH_SALT',        'TtQOeCPB05i+uiv.$Nj=T1*xt:-8_PN?TvoIM,C5dA_(nPQba#<Ktg3vLLAmzl@P');
define('SECURE_AUTH_SALT', 'o9Js>*?CBTP|3d{d6sa*C6@/7JA.2pe/6hKTT!#BjKWAsdk/C_Qv04CYdZeg~T7J');
define('LOGGED_IN_SALT',   'Eqvl<HizoEKg9Q#!$zl5f|-O0c*A^`zxni,?a.{|#o|TBK~2lUhS%AjqooV5EM|b');
define('NONCE_SALT',       '14^y3H*z2PT%:Vw[o3V=gB(SVccvb*IH7wH:>cV8q!v[}y9metVb#/a.^xgziw*3');

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
