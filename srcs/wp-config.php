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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'khaoula' );

/** MySQL database password */
define( 'DB_PASSWORD', '654321' );

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
define( 'AUTH_KEY',         '*fk<g,/X:uv$ZxqJyES*-bKrrFKh?*K=s=|r~4zS.T(R.GbW*DcKWCNo#-j)P5z?' );
define( 'SECURE_AUTH_KEY',  'B!BvznN;t4J4Llrf6!%+E~-f,T3JE4p<5Z)EZ) -CVJwMkfW6rdMh,]y6Tt%c8A7' );
define( 'LOGGED_IN_KEY',    'FOVj IVk-}M?Lnm].4%t mJD1>m*gBGXH6-n?i:<Q }_FxpQK9Tw[]YE]wo9]o-x' );
define( 'NONCE_KEY',        '=B^=6:!qg=*)TRFWl%d,`xv2$,zffw?AA_5[7uOX-R,-vPSz_ZZktyyM.mu@:R~D' );
define( 'AUTH_SALT',        'mn.<N`#c3/ywXiSc]~jK5|eQeG~ksr0hfh&x4HS*<JXoDYY87?`z0Jlt$YC0~G:=' );
define( 'SECURE_AUTH_SALT', 'gw[wTuL(5vnij@!#:j?OZ5`N>b+P}207q>%n+Nd;oDqfW+9JM:eDXic*!-j)?oX!' );
define( 'LOGGED_IN_SALT',   'xX=f7Or6f`+AZ)duvzeGaZ9:OrY{jor)Y-ZxqP1%ewy-?(x``[-$x/vfOk@v*<g;' );
define( 'NONCE_SALT',       ')GhB@LEH:_h9 hC,biC8&~hb{R$~R+C%`QZUT0uK|d,VnKnUd;.,n}cU%l~`UKGZ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
