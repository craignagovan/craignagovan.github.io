<?php

define( 'GD_VIP', '198.71.233.197' );
define( 'GD_RESELLER', 1 );
define( 'GD_ASAP_KEY', 'e2a84200fce705ad3820fd59acfdb64d' );
define( 'GD_STAGING_SITE', false );
define( 'GD_EASY_MODE', true );
define( 'GD_SITE_CREATED', 1489665919 );


define( 'GD_GF_LICENSE_KEY', 'fa6llZgh2JlFemrpDis1r9oMYU14h97V' );
define( 'GD_ACCOUNT_UID', '091e0583-0a7b-11e7-80db-3417ebe73f23' );
define( 'GD_SITE_TOKEN', '2576af56-3275-46e4-97d3-d213507cfa4f' );
define( 'GD_TEMP_DOMAIN', '5e4.09e.myftpupload.com' );
define( 'GD_CDN_ENABLED', FALSE );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( '091e0583-0a7b-11e7-80db-3417ebe73f23;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}