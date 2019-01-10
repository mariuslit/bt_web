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
define('AUTH_KEY',         'BflQ%t#.&l&!sUt`2`0_~RtKA>EahZM$s`>}v@.BGy3`T[F90w~2<O81Jh3-&O^-');
define('SECURE_AUTH_KEY',  's5mL}`%vL@5NvXq|q7SZ[`Bts [|)IBq [MNw;KZ%~/+r%9oC,j1@.5k%8+lFt!u');
define('LOGGED_IN_KEY',    'z]K)W~Qe;$H&guR&*>D,.PZdnOS-}YWSQ%@>)*Emc$6Nh8w<)/p5gBQjc8Ke}{4h');
define('NONCE_KEY',        'vy2z1rxiY]Q-;ZNx,c[b.B=1ti+H*u~p$nuB{R5x|jjz;JV5,2Bp4L79i7rT6wWB');
define('AUTH_SALT',        'tl7MCntV^(&{YjjpF ^;PLj4I;T&xWAw9A&-w /#i-3K;1t6id0pJ=BMQA^?E=99');
define('SECURE_AUTH_SALT', '3hTc=&6`4#VQ7p2Di^|1ViD2Z^#Cg+E+W~D%gv,:ulAN<{cC7=I[bB l8I3J>Y>E');
define('LOGGED_IN_SALT',   '2|~gUo6XR8OG@ ,S1_Vc*L|&&&//:IRe2x-zzsD&o3D:Mzve9!+U8f`f`}ehUhal');
define('NONCE_SALT',       '3r.^)f.Rn~;_|edDj#jR<*J#|N&F<r,3Z7e>.fuHKb~[QJS{8~psq62uSXC-L4d:');

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
