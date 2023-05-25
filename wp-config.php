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
define( 'DB_NAME', 'mohammed' );

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
define( 'AUTH_KEY',         'O)cDX)A3?(W[m1f6NN QaHY:hN:{@c6!D8;%um`5X[PgZ$Fts.UQ~A!drVBa}F]P' );
define( 'SECURE_AUTH_KEY',  'v>v;(nG[tDUAq{(ISv(JLOi]n/.Nt<kda[` Dyt1Zayf|J9wK-%[y6/z}XD$K=]h' );
define( 'LOGGED_IN_KEY',    'vzRgCT7[S<nY6pcL80gm&n3Bf=H^Fe`eI08eftRhM[wJ4lD_nXcNuzE*qyOc.-+L' );
define( 'NONCE_KEY',        '3Bacg.*&0oyKIJeTOxzQ]dm<nK$>F$<qf)<y8b-5a|`YNfb{k]rt%1CrM3}5M@/y' );
define( 'AUTH_SALT',        'ZIv565;(y`wc25cd;UbBT);T@WiiH/ u7:5!!9xN iX[AdKoD{vYwEG?Ku~cj!Vp' );
define( 'SECURE_AUTH_SALT', '+QuT<t+C3@@A)PgD7.@Y@54z`:C!)dbT#.5x#*b`NWlysx2jr +3;HcT=$zeM`8j' );
define( 'LOGGED_IN_SALT',   ']<+n<e|D38AMUF<hxAlaBqRL=sj{-GE7^7q>ZoTw|.m46Q&%QMllJLtf2<XLY8AS' );
define( 'NONCE_SALT',       'cq+bW_2?yAEka%V9mFcP4];a;ib_W)VNxx$);Gxaa;`5.M*jTd_Y#a_]:a5kyua2' );

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
