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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id9345949_wp_854308bab16523da8d420a76f4b83232' );

/** MySQL database username */
define( 'DB_USER', 'id9345949_wp_3d1725a57258401feec3d0e60fe4a069' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a82373ef8b673c8fb93faa2ddbd18f3b357b4527' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '4F*d0Sq]iUb! dSyavp[(??f!tQ)ec(n}dTGv3I+s/~~V8Vj]o:fk?#4CEaD[eqr' );
define( 'SECURE_AUTH_KEY',   'kRS$g*OX^dtRUM]UEV/fr*,D[uD=3N=:Iih,*Wz-7x4Z,RX t1GQ&?HiJ~3t1,Um' );
define( 'LOGGED_IN_KEY',     'W#w%ay]L?A:Z]:4&EhZf9Q i9Nqaj{JUS71*Zf0S;VC)Zj1)~fwxRcibL}By9!Uz' );
define( 'NONCE_KEY',         'uvW>y[dxblDdOG8hN kQY#E1!KSp!NZtNF!yVh<FU$FC,VaKh.AV7F^!t%r4ps%V' );
define( 'AUTH_SALT',         'a;S}p+0[lRPu?j~XOs3n240{Z?Rd8Swv vnf,p-z-$7 :~}ei!5+4Sqj CxVW(T?' );
define( 'SECURE_AUTH_SALT',  'XIU54{D9=O4Kmchbkq)w.wL@YQJ/Ba&~bmKUMC%RC|U1)Y}@D#xl{G;~Eav)L0uZ' );
define( 'LOGGED_IN_SALT',    ' H$x!@`mjtwr~D,)K,U[wvN,4x<jP4^Kk)brZAEq`+vr !~|c0(S(REk)taPA]0x' );
define( 'NONCE_SALT',        '<B.,c#?>Fk1T25S*GG|vs<;b sWjh%/%9y3H9[CSOWlgzk%R_%mpMKZ/L+*8{+$:' );
define( 'WP_CACHE_KEY_SALT', ',9kFCj1Aak2^lVb`RO^1$c]?ZLrElCrG|>Kaab@I~|e<o@.#fN3Ea,2A)`[+g8@F' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
