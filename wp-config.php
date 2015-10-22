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
define('DB_NAME', 'tommy199_coralalliance');

/** MySQL database username */
define('DB_USER', 'tommy199_coral');

/** MySQL database password */
define('DB_PASSWORD', '0QSi2DH5eo6M9nR');

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
define('AUTH_KEY',         ';kjaMFD+h|2w4eKy/(1SrU0G$Qf(.PIOiNWNtW2])c9LJwIZ@nw~J%X%,JGgCnP>');
define('SECURE_AUTH_KEY',  '.Thh-0kIJMxCgbNdnzyyyA.B+-BZap.[^)/tD{_6^(z>1x#-AE+/#wYb(c22>B+7');
define('LOGGED_IN_KEY',    'JA.<jepvl-JQs|qGM`0I6[{W@)E~aI[!ByE)&MYMcx-57Aj%sy8@5>7|p_LcaTE@');
define('NONCE_KEY',        '7?lz&;tL.^1q4MMi@YJPXbH^mv*G2Z#@f{m|]C)*a+Bm`Vw4#MTH!;gSegm8De3b');
define('AUTH_SALT',        'LY79aP<s0WVa|p7q|H9@w+kA`K)LGV5><t/Nb/HP]KFm=h)BCr~h5.aJ^t[JaEw}');
define('SECURE_AUTH_SALT', 'gCY?a$,~ 3l]<jm<uw%|:<>46OFiy34^Zq+:t3M`nV X*TI2O%K8< |*?*OG>@}y');
define('LOGGED_IN_SALT',   'gg+k++j}+3P:+~8R)c~vRqo|oE7@)iw-OM&h#]-<+}}^X](:BSB|Ml}v>8.2l^A#');
define('NONCE_SALT',       'vqzW*(G8^V]0`|ki.k/,rlOU|6{x}u_hAB`;uDU+SL*6v:)j|UWc5` 2{0^USB9V');

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
