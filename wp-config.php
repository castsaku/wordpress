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
define('DB_NAME', 'dbwordpressq');

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
define('AUTH_KEY',         '{+nE508IMf3th<Jh1K0=#CZ?bCxs{yQ[J+f!^><1kCjfI-Lp<p;KH@Rm8H~*C+)A');
define('SECURE_AUTH_KEY',  '~+?7pEl`g:-X_&xIm?1z,oLp)8OYnn>9$Ad19#OD5,)ZK=MB/jX+bO8>ehsQ9$:|');
define('LOGGED_IN_KEY',    '1-Wmf%yarbEg]ip|V1n5s%hC8chHfm^r[Jo_}6kcT-g`AjDFn+$Vr_Hd)xkiS46w');
define('NONCE_KEY',        'lxMnvJ0dtt*%?iQr6R?ieprGX~T3A_>,*g!~OjBbro_QqKs./@+7u7jIW<<Vt&G%');
define('AUTH_SALT',        '2oYe tJhQ/DwDHGLuPK[jhr5pg%+bT%6s!Mg,&~j13 3i}PpEETtRDMTN6!|p.dp');
define('SECURE_AUTH_SALT', '_~k[~+3:S:4OSd[NK-#Aoj12jbb3;#-s{%zf`i[=75stpxq{lDnY2D Tq=wby/3|');
define('LOGGED_IN_SALT',   'X:.-Ea3%cyiC?_2Uh3YcjO<rV+%]9yY1*&Kg{?xmDfY;W$.Ulwhu=__VHS<q3kqt');
define('NONCE_SALT',       'K[wYVB:w;GqTJRQ|!/j!#i(3=O.{RtBHWl%3eM*|U>&>^@/m5@7Y}uX1zV_K2l,E');

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
