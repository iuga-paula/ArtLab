<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'unaux_28077790_713' );
/** MySQL database username */
define( 'DB_USER', '28077790_1' );
/** MySQL database password */
define( 'DB_PASSWORD', 'p9Bw58@S@5' );
/** MySQL hostname */
define( 'DB_HOST', 'sql306.byetcluster.com' );
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
define( 'AUTH_KEY',         'ppojkjgj6wnwdqd3mw7l0vyifqfrumidvmpxk3tltaei61hu2saio1bvezifnawi' );
define( 'SECURE_AUTH_KEY',  'jkjhkebwjg4oyjfr5cebrixqzofi3sjbpoy8ofbc3u8k36z5tabdl2poguch4kkf' );
define( 'LOGGED_IN_KEY',    'fbulqyfbly0ccmfngoazloph6askswg4mqgetvf9nezfg35vusdmx8tvscmqsrjq' );
define( 'NONCE_KEY',        'fpmpr2ic5patdljozg1vitikl9rsvg7o9rl1vtlzh8xjmm2w9szod3bfyfquw3oq' );
define( 'AUTH_SALT',        'r5mkzyar5vaptem8ombtb9qfgjarvbpqe29bkurfn6wmaabuwrmbgtbyg1iqapdo' );
define( 'SECURE_AUTH_SALT', 'ccrcq4eyqhrhwhzxo4dixkbgjizbbvq75inwv2m5swamsfqbn5bkvj5aw01z7dwe' );
define( 'LOGGED_IN_SALT',   'ehqpjkpoikgvtrjtvtocrfzdimznp22m0abkepfqayyfqnth9eyptl0cdqtoygxb' );
define( 'NONCE_SALT',       'gzsyeu98jilrbkmfnqcvjlgwzssc4wik74dj4uld4cyu47a5kbesya3ufbpg7yav' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3o_';
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