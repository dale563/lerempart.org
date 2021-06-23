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
define( 'DB_NAME', 'lerempart01' );

/** MySQL database username */
define( 'DB_USER', 'groupec' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pmi123-01' );

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
define( 'AUTH_KEY',         '%:t<4M9XuDlt?@Ghe&MTqewGKV|?N,x`kW.B6dkf0l;4]n7%[?84`IY ^Be_*XP=' );
define( 'SECURE_AUTH_KEY',  '>c@z%!97%OLG1iv8Vot+L@(_=(?9&[QGMBUoi^:-n~E/n`aXa~qaBUi`Rdwvo*lM' );
define( 'LOGGED_IN_KEY',    'Jv:PUYBz]|11NP& uFSYg@}0jp WyPZzZ2)CF=x>m%KYq-:fZ1hS>lg|PnD-;>q_' );
define( 'NONCE_KEY',        '<o<7uM7|~DXy{=G,!3|*;|@XfFVL/c~V2Vo4@qU_b@or}z1kZb_3>5&$.=KH62w`' );
define( 'AUTH_SALT',        '|bX_+ZL|;I5I!bT]K/xolKD#v xn1rZ+m;6A,8(HFlcxm#D82MB>6/]IX<sH`Qd0' );
define( 'SECURE_AUTH_SALT', '2`R[axl#_S*22Uk4>Rviu5!xIi2#r/EKDgWEPDY/tD3P}`-:!](|5452CeRM9inC' );
define( 'LOGGED_IN_SALT',   'h]lz_c4=RUsVA[`qfP4L~{<P@FlW4Y([:k9cQ>kF~dJUUJV~v3mURVS8@ZvO:K|N' );
define( 'NONCE_SALT',       '%#R5mhR|`xEu~42^>@6no|:)>Se]ADo$mh:lEcv]T2/Ll(8|4Yl4FinZ?~4% Y~:' );

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
