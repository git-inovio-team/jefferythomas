<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jefferythomas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~1w2j}e&xiUTy6,%`M.V>z@R}`fI(v7vot#6 9bL]84}%vu>`DkYnVGK2p}= NpD' );
define( 'SECURE_AUTH_KEY',  'w!t%y}-,Vzm#_rxX(~eT>+Y7g5n4_{s*x]]RSS0Its$7y*MK&+Y7}cj6[2?x=v(L' );
define( 'LOGGED_IN_KEY',    'K*M1X%8MENYWC16|gcX9mi]l1mOV|t$vus56tO~qR7Ivs&chRKSx4Q+F&yYr-`3J' );
define( 'NONCE_KEY',        'B:~}i>4O9)rU9{c^]KN`JW(_`I 2JD0_L{-K]cB?,g*Q{Yikgqg.GQL^@eKJi#<x' );
define( 'AUTH_SALT',        '>=t%Egf-+;*a:ra^1jK^{ZeZ+@.]!=xl4}WO/&<4N>?l]-|uQrg?qBP*4Kga!cdR' );
define( 'SECURE_AUTH_SALT', 'Qi~4@vZ_AD44Sx#n>?Av&:z.F_RXJYO-~EiL./ $pi9N*g{(N5CA|B]A-VH*k9QT' );
define( 'LOGGED_IN_SALT',   'LJM!GaF0)T0T3sGJTVSMc*x2Z(q7=dK&YGX(4faj>?Q?V<[zVnhiho( )-k]?rQ(' );
define( 'NONCE_SALT',       '/uJcs|jIJWkx#{?YYXaXF:4]]z~GL^fO( `023xd%kA<u09[$@Z-Fh7o.3]%Uud[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
