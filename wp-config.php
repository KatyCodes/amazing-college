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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'JDvA0tQIheLnsUBAHKkLYQAlFTlx7rwJGlslJsvdLtAzHvpDcDcFi5Xp8Jhzq3766xCZBvQ504UdbXynPzGqyQ==');
define('SECURE_AUTH_KEY',  'eSg6EzkxTq1BeUqbwm985aQERg96TORrgT2mkQosVFsVMrneNUVm5S8Gx85Bx83AnGWotLbadpaPWWZs6GWl3g==');
define('LOGGED_IN_KEY',    'xV4MuRLEsk9uqO4Eqy5ob2qkhic/wGa+eCiDXN47+zT41x2kZlPlj2P2HacrTNRDfe6ohQ3n8m/2p8n+Gdfcaw==');
define('NONCE_KEY',        'Htmxcfbnin1ILT0aKfMFuJw3y+y0C9T2EcqEmSMHE/DtgnvZT9RopOY02+FZ3FR56EXw21Xm40Y7F1waoriksg==');
define('AUTH_SALT',        'G8nv4TWK1tNd5/NG+l17IKsysH+Zni3oE4T3lRgu7mLGCTbCl+0uNE6PaUZ6L3oFt9sL5tqSoDksdNFhUGdPwA==');
define('SECURE_AUTH_SALT', '4hs9mcDa55e1v3DShdJku+CM7CDpfCrbg3HXnZf3aQWH93R/G4Vm09pH0K6PBGfZve/dUgN/H5LW1fq7DMmBbA==');
define('LOGGED_IN_SALT',   'AtNXYyjQD9KnJkVrikHSBRZFEnulZ0y/dpLmKPtgorX8N5dNqQ1XaPdQ6LjIBfkhSzgxQYF53Ke+/bdel/kvIw==');
define('NONCE_SALT',       'lXndjGlikV1OjrysbW9CJYXGv0nKzicHGcDcHQUvKWPkdd6PWQYimtKFibjPqDfGpCIV3MhtPhBDZuiV0HkQaQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
