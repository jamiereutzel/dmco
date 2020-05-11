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
define('AUTH_KEY',         'UHrjbFeSTuuATPt8xh/PlybOVBrsKZaLKuxvsXMeWv86Jc8fZvrI+Fw5DORuOmNcM9/M6fp737AEQ0G3c0apDg==');
define('SECURE_AUTH_KEY',  'ZY5NIGX8dF2/ksgVFvXVrJ6wWzjKDnp3g/jcpwJGgDrAeq8+jtJPJ5b+nN16DFu/dk6WmxTkywM8aZyYbv8k1w==');
define('LOGGED_IN_KEY',    '+bAM3bSq+ArA7J1dgT/Cd5/3QaLxOqCt1iFsBNKUD3eLSnInf6spx9yJ6Q7aRHOFyfeda28Nm+bNdczMFxdY2A==');
define('NONCE_KEY',        'cXdoL7dHkDhLApZDqpAPRPfFYbY3CFdMdnMwXOplvnYqwahE6iLJ+Ea3oWaPrDdhdWGMQJBvvDIA7ZQIZobI9g==');
define('AUTH_SALT',        'aClbloRCJ+mdFtpPF2sl5+QvKELUXwF8BvB3n5w1EFGstU+nd9NdlWwqza/Ak8u22S1ReK6Goh51KPO7Y8gz/w==');
define('SECURE_AUTH_SALT', '7FHK6q82umaRZMn1ha5RJF0+IF9a9YpZtPdrEJholvQUMELbnxCuaFt455XbhI9wN9Ml7taJC7lSTi+iCZGeZw==');
define('LOGGED_IN_SALT',   'i+aEuoaBAMFRRyRU9q3H/zS952/CjQXq92oUR89jZsv0TEkI0XudOGx5VQTZSISdgBgAEua84Z1og52/yjCMSg==');
define('NONCE_SALT',       'KU+7wea7VrYx+ImVYHRNorw+lov/XgYfk68GBosQPb4dKPCyz+67LPiOgZZW8dFZJIMHIfmgvA2X7I6W8hL0wA==');

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
