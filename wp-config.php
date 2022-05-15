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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' R(]#86$BG7 GYl=|HzM 5#1sYo-@):/u_#kW_FqU>c<ew]ed|SkBS5/|H(2vwdQ' );
define( 'SECURE_AUTH_KEY',  'obnfP16pWeaQ=C/J2va|z85RuZ4,fJd3]@f,)mE}v0H8fkTdBSCn?|lg,w}itJCf' );
define( 'LOGGED_IN_KEY',    'a7+E-;&j8fyh]cJP>^gTr-ee4jW^*On=djOyEChS^[S)pvJZ]#.UgAIIJzDkpi7l' );
define( 'NONCE_KEY',        'mShOSK1WBIPiM47~:M:Xf$Oz,wd)}fFiSI[EE%:D6Rr#x%f(dv]=Qh@Dns/{-O#f' );
define( 'AUTH_SALT',        'f~#GpAFA[xeTNp!z%Vw#*!t1VOT?<4D]*fR$6v5^2Kd <7Dsqm$f,@+Sie6$BbGg' );
define( 'SECURE_AUTH_SALT', 'Xzh||:TQFjwE>)uzE=0!T`,TG!r2}^,r0b&U#t4B0@Dzers2YG&}S^#}&p=ut%Hd' );
define( 'LOGGED_IN_SALT',   '&f)qYE9O)pGPS7Ne6qkpIieNj2qY%o,NTZs fjSKN]w_/LlPS>Tc]r6YjJ[}-~qX' );
define( 'NONCE_SALT',       '&Ud1y8p:kmv-^S#|PR<0rhP;u=e!J?Uj7c%+aa~?5kE7WkeH,_WtA;%Q~/CW(ZQs' );

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
