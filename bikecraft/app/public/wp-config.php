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
define('AUTH_KEY',         'WBGdzredPbEMGsLrFAJtueT52A1U2TEfoBbbu4GlQncfMZ+y3hW1UKZgWM8LZ0YPG/AMEyjnaR155ocMRzvWiQ==');
define('SECURE_AUTH_KEY',  'uoCLHjIqrMXOt+jQFPLWdFcPsS3A7RccaGbeXRBY/Ev3GrdJySjSj16S+ZIYegaaAcGMI858+phu1NyCIs7UIQ==');
define('LOGGED_IN_KEY',    'CRAGGcZIemsZ1wR29qh/+IGsCoUXTav1vFZ/oVbne2mpqCHjdgTBjPpUavHjJKhaApQRc/G0iG+uh93/gbikVA==');
define('NONCE_KEY',        'wtIBgAZrMyXlRVt1wk9smsBJV0xWSvB/mIHeorXynRrQbqI99KpAQawTuHvNbjhpXlnogwqminbGvZUn8P2DpQ==');
define('AUTH_SALT',        'rD5UZGH86LpkNKiM79JBGEdeLgBii4dfrwY1eWO5J6HPSRkMNIaC6/iilHPTn9rPdpoPygn7mgiDaABlvsxG2A==');
define('SECURE_AUTH_SALT', 'YrGqZc2BcJIiz8Bsl9a946jIQKlMv2nvilOYGbwTSIn/ORBabtUg1EquF1hDBN2OYxAEzzYmtVN7LraDtWXgTA==');
define('LOGGED_IN_SALT',   'GEDcf1PFjgba1e61XzsnalpBxRoYYqoj15R5VZvSzdnVLpf7KRpY9IItOl59Qmgr5DPqp9BiBkSW25lQC3I84Q==');
define('NONCE_SALT',       'tV3srqhXt08FU5TDkS7aWE5CVmnrgxiW0EYdOXaRicDKR2yMi8+V+x0pYpmuAWrLqDncjl7Fr6ZeulrBDIin2g==');

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
