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
define('DB_NAME', 'maldives');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'yxnabc1988');

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
define('AUTH_KEY',         '2?o#s4LKe_g~cF|G)l.[#+_p=eCl6@9UnV@:{F.a?7xO*[9%>KYZ>uto*-fbI+q>');
define('SECURE_AUTH_KEY',  '/RoDGE-+xQ>o+l.bL.m|OD5qf4lztG4G+hm(w|CTabb|r3S|ci/I^G%5NsUJS_H/');
define('LOGGED_IN_KEY',    'R`2//DzT+qx(d4VL+<tWx8^mO4pulI7cC1CKCp)W*J}3Q6 MTbISNk?5oi@uV#-X');
define('NONCE_KEY',        'QPK6~YT#S>|Ac@54 ?2-ud&!+@k*+_VRK>)?gL}|X{3`]:JLh!V8Dql/v/G@!MS-');
define('AUTH_SALT',        '+NmczsnV1XnBQHJmx4VQ-A(_Qf37n D8*8XcbKb+*if40+2D|},ps@H-5xz:B,{9');
define('SECURE_AUTH_SALT', 'Rp0_T8O- %K^-):,Bb|Dtn}XZ7ZwQb|<f]_,e3j]Vp<M!&:XL}@KdLyE+fYvT[yd');
define('LOGGED_IN_SALT',   ' .#? 96fwpfcmV=jj#]1F`/?-@i7&K2DFefrxH*<rj2#~92eRKoqvlyE+-eK}2J|');
define('NONCE_SALT',       'wa0,o(Fn!/~D]x6TlD#dES%69D/f3$~RSkwigLF{fP^#fST.n+|*|f4jtmS,V<{j');

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
