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
define( 'DB_NAME', 'mywordpressportfolio' );

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
define( 'AUTH_KEY',         'rnjWem_/k(CdN*yqj,>Upisi t[({}!Xhd*_)XnXn:cXG1EU*S0T2c@r7T*mrJ~B' );
define( 'SECURE_AUTH_KEY',  'NP_fOFU6)wG]:K/&kB)OeS,vt8i^QsYS]Z@8E*8C+vr_II0I0|Cj7>5QMVRriG3r' );
define( 'LOGGED_IN_KEY',    '&sDW;>%OUdAuUVp,7pn-X)iYvY-<[V(3Q-+JM<>Aa*^v=KPe:-?xw~5GY;#I<EZ#' );
define( 'NONCE_KEY',        'Q Fwj?<V~F{_I*hqgR7<Fi oG4SqeeCsray.LCWIDGGSSC5{%N]K+r3pr^Nj7@T{' );
define( 'AUTH_SALT',        'z7fsY32r8.WNk3vpnRaDu{|SUDtrtcN^K6d3:(WsVrO,<l2WR#b+-WH!7UGlHKeJ' );
define( 'SECURE_AUTH_SALT', 'v#?N >}YI4$wNIZda{}%8Z4?-tKM8@hW$`jhM*`A%n-NE~` {=TWT/w:t,{?Xz4v' );
define( 'LOGGED_IN_SALT',   '@_.GUQN)t)eXTAV`>?& Hg=s&x;8a{G2s<D?&+0Qw.;k1H-O9DlF+4v1gtj7af|9' );
define( 'NONCE_SALT',       '`pXPxDs)>w#Y%=Ue2Wu3:j]0c;={N!GTbRV|i6cpPTUifDaDpSd:`!2.PbqcP@^T' );

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
