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
define( 'DB_NAME', 'biocipher' );

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
define( 'AUTH_KEY',         'ycLR@R0AA&]O*z!j?nQga|vk-j|p%eCAYq!!l5MA{VU%z1@ccB+#-R03X4bs><X=' );
define( 'SECURE_AUTH_KEY',  'Z-nm74&|!]zdawM-`6|s |MP?1/ XC>.tH};RG^M{2Q5R]gr+os2H}Lhk0odtx:f' );
define( 'LOGGED_IN_KEY',    '>>Gby-Kel*: W3OPR<FjY_<y*8<=kx@VGuzIf}p3myJI4-A$Ru8HD+E8OC6Nhp$*' );
define( 'NONCE_KEY',        '?1BSA#/VAWhqIJB|:?B*.4:!l@nK^s$?gyp3 k>FPnu_;Ej/lkz0YBz#|RM|f.EM' );
define( 'AUTH_SALT',        ']K@e7NejujY+QdFX(pCignm%zXf_+~82)1Q#@gfibM>M@3]=5s;Ui?2-k]Zv(LK!' );
define( 'SECURE_AUTH_SALT', 'K`igN ]/nM:Xg/_H)KFAVj5tm,DnGn@,d%}Sw0BCSf2#}XVgi&L8!d:b9/OJF)V~' );
define( 'LOGGED_IN_SALT',   'r?eO/dE}ZlfcUQla-l7EdNpB![o;$P7_9NbvZ^xc_9i5*:6cfN3u*.=NHRg3/}57' );
define( 'NONCE_SALT',       '^;j@4/vL#F_P^#m`Z2Wh+8`k]xE06Bpa&-wHI-HD66s3IJ@Rw+dnR=Vh7X^|Kx<%' );

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
