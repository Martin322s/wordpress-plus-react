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
define( 'DB_NAME', 'softuni' );

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
define( 'AUTH_KEY',         ';D|0lN)Ie4CSW}Nj8uY3CMB>@&crEha-S{?<rMN>g1*YxA;f0jiSX.:jmpxfp/)8' );
define( 'SECURE_AUTH_KEY',  'C?5KvXFh,P{%fBOZ=B4w})!dOaNA),#$:Bb_OGY[1G,}ue96Wr2QQW?Af3+dYNvc' );
define( 'LOGGED_IN_KEY',    'WFy4~T|}zb&j!!emjyIq2?T9]0h}qED)@Q/p!h1-1:wA>nq/8GcJ!V2uTev;?IQ!' );
define( 'NONCE_KEY',        'y5@4FX|*`MG ,oF<ii:cZH#ab{lnZ]I{K]jq1s3Qyv0Woa;(F6`M4bdoIxIDTxL|' );
define( 'AUTH_SALT',        'W3t)0.k &3Q@pDJZlXGF6i+|&#Z|E#2^u=aMi B>2|qo%#cC7vm9}aO.4pU=oQ<D' );
define( 'SECURE_AUTH_SALT', 'T3CJhT9U14[a{(MJ!|W<M#7@,[p3US9fBrJ*50.O3(*| QpE}Vbq>~(w|Y :nhk$' );
define( 'LOGGED_IN_SALT',   '$W7f?vTG|pz971ML<!G=T48T$;]g@qY:9&8JOh8aoY8LgcC_Cn_,-EJ/S_5z&a`-' );
define( 'NONCE_SALT',       '>H4@BMvu1o?40iTim~?Dd*t`+C9:5Lh*g?%Zr-:7|0Z~_~qE0Lk1RZ5Ab}Y>8]3p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
