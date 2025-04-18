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
define( 'DB_NAME', 'mysite1.rus' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'a/v`n?PcnEy?Pv)+&7_hE`2379;2?JR8!)8>eETC$pVEYEu/IctQyJP/5bIjDT{/' );
define( 'SECURE_AUTH_KEY',  '5Y19MeIN%VFm-lBTdH d!]3^3B}vXIe|!>8`1;n+ KueBym=3M:_P?OtCZ/%TLpm' );
define( 'LOGGED_IN_KEY',    'z1!SuY?_-+Ag6-R.A1|#5OLiwe1z;#U#@DAZ,tzX,DG?^>AjlgCPw#]YDbcY~UY6' );
define( 'NONCE_KEY',        '$CaO/HU[abz6!E-bwKHxk-|^?#>y9eZu>)u1bm>kRQuG%pzTLj81L l%h?>:m)w;' );
define( 'AUTH_SALT',        '.6I%Ma7!<#2TA40>~twNTkriKJ3n)XH1D/avsxn]&BQyBn^!Z:OOF]2#RK>u*kCA' );
define( 'SECURE_AUTH_SALT', 'Ov|:Ne{;;O{CXFQ5z^oVT+nm~)X.;N?HA{QWjc)-Ge%[n(3lHxV`e:9gUMa-4`gO' );
define( 'LOGGED_IN_SALT',   'emyl:_V9{>}R)}[3_Cc^r}8V>Xt(U+94pkC-cL9M?m/iN,%rfScjw%wl>ZJ;6-A1' );
define( 'NONCE_SALT',       'F#aOo:WB r$hfP)7~{-&#9fF$ujABS7ZCJ#,%slgB.@NBOR4I:~Tk{dv6zyjP.>l' );

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
