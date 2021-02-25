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
define( 'DB_NAME', 'iap2020' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0q|;@U<16aF7x;<b]:J?VzDmfTCNgOc2&Ylg%SN-MNZkb^J%.Y~[%&=C)k1<9e#Y' );
define( 'SECURE_AUTH_KEY',  'iesVW$5Tl?E5G6kvqeeU^aGC<CF}|vp}LWoVcJ.slGDl}1w*4>/YfKPzfQ`=gmh8' );
define( 'LOGGED_IN_KEY',    '$z%N,/()UMG[J1c2r;sSLHN;R]~z1BKHz+g<&6y:p&F)&*[ZY;hMmj(yFB- ~fZD' );
define( 'NONCE_KEY',        'gEl+=pUW2z*]pi.;qTH|<&?pe%0f!h/&u3Ed-~vAg^6T,KgI.fi=/A0{!>(($<OW' );
define( 'AUTH_SALT',        '!IDLQn9p$, b3c5V@(~JpRbQKO?LNSe8v`ahz,xXwbR8Dc=mdz0s;,/?$p{k7T,u' );
define( 'SECURE_AUTH_SALT', 'e{U%t%pCR[9j3oqBp*b3Xy TU ;<kkhwRDZu_PW}t0{D<_-`0.HcURC^r$n!lA[]' );
define( 'LOGGED_IN_SALT',   'N6{`uDP6=e,#9unZ v%W@QZchY@^G3i.D!*(63Q;p{;f^sr0<@^R6#E_4g^X3GL>' );
define( 'NONCE_SALT',       ' oYd:?dkwz+/Mm?ux~`2~*W1b[Hg1}{*xXy?|IO#F{qg=|$~PMaW4@E),m6Si<6&' );

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

