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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anjkt_db' );

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
define( 'AUTH_KEY',         's+UUJFA<+!DfqJOI_^^cTZ|!%72W~4YP0L,>rtiYmn;Kh#Wz?Uly#I`W.tqNw:)>' );
define( 'SECURE_AUTH_KEY',  'jGc+2MVAL`m-fkEq8wM+`~Rp.&&czn=EctdK_A/am$wADz1k5eytJ6~bPpI(:&PT' );
define( 'LOGGED_IN_KEY',    '87={uUgf7(h!o]kw7Z%6s>|Cy>-{<Se0L{f&`V~#L8S9SkYm<9AeZ!(Hw MW?~~<' );
define( 'NONCE_KEY',        'Y0gG~}ghQq}{<O,]$Z&`M[qcv{E@=Vg;m=-v)s@0D;;]R+n)!Q iHp,_XOTZ{wZn' );
define( 'AUTH_SALT',        '?v5wG6imicB^OdmHj{Dg6nB/Wd>@@-4:?niw)4N=u(7;M1,.)@k>pY?HKOzUgx6]' );
define( 'SECURE_AUTH_SALT', ',vZky@<]iIh2<Ba@Ce)ii@cXDqPh@ur~O,I)g;K |kOke$qq+ZjHiE3+q4{p[EOh' );
define( 'LOGGED_IN_SALT',   '?;<eBjamtux~r!4XEgO01ktr4mX~y&8!K~A<Aa[ojnIJnrd ^,{imVg>Cef{$J5S' );
define( 'NONCE_SALT',       'CG,<2:?D*OdX+ikmm#kFOcyCvzvpD!!dxNH+`x,dU}~usFK;lNB9Xi{ wQ!M$n19' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
