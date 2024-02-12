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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ALWADEI' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<dqB&w7Ardb,JF9o[L9ijpDRoKh1cPD$CW+|Ok2p{)KmtT=/u)`*5H>GJy~,-[.K' );
define( 'SECURE_AUTH_KEY',  '*kc]?:m]M,-,@G^XY/.dg)c=~k{X)88nGmw]p`sSI3$e{nsF)BLOXunEd$~#yFoq' );
define( 'LOGGED_IN_KEY',    '1k_mZ8t>Rl/t,f)<)s@^&9AMo=n0;=T|toFs:z]/V1u*[S^9Hcu8c@E K9b^:T@d' );
define( 'NONCE_KEY',        'K$O<X<><B0jpUzRJj&*nS|>g)]:s]`q4eHTe3dOlZVk48LN3C+s[#5048=HZnWLQ' );
define( 'AUTH_SALT',        '2,p 6A{WbU4jhSt  F4NYK:~cUf9<IMLp8?W6VNg0GNu2jpL6 kEm`/p2IB{Qb=t' );
define( 'SECURE_AUTH_SALT', '):iDpJxm]zrCNr^C]wPS-nuju{pZyy.=vX!HJXrmX|L>bItj+ovnH-&T`h)~#2VB' );
define( 'LOGGED_IN_SALT',   'DLJYe{MtiwkI(oXungIC&m3B57?6a2zf/]}hR_0v&9ycn6Y:}X.6f{eBr0Cru.gf' );
define( 'NONCE_SALT',       '%wbd<NBy)/@=0.*YWnGMyRd/Ou5lE-at<?DW!E.vi]2heN #|#t*{SOr&[2L~vq3' );

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
