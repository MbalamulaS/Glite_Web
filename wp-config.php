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
define( 'DB_NAME', 'glite_db' );

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
define( 'AUTH_KEY',         'dN[3ya  FI1YYGozQN<T}3r7vS>~0bV}g7*lR{9*)hDE}p5S!H$r(?o?l:A9Z;/|' );
define( 'SECURE_AUTH_KEY',  'S)m:i}gdAGMzVsYBTy<k1)(+CwqhuF2{#~cTA*Cm&M9RVCD9-H?Lz@(U@sN=PDGR' );
define( 'LOGGED_IN_KEY',    '^<o^Ta6|FJyQCrrfOKg7~;U02?Fau3~mlZ6)(gwMcqrFV8%jlx0I!XlL>1;0zjv}' );
define( 'NONCE_KEY',        ']srvm(<<5GDcREdd8U+Y,acRy&}sHsPk=>-<9X-qmyvDxzC@Y8z{HcAQV:5sQA~I' );
define( 'AUTH_SALT',        ';[#>Jy<Y!v2T=.,zjmq=E1lwqQ=0$m8>:<*2rGB1UWV3,%,*3B6(1/PFRuFQwZWP' );
define( 'SECURE_AUTH_SALT', 'Zcnxct/C+g5ERr R%T,/rf>{uB>C`I#%:>}zv8IuTk WG3_wizAReKU`K?n(_>~3' );
define( 'LOGGED_IN_SALT',   'h)ri,a/>chqC;=y&shuR*4kS9W(xP2Q2r*$lqyd[os)la[GpM<vx@UXo;!qL-G{$' );
define( 'NONCE_SALT',       'hbh{qU7g7Bia[gTd=48^~QV**3I4a.=]Ssj)RjrxL(>n5elvNj,LLSq.b4]oj#l~' );

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
