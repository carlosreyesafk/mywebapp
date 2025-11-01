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
define( 'DB_NAME', 'viralx' );

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
define( 'AUTH_KEY',         '9~AbCmlU-h^9*.~<} :@(-2:{[ol:OG7:fMD1=r1dnK;4|h>yh=^(NBpqM?{x`GH' );
define( 'SECURE_AUTH_KEY',  'F)vdaIMtPXZ4N;A~@^LFW5YO)BS+<44Y@.;/gkk`AH(d:!Fs3A/pR[7cozP>9#H7' );
define( 'LOGGED_IN_KEY',    '?$PsS7-qRCgV#wBDCqMq/^5=e*jGusG~ce#aev=e^1dK&ZD69s&TrU:yDv_mdItE' );
define( 'NONCE_KEY',        'dA?q@yfd._y6{LVCo_!7$~.f6xtwXs$*yA:A?=~yrRMIiHdFuc_u+*Z%YwIGGM;X' );
define( 'AUTH_SALT',        'e(+cxsF6at8UPoNx_`3o(YRNM)tVV5vq`UKky|2`*7A{7k~YCe8%mB`6W7kVExsh' );
define( 'SECURE_AUTH_SALT', ':l3(xs*F  {/GXzsiRA5_W8S&)zfLb8C)})3Gs)u5IZ:2C]Rh7K458|l{)&Tu3l~' );
define( 'LOGGED_IN_SALT',   'r4y+AE77Eax-b|C$.,*MbY2Zpf2V3w:>l.5h_ramSLw-w>A2B@,0RXL&fzZe[1V`' );
define( 'NONCE_SALT',       'U9c3eb*dPs6&BMXfY1<8/:SOYQo|.=K-r?~S>S(!u/KONgFmw[$Zn>Sc:~2Sqx/.' );

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
