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
define('DB_NAME', 'manawynwood-r');

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
define('AUTH_KEY',         'RUZ2;`ucW&bc[5xeo8I.)6y_qTiRbZ2PqwyY$4H;_+AodM(!Hg=~RM[.cbeA)),I');
define('SECURE_AUTH_KEY',  '>*q<d3Po2QSP$E)tC<bf#_l<p*)4Eyz`ywwi<#`kkVgxg4SNVq. &G!JQZPbvZ8@');
define('LOGGED_IN_KEY',    '5d3*HA1zeSZ8%#C[Y80)l8JZd<Bn6(oMMXzmSr0&(Wu&2?ts5!?DZ`Ig-(o_Fuk%');
define('NONCE_KEY',        'wIFVgo.9.Qw6Q|ol^;kkg-)WIA[;Re&OV.VJsCti|/B!I1;42}FLkkhHG4&WXQ44');
define('AUTH_SALT',        'rbTNa5I354nVijD,vd[,l#3>ImnvazZAfgqen,:)O_~NzJX6s=RVPS, lJW<DK67');
define('SECURE_AUTH_SALT', 'n]E7.j[h@[-x5aPRziqPStF|svwIy!L9]a1npoKlT 4@b4|TV|>4&&}4BFlJtw@i');
define('LOGGED_IN_SALT',   'tl_TrCWzvTCg*{KM.D/Tos%rs|&>JDormt&`7y!ucUT*`/cUCB=e>e`TJbPW n<D');
define('NONCE_SALT',       'FW=X{/!BD@7T)E D3Yy;/rr6B)ZU5+:e=RFE,_u4`JPaUAOM-I2auP[n+0TeO_W:');

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
