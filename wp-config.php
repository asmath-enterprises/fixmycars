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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_titw1' );

/** MySQL database username */
define( 'DB_USER', 'wp_zenw8' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c7m3o&S5?$MVEakN' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '50!Fx01Q]H8YZ!~-)/]+7_V@49P&%dc!F6XO3C3~l2wq8|YBkbfQ_xM;3-49n(Ib');
define('SECURE_AUTH_KEY', 'N]190*rH77k0d/(D)VwY[nXd:Pb28ANr40A94;447+hv!8%P#&h:VIC[Ct#]S-qX');
define('LOGGED_IN_KEY', '%pk3(f*#ZekoDs8[U6Ou2~mQ+e/FO9(@+&n(*k:CI%0b[u*7nST(j]mj79)O@70q');
define('NONCE_KEY', '!qALv-*84t&4-z7x0%(J7y3L8%)6_!-m1D192mB2Z1XL7UY1~wL*3@AD4#X0e+q/');
define('AUTH_SALT', 'H2#6WnW*I&dbYR7[:a6s3Phh!1_1S;K7X1E_2h@Hm/33*3b0w*kTpL31rz]musJ7');
define('SECURE_AUTH_SALT', '%|Uh_X7MUW05AgX-605)G5ulpk+t+Z82t4Io5V314z4j6]O_FWzBR1+xtm8%7|:E');
define('LOGGED_IN_SALT', 'S2bNkQ[Y172)bG4orCk:ekrB4_Cdu-Grr)+/Osm6-4VsJoE[tu_i:PVpk3;mN4VU');
define('NONCE_SALT', 'J#z3Nue_h6EQU11od03]%-u!MggZ3-S~wX&J0ycyAyT~8Hp[)v7Nu1b!|/!J4oA1');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'E92wU29_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
