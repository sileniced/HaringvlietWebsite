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
define('DB_NAME', 'frontpage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'haring');

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
define('AUTH_KEY',         'G~b3G^LPUht:=tl7D|E<77#sl>r8&v3<w6)ME80a1)fp(-O~(p9z5]K%/?]Rrynh');
define('SECURE_AUTH_KEY',  'OT9Jx0Ic/vmB;=;o8Z;%PDLOGZ},(_L4LJxqcYH+?)Z1Z%2S27wd!~bK={7B<`-|');
define('LOGGED_IN_KEY',    'HYg3!LdY,jzT#If&@)k/TH;UjdiF_ z<G-Dn 7%;eB{yq[(R<[)-:>.wMYw`dlK-');
define('NONCE_KEY',        'xfBl*?<2iU72Gc_ceR;ZKo5AjuW%+WShu4a^JQ(qV3iZ%pw@n2wC2$qrpFsh{{l0');
define('AUTH_SALT',        '7#P0=h`dN9eDMB6??F$+!o1.e,ljVxu$O+R.RuoW]mga=SL/!_OY H5igtA+/{*%');
define('SECURE_AUTH_SALT', 'J.nH#meEVKWZEVr.3UaHq>Db=}B(;@wG%%5n<y*avzC~_LqIxyA4=aI%NuoDMqev');
define('LOGGED_IN_SALT',   '6VN;unX>BNX%](&y64j:ZhpO{~y<WpNXZn=2V{y#?FLPLXB;Y@P(RrKM5!+B*ZQS');
define('NONCE_SALT',       'ZT-?))(jp_E-]%N/9wH3eW`YPLXv<f`~2ZmXAld]=E?@>e2Nt>k)36NqS&vM$%Ra');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
