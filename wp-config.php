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
define('DB_NAME', 'DB3334388');

/** MySQL database username */
define('DB_USER', 'U3334388');

/** MySQL database password */
define('DB_PASSWORD', 'jFr32Rol9FSpAA4UG');

/** MySQL hostname */
define('DB_HOST', 'rdbms.strato.de');

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
define('AUTH_KEY',         'wgAMqk5^(U#aj*wwwfbjpCHtW971ZHLBTF&3o)s!Fao#Vyj%VEs#Zalq8dqhY0rr');
define('SECURE_AUTH_KEY',  'Xd*lmGunfqh3YgiEc&yk6(8fe9Zd@Gs(s0Cs^2)!wiX6Vk%P6AkP#8JhAdFGHRy)');
define('LOGGED_IN_KEY',    '9FUN12Y)49MWD&y6qbi&wCP**cfyRklQz0!Ljmq*1(VCYhY&n1ZgTetT)l8H2KiL');
define('NONCE_KEY',        'h2YYMfJxz*5dKGxnugz3J!q5zpiKXSu@fI*SM%GWkMQ5w#2K1T&r2mncEHiBmU&y');
define('AUTH_SALT',        'LyeGN5woY3Epzg)aPb(OqObam15rYwCV*4M*pNzQ)GiETcW!tv^mdA000eRrlx2L');
define('SECURE_AUTH_SALT', 'CU@b(VrsXU82GTjQXE)%r)dtJtB6myq0^&Iq5r98gmDP&Jbi1kmHa%FkYRSqrw&I');
define('LOGGED_IN_SALT',   '8e*z&wzUxKk4ZmfmXYm(h#ZBtzd8clhTxdpm!*pQqPAIHJ0*!wtKyKtXw(5z%D6e');
define('NONCE_SALT',       '38Ncr%%Eaylx*A&FH*9g&3oclwv!B*uCAoTtyKQCcY5knh^b6GTOYaCR0vYhvEo*');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

define( "WP_AUTO_UPDATE_CORE", minor );
?>
