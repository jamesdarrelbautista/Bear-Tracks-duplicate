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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'WordPress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '` Q(-S&uKEm2lf#*gjzQU[~wBok$X:n&uh*(Z`Y7MJaN$EyfjUOnCH4PLxz/JDCf' );
define( 'SECURE_AUTH_KEY',  'I8|>ru5_,=Wl?y1bwfGYX7NsjS4+gcVfG-KO-fZ}Mf)-U/D/5m +3r~H4SmyM3:<' );
define( 'LOGGED_IN_KEY',    'l7_[t7N7`T5Tr|> ],9(yJD%6BN:A)^O@gPl;sm0z(sP2;}r]n!</Oxb|t{TQ1y]' );
define( 'NONCE_KEY',        'CtXJ6wS1VyaT%Y<dIZ?x_g*G33bQ%#fJ[b&Z)akcJEGw7)`.sV02-_U{K4|73[xZ' );
define( 'AUTH_SALT',        '@x#uqx>8`[(Pt3zDVwFS,(L^6{o3D#N0{`<lM<JVZ5c?Wt][gZt%20i_MLahqj?t' );
define( 'SECURE_AUTH_SALT', 'DA2EUr]K/Q?O m9i?CcC5z8di]cxL,jIA$dRB};>2&KDj?EF&dM=Uh/}$CTs7gTB' );
define( 'LOGGED_IN_SALT',   'X><6<|l~GDF-Rsb>gYcx%QLumB*.W(aSR]am?VKW2 MjfKtJz}YNCdr6_g*y?hIL' );
define( 'NONCE_SALT',       'KC2LbFa]T2+e&e-$$5ukxBmdvwSpU3ix9b|&Z6ax)9z60-/aZ%qFJfrzU2+:@el{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
