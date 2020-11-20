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
define( 'DB_NAME', 'wp_blog_boss' );

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
define( 'AUTH_KEY',         'S`$JVwxOv/RCK&cPuSV}%w}naMb+M(s$ QpHak[yz./noW*V0%qFg#tjCKO/2_Eh' );
define( 'SECURE_AUTH_KEY',  ':%:WZGs*D?Jwa~x0P6>9DZ2Sd*`:%g_y:dXW|LV Gr`?-?IPlGq /eRbb59S{7 l' );
define( 'LOGGED_IN_KEY',    'ET{,%o21%55a@8gFLs7nGe7:)-Ls;&e><kw{[Mgs2imG#wt@r3#}zL)-* ^7L#r9' );
define( 'NONCE_KEY',        '[y,6QF3w:zs]2y~VAXEJ{A5ER,N)UK@#f;9q4P2M<07Xt?726;vkS&dO#lL0ymQ;' );
define( 'AUTH_SALT',        'GUF|xlq$/Zjc]o9[;si?o)AWxoUeaqQA %4#.waBlxKBp]E{,-Wa_bHMHzzcXM(&' );
define( 'SECURE_AUTH_SALT', 'S`Xo6lys2%R54g;m/5gu@2cnphOMiZ{wo:gzzy&K`(_[t8NH=vDnOrb1/XQ6q.7,' );
define( 'LOGGED_IN_SALT',   ']$DL>pob=ei!aWq> |(OQT-#}E}X^]iInf:@KjV;:x(5]*X}z*M|`>10JUg;FE@,' );
define( 'NONCE_SALT',       'R20%=5X.}h+F8%cP%s-/)vo;[FKWzb4Acn0QIu+Fj!TJ*ZLFP4#vBex^FJ0&[ f9' );

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
