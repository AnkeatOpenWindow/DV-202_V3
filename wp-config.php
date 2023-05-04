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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'oH[z2=<f+X7Emt9N[%//Jo1@JGtoQ;MMX/iDTK%P5~n-%UhMl8:2;pOnExz-s5/l' );
define( 'SECURE_AUTH_KEY',  '}5V]@:BvNtMnUiGp3Y/S_jiJtXby~.Bo8m!Y]hh;;kHzP]L1(u+4`9egxH2{g0T0' );
define( 'LOGGED_IN_KEY',    '7C_#i?UlUT5L;c3r,K=n 6OP}3F-hX=>6~h$n0-gHiOy9P6j^It.6zY$PIj}Ta}%' );
define( 'NONCE_KEY',        '=A+WW$16;f,v>[xdfdwWIgt189cO(SbdFo{Q^Pg{i>HM`+c_LBB3*rsBVf8?n$Pa' );
define( 'AUTH_SALT',        ')(i6^D9pP@k6=JS#%.C|{{4rWYC7_pSirj<}wO,tBSBkDF2M/jf_lyeNrmfM%*$E' );
define( 'SECURE_AUTH_SALT', 'rYok{lA(mVO1j~HpQpUSMnzg&hm2veW]ctw1p saKqF!3+w?fmCQ>81S%wj)m#]g' );
define( 'LOGGED_IN_SALT',   '(Fu0,ArkyskG3)@J->Xl*B~r{!kx(pAT%=(3K^*xpQr*[sP`+l_dIS[Wc=+73P_:' );
define( 'NONCE_SALT',       ',{1;878m49|w&9KK5$+l(n<kkjDw|*6nq@VVo5gs~.CVzAgTpEgBainew)0)8 O!' );

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
