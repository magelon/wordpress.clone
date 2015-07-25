<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'l:2>|h[.KZv>Ad$|n+-~.701#{A4Z|c8ZAYK!&*bRFN`c!-+l!+|zE+24$$qwvQ{');
define('SECURE_AUTH_KEY',  'tx{Ijf,Q_NOahHR?H,yjP+QE3|LC@*I>_F/ *SftgETGAGo_G8I<zrou}_F`g`}F');
define('LOGGED_IN_KEY',    '!}3oPFcZ+-gYYB-TtJoCzbw[_zg^m%z 55:=}XW`!(3H8Ep9I->3ScntZjX#Nz08');
define('NONCE_KEY',        '<KcX,6AD>&b|=~L=I&s$=)^S272j{>NgxwET&T>o(kDg-A0SQr(#3Nq)q0JAJyTr');
define('AUTH_SALT',        '2W+0wK`Tybo!bRo+[8$+}5H[`|Mxnk3;-X?8U-LsU3 r*||v!+|]&Nzj5YOu3RaH');
define('SECURE_AUTH_SALT', '?=TVNP@gjvdj3iiAN-Xb8v;mvZC9>EmeBf2bxW(A3ivAmni(79+-3dcCL5RLP:U6');
define('LOGGED_IN_SALT',   'lKxI<lMdI^Tv.&zxgN{,44N&pA%@e_|lSfQg>K<6NT5W=8PKj1C+X|#7UeiNW>Mf');
define('NONCE_SALT',       '6/C~c~h=O~`;ZCTqm+t,g,|L>AS2BrrPm4fZZ!ax+L+4,=^mzTKns9=?=|[]W[aX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
