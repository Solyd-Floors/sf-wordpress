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
define( 'DB_NAME', 'defaultdb' );

/** MySQL database username */
define( 'DB_USER', 'doadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fco1xtvcjz73aegq' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpress-db-95364-do-user-9223216-0.b.db.ondigitalocean.com:25060' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'VHL`1lbrxELP.:B23_UX,Dw2Si>bB3L6Ns+)eSc6f)3>#7.5L8tBkP0k2KDW(re;' );
define( 'SECURE_AUTH_KEY',  'T%KgH-PA$((,P1rg7f@d,#l6TSzB-&R{j#{[2Z@r$5M-uPb (#w-n=^?o(gKR.Z]' );
define( 'LOGGED_IN_KEY',    ')r~(+16@mbGAN+!34#6rP~wAu(zZAG,>pOHp0/N@aQI5shARa}+=XYp=99xOUXdh' );
define( 'NONCE_KEY',        '_FlmxI){o0y#WPFPVp*#l%4rr7n#B{@MBA$<7Oz@{?QU78rTHu-CMrMZ-o!tbRPN' );
define( 'AUTH_SALT',        'mlb50Ruu>-ZW%hb6{%9 $tHRT#MI^<Qv`?WB%6KX/^q<&*q#FGMdT^u^q83k#VPP' );
define( 'SECURE_AUTH_SALT', 'aR0=2vrm 1imVDqkV$iVX4Kklp,@Eh4n [VKTbJ{BfK+2XA?J})O5ij.T5B]~CWV' );
define( 'LOGGED_IN_SALT',   '$I[AsXOfL_pke>5WTr3o>+?;}WQa%+*`^nfQg~;7nPY?OQ.faeEv|tKsP!cmrB{Y' );
define( 'NONCE_SALT',       'f7jW,^|o$.1{BmD.}Y:[IF2zn@$q~e>!,4yiI)-qo6]<DKpJ4T(p_:&t|$YKT#<f' );

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
