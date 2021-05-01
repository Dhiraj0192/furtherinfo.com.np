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
define( 'DB_NAME', 'furtherinfo_db' );

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
define( 'AUTH_KEY',         'UhdAiAX+2FtLuBwpe+Tc15~UV.04K<3Mf/m<Jo]/cCO]:x&YeT! KopZJY5wSZ3<' );
define( 'SECURE_AUTH_KEY',  'T9t&CFd9/Ff+=!9VnJI.grf9j~dBN7~R370EhJ_t2|b].Wf7tM:ab{W97)Jb:t4F' );
define( 'LOGGED_IN_KEY',    'vO)4x[rf^x%Cj0mh1+pmXb#fPl,f=*i:)~3U;RFOCo2R:t*t~#5C0+];3aXXSYRl' );
define( 'NONCE_KEY',        '4`:]&A6E=E{>HO4ADYDiA]jP3C(*Ht#o/@%$oC,d,q>^E0=!JGcKQ|_5uT{lzo1v' );
define( 'AUTH_SALT',        '9iIJXNisHMbDr_?.sLq +M?fctUn`%bBV15X#|(Ol$!WtH.8_.R0vN[ZlBCE _p%' );
define( 'SECURE_AUTH_SALT', 'B)TD*|ddJ3NtE[h0c+O^$eRN)j?0HsE_mr.<din_xJ,1{2}hkD3S<3:eHek&aLds' );
define( 'LOGGED_IN_SALT',   'qOZMQ8!YvXb[,oC4$XT=lNJ#o,lL`+RiY~F =3.fNsxm-b? ^UP@K4 oz?_l2_Xk' );
define( 'NONCE_SALT',       'L|Q.Og3X)Fd_/v!Y@Fo,!LC8lqWV^a1OVNcd_OeoQ-|YniW;*dX+hH1c&[^kX$Q7' );

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
