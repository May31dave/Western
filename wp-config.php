<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME','lunchbo1_wp584_st1');

/** MySQL database username */
define('DB_USER','lunchbo1_st1');

/** MySQL database password */
define('DB_PASSWORD','VLcJrLNpLkfFzXA.BVQS');

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
define('AUTH_KEY',         'nyvhzlgramvvxwgjf3vhrxxmbaheooajhrlmhgidc8fkd47jnolm1ketejuckws0');
define('SECURE_AUTH_KEY',  'txdhobsquxbvl2dhtor93plbr3sfiap1oihl19a5bofvsmxiychcllogjcgds0ab');
define('LOGGED_IN_KEY',    'mw7tmlz4gzorn024swxswz462vklqub0pihpuaksl1awi4hezok5cnd2c25ozvpm');
define('NONCE_KEY',        'xna3mcuz8xsjfulqzwf5i6q8y05nohilqqcno09m03rdn7v3u2zqiyvvfqaax8kc');
define('AUTH_SALT',        '9iffqt7wnhyjn8ec10ypjn794fb5ic0tmyg401jxi98swhqzxnwfgxpk6mlose0p');
define('SECURE_AUTH_SALT', '22szydxrn9s75tbn8jtww8hdykdjgfwg2jaxtks6uxr8gbxk0pvsqtajlcwf9xlg');
define('LOGGED_IN_SALT',   'pzngdp45tsee6hd8pddwths1qi9lpdooeafrf1abtpkakq1myvbcokorzlo4myup');
define('NONCE_SALT',       'lpo4b9zxbwimwt1m3s70wptmkzfiqi9m5wrvmmmrcnccinf4dkebkmthxsnpwzz5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'a5k_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
