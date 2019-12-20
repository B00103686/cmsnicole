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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worddatabase123' );

/** MySQL database username */
define( 'DB_USER', 'Nicoleword123' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'D7O8|m)*i{OZR)Vx0TONtrUJCZjD#51n#gKrTpBg4`63,stQI:q?=eQ4CM[m$+!t' );
define( 'SECURE_AUTH_KEY',  'i|l5H6%wW*;})8ejGu~uM:USVHkgIB%{mtjsv33 $V$Fe<w_.}1iMV0Q>05ep!&`' );
define( 'LOGGED_IN_KEY',    '%RZ,vwQ$H.eHC[9Ir@|.|b%zH(n.4`aYnDdZg!(4?Y$;LUfT1(rCAXOHlYd+5yO2' );
define( 'NONCE_KEY',        '[zwQ~b;Ae[=%?~of9QF :P^<l|Ig5V3RSM7fvDcdO*n&4x2u7vAN=@bM8g}&`h~U' );
define( 'AUTH_SALT',        's$oR7 i^KsZ]oAaLv>ocA$h9<wp5R/`svYm_^L[~nHz.({#bPETk[-$BIs^+g+yG' );
define( 'SECURE_AUTH_SALT', 'pc}psM=!ks7XCs9Tzi q$ 68x&S}V+xxPRlm7TE+=GL^^eLAY V![bB*^Vkk7kXa' );
define( 'LOGGED_IN_SALT',   '?=qN[|R%e&-8UimISkOu~5!-)uYJDWg>7KD9jd^ea8lPW[j_X>a5GoY8g;<ri8df' );
define( 'NONCE_SALT',       '7t5~JKIQ=M9T6tk}f9lw v`XqBG4I)6pHFD.OK%N0oG-~}m6~Fm+in^2-M):#na6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
