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
define('DB_NAME', 'il_fonti_di_modena');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?0(IllO!K,2#aNvM`DZ3|DfgZ9_c}x@ZentG$C>;0=#]]x`E{`6$vi=!/p3nuw,r');
define('SECURE_AUTH_KEY',  '<tUbsz/UU[.kf]Bnj]Kc{vWA+?58CN,!1)^|<jsA>0harI4x8|;#OEi++iW.6y$s');
define('LOGGED_IN_KEY',    'JOkjxF1G5Zz!hHviSHxSubU.,x,a+Z!`~#ugSFJD~>2PSS0wf&.E`}dS?#elGato');
define('NONCE_KEY',        '/~,WaA(ANUrQ^[Q}@~|w:T%ZqhH>z:+6E@CoQ4]N*I9TvE}2R4_uNzxtPCFC5o#Z');
define('AUTH_SALT',        'WY,_QCJ>}pP0iV8fYFGC@68(~U*OUm(a5)6$aB*DO)|,4?m$e[n-w|=E;Sn,3%:*');
define('SECURE_AUTH_SALT', 'olB_wAq3o3I%|eJMH$&:>noCha;!l&d8EH]#DxkYQ)|jEKzEd]3f]*9CtHG&Ev.$');
define('LOGGED_IN_SALT',   'p=F(Z8T.T]:<PYab[56;e$eH_z$u$pE|pwo;6y);St-b3cX2<r2TQ0P3nd4/Z5=r');
define('NONCE_SALT',       '4 _I?3N1Og##<&8d.]8Ha>V@[P(0TMwj%x7nTN]Yf-;wih?hIV*aLFR1?$[)Oa(M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'il_fonti';

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
