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
define('DB_NAME', 'edoo');

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
define('AUTH_KEY',         'rlNN+(stSe1:Bix^SO<=&A_ej`|LYfBb~S|vuC!@y@Wzn|!5|HRY&U^|i+?&kkWB');
define('SECURE_AUTH_KEY',  '+?Nhxbp>|w,+mF%>-6EyRp%r5.+5Qt:cCs )QOm) @A^)@^!fBlu:,r3;z:H3^]#');
define('LOGGED_IN_KEY',    '|=Z+9l&H@bUxy*|8:_V_:A|6-0+<@+`$]?*u=e`^1`wU0ecs;:=*A#+QMaI|!XF?');
define('NONCE_KEY',        '+,?#+-X||,:en`JHithi>|7TshDF8uAXIZ?Z6{IkM(7+KLcf2UR>h$Z6tR4$^O-X');
define('AUTH_SALT',        'MNs?l`Tg],  h|M[eNRa;/:xR1Y^KG0KsKf|P<w)+*_+5~73*7Bg79Z}GCC+(D9U');
define('SECURE_AUTH_SALT', '+,|M-2Kc$~PS2~Hn|p%`BE>M?6s,6^z_?kDjG|&r+W3aL:D;j~BF_#un3$6~+w+K');
define('LOGGED_IN_SALT',   'J+sTD4u+SC~h([h_<5.|G5?!?Z.+%HvWuAW |u/%|(DWy 7-l|^/M;@>c<-lyOPq');
define('NONCE_SALT',       ';15L(8NKXu3^-9OpAy3{6{+|UPOPoB5|-;hADWanC3-G#Z@wamS=hQxtq0c:W+|.');

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
