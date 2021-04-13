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
define( 'DB_NAME', 'testrutu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'L>9W!Rpj5H@C2x5+^mATIw=}{n`_0&M#xn:)Mlclu*&sw7)@tUQ_G>kYx!g]7*Jd' );
define( 'SECURE_AUTH_KEY',  'Bs/;[P;d>eAvpmrV7[63URv:iS.%^vZ1uo2I4bznl@xb.+[2-vd:F6W }a;T{w&H' );
define( 'LOGGED_IN_KEY',    '{j1UXVl.c#sUq)m6sMoK(d&a2s& g&!)Or`0qJ7&}b6hkW) =OB}%uLIU3K>B{-_' );
define( 'NONCE_KEY',        '%ON{`+M%qs)Wp2K`Dstv-6?Fn2|<AAHaKN@0j5xt.kvPF5C>Ii(8+!c28x;4ITAZ' );
define( 'AUTH_SALT',        'A<<)[A{Lh9+zzI*z$j1U!;hy@p3`}4;Y(FotF?[9{IA755U?l7>Ey]%.O(;FXw40' );
define( 'SECURE_AUTH_SALT', 'AsLLh`<Q:9LKGxupa^X*&Az*+AIMz`zk^6$<}4*3g/`S$dh|OM!f[=d4R^lOzjDA' );
define( 'LOGGED_IN_SALT',   'D_gN7ZhlMX.$L5cP~=7BF3Sw1M$JLKq~M8/t_Kq08I?6H-eADwTu}Qjs7HaMIY97' );
define( 'NONCE_SALT',       'rIu-Q?(n<.>vO5K_;Bzhax8ihsSWcav0l3-}>R-$t7}T#.7-W,6#9!D=s.VuW:_,' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
