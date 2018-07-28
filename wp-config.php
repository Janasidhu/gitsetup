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
define('DB_NAME', 'localgitsetup');

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
define('AUTH_KEY',         ']YQ5|OrZ=^QtGYT|fZVnP/ZqJE[s!/vOB#-^^7q`)wU:UDYsvq1ptM[ndeycr$M4');
define('SECURE_AUTH_KEY',  'Z]j%|(8EmqTjr9^ee.[<zaJ2lH;G|#{7C!BE&u;-f=6a[QK.}x|$iquhUut)l^(n');
define('LOGGED_IN_KEY',    'g3l70AKD7JmL~#IcS2Zslgn?B/6sbV~nRd3aIlYkw*pY19/._:Eqa^*&hFr6,#r5');
define('NONCE_KEY',        'X1h#F-HMOmtiTOjid9k^`+F?$o#o) j]=d;5xu+W?>oi!Qe-HiJYdQjrTVCJ)e3`');
define('AUTH_SALT',        '}]{gLM M[eo([tEK$xn**HJ2jQnkpCC}p%hDN^2|C|p@MxTPGDN?hGixE%gmyP/=');
define('SECURE_AUTH_SALT', '9fQ3*h#wl1D}m+Ci~fib&5Ki;S8B_;=v0kf(@m<6s`]0Y<vO {+Z!Qg9(-ds};q0');
define('LOGGED_IN_SALT',   '/gw/P~*&g9*A/.lWN_c)voE8!(hmHMn|I6}$ZMJ40r<~|^VpJanFNY;Li,OPuEB(');
define('NONCE_SALT',       '|w0LZ1AWCPy`aX5a{S58}AwP6> jnq_4I[p/8Q<QZ4o@S[8XKv:PXZ1T|&Q]d2Fo');

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
