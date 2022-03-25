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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~|Y/{$v`@vBj%]n@VLRX`~bx#yGp)xZjukIj!>THA7Zj+P`tMn45x[o]&t]zIBD`' );
define( 'SECURE_AUTH_KEY',  'xkBS5ns@1O$4Zw2vf8<l`s8_es?v-Yt8sExI~x88AkGC)XDuOi3Jj5bGp&[qcyce' );
define( 'LOGGED_IN_KEY',    '.Gd-E`.2`$9uT[=;hBZ}UANeM4sw %iklhj}7{(Wp_UOkN13)!i>:<0$~ztH?+6/' );
define( 'NONCE_KEY',        '];u&$6N(j`p*:)<1tfn=(r|>={vAL DlVoJ~`h[zM~RLm5<$#>k-5Jp-m5ri&hgn' );
define( 'AUTH_SALT',        '`B`Mj!hggx.Z:-HF0y+@e{m=MK>}r/ )R<lq[IG0}^zp8+it4B]}d7d0_Ewq]<2K' );
define( 'SECURE_AUTH_SALT', 'rK lE.2G=Kg9#W>)t5hNBH)1VXx{FkC{1*>zXd.,f|yPi&+Ny9s+E@Q>oYf*$_Jc' );
define( 'LOGGED_IN_SALT',   'U%w)ZlH6plXDUs?!$QH^a?/ub8q+x3Jkm@XjJjefsQ:rDX%9hEXv+ h06K7h_T(=' );
define( 'NONCE_SALT',       'OhO}qMuBh}-$wW6J,7{s FtV.s4Yma/BL.RMi8).[?g%uN!cbm wtexZ.E~|j!t|' );

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
