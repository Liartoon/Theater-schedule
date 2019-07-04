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
define( 'DB_NAME', 'b3_24095981_wp601' );

/** MySQL database username */
define( 'DB_USER', '24095981_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '-Spb(K7486' );

/** MySQL hostname */
define( 'DB_HOST', 'sql304.byetcluster.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1pkmoy362uyc5bbjvvwknyprwpjfmv3maxyg4fx8r0vbijxy1yxqe82j3cgfzyzo' );
define( 'SECURE_AUTH_KEY',  '7iupb3kbahnvl28vzzfcu6o7bs83sf49eeoemllkmazjjygvgf9arkdmtmqgcjuz' );
define( 'LOGGED_IN_KEY',    'qgat3mdisiqk2s6mgdvplpf2awqox7hzmrx9pgncs5qsto0ap2wmweb10julyplx' );
define( 'NONCE_KEY',        '3kikx9s5u6mfudtveghql0vktv0zqchhoi9o8ze5s8q4rs79hmykrfzqlfuwvcgz' );
define( 'AUTH_SALT',        'zaivwgpudvktyix6qf99g8eiphqfrlj40dlk37oyrozqeshqogt5b7roumek7fzh' );
define( 'SECURE_AUTH_SALT', 'eqhdpdhojl42gobakzc5thymqpqlakpngm8mhtps7zzeshfveab2rocabtfze9tu' );
define( 'LOGGED_IN_SALT',   '2jyzs6eld6jmsygcuwytck4aglkc2tx95cyfxm9ikjk2h2n49bayjpzdzif61nfh' );
define( 'NONCE_SALT',       'novg1lljuycsdpoenjgyifprphfmmgz4hed8pfrvytvh8rjrgjbtsgvkqkf9psla' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt8_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
