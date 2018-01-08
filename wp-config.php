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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//password: )GNKWOMI6m$!DgKZ$L; name: hclovejesus@gmail.com

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iN1#NE^BD^NH~@}(|a6t>w~W@LPE_U81Bl!/P8?B_)~Zv-A+QE b_]$mbjVEiAgO');
define('SECURE_AUTH_KEY',  '1&cbOqA]|uOiK@uQP]tP/B^/6jKJ^0.g#m9/$aY*bvc3j#z_VlZ2fnz@40q!yDR0');
define('LOGGED_IN_KEY',    'tzjS`iA.V8Na?!FQa^Rc,bEtuYj2fm&;8+eGY8p4fKI<{FXuXl?x+0nfgfqjJwfo');
define('NONCE_KEY',        'W!12MC8mDU4%tMhLPfV(A-Lz]b>JyE6&7X//B7t7Xch(J1_</Bb!%jm/e%{pXq3(');
define('AUTH_SALT',        'uF8PV<kFSw`L)v2,cIJAH()?MPtdG&R(;pk{f9;*^>.p*Xjt**uQSSEcOYWf&.VF');
define('SECURE_AUTH_SALT', 'O$v8FW6*|5.-s Sa(_}Van_EhNeVeh+S{,e/V!m.EkNfKqRy 96]lq*AnslM(RvM');
define('LOGGED_IN_SALT',   'qnA)7,^{6kJ1~e$h=XV%7ob`tZHNLE9hR,#xjLv^iHYQJbF1DY2%/ *4grhR< cP');
define('NONCE_SALT',       'xQm!YfJ$O,FWj(q7zxu_ArE[B?pmh+Cl<0dZh_=d<,3Lu;}MC2Xot0Xs)09D!PQ-');

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
