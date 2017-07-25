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
define('DB_NAME', 'apartment_data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_POST_REVISIONS', false );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R;/H8[G^84X4Jl}9tm161U7ESS*C@dWF_DUiuh.,Kl1r=hiJz:V;EKB-ep[K{w}8');
define('SECURE_AUTH_KEY',  'U)>lDD89PZf.NP`dgM1OIfc<9G#aJe1Qn)I#=RBw4+=UG=^@MD(i$q-$6x/T-aT/');
define('LOGGED_IN_KEY',    'zlPtkOp!_DvP%4.I>]@N8jLCa,N9T:hJYwQC%sq5Ev/%S$jP29^),E9ZH!T#`y 0');
define('NONCE_KEY',        '3%QlVPLDc5K2RQM9!MoZI>p,ITg]wj1zm@7N`X78M^O6h|K7KmeZL&]m*BcEIk}A');
define('AUTH_SALT',        'h;zzL}kE[*_M-kTWx*vO2mx?SW>k|<%m#]0L16bos;,Xb|N;c Afl=/x]:q<>ej8');
define('SECURE_AUTH_SALT', '^NrZZeZ_`/1 /F?Z`4v~|:EF<LDrP+l4}BDTe!+8mL*:=~1m7IX-%gz<~|hyB .f');
define('LOGGED_IN_SALT',   'n%x(()X~G2Qoy+8!fhXW+RLji(vh{<EyD%fA[a+!80jc@`jI1>:-~1^Lm9}a)%~R');
define('NONCE_SALT',       'UC{{wA[>tS_{W4$rY;?mC#|B<Jq>auhic!_5,gOPXv%tb!p>Ij;WRz(M#)Iv-[)v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ap_';

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
