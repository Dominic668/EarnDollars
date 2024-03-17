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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EarnDollars' );

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
define( 'AUTH_KEY',         'y<eZ: F&1trJ8p<WINMgTOky~j%/y@@iamqI]`]MH;xCLqAq<hY5^kvD7(uH_Whi' );
define( 'SECURE_AUTH_KEY',  '<*^y:ov` Q2/?lrJBmI-<o<YU Kx] CjL=A6%#3LKYcOIR&..m;n&VB)}<Cp4]bM' );
define( 'LOGGED_IN_KEY',    '5e5[N]B(vo827xK:>wQTH2rx!j5w$IUA$Uv]o@:g}Bm_$JMN/Hk|5steSD-ewY@$' );
define( 'NONCE_KEY',        'L;0H15bVjWM`u&p#Oq=q![yE|RRx*Xy225:fgeE#*&K>~(D|}jz2tWXF{x-hnTV,' );
define( 'AUTH_SALT',        'aHNv::I58DsxNNRm5DAWc[ClDyn/p4$iOcrJCxm`z!F+0qpjsKGN^WmB2ZN=Cz}^' );
define( 'SECURE_AUTH_SALT', 'z_7VS?JDd:!W:e4[FUKoO2Ds_z&Ts?av]Wg2df[F:54zUpBz1NK;u@MnFWa-uvMk' );
define( 'LOGGED_IN_SALT',   '&j3c_di[(~Wp$RB8L+9Z680hKBtqnjqx,_f!(yy_Zn6f+M|2kwV9IvTE,tly&s2H' );
define( 'NONCE_SALT',       'z3IoOO7w_03I|6vlXbo_))EE Uo!u<lk?L&O}oN%Z9$<FOm5S:P%Qq{q4IW):8qU' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

define('WP_TEMP_DIR', ABSPATH.'wp-content/tmp'); 

define("FS_METHOD", "direct"); 

define("FS_CHMOD_DIR", 0777); 

define("FS_CHMOD_FILE", 0777);
