<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'skyHigh' );

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
define( 'AUTH_KEY',         '3NcMF97|2<K,zU2[i0;#=S&,<vN]xH)vQ3|o7;[t$H*zx`)HE]?!Aq:>[aSJ=EaG' );
define( 'SECURE_AUTH_KEY',  'yE5$,X[6jV&X7g^DTIm:X7I6nPz@Ot$?Z31S&3W*c7C;|@d|_42{mgC+Afo/z;$m' );
define( 'LOGGED_IN_KEY',    '4LqG+icWw{K,UWbnZ3*A@0]t5WOLIEk)>`Ih69Df`/&&$[NmP Aqu)CJtjoXgJwS' );
define( 'NONCE_KEY',        '7tsx{D6v<`[~Z~v?*64f{`&J?+T{aG9f^rg$Wf-$_)wK> Sk:<ZBRrcPx#2]l%= ' );
define( 'AUTH_SALT',        '`Rl@*L7c.*CHl*LKYin1pK=d[E5S&l}00.Uca?o6ZIl&a[ob%MZ?N2d$R{o]z8:m' );
define( 'SECURE_AUTH_SALT', 'Fc.CP=WNF1sTz?]i(Q<pn-4en[UpK2.=:=~XbKm*,_aeP7{<{BR)MMgrC.&rkiE6' );
define( 'LOGGED_IN_SALT',   '^6#Q.`sQGI):44}}j[EG=Sb,yCM3A?Av)3&c `3}N~Z`-(R.giI/2-C+pbXYZfgm' );
define( 'NONCE_SALT',       'lQ+|_CUtH-HnN%ip*^,KTu)528CRT[5RQ65wyqu]L$g7Nzb$^X3 9qFX;7!*uQl1' );

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
