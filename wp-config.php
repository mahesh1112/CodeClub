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
define( 'DB_NAME', 'codeclub' );

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
define( 'AUTH_KEY',         'K?/_4})XznuFz5Th]wl=6j0& X#h~9o26DFAblrXe&yih{DCu_,aFe--G&iIVWNo' );
define( 'SECURE_AUTH_KEY',  'D,MLAFK|IcDLIv%-B[]eq;2hGcb>QJ9Q>hIXCT<&=XO ~0lG$F40VY?`pJFCw2~#' );
define( 'LOGGED_IN_KEY',    'CfO0NJB0E]3]/lIx[YPIDyLSC>.NpC|u|S[8~uD|>$WYd3@Uj-(U>A8WT@e9)dsL' );
define( 'NONCE_KEY',        'EU@v(doRUPJ-;ao7W**0Qzd^J8yW]Vg;`~Nbm;^.EJy<J^UY, ^v.E2HWWXZMi]m' );
define( 'AUTH_SALT',        ' 8>9v<2K6pYDo|LYbSy(^w6JeH^{OQv3oAPn.Cqgp16~EO>ZG<iJJeq$XESZ-Pan' );
define( 'SECURE_AUTH_SALT', 'u$wTvymbaEiUb]d6:!gUT6`s+#s-qM.BxpCo:y_{W2Ex0T~bVwu2wr6Kr^GCj^f:' );
define( 'LOGGED_IN_SALT',   '9ja&de~~+nSVaL[,pkYz`JNwZ,Jpo|j$Ws|$^Pt9m)X`&CCf`|[V{LA]$-y Kvc{' );
define( 'NONCE_SALT',       'u3r^/Ym[S#/2)^nhN1TaUl,p;#pjEy/7QZN6%zEFONcEzA5%5%42kfu~li;ySUI*' );

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
