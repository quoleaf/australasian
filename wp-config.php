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
define('DB_NAME', 'quoleaf8_australasian');

/** MySQL database username */
define('DB_USER', 'quoleaf8_auasian');

/** MySQL database password */
define('DB_PASSWORD', 'temp_123');

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
define('AUTH_KEY',         '+Qm{O{Wz]|gx||-En?kuv|z+q,L|kP}JMsN5M5KhSfJ>9k:0$f~0:Y6qiY-)K3!S');
define('SECURE_AUTH_KEY',  'v%&{Ia2NMuwur=GvoOqqC,S$FS+7*fM-]uL^gl%teB;A;Xj;?qHd&]AB{:p.#mgp');
define('LOGGED_IN_KEY',    'iSAAM^PJ-Y`FheepX(Kqsk`|@E)oZ]M-Z|?iwiAgB-kzFJ{qjJ^|F~v5)tX:0GX.');
define('NONCE_KEY',        'O>hWs.^]mnuGqH^TG;T~9JHT+-~pJ0+mblX3|9o.ZLafxI8>iVa6V6<N-+KnxD;|');
define('AUTH_SALT',        'INg>A+syR9m3p,QU6U/Cm|QGV;qcy2DtNllg/U-]@zZ/oE@wMdm]~t`Y--|5Vmr^');
define('SECURE_AUTH_SALT', 'E|4+$1LN}wlR$N72$Ff&D y<|W1ZbB$%?aJg4X-x;,vNhU%>8/K=pD2F(>@Whx8C');
define('LOGGED_IN_SALT',   ';t?W+y*lk[=RM+_-8+^(G kdXCLQF.Sh|#C-aU:C+6b#B|y=#3uoK5%ByGo=O}0O');
define('NONCE_SALT',       'UGW,}zTEu^*=?GPHM/!@pjDX-:?hU-3;1{:@?a4B%?&A+aTEA3DBt_xz2DBtMF-8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_HOME','http://quoleaf.com/staging/australasian-immigration');
define('WP_SITEURL','http://quoleaf.com/staging/australasian-immigration');

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
