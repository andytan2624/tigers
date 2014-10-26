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
define('DB_NAME', 'gosfordt_tigers');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', 'singapore10');


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
define('AUTH_KEY',         'M503E0LOf0yg3Vm1nz9UfNWDmCLRiMBmZpfs1TqjdwirlcWNXwxXUHBVP58OafQl');
define('SECURE_AUTH_KEY',  'pb7K5b57e0YPf0DwS8DsjfmsxDjqMWLwY5HBH90NNenBAFGZGjHRXSay6Qj0GNfg');
define('LOGGED_IN_KEY',    '0MTrkMsro15PndZlC9DsLsPHiN1P4P0tX3nx98E760rsVEDvAfRw0YTdEhkLVnZo');
define('NONCE_KEY',        '2785XIUDAAMmMe1yncDsjgrLIYhJji16U66VUMozzCs856QvQY5QCe9Pa7P0Lf1k');
define('AUTH_SALT',        'QuWAWNhbL1qPp1sYavaPd3iz1aTAukidSIJsv0LapOHf6OkNeWt3N02zMxRXFJJc');
define('SECURE_AUTH_SALT', 'GySwIYOCA6xn8vGjScjSdlKdVNeJMIDk4PYvJ3oUz89i9Bsaga9O3wDCmkXvlFpa');
define('LOGGED_IN_SALT',   'RrFkrZ7URHCivf4pllWqflgnODRb1aGYufjDZurbQ32Z69VgE0QzKUqCwEQeii0P');
define('NONCE_SALT',       '4UL2htsc3afNWVki4SY4tDskoRtOW9PGNBJSRSKqZIDFU8EhNIMcfIESSVazHaCP');

/**
 * Other customizations.
 *
 */
define('FS_METHOD','direct');
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
