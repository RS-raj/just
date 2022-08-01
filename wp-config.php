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
define( 'DB_NAME', 'just' );

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
define( 'AUTH_KEY',         'RRm,Y %S&o|xY#sd#Yus,Tm?eST9fFYuI;[Quh.9v>YNL_cu|KQ.[VB^gi?>pVlR' );
define( 'SECURE_AUTH_KEY',  'y|pe)n]T!#/[G(-qu~*.Zl*CX|HVpNq4P6HmMN^-~K-xF~>T7VW,/t|f%<2fPnIx' );
define( 'LOGGED_IN_KEY',    'j1gth$fGvm~$V*(OB0cL=*Q.9,2z!sGZ@dtR1HIrPXN+:ev{+Arm$QI%RVWbJ<R,' );
define( 'NONCE_KEY',        '8;J_k5+H)5Hoh1-RCINfkkh]r@RQN0IWQxhZ}>@X`9~sG@wF%rdS/M:`*f*pO&:}' );
define( 'AUTH_SALT',        'oosm5mC9=6_yl:x`7Tat.4g8Z1ws8dYO;pAShA3*ie#M_fayxn[~:6&5Q0.nt@W~' );
define( 'SECURE_AUTH_SALT', '`i)q?6Jd28nE9 *MV<]ac.&bgTXZmr5A;pG0z /k?f;@;h4TWzR[+5>mg6(_[cL2' );
define( 'LOGGED_IN_SALT',   'vjRqGbvv>@_p/O|MPy.oX4vJ_7&*ug2iy&k*?S&VGKGns;0h?0DJ?a~B880gOl<p' );
define( 'NONCE_SALT',       'zq9Uum7m<xK/ZC0Pj|g.~t>v`~/TdqDXEu^x6nQ81AfTMqg=Q,!TZ>L~P&QknO+A' );

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
