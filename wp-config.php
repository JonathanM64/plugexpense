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
define('DB_NAME', 'expense-manager-grp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{vBR,zx`#NwVv8`8o{[19XBh[R]#GB  05Ag.4hY1UuMDoCp(mF;<85KmoKbe~!*');
define('SECURE_AUTH_KEY',  '.AyrpJC<qYj=>2aH^WYCne6Ef_fFg^iOb*XHwtzP%%Dw72~a8(_7l|m7=hSmglN)');
define('LOGGED_IN_KEY',    '#dl5UGA>qq<N4&@f0DIWE.}QnA ?>,6O4SLv0_qc<@UbB90I<FZE0`Gg!s%6G*lU');
define('NONCE_KEY',        'D?i/X;dA y|v~#IG,QZ<)]NEA[x5B7)8@U]G?.{jTg9$)-wMRiQ)nmEZi$^)GdA@');
define('AUTH_SALT',        'N}[|g,!mYO,.S8H.f]e5)x3.j/5|SWQu2&`Eix[W:~_k%>rDe$C!zU|,?.+}zub]');
define('SECURE_AUTH_SALT', 'k_(&E]!RE1[l ed7[{3/;Q(AH(Q_($}T=BC`KfqHUdij>*PfTu8A[nHWUd3|vMgh');
define('LOGGED_IN_SALT',   'a+F3F6m0F><tL#W-7!RlI?/Agv!1B1 1uRO~=ekm(s}$;UT^Mo9M/14ks]}+.}8X');
define('NONCE_SALT',       'd1lZ:{,+hF4>jL@r ezl!;MPxJ${erGM]DhWMDQ,F3;%jJkq-T}x$c>{<.ed^5X!');

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
