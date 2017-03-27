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
define('DB_NAME', 'oldwest');

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
define('AUTH_KEY',         'Z$P.3R;;_A@|.Ih.pb@DNB)jB#0N_JuJ@&}+3FxZq-3k~TzWsE~N1XcfU$1zf)Rb');
define('SECURE_AUTH_KEY',  '4S~~@QAXXW1NWlf$0Y5jTlywl-5k?|x@,9Na+W13@aN$>cklx1r/2!<7a8U&<jc#');
define('LOGGED_IN_KEY',    '~W/{qS*7U+&9Ct7BUu1(?:,vrhcov:$~{LR~!qX*Hie>PmC$@u<%,U4,TyN/;;f+');
define('NONCE_KEY',        '+IKwL)!-37ftlT{mYIosj*rVT369vv~zZm4XR8I^;ak|f*x{.W71=S.hu;g~Nsn2');
define('AUTH_SALT',        'x_5pS%}MQ##@:9rQk[[Gc+.?e?0tu8/%q3XXVU8;m`G}Nib732A3~=*cx`SO2#cz');
define('SECURE_AUTH_SALT', 'd{nK%dH~W:fN@Z6H5gef]2I?;MR61jQbfGey2R5 oCo6aHbq<v^}(lHI.rG?q}_@');
define('LOGGED_IN_SALT',   'brIU,LCq5P%&r@&|`FjjbrDkI.%&J,x3vEp|&|94j^&Zj1Ow?Tl#HQD?N[uC</ x');
define('NONCE_SALT',       '8+9^`_@k!O67U]yv+Jo%<c/dqs5Us|Q[Q,iCcLDzd*<?;zII-VBF(OYMM~DnD~Qu');

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
