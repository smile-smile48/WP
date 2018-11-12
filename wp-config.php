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
define('DB_NAME', 'wpend');

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
define('AUTH_KEY',         'n+{e s~a}WPtp+74f5F/0}rQ>CF-0lbV3sDpS2|iD`|ESB|[{VxQ%1:xHd]2cWHl');
define('SECURE_AUTH_KEY',  'L#r3C]=dWKrF+b$[qUp)Sn7kC;Lyt22*<KPOzfaE=0QSB[xh gE*Ld#uBF~<l5TM');
define('LOGGED_IN_KEY',    'F9MH8TWe1+_sKEG2?woVP>H:!$H2e<2`~MET<%!CM#^bA)%xl}Gd^4+Jy*r;|6I+');
define('NONCE_KEY',        'z?z=YBL`#5+A,[3*&Yl4]QQ(-{] <$o;E A0?kss!E0UD1V+_%NM}CVA+-bO#rbY');
define('AUTH_SALT',        'U1zJUIT_$UM8m00)YPP^/u/q3Z ]|i2@<P;M@@_$=:k9_D4edLuAK%W-p^^2,>vz');
define('SECURE_AUTH_SALT', '8K<kv~w9`NV7pnf/4s)r6z^d|f~}d7;x<:v%fPt!iBC,0/+>vC,Zp:l?/ULgFC94');
define('LOGGED_IN_SALT',   '#$swf25Rg!@zU{[`AFnsawntF51!S%RV+y2c70Fr:<Ml:/$g^t1oApca.b95yjPT');
define('NONCE_SALT',       '&Q3YqO<=CPe3 t5<`@tp-K0DEl9J1ub)5^R:;!4_Q{eJ4Y[9yg)q4Jx~Gk$j<&<B');

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
