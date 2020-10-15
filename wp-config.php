<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devops_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{3?Vpn=,ZZ^S:=9a!bW-Cng3gs3P.`qnf?Fcu5PA[58Tsg]6j@5?@s-onbEQ@~Gg' );
define( 'SECURE_AUTH_KEY',  '}t= VRypPWLQPe=c w8G:ruKwV+0F7!-waXV[u^YE4UdFwc:4*NDS8fhm0R8~ky`' );
define( 'LOGGED_IN_KEY',    '8S[dLJWhze[9(*}UEv&OD{e(@v1w+LAyG?D*|  T=@:dqhp?OiWl<aCv9E&~Wp{d' );
define( 'NONCE_KEY',        '5c}@[?rD[cw(;(@F?WLW AVy$kQ| LUO-60}yu[l=yCMPk#uur z3B!1EMmz?~EE' );
define( 'AUTH_SALT',        '.=Y=>w=A>:3xTb9:U9fIB+6SD;wmjNjb*T:76qL76~_Pl`{8=iX`nE/7G~_n-b4`' );
define( 'SECURE_AUTH_SALT', 'B^ezHyv7GV0hi*MNbF+sv_^gt8X}k%vbB97DBEKY8@5y[*?,dB$n>c#yThu$8:||' );
define( 'LOGGED_IN_SALT',   'Qu(^R$HcdC*liS`Ao-;%[0b4y$h1Lfd)23UB+1zgLnt%9:rje 28v2uw^hw0V.y.' );
define( 'NONCE_SALT',       '.HW(X-,a]R+y9JgY]kkoZR2VNapsKEe9ZF5[YKli@6MZ(1b<|5N#vr4e{sW&N8nW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
