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
define('DB_NAME', 'sr_new');
if ($_SERVER['SERVER_NAME'] == "local.sedgwick-richardson.com") {
	define('WP_HOME', 'http://local.sedgwick-richardson.com');
	define('WP_SITEURL', 'http://local.sedgwick-richardson.com');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
	
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
define('AUTH_KEY',         'RpR@s?|QzZ_|&t|E`hv+{:d12VnGeD>LRl^p!#sR?TGNvqF)5e}+<Pc<)z-FzS1F');
define('SECURE_AUTH_KEY',  ') ]-D  6!mE>ar&sPWCr:daeyt?b5q:jrUk|lxj+FTw)S#>7(FNg.EFq+ZXvs99w');
define('LOGGED_IN_KEY',    'K3%yw0Ah,z+[^Ge%}7^Gx&Kf%^Mb|y!Ri0pSd7VqF%IC`j@>M/2R=`?0/7:3Wj~l');
define('NONCE_KEY',        'xIqU)b+[u#[.|FQ`-~u0-5lP_M(J%a@yo`N1d||+z#.7?>|UUSWG2y^+Fj!9[^ p');
define('AUTH_SALT',        '7_:QHdm(Z(e2UpH|v53CLqQe;QnrHH*|T8-W6r&An9P@U6l,8.LG^E%=3?iRn|2P');
define('SECURE_AUTH_SALT', '%a j)ZDxog~M%jwH]A{V>]=&Z|M~ QZlmO$YxBo&Z[&$mf?8iMIR9eblEGC/M+m@');
define('LOGGED_IN_SALT',   ']M+Z%S}_fL--h &:hfeUN-8%Y(vbd=dHhwL2}Ohg/qvWf^we)gG@MM7Y:=RZ`gNc');
define('NONCE_SALT',       '{Ir =#_)^/h3G]>j}5p@ub4n]u-`n&R3x}B>5sn 9)s%z@;9f0=fG!3FGF*0q5,>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsr_';

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
