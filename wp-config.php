<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intouch' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'ky$<)R,{Czou.dqc2lGk+d.f8cjxy.yb!&ZXKsOQS^/<Z0sukQ<T~?m>1iLtY9:=' );
define( 'SECURE_AUTH_KEY',  '_[-$#MH0DWC%/pqleiXG`UOV#7EY L0m0MK,{-.n>Vm3K50[sJ~RtaYL0iNATzJA' );
define( 'LOGGED_IN_KEY',    'Km^|(|3eT7hf&GnfM!xhv0m:IEMo!Lg<*O74s=6JqL0ytyA~y,3]Ehl)Fmx9MR1g' );
define( 'NONCE_KEY',        'bOB`Q5;!YZ6bA* d|RV&R3)VO{z%hnuKDs5 3PSy Na2rz <.w|P?U@3HQ4~y[-S' );
define( 'AUTH_SALT',        'Id`T0jh2JKtd!z}HeB32LyIA XCD+mj+-IY*|eD{pH7W[9pEpZ| _c$$RZec>W8n' );
define( 'SECURE_AUTH_SALT', 'rV^wL8NyeTf!qb=o}uNBNvlKCQo3<qN+ZTo9#U3p`&8O}9[|{|>{4}S~oA.&nZzs' );
define( 'LOGGED_IN_SALT',   '`a??RR3wl>qQF,|RxmsF-9hxG_`H.%xp;u^=kr]M5~y2H&#_Xe1#{,MDt ?-*ST?' );
define( 'NONCE_SALT',       '3eW(4Yc$|I5Td9qVhGmmc7hI/75m~RN-Jxq7|`7sG:@& lL4@j)fI3(+0lU9!ey`' );

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
