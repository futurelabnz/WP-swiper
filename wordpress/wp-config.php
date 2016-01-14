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
define('DB_NAME', 'swiper');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'VKXA#w1ZJ~J~5. |[=Q:$;Xot#sjidDwAlJgZ#BV`!et{({9 c@:1IM.nv:A?8Q1');
define('SECURE_AUTH_KEY',  'RiFB8<o(+pFh%i$ j(EKU,OFV7@&BD?@YTC?TV9=W@Aa p3:3fUw^JjJ*ej nl{o');
define('LOGGED_IN_KEY',    '>p-s2|KU8nGYMI_+c-cjV0t<4.l$`f8OiJQ{I*%R~|${>U d?qcHI#PF^OyGLWth');
define('NONCE_KEY',        'tx;Fr:^%gIBFH)bVBFK`1VS8*;?-mKAJ?Ur[hKP_6e8pz>kh>@f^UMDv)9]+|8ho');
define('AUTH_SALT',        'k2z;m]hX_+Pe^*.!30^A1BtX}%b|5ra&_NA51`p5<TP]80e&F.4vrA,Zvz n:^~s');
define('SECURE_AUTH_SALT', 'K<LPIU1- r}v%^TKt8J_7lpSV,AX#%{gTsd0,w9R%#3#K%,NEYeN UFGXf_D!YPC');
define('LOGGED_IN_SALT',   'X<Hx$?[mUW0Rl**]f}`wrdIegn&Vq +0y`ynA@8yeNDqF]Q~a(_3AE@*e&-%Bh+l');
define('NONCE_SALT',       'OL-omuc^5X:@: l.q9A^@F?m_XjG<%*Y`{]CvJs.(Jni?Z=1GgsgZe#X)54G^Kj5');

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
