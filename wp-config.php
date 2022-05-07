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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         ':D2Gi }qH<6TWU1$ fw_b`$?CN1Bv=52^K&{7gE:qy13.ZT<swG$Fp`A7Lq81-Dg' );
define( 'SECURE_AUTH_KEY',  'TsZG}bi+QPfyE  ;Zh[R5%]n:>Y<c__4$<$x6ZUE?eX2;$iTHA@iJ3ut$wo <96,' );
define( 'LOGGED_IN_KEY',    'Jm:3ybD_g]h>j[Wlt]Tf9)j1@J=V7/a)132%33hi<#6Hl2,poD%|G}2MJmWFA?7]' );
define( 'NONCE_KEY',        'g|9=hWxy|DR|(p$_m=kE%vw{Qn>>N4I<{_=%K x4A4g7*aJN1nqWMt?lOz!:|DRK' );
define( 'AUTH_SALT',        '_P[Dpqz<7;XxZ,m%Sph&eHGbhb@l?PeV9z]`{#zUo&X+JabqWmq]|){?$_8_D]z1' );
define( 'SECURE_AUTH_SALT', '6-sIS}![L, c%($k`!$o658f;Nfl%%(P1$Y$j:sLPd.Nc$xb)mksxRXp^Lr #;J}' );
define( 'LOGGED_IN_SALT',   'iPr@(u))<3lyF;5z:@nzzn^?/J}~,`^*VkK=F]w$)qrdZgC9V&B8V3JXH(G`ziZo' );
define( 'NONCE_SALT',       'J35T#mdsBAC)BPpFF:+7B9w!|(|SoFHbb*qD_zD`&D{D)5;wt6bKW HjlvW)Po.U' );

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
