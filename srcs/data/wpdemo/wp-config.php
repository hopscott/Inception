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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mariadb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@DenzelHimself123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '/;Mu1h>gMItjkB1LF8ntgz%EIvxe ?LJoECwlqWknk8gI&t@CZ#q_OZ>d!),kPDK' );
define( 'SECURE_AUTH_KEY',   'Rba62S`ZAi8bNX.O)s)IN**A[`n/7F7^>Dk<wrUsqgU1P*fwC>KGU=QPs5jS9O%b' );
define( 'LOGGED_IN_KEY',     'g~+7m6s,O*%g<=ID/LctuV|B4J}S$SB!dC}bI}uRey%4ij>O?>s%MSBh{ UkWp,r' );
define( 'NONCE_KEY',         '~oQ[?rBvg>&Ctf!DM,(F9[4KY}Np,O}mh?0~#7Sj<_#yBL+>Y{4rK}cA2ynz)am)' );
define( 'AUTH_SALT',         '`YCa%9Db+=KS95yqM{_`@dvdWxU74ukK_mA1W-7&5N{`(}wKILe//K$F}`rp,@SE' );
define( 'SECURE_AUTH_SALT',  '?Q}NP*hih1m$aC0v|B0@LX,ed_FBP)lW>k[$o}ZTo.Y.]y)5W-}+/{])uogTu3W)' );
define( 'LOGGED_IN_SALT',    'yLmObG#N>D}YE5=0<@|s{E`oz|kbqDGPP`MH)u_PTpI+Zqj[o+QH.u 66+,.dsFy' );
define( 'NONCE_SALT',        'BzbzU[=,-pc:A`9J`kgW$gZhA=9$/n]j-;d[3@O/bXR(C.`iR7[]RG%xT1TZF9EL' );
define( 'WP_CACHE_KEY_SALT', 'f&D&gZHG07:=@.~LQ9]ngHaTq/#:U^|X#dx-sgxhm-4Ku&[Jd[-k<V0-~jhga[:@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
