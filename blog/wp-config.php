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
define( 'DB_NAME', 'brisk_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L&vEh}<1B$T4% V&g`gl?4:z9nqY|VeSn$8@v0)?7B]f*_Wp[<fvl3u(XZV4V(Mv' );
define( 'SECURE_AUTH_KEY',  'I$4yK.f4534{0,h`&4^]< dmuk1v2GnU1Wk$2h|/)>9PCb]qN!#`=6$PuWm;w*Yp' );
define( 'LOGGED_IN_KEY',    'eX^%U5s u0Y/j[M n>}nkOvQ7vMq_9I%X~6H*2U:6xaM=95:*WyuCto#i)f8L;[_' );
define( 'NONCE_KEY',        '~.I>+fe/}:2/edrpo{P)RqX_td=yLoi!RmBa7-Ws,SQe%O@;G+S9}J?0Cyx)=cx/' );
define( 'AUTH_SALT',        'HD-{KKw}=x)C}wszKiPMMn,^+ypjREo|i+oYKJ9#RMG#8^G{|XZcMRpS1QevDT<y' );
define( 'SECURE_AUTH_SALT', '8C-KXh=o0j[b*U0~82@?I<wS*w#dD Y^4k+/SrI]MqEH^sd+A$2k$&vXT5D4w`Ej' );
define( 'LOGGED_IN_SALT',   '&Xc7=80wpvAf<)8)ubmB`VF]uG(d;``WI3v^bc(zuRqtO]a8Vm?4FN:wP[V5 GXC' );
define( 'NONCE_SALT',       'a}jZ]g lc+YK%X$UH~RkG|9Wt4smiciez#}?BEH({,hUuw6XCVaD=&Q.GtU0qEy+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
