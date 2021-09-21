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
define('AUTH_KEY',         'nsvot9wDLJHK8vv4GXHrJJO51omRSbw5W7ZbUu+E4CYtdO0KW5H2tIV5WHHXluwCHfV+TjTdekWWDOFdf+i0jA==');
define('SECURE_AUTH_KEY',  'RVvZIMepWpIYoc1aba0HHO2VDxClTJAeYoSMPAIYzX7FvTMvu0ZFg5HvCSnMxltnOc6Duqzl0h9vBQghrJXhFw==');
define('LOGGED_IN_KEY',    'ng57zVTr8wCrpxsypT8qNFg+yg7XWqq0c/SG0I/3vjCp7U1sN2+NN0SSYyTNyekGLQmgTZSXXdo5A7yltRsJbw==');
define('NONCE_KEY',        'Bp3CFTLlRk9nfPE8+pwIwag7+2iWSj9ZWjNtev/dEXpMvn1D1dkRR+WlElFgJtR81RMMnkTlh8ODshxQ88Uyfw==');
define('AUTH_SALT',        'uBywv/gaAEZAiZQX1HGDOEJytD1ywuVwQSowFQ3rqHlKWoe7BxNH6ZNcQEYDqpEgH+XNBHGIc6MijJqcqUkyzg==');
define('SECURE_AUTH_SALT', 'xFmPelLAGBa/VutVcfR7KNMGPW+Nme5Wrl7/M34pvQWUjU4CfFZH7H6gRO1jDGYlNRJifDlEC8BcOUH7Xwf4Mg==');
define('LOGGED_IN_SALT',   'PU1Dp/UAcW9gxBvJyaFndc6JPJ9njQK7D/kaDbuKcPyYSfnuCctu4rJRzvCHhaXU0U8OiFQuqqSyfAvtFk3qbw==');
define('NONCE_SALT',       'XzCrmeRMmET5EnIVcRhOF30njAeAZpYt/lr3UbjatTOuA7tVFbbY1896aKi8yaCtki4SMqUJEmxRd0GOyzdBdw==');

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
