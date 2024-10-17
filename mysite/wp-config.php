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
define( 'DB_NAME', 'mysite8' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'As/fm4FA3#T}-#rjN:/7Z]va1Mret}^KAbcK:!hg59Vca?)+8)42njjkvjsSr :,' );
define( 'SECURE_AUTH_KEY',  'h|Ks-w<K{<Vnu-9w}#*gF^*KL9_?}.Xvvt~~R<u4|1MCkT33(lMFeWknAoe+f:QN' );
define( 'LOGGED_IN_KEY',    'nt`38BvupB[XE!&fP=J|j.i hVyV*5]p|RzlX8TKSlwCWq}}f2<oqO7B[;DR?fm6' );
define( 'NONCE_KEY',        'k-hs>iVB4I WkVB{~uJM<A3T!vFUp~.C]Nn>rA VkZp]^r<3_,5m|;|+O7Sh`ka~' );
define( 'AUTH_SALT',        'FA5L}ePOYl53;daRGI$ 1D{>m`fcU|2;E ,koR#;A:r[y(7.6/sBj1u~Lfl,`$}v' );
define( 'SECURE_AUTH_SALT', '+a!mol-E|&V-VKyG*Wi~C6u>u@!2 Df4@%eFK%4D@GhL2Z@i[pB/;l6RIJ?OnXy9' );
define( 'LOGGED_IN_SALT',   'xQ.6DEV3@(qWpk>]AYq&PMe^Po.y:aFQwp76(jeF]dEBmYhj(_i+sbj@g%eLrEOZ' );
define( 'NONCE_SALT',       'xvy6xJ(Be21L,Z|1E[8 =L3UD>Gl%f()l{ZN@W53q$&?*NOr.ldU0kExsh9`F0Cb' );

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
