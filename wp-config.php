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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         's<GW:&N[IXse&@JX#]4T!K%teQk$8CzkT+KrpN=L{}SOjNq}W*3PU<QZdJp)4aW&' );
define( 'SECURE_AUTH_KEY',  'u]5GG$D)fx@!dop_U<#+V}r$MT/M(SttN~|_va)>q3ee-E=.!qFK)NcS26g1}iV?' );
define( 'LOGGED_IN_KEY',    'MN]v.$/t)qWk0q4*M8?!G_H>]IkMkY_dU,1Ti4`),oeszmuX74F!PR}aI$0SE$w|' );
define( 'NONCE_KEY',        'Z]EG%J#o#H%V/!`r!U*}&NZ.-QlKD(is>gfuju&SDc+Ia JlNgmN}60b9VP7q?5x' );
define( 'AUTH_SALT',        'OR=jpO?zb#(?bG,$(cVaK%9_iFp_,$4_T6*bSG?B??YX@_+ (F ;u2|XMIl}S/C1' );
define( 'SECURE_AUTH_SALT', 'A5VYp^+XD<V+![9I>RAM@R]o8jGP= aqS]eZ&<_T*@dSgVZ7<t/*tha6`Y;%W6`:' );
define( 'LOGGED_IN_SALT',   'LcqHH^,3ZM]{L}[GT1_hV^87(#Q*eGW%s(Q~b(sm_F;l3t` &XI+S(Y2Z)<jJJIQ' );
define( 'NONCE_SALT',       'OQ(#;Q:%_Acv9z0(jG4f}^6L/%rCvSfb/S-pCKv5}WGT,B_x}^hP1m9@my!JdFBW' );

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
