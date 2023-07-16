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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avykewmy_user_frontend_blogs' );

/** MySQL database username */
define( 'DB_USER', 'avykewmy_3574_cg' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Digitalindia@12345' );

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
define( 'AUTH_KEY',         'w$ZT TCh)#RStI-uqQy7Hp#Zry_~? LZZ>AsO$>g{t1%DE/_/Qu=RP>rq%)6LT$*' );
define( 'SECURE_AUTH_KEY',  '?aV2,Fv>3nMzy!75qRrA_b-b8<Ue[aLV]p}xl6$<YIT/ v&xupr NOvZod`XWt^#' );
define( 'LOGGED_IN_KEY',    'eD-[,YxW[UA]+no0gHB,(U|Zxnd^vnB]x-,,+x)VN?v5yr7,a; o18lqxPCDsWV]' );
define( 'NONCE_KEY',        'Kt_k3o-J`7v&rBmE;l^,d%4lP!a>AqZS~=wF=(RtVNO]j6#Q!*u`TgdqNLTYD)VJ' );
define( 'AUTH_SALT',        '& @]HYQo(/gc2`Ibw-i ,?rHe<>Rvn:pDllok3m(ofgJwYc7_}xs[r9kl93QpWxE' );
define( 'SECURE_AUTH_SALT', '|&g sCps+^v>+:n5aJSk f8bOEX;Hgb1 %MP Q]>XeAiL*c*:kr|B?$2?c_;1u5c' );
define( 'LOGGED_IN_SALT',   '{K38/5v.e|m }=sz1qnidyWm0EAr@ZGNL(/F>{1Gt&}c4(.M?=cnner|<bNObYaW' );
define( 'NONCE_SALT',       '[w2kU(}8RrT[E}uld_^E%jY?h.#1)U{L%wDmlB4(4HqegycZ/(:o@V7<jwTP)MwQ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
