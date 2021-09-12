<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techcomfort' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+H+-/LXb8fTbg|S@5,~w3et7j?0>8ll8/DGocMo39M[~}1Or:>DgXHrhp^mX#R<z' );
define( 'SECURE_AUTH_KEY',  '5zLbHHtaSVo5(|3bT?K[UI<k0BK_nMRHQflMn_BH&@NV;/RjjPg;xm([6]UPRX)~' );
define( 'LOGGED_IN_KEY',    'oXoCyjv2][A1,f|E.ZAhW~V`^v$EYzY[@[#T0jDC7DMG89mD%0.~MQ[r|kO3:Oj7' );
define( 'NONCE_KEY',        'v?:8%{]W0UlO`o+~<R22ZIDv-tG<>qIIQi-MZHJp1)7kHv4?dF.cA*a4d*q)yu-T' );
define( 'AUTH_SALT',        'lO,xX{;So;$j4Kt}#.dOo37(|}A,?Q~a7R9>r.paC%3=3Z/Unhm;-{X!u+$T~IiP' );
define( 'SECURE_AUTH_SALT', 'nAJG{e]sAej!2iv+@C]wq uxH[t,b@G?[7P*bsYv1T!F~u<!G+Q483N7=Cf*P>DN' );
define( 'LOGGED_IN_SALT',   '>F%,Vv!K:Ia9;]ZNTNMQ>gbK+U6,bOC0:5!*t_/,<aP|=!QUER7I*Y(V<{k 4s|Y' );
define( 'NONCE_SALT',       '!O;hLa>ka,FMo{ZN2UpMa}YeRIq:nh]{Xpnite/zMYAj}p=Vr9J!`g?@5_p! tyA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
