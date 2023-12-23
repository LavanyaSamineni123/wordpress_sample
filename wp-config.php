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
define( 'DB_NAME', 'examplewp' );

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
define( 'AUTH_KEY',         ',Bi7iA&*,}W!t#y%8=r|Gx^%.FEq{?*isRx-+Q6xd.>XzwdFo;`56gP?s_|M0UrR' );
define( 'SECURE_AUTH_KEY',  '+D#PCN.fp|.z3xzpa2=?NIF[-z|,e]HrTc4[(]&B;BDsCxgb(SfRX>w2,tzrUkAR' );
define( 'LOGGED_IN_KEY',    'p{I[&d;AcI:n1;KrZ7-dGS^y,(?qgz0_HYpO~L[j3*XDC[<ss_J2`[gtZPsW%/V1' );
define( 'NONCE_KEY',        'ICeR%E<1Gg)P![>ckdF(dlh$omZ_FRC.d,uW@*$M1hnJ-Fs!X?&qNAza/ZIp?hyD' );
define( 'AUTH_SALT',        'l<9)U+0r9t`_|%thy2p5|mM=F[6 4?^&#N1)inIBbp<R:vp>Kn}Q$!@BMTZRc#[a' );
define( 'SECURE_AUTH_SALT', '4}F3.Dp=-kf$m_W9y?FG:>t=~)W$~)d`+PF,+CJNx5IXQL+X:1E1FcyJg$SV){`e' );
define( 'LOGGED_IN_SALT',   '6xzgfsujo>+VL^!O[<)%jSPxH,/E,x!Q.0!12,vP8#xq9mn7[^ZgGL>hA&6lAuH(' );
define( 'NONCE_SALT',       ',*p `AYjQTamK_L.<_igpwQCf>[R !h&pic3XPeUkPR>>=-&r=x#Cd01ff~5VMKy' );

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
