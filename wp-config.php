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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '7pe68V0n]KDMjJ:CT7xl0to%D5yi)~x!e5Ou2C(W>)frDY=~H(qeeghAwu?f<Lw?');
define('SECURE_AUTH_KEY',  '}I(-s_3}E}tylsXYrC(>E4@ld?4D<g-|% Te(fh/soWVS{xb8r3B$iLR:n6mv@lU');
define('LOGGED_IN_KEY',    'eIDE`^M$0)[_$U~O05WH`zLh`ewGwmbV{zs*wYiyNZi)9dSdvK:obXm-zS|*[twt');
define('NONCE_KEY',        'hR!,jY3UpKT~)&c&c>oF-  6N7ii3G3=F1QV`l!BJ)JS_pu<bMx=5d?=lqC$(%/7');
define('AUTH_SALT',        '{,S#Sop*1<U8UlYb{x_sT[!-t|?QI2vKt)]!/dGcLL[W@*+L+wY?I@Ey{MSkCmIV');
define('SECURE_AUTH_SALT', 'k*D6,smG_ov>1W}kb|L=;lqP`+yu9k^0?4WV77^wb+(D u`+(cn%WqltiX6tR;aj');
define('LOGGED_IN_SALT',   's9OI[1]eaBaz#L*7oW;{IRDu/@P%^G,uW{L%6AGn}^An>0ezERD./yj1/a[ja_<+');
define('NONCE_SALT',       'IjEI#MCW5chUf+tdmaAI_Oy5g14,iIeUU/8-<P%:0m$ ~pjuh0T~Tzh49!GI?{/x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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

