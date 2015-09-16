<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CJB[lnjE$focP%X_b0M1=O_=gXOI`<dB^@Xrf;QAIv4JM/(%UB1&;a#nU+RQhv)&');
define('SECURE_AUTH_KEY',  ';<mP&Mei-?E/c8;:)(+UFvWTa(b.-ENakU}=%YvUZ[<J!{IN}o50a/rfK|R;QL)-');
define('LOGGED_IN_KEY',    'k(H-|/.,s%.P_3#2^+k=$J14=B()?~;HGy]u6>a;0|DM!C?m}4JVh&kP*g5QO2_t');
define('NONCE_KEY',        'zO },^;vhG>Tth=&SPN<A1l n|J+qMgh,Owid1#Kk:A-]PqeQV<b4m; +`0w{4NE');
define('AUTH_SALT',        '<2cyt}$t=p}5o2D2x2IvV5A+<S@/qM8tYxsx(<zGiTP+j[1> ahBw[wp@l|vAd]S');
define('SECURE_AUTH_SALT', '%S}5X0i=+c^h*bQ&_v3+M>>[o-eExAPo}-*lm|Gvv)!!p9oSLY5C9!k!-{L,jx+!');
define('LOGGED_IN_SALT',   'Udy liR1{YqdWwSoA1R2Ec>To/rd%7Xq[xf2C4)SJ)/=Hx6iBz/]#3bzq(/vY;2h');
define('NONCE_SALT',       'qJQG9-|9sl`{TrimJ8Ki},0%-,i BSheGVHZL69qoungRJ~h&jo B|lzv+Vb>auF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
