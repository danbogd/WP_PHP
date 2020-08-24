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
define( 'DB_NAME', 'cj51503_2' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|I0m&{@B3gZ_vYqB]UBqz{i<TV1EtSp5|><V4/q6/SkCF?*@u3#5mA?StJ,&Bwny' );
define( 'SECURE_AUTH_KEY',  'V<D!q @]jdZ6>eN2Lgr;<h)>LytgpQPRVc0H02Ho_[jv8MJn&n6#~Q^}leUW|#4x' );
define( 'LOGGED_IN_KEY',    '.G*IAMiltJ>XxZNoMs)-~Wd^OwJweJ`1xitbBZzqS{^z,,4r/R~AJZl+tWKU)(u(' );
define( 'NONCE_KEY',        '.Wx([f_4i,Ms/3I-%HWyuCja` (M!.eQ7?iXnFZ TXHW>Jxzu(Kn:tc=,.M>]MUt' );
define( 'AUTH_SALT',        '{0h.6%mMQ}1eW<>Div <^Yn]sOTFx=E(U>dR0hmA)^[Q$>=pk>[<#%_Zq_!w<{RG' );
define( 'SECURE_AUTH_SALT', 'Q:=sCk~<:JibW.8DV3&MPF+f;:K6XG.`B?l@gp>O+3g]&:uc_7rBev[_LEZ9o(td' );
define( 'LOGGED_IN_SALT',   'dc; 0@`0s~:%ECJtB$NtG4tTMuMn}ecLS[ l^<9`&4?r]>U1`U2G7oiEIw8Ew+;_' );
define( 'NONCE_SALT',       'bR*7&@{nAqb!2y,X<m,}|% @t[<M?@7#L~!=~ju2wYDOa-Y|cyO>-%Y?E7|02yym' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
