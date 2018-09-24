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
define('DB_NAME', 'eemcn');

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
define('AUTH_KEY',         '$~;I94m.^!>imvuY@tre:v-U3pt0:HD6g.2dL2Y}z/*bZlgN8[[c;goi|XW:agp ');
define('SECURE_AUTH_KEY',  'Y4LVTf2Ay=<NzJAnb7-*IY0l2xAn,Q eS]_8qt<,!T{3RmXtPq?P47C2qE Gb&4d');
define('LOGGED_IN_KEY',    '`<I@hNvB0&J[/e4 S$3cMvvU SToG/.U,QXS|=CI$B A{35YG0+{cB~NF*=d)xe]');
define('NONCE_KEY',        'FvXHShc{|q1{Qt)F{Xmxn~Fu{^&c#u?Rk8;?6bWB??q!`U2Yf2z^O$Q!KOlg>~{I');
define('AUTH_SALT',        'iM<g_hSSxlv7K-^fBhnZcE0K$xYNT2<8=b~_&zr^&B$dA;<#v0y`jK5j5%PLdLg|');
define('SECURE_AUTH_SALT', 'S+6#2(BIaFg{:dPb!:y3O]`g:OdCVs_!)M~hRU>Lt>E3]^045)HtR}{W?Yo0?Q*b');
define('LOGGED_IN_SALT',   'uuwc$;o`<UJS eRJX*(DS7Tiu:~0/f_yydRm oQ$OU4,,W-)x@=_HA2GQ4V2Z42=');
define('NONCE_SALT',       '2S1Pwc9G^RwynwN_{VY/S)k4qAbsfMEwT4v5n##9G>xNv,H0&e4Qo]BUKu%BI1 a');

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
