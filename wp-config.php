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
define('AUTH_KEY',         'as+LfCFMjt4a9Fv2/sU8Km1KIgBIMSz4VQrQyczEvITZA0xtDj+2tsGHLi2L1eeZ1b0zKcaMET5f8Yw+fiaZCw==');
define('SECURE_AUTH_KEY',  'DzyVDcrb0FwuSTolDWm7yNvNbANmw9+RqUVx/7oD58ii7CP+81JILGQ9O5gDPCVgau2TO9sc3JF+cwpXAPoncw==');
define('LOGGED_IN_KEY',    'OkmUiv6/S5LMxW39hiLuOy4KBpIHFCsU4xWY/CHo+BUJD4+7XRwPUqStSjIcUh0zLlhutDnb483AVYBuUyo7eg==');
define('NONCE_KEY',        'lnpQqbYnYbouPX3PJIWu7Qp63yTX7f/qPtTpwXIvh4DvC9iWZmzhdYrAwdIhD+glNGfh3F9ibicbC/+XReENdw==');
define('AUTH_SALT',        'nJbtyj3wzOBykVA0AvDYYN0Ut0NhHiwVBYGrJDc8si6m5T+uDrvLgKdlcDbIeAYor7lyVPXfLpOxiZaDAQ5u4g==');
define('SECURE_AUTH_SALT', 'cAyAAS82VY7c3qWWh4c4GLCht7Xhd2iLg/ypWczwFTavkTvkOzyrxzpFnR5yHybXRP7qLbjc3cFQ1qUIGe1HHg==');
define('LOGGED_IN_SALT',   'QkOe7gcWAQPxEaIPz+t2POAJZegtgkdH6lcLPCkRvTbXr26p1bfDXckXoI8BuzkJkDuZdS1Fz8OuHBWkcSRXHQ==');
define('NONCE_SALT',       'N2kkYJnK456M8Fq3GbtFApdlLCKzyEgf9SIX74vEk4bjJtjoibFuBhVrWs0KQSMYyX5CXT92L/fsgpmzBDFbiQ==');

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
