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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7<KsnBX<M2fr{Xyo+K?nax[2]olWV}kUN@lUc7qUNjjZ|.`2ZA~B-RODtz O_D$Q' );
define( 'SECURE_AUTH_KEY',  'Y0gM/}*>^/dp;76-j.6ph! FD@`C/ooC0D?3iSQpNo8=*y.|<jZMJkpZxRn}Q({n' );
define( 'LOGGED_IN_KEY',    '+uaM4U[y{?eJvyrdE,IaH-V#-j`ylI7Wp.qM:$V&^w*)c}rB#T5`A/u6Vw]44+J>' );
define( 'NONCE_KEY',        'IrH-#qUrpv<1|MytA0$g=WPvFoPod<!T5BfvO$MZR*DJ!L(vfpHt@.L&-]Qjd^Yi' );
define( 'AUTH_SALT',        '_6ej?!vR|m?[:<mj:I#0d)BOxE-*<at8R,M:V~)VLb<)9[CY31,:k8W@f] )cZv6' );
define( 'SECURE_AUTH_SALT', '5E`t6X=-wQ=d|_tD=sd2(lWu oc*86#c16ESEYn:xPCkJNlikrb0:aX:ppOwD8s/' );
define( 'LOGGED_IN_SALT',   'c3O8_rQR7mMK9,%Ijlpkd(A8OjRgc9`Lk2#~{7N1`s dF[q2$q!0_5e F*C&+n B' );
define( 'NONCE_SALT',       '$JzMlqB|k=dJ 0|41w)`)( sH1S,auK58k{U9~k wF5%Q0cu-x`thIs-].0ag%J|' );

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
