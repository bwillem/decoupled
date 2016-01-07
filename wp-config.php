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
define('WP_MEMORY_LIMIT', '1000M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'decoupled');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7x+uu8QmOHnUs42,!qc+TzD-Uo5AafT|FhGY*g8`OVN,&+qt2j?6_1~bw`-1^#Ys');
define('SECURE_AUTH_KEY',  '&Q|,a*UvD0ZfDR+y-^bflZz2o@+!_ :cK9~#Og.p+tK1v8[5(w!;]HX`-A/$VY(8');
define('LOGGED_IN_KEY',    'J1[JJLgT|+h4V}Nf@WK9Hy$gN8 -(Y@ o.Aet3|^;Q)lOHylgsnEbE>2GL-Wp-Yw');
define('NONCE_KEY',        'iM(]~D7-L#*aFOLX/gxQ:`eeF`N))`WID5-TU8D?l6kZN14F*>z^)K]qqnYE1!IX');
define('AUTH_SALT',        'cyc1w4#~`^|p-D3cJxjQsKLb)Ouo/dORa5f-iqj)aS4W)F!5tD5#-t?J+YKT(:gI');
define('SECURE_AUTH_SALT', 'm+i?5+BKkJs`waIi%[:b[[@It~mSK1rV-ePP@hpQR`KOeJc6/+S>5|b^*:Ms:*}.');
define('LOGGED_IN_SALT',   '_.K-F3#b%kzUHb,VLkkD-S#G.,p0edR@2.t|IV^)R4LK~W^,UlGOs#BaPb_>3C0=');
define('NONCE_SALT',       'F(y9%i@L0M-AlL5vz;?g(r eElAAIDU&oPI1YBjyHs|Xw:`f+eTf`O9G,9v2sWOL');

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
