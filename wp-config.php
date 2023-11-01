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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '!JY,7xx3dsuWwFt(nLHMbF8U^ul_4_R&[~Wq8FRxrP}M6n3J7616jE/ E_6^`G[m' );
define( 'SECURE_AUTH_KEY',  'Q[2Ii>(HW,M/y{o-z3`^;g$!=L732S0LWbD|Pu $YE/<1=~dUE$Oa:!!ilOp+,E!' );
define( 'LOGGED_IN_KEY',    '^H&*G:@9 @G2O]6:>Zb6.%jRx=wA;!u=ptm+{>A/{&C@m/F_Fn!u7MaOmaH(zqsN' );
define( 'NONCE_KEY',        'R-Ha<AheVIY%(V|{h68;#Iq!OvU PL1 koa^_|fYP?pQCYEPIX~@WJ`5 m=5Yn,;' );
define( 'AUTH_SALT',        'vI+i<$.?xKyOp:`8,M0F~ltwYAQ{+k1a<;Ym?QO11O@l.>CP!#h8Nlw<z6)d:A<|' );
define( 'SECURE_AUTH_SALT', 'Uw4D&;kxc)l5M3&wqX8~)*kBsl.wQNn??Dp l1o?Fk<*]zwHSk=.d)t8N529eT{|' );
define( 'LOGGED_IN_SALT',   'tZ+2Kv>yzn 7FLe]2;XRF{p-Za+E@aU^80gSHr7%sqn!n^POPwl1T:Oaohk*ODO;' );
define( 'NONCE_SALT',       '*M[ym$Xk2Z[zgfz`i BFz(4~Gc-T~5sOfHj(2]Svb1qaft>u8KKpeic[?,w7L.RF' );

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
