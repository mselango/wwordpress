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
define('AUTH_KEY',         '|rS_#3Qp#mwPx5KFN-PM|18bf3iuDZ <au@<sRs1q`h#Ydr:6_fyT_s{ov[bV98v');
define('SECURE_AUTH_KEY',  'GF@O<g; bQv_*`a~),S$26=j1K`lMg+,8nZlm?4Th*>$5U{vsJ;7$z;m6|SdTj{`');
define('LOGGED_IN_KEY',    '.`QE|-mZEw*gzJn=%@#?ahcc}[|cLYA@(cYbDnc(q+i{F?VbpcAe{nTvv:CpI$&H');
define('NONCE_KEY',        'cd8n7izQ;<ReEYU;o8oBD)N[XC1Z`g?4@V7Jgz>?}?$]Es_zo+oI$CW/]Sk#LWTg');
define('AUTH_SALT',        ':rKI**rqS|^L(l|!$z9D%rT6F ,)uO*#f!A-:79*nn<6h@|ZCCJB:+L9VNv5A=VU');
define('SECURE_AUTH_SALT', 'dg,z[$d8:zK{(2$5F~N/},#`G>r}7@U; ~|XX+CpJS|#W=#zX?wO_XZg%zN8`]ID');
define('LOGGED_IN_SALT',   '0zE>>=mTVy0vUA4-yiJ:-Nx|`hH[-enc[s8cm-]nc#@>((0z)-`vzI-[p|qLcj!C');
define('NONCE_SALT',       '!7dVKK=98,bHz04HOi$.A?7ht`~I.NF81nnq/kSu1NAIWgCFHQLILK*z<4bw%qeP');

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
