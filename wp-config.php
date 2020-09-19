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
define( 'DB_NAME', 'learn_wp' );

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
define( 'AUTH_KEY',         'IXX~$x)e T=[3$P0%_h<VUe1EEOb9EHaw4MzBP:Pl<{[gexx.Gi7Wfy^LY^-#8J-' );
define( 'SECURE_AUTH_KEY',  'K)C@`AnM,dBgFuFlVNtR<gdc+si !_i y*/2lCR!sY!D>cu@N7l IXI,D25,Sp5|' );
define( 'LOGGED_IN_KEY',    'bW4]9VMH=hWq;M4Zj0?kR-<PbU&Mh2A(CA|@1Ft) _HH?x$M_DPP#*HZ=%ZH?oZh' );
define( 'NONCE_KEY',        '9O:r0T{iE;7XJ,QfbD_V{Sm;:X$H~K/{+W.5Z><gtw&SP]t{jOV*kPK6[m[To(>n' );
define( 'AUTH_SALT',        '5VzX{{2%k.~9sN)<Z+.D-~d9+HAw%@&P^ EMk!07~@%Y}D2ZXWECjf}9:Pb8k,ER' );
define( 'SECURE_AUTH_SALT', 'rfO>]TmfCaw3`<g@32X0)7q!UjSW5G^>hej~~qvlF=td]uuU{-K@Gwrqn$.<Ik)m' );
define( 'LOGGED_IN_SALT',   'a3Q03P,?y&zgnZ([5Tog=B!L~*oNgp_+[y`Z&T`Cml;_4{} 74rJ0kk&k^j6AD{+' );
define( 'NONCE_SALT',       'iJ>l[SKWp6zn~a#:qO/Z^y0|.S:Zop?hLWkO>Z?dyf?y5db@K;5pw{f0ywGeZR2Y' );

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
