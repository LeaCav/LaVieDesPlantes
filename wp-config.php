<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'la-vie-des-plantes' );

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
define( 'AUTH_KEY',         '(.=^>btpW&?i8:w-.ppF#f<X;R8n^Cr)X#JS3e:}pjQZphX(T2w<8}sB%GR<~mw4' );
define( 'SECURE_AUTH_KEY',  'nFriBE=sjTJf?j9S<QJk/D6uH#WjMLZg7=2F.%ia0wQVf_rUeg(Z=/]~Ep&d^PVo' );
define( 'LOGGED_IN_KEY',    'g8O~HDzqYxumm~H&K*9^@a/l#*IQt~1O-[:u;c,fV0jx4kLsV:}Qfn_ec3Ixvhf8' );
define( 'NONCE_KEY',        'qMhv!qJ,>JuF;5R9qzH$p}:{]?/EO_{~v%&.:s0%kD@IN%h.QT?$zMr!*w%je*)O' );
define( 'AUTH_SALT',        'p6gu^ut,?{F@Po-hCrSguIM1~%#v>Zr).1^X0b_zf#oELodmNx{4*~n.~ uTc6>k' );
define( 'SECURE_AUTH_SALT', 'A60}:;8>xbfK%!n193 $9qL_>M~3b8aUP`x<L>k[cXwHX}_l[uZ+w#gfW <ir#}X' );
define( 'LOGGED_IN_SALT',   'TB&$g brR7C?38Vb5q7UjY+M?Cd1AM[SrnM`L3/}13p]E:t#:s[aQ+mZiP+weF.P' );
define( 'NONCE_SALT',       'J7PIx/0b`&I1&Sv@lo#K6]t e8u;!~1);`Q7t@ZfT<)qrJ5?hIf2,O}.`+?Dp^[*' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
