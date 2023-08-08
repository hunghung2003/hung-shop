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
 *mysql://bcbd1080aca795:e4592b78@us-cdbr-east-06.cleardb.net/heroku_3e8bd8353a9ea96?reconnect=true
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heroku_3e8bd8353a9ea96' );

/** Database username */
define( 'DB_USER', 'bcbd1080aca795' );

/** Database password */
define( 'DB_PASSWORD', 'e4592b78' );

/** Database hostname */
define( 'DB_HOST', 'us-cdbr-east-06.cleardb.net' );

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
define( 'AUTH_KEY',         '4cAb{(<$|N>?&W&28Pc3~2+G|#]+?G/(;kF&[7eKBez>!U8EV46kTufpCQ&uC,bY' );
define( 'SECURE_AUTH_KEY',  'D,cG7Dy9H3?&eI61MG;XpJc4=wu-!%J145hIrR<BchKS,b;sh h$/tug6n_[myJs' );
define( 'LOGGED_IN_KEY',    'UG66H*an#jHq*c1?9rJDy6uuh=MB5eAv9z mdKHHihi8R!(SUuS=W+CnkG*)P3Kk' );
define( 'NONCE_KEY',        '?R5M;YZ]ltMB%T|Iao%^p{TB4T</pif)8_XF+Q2kF__>uj95t YZCxAEGil@8Df,' );
define( 'AUTH_SALT',        'AAQ yswH1r5~_qcIUlTzV]b:GoW|+w9ULTQQ`gl8WOMoP4}1u;/QAmQ?x#qtv-SR' );
define( 'SECURE_AUTH_SALT', '-L+QTe0y[AmLYIDaV@stB~XT>6KfzfQAj%LhOw87@=xW4|ZLw}dXz?Zj.CqDt$#Y' );
define( 'LOGGED_IN_SALT',   ']M8&>t8zSz{_di?8NAarK)y#L[k5Y~TU+6XoD.Gc1c<F[]L~;xQq2-3pQNOfS8e%' );
define( 'NONCE_SALT',       '=9@B{]@^GW0rOmkk#UHK4V@IT0tY]Z=+GRLh]m_0:F|i|6}a,&iO0*<_J9);iPZD' );

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
