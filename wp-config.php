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
define( 'DB_NAME', 'T-shirt' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '[o`sTiXHUVJmGU!fbCO`A8(jlWIm[oa`If&C~,$hI|d~G?%wu`}G%z`EUfZr|^.W' );
define( 'SECURE_AUTH_KEY',  'C3y]1 p|!_Bcq?usV!xzJ[i9^d+V1mM,0!uzt10=Ll%Zn=FEq6BypWs:B<_*MS0|' );
define( 'LOGGED_IN_KEY',    'w(-}v#=sGzur6e@bTSMB}4Ryp7F]HA_jf)H[gK#WosP#6eVf /]=pwN1!Etd@)`p' );
define( 'NONCE_KEY',        'b^s;}H)sF K{l@O[yHLbQ uu+[9Ceaw~QqdUYAmPWMK~Po[GMffC:L=r<|T0.Da|' );
define( 'AUTH_SALT',        'BPe&p9{ucZ##3&z0a^trMm)Vp!VG`c$I~yQ/x52=PG 3iI%Aex7gm( 2NA_;^]|M' );
define( 'SECURE_AUTH_SALT', 'QN3PZ]*%&TJtAJ09{^Y=S{){rO1/kII[0:SH`z?WS}Z0V}`o33~y4]^V%CP`W?{9' );
define( 'LOGGED_IN_SALT',   '3Yt&L;eH^TS~&Q/MPZj;jn?I;ZhzTWy%R;+]H.Bm?mzEtP-V?qfj>3Pr}Mg|P?Uu' );
define( 'NONCE_SALT',       'Pu!=%0TGXTjM|pQ015py=dsak!V+lU|N8{3MhM!8BF{v8bfL%cd{Zb9vevH_%jDT' );

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
