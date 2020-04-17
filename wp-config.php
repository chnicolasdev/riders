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
define( 'DB_NAME', 'riders' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?=~|wF$xy]L$HK@U^T>x-_/7S>#xtVYKP):J&+RKM2t* eU4>Q<T_`?:{xl|.Y9t' );
define( 'SECURE_AUTH_KEY',  ' H>Q;qz}3})Pn_R20|XjeSG_Ig$t&m* ;X7ZB=p&^<iokkU7lcg*|Y!EK6|yRnRI' );
define( 'LOGGED_IN_KEY',    'd>e@ot`@6;lap,E[LqV{9NN~(JD!eYJ$x/P}&Q$#+#V6&1@IW!h{`qv-NMQfJh%U' );
define( 'NONCE_KEY',        'MUPh93Lhuy# ><.l[!!+T4$m:Brri?<cgGw{$2?.TK80]2-}?fa]lW[?D(Nz9$oR' );
define( 'AUTH_SALT',        '! Dus{z^`7DP:6ZC`|!ccesqi2][)YeNMfhU[@L[eb@:[#YEHqVYJ_w#Jo/C`;gr' );
define( 'SECURE_AUTH_SALT', 'F(|~P6gCpAGsYw-Y:/gpw j]vf.@q1J[oUIZk{x3xH(P8?Pqa8Mh^a4`-RjN-jF1' );
define( 'LOGGED_IN_SALT',   '_gu`2)cupNe)[#z(m)$R.18#12z1^>TMx+QEp|~QDwPs$,!LGyOnj.5gB@W~}xM}' );
define( 'NONCE_SALT',       '=n}^)I#QD}|%V;~ (Ih_ylcyG>xvH->)h]~i;gYP-@@NOA],0gf7z#;o1fo.EkDO' );

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
