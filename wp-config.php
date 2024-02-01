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
define( 'DB_NAME', 'wp_table' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '((d#PTr#ok#/kauzpj.r~wg$VLh/T[V1bG@k<V=-$1R.hS-olMB/CV1Y dVfx2X*' );
define( 'SECURE_AUTH_KEY',  '8BhJ}{g*;*1CBGfIr+Wk;n,uk~1#&}`x,wu2[lP]UMF<Lg]aG~7`B>Y[BX6LzDt&' );
define( 'LOGGED_IN_KEY',    'eW069gfE0x4K9>eGoz1V?nww<x?a/`VLQT:%cr}^|h~F$n,|**:U6_46}ie}Ysk5' );
define( 'NONCE_KEY',        'yx%K*Y$>6o:-{[241d$eZ.v]<6n?E5Nf,;F]fLj0y~?;jl6$wh.(s*:bm*_rVrs]' );
define( 'AUTH_SALT',        '1IM{EhX.B$RXc!*0^0alfrabKzy=/vt%5Ty=)H@9g3^5+^&Z/AKPuv%J2wRRMvn&' );
define( 'SECURE_AUTH_SALT', 'iaPAIxPF5Nf<IU92y>hcoA_a5!yVx3RQe)owTB?(M;!%wiyMwi2B1SW4kh}6@@hJ' );
define( 'LOGGED_IN_SALT',   '0D;:p,_X-%dftT;*(h6vgS4w4q2d[pE(1bm<b?Q}R2i1%jZMNC`y`#]KK9?E)>J,' );
define( 'NONCE_SALT',       'DOmM/vph.A7.0d[LyJQTNrJT,Am4PZ;4A3LM}BH-!ztwAjS-U?q-Bb$-W%SL{w07' );

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
