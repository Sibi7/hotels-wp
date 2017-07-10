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
define('DB_NAME', 'elita');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123edsaqw');

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
define('AUTH_KEY',         'gIW_-[S T@+FSF_P[R6G& vzIaJJJCK]/Z-BL]Jot(zX_dB}@vvt{[J`C[w,3 }D');
define('SECURE_AUTH_KEY',  '(<$d-.3#kJ;6nh>rxAe?@EJcdM[g8wD2HZ9=k>ue[%ijG&6!f+M`UU8^pk&=ZPXv');
define('LOGGED_IN_KEY',    '7>.wQXz@)5LF84H1=nVfe}m;;*?gV):{sR)lXo~VWbjyd0RRp+oO(ngiEV<s;v#C');
define('NONCE_KEY',        'eHHa8VYaOb3;0]{vA)N%JS l5n.9dof7wzZaWiT49^@KiNj@PxWnHT8CT?AY8M{,');
define('AUTH_SALT',        'Hf1xAFar-aQ0*SQ!!|Cc&;4MCdj%#gCN9@8WLQ (Il`@DTL}uK=v-$HM1QYd2Xcb');
define('SECURE_AUTH_SALT', '_rNn:4uTwM6Ec:U0K-`Pyl9c:~lQa@I.=l`v_8fp}_{r?%=@oH;p]SL^xy+JCxn2');
define('LOGGED_IN_SALT',   'H0d%xO@Dd^lqn~N*[O.^CXA IqwQg^c4b%R*q2y:`m,7a9];D^w3>9liMh(PDFzR');
define('NONCE_SALT',       ']:+rr(Zq2w/_`X?X;4:`NcvLRm4bOiJrephd=0s%~2QN*#X?^68buz1Uuj-yvg;]');

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
