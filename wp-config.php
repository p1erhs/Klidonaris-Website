<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'klidonaris_db' );

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
define( 'AUTH_KEY',         'mSa08)Y`7+(rMuH/=I)CG[[=}IfX#972s4ErfM><#VgLE+*%~QeX2dPX#P!5);g-' );
define( 'SECURE_AUTH_KEY',  '|6^@Oo%b$$y63Z?g[G>`]wg2yg,x?Y9a@A#FZu!p9zV |K24`?JSvSOoP#b}:,c#' );
define( 'LOGGED_IN_KEY',    'ZYc2hQa8kE=288xeJj*y@y}.<av6]cSki!DfBV?dQ]_JxPa<_0?8X@(J#nvd3G^f' );
define( 'NONCE_KEY',        '-*=nq`:h_vQ`J^lVTQva@6_;Rluz40|Ys^?<17$o(0frV$=C9UkYxK{ko[<9Ck_[' );
define( 'AUTH_SALT',        '{` $9}/chn!EahZcnP R4?5,%{L06wA/h_]Rb]F;6OXidAV?1bm2bQoPNq^E |VP' );
define( 'SECURE_AUTH_SALT', 'x2h-8=FG&pcJLvH2S-vKtVUIn}CJ.mtY6X1b|nKHD#3Hf-e.>/6|oskBr(0~1 wP' );
define( 'LOGGED_IN_SALT',   '@L*>EZ/dUVe/{H%jh^6#e$Q<!^:%*?QjqBFci,q -u]0U%<T3u)B-(={z;}G{RRq' );
define( 'NONCE_SALT',       'xr$jJx_iA>@6A[rDr)#50;qPy?c}sD.Pw595zGi#%&o)^e3Omsu<d({l.=vF)u$v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
