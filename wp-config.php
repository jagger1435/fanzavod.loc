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
define('DB_NAME', 'fanzavod');

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
define('AUTH_KEY',         '{N,*Qc!EWpKVgSegju2b}p}|}e?AI}+6i)D3w@}|ZIP[HqlxSY{-R!+xY0iXz#Fv');
define('SECURE_AUTH_KEY',  'kv[}EK5MMO};c>~F0?HF0W#,ZF%.m!aF}Q}:.k4}o)fR_Ai_@GFsPl4M_v>9>z/6');
define('LOGGED_IN_KEY',    '{^fn1GsR_jr9Hp;kNGK.z7_-K6_o1xh?i@GHpJ94/6WR2 /]T9|+Snl#]S370^`W');
define('NONCE_KEY',        'rrTNz&U<f,P;fqkJkOof5}PL*w3X gJ3/!Xd$;FrR}Mi*;}u $=zjbq&_,`6uK=u');
define('AUTH_SALT',        '@R+:JCQ|qH^f#LLEl+w0} 3Aq;d/Ot<#}e)cPYW,h@UOYvXp!Z&WlAUQx+^B*9`r');
define('SECURE_AUTH_SALT', 'C^2Tl}I 4o %`,u]*twhbm&!nz-$C[L.p(v|7W>v{Km6&p]u9^%7sf)i]+!>pHB;');
define('LOGGED_IN_SALT',   'hjjL:-Hl.UoMWA <=.OMJL7aSPNv2j!>}6R36(tB2-4LS!c1^zKO:4$=!xNReLgO');
define('NONCE_SALT',       ')Vqb;(T..r`)Zk-8-<,`^i%gw:LgxdVQleJ=w#3z-nOQT@#4+5IGf!hJ%^!G-C8Y');

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
