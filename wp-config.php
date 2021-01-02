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
define( 'DB_NAME', 'viajeros_patiperros_db' );

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
define( 'AUTH_KEY',         'X$#9`i70YzshhS]yH&]%Z*jD}@Dc, vwa[l0SImRDXwX$R=3<ge{f#}1U3=v[bw2' );
define( 'SECURE_AUTH_KEY',  'f%<k6DkI;^$9Q}1e:)}V7v*$3[n<[QPSBAqciNEV0&a-hP]Yq8Pg=tKbuu3~G+e^' );
define( 'LOGGED_IN_KEY',    '3gbnIzy790=K+cH-njzVtbs)Akc<SbGAP%n9njtsH>V^[>6Q@h5RCGU]<Jb]GKlf' );
define( 'NONCE_KEY',        '1EwP~v%D%[8dO+ 9-UUh[m6xIObP~:l9g!nb`]i?o>6@K_Gt^M!G@$2}s5eMZm$f' );
define( 'AUTH_SALT',        'B1:It@^Ovj|S gp1|:mbx tp83wCm+p~j0Yx8~oZw_AUVmVmS.VB9}&YwpqjlZq^' );
define( 'SECURE_AUTH_SALT', 'U5U<0<@!&`M&<oE-RC9wg+rx/7/7Xt^:2cWASBvI95vHI)ho]?(Jh4)8hB6e^l19' );
define( 'LOGGED_IN_SALT',   '{Js@Lamw.3sW8]3~xg0UTktL&p4|_awHFu)SAL[7T67IE[:>~2.w*/(WG+l^zok0' );
define( 'NONCE_SALT',       '0=!^G &ghj]`(YFA/Vx2{^6-NpAmt=&vi}J?keo:tu|DM8;~:=Uxv4s^Ep$w1UK`' );

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
