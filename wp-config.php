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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Redlabss_db' );

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
define( 'AUTH_KEY',         '21O0LXq4S+qL_:FSWdZ`)(cuSJ&7Rdp.O9[Pl1lB3B4ggWV4 9~}hxR@4;vkhL*Z' );
define( 'SECURE_AUTH_KEY',  'asecA)B8j~Y7BONiH3%KiwLQ6~6^(&clIkkON7ZsDnd,}k/+sgunG!I){xH^R1CT' );
define( 'LOGGED_IN_KEY',    'P%nV 0HhE)L9F~N -2wPug|KFlG+mH!ty%)vT#+i1jgF<q7k>y)3w,tZMn|JtU!=' );
define( 'NONCE_KEY',        '+:#Pd-:xlY2X nVrTP2VcLz!;B8:MHB*gY$,^`u7MN8xZw)1tz>m|y=#pm0[KmO]' );
define( 'AUTH_SALT',        'a[YgNh~>OO9);#3y7GP 06=UVWTmx6y1sS9T%}WKv7YVFr(`YaM.OkW=VnPa}WH^' );
define( 'SECURE_AUTH_SALT', '3E/i=q]*&S_eU(1+.4lm8,R^6Gsw[+$XyJ^DkISU<`ZU%w9TBm=2s{=2HO+,I5,X' );
define( 'LOGGED_IN_SALT',   '!5w:L=^LhmJ)}kf]2/ONUHT=#> GL*;6/_M3&i= xz=x~D_x$jpygqkH^<o+Jr~~' );
define( 'NONCE_SALT',       'xOn$iMAMl(NqoX|-[sLyxk^=3A@iRVBr><F*?A0A6-[e>$j*JBYm6]yLm-VuzxI{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
