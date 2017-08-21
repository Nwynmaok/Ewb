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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/ewbweb/ewb-umn.org/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'ewbumn_wordpress');

/** MySQL database username */
define('DB_USER', 'donorman');

/** MySQL database password */
define('DB_PASSWORD', 'dragonwagon');

/** MySQL hostname */
define('DB_HOST', 'superdb.ewb-umn.org');

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
define('AUTH_KEY',         '594f@GK4l|:rnQz*K/MmFjxoq@4~P$)vO`!L@G|$%:j;@XHv?MFI(kI2sG9)1tEC');
define('SECURE_AUTH_KEY',  'dEcHcbxo%m~6#ij$fB2csp4x(ljRk(Q%*r|@dm+t6jaV+ysP7t2|l1izxS/HeD_J');
define('LOGGED_IN_KEY',    'v`SEAMENYH;F^x9pNV;#YwZte3"H@xAXh1xkbz5ycI26+sqwSMG?ONsSp;mmZ)MN');
define('NONCE_KEY',        'BboQH~4/JmSN+rL6SIw/ytD8"3dT7_T?+8laLjElj5~_(NK5YdQ!5*Cx%$5nmz^Y');
define('AUTH_SALT',        'a&~~5a`v3&%s2:#gH1u6muMQa%5ee`7a+&NVYRXbxmsKKA)BKvsqa/`YghS:S?|Q');
define('SECURE_AUTH_SALT', '`;TvLxT^_Z`x*CgwuR/IMZXjhsBHQUJI8JO1b?|TPCof9nV1WAq~QwsK#opk!g?5');
define('LOGGED_IN_SALT',   'oi&?H?e;!Ejn~ycBAmlDq_kpRh~HVZc3%%d^3uZ!Vj|(C&GPtLg%K9F"h#0V`@As');
define('NONCE_SALT',       'jtk2~aX/66G3kw;:9n~!uU"cEO|~wA70#GTQ~kf9bhg/5O@fjNa(#fc_6%s2B!"z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ii4yd5_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

