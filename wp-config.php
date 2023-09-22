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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'dk7a>{et]z{$J,2==z}KY^kN!%63N`byB@Q!zr2i(J4K+Xu0|a{,^@$Vt~cvf)]+' );
define( 'SECURE_AUTH_KEY',  'PL <q[gj2N23fo%kDwJggh6}=:;OG8>Si@b,6s2BPGyR][H30)EcXb@j1Z.jGQX/' );
define( 'LOGGED_IN_KEY',    'G=0!bDo+-e@(pp@1GPk!uwiPrGMkIE&g5MyLqZ3@Eaf0u4NrT_VI&Yc3Z77^WI}e' );
define( 'NONCE_KEY',        ' 1$IOZAhwM8NzoJh%Gkwf~E?fBN?%?d2+vq4CbhLL^xSn$J3V&.Sql`X6*K#Fpp?' );
define( 'AUTH_SALT',        'E8C6#E26_G7J]N_1EME:_B6hvJ(CRR?1Ma4GhBbOMCah&:@`0U]MqTnc{0Z( YNW' );
define( 'SECURE_AUTH_SALT', '@c_jZo,/*[GLv5vj`^fXmz`>3aM.44J+&!0[h;,{?J+}9.$Mcs1!R1.7:v[6mrAa' );
define( 'LOGGED_IN_SALT',   'IvE.%m)98.#PP?T5)2#M!}q%m~;TMgqWgc`:0$aO&oav<7dNw|RmVvv>$j?g}HEP' );
define( 'NONCE_SALT',       'M#+JUx{@*VB.l?{NEU<8+aup_VM|L5{f$/1dN,/K,t!qif]$Ur3[@[cAL6?7^9P<' );

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
