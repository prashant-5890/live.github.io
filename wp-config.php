<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'data' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.nE(g%IoqpllZAaNye4DdgQ&-Wn9_c~r=Vl}U43F@E-oF&kdCQhO=/4&7ZtyCyEw' );
define( 'SECURE_AUTH_KEY',  'vV3o({wW.$9f%N_%-)E)k#zAhui*R|ug:FF{vbzpde$-W.@oGP_}POao9Pt_k>Lo' );
define( 'LOGGED_IN_KEY',    ';vb;o<-FP?v$*i)-@~HQM6$9+)XF:L|p5tcOa[y4z4=/*aidZMF:2zKl(j5P89:,' );
define( 'NONCE_KEY',        '.%BZoi{$RqtIVi_rX7>TX,hz)3YqCM#F#7x4:Sj$vh~;BiQny4p6g56!wQ9L6Pw<' );
define( 'AUTH_SALT',        ':XdDx}Drx&U B~#>d%EE-UX5b<Yg5;,{2r =*2S.?ikqhSSzU-8E4ZqPi6~qlvu^' );
define( 'SECURE_AUTH_SALT', 'lWg8he-Q*zp l.vdCI]?c0gq~3a}G1mXyvmgl#nsAXm&,*;zL{5 #YE:Pei/=OwH' );
define( 'LOGGED_IN_SALT',   '(%!HgU+o<MyLzt:JMC~A8eq20g0#&;ynYhDD#wpSJJiuhRs;R{A1biseBEQX aLN' );
define( 'NONCE_SALT',       'XLQyKBsq04<m`g8)x%7+]}].|1E<?L;k>,LYv& :N.Y(:,?GK#q=7.SC2){#/+UD' );

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
