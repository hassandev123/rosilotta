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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rosilotta' );

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
define( 'AUTH_KEY',         'Ns2[gfU!JucmsMk#vW/P0[0V;.jZ;5{&)#KWuEc8PY}K+jv++wM[D?KIOC|UqOmu' );
define( 'SECURE_AUTH_KEY',  'ftMRuu76>5^7(pK#s:pb ycdyD.gN-=_%+.{7RI5 PXObS{r:-a&H[ZYV{-NvzkT' );
define( 'LOGGED_IN_KEY',    '5v;uwXL)$}1?5[v#z@)-u3v24;wOz MCE2-4mi3qo)RYUkFI:D{8/+;pQX B+Rp_' );
define( 'NONCE_KEY',        '{%>h*m#ADi4vZ7iJ^)?/wxr4}S@UMq#A W0eo YCj5Wu3iB5>F:rCiyHt&y{VZ|:' );
define( 'AUTH_SALT',        'S;RdO[nbmVHYdId-*vADN0[edt!0[lgsFN:rEnk!063)JyF3Otd<m *]-07$<680' );
define( 'SECURE_AUTH_SALT', 'KdrnT*=Fu+nPR{g^SI0<}2-kUW3~]W`,-B,[faHIhPIbZQToX[pYNZcQ,lEGGuKo' );
define( 'LOGGED_IN_SALT',   '1 a:#U%ChO}<JdcTuDHJ+66@o~.2`#X0.#)AKCZ,%|CQk19F~Cj{J08hg ]z_$,0' );
define( 'NONCE_SALT',       '_Vm}[JQF53G^}PT6%j>ML]Smcp[l+*4}{oh}]Tv=bruXt`R`e?0n|+?Sid8ix0{s' );

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
