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
define( 'DB_NAME', 'bath_salt' );

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
define( 'AUTH_KEY',         'i3[>pbp=0z37t`tQ{KBBU[`(@ieWJlCk8:JJ&%+8HTsYmzJj(k^pC0~lGI<jMcbL' );
define( 'SECURE_AUTH_KEY',  'Vy>*P<1o|>8aZ~,@N3$doc0JL-/> 6Kb$jIO:Is:pq(;@/IIq{4vb<!(!=~Sc2eZ' );
define( 'LOGGED_IN_KEY',    '-}1Ie%z]wD/NT(wc4?G?]g:eQG{/!]CK9]iYub(&s[QGR5VGp5klZSh`71JH[Y*j' );
define( 'NONCE_KEY',        '(#nI/nB>r}>MD=[)4rm&=1Nx5va.8a|b@ab7^j?x,k9=p>RHUyBqRNq_HCHgIqD ' );
define( 'AUTH_SALT',        'VlOMgBB?#~2En50M.DFt[K>)oW<@Y]2[@zqW+~|{C 4hyk{QNqaU]6.b*38l@pId' );
define( 'SECURE_AUTH_SALT', ';B2`(KI;r+lg&e+5$AIxb*+W~>N9_geY{+;e,ca7:,t!zXzeyH=F;[+^H|P1H<]P' );
define( 'LOGGED_IN_SALT',   'Y>-mY{FNJxf>|m4x}N#]qeK_W -lIR%4?An-tjQ[&Z @+q-o:B%C-=L{T^Op#ZS=' );
define( 'NONCE_SALT',       'w:j8PYxE4G>Yr6p5,9WK<NG,,M@c=mw2Eq.p9[6mN89jmef72vxwZ;Qk(HYQFgE}' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
