<?php
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbhn7uit64co9r' );

/** Database username */
define( 'DB_USER', 'ujqhyvwqpg1qp' );

/** Database password */
define( 'DB_PASSWORD', 'ef2kqzm4nzcg' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ' ,wdo,=;zy!r*wrS(rGi^*{ZD#N/ueU#)-D^:!noPQTUO V;}9$_v[R$PaetfPtk' );
define( 'SECURE_AUTH_KEY',   '`<YGLLRtCQ:-e`btRm)5MsV,#Ut~WO4iO|N~KA7N}S7)>Sb6?A4n6HmX<CtT9_*S' );
define( 'LOGGED_IN_KEY',     '8)7Rz+YT+2I/@0meBpq*zds%9,HL:.lG!0YQQ~1UYtiM^UHKGq7kL*haXylEx;->' );
define( 'NONCE_KEY',         '>YY/[a*OQMA~,BLDpHrr2HzF`gk1gygGEe2EHX^4{:0|iZKi$Tn? hrVmm2S;Cv9' );
define( 'AUTH_SALT',         'L9F|F[V t&TQ.]eu;5_Bg83DXWc`N;7rN+0I_!0;a.w=X]I+AlS[=#Bgad<[CnR~' );
define( 'SECURE_AUTH_SALT',  'B:f>YVh$dpjR@B<1Tt(63}R>~]Dr@`mZ%TAiqTXsdH]hWm&xpBQoBwG<{i-`PLP6' );
define( 'LOGGED_IN_SALT',    'JTL05xTcC,co(&mr,ZPqX Pp^M?.T<h94?_k1ie0le1r=gC?*AVYdOPrf6<C ][:' );
define( 'NONCE_SALT',        '4k-f(JgW~PIX!gT}|Z3KmBZO/iC 1E9yCydssaZ?@.NA>ej5Vy?:NWeNAD2q_na6' );
define( 'WP_CACHE_KEY_SALT', 'pX2T_QG]Y,OJ7eaSI IWz!(q^F&}/}xMQ_L{7ApKMb++vloVzsuvfk1r#G~~+5.f' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rgi_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'AS3CF_SETTINGS', serialize( array(
	'provider' => 'aws',
	'access-key-id' => 'AKIA4Z7K5PXJD62CWSR5',
	'secret-access-key' => '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',
) ) );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
