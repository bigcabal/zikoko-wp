<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
 
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	require_once dirname(__FILE__) . '/local-config.php';
} else {

	define('DB_NAME', 'bigcabal');
	define('DB_USER', 'bigcabal');
	define('DB_PASSWORD', 'Ca8a1-b1g');
	define('DB_HOST', 'localhost');
	
	define('WP_DEBUG', false);
	define('WP_CACHE', true);
	
}

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
define('AUTH_KEY',         'ZmN-,PJ]HX3p<ZckWM[:/v$g/J.Wx.vO-M|;v}q{@Q&k.~.2)NzJaBhk_vkrbt,K');
define('SECURE_AUTH_KEY',  '=h4DfJm^6%3]O{z3dL;l$*up]J*B[~3%:m|P~<lGra{tjtA=v=`H&beWI5Gyi91U');
define('LOGGED_IN_KEY',    'c%;Aio|)}}(?+F97]Dy`boa%m4wm.T||m1Rg9w%Tf41~T}rQ~o3&-bI+`t@zJyb3');
define('NONCE_KEY',        '=+#4-$]PA:`0QzN8-4p*27_RdgNDM-I@qy*XKu2gu|`S7plc(aj/bXm@HSOlV9 z');
define('AUTH_SALT',        'B]3EW8#+e4wu(Z?j/OhdOF*z_lJB+g|x:H`nQ6^Z-7o@tfHGv[VlSuOWFtTkjGi3');
define('SECURE_AUTH_SALT', 'C]OBeSfnJ+G=SX93<P{`CbLwoT0,E|CX*mS}R7By[VFw22}tETa[y}gRACWsV{)y');
define('LOGGED_IN_SALT',   'o7QS7$J!L[!C_p97J5owKeY2qU,Q7I3&|+9+]N!qtr#-i-rR&cgM2<:qnsa@#0+D');
define('NONCE_SALT',       'YK&/Biad%Fog,)hlgv36_a+4dA<ZNX9+Cr!N~%riN4+Ly/0j~_y?:r6h@U%%x<7B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bc_';


define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0770);
define('FS_CHMOD_FILE',0660);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

define('AUTOMATIC_UPDATER_DISABLED', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
