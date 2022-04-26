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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webpon' );

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
define( 'AUTH_KEY',         '3/HiCUPAY=|&PM]ReWE2N(2z+YuZ[J_gMOf0/3/]/6UIxT?yWVCd~yk| &SU#oqJ' );
define( 'SECURE_AUTH_KEY',  'L*cf8LN4tK*w[a+`]-9c#WQn!KU8,c*n__%QxX,m zgjI8v+,vy^,%]1u<_JmIQn' );
define( 'LOGGED_IN_KEY',    '],K8Sv9c`e$j#<byB:; Vn/tW]<]5R}NrwXVzWieriPPewl[b!z5-{CdR,NxE -%' );
define( 'NONCE_KEY',        'ie]=!x}0[Y3#P:n Y4m+Pb9DVG>!>8ft}5;.Tm.v+?u:t4-F_6e]INg6LTPTWU?{' );
define( 'AUTH_SALT',        '!Ac^H%.CFl?Z+^5tb!4j68h;/347@5Xq;5Ka21 N[?Sx&Ucy+(.)tjbuXPiVp<6@' );
define( 'SECURE_AUTH_SALT', '[qi+5^MJXei<#^t^gH4yYy!1(3j[HNlJA_Ku1NF=]__g>l>{<meg[UC#/pvj}DF~' );
define( 'LOGGED_IN_SALT',   '~zNd $.u9; ;8b;B5rT~GqvuU4CY-=R%F1^g# <2&?+8+:C`BR1x^-)B21!  wpG' );
define( 'NONCE_SALT',       'R-n:NVD=bmSE1ASR&MJ!.fvojnX+Ap~RPW+Qd`TWJJvW008*!o:fI&+A_:}CO;25' );

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
