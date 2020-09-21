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
define( 'DB_NAME', 'Nu3KEXS07t' );

/** MySQL database username */
define( 'DB_USER', 'Nu3KEXS07t' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cLbgAK6Yr7' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'ZpNQvQo:Oy-},?*r+l3fJoc0uo9D& pw}~3$y7qr9XDa8qo%.8>/s8#vYr5b@jEk' );
define( 'SECURE_AUTH_KEY',  'cgrZy+p9yP+]|+TwUdc+oF6^Z0yqPv:b`-[_!*JACU[/(OF8q[%z$W{-sxB}<ThI' );
define( 'LOGGED_IN_KEY',    '&h:|E !s byMGz0z-W;VZ{j)}Lc*[7Eo_qv6v`LF~KV^X:xQ4`5-k+QO4|RUT&p<' );
define( 'NONCE_KEY',        'B/(49/uA9E*[mZL>vmZ!t2c`KJXz=~) lBn#a--*9JWyt4s>q8jQoGrHL@f2Iy4>' );
define( 'AUTH_SALT',        'k.d)p9;+URRo^;x1`1otw4OL2h{rUYWDLMa;hL~!~]Bn2LMHCfg;7CA#J^tro-}(' );
define( 'SECURE_AUTH_SALT', '9@XND|gtfS[4J3<%A9+k$[@;*3&^cr9lXTO9.*`?nkD}UM>C>?y.{<m_x+H~poyj' );
define( 'LOGGED_IN_SALT',   '/njiI,:9^uWxr)@3Uib=:8DJ_q=8 fb8yYwwMRsH|4v[<B19-*}}(A; 0n&#z{Wl' );
define( 'NONCE_SALT',       'v.glL[n$9IUN!,,jmK~5FVS,T}yK:D.s}nOBevTh3M9V!A;u~.&Ww-$jl>H}rmYf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecommerce';

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
