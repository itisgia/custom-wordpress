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
define('DB_NAME', 'second_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2/JZxrpvz=4DjC%~<Fq@mU?)IA[(m@N%`$3(aB4F,*Jq! !rAg!y29,YG_`J[D,i');
define('SECURE_AUTH_KEY',  'AdsFi4Y; %4AH;?lJLnS N/s3y,`?[7T!gg=#.oG}i{V[s1Kpa5Q .b{)V mg(yo');
define('LOGGED_IN_KEY',    'j)e>$gR[kND:|zW!/4-K^s4k`6p)Eq/w2^[lS]Csa,.yFWbjY+Z~a/SxRe]b<vWz');
define('NONCE_KEY',        'GMA5KsKhO]PlJ &`#78Ok`|gbp4<E@Nk7`C4WOD2HxRNXxx5]O<4rwBSGtM<H!ei');
define('AUTH_SALT',        '6:jcxtQl$ >HpI2Rz)4.(zM}X=d],[>P,u9BoK!8NSE$eBws+*>1zRPYQ9XZCE=J');
define('SECURE_AUTH_SALT', 'mKB4C@$)h4egN~^U[Ur$xG5`PHi8Rbdn#|zzdy.xTVx<h<TC7wh[xK|n#dpT}F)U');
define('LOGGED_IN_SALT',   'q^jE;-B/gt8:zF//SC 55Nw&XzVhwJ= A61(@d3@-VMucyPO@RGmO=oxn^?vW:`#');
define('NONCE_SALT',       'kN3mvMsl=b,*tCP*aJ3KV&Bh3e9!Tm7!}M|(|=Tl7>LUcQYymL5g^U$yydgZCaH0');

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
