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

// Fix local dev over lan
$s = empty($_SERVER['HTTPS']) ? '' : ($_SERVER['HTTPS'] == 'on') ? 's' : '';
$port = ($_SERVER['SERVER_PORT'] == '80') ? '' : (":".$_SERVER['SERVER_PORT']);
$url = "http$s://" . $_SERVER['HTTP_HOST'] . $port;
define('WP_HOME', $url);
define('WP_SITEURL', $url);
unset($s, $port, $url);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jc_ace');

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
define('AUTH_KEY',         '7TwzGZMx|[6b]aKPD&E&4p^fcBdd`!8Q@~~st!h Q1{NNx#.vj+<Rs87WQn1qYMx');
define('SECURE_AUTH_KEY',  'VXr~(M]>(L{x%I*dxy=?G:@Jv#==;-YmcWeM8`g#;?uFM~j,/}H*-feG7h`{k|nK');
define('LOGGED_IN_KEY',    'Jw(G-`lV{gMM@[M#Zz#c4S-a+.8%[475Vlx98G !#}zwNcC;*eo 1S*Z`OD&`&RT');
define('NONCE_KEY',        'F[! F{]xf>~v!*opv-1=|Xo?b!V|i+k|%RZ6piyx}=WH4/|%4[QFr|8EX;|_RTg,');
define('AUTH_SALT',        'F?+31U]-vmQ8&_Mjp>U/X%h.Eb31s[$ogdTr@AFL<zxC!|xnL=VGq@w:#7%$neg<');
define('SECURE_AUTH_SALT', '>_Ky7/;0|r:0~#>= =t%:j?tQ-[[E_wiRe+^9-iwFIX+pq{V[M6qs-m(iN{VM-H&');
define('LOGGED_IN_SALT',   'CFbS(P<.A }@A>3+r~Svu2w[g!(i988O/%Z!V~8z$&fE@6BewHylm9Y!&:(Si*3H');
define('NONCE_SALT',       'x&EYT=X|eG39AHRZ=67OaV~`D{v*i9M%uZs&+^!wTad)xymd5k{B|TA#B~G0OP4U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ace_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
