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
define('DB_NAME', 'duniaair');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>DlA.ddBp!6L|-S?(#Z@LJtMT-P1Rk=}GXl4:&#|qeYz;CKathH)h-evBL&HTO`i');
define('SECURE_AUTH_KEY',  'GI;GvCLJrf`t$OQ#fRJ[;IhjyVUXGc%(TN^(,+<C-w!<QR2u+de$P1hYj1<Q;GCz');
define('LOGGED_IN_KEY',    'xvi3%a#W;7(`IwLJdSi+lv3#hb_0kl0&|0l=Qc7ydkHg4]Dd,g;0:Lx/#7-r#I4B');
define('NONCE_KEY',        'EPE|^|QayJO57,)*L52N-%/%gs1-?{>iT++7;@x2+4!yZr^]L!Rtcf=xmyYsic]j');
define('AUTH_SALT',        ']LQv>9w|{+0cg?06@r+E75|[FCvgQu/Q8qsZ8wHxm)n#~P,zhu2Il7:u-/T4u]qS');
define('SECURE_AUTH_SALT', '|Qegu=<DeaumhRr,+0F4eoUwsR9IsZ^s<U|vS.tq$IZAZR%wMf9dh$faOd@x;x8[');
define('LOGGED_IN_SALT',   'GNJy)PTR(4e6+d }HCkmW{:[1THoHu?d1F-csT4e,#ubMRkEE|]4&|[})`.$&LQ;');
define('NONCE_SALT',       'axAAIy{1Bp~Psc(qM.Dv5kUZ@;_+kS>YFWT7 &mdJW47>AB~Mn>Vi7 I#w!/UV;I');

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
