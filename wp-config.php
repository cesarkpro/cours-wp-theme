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
define( 'DB_NAME', 'cours-wp-theme' );

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
define( 'AUTH_KEY',         '-7S[}{Lr1-1*:h`C]b`Ks]^mgJ{k]0*Ia~1}?iV+T5&hdvh!u4*HL23B*nU2#y=u' );
define( 'SECURE_AUTH_KEY',  'ahCZVHkJ+#eh_GKl|E&ywM#z(R3q0DEs~;nnbg#;Z1gC3UU_5`U-v)0hE/q28>q_' );
define( 'LOGGED_IN_KEY',    'hXiC_M/gTy#Bbx1l2#c{_Nb[}>~IudE[~{9tDp=S*Ktx-rV^q)D#TFx6SR{D41b=' );
define( 'NONCE_KEY',        'iiAw0seVQYPVoM`4n i*!pMKVd|Rs%A?o#Xb%{zicQXWcRQ,V?n%&Mc>N(%s |Zg' );
define( 'AUTH_SALT',        'U,!xb8J!&>DR#FlZwkUubD{=uCH.P)L,Sf]rD[%q84J,gCIiGga@*FTs%o~Pokb#' );
define( 'SECURE_AUTH_SALT', '>@GLt-2Mu&U,UGB~,ypAE:SSi- 1*Hc(Q2sTCc4!Pi5^tR0k:*`ic o`|){/$H;-' );
define( 'LOGGED_IN_SALT',   '08BI3+]QI0o+gi{(6N5V=:X1/2:.uM2G@db@xEDe48N*jYW7m>RuF|f]jb,k)a4h' );
define( 'NONCE_SALT',       'p^|Jg#n)s|,/7DALlKaH]k=O]XuL%wrnR1a. yYmo}fkUhDsR#-kzWAO09;8eyQE' );

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
