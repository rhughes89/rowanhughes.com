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
define('DB_NAME', 'rhughes_rowanhughes-dot-com');

/** MySQL database username */
define('DB_USER', 'rhughes');

/** MySQL database password */
define('DB_PASSWORD', 'gemini11');

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
define('AUTH_KEY',         'UG{>D5RWD*Jr$IZkO+Ab.Ts42U|o0rvPzyK;X6wbG<#m-Vy_g*m_=i01Z!|lB@>S');
define('SECURE_AUTH_KEY',  '[Gq=.h_)2I)uldNbopQW&<3&!jQ?3wu~k-u;5fdArQ|oQB>$+~(U{xpd=RsJ2naf');
define('LOGGED_IN_KEY',    '*CTU:s=liz~uu+k>d>37$=88%[Ok5BaZh*=EFjuX4^AQm@TGzT}i_Bc[}aaa?2RP');
define('NONCE_KEY',        'oA?(hoLL}}rDc2ki/5! 3qA*;=3v/%s`xwrf(b[LHT}I2JBa9!:kO#xkf.m:/7&|');
define('AUTH_SALT',        'ZfX[Va&?xyL!by&oh);e{LSXa9iUDcPswtM/iIO9kKIi^WKvu3/f<g>.S%ZfcQ$.');
define('SECURE_AUTH_SALT', 'C&~UrTfIa2CME;Lzj3|a+T]jI&Q-K`3$^h@&Bru|thHn:qEe!%_-#=h8e: :@ <,');
define('LOGGED_IN_SALT',   '90GFiS9Gy|lxzyO+gD_/pGW^G]_Jv3 RlReu2CCX$:Zb<tA8IgUE+9C#OnHj5)eR');
define('NONCE_SALT',       's9~N_uH?cP/^lbW6MD|6Z?KK1UVrp|D`-z.`0{VG;Pi|Aw+7;sCn!-mKAP=5,M6d');

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
