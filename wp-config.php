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
define('DB_NAME', 'alkagar_wp_mrowiecorg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dtrLOIom');

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
define('AUTH_KEY',         'eh?8R/joE}-I0~Sph^MjZ{whGO+-dQDXmT4jhjkaNy9FLL*L1o^d%07MVvvm~Mrr');
define('SECURE_AUTH_KEY',  '_l)S`la 9]z_E]y*EJrC1sJLF4/bBj96-MC2P@uzV$%]EHOeCak8N34>_}8(f@,}');
define('LOGGED_IN_KEY',    'FV>d[6?5Ds,mqm8z7{`@O6(]FY|N:=HX5KNok5cBHxh*|-nD=c;Agz|j;)|GR_@O');
define('NONCE_KEY',        'ORV9VjLtIpQ}2>wE36m91a%D`B-LfFIoe7}haP$$,~q, 0~H[,9YB$SXjS)9#B:O');
define('AUTH_SALT',        'v*j~Aysiv3Q5eOv.OGp+Lf(uWUBxz$:*]y[cMjY-Didt{(CgSV1m?-%+7+d1dsY&');
define('SECURE_AUTH_SALT', '<(ffI:pT7jkjtb})NI]T=O$bv{|S^lZ]~Ud(q*!K|6;8D9zqjAT^x)vjz0zN9^<|');
define('LOGGED_IN_SALT',   'irv5L04WXhu)W-{g5g>Bqi+<FdjR;vlt-D-JHT7^Sv{bP|Xw^A{m+qTu^($bJ|#F');
define('NONCE_SALT',       '!)^C)BA&|Ut^o^I(XVXk4[Y;+28zJ0hgy6:W9KO7H8Kuqikd=TP):Zk5)78#Rxxi');

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
