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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/app/public/wp-content/plugins/wp-super-cache/' );
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
define('AUTH_KEY',         'pw8kHRtgfJdRcnh9ErLKgZ6JryVHoINH0L3tunqUl0ei0Hq/VocX6I1a7vBq4Jz1kVkjIksbW7o2cLyE0o4PBg==');
define('SECURE_AUTH_KEY',  'LYaX/Pb1RRwcHPtIOb00rvr91Y455N9vzaidA1a+/1Vm0fgPlzus4TWcyfr1Q8oXQS4SYAQulyoHxP2Dvxhy6Q==');
define('LOGGED_IN_KEY',    'n/S2FSIgdDBxOZ7gIeEKhSb5rGM83HMMq+rceWU+R8OmpFomYG2KTaOJevpvShXnigjIwx+ODKyYF0R/EVjbGg==');
define('NONCE_KEY',        '5cofz2lyKQiXqkx2MkVKpXi5ZLTvdYh0wHx/EZHVuRu4tvLwxDVSSDH+jW+A2R34WLSYaklWioyq4TXENwh6JA==');
define('AUTH_SALT',        'bwlDvap9ZedJaD3x5qK2fKnf3iEQNhkjzfoFGDd4tdAzDQK2yt42agQucu+EjTa9Zr/Szf9OFFBJq4JMLSaq4A==');
define('SECURE_AUTH_SALT', 'eQogMNnNvfdcu0Z+Ovl7IMKnMfvJeqEZR0HNgmSVZh7TZ6sAx7EXG8DlFsknGcMbewMjnQ2mqOdS89ApKKxwGQ==');
define('LOGGED_IN_SALT',   '/QB7m4bJ51Q3jL58eukSwi8k9qoxPqLYUTHfUcwIjkOt5tdhJgu2piGU3z4Ag1b6Km9xBy8PV8PtgbpiWicJiQ==');
define('NONCE_SALT',       'oGVnFGHiCytuLZszD2aqC3GNV+O2O2AyB+dv8xRNeetyD3erLnjAINvYZg4c1ZWDVQ1fut55agtqXIiAYVHaiA==');

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
