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
define( 'DB_NAME', 'heatcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'K|H{rF@hTo5CpLxp3a170$3NF.$yB,A%%#__9iOoZTj-Nf0T=G?9E#rG _fdl(:w' );
define( 'SECURE_AUTH_KEY',  'L$<i,yaQqwG#<iE)X8ATD<_7bX KO;%IODKGd$uF/V`<^MSwQ,B=/,g*f8)YCkBW' );
define( 'LOGGED_IN_KEY',    '&mY,+$o|cqOdSGjf0w(_rLcFOjIbR0$^_mPAO]AvLK|%{UEo0SqzAB_goW-VWYhR' );
define( 'NONCE_KEY',        'aZ9`Z&!G#=c*1i}Mx18hY }qIsv8)!#SJb1UYWf)GT*UPNl_rf Xj.bbbxc<Yu`*' );
define( 'AUTH_SALT',        ' kX;+4Z8YM,<WRMKsQNhefCpo`O!6l-S4|ArJP33u|8s;T,66)TYaPojV]Ii3 %G' );
define( 'SECURE_AUTH_SALT', 'mvm3hlhO0!b]|rU#T#j X9K1Z}w Z]&TYTzh)|$n N15[77=TrpU#7$= Mh&OSn}' );
define( 'LOGGED_IN_SALT',   ')%*[{Bt4!h2q&VQxC5(Rt)=p?`</0uRQm ?:z%#_n#O5}1AM{pbY1:-.S[5gY1Yj' );
define( 'NONCE_SALT',       'M+&B=,0oAbc2/3b6M)v24c?O`n[qklF&)G~}?@XAF!i!GgY%]pG$XaqeYdYbBbg6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
