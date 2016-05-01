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
define('DB_NAME', 'fringe_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qT8F7ze+U@/KD~Cbn!LF|cJZZ~b4WY|j52z+n PHZX8_!VSMI].--v^h%(|&Ja6|');
define('SECURE_AUTH_KEY',  'rCBAYHBf*.A@[D7L9|]>5V73+ZVh_xZ]t<LWjh)<PfZTJqKNOq <S|1MsJdBGmVo');
define('LOGGED_IN_KEY',    '5#.<)I)b6#N:F&Q^:I-`GOq:4XRS(m-~&-6yT0|b&#].U0Tm#6}+tGQO*Q/~:,2M');
define('NONCE_KEY',        ')&}i7L]l12_YN$,Oue6:|I,p6:M@0e7-CFM0z19Sr2|^?5O+mo|[=W52~]Qu!m5+');
define('AUTH_SALT',        ':UN)M`Dd$=:=e@gi 9k=2j`TV}%1{n`GU#| }P7<(]gT?+-qD+xSQ.JsNTOQ6@oT');
define('SECURE_AUTH_SALT', 'S`tsPjgmwb{m&q4,do[6 x8eN{3y8OOve.i+`#v sdTQp4[^,}u-,yD?@`N;vgcu');
define('LOGGED_IN_SALT',   'vV|BP:BP|Lx|^K9hEWhl$KCqo^%|J$lp*UBAc2{1M`}_N0u-,`*S(:RmqdR/w:e?');
define('NONCE_SALT',       '>U$x0Z?k+u=r/tECHC.8ip]-#lZS:+P;o)_j;gNeB>2rdY PW`MoKkxI$QEb~g9T');

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
