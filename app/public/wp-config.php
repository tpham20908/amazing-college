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
define('AUTH_KEY',         'MjBQ0yy/1qlUCch0nY/LJxI4Ial15eGyHynvcIKtW79It98cu+gEk0nEzEUrTJkWG7YvX8sqO1Q6ku6K7/8H1Q==');
define('SECURE_AUTH_KEY',  '6abL/D+KVBQCi4UnJTq47h2deq5Jk7afQdBnchYLTBmq9HGtClRo3miPY4W6d7xIsW5z7X3SaUdJz355oXor/w==');
define('LOGGED_IN_KEY',    'ZgJAFVEV7D03HKfk4wNBbcWkspgE5//2NjMN+c0HFyYsXs2fZGj6kzjL3EdCHvoGCOD5A1H43gmvIFDYz+oP+g==');
define('NONCE_KEY',        'ZEJPYwQBCoxLlIVnY4bVYFaQ3ygeExNsyyswE1KYgLbhWU8KzWYRRu+r7xHWZktDbRl96iggDPJO84BKnLtb1A==');
define('AUTH_SALT',        'Kw9SeODZmVkeoQqIbumuXHpmyo7uSic0ECis8xWunUXrZH4dqqBPnqj46T9vZ2HTGfjSw2mLjV0McwaIcNKLbg==');
define('SECURE_AUTH_SALT', 'PWoDArdku90D385+r+W973K+t0SbqZsR5WjP4OY4advoJUnazd+wQQRHXsnfwPSRBY6x8K2l7g2FfCKya+osHg==');
define('LOGGED_IN_SALT',   'x29ctlbXQa8wjqzdhI8HV/qTRZsu76dDtkmhic81HgTqwJSWxSQG3OrIDBMXM6SvUpJJMhEKrCsLi5Ay1oMmyw==');
define('NONCE_SALT',       '7Fny84uyPblp1quzr7gqDWyBnh/RGCq8qAngz+XDsLazCu8vTerOr3tGlfHVGd/l+ntNBisIbqzsJh+zSmj1jg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
