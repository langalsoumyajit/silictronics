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
define( 'DB_NAME', 'silictronics_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'NYlh>74Kr2&5kpb9-uy0)`{xsjY2RjoJR&XzPS>2BK?We3ub%Nnm}s6ue d!J:`D' );
define( 'SECURE_AUTH_KEY',  'D~H2HV@pI=q=W3@0v_L?6/KnbFS 0cozTZ00#yVS}[^[(-.Sb/{?=4<YPl)@.afd' );
define( 'LOGGED_IN_KEY',    'juUN_<NG?|7Vo;{_n-0:=UwE=I)Fkx{4AvYkaBfr8wg>NATI{4&1a~YUD^Yi)ZMx' );
define( 'NONCE_KEY',        '4!p39rJ{$YL3$EYp(=SGRf9bVDhlwW~{jV>$ uU=%3IzHy;C54$5,aoagOw{RfFE' );
define( 'AUTH_SALT',        ',X4wY4H)<.X{ynyr/.?MUnxF@O=zB$T_<[Nln*_HHfgotS`z>s.S.,fh8ZpE#8Ik' );
define( 'SECURE_AUTH_SALT', 'F5[B/SxP;H+;!o#rxxmYv]G4b,y5okYdDscw^j#4Q:PwgZ$>lvZX0BaT%prA=zA?' );
define( 'LOGGED_IN_SALT',   'DKlFdFsqWk)SjSlNmXm%9hqtl0*qtgp(Z6#]jgV}D|kdmNK1X.S-bf2UP)!Edxi&' );
define( 'NONCE_SALT',       '>SyxM(`yZ.$l%Li1zEIZv7o}mlSLVpvbuu=!iAVnFq{kwU]i)T-q`abn4OIvW<a2' );

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
