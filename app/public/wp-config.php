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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_DEBUG' , true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R/b4PyVikayFPAs6vs7wms+hyQgdVa2LwsJPiQ33kP4lykwR0XAH4NiVEy4ks62gX5T1yEKMjEwxu85ySKrbwQ==');
define('SECURE_AUTH_KEY',  'SIqoTx4Dnj4GKogMGl6OBE5q+riOyLNoFXVal6Do4pkkqJTZ/nNXvDafUVpUzrjL0uNhXEftPcTCHC1GiXki8g==');
define('LOGGED_IN_KEY',    '6OPIMBhkQ4/xDMG5x6Enfl0RfxKrHgrU4YSypd+lKYwByRWUl8uhGrHXgLcLyRq1UbeTJ7Q+utZRcsg3L/eNqA==');
define('NONCE_KEY',        'f/GMHQAGlpUN05O0YW++wi2uBok3JlKtbPblG43ALG+WV3+u9C/yo5lhpH4FZ0gD8KsWuzi9LxnMbusR+K9Pcg==');
define('AUTH_SALT',        'Kc/7uxKZcMMdcYoeIPJYe2aulydhoZgzxGd36nEXOvhDbfYWDg7NS71LiBu/nmzWMOO0BhYorDqJguN0t51UwQ==');
define('SECURE_AUTH_SALT', 'rZWNGsbkf8xWb8AnvQCDn7zfTRO4CTpzw/MgRr0/cmO89yDWxuSnHFpF+M1lEiXBsk7cmiTaedn9rtstVz7tDA==');
define('LOGGED_IN_SALT',   'ZB0cCu6IeJNR2a08RcN5pFMJz317IlIAtNwiZM5E+k7Esh79hebqLqYmo28kA7TPoJYLBrf4Myn0V631Ezr6XA==');
define('NONCE_SALT',       'kMrYdXy5QkvnoutlGENiSWLq15VyeDN9sQj7BfILZz9+tk0sfieVsIWhgTfFR4jG7gtH+CcScrpGCRHrUHMjUw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
