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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '[2BjY;PQC~MkzC pVHW##[JqgG[Q.X|?%o5ShyjQDDyVr:E.6}TCuBo4y+nu0&<&' );
define( 'SECURE_AUTH_KEY',   '3$}%7[rdgTv,|knr5;8V#ku:$J)+sCm}(&)g2`}y6mnU*efBts@FH<n8!SZW3,zG' );
define( 'LOGGED_IN_KEY',     '252]qfYK e_wwc>hc434]+FYEj_^cz%7@n x@M<Al4as7gv+Be-n{)nO1s5K&8HK' );
define( 'NONCE_KEY',         '=wYvg#!vb,u/&c:f@V{dno 4V,SQ5*Q_tiw,Gi?2> J]bRCYQNhv t?s*<6his.~' );
define( 'AUTH_SALT',         'DQcwZ@X1Z@%,jeQBhr>H3?m4gXE0X75DC{?jI$~[.b;=ml>YtO],V(hMj_yDFING' );
define( 'SECURE_AUTH_SALT',  '{lF,GtFFNP3!|-B4 X53f,/1|O#AcjG8)#$e9dE`2iX)t_3Tr(}F/2.?>%D>~JE1' );
define( 'LOGGED_IN_SALT',    'F;>y&Hg]5*5<NZl:-4A6LLqepUI?#dt,n&]}.gG|0txDr15ylsWvW}~)H7V}rxDZ' );
define( 'NONCE_SALT',        ')~Xw=NH](ktbVQg}:9]l!+yLAK68g&)]JRfM0C>|zP30Y/+Ls04Bhw&=9H-#p0ue' );
define( 'WP_CACHE_KEY_SALT', 'wj~>CrvEJG-MKG: K%pFPw.PTzUd$!y`;It33viB{3^ypg]h/puab2NrP3Y^~shT' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
