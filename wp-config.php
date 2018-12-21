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
define('DB_NAME', '946472_ajaraca_db');

/** MySQL database username */
define('DB_USER', '946472_ajrc_dbu');

/** MySQL database password */
define('DB_PASSWORD', 'Ajaraca.2017');

/** MySQL hostname */
define('DB_HOST', 'mariadb-134.wc1.ord1.stabletransit.com');

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
define('AUTH_KEY',         'LV7hi;kc%y(JZb._-I|TA9E^tY>M*A-: k_bA@&v4sbBb!Llsy#P ^W,l~8jLcY7');
define('SECURE_AUTH_KEY',  ' vXl_Vt[-r6)$ll8]|&oH*J@0Fj@~%<t7w_EkzH}E jD(qp$H-yRR}Ca0*3l}ATK');
define('LOGGED_IN_KEY',    'O5BL+R)fbAKH]4pe!2E81O9W}yai33k|1k,QIv$(lJY03RO+qbiH]JWM)~{:~Y/l');
define('NONCE_KEY',        'Q2<|6nvd8r9U1KHU(M.7_EEaN~79>q)K|` [4P?ekjXXa98[8ZLG-^(D1b(t.nKw');
define('AUTH_SALT',        'a~8)rDzEU8YXg|=tKrL=$bM|19vJ22T-!M`m$U23C~SiG@H)mLlwWL]8X<4lxcu%');
define('SECURE_AUTH_SALT', 'KkxYhaqHJ$[WcFZD Nc|<*L6a$(f#A7?!Y&x;T,Y+m@Ng_EuKRF#D<h!(S}JNvKN');
define('LOGGED_IN_SALT',   'xY/6,N+s2hXJB4X)we624tEUD@x-=~d/z^3d}P;fRO~YQi8G<wo%DjIsU}7i9x=L');
define('NONCE_SALT',       '6#>J2 3qg]~=DC*mpapQr?.r?+pRmbD~5r pVt9&|yy._pcR%xQ]M% EB6325P/V');

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
