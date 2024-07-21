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
define( 'DB_NAME', 'wp_database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

/** Database hostname */
define( 'DB_HOST', 'wp-mysql-test' );

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
define( 'AUTH_KEY',         '1eMM_Ijl/GW!x*=AZ3pJL=W*3H7`62 ACZp*u17l}Xn9*/8DX}L9J6~xw$0Dt!E&' );
define( 'SECURE_AUTH_KEY',  'sYD9*95CX[oy-6^lPMOazAIGA,&m<j/-?}5V m,~`0&<ltkpv`0)>ZZg{@*4N(mP' );
define( 'LOGGED_IN_KEY',    '#M6&!]0*da%O%b7/!U~pEuCU|DjbQ:[uV=U{`V3&8|%Yw/YmQEtmbl8:od*|O08]' );
define( 'NONCE_KEY',        'K8WL/Rn.Tj-WRYWS $wm4=a/8_R^XhD`No}uB+K/D8IVd95W8GYbuKw4S7qYXh(%' );
define( 'AUTH_SALT',        '@;6BVb*WNnAwz@GMBT^I;/OcZdqNC;$q(Y{AcwL{}DTnOXe|nC^cWKs]l!tz3JF1' );
define( 'SECURE_AUTH_SALT', '6&H5&ZX3PvP`k7v9Q~BB!3]t$rMfFVd-e[)-yy2C0$AO]Dn&.h>fh%M_m n5[xJ2' );
define( 'LOGGED_IN_SALT',   ' ITNd~I<HW(- >_*$414RqVy6@7XI!o%1}A?>)2ZsF9,v@$7cCX3`G9su+-u-M^A' );
define( 'NONCE_SALT',       '~J>yh#&g.C2{tQYI9waZv1)%<3[@g3t+M>o9-Nm/^dzP!Q62XcWGN?u>SK1-Lozc' );

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
