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
define( 'DB_NAME', 'magnolia' );

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
define( 'AUTH_KEY',         '[F5*jkDl- _++MI!0fj2gbW>u5eN)0a}/44]OTEZ)b??vHln:$1rXRIny.>4`/j0' );
define( 'SECURE_AUTH_KEY',  'u&HX<CV,ccDaj.{WgWNCMYYjG-!_bQ7o$&m@UU)Or@*fj K[[79Uz+LG]`a](ty/' );
define( 'LOGGED_IN_KEY',    ',A@9~]._T%9@zV?x5gWBu`Nz;1x}y)-i=ATbd3(RWeG*tWuB%V@BEI|pV0:&[GSY' );
define( 'NONCE_KEY',        'L-`l|S31>4=VYGdCvhj88;OFtQ51>hAEv,EJ3iWMBcF>5iNYK6zI2uk|lI;bhM&R' );
define( 'AUTH_SALT',        'yfO1#JU 8mz8k.2`0f#aV*J)XJ;0+rF~RG]v_8@j/09C8RPb/@{!?{N=8pw0X]u@' );
define( 'SECURE_AUTH_SALT', 'n3P.S=<_N=^(A7[zP +mKU>`-i(.IP8)TDEv;{i=, .|J{}gT>QPD~Qi@iBHrl[O' );
define( 'LOGGED_IN_SALT',   'xSHlUS6[#u4erNGPj}v*Hc-;YS}~rb+--I,*qO@t0?+*hQ(1N6hoM/!+{zuL[w*d' );
define( 'NONCE_SALT',       'v!Z-X_ qfw^kszF0gOPq!I,_ME f(Wrl9Au]4fx-emBPVe7||E-cEM}&8W*nq@.S' );

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
