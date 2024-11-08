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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'wrE6caEj`Z^.e%`Sq8lDR^Jg$UwE4nLFQ@9]BB*tjwGeW`.-ZFm;1Tgak9F!my,@' );
define( 'SECURE_AUTH_KEY',  'JuftOmz_qFX~V?lE:}]/gnzm$*XQ)z@YT<:3.sNq&cfVu/:]<wEJ97u_&}6s32Xt' );
define( 'LOGGED_IN_KEY',    '}r_NPaC*<Bd05x`y$YKe*%y$;26.h1Pq;Dv1d[N3#g&Jsv`XIX>d3Ib{6[?2NI]&' );
define( 'NONCE_KEY',        'rmJ0ahRT2RSBR:@X_!,N+9)i`:.3,0M=iw^7qvV/>jd0)xe&sC27aQwTm3(x}!@=' );
define( 'AUTH_SALT',        'J7%T4Q.~<sKVxjIXpFMfphGmyXHQJadtMz!0!{J&?nhWCAH7VBOE#:v8yAckrX9I' );
define( 'SECURE_AUTH_SALT', '{!r~(7YUd0EL(4VAC=B<|^q<hDp>Y@1UDJi]o9@4p0$xH`z)HxVVsy&)K<b:RlIA' );
define( 'LOGGED_IN_SALT',   'ftBv-tnvz2K-2PZTXe{*R^d M;va{<{Pxp ^Ij]+PdX {qNBF[Ry>;Va7H5&}j>z' );
define( 'NONCE_SALT',       '6f Z+*4#~r:/U!b81*>ZvkNFr%bWK{APN#c&vO,oee;fXN>)I$K!S38I,plKTwC>' );

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
