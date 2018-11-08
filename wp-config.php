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
define('DB_NAME', 'wordpresslearn');

/** MySQL database username */
define('DB_USER', 'adams');

/** MySQL database password */
define('DB_PASSWORD', 'saddam');

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
define('AUTH_KEY',         'NxlXqHO3U1$S)z`K%PNn2TeSLj(R<,&Q(p# R%0PqHOv0(?nF+L-lr[SG}TDW8-}');
define('SECURE_AUTH_KEY',  '6&h1EAugl^kdvrcfae~DG<O5+;a^TeW&/l7Oy@lM9t>Le;pGG(r5Y:Ii|Uu[8TOL');
define('LOGGED_IN_KEY',    'KAL*m^|g%3C5:/Est1-Bu<em^X3Ef{aeLxr[A4Q>wF{{cnrC?^-!4ZQ@A[O!Tm~l');
define('NONCE_KEY',        '-O0B%RelW_?DvI9yj@!JEP)PUU0S{KP>M{U0B)#l,2pn~!_J3j[4RrY_7 2Q~W}(');
define('AUTH_SALT',        ']wKZN8nXcn>%QWqxI=UiW44^.eh,M;bHW<1CGFlV;4Z2963BuD@Z`HA,d->DA3kz');
define('SECURE_AUTH_SALT', 'H=V@m9)I nA1ko1B2pt{YIsXa,];<f%(djOsh?ec!QE+|tRw:Ckb,J%G3DXG$bo&');
define('LOGGED_IN_SALT',   'nz]LYn&Ezghn0r)bVJQX5N7TU,*%Lr$J,d1QneBq$;H*v8-PA%d>a6^3BY<}2LYL');
define('NONCE_SALT',       '0+E{)Gp0UTXZ1Rg(BKDKvVLqj7^S{ Q-0w}bm(|htRJZ,hL6pe9Z4|wY!9;8tqbN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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
