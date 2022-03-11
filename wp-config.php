<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u769449211_lmCWH' );

/** Database username */
define( 'DB_USER', 'u769449211_T1ur3' );

/** Database password */
define( 'DB_PASSWORD', 'rS2idJhTkj' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'Fi<z%Kk[#3PuZnt-Beqlg3!L%F13I:a1Q}qN4vRUXi@%Xf8y |lcO/GQ6w:*;fAp' );
define( 'SECURE_AUTH_KEY',   'g<FRm,#Hs3&z=(oX4&^N{%rM4{@e6A;HZ~GYsjcFh2bA0#W%&-2v^+yCAAPYhI4j' );
define( 'LOGGED_IN_KEY',     'l#^iV:fB[IV=,kB8U-)0#]k^%73N/:5RAMbNiwUEHP_QF78zs]u%p7>r^]$Ga:D4' );
define( 'NONCE_KEY',         'Y.Bm0KzJmzmt!,[Q )+`9u@!MOQqtVAL?f?txYQD9d@zf<VgQjeRcU8elrSw,uW1' );
define( 'AUTH_SALT',         'HW0;6S#A8X!D^!78UO2Pj4~KvG7oVP}}[^^Ph}1@G>zo[L|BI5X&Zy2:}Xa|4f~&' );
define( 'SECURE_AUTH_SALT',  'dX`*eW-,H64h`/# nWvr-@AGB<C:C<<<iW/Ry!d$tj&TFhPj7RFseo5hP2 PZ.A9' );
define( 'LOGGED_IN_SALT',    'E21XX-jB,rL#`Zdmz<DFbU+s0G4}$o4s*4}K`k? F0HF^L=E&?:T^:O!4r|%CCB1' );
define( 'NONCE_SALT',        '~JiKZ}zxUAsZEmmSZbl@qK7vkWa*_4T{Ab73o??sRm/0f-N0<xG>w<Fr{I=,bmIl' );
define( 'WP_CACHE_KEY_SALT', '?[J^8zEXhs4!/AJ<C~5Z;{DXve=+YVO$73W3p9 .,i_T|jZ2a7(~hG!PJUInR~UN' );


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
