<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.4883068272011610');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.4883068272011610');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY','XDBEFNjw_!41zm-rtU3hT=ZQafp@H?fMQc7M*,Dq');
define( 'SECURE_AUTH_KEY','GO4R5@EkKosnCDgBQ,viu#8BlbUmu1?LK&>Dr>5V');
define( 'LOGGED_IN_KEY','n%Y$oBeW?45Kuz5)*Dyzn@b)7VuBRZRFh]ls>HPH');
define( 'NONCE_KEY','y%8uQ[jlF=mhY1B^h>,g7-%j#&)xlbU1LmGAhS9T');
define( 'AUTH_SALT','(K%9E.m/+u*4m9_.K^oIJ[P6<b$Z+4(#f*4.YN,#');
define( 'SECURE_AUTH_SALT','XPx*Huyx>RO8iiU.G=O5].2lewb.GzIJ.+9]rq.p');
define( 'LOGGED_IN_SALT','=drc4>IE^,Q0E=eKiq)/3!]Pl9b@TbXotK,A!1vP');
define( 'NONCE_SALT','19x!HsGX$MjRKerNb<3(LgOKj7k%x<u<<YG0)Lw2');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
 function wp_new_blog_notification(...$args){} 