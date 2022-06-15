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
define( 'DB_NAME', 'mamo.test' );

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
define( 'AUTH_KEY',         '(y@sm^D /0f!(G38^^4TG+2k>YK%,}TsP2bi}/#d{@e=D;Q;{w<e{U:*N}kvDlKF' );
define( 'SECURE_AUTH_KEY',  'AA%;@ j9_%Nbs`0H,3S!ik01!3pY>-3k&aTK5)4M7=$L$]jBSVQH/6`p`c6:#YzC' );
define( 'LOGGED_IN_KEY',    ';B: kw0CMuJLDcfJ}[CHO|xBS@.3@D?J]& zgI3g0^n>^jtFQ%Nk|M02<?$4H!wB' );
define( 'NONCE_KEY',        '!R4o?H.1&=c4f:.}~(OQR}@u4(N#Lq]gW,GhBQ^K &~Nh,DeV#AZc1LBVlUyetvq' );
define( 'AUTH_SALT',        '=WyOBwk7d6#7=?{sbH@;,~5+Uvux6!r<z(.%,TWET&g$%XNka0f3W3@9y+t*}i.X' );
define( 'SECURE_AUTH_SALT', 'gRbr=*!j37x]Qoud(H{=@BGp18<Qd1AUk{/Q!g!~eJE%SN:(1_.shI4U&RFlIJor' );
define( 'LOGGED_IN_SALT',   'cuMY=#r>-A:yZkcQbHxI,E~B(wN!HdVkX<fZ_TI9]WGjUQ:}OH_<&MVR?]#U%zuZ' );
define( 'NONCE_SALT',       'du_b$|_A>~CR=mtR4#=dE~<0l/nUP)y*n$*aE7B>HFG|0Qz]h{`[6:E]+oc@a%,,' );

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
