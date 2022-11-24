<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'Pronirob' );

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
define( 'AUTH_KEY',         'b4OypZN|IKW&yC&b9;*8hzf2^uS&Zboy@(3Z5VT;m;]D,Pv^Rb}N*OzyRlG%qiZD' );
define( 'SECURE_AUTH_KEY',  'CMB]_Iaa`/g;-b7kg*wo}.zH`^OcZlz+|E!wj8~+#&1gD9C46A+mnhb%SfCIO#-`' );
define( 'LOGGED_IN_KEY',    '?aP ,nv[AR?E#;JN [:OW(f@&z8s<Q(!=#ON*2L?6It},>MPac8]0E)I)10W:jN ' );
define( 'NONCE_KEY',        'Fk<g2f+Ttyblqb3g^De?V*| tmm0bdoG0PVD>M,]4zvl4&P@m6iAj}5&$i2~UNdw' );
define( 'AUTH_SALT',        'bR*n_yWqyt>LDg1G4?{5-2;O&a!c|MuPPlKGF{5I0EX5?aNhTrG`/!9Sx]S#Ou*i' );
define( 'SECURE_AUTH_SALT', 'nHv.,mY$3wd3=$1_zU `XX?QL?~~CCQ HmPN1%y:!%(}BCoy@gK{1`yWO@+^B0J4' );
define( 'LOGGED_IN_SALT',   ':z!:kqBcIyw8OARITL>X[X4M?4D;zy?8% z`1OT{]o&|a;c^XA?[!E,>Zrf9OoiC' );
define( 'NONCE_SALT',       '.s}d{7S~4  6/G-O6s][d/U0,M;h-IhsCQ+fpQGXB`%mZcO|(HxDB,!,:3Td?m-[' );

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
