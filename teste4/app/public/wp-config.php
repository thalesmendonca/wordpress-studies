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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YvXQE0gh9Fr5lmt6IUnruudQOpFmMQvJS6mdasW0NeAH0DmRGwk+jvhsQWVpDpcsNLB+Mf+m2qvleW1f3tTnjg==');
define('SECURE_AUTH_KEY',  'JL9KlROToW8OnTKplTzyO6Q//B4wCARIQEGeCSmKazAmEUzlCHO0le2WmwEiaHMxoVMIria1qFp6CQZXLkfrhg==');
define('LOGGED_IN_KEY',    '/ile0wMfJ275gy0xq6U89hdo8Yx+PHEwomODqQzyBSsxCUN0f6GkjdNakrilZGfKx4wOWUUQQTqRoPpd3CnFTg==');
define('NONCE_KEY',        'fbm24f4q/8oiJvQPXic9wZ1gJGQBG9POPTmuW6dT3vyYNPQJzmdxKZ1ZdGrzp6jnla20Lo+rM9oshuxKsenoBw==');
define('AUTH_SALT',        'FzMeYXBvafh21H6ffJweY31rPEng7Lbxwg4wDwd0PG1rIB63fDbfaYav+QSXxVNBkeJEKFJLxHUOCrWprk7xew==');
define('SECURE_AUTH_SALT', 'G00q2yv5ltRh4F/X3N45rscW2DIC3g9vpjxVp9Fu4wj4eGhggMLEIv06uopyqQMnDbPDQl0sAbf0c6yHbZ6vyw==');
define('LOGGED_IN_SALT',   'xAy6+trAbmip55oOv1so3GkvV/oTOf7RMvx6INFNzfXhChBOGmoereTQQsthsBN5kgRsuegBUhY6JyygyxHFNA==');
define('NONCE_SALT',       'U64ukmmDD/VjdthV1ihYX+p9Zt5rADwuyIB2i6Ro4cQFmcu75IQsPkWVAov+hfrYrxAWN8j94pd5D3WUQmY3pw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
