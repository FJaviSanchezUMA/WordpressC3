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
define( 'DB_NAME', 'iref' );

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
define( 'AUTH_KEY',         'F@HHcauvwwkGj*T2)TKIb^~td_;P<-nlm9pCGa-YXk-12gfNT5&s(u3mbv/@V]X4' );
define( 'SECURE_AUTH_KEY',  'i-l1Z[pv9q,[D*jHy[29#~QPTCDMh`v`7FCHf3%+ent 0)^Vd4vSr`{tW/36dE:<' );
define( 'LOGGED_IN_KEY',    'VZb:1G_fzeXhD+`3cTYHX{2$L/X~#Fk#yHf8,2{+ T;C_.*|T{?p^O>OXh0m(/L.' );
define( 'NONCE_KEY',        '?zQP6&`v&ufuz~Ei<Bi>Kn)bBCd2w=>CM5vH+hjfk_aC?F0[%J4c]9o$)oUe/e<C' );
define( 'AUTH_SALT',        '0Ni=z!H|/q_S|4Az.7gNSH9ii$HV?bOo4w0DI|b7zQ2jc)FXsbapG68IK4+fV{$-' );
define( 'SECURE_AUTH_SALT', '%molc+ew3k/CQ7jrwZU~RXEXd9!?;W0!Z~^6u5Lh <s%/A.6G1qcj>r3XZPorA`0' );
define( 'LOGGED_IN_SALT',   '23MIu_Oelpoz6qEE^oxXWn@ek@c:om#U)]OGC,pxW_=U2j+xNv1zc{F%j{TY![?@' );
define( 'NONCE_SALT',       '!Y^4{kW3h$R0k=}A)*3&:lkRL/h+ec BP=$sE>7V*deWry/?JC5Dkh3Nhp<ly0J,' );

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
