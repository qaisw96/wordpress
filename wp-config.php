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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~&|:ZL$?=rS]kfQBGZUCP2_n&oEKp@s{g+D7Njsk>ph-TNXcW)pI|Zb}IB^+w[p`' );
define( 'SECURE_AUTH_KEY',  'B8WUtw DJaqU8bQ6t0u7 c{i:V505P`:S%WO8>!$ey?$s(/LU@_yldN^eLf{7[PK' );
define( 'LOGGED_IN_KEY',    'X)l`h=,eeVf@,h4{%&aI0K<Dv5O,g)|{!v<@e4Pv%lq%l!X-NbJIe%XUsd/v9i+o' );
define( 'NONCE_KEY',        'x>-[Psu>SFMWr7T3uZvfZn[nM5GyO~cW19!E]3,N2:;]g#|DSy6BM8.]+>2q6:^L' );
define( 'AUTH_SALT',        'bHRUl7Azo``T#%2j$[?u>itgr}B1g8n 7>o<j-@/vi4AB#Xrl7An]Y0GA^n>%>1m' );
define( 'SECURE_AUTH_SALT', '%EH_9Ndyy/z_OFDkDn9;7a.aTn)e0S^82v7!lcP&y`gzmol+>JY?Of7>XM~06Fb`' );
define( 'LOGGED_IN_SALT',   '8;,My#b0ezw?bU-g;ocsw25p>^UU:?:TG2h(c}[Xz7gW=D|qE|vE9p)e._2$0zZI' );
define( 'NONCE_SALT',       'nd|#|Hba#8O,pXi2,*<|sv8JDt$%IJ):M)stP)>jqoY;6TQ&O*}9EO$9auF@B=fG' );

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
