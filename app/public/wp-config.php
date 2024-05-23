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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Lq+&dW}@U0>0*Y8yEN0$r&;XAn{BKiIGM^;>QF>-V.^r{=``Ht}}r}5?]Wf{@GNJ' );
define( 'SECURE_AUTH_KEY',   '.?Pj=E0%!=?EO&-t~0F[$vU2=n)OT<W]bdDl,-b$=$R-JM1>|H{f/Cg+OD!<l{V%' );
define( 'LOGGED_IN_KEY',     '?IsBGuXbb%kPR[#eRj`ZfiQf:]%uJGcZ|E58B&<!|xR-Pc8:#aqNTVm)4+%[bxl<' );
define( 'NONCE_KEY',         '<[HBOmPBS)[BGLdb( }XtO?<az-vOoZspFL7t3DFS9iJjFoh>2_*J!,ozf&qH`4p' );
define( 'AUTH_SALT',         '>k<IPTCqDp3+)$ZrMl+5@M*eE.>Z^+iWM$(WpX`Rr`7[BLPXHD%_CasP/QKFQI<8' );
define( 'SECURE_AUTH_SALT',  'idnoYfQt/yp*P=t20n#JwX5~^&VB<mRa/,~%kV*xl!wh%6rwU+#g5.+76j70n2Td' );
define( 'LOGGED_IN_SALT',    '*m~GcV_*JWA*3q&:?~ovXaq/&cKAwf:dSgl=QQtV[iPhTMWuL3~]j~g<QovurX1Y' );
define( 'NONCE_SALT',        'phI^0sC3<+>ib1VJk,74#Mj)FM`F gBXb))qP+.tI%RznlIem9Z#q_o-T6y)!b(B' );
define( 'WP_CACHE_KEY_SALT', 'l(w8F4.]w421^Q3s+,uvDIwkc.zS=!p.Q7S.g+xP(#m}Vf}x2VDTrav@!a#(F$r^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
