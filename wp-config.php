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
define('DB_NAME', 'ascDB');

/** MySQL database username */
define('DB_USER', 'matherton');

/** MySQL database password */
define('DB_PASSWORD', 'monkeylsbn');

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
define('AUTH_KEY',         'fO;4;a/B3SZP>/yg=&sny$HZI8 =-D-R;%cYDgyY^-9XF~frBS[C`k]=Ek{yR_sk');
define('SECURE_AUTH_KEY',  'MAS2Nna5f/I^t`+f=_VD7y)GiPa>jpA_g`#Lz~v^X7R;7SX0/Xk-;+%m.?},hV1Q');
define('LOGGED_IN_KEY',    '?r,MD~kE~xOF,^a1Lnbrux.Rg~b,+Zx!.!tTc$%Nh}~*31`L;OI@2VGO<T%_H&g8');
define('NONCE_KEY',        '%T;fy;Yg:;u+T>5Tj>-;>TKRL/XHgVkBxL:^<ETo*QKc1Je1;h&a`^sC!V;`=9u]');
define('AUTH_SALT',        '=q4CB;L f243{0_0U8W8DyTA)Csx|}/h[^jK/u[|jcdHf2wJWJ >7LA_Q,uFO1%8');
define('SECURE_AUTH_SALT', '-Bwkql~ScTAYYf>&FEpXEo$O`]`F%U{k+rTa~=kJrC%<MZH._z;eP*Du[N& `zB]');
define('LOGGED_IN_SALT',   '~^{(_Sgp`^WTge1Sr8Z6C5w !01/t0foHaeqb:[Q8tMNa5E7Iox2nC!~ ng|hPSn');
define('NONCE_SALT',       'Kvi+8t&ERnB<Q!yr-v#EWlN84q>,]GbP7g6@Uum<|B^lePL*jdKm].E6kUqNZ* d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'asc_';

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
