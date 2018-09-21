<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '192.168.10.10');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SCTsXpo`nMVz@e%m2/`i~Xcp7e[52 <aJ@4|2I<ZLRYr:,S0QJ2l_XLx^+*b)p![');
define('SECURE_AUTH_KEY',  'T(&&4/Ka`^69Czcspt3@nu;6wEUQ{,&xcP:AEvmV|;}:axYF7O3f@#8kEW(^1^oJ');
define('LOGGED_IN_KEY',    '{%,`@)(Cz1#V3/d{!Oq8(LAn{W`1PBy)p7yksk<<US#Hk4EP^E.fr-L)=Js98Yxy');
define('NONCE_KEY',        '!9&+`T7E>xvx,1lv?qwHPl(A)&:5K0:RKLLHzN((%f=4;n2EC|DHyzN93gG{h5CS');
define('AUTH_SALT',        'y|V8.CcF3vkgvvzLR@m7?K<qJGJ;Dv5|}i35-O1MdTnZbk)MB!%8n;>Ft2hr2@Yd');
define('SECURE_AUTH_SALT', 'GC3x;Hfiqel9Z<UUU~-/tr2A+hv]Z5-l3aA+_^imgf+czCN =8wFfYbmnb]Q32xx');
define('LOGGED_IN_SALT',   'cT7s.R`KFO>>7^ XQVa8#u?2Oj;zs-`(3/$u1x-f+EW>Qi^V^bEi:98%lC8On^YE');
define('NONCE_SALT',       'e.6&PN)t$v]V?HY?>/]p}nq*CxS;)W`cPM6vDTsfs41{D(_Yg37>sHcP,W|h]{At');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
