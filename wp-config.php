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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jonidb' );

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
define( 'AUTH_KEY',         '=Ta<J4NmEUK!T>f8TwQ,Y> 0<^~Zai=W.;#6ZoJX>=KR<pFYV-$|6P6?j[t}6|3N' );
define( 'SECURE_AUTH_KEY',  'OhnP7+8V4pHDcfC[[rcd;Z3z!7AZfClb%-1fI5GTFv-WsL4l)(s}O4NGF$53b99i' );
define( 'LOGGED_IN_KEY',    'et]GZt<;~;GQ0?Q&{ymVJLR6/EmON@7zuW^Kfs7!ql=1TLx^-oCMqP2Bm+]@Joe2' );
define( 'NONCE_KEY',        'KK?:OeEj>R:]CO-i>{V]tc&T2 _sflioDys1q-mG!Q7|kKGcs-QrsIF?h4D/=#dR' );
define( 'AUTH_SALT',        'cE4NT-iE~v2=bN~W(n)j>^~NPQTn2<:|WCPB;q-nw+I!Rt}WP+$=DlG.1ycd`y.1' );
define( 'SECURE_AUTH_SALT', 'u!w:q)r-&FmA=.?Xe9oyu8%zxO,1bman, RI(Bhg6LPhV/xOd|2z}{bB#+L.05[}' );
define( 'LOGGED_IN_SALT',   'S61nsu8q ~jshKq Q`iBZ;5J!x-RLo&St?,zquvUZ&|<UCda/4g,UxtwHpJ2PXoL' );
define( 'NONCE_SALT',       'LDcgqv5!F6L-q=w~S&=K&4$Rs2]M5N1^vL6m}WkMc$o(ArZ2tu8{t|:Cy;m3grUd' );

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
