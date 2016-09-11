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
define('DB_PASSWORD', 'Royal001');

/** MySQL hostname */
define('DB_HOST', 'vergil.u.washington.edu:2619');

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
define('AUTH_KEY',         'Kgip<t$8I5Zb$e0_NzuXZNjW}9}X8VU`);!,pgeH4G3)rOj;NVt2Plhm1rNNg86R');
define('SECURE_AUTH_KEY',  'ue*]tbnw/@W5QU]+]d4ZX3Oj@|Uba_(AUerEA%]fd9]zBx=*6;zfw{@[,_EmC[<%');
define('LOGGED_IN_KEY',    'a&/rCd+~:h|&A)+`}aJ3:-(+p)a_@fbR_>t5JGwU2~q)tA;(}l]+CdKegSCM^4`,');
define('NONCE_KEY',        '0LHdrVdMfqyz[Lz3v&P7@@8!if{RPw*s_.>s=kS8n#`utw@tCqER-qHnZP|i-]U)');
define('AUTH_SALT',        'V6$n&`r)`ea?(y5+L2fT#l0;Q3,=SnXd/GL*-/7>]nGq+NbXl8)iyJMGQsX ;3+q');
define('SECURE_AUTH_SALT', 'KGLj}sp8Qf4HH:HXYO?h~Lw2C(08^pgP+DII*)jU1^PS03$2|]MyIkmf^rM{Xp%_');
define('LOGGED_IN_SALT',   'G2A[^RSVm28ES{5C*,lzB&z}rl0-AY1{$mX}P]fdpJ$!p;J?`?XvQ3X`w 7l|w3h');
define('NONCE_SALT',       'OUK0v=L<`6HfqHZqrC!rCRr+&NrGS~/GBs_mR]YewgLSyBp!wo!wj=UzcX.6?3Ye');

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
