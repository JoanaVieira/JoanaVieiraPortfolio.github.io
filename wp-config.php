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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TRIO' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Tc1&&4m3=bVzzLvt@.ZR-LM<Oqx2q#wm@S%281|T(i?)w6KO+V0XUVu&+oMPT.j+' );
define( 'SECURE_AUTH_KEY',  'jseM~cWJ*<nix+$M??VSd_Ocf!seu.x1SJuzmThB xd_/}OYI8tmXzGEx*28JwF7' );
define( 'LOGGED_IN_KEY',    'qY=CJ}Yqc7nc04|`q=-=%L:f=JhtJIT/*:[(nkq-C*b2{<J?+M2#C_kP6LK!vX7j' );
define( 'NONCE_KEY',        'Z(5szUI9L3E4JES;|[.K[aP#6jebb?gUdGW9$6[56MhA_kJ|KxevQ)`w*$z*@Lb4' );
define( 'AUTH_SALT',        '&,8Y!.S+4Zsj;cYJU7Sl/<;#RyP+P1t*62==e1wjf&9_jC9a@E&|JOGFo00c5wwF' );
define( 'SECURE_AUTH_SALT', 'el1,I[_/1y>S:eJwXS<Zt!(vZ@7=/BWsGW[>|d+%-Xt5!dMJXomQboM*p)e^B9Ku' );
define( 'LOGGED_IN_SALT',   ' B !/DuGs]h&>XlXbhOEE)*AlKd37qjbRcFgpetxp;?X`AqC@f#pVrM55nhIksT4' );
define( 'NONCE_SALT',       'QILtP>khgswxc]M+7v@5>NBG:>c/6F9j;1<7OKt&Jcv5@ca|;z8z /wbd,@tUrR+' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
