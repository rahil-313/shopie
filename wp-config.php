<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'shopie' );

/** Database username */
define( 'DB_USER', 'rahil' );

/** Database password */
define( 'DB_PASSWORD', 'rahil' );

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
define( 'AUTH_KEY',         '[Sw10Z5T~A4l+vyd]2E+ribom3KHrHG$}8t,C6jhC[DV2:JD#<vB;FM@?q-IejJj' );
define( 'SECURE_AUTH_KEY',  '[b!J,B>gT0 RxhGLtQRb+SHW_kT^)],huEfD}duIk e;[]{XKL) P~0IiP&m#m(X' );
define( 'LOGGED_IN_KEY',    'vy:5CcbA$f)yZ=KYP2uw3x@yMv%[m:6a9tj/sQ+dt|ReFx=QGB h[=klX*i=NC5i' );
define( 'NONCE_KEY',        '52@Oh]HZ3npng>(y}f$i{X<Daew`* GHLh/_/5M%HVDHfS%*/[&Bvc$vC+$NYkK>' );
define( 'AUTH_SALT',        ',Z_?*6Y=%nWYC`;qg+43cmO #c}mbdoJa$%c0KK=Koz_zX7^.t4$w{2vxS+Ks|o6' );
define( 'SECURE_AUTH_SALT', '+A3M+Kc=O(e#>PJ_vN]7mf!&i]K9hB,fHlWIJxx-3=rN(#3dkP/{}g5yx%j|kbYp' );
define( 'LOGGED_IN_SALT',   '6gjFs[i?v]O/58p TL7M[:]7bgV<@7Wctyez_BOWp_v5-FD_:!}S1&Do7a$v$C!=' );
define( 'NONCE_SALT',       'h%Yj/ ?Nd}hk{gVQ!eH$:?.F}cUb4HW/8_we1+v>SydPUXwOabG/){T`^w{k=VCy' );

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
