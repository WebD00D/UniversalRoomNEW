<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'H1104_mysqlb2259685ebbf29ae5235c3aa57424813');

/** MySQL database username */
define('DB_USER', 'H1104_usr38db870');

/** MySQL database password */
define('DB_PASSWORD', 'KoldingBilly');

/** MySQL hostname */
define('DB_HOST', 'mysql01.scip.dk');

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
define('AUTH_KEY',         '3~HrpV52x~JDV:j,eV<iJT}LZM0[[yq8~ s[QR1p?IXH?btZY[{m*Zq*|ax#%E2N');
define('SECURE_AUTH_KEY',  'c]g,OOj.$`e:|:!BS?`,W]}0`{-]WM~5u?Bq%;-o3Y^z.1(kRa!Psmom;ib rR81');
define('LOGGED_IN_KEY',    '~OpkA<+ TNEIrHO!h?!Fv40-T:-SM=4_c]zA=SG/cww#*M@1vA(>!GAO0WV).Szx');
define('NONCE_KEY',        'PK.}*w]|>cPdGIs&FxnA ]tpX5nieS=-_|k~!R$8.-<@/S_r8bTmLp7C|G[O}+Lm');
define('AUTH_SALT',        '6HW^mJf--tGjU}|=#.#*%c=![Wz{.LS#9=r)fo$L`cJR;0m}W3kttIp;f:HTT`xf');
define('SECURE_AUTH_SALT', ':M!oFh7n- [rDpzIM/?}-E;=K0]n-z#:G6h6jsQJIv}m80Sbvc+25!}cSg,UzL%J');
define('LOGGED_IN_SALT',   't,+O;Pout6{? d)I1I-Hx[J$}};U(^Z5?/!Uyd>LsmU{q|(.r7Ga% ]tTr9f f|`');
define('NONCE_SALT',       'S)lJ-Y$-~-CiFznEB?aMjsd%4&z![<8&M8i]U&?,|3f#BwKdB@Oy]/@N-vv4|7^G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp28321_';

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
