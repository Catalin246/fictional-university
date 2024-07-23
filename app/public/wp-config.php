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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't;3HZE`2x$NYqZ9+uGu>qaZfna,B3y7gV:(B7%qodgos-mrD2prvSH7e%[g+HO?W' );
define( 'SECURE_AUTH_KEY',   '8oMl`E(m3r<3AD#LSxp)uu7_9o7aDA}?vz;y!=b8p~)vpy{}T_KLZzmiP&s3>+(6' );
define( 'LOGGED_IN_KEY',     'd)T`2*/NC@gG*ZfYsPCZ57wYfP<f_bzBO^3j=*gwQfO6Q+21F[=ed##sp+(N2G~1' );
define( 'NONCE_KEY',         'okc^HD7aL8H#:C#~f17Eh~32v|@B{W3zp ^CWfK/+-!gVnOh+ts[!V+&DE.|Qt-}' );
define( 'AUTH_SALT',         '7(@|C>[s~<W^gmi?x/3<Ex>qvpowen<)FQE4.Wzx?-Bf<8@wZ|A&[2T2+!n]6Oy6' );
define( 'SECURE_AUTH_SALT',  'g%XQY<-v;IM3@V2RH)L#V_Rorj6OrAXknO<=r1q<ku{f>ZA@eo]OD%x]wauN5YsR' );
define( 'LOGGED_IN_SALT',    'ljG^?oklKKQnzZMbla>hkOW*VkG[&ImkLS<Lc4n~:7t8P:EJ|7x=@.^H?*k/IGY?' );
define( 'NONCE_SALT',        '+F&u#,,)?*ABRsz-dbsHf==n9a1?wQKj`b3y^Rq&[3cu0/aIxs^p3ws)8RW!m>WM' );
define( 'WP_CACHE_KEY_SALT', '}GGQjS77B?g8p6MA*z;5AFtIE!UiTTAS Pz/caZ45at6~|{7s~$}XSh:;WKu}p8x' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
