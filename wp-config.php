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
define( 'DB_NAME', 'gco29730_hoasen' );

/** MySQL database username */
define( 'DB_USER', 'gco29_zil91490' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd~3m4rT7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'p/a21xRP$Z7q,q`&u0I#>CsJIR_2.#s<d6PEo.s8d@%$)i2X^&AQ(oI|F*2:N9~I' );
define( 'SECURE_AUTH_KEY',  'l:HoVMIiSo+7k(=M^i?0Bg(ALoTHU%?y{~?;Nn+-V*q:lpY+ceVffTw:vL40W(ah' );
define( 'LOGGED_IN_KEY',    'QCD;T@c`0+]hm+B6q&CAsA0}d(s*WL2T0Y%k|,!3eOmaktG6~qaCNqlsG  (>#%a' );
define( 'NONCE_KEY',        '^GQU37<e1|Di%7gE>j_JviMiiY/mpZ>zk/SYxWA<_t#^*zEiuR;DJ%Dt#[9R<TRG' );
define( 'AUTH_SALT',        '3E2u<3Rj8Y_am+m,g ns0{ A.lR,K0?D{LA)UaQSY2f/6N-W*z/?fuz>h<Ma#8=}' );
define( 'SECURE_AUTH_SALT', '9(z(|^xR%U$2 >)T+H$7/|P/-bfz%u&nBD;mzh?^v,r=E:ub|eE|Au8sdQ`3HxnC' );
define( 'LOGGED_IN_SALT',   'y N:infwGN1FnuW.{[k<aB^w|R>ogNTD<ut}o@O1.GSe8/0Hq4+Cc3VdPY/9dKTu' );
define( 'NONCE_SALT',       '34U=15q&d}rzQzuWOQP;v<Dp%yf TsDa~MGT6!bv{LS;j9gfqrJmts0(7Re}y?DK' );

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
