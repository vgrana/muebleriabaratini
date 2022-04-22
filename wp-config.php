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
define( 'DB_NAME', 'bdProy1' );

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
define( 'AUTH_KEY',         'W~xwU$B+ulF~(04?F|C!PyO-7HY#?IJAANGx(?v[c8@9O>c(AhH0SUbUZ%,!JRKs' );
define( 'SECURE_AUTH_KEY',  'A|M+eG<BCEG_Z0nPi5)zb=4,bX 4PcC &S^gZ=JE]!-<8mFDF)>w.QMn[i03O*z<' );
define( 'LOGGED_IN_KEY',    '}H.]HXX$[NshUtni-I_lE$FPbx++L_F*/:Zv[:G8|;4q^^>|hz[:CA;zaG|RWR:3' );
define( 'NONCE_KEY',        'H0Xd`b?+oc7wT`NkFjR#;5fa{bhftx[tG5#SldvKQc?nk<uShI<g]Gi{ADhL@A|J' );
define( 'AUTH_SALT',        'V,M;5X85 AeV/U{9p>J@sAW0`Z##JinAwlZz@M)V1cAkQxM`-:CO _6+^JTDz`L#' );
define( 'SECURE_AUTH_SALT', '>(Tp[;e^P0D6;t7THa3*X,qlsGE#T|kZXcA//5:mMS4y87b.YJ(O~,qfvwz!yI:@' );
define( 'LOGGED_IN_SALT',   'Y%Y0pQ,(Pdbdp`BN2Anyd_H>L}vIwK8$dkvQ[H~%QsSO9!q;Px*$`Ga^c3zfi.ao' );
define( 'NONCE_SALT',       'nb^%d6U&W9A=QEEUy(o;Zpq~nN K)6;/x]!)!U&Q7Yd2K%f-x8f!iG5%L2M!>D<$' );

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
