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
define( 'DB_NAME', 'mggpkby' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-bPgswoL(!0(U6CZ#Q`gfN!wPAl(52~:[_ia.qrTb=:DZ~[`$[5MV;V3dsq|b<U$' );
define( 'SECURE_AUTH_KEY',  '5;?O$5>WGm#[YJOvx|sfH5v.9k#0O9v8:O#gC)MD?,aB)s~*HIkP8q(fCe1&W,wf' );
define( 'LOGGED_IN_KEY',    'bELf~qWLD3vVtI{.|+nQy#6U6fbEv836#lD9]E=OEn98^4BL&G!wd6kHI8)Mg2N/' );
define( 'NONCE_KEY',        '_2N!kgv8K!WzQg>J8)kDZ[N_>I,M@4[na/|0#5?sg@A!.vgc20:?-gpX0.ES$KVW' );
define( 'AUTH_SALT',        'm7%Wpe{d]9u>n**3pvQ>4T^s:hr*5<R#`v`$GC&a1$`UW9g=@B3Di4ZR+L8@OxD1' );
define( 'SECURE_AUTH_SALT', '4o$ukEOPq.#;M-9$Wm`.MO,Y-RQD`8>;[.V8ZMHt1ymFdV~bi}^@x8].tuPB1Gae' );
define( 'LOGGED_IN_SALT',   '9W nl2R}[KV|x(b?V_XalouOdI+`7<(DFw/D/>c>(pX~nh7Q*aNm{9WqlGb3t.I=' );
define( 'NONCE_SALT',       '{m4z`ChyLp$w!U?0K]idHp/Tk;$OGiJ|`dgjj,@T%rqIa?/a]3PDW!LNt3]@]E6>' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_mggpkby_';

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
