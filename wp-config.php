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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '858841f4e794815c90660957c3a3d02fee95522b3983aa84');

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
define('AUTH_KEY',         '[]X`<T[y;evVX4] P}~orY>o[*#T,f#@J8jWdG81BTk2.:vr#ofX0)LVdB=1[sZp');
define('SECURE_AUTH_KEY',  '+8e;]L>kmC9&:YF5,23|89),1}t=07kmT,tn7dcIyP3DTxk;RSv-35RH|f)|o=AH');
define('LOGGED_IN_KEY',    '`XbOct8$DPqY@co&O=`i3arGIBd3Wq+I(*NSbLrtK]l;>hqwMefj6xId2i.1)[]7');
define('NONCE_KEY',        'Y+p>WL7$3-Y]e(fX$J9&XeV|hig`:NQjt#1-@Tn.%_}@EF=_AMG#WsAdxLqJ(VK0');
define('AUTH_SALT',        'flAZYDRpWwniutAliH8;/&V=1Bx:0Np}G@<fu+&#u`jw}^%gLOg$a `bx4JDbU!x');
define('SECURE_AUTH_SALT', '8;-gty~G_M?+mP}W|$Gt(BMe&|$+mVAc,Gq*fw-j~Tn N3hT51hcF QiZeGYkyiD');
define('LOGGED_IN_SALT',   'UjP1q4i#Q)Z(eG}uMA L.)Zs*7,dd=`b b*j%QGYKq %2m` Hb%8UhL[]v)R9lhA');
define('NONCE_SALT',       'jPNHyuj{a<HHbm/Dt5[F0ce=ZC&C?=vFpl@h Yb7N<^pHU$T^.-DA@$!4Y*6U[pr');

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
