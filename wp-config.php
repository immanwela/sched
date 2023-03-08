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
define( 'DB_NAME', 'scheduling' );

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
define( 'AUTH_KEY',         'vUN9S9g&Y~JBas|fAK8OR7w=Ux(H]i_DAn;w[$}X%jIPK>xb#G$}%Qf&;@<E}I5l' );
define( 'SECURE_AUTH_KEY',  'Q>8Ag;=9_BiYc7tzA5B,Nb5HT,h,Afj,~Rqx+aknu}.)Zv4)9*|c}{Q2#0r,R,Nt' );
define( 'LOGGED_IN_KEY',    'pHw)*CO!yPJd &$MdJa*h6Wqv37by{X8GJnnGj?B^DU$!h6!knxwF&uJcz=%kM#X' );
define( 'NONCE_KEY',        '6qxR0@1;am)MCMzOk]uLjP[=%vF:{$oV%y7E}%Q9uU|nW-NhYjC-b`yJL6gzz<$@' );
define( 'AUTH_SALT',        '.fa1lmJZHNgy#cZm,bg}zH8E__un0buxuX$> r}<J1R5FQau}~?pI[mrOuykqiqN' );
define( 'SECURE_AUTH_SALT', 'k^P_9Xhi1%VET`E$$O7. >[&x+>vXGFKW8OL/aj39IE1|?hq48<-DE7B1GuzWq65' );
define( 'LOGGED_IN_SALT',   'e2iyYtJcE#-(XfJ =04e}:CUkk.q@9fq|}Vti? -VjX:k#~]Lza;dm^}Fm%GQvtK' );
define( 'NONCE_SALT',       'VmaBNL9mN%B`!4rPC1=:-8>@V<ce$Fpmf%[TOjFg!05,mO)!mze:D*nJk{f<}2*d' );

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
