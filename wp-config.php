<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'vihuvac');

/** MySQL database password */
define('DB_PASSWORD', 'dev');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']fAyh^0G%+?Y^augzbtac*xvu@0-{=I=`v*dOM`[~%[.&G*&dhacY+^3>/7.EoCH');
define('SECURE_AUTH_KEY',  'F$e4=,R#x%>[6<8!J}|=+U&xz<6l_|%* @tqb8]8LPhgCG&`{.4%d)$@/t$I!l2I');
define('LOGGED_IN_KEY',    '|CZtjA|6% a$@XfG9yt^|iHzZb(k[Fl/NWo27C6h5X]+tB%saNm}^zm~lc6Q[G]Q');
define('NONCE_KEY',        'o`ypkWSU^a2vqN?y@J/meT{PQ5%i.w`G0O[JzZ=X&!N]]v<3|,|j6TpJBd)u]V]M');
define('AUTH_SALT',        'G}1}-n=9!q8Zb@tqs ;g%T5=W_M=SG()DYvv}CBirl`F0Cq+qEcTV(:t,-Pm-ub]');
define('SECURE_AUTH_SALT', 'POInbamA:s%GjHyafgy%mFrqX+%<N>5YT<HXk(k$1=zxSesA0hS/I9k0Hs-,:8Ct');
define('LOGGED_IN_SALT',   'Ey=o{7e#}bmZC_-|,/^EP,2y99#Kb+I2Q13B]jpy&<}6#>ZXtB_ J2tr-@@_yh<[');
define('NONCE_SALT',       '>Rtl4(J]Z7uZ^Qq|J`CYo1Q^5_+yd|W;qQR%$4.}+ZI/KUA>8#I:A9{=v,U|cc1C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
