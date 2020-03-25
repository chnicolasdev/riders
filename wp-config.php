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
define( 'AUTH_KEY',         'OxLWlKh)tN!@q[*cF&*hy*KKxp%FEmW*L.wgVz;(`}+tS&Q(2-gvh$TSP:&Y$qD>' );
define( 'SECURE_AUTH_KEY',  '7GJ &k)/j.r%9_6Uw-*%]~{AkMZ!:$yK.pS(WABf:ZuH<Kyaa`g<+e_Fv) 4Ts~B' );
define( 'LOGGED_IN_KEY',    'q!$&ut1yjD<I{!,&]L64W:kO_lhFO.<}XTF9gM:vpZWt}{]$RZMu%2~==G3?jZLu' );
define( 'NONCE_KEY',        'OjgBCRV{0]Vl3Tso&X^r9X!^^+<v_A#/(J&7GN Cq=r:5`YVy3esYh:IAu/c7iz0' );
define( 'AUTH_SALT',        'j(3P_&()`TAvrp=rE5*yrtxVe|W@SKKg9jDWf-/R8D~SQG]=U*hXCGut1d!uc1)v' );
define( 'SECURE_AUTH_SALT', 'F-PH}=OKIR[](([gR)ocTk0Q7(4A=:378N`w)(X*yR_of?xz?v]hL>J<6,:.FjtT' );
define( 'LOGGED_IN_SALT',   '-qFFP4|Y]h|V&00-k9{Kd>vDW~Qh}YkY3`O2IxIu)T66E8V|yMz=pWf-*Z]Hbiz2' );
define( 'NONCE_SALT',       'NG_Nw/SM8i{uq@K#S7[lL?H?_Q^LtSOlH.NN#UaHS^aNALY!AZ|oZ`DseNyc|7}^' );

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
