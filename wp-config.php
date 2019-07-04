<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/cveraby/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'cveraby_dbvera');

/** Имя пользователя MySQL */
define('DB_USER', 'cveraby_dbuser');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'uc)v=QYn]ohO');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W%r=If4rmn[>;.yMz6{%mNACHcW {9qf&NJ]MLFY?yn0AC:M,fL-<Xa|a-5Eo[2)');
define('SECURE_AUTH_KEY',  'n!C2T6nN}C=dh4S56l5BWTq(Nu]0Yqslnj.;=wnW %3#X};lk9[p|et6CpkQo*bb');
define('LOGGED_IN_KEY',    'FpD}u9]{eGjBP1nN2JT3ata{[mv!$nelL>:Ig]9>fbu%;T%:<S2@23OWFq`EQHyg');
define('NONCE_KEY',        'Ux`= *!*b#9TMZ:)%,niwuSCey{Hek7CVtbD,6Ll]i|5nakO}[J27tbO@/hdb#.T');
define('AUTH_SALT',        ',W^~HM!>`n&P~Z7j<oH1K7KYZ?O|+T3BnWF/FL:J_M&VZc7EUQO9GfJyguT)7i_b');
define('SECURE_AUTH_SALT', 'lz|D%[,m~Q|{!7,}N@aBu(LzW]9C}+K<P{v`80M2:MBW 7(|Jp>R=ye/6appyEpg');
define('LOGGED_IN_SALT',   '&iY[n@&D]`Z[m:/wp.&*Z=|zAAW~AH#.ufyT$c;X>o3~}svLCrfrTcHww)EpCBnB');
define('NONCE_SALT',       'qU|OTC{f,LtA:)N^OW|dR1GWm$VM<Bo]xitYi*&bmrd/Wp&wXJlk;}.dF0!?mg>M');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
