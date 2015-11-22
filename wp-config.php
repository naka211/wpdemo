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
define('DB_NAME', 'wpdemo');

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
define('AUTH_KEY',         'B1|oh;9:NBpIqZ?+-fPjG.xr;.T<G~lR2W.tv{G0Eg:g!-%9i|N68{[v?C+),nF]');
define('SECURE_AUTH_KEY',  'p[4G-zMS+Oq+jz1=q|gam8Bm7--:pwY`gOmZ6b=oZM)oA+dxr&[IhR5BHiN=m`Ef');
define('LOGGED_IN_KEY',    'a:tQ%~u@.5*B&3|</#oI%k5^rBt92V]|>o1{[=GlRJSe*@bov1f ,D{heMM)COqq');
define('NONCE_KEY',        's(QtY[koLkLVHLO&GkI+(!R]<E>U9*caHdu^^)b3CsB,Z_S%#W-4G(G6c8-jOBpE');
define('AUTH_SALT',        '<AzhAp7n{Hc9k Pmr)|h`-Q(roZ*A;&G0C3<W.P|qn.[PrZ7`C)TW6kXTwM(NvA`');
define('SECURE_AUTH_SALT', ')vTRZZy7hvp#B:Q5h*=HyFI^VZRg*o=8C4H-)J=)5/o5W;)Gd+qL]Dn8%-4J#Rub');
define('LOGGED_IN_SALT',   '3[B/i.qNzwMPY=U}uJ:$aYX%P#swX{-OK[M 1ey[)V,q4s8F-#4M#lUxbs=1(G<u');
define('NONCE_SALT',       'H~5l@b@67 b8y[a9`s:--Yol#|5$I^5]4tLrfJ}wJb~HK567E8r|PMk#N4(M:;%Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdemo_';

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
