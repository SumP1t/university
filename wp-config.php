<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'first_wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EXy>+8)yB^y)>5=ZqpxJMv4c2BN,}ClYxV,94Kj4Z_ztf:S]=j1`]le@#`:Z$9?V' );
define( 'SECURE_AUTH_KEY',  'vk|h6RpSpK*C,cZ4z-D[Vy]pZ/uQ)+OuvTzDbk_Q332)U2fK5?pC In54r-CQS{,' );
define( 'LOGGED_IN_KEY',    'n.GMTm:+Qj86]06$0,YR8S]+97Y:Hp[5nL+70}iodi,G0[(h^ms3g,%c=7F>ZdC0' );
define( 'NONCE_KEY',        ']:zIRUxbiY*[>PV;G~Tgw~H9J5`<UNewYW GRMV_Gvu3vvc=ng~t[dLK<_bTK5if' );
define( 'AUTH_SALT',        'i}Cymlvpv0OhVX4~Lv?_8){g=kdJpX>{wvE*d>-M>n;@syc%!3S[<^^t`^,NiAxP' );
define( 'SECURE_AUTH_SALT', ',kewNi[cja[,UA|>z1Ae~x9kBM|7i6rpq^ DEt91fS3Le*6+]^Cn*J+!sYr]gK3w' );
define( 'LOGGED_IN_SALT',   'X7MkVh>=d^V>r)_gq[;[+*Vv`oJL)?2AM;(CAyE.@)m >wRDIEUT,!XIk+ecg$=G' );
define( 'NONCE_SALT',       't5`,;F!fWwyn?8_?aB/O<:-uM6xdP~=bW%PfO?17|PEgD~R8^.Hw7A5@5I!,hEN)' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
