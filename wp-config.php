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
define('DB_NAME', 'college');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'f,)3OVtPX_}D!&?&`<VtnfY<|b~A}sYQm&Aqy+SvT^SbF(NX ^wpiqC9e1J[z+K,');
define('SECURE_AUTH_KEY',  '7qo5!r0tGf4twCD+bR0uM(1b.u+|t*nc0LW4?Rl6Gm_H*SUQm^rQ~6q3e]UM,ttH');
define('LOGGED_IN_KEY',    '9,}9; ,f:lhgqRmuh0e<0^Ltz)!dt5YI9W*-l=05)6XR:OSNu3n=!3.cWffSK]_.');
define('NONCE_KEY',        '2r9lL*wanIWq;? V&n7-jt]Ze`oF|beWo~yY@HeVE{*96ZFJ(ry(mNta_v+#vQ3{');
define('AUTH_SALT',        'vUA/6*1S|-Y|`saaZONfT/3{ngKLP4jIIH;Ox>_v{0:D}#-+0m2pjVLkQ_p??x$a');
define('SECURE_AUTH_SALT', '.%%tm9j,:G7EI&[uVtGzXZTf@b/XryK<N-668HQ^npjX;,>,[ar#lu1Gm;6mk5Mm');
define('LOGGED_IN_SALT',   'ew3m)NkSg4:V:+M~kHmCbGG7]&#V&TZQR3U6SRT/VMUov^r Ec%9`OjbX r=[JxF');
define('NONCE_SALT',       '.JPM4A h5nTR1nA8%o0@?}%o?p>2Ra&En9AWV]jiU0|2yMfhZK${Fz0zwyWI+lCZ');

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
