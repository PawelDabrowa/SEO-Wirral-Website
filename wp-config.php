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
define('DB_NAME', 'toolsmar_pawel');

/** MySQL database username */
define('DB_USER', 'toolsmar_pawel');

/** MySQL database password */
define('DB_PASSWORD', 'pudi5001');

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
define('AUTH_KEY',         'md<j26F#U?8+;_FnN3.,|J,?`D>cP:t6sZ^|:P.zxk$)??]9d!C6*$`-]|~0?ulY');
define('SECURE_AUTH_KEY',  'S#JQ|/FPxG4|(MJmR&hl#RsFmZJ?>o>#,Ddt:Pf!GK&9PTemys#P4+&Z:}jP+HK)');
define('LOGGED_IN_KEY',    'Znp{#j .55wkZs^g}rrfHAzZc2*xADWHf&BKs5F:}$>Vkv6^H)P ]Z:bsL/igITh');
define('NONCE_KEY',        'O_WBv)b]zHO7+^%DX,b]Wo|.D5pM#^GZ}+a&3C<jpUU_n6<TQbvz{aE`sbc#FS(d');
define('AUTH_SALT',        'KKG/O^w-o#v@u8<g3U#`~$DQr&^/T#,tf1Pn_2V13Bo-p!U;FN6z5F&3Qu3VzcGB');
define('SECURE_AUTH_SALT', '~y|=Te-DZ;(NSn,l(PAUc@G5J<7M2C5*jpPbRCmv;&K3O%/Ip`#oq>iZmBJ?51w&');
define('LOGGED_IN_SALT',   'b_e<}SXPsKgCO>Y}/Z);2w^#_EXez<oz*QE@dm.y [s,+)%m!^rFQ@1^J|ZcGe?W');
define('NONCE_SALT',       '/M!6UkM4zGQ_.mQ-}M)[6{/fay.lYNT4z94yp3~dpDNo5c<:G~S#&!c3uLchPl><');

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
