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
define('DB_NAME', 'ss_dbname_5n7bokib1n');

/** MySQL database username */
define('DB_USER', 'TBOc2eN0Bdb5DkL');

/** MySQL database password */
define('DB_PASSWORD', 'XhssoVmQklfRS5F0');

/** MySQL hostname */
define('DB_HOST', 'lydiaburkecom1.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'x&IDps*F_DhYMEOal-v<&/E<DfhB<CYEDUmI/*OAL-ayXsPK&%DmR))^b%S)K%&veukK!-Yz[FjoQ}HHVFXZ)uF)OFf{FQ%@y|}nDPzj]Y^@X%PWidJ$OxFHi+vK@|K?');
define('SECURE_AUTH_KEY', 'HIQYK(g-{;PKd<^&tN<NS/*|T;u<U&=KH=/Bb-mAU(GlSyRW{Wnzrg/$r^&p*i$mTGZhLJOgzMZYZL%F@@pm([<ifcFXCgD($(}d+cOYXZLirP%!&qe&MlDN$KS}]ipQ');
define('LOGGED_IN_KEY', 'wo]jbbO>TIUYBH$zU|c$tISetIvRZy*U}AV?UzFG}yd+w{_ZWRo!zu%SL<g!v%A-a=dLL{mA}mUrcZYdZNDiq|ZNJ/PVuJ*)NBlu+tgwveq{nZ&ANSgtyDqlHCLrSQw}');
define('NONCE_KEY', 'TK!mq[Rn-g|cz!qfZ<WFJZdWGLy^KptpwUXXBi-aWdyR;c[J^$qqdQJMcfcJIC?fyh$rMIE|em+pSH@tSR&Q+KC]ULeFpZ![hPbUfx-SHs[rlRm(pxSxacEaoBkkyNUZ');
define('AUTH_SALT', 'tIUF;jEQ?q[cPYVLP[BU/xn{(CAlRvg)S(][VRAqTiVz=-eIEbZJTu}W!gD%fJqrX@Gqs$U;DISS_Rrp^shy;o$YJQE]dIX<TG-u=h?N<jVm$huZUFD>^;wIKAlfC?Z<');
define('SECURE_AUTH_SALT', 'H$VpF-HCNkL+x}TIOpSZ{Us]V+Hqzg%|PwSqev*zoeYLK}tDX&KL*)mhNjNmpZ/-A+s^mxoxmnog*SANnuqV_mpT>EC{qp%YUa/V;-;poOj-?f%cK]XL(rlTuFqyeNHO');
define('LOGGED_IN_SALT', 'vvalESK*PMK(%_WEK<nzClF!ddZG_yD>!A(l)Y|@iYcf?LwanyKJIyrWDz>GTGDg;N%$*m;%Smp!rJW}Lo*DHE?]oGlW!s;AsqmiX]KTM!aI(PBWcHLgEXOA&+N-u]}d');
define('NONCE_SALT', 's&$LIQtSlebabHb>Dfa{D;VmX(BsXkl_Z)@iZ*q*LynC@E]!<X-B]A?=v^fSb%%%*j/K}Aaa)-%mXbQIrqVL<gekX=lY$$rI<??^_bDoB+ECSnp]d(A_Fq)ACS$$!LQC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'uq2e3_eehz_';

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


# Enable all core updates, including minor and major:
define( 'WP_AUTO_UPDATE_CORE', true );

# disable plugin & theme editor in admin area:
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
