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
define('DB_NAME', 'yumit');

/** Database username */
define('DB_USER', 'yumit');

/** Database password */
define('DB_PASSWORD', 'Jun94fswCNFX');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'r[*r.C>zaGcIDuLP5qKvDS@3jN #Dahi)eWZ}s/_r]QlMhBaXC20U0ah@f!LbqVb');
define('SECURE_AUTH_KEY',  'th7 @J)Fge!.kV$i&,o``H`8h,,0*UW{RIBO2482NRHT;Pc00pep>+Zd~abJk3J7');
define('LOGGED_IN_KEY',    'u]s#&gCrn37OGCqnadkpIDe-i0jf6/AQSv+8gS}7_|l;lq kC#PO/)=fNa<(S9kf');
define('NONCE_KEY',        '^QEcz:I~v)b:I-7TJM`*J:h~z }8C;>8Uev7%yv1 !ZljA6fR;dE2|,^9$?x*.na');
define('AUTH_SALT',        'BS%v$_9W@B?26KKZmDt&CR-mddX{Nb(% zRyLB,w{LIR-d&=>HQ-}lr>J5]E[eQg');
define('SECURE_AUTH_SALT', 'IBGF4p|Pq_P,A}DOm[Z58MW9/m68pnrPS(u-]/)@ad*&sLHSnjWp>(.w3S? [$:A');
define('LOGGED_IN_SALT',   '34=P| tB/~SC=<+mLSpbD[`48xVeNN*W:sV}K4jaA>T7^?ZC) 3WwIH_>,:J >dK');
define('NONCE_SALT',       '92#dK!.M`EY@g/vxD>|AP5iv]r_T6Fly0pL9pbW>LoQVX!q O@gGJUS$^go+l=eS');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
