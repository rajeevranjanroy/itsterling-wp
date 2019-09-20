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
define( 'DB_NAME', 'itsterling' );

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
define( 'AUTH_KEY',         '|d9>8M8(kn8bRgR5e4.r$Qc2STmAUCcRGeig:V=!q}xD,G+Rcw<y6bBjx?f G[X(' );
define( 'SECURE_AUTH_KEY',  '`| cU*}EK$I6;-^4&x651T5wX@<xhXJ-!B`jSkW;FZDIsZ4y;jj7h3t50IB)ateE' );
define( 'LOGGED_IN_KEY',    's[]xK, [?>{?p{tO`_)W/8p0`K1t}.DoxfaCFce;=C:_y#I(tQrJr0]+^D?.Q#tt' );
define( 'NONCE_KEY',        '7WpJ2wn_h`.(T%N#,6 ^Pc%=v%L%^j*k%;RQ(>}(.}BVjzHuhhsMq**4_E!bou5}' );
define( 'AUTH_SALT',        'D}Fcp`~El!MOf*cl#A+b:n#895|)|IvzQ$qWYxN>(y-PSWfq?^.nTy .WT$BrQ~C' );
define( 'SECURE_AUTH_SALT', '@1~(pre 9DA~uIX@&bfv].eK}HaWhKg5pb={pJ:OYUOC_IF~,W=aJz2Dt<ubv(:!' );
define( 'LOGGED_IN_SALT',   ':H;7l_3DX=WD]AwaKIAEGYj<BzpJb>{6(HY3;%{!m=&Q.zH4ghWc6{]Q7_@J;9Uj' );
define( 'NONCE_SALT',       'LIk9hPZA2pUUOgs~rIDrbj3O`/S)7:<E6(/;-6N|@K$dUV&NAz;ppdlIB&)1acku' );

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
