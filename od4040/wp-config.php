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
define( 'DB_NAME', 'wordpresssite' );

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
define( 'AUTH_KEY',         '^CU<Dz22rYv|e2?Ww,M&$/-t1PZ!.Sc)QUFFqlC!XhR@q>k7}2aB5E]F&W1`iRTL' );
define( 'SECURE_AUTH_KEY',  'mTx1ou-Y#7a<p>*FP(#VgQuPQJ.qb-Ecq%V7Vl)>B~v!M4L115r}dXxms ^*o%*6' );
define( 'LOGGED_IN_KEY',    '*QzIO:f,pXyU}Z_kd%$g|?Tl$pp.P1l9by57jd?sm=Qb#Yf[)kU0RIixcBQ}C_<<' );
define( 'NONCE_KEY',        '=D()VTYQCvC!!^lKJh[BI^&1%0.Z@i$crsup2bo0Zq_.C%^>[p>G<QGxYz2g:BIz' );
define( 'AUTH_SALT',        'J_*f#Wgugv0~!l(y{{(7YWa;[JRy@qq>^9[DqhA~eFQLmuc:$?NZ#Y0i-qjeSOoU' );
define( 'SECURE_AUTH_SALT', 'xsH1.IkW2?El}h?-8[yBgKNUNCPPoKN*/J2.reQ)a1>s c>4dXVIYGsn/`=W?i~;' );
define( 'LOGGED_IN_SALT',   'M(m/?L]H7.7p4>*=d{r$@S$QLX:gldT[Q2OeA!{wX!GKK]P-=+uwbY8HR}8!IvNh' );
define( 'NONCE_SALT',       'h lo$62F`AOo 9CS-NeKH_$?_`u6Pm_Y!TKNE)vqo)UOkX7z}=evx2EL<sd?*hx1' );

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
