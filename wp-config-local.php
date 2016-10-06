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
define('DB_NAME', 'lotto');

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
define('AUTH_KEY',         '#aptR,q=-Cc[k:b!eW5P.xSLGI/mGg0aYVThU[d|GfGM.H_!g8kw=AGJ!BR@;gmx');
define('SECURE_AUTH_KEY',  'umkCXY+yxB[*SivI80}!yVw-#i=I/f6XmhL.lh@xb.C3|SPW/cT$>Uh*@<,pYmM6');
define('LOGGED_IN_KEY',    '&mwJ(nn8)meB=/2]/3x%/K<U t*k}Z=JIRd!W!4#7!9v7BjUnn3)l~.4ukO@)P?w');
define('NONCE_KEY',        'W/[L?bWRhOn+BwS=CisIm+dJ?T!}eQLk?bngN))aUSz3-VsDA4 4Q/M,j@^/$FFS');
define('AUTH_SALT',        '@)6uug.`r<13Y&R;VT%*cFh1UO+Fw[Z`?(sHp{MsjEHtd}t1Lc>DiXbWc=uueCdr');
define('SECURE_AUTH_SALT', '91553)vR/^1 _b_TsW75.]1d7c[;cy B:Y9poGhc|L2Zxv73Sn@[FL/?]8,2QU_k');
define('LOGGED_IN_SALT',   'm>,+2*@O8^p;@!$q]hI!i]1j-`lZ6A{rb:-6<qIx]_WAx(Nkkf&^r]/MYdv!vJF{');
define('NONCE_SALT',       '>m/xXV7KRS|1TCY}E-c1wImk<)uStEmvY=$*YliiQPWq3,ZD$&NFNa1N^8=<c[&]');

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
define('FS_METHOD', 'direct');
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
