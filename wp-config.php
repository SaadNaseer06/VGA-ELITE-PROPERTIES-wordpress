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
define( 'DB_NAME', 'estate_wordpress' );

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
define( 'AUTH_KEY',         'TVM6Wis{B(=I.DI~4;*O6i4^nC^U63RTE9mvwzsfj}=>^T7ygYR4z<#okUW76x0b' );
define( 'SECURE_AUTH_KEY',  'QDErvW=3!Y!gGc/StmJ*vG+YtkhK?Da{1&<N-{]4)W?:_FBwK6wt|,vT~L#2ZicI' );
define( 'LOGGED_IN_KEY',    '-9#yHbh1c_OxkW76]G]ZT>h>QC5cN4P#Zjpx3uA]`AZQmzt${^.K%LFM@@$,KMEu' );
define( 'NONCE_KEY',        '!?I^o@PZ)8/{1S3Iq[s/>!ci=R&V*oC&QN->DWj*+W:nEtXhB4$KQepI=yL%-{n,' );
define( 'AUTH_SALT',        'o&{69:TCC:Yz U/y0k*]21wIj!N%@$&WW,gt.Od8/k?-qSD%h>ixeu6lYfe[5#V!' );
define( 'SECURE_AUTH_SALT', '9,^/(,9zQ{h m=:BbG]>*x)rqhl<I~TZBplu1%X9xD^F!/G:ILRGoV0_?YuPw&!d' );
define( 'LOGGED_IN_SALT',   '2?mrRF-Ax/&M$piVkC{O#7>Is+bmq?o/-vi3a,#B@k]i6DWyp$?ZdX=ng={HdJR_' );
define( 'NONCE_SALT',       'YN*DX@|FKaaUn*Gk.6rHW[J6n&6B#-Oz+kQ&V;1<f2q|de&XO+3!l9_[@Or/I}Lc' );

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
