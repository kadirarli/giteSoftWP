<?php
/**
 * User: kadirarli
 * Date: 20/11/2017
 */

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
define('DB_NAME', 'giteSoftWPDB');

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
define('AUTH_KEY',         'i>y+1-(J=G-Pn/x{G-Z$ToR8VGUj|Tas>J%oPr73WV|-r5$6rQ9*s6tZ[-96fWf7');
define('SECURE_AUTH_KEY',  'ge-qf?,#8qLec{_ch0-RL*W2WtRb<EWO<r`=GjDhzw(QZ$wY/(f<LK]J8J+^/&Y5');
define('LOGGED_IN_KEY',    'nu`.V(%~T>#h&P>e=N(tt~CAt&7nJbM&Y[ZGztGeh4|o#Cwo#d*J; m/5!<{Se`g');
define('NONCE_KEY',        'PAxzE<RH4TXMQ@r3%c]hY6i*[Pq3Y!`UJ*nnztG51J@mYww![jPh`5,[#$Y%*s7q');
define('AUTH_SALT',        'xVZaGzD1UPLB- *+d#Zhq+$(F2_n;{D2RM1ga9.KkE_VO;r69On@X[/dbnSQ>t{)');
define('SECURE_AUTH_SALT', ',Lv@Oz`S)*4noOTzP`13+O~k5D<ohn#`c.@).Es) kkKu]O_;LJIO[V$e/Wn[cdU');
define('LOGGED_IN_SALT',   'mKNs]~!-;#r/H%+4`Lo4/@j?iawJ^38wf]gIrr]*zWr^|vW50Tju mV{ySX(idh}');
define('NONCE_SALT',       '#([i(fJG-KgC+f`p]d`]tKCEL]|+jTBc_[v1*%07BxCVA3qh#/ed%q~%**%t[2EE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gswp_';

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
