<?php
# Database Configuration
define( 'DB_NAME', 'wp_kdtest31' );
define( 'DB_USER', 'kdtest31' );
define( 'DB_PASSWORD', 'yJEUUcnDCspGFExS6MvZ' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'Z]QP7&~H;r r!r#Yk27;v9}]Y(+#~EujJG<<,e%o<GU7/+ `z;NJ(Fw|Px!BQjA(');
define('SECURE_AUTH_KEY',  'j52Y =9Lkpj*P`>Vk~2&m]%.xu?GHE^T+MM[79wzY8a-Hw4`,NrA6`pqGgeAsyvy');
define('LOGGED_IN_KEY',    '{_W/TPANlc@HPJ9HH41Xkx?|<BibcyEya7PL5=d3AG:z6Qu&_I4dxW`d_lfp$BRY');
define('NONCE_KEY',        'w+zxXX8;Pb3QlQOt(q((OkQEOY-c0+fMQ+GvPe5lt- Su6^%+])la,Cl/DILkix5');
define('AUTH_SALT',        'j^t-4]- GxDOWg+AS6v*ZGv*pDX||_+KEsXFo6bo|qkumR}#g+Gc`;r,_G:G%,`Y');
define('SECURE_AUTH_SALT', 'Qst^3dmmuN*uEHC+qXtS8+nL?=gSVRAe>LEtw%[t.6{nAbE*;*EQDN+W&MV+hLHq');
define('LOGGED_IN_SALT',   '=+q3qook,*%q$l_8O-8acFHodgdRXkY*NlvL,B|WKMFKJ%1$e:{V6R9fxZ|#7a.M');
define('NONCE_SALT',       'uXu;SA6+?PMwm<*c%ef*@Q/rO<O6=&~,UW*~W0IL}_b<B<p[hI9;|`J?5jdX4w( ');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'kdtest31' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

umask(0002);

define( 'WPE_APIKEY', 'dd4904e1f0139a875a72a6a042f3c31fac757fe3' );

define( 'WPE_CLUSTER_ID', '154778' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'kdtest31.wpengine.com', 1 => 'kdtest31.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-154778', );

$wpe_special_ips=array ( 0 => '146.148.73.43', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
