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
define( 'DB_NAME', 'dby2ed7vymggkj' );

/** MySQL database username */
define( 'DB_USER', 'upyhb8i9z6wg6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gpj3sqcj0hca' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'a4vP_{qaZ3 ?VnFlxpc1u-Mi+oNS/aKE#Eq)=An}{?dN[v8+7yjn8Wn02`b-0ClY' );
define( 'SECURE_AUTH_KEY',   'e,T)wtz}gN@#n(_-natdf2oM@}b$1ulDHHF$j5j5#hiDg.&j%MqARq>}i?UK~-<`' );
define( 'LOGGED_IN_KEY',     '0qOH$+,^>^(3sM`u&~|jf*(#bf>:#|8(3f}+?4)jpz7_Li+aRd5M!+!-hVfZ,*(b' );
define( 'NONCE_KEY',         'x_2fb]2yP9Op]G+K>ccWP?]zp}KupCnF:gM_+}K=/x){5@=OmBs!V@^!VhaSy>XF' );
define( 'AUTH_SALT',         'IR?7!{b=r2|e7v4u9nx0BK3B3ty!du?!uVU>b4?|neN-_Fz2O!62*i1$50eEgBm4' );
define( 'SECURE_AUTH_SALT',  'Bx~J{I8OGc+%p+.>AI0).;WnIQJn[$m+RVmUw_t{5-shz4Vs^Jt|m-vlQGvQq=v,' );
define( 'LOGGED_IN_SALT',    '[geyuoGB|H)1~d;=uu!Wj3u%xc.h5OeQI/62_u=tL DJ#}z)0p+rkDivCR!%teK*' );
define( 'NONCE_SALT',        '$QNDk,GiQ$GTU@@`3> mH1kr9kGC-zrDOS3@`Y+ZLwdDN]NM%S:pZ:=ZT;fO91k0' );
define( 'WP_CACHE_KEY_SALT', ')CMQ$NoPnQ1##BR,b-.([F~KQ]P]`:/YS wL3>E(_UaS&zX([#_&uYHMI)h_}l02' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sob_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
