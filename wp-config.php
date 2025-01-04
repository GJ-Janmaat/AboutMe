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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@[/g9jeg#8:Fu2Q} q`p:_7[;49!c4ZLuySsE+I~tqNrl!+komaqw}-O3vrzSsB%' );
define( 'SECURE_AUTH_KEY',   'c,fmyMD~`.U(p:[(EvPW}D@)XU:H-vME#$V^fZ?.t^m(?`l]SrACoVJ,Gf+U^_qj' );
define( 'LOGGED_IN_KEY',     'Z(rg)PA^^&o,7CyV;_o/?Z1m-^[EkNg*Aq:2?[7]dIbZ[3YcdznXkEj%pU*e]LL-' );
define( 'NONCE_KEY',         's6x{OU-c4wyhGf7~Sv`5`g %8uKZh~`5-q}[<e@ bb=< Y2)jvhTS_mT.x!/0?Sm' );
define( 'AUTH_SALT',         '.Xr~jT2=E84&!52CwsR.%Mb=. M<An=D~$XGrBF(oi#Y!~i+`%yRwGN({Cw$%p7+' );
define( 'SECURE_AUTH_SALT',  'Kw7`>5h:].%@>z|L@]rECYqNka{:&Rj(ol {6a#j5ixDU9+*SR{Pm4Xuj! plAY!' );
define( 'LOGGED_IN_SALT',    'uAOX)}lJ<1VST@_]Bv^ni}+:vM/UeA-N[9U~Q{#m%9+qC)ql-!l[LWl_.S78S9@C' );
define( 'NONCE_SALT',        '/}^mR3R5BnCh?v&_>Mu@R@X|F=]pC=ao%iA*(I#83s*v5s&^]a2-63g%pC/G5v2{' );
define( 'WP_CACHE_KEY_SALT', 'N3xNA25sBkZ1$L.klD }%0IwQgAXnS84*e]#4Kt8<B95; Y<CRsx|L$.`Lju`/2A' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
