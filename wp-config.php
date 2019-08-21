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
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         'K$jj1/@Bt9t Be~r74Q&=2[Z.1HngN:t](7Du[E|QdQOa~Fi+qtK[g^H38,z]WX|' );
define( 'SECURE_AUTH_KEY',  '^1XXYq=t_8NH)ap{9ys7`$[l}1U/Mn#MOW-bz5%XunW/vi57I[P~rO&c<V*w/&K4' );
define( 'LOGGED_IN_KEY',    '2N`E^|dn>7{S<2K{ 8YKKA8I J/z54{9Q9dqS~1pzrZGHm};w`I8JA?Eu)*TA{af' );
define( 'NONCE_KEY',        'g*_7/+?1Ul[8TDN@<3VQ9Uc4bAuWk2A~i8AgoFIBs2cqHj<iZEoMME38[3)tJ4>:' );
define( 'AUTH_SALT',        'T`mAaQ<)&})wj$s^]<(vY%z=mF+EMTZr6nYP($(>`h[1^E_sIx)l<4yvd9Eb.2&T' );
define( 'SECURE_AUTH_SALT', 'h&FQqIp`^hnM|@;O9V?>@T]+I=Q,XDFQrv!gr/j80rA8)`!GGHgE*?~e~p?arOk[' );
define( 'LOGGED_IN_SALT',   '{sQ[{/PjaBQLM03B-Tw4#tA!#dJkWyDu<*##f0WI:*gE`[zTq7DC|}}A.ajyU 6A' );
define( 'NONCE_SALT',       'Ze/ Yo[Q}~ w:OViPT0c-vpE.$rA(?xNX,&=K(ZEPB9bhxEhAz0jkEWlh837nFkp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'e_';

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
