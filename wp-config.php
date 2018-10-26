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
define('AUTH_KEY',         'jc2XD_Q&e@C6L4tqu*kqc>+f1I@*-1c/Rd#k-p8eB D!3L4*|g5bwIl>wuXpXyX,');
define('SECURE_AUTH_KEY',  'S|e8@q^nB]t;tlb+yR{~,M&g!^^gAdPIO3Y?]#txXU#<L*fhWp3PV,ar2c`+Zu#O');
define('LOGGED_IN_KEY',    '[E*M2m&<T&kC{F{C/XP7+Yoz/J?YngvHOP+HN$wI^5Bv>m5K.H;l~p4]r5y@x|Xf');
define('NONCE_KEY',        'P2:OkP&Doov6{&BGTLL5p)a!9Yr<xk:fIa W`0qK0 EpvjyWbjt|wkPjEYV-Mx}D');
define('AUTH_SALT',        'Ecmgo1`7(PT7nom]OMHtr:U>2me!j$?:7OrQ|XJ%x0eGBBJ<^hpiHE}*L0G2$m6R');
define('SECURE_AUTH_SALT', 'g__u|F^x!tH%jLCA2LRK>kRR&,4yXhxga2|;qa61q_WkpUR N(+Xx$pYa<%<[$4Q');
define('LOGGED_IN_SALT',   'OGKC)pQQN#h)yb26V[knnLO+C%GZ4a1A/P@Um_K.tF)-,Y jJP]!()q(V&;/9}-7');
define('NONCE_SALT',       'r>S(7|w/N7xe(kiF&X0M#%)h||m14h4q}EAne6TC(*f`/l/7S:riT;3LowJR~!Z|');

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
