<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

set_time_limit(0);

define('WP_MEMORY_LIMIT', '512M');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zhaolong' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'e)1V^/{K=48|G}1:FoDK.2OOb?Lt_0QTSzDH2FV:*E%wxAIG9Uq<UH2B`gEBRKwB' );
define( 'SECURE_AUTH_KEY',  'b4]D0uxu5enec&pJ7g*kch4ap)`_%Pat~~||*@4p)NoE%F$RqiUgYFZ`.Z>nrHFo' );
define( 'LOGGED_IN_KEY',    'eZPTPr*fJx3e.*8uQYqhik[yu&t9cS(%8!E=*]rV#c=|HuPZ=AZ`#tdga/H6Q_F`' );
define( 'NONCE_KEY',        '-[:V@[:ErmQO9BbkGDH!X&Hyix&0u&rw,O;FKI;6U i]As.]:Q4*%FauA{|.m=!V' );
define( 'AUTH_SALT',        ')lOX=X4vp}tmSE/PP@>yF3GIS$wGSrO=JWNMJ0nPv6+_Y|ZZuK_x8 :<IPK>8a]f' );
define( 'SECURE_AUTH_SALT', '7kFZn7,nO?v+mZ-l6]kI|$gZw;Q)OZ-K7%2q1J%b:)Mc9C&{NA9lijnb^4z*e1Bt' );
define( 'LOGGED_IN_SALT',   '(.<5)R.j7A9cfV%tOs0s#pGQ x|KEZW!/7A/vgFZnMq0pM+>3&3A},_]|,0|T4@v' );
define( 'NONCE_SALT',       'OTBl/88$q$]j:iINe`0Lh. lV:Sx0QkLxM8<9YZ##Fr_(y?*7iSUJy^ArP*_W]S7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
