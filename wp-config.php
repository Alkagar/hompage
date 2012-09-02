<?php
/** Nazwa bazy danych Twojego WordPressa */
define('DB_NAME', 'home');

/** Nazwa uzytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Haslo do bazy MySQL */
define('DB_PASSWORD', 'dtrLOIom');

/** nazwa hostu MySQL */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Klucze identyfikacji.
 *
 * ZmieĹ„ je na inne, niepowtarzalne!
 * Mozesz je wygenerowac uzywajac uslugi {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org}
 *
 * @since 2.6.0
 */
 define('AUTH_KEY', 'hluiyblugkkgkjhgkjhglfj,g');
 define('SECURE_AUTH_KEY', 'iugkuyfjhmnfhgtdlyudx<F5><F7><F6><F8>567');
 define('LOGGED_IN_KEY', 'jhdjykukhkjfdserdtfyy;oiuhjhg');
 define('NONCE_KEY', 'iukyfujtydrhsterdf;i.hjvcfdrjrky');
/**#@-*/

/**
 * Prefiks bazy danych WordPress.
 */
$table_prefix  = 'wp_';

/**
 * Wersja jezykowa WordPress (pl_PL dla polskiego)
 */
define ('WPLANG', 'pl_PL');

/* To wszystko, mozesz skonczyc edytowac. Polska Dystrybucja WordPress zyczy Ci milego blogowania! */

/** Absolutna sciezka dostepu do katalogu WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Do ustawien WordPress. */
require_once(ABSPATH . 'wp-settings.php');
