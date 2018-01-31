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
define('DB_NAME', 'wordpress itec');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/`+cdJ?R/MiwVM|8F|!3mkQ3uq!J27x6.yc5x5Oy5OgF>b>J;xf-CEFj!jFagD]R');
define('SECURE_AUTH_KEY',  'C>oR<Y|wAeOH~E,R5wqfc6tJfcsCBZJeHPl&z^eKA|P^QAB>WTHK#UQ*!(oshX9z');
define('LOGGED_IN_KEY',    'HHOAxwHu,BVE@M3$n3-J?@WnGfNIv#~ .kJp/`A:l 8N_.gA2#^m;.qi.IqBT1r)');
define('NONCE_KEY',        'nKhhkvjR_N07(#aMBw855Q]:jx~y<:]p !x51>KXh[|CF#(pS?V Auv%u+lEo[ {');
define('AUTH_SALT',        '~6x$-^Ed)+z>1f;}],5nK{xBee,@*;mVZP2x[TzwjTdT~$>.m&Gq5_J.$:vC=&r6');
define('SECURE_AUTH_SALT', '$Nj@TR}wOl=j|FeOj9Q4#_G|o4C?O2*]N#VA}wF*7eR^tqO*$A]@_Uf(w<:G*:ZW');
define('LOGGED_IN_SALT',   '&0!~erZ_$3W,1B0wfJu=oZFqtLL!(40_{TS`8o955Xgm@^#u#CZ1F#oTB`$o;/@,');
define('NONCE_SALT',       '8zYd-&Y/oFnQ7n<G(pK o)o[//1#vHVYrJe<4S_R2Yz/1E~<)ZfID}w+Kqn^P&,%');

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
