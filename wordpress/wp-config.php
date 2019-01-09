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
define('AUTH_KEY',         'UWg](}tp+Z&M;vn3>rlJ^Mb?eRSy:-I2IF(w&u{`je$ :[!GWGAMFq|*.mUI>BTY');
define('SECURE_AUTH_KEY',  'EeE}`PwaDfLZ#z>,%WF3$[]T[ Wd^pcepivMja=KA6v1Dk<xQ!O01>{RA_KzGGmL');
define('LOGGED_IN_KEY',    'h#*:*:nX93h~;@]DsSCR+#e{y|Q7/FCs#%z(_Lcn91.;pLMJ5H<vFn`4,q[Z=!)a');
define('NONCE_KEY',        '$x1*fB[+S)MRhbK9IF]{O`j>KKC4bi9LkR:USQ@s7@cfd4Edg0D1c0,+xO2m^#7`');
define('AUTH_SALT',        'duaF($SJ~Fs5W*29=M--Dg+joL5xG#i+q82WhPbH}~T P$5U.m])URt[jjazwI^Q');
define('SECURE_AUTH_SALT', 'G!7w=T;,j!,.tGtNG;M^`ZrNBAEdlJ5.atJ*~u?6qY {9).t:_D_S:.9u=Jf_NUO');
define('LOGGED_IN_SALT',   '$g.9N7nfpy, GXT0oA7e|9dJ;9^$!0{Fj;]+2=l7K<S j?z<U]ZRqwcQ`ru{:J7G');
define('NONCE_SALT',       'J40_k^Rx,QQy:4z;t5h&u Xu7GHQ02r8I@H{UGyS$n#xce+%od}J4AN4<&H#N3iC');

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
