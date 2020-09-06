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
define( 'DB_NAME', 'wp_randomgeeks_blog' );

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
define( 'AUTH_KEY',         'C^GV9>Ns=e>)7Ct_<sz_R8a4wH*Ku9-iR l,dN#ftrb4fa|dfWc+,3(l`[}9p2tp' );
define( 'SECURE_AUTH_KEY',  'hJ9ELG.^5mHmNoO~p:GT~7mt&2;+nsrNG!JG.%7?!1nu m&l:M]hWTo]Kp?0kFiz' );
define( 'LOGGED_IN_KEY',    '`r^6I~Pc#2e|u^/x|Gb[~j>o;meV)+1{Wq=)*xh6l+@I85zVn^w%^zuA-f_jktIR' );
define( 'NONCE_KEY',        'Q<95kQIj~I:z#,(8`*jT0m6B0gXXtu5y)YKh:Ve7#):PM6(zbA0nxDnw(*BHHCFp' );
define( 'AUTH_SALT',        'Uo/xa=8@=s?#xwpj,-AhT[+JfRb)2tAn~tK0li_j.#WfyGD:g|B2gSU(#zLlxen2' );
define( 'SECURE_AUTH_SALT', 'l|)K</{]|yc3VJ6L*dEas 1433/F(yGA#{d)1tSg1A^!rf8#-W1Py/W_SbSC78,`' );
define( 'LOGGED_IN_SALT',   'GcY/TJdqM@aZzBFby+.kHf[Yj0z!pJH200vSK@[6.`hk(eFzbjaMxk*df[R,-A@n' );
define( 'NONCE_SALT',       '{>u+[`un?wL%Ir0YZB-iIvpY}RNGmrIo[3M1Yd=!rC0hvHRoa,#4Voi8u!7&`$U`' );

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
