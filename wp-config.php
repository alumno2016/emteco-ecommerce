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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emtelcotest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         ']&EgoT)bAR$qwb]ofXPL:h?T&CYIS;lynwrZ=(EPSMrUYt$K{O@UCEE=##!)v3~Z' );
define( 'SECURE_AUTH_KEY',  '3P-`Kg3 ?]%k/:gV])9fF ,Hv-e!T)sH8_6+oi>~@-t2@$^RgPh ;6DN?0e&#G3?' );
define( 'LOGGED_IN_KEY',    'fT k+ M,<AGBxMCW-C:T|4(aF]kaKa;Z_G7O*ge|*<5zlE^KZ9@tljB#6P=nNMxl' );
define( 'NONCE_KEY',        ']r?]`Q]!i#ZD@<( )8KKD9L9wPuO@Qs#AUd(G9LN<:jqFmGE8E)/(Zave2-swGq(' );
define( 'AUTH_SALT',        'G=l*q6mtz:Ip+CJif.^||,Bmmt_b)E82fO%h0>fbp8$[8R[u3&[AaW-|TQtB|Eg{' );
define( 'SECURE_AUTH_SALT', 'o?9oE]R@J Z$(:umhZYH}!%PG_T&-|?z:[<R*#%yv;)e-OX7<|m$JOCKl,H:F;42' );
define( 'LOGGED_IN_SALT',   '->IMN v6vn|-E Ev[wEnrKg3wenLdrYBC{P%{3D>b0Fi@QmMa^AXE<O5d]*#}14F' );
define( 'NONCE_SALT',       'Ul1^eOuOB^aDO#-bj?L)+,8o&_JNyN@.XR0)QJpX13u?=EibLJ?J*Z3Fl  97aC(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
