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
define('DB_NAME', 'wp_blog');

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
define('AUTH_KEY',         'RtX~;%CF1 [-<]j*Od|l,+EuC_Lzp}7-#-I1Y_=z-,gg5eb+9fgaeCFr>D+p.86:');
define('SECURE_AUTH_KEY',  'nZEwRQi..M4L81;g%zZuB,95hxC[1w 3^voODtjlHEBD4C%`*V: E;w<3Ei)I9//');
define('LOGGED_IN_KEY',    ',|x9:^.}T)A+C?<%}YF2I8kOp~!)W(h*I%O&uMf.[!,fef-A;jb+/P_YaDJ~Q=`G');
define('NONCE_KEY',        '[a_v:wPMakMhV]j@syHWME*<!vK(l+LpyPov%Ps&mc5),baV,8hEROXJ#nfb}.[R');
define('AUTH_SALT',        'l;**HAjPidVZWs>Z>Gp_kLh7/_c=a1sJvO?Q:QS5vGY<-:T^?r;-r:diNe)Bs-~C');
define('SECURE_AUTH_SALT', '.fNY-q*cr?-(titfCv>|[Oq$*%3J}YC!jW#vx:;?lyq|@[4wFHt@DB@()-a]N&k)');
define('LOGGED_IN_SALT',   '2#&e,9jk2ho!Mh^_uApkMl&I=cLXaW+z.G..vS?jAU5=1ke<DCiv{oXbfh:WgJwc');
define('NONCE_SALT',       '>.Nix#jdYk~Un{I,i+P!NyXDPbSF5v@a(cHTh5~r/9[xOLRv@<tt4eKD^70Q8f<H');

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
