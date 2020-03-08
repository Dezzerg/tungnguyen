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
define( 'DB_NAME', 'tungnguyen' );

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
define( 'AUTH_KEY',         'a-DLH6nSiA$-;A_iya@,k%qtsn.K-$)T5xNL~7Z+Fo_`IQUPmyF.daJrYlAk|xfn' );
define( 'SECURE_AUTH_KEY',  '>,%vgGZwVX9a;5+hbDGiy#N>o%i;@sOv5!/%G_pUUF295y,:$$)!.$:ED[+F$Q9G' );
define( 'LOGGED_IN_KEY',    'oG/vD:~/~8oVVbi- m2^LiD1%!}>!8F%vr%:mwWxH&wqpX<0]8?]zXtDRmg^EKa+' );
define( 'NONCE_KEY',        'W[:$Qz0u,Fi*R?igj_i2=lrj,XYSYBBdIznC#S[Ky]n~ )}i*3NjE[Dy#ypupY z' );
define( 'AUTH_SALT',        'mcJ2{7`xZS?Ob=luTwT1F(#L?Jjv@njRkmo#1t6lC};|[4AvTUJGU3e?aEzr8g 8' );
define( 'SECURE_AUTH_SALT', 'Iu;(Cme{M<U:dQKu0t+|RoQ:pFsJc(5oD[xbz>*}J9(6|sHH!hwK#i31&h?pi:LO' );
define( 'LOGGED_IN_SALT',   'X.fg(C@YJ8Wh>y4&ZJoJ)[w%yx,KiLtG1CO+i/oG?G~LC3LN+@pBU^u5iPK4HhVZ' );
define( 'NONCE_SALT',       '@xeKXk33wMw;Sp2mfQa#%[(k8F $P&OaII5+daKEWxun$H:0)Qoh?ETVZ`hAUY{2' );

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
