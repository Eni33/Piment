<?php
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
define( 'DB_NAME', 'piment' );

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
define( 'AUTH_KEY',         ';7`f$1vwK1${<(sl%3E,6Og]6y:w9&YYug^6l/~`9X.ySEe9%:D!f4!,jwxcM/[n' );
define( 'SECURE_AUTH_KEY',  '<t]PMTSyAvyk<fr7]T9188!<7a^Ld72o=|VV_v{d/`1=Cx IzVm&3) R+ogE)z!n' );
define( 'LOGGED_IN_KEY',    'F8nsRXZ6l9]q900g]Q6WH8O7/3l;6SYLA|G)c+,pUmPN#zxK&QjJgJF<v:Or_Uga' );
define( 'NONCE_KEY',        'YA*eUGI(SDM`QOj*$mXGQm0g6{#DN)vjngE+>j<5UK >[QtR;PIJpHB-_o;ZpB`W' );
define( 'AUTH_SALT',        '>s,>En~XX>[)vhp6#79[6SBKB;BT9#1_Q8-A!XTEB`fYH#J;4Lxsr8l#$Na7H}iQ' );
define( 'SECURE_AUTH_SALT', ':@*<VDEzMaJvng(p8Qn/c <drBIJI|HEDHH;T&P(uZN{=Q48jDNVT$0<?5n{29R`' );
define( 'LOGGED_IN_SALT',   'CM3-|A>D*M${#+wgO4$<3[Q?[@AtsNTsHqdSB0lV!_A@zx$;8f7{z91H!dU,xKxP' );
define( 'NONCE_SALT',       '65B#R|J1D+xROG^)E):6-PmXPs%`ET-7N*g&}lU*i!Y9!uNlKo(,8V(q)X%p)-jp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpP1m3Nt_';

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
