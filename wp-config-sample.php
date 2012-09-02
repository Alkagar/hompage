<?php
/** Nazwa bazy danych Twojego WordPressa */
define('DB_NAME', 'wpisz_tu_nazwe');

/** Nazwa uzytkownika bazy danych MySQL */
define('DB_USER', 'nazwa_uzytkownika');

/** Haslo do bazy MySQL */
define('DB_PASSWORD', 'twoje_haslo');

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
define('AUTH_KEY', 'wstaw tu twoj klucz');
define('SECURE_AUTH_KEY', 'wstaw tu twoj klucz');
define('LOGGED_IN_KEY', 'wstaw tu twoj klucz');
define('NONCE_KEY', 'wstaw tu twoj klucz');
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