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
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         's]!G5xV?M%=&~^Hsi81-VvIE`pMB51u^>(C&]*Fnp=? R`V_p};vYac0rs!%7wb^');
define('SECURE_AUTH_KEY',  '5&,,V1X3&x|U0l4$5WLW%]R}HaRa;aLh9q%2E1R)Ery,E$8Awr=a)>;l8A-C tO5');
define('LOGGED_IN_KEY',    'O~epi9o8{EzvZu^o-08lvZw*6S}^I|XiV@_9Q++8IfEYMLx<hiR&e`94bmC``&JP');
define('NONCE_KEY',        'X.Q]8x5QAl/Cm8c[^o[PyTE.o`>jA.7j!6<k8BB(t^AYTc`sP?f]WN}&VE?RC[0{');
define('AUTH_SALT',        'A^IC+D.vPmTK67EH?gGBYh*yMC8cM&@A-skNC`Z!Fz&Kad_17s1]F:1R<N,Cb;,r');
define('SECURE_AUTH_SALT', '~$0D19Q%<[#?ZM{Etib5Yli/fRbqtDx*ltyN$ZP*!Hfa0=KEV)e`Z[o,(7E;0*OA');
define('LOGGED_IN_SALT',   '..nHtBRVEGgMX4}O76h}/Qg+IR_+[H%]qE?b?^8eCSv(;ET.l/S?sD!TZ=#i/]/#');
define('NONCE_SALT',       'r;^jv^{5}^EeRniUtVWQvDb?]<2.;U6a.!<Cy13LR>v)}tPf`QD/(ejt9Qq^dIT5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

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
