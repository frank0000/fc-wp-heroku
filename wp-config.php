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

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly
 specified.");
}

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
define('AUTH_KEY','Z&!y(.-b{^hmZ)w^$R>VQ4:|}7i(}Q.yuEajAL{,3HbMt#y8f+8wJdkSp4U%eE=H');
define('SECURE_AUTH_KEY','VXz_E4B;Wx4X@jKtCWDFdUoT}&nWKq9}6JAP=3|zpc/`.C:>,.{Pe|0UVMXd-zkT');
define('LOGGED_IN_KEY','nKk{,WqBmVTdQ,%@I+#g~-~>D2dP~8@K;9*P`(,I_pvCAg~F%,l<U,z_2,PJ-DNK');
define('NONCE_KEY','F4:#F4;U;{,6{jksB@&GSc,3X{$_?|v3oJO2XEv*5UB |.SA8.l.X%aQm0}5tYNI');
define('AUTH_SALT','3+DZ.zHc^4]jyRhR0^j+z^$V,g /hf7$1uU+p$)L=i@-2-,uZcS<er$2L7D+a,X');
define('SECURE_AUTH_SALT', '7B-M{tLyJ8Zt-{ve^c)+zzo[)E:W,Z>+6[F+]7eyyjMP-FP=Yaz(-|@|kW1Z,vq');
define('LOGGED_IN_SALT',',UEX&V.~|Vc([u-}52<&sz_KdEg>:<KK>Yh|+v#u!bQX{,v+M+8zU.nQd?die;y-');
define('NONCE_SALT','!/e{-],/%b$5BO!(lyM%F#]LEvLoUHY!lP0g--G ;yL[,7x3qYFY|{E=$lVM{_0H');

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

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );
