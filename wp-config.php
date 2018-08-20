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
define('DB_NAME', 'existaya');

/** MySQL database username */
define('DB_USER', 'existaya');

/** MySQL database password */
define('DB_PASSWORD', 'oLPsc31eEwrPSOWL');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Ui(a5|I6G*8#[M0KY>%q*w$^h@E3QPBD.WYV%9z++R6}0g>`LyC!D2]/aHswdPh]');
define('SECURE_AUTH_KEY',  '`;R|n5:,YnAl9Y}ddZr@Qez yK=vZo%}@8z#S,{O#7!mua_qXg}^mAK_s+6goG*~');
define('LOGGED_IN_KEY',    ']w.hQC.0afpr],]^_dNdcHX]HY:;dBA#]|%H:hvgQiV-WW!]30KOe8B}o5v8t6,E');
define('NONCE_KEY',        '{Rt{XiXBN9WVb+kB}K/V$7hbpy b&zX#:BR&5Z_MD?S`;qI2tIG&rL{abi+b~8=R');
define('AUTH_SALT',        'f 0AfdIlmzAszA/4;4<y9**oY{?|F/e9W>6p]]x%F%hS=cpw_uE?F%[Md+Ur1uMH');
define('SECURE_AUTH_SALT', 'CQMk67>Q2CH[ZBXO7?^y?@TT8p?5(E.JQ%aSe_V}%<=!dd{iN@OAi@w5-Z=>u, A');
define('LOGGED_IN_SALT',   '7$5L[ M%5@#[#2HS1U!(PqYphdnH7x)t>#xT|ou4x15.tmD*?G#Fx]T2A#Cl@;a%');
define('NONCE_SALT',       '*RJ9z6wu.`.#JHTgzxfcN$K{quU,7ulKT0QM<WF7,mkb-F*!3HO%Uf(*F^K_@hcL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
