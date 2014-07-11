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
define('DB_NAME', 'conski_wp');

/** MySQL database username */
define('DB_USER', 'conski_wp');

/** MySQL database password */
define('DB_PASSWORD', 'conski_wp');

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
define('AUTH_KEY',         'IcXgd`Ce-6A3S;-EAxpM:(*(|$#ZR.ct 67gX7NB|@ryJwW~]2AW6R&> S9^9C^4');
define('SECURE_AUTH_KEY',  'w[U^r4Co&r|gL86/nn{4- MB)+lj!h^[j|*n-nMyI$it*uRvet%a9A}DOqecR |h');
define('LOGGED_IN_KEY',    '*hYo^fv5L#S=&gAgnlvug5bR)dyS7t3V7.bmF8ZI-?7a_^:6Q4w&[|FM0JUY+.?N');
define('NONCE_KEY',        'to,_RC~|D&jw]taTaZ6`t6.@4^CG0k,r$|[gagtQt~CT0yvSap$ET92Lm^4?t%.<');
define('AUTH_SALT',        'xO73(gUL+o+-Cx Ry^L|zKVu} y)}jNN9@+{z$1?RSZJx~e!d`Lh$NS)96a]TQMh');
define('SECURE_AUTH_SALT', 'TUft)y6uh|o,eYjW`<@4+e#k7Zh1Xm$):p_VqAu{b&.S{8a9iLjWrh1yHu:)k*$[');
define('LOGGED_IN_SALT',   'Up;s.s=MyI{5JJ_-P(Ivo$>.?=E3]~L~q*Az-_j.&Cj!DPFF-LqTU^+bFG59Pa?!');
define('NONCE_SALT',       'ZMJFh,|l8#Ex4+B<|/0lr1l|coDr?flg!n4QtLK7}cF|hfye6)+DmvDkHapmYeM_');

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

