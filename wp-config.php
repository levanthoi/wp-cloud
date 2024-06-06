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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cloud' );

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
define( 'AUTH_KEY',         '+R.JOfZZ+TM ={NkdS O.*rA4TIP)mv2)whp&Jewhlk7.py>c<1IV]HThsL2n9P ' );
define( 'SECURE_AUTH_KEY',  ',dSPaE:-vWWxkR^8bjH3P(0pg6Sf}/6o{b-_Q>3:VBU+LV`fK~A(R{uQHg.Ru#kU' );
define( 'LOGGED_IN_KEY',    'Ru9-E#wj@mfFR4ioBS,VC8]Ha}Zs3>~z/??zLQQ1<v25nNl[,f^Iu&Q.SOQL7R5b' );
define( 'NONCE_KEY',        ',O37%Bg;n@*o,Y}Awyl^ Oo^JQy[UJ=0z;I/@P1;SOSY*<0bTT<u:;|+W*pL!ODF' );
define( 'AUTH_SALT',        'c9iIpU[s$fXfUIo,/eg#bB!(jAs4F49*JfXitt5HXKXkH(m=/, C5>)jf3543#.%' );
define( 'SECURE_AUTH_SALT', 'DdL3OJUum^xj-U94|PI2AT;<m*|AxYO4 D7@=l+&6}5kGwE)O[)1g<Bs!U2B]1Xg' );
define( 'LOGGED_IN_SALT',   'tsnnnPX=s 2|{>#v<l5Tku*_3tq`oJ#{jIP+(E5WIZy_TL|nl]:?OnDWllS X-.!' );
define( 'NONCE_SALT',       'm:Ls{X5WN_#O]Y@ZP+r`:vnl@l~9[<!-MbP4xoB[E+BFB[8vz9pj(~z<;}zCZ2i0' );

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
