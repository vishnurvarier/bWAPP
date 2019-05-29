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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'test@123');

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
define('AUTH_KEY',         '0oRHYtBX{&z<o@XK3%n8gZQH:ot,G)oiph~>|X9rD7teeE~/aGB|C1Qj@UognAMq');
define('SECURE_AUTH_KEY',  'A@qm2SQWsFsVA5]&rI>+Qljp%:^#lHa3J0`YIgpH[Fa-jZ|hJ+BJ.CJXg9Q{I^S0');
define('LOGGED_IN_KEY',    '6../k`!h}T?@U#A+>A]P;c!W[8~h:#JXMZlEN}N{Q^Io;oRiwz7lZDnz$![@~+9I');
define('NONCE_KEY',        ']vr13:UbD+~uJEQAH|8Q8e$Wyk@Vgv7QOwHwQAyjk[.Pw/b@LRcHG9%b-yy}da>Z');
define('AUTH_SALT',        '5!Ce`aW4S+c]<F|BQ Md0XHv z{86[]|Zvf7 ^-V[`2/- uv~&9bzd..jE;}Y!/H');
define('SECURE_AUTH_SALT', '/,bK!&IvU)w:![8qu2dw)5|uJ2SPnPK)e.P^zi_RZ:6<6voPQe0^vFtl-H{tz, d');
define('LOGGED_IN_SALT',   'J(Py=[t0yK#pVWP&yMkyLoK_!OP;$ZB]c/?OzKLhQ50}aIj>~pNWd;8d e;-[XD&');
define('NONCE_SALT',       'd_/W}u3}G{0Awp@o(Lyc]SmSeHxxByXSA-W5@S[p/=waB.xO[kAXDJ9Bk.sjb36I');

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


GYoGf4wSF0p@D53&qs