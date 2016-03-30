<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'marketplus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ladygaga123');

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
define('AUTH_KEY',         '@k0io6fpM6nEM<jVr$WZpW8I}#]%3_zD<CBQwZhGx5Wf{dWCTd5oM2mCTJ :H];-');
define('SECURE_AUTH_KEY',  '-(k@m%>y|S8g-FiNrJKbO>0g+Hg=rmP-sC9Pd/JsQM%^;3chj|5HvOT Gj/M<|HF');
define('LOGGED_IN_KEY',    'wYse>x?i>vyxE1,LLqp/=Fz|RdE9i.:B*M!ph@c!gBYM3|VT$=|QWmoGM$:RdoRX');
define('NONCE_KEY',        '6 upn*oOD]UX]!GHG|HYo4k2LB}H)vg-/:G)1/qMd:cZcIk`G,C3LHz;bh1jxCp!');
define('AUTH_SALT',        '[t]d#F0555E_ soyY+d=>nA}?nYwc{q,IuW|]=u5Lci[v9H7`[gJplgO1(I3X=.~');
define('SECURE_AUTH_SALT', ';V:uWv)9}[zD.MF8BT+;^C^xH_7p6Bno)}3Qo`l=vcn6858V6Y}z+SV&Bx0oR@,_');
define('LOGGED_IN_SALT',   '/6I^gICx1f7)$4M%m)RhA}jjG gu|/P&r?UVvlf 9I3l69o,xjcL%PiW3;:`F@g}');
define('NONCE_SALT',       'sfaIi/2y8.`-1i4{WYw@.r,:72gr(p2klNDPW$nOB81^T$[I?jd}-&YVV9#1c_{(');

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
