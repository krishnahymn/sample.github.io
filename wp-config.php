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
define('DB_NAME', 'mydemodb');

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
define('AUTH_KEY',         '#<qRQw;,TS:TNR@{?A[Gc:T-6~+$e,PG#8Wv,nw|DeE%mo3=p}Su+H9`n}D*C/%a');
define('SECURE_AUTH_KEY',  '_4{$,cm{mOUoyxkCrc6H<fB#QAoq_A)v)!,H`~nVnE+0[10}rpV9#4+m068bplNx');
define('LOGGED_IN_KEY',    'kCIlKdwAU ?>12yPBKnB6q4:07nR:!pG/*f$U?1v!Pza54bZas$n}I+51E`$lcfJ');
define('NONCE_KEY',        't`TmfTG5TtEsJH+X-Yt-R`.9f1ec+4hY4SXy<dL%%eT&?]e;JgpYj@LE-sAYV:-K');
define('AUTH_SALT',        '^1mnnC-~RwNEgqh5DuY:Cpa&|{a{lk!|Wg&lHKoW;t%A+(p-8xA~>f$-!8k;~Ul~');
define('SECURE_AUTH_SALT', 'BYg}zT=3Kr32k[|K?xWMqD0 a;c8Mu9Ja_iI3ORo(YVx:b2EV<1QS2-McoFV|6.,');
define('LOGGED_IN_SALT',   '5dns>PTH5!9.&A{QN6!US/;l=}aq_#6`DNc~#xj.S5)+%S[ZzO5TNk`sIbR^+}Q^');
define('NONCE_SALT',       '!Spnu]zw0WQbp.pmI[Bysr.KCHM>zv;Rp7xX>sA0zT/qSw/?_X +A=7lF,9#6Wg/');

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
