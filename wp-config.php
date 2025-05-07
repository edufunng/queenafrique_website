<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edufunik_wp474' );

/** Database username */
define( 'DB_USER', 'edufunik_wp474' );

/** Database password */
define( 'DB_PASSWORD', 'w00]k-eSp5' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oz4tyhbsww5xyutszzlc2shgyjdg9lghfzzpjzaht8fn6we975avvhqfzodth79l' );
define( 'SECURE_AUTH_KEY',  'yanvex8p1l2ey1nguvwufkn8t7p5t3asupby9wb7v7lupmhswe3ihonrcos2av49' );
define( 'LOGGED_IN_KEY',    'tfcozegsjq8kzjytlie5sa1uzlkwlnkitpar4ybet1incfk6xysl2h0mhcsju302' );
define( 'NONCE_KEY',        'pfviczbh9dzqgbfqess3fdpbrkurdvod38ftxw3zam4qlngxxkww4w0ovu0zl8dv' );
define( 'AUTH_SALT',        's4q1v0z5dm4xe3g3nuzdpg22mhg3jjujmr7qpht26vqxc5ikecuuxzcgs5bfermy' );
define( 'SECURE_AUTH_SALT', 'norh6wlqmp2dm8bpfv1aolkq5i3tagtpovfyduhdptqdusmtduuloovf8jaoiokg' );
define( 'LOGGED_IN_SALT',   'fmhgozrrmbvncisnwh08896sse7hkib6qlsiilavvcdaioyloxidtynej5yajruz' );
define( 'NONCE_SALT',       'mu02jy5arkzbsswi1pzfzyca7bauwtwcapcsvmapxg4axisd0ulucaafaug1pwfd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
