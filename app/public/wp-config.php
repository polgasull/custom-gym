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
define('AUTH_KEY',         'W5LLtiX6Laarhttvzlhp2rnYDk/zTVsbO3mGRYxJG0D6hYDIKYt9ZrAlskDzWoBh1m6JqbaFFf8nwKrNLA4Obg==');
define('SECURE_AUTH_KEY',  'U7miancLO2PdKEvh0h+dBG2H7/cTFKWBRMW3B6NquynT91GvAjMPO4eT4YqB56uKnP7y64xQ7we15ceRg7Ou/g==');
define('LOGGED_IN_KEY',    'LHobIwged1JIEDIZLFdmLWQvUluI0bLl5iAAaRxAa/ZYmGZFKX6YEJXgkrF7Oit93nCWQQAkmcAIlyRQbrPpTA==');
define('NONCE_KEY',        'eZbpta9TBP2DmtzjwK66Mt+ZPAK3m92O4U8klJywPiRfUUC3Y6AiDx0rS9xlVR2lxs7Qo53oFgxVaD7jm3a3TQ==');
define('AUTH_SALT',        'KGrUpa7FAJMXt3WkMVnr8cQqPPOhbT4fKY7FFVyi7ev9HTy40+g7fAKIORh1Qh8tN+qAxaIeYKxXul0nXchhaQ==');
define('SECURE_AUTH_SALT', 'nVseUsiRYAFyQ7C0Uqx6GWH8JQlD1zj3FW3OkFq0QkEqE/3KuoJ+U2oUeFP/2rZwp2xMKMUUvOYmvqIjaHmiWA==');
define('LOGGED_IN_SALT',   '1Ocop7HpYGrDH5MzwqA+eYJ04WwICXsY4ip5XotDIE3JQLyzvw0c/Ttl133yMWYom2RnM51DRRFf5/Zc/ytJbg==');
define('NONCE_SALT',       '2BpUI0FYg4Dy05F7np6l8KMLgoa3mCCpfDwOxSeiHKxzDVELqd0o7LpDfcSEhXIzpOcP/hCtOpIcNTLZblp0pQ==');

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
