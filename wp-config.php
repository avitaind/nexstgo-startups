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
define( 'DB_NAME', 'nexstgo-startups' );

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
define( 'AUTH_KEY',         '5x6:L>*e=deG@koP&xyS{g.o,&V7vVH6}1qvW9#a]7=k^%# o!WR:5#A;Z<-T6ep' );
define( 'SECURE_AUTH_KEY',  '&;xf}&I*cB(MHGpO%cXkyj%-6C7p=cpU48pL($eNXBLB`mv^FJeGF^`Ta_~+I9Au' );
define( 'LOGGED_IN_KEY',    'Z59gL4i#UyvM[1kNCgS=Y~KX4nYv6r%Wv7.^P8&*2V(zW[F6Q/#cYv(eN(ba>hzs' );
define( 'NONCE_KEY',        'IvA$YuhPv;,Ri&>PSZ_B4jTJ`:OQ[~,0,PR(j8HnhHH1A~ee[`kRc;c>^W3wR=eJ' );
define( 'AUTH_SALT',        'Gw+`qt$&-V9/(cj:``[!LBh0=v+9c9Nop);H15Rk uy1H#D%,}q~m5GjseJQjfE>' );
define( 'SECURE_AUTH_SALT', 'OZ)8FhoT#%AKAd;8rCA~$c,Pt6E3CAo}MG{ykb&Nv&JCBs#][<KA/+-bo48ycH c' );
define( 'LOGGED_IN_SALT',   'K{;Q}WY0E0mXcZXN|8Lm6]S{Vf6``..J*d?I+(pocHJ`z3F}OFxi0qQ0?r*}([aT' );
define( 'NONCE_SALT',       '$?blDlv^XEYCR2D.A7@`52vV?LM53$Ma~O}WM#nW[8i-0%DFSE2u:Epo+{^L7E,H' );

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
