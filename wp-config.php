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
define( 'DB_NAME', 'theamusedshopping_db' );

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
define( 'AUTH_KEY',         'zq4Ub>](}fWV2$EIpM(<pzeXu{;I [&YDZ{+,-`x6zhdY5$%2Q)%y@.QVib#4Gk-' );
define( 'SECURE_AUTH_KEY',  'yD&E(eMe^R/XkqHtDD$Q&%j$4$MB&o6/hsYe9D@m.bHrfU;>9KSs,>OVo-@r3e4#' );
define( 'LOGGED_IN_KEY',    's-U|%q{@E4Ok,Q<U2`U(pXKDj.g$*v?1ISWD>/1NnlSf#zp=71(4amNFJ+ahMfeA' );
define( 'NONCE_KEY',        '&A{7HlTwX{RJ])wN@Z/hwKLAUMzoVbp3rxP/w}C-<:$Lm<iHL^ph@@n=^j4@D 9e' );
define( 'AUTH_SALT',        'a9wO96f2Z6<`J5IC}/9_hn<093uFH(XA>D0b?xTP~n#j=U>~LLVZQP)o;^5&8m4Q' );
define( 'SECURE_AUTH_SALT', '.,jWo^9Kk|O.Y#P@EsjMz5aQg4FNX69#$zcK5(`8` Kt^SO<jH2t,3$=I*Ax)rp<' );
define( 'LOGGED_IN_SALT',   '8W[3e1wV#unBIneKJ]4X]mCl*cQ[A)HK_yl&iS`v?ofP)t/2yAgYj:?PX!/x$]Xe' );
define( 'NONCE_SALT',       't */fN^S7eo:/HO)m:|qY_X%cbQZisc^$XZl^7UWQ FjG3U^-F6W(=)m{ypbwE1D' );

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
