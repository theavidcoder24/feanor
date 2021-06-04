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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'feanor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'PRGZnaov>KH|0h s}Fsc8pGo!<OL2._DF[7})km&#eBK:h1Swq[av+m1HNUZEs23' );
define( 'SECURE_AUTH_KEY',  'UQq@UmQc[2K$L4/F&:Kh_<J<hh33]smyFW =bSMV9fuF-IMeKslNd7~[b!gl&bT:' );
define( 'LOGGED_IN_KEY',    't:C%Ht<4,(N &jt~x2Y-!ABs_QUO#vO+XMB]2gv)WK2-oCqV3IEV#/]V*]3wM>TK' );
define( 'NONCE_KEY',        'rJ;p@4NFHLe^2JFoJPscW15@#<#gSP+6q<X,KQ!fA-l3DqfH_[Jizt/|TWmwDCw7' );
define( 'AUTH_SALT',        'A~B`<9]Y(onaj{/=+T,],nadBNmO/H9_/=y ,SPiUcO?<A?r)n%4/+~EQz+;3I?P' );
define( 'SECURE_AUTH_SALT', 'Sb&}z~;)L807RWLkb99z^]U$c@Sslj@@*S%TBe 5nqFDkJN+6())5PdMo8$aMvT)' );
define( 'LOGGED_IN_SALT',   'Y3 GKDg]92@fQ>w<M;_Z&+/#}RIo*lpR/O1%@G%tgI(C<HAV[1b]w1p50&SGD62N' );
define( 'NONCE_SALT',       ';:aC.iHThg|{)x4{5/z_7,yu9>o](<+d[kD5<.x2U2>&DarH3H[hY!G@{Ak_P$Gy' );

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
