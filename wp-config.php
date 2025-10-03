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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'semana07' );

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
define( 'AUTH_KEY',         'j(G9@hll.iXUYx?vpY+.vZT]<h6oNg]g64rh]6{+^5M^?{c-5On&[FV7f!Q,7KIl' );
define( 'SECURE_AUTH_KEY',  '[5zkEiRWVd ]cSj7N|j2^7Xz(KdbX6a|7mh7!g`YU&q` yfE,JnJ~pu,Ke>MkPb~' );
define( 'LOGGED_IN_KEY',    '9-bRUyD?@up}Ks>EusdZQr9`^X8JWbWI%k>>Gb9@UN~ XletL5@R[iCuY~>rB$]-' );
define( 'NONCE_KEY',        '#}+T8g6.{F1!`7Cp)_01U8Y(|w$a9y1Iz)|mSfPbe?&M#&$*9C?D;-&]G<IMR3dg' );
define( 'AUTH_SALT',        '.].h_:J5zEAD_k2#cNDJ%KYXKW$JVW?VIkZJ)Fj0D~tu?Cj,eOUS{,3D:I5&-2h~' );
define( 'SECURE_AUTH_SALT', 'M0:(]@)a6j_RYx)bxd0o=kZn<<z`.`V;}cF3P1sm+z.34Rs;vy;U4x9!]UI<Oe^N' );
define( 'LOGGED_IN_SALT',   'L1yA6sLLFI MjJlbKGq*s|oBD$_YK;oi*1x0M4%v `xSylBy_%Io742}a+Y[TVd!' );
define( 'NONCE_SALT',       ']lS?6XX9VONv[R}f!08QdpRuHu}QpuKulKc#G/X75(fouq`K@<)W)=ycba#.c5hp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
