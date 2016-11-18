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
define('DB_NAME', 'nltn_19124367_wp');

/** MySQL database username */
define('DB_USER', 'nltn_19124367');

/** MySQL database password */
define('DB_PASSWORD', 'baskoo77');

/** MySQL hostname */
define('DB_HOST', 'sql205.nl.tn');

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
define('AUTH_KEY',         '}oR#T]qpS@+r}^$W~p}QHzfL1Jc~c.uqC8N[M|(<4bu7jhg3,^h!K`Gv]z{+WNLz');
define('SECURE_AUTH_KEY',  ')Y%I}%%obMAL_tGb0FOO`C`k=+C:jhpe_~lgw=oH|`!B`b1cV6VI|qEC@sp-FN: ');
define('LOGGED_IN_KEY',    '1m0tEUA3Ij!4[@?zC P5#}RElGu^60QTn}z__PlY=7c6/CP<[t)3.8yPdcnQ~y>K');
define('NONCE_KEY',        '5&?~~7LBp*W1g@^eK<tgTV+xULKJtZw1tE+ 8tIi#K|.7j jQ`e.N-fvYEJjBB!L');
define('AUTH_SALT',        'tXFdx%94GmaVGS*leH&ZNzyX!)gm/A;B8 yf>ztuN ,2~#{P!KlN(-,# DZ,l6we');
define('SECURE_AUTH_SALT', 'SP?n/2c~sq`=^4C;>}b.6XY!rV~~S?%r7w?EvI)?!>&=lO7e!eFNer9^245dNTll');
define('LOGGED_IN_SALT',   '&t0%Licd8~R5x?+N4v#;@[{[#:t9DxQ.71duYJ)XT<wZHc(*diNrgQ=,6rD=*s%G');
define('NONCE_SALT',       '|fb-|<W^f<A(9,W%r])h{9)r(`OL[cN1-|0SzPzMFF~60]6?ZWcaetuB&)*_fnTj');

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
