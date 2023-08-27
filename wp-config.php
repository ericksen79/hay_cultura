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
define( 'DB_NAME', 'hay_cultura' );

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
define( 'AUTH_KEY',         'WT3@?xV SZ&dRx|8G)nfiSio`%9Mf}8oa}S4Dd6E4YS;8R;+maG8)xo-k%&@}:D7' );
define( 'SECURE_AUTH_KEY',  'ANpw=3wI]=5[D:#StP4(rR]~l1Z6 k7`75NroO(Tc;5o>([I;a6$A$ q??TIzq4U' );
define( 'LOGGED_IN_KEY',    'Mk`/FkRT4a)[@ILq)Nuq%U=>$P$ FN`FVu_gkWc>GM7<W8yLiL$CZbfx4x*H%yQU' );
define( 'NONCE_KEY',        'Wn{K{HAKnM7sku}}c-?<g=G&8Wg>^8(3Y:{Tu.7&1d8bBBXm.x=Y0Xp]>]MNBxF7' );
define( 'AUTH_SALT',        '{n-,F!uP?2v=/i$.~%0DzcF7r99m@V(0^NHr!<;s>nmi);LT0F2x#P!h9L;0W1^q' );
define( 'SECURE_AUTH_SALT', 'g x%kTfitrZ3Q%*D.UNffujvrJvAn2,IOp3)?fzsI}&Z~[8{u>d}N j+7)qP/Jv9' );
define( 'LOGGED_IN_SALT',   'Z!@`^;+&R=A:ab7soz2^LH*)YafGqY,#9-E;qF?iI$-e.Kh+r9e9R@WS t[eunEO' );
define( 'NONCE_SALT',       'pL-vf<1:B+S7w-rG0*KB] J-|Hi6 RFd$T%@PBJ;aepgp1EG! }4nV&M]O CYb!r' );

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
