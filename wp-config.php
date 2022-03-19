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
define( 'DB_NAME', 'profile_db' );

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
define( 'AUTH_KEY',         '*O&g^Na<Y)GQ|FrwVJ|7o,!gW<!Y+0d;tTh]1RvwYsTE.I2[kk<WrP)x6O}ZT`l4' );
define( 'SECURE_AUTH_KEY',  'bme~mm:F,V0jjLDf&-hqjhq@QeKLi[[$MMDJ+|S5}W&W35X4$6}68*PW%d@]2??o' );
define( 'LOGGED_IN_KEY',    '^YXl&2o.byh;4;]|I~<tBJeNj+Cmd}#HwDa19Tb~P;iTgpM%Avg3Zv7`x_H~5aw.' );
define( 'NONCE_KEY',        'AvqBA !nEpL@G .VP*@X-WOq<r+%GPbz:&_FXA7-IRd[<VW!{Lgms}J%k?8y~vjR' );
define( 'AUTH_SALT',        'C)H+R`A>]P?X//*vok)t)P&49lLwMA|pLD:G V!rB%M1p/{{JIuM> ~V@J<(%lNE' );
define( 'SECURE_AUTH_SALT', 'TZf1>?.NZ9} V34Yg=-10IUhpK7&)BMA>!`  xM`*#,M$|-n`)Qcf]:ukqRtlZ?m' );
define( 'LOGGED_IN_SALT',   '$U1F7gJ.P!|NToxF/Bv3v.<iT;mXl*]XlGE2{Lo#o]}C< l.D%`}DBef7CB&lfXi' );
define( 'NONCE_SALT',       'j(NpA53N:<Mav~o%tl~]rhP/a;-IYY{94$:#QTGSfbZa4.*le6_8sye&0KGt)14L' );

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
