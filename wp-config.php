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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'perfume' );

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
define( 'AUTH_KEY',         'iO+^CqV}yG6SUX?+V@J!=3B@0~d]T1-*Ng7,WH^-+&#nSV?EB&;g09J;0s#4poV+' );
define( 'SECURE_AUTH_KEY',  'Edaj+2Kg05.`!okQ)5GiHh~QV:*L8O9UP+F,R(,y10,3J|^=zsM`_zb1w]Jo?OL=' );
define( 'LOGGED_IN_KEY',    'ga_+[ocn+h$1`,{F#x`zw2@xZHbM,.mE{0Kzp@G6>yt$)yvq74/`&~~;3L5Hlhwx' );
define( 'NONCE_KEY',        'OvQ#M)}AgqN0Zhs(~Ip,T0@!Lv>*$o5#z?jqzSK,VaVzbjoGo18(TB(1_NI69=B`' );
define( 'AUTH_SALT',        'H`&VY0J<gzw&n_h^tF|Q~`46jb50xF<A(^Xh1$7` VV>Zg,Y``lX}]I8%0(y8{Sp' );
define( 'SECURE_AUTH_SALT', '4(ucF8,mGH[~OHS9ieHm9eFe:&b*|ih9kC<h*oGs1IDf]:fEZs$1JJ$~3Yud]s y' );
define( 'LOGGED_IN_SALT',   '.Hc^+b;{#hknPE%&tco|n,,Mju$1B^Xd36<pfKs<+pT0@jdlz&X@a-Dw6YI=^U):' );
define( 'NONCE_SALT',       'XTFSH%>J8#?=0E!KA;GBsy*0E+tTlnXKN6@~>9.(<):7vQB3tET!c1RD12@Et_9m' );

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
