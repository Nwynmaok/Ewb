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
define('AUTH_KEY',         'yJFLtMBS^JpCOup;Hz^eY)#Mr3|zJ/NkEndDAmIIFGhi0P5VoRxLQk|:|Q)P/@w(');
define('SECURE_AUTH_KEY',  '8gQFoZ0gkE2Mku9wsb~t3rS;EY912iz_8"L@Bbe3(&+M)Du+JxQ52gHdwvra"lKE');
define('LOGGED_IN_KEY',    'e2d;8J8xu%gy*yvxriVS#iCJuUHXWhycC*`)A~na!;NC*6jH@@O:X@Q8%FG%(GJF');
define('NONCE_KEY',        'l"Hw;|MrQJ$vL53AnN#iYdY7b9)(wwJAzG$Mo8JJ)cxbJs|_~j6j%;|hzCJ00tRj');
define('AUTH_SALT',        'aP`@YvCBJVE/tJn3~OatquZ+t@3M6sF?McfY1r#P~k0xf*k;9~a4tJr|$Z:!kaVv');
define('SECURE_AUTH_SALT', '4N+jnEM`74/4c4*H30~"3Kmd)|c|SO~C^)~bDzC&TXz:82xB:2;DZqZbttDp(I((');
define('LOGGED_IN_SALT',   'sHJwc4QbEelF@!0*iS($`hj:4v19X?xegUoz/*Z?_vwNU_@hGkot@"z1ny6T:T~6');
define('NONCE_SALT',       'hon%gHfotjm23pW3p(V(sJ"_&Ka13ssN(Er/x!#XOn64v:REx^/`/_QP7PEKi`Xi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kq4gi4_';

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

//define('ADMIN_COOKIE_PATH', '/');
//define('COOKIE_DOMAIN', '');
//define('COOKIEPATH', '');
//define('SITECOOKIEPATH', '');
//
//define('DOMAIN_CURRENT_SITE', 'localhost');
//define('PATH_CURRENT_SITE', '/wordpress/');
