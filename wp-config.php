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
define( 'DB_NAME', 'beauty' );

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
define( 'AUTH_KEY',         '9%$Dv,!:!X*HuA&BXaSzgJhiZ..]&jPI%#~FVyw,>1cY?41WB,jJTKW(KyFO:RH,' );
define( 'SECURE_AUTH_KEY',  'OB#Nb=$ulG:goR|KYEPsRuEGj}#(+Z97OWWh ]Ay)N9f{kR[0AO<eI+9R 9IBoJu' );
define( 'LOGGED_IN_KEY',    '%[](LW,R<?Bxh#}4BP0Fa:2*v%wpyIpI[o^_zk=xXBV|6!xEat(&nHYI;aJ;0wK;' );
define( 'NONCE_KEY',        '4Y$KNn?J%+br/r(XUc%`$Wq8I#9^0L+d-A=cv0*r7w60K&)?hI6FfGK8:^0#F/L>' );
define( 'AUTH_SALT',        'N ]4}/AK.=&Gy=Ky>NgN&7z)OpZH2 k4CL}m#USO3C8Kw-WJK.f5W{5{;rx=M+rz' );
define( 'SECURE_AUTH_SALT', 'F+&C+1{AW}JX~*(AJB73H|>{(S@Vy9Ae%w1i/-Dya`gpfP69ZNinH<$F%9-+wL7P' );
define( 'LOGGED_IN_SALT',   'VIOX8VN<YSz!iW?v_.N~Re%HWdcct)T6#j@!jsquJQYJu}E{ba/9HD!D53Lyrw33' );
define( 'NONCE_SALT',       'h9c=Ti_{32B*&!=1pP_a)PHkvpJ*MSwPSe6.z`0J|7vXB*ZE:?m)Y.Gs^EuB^zv5' );

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
