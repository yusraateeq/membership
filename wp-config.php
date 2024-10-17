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
define( 'DB_NAME', 'membership' );

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
define( 'AUTH_KEY',         'vKwA~Q|.48y04 !TPy`+Lm/CC`T+H-4Di2&.s<W{,T+!:myuA/gwZd`oH/#M}Ttl' );
define( 'SECURE_AUTH_KEY',  '}cCq4(X/%5K)LQKcQI*q5lj]mZH;IJ,h2%lMGIzygOS-;;RBG^T=2QWicNW2-=0e' );
define( 'LOGGED_IN_KEY',    'L<6RYTRp0}{_PhtmlQS:%7C$(vCFEc}g8,Gkh 3J=QZ,5q.M5Mp>w3Q.|l*V}y`)' );
define( 'NONCE_KEY',        '/shn[U43Cu>v3~.&3!t *:rp}GsD5j*0G6YK~1]VQ}C$BnM|rp #uPj3KXUVsr&U' );
define( 'AUTH_SALT',        '3F&=00_k3?$v{gx;ou]+( (kKT#(:&@eUZPS=)7qc@RnJP>GT?%lYt`sMt8>XzPM' );
define( 'SECURE_AUTH_SALT', '~j]{t=Rs~T)(0vo6KSV(n(yKjP{hL]-1Pm&!)HtZ5q?chljS#q;GE{iK.UL)SC.P' );
define( 'LOGGED_IN_SALT',   ',1^;4mwfT25(>hI*)EG,oMu)AXHWut:(IW16!lUj/9Z{p1YNamo}z{JRamh<H93u' );
define( 'NONCE_SALT',       '/v!|(uen#KnW-Fq0p(KZooujC@EQMy$[6Mlz^wF>RBa>JiV#?JiNxwul(#@~P?k>' );

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
