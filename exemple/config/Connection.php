<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.config', 'PHP API Example (Config)', '1.0.0');
$App->authorize();
$App->openSession();

/*
/// Get connection status
$CnxService = new \alphayax\freebox\api\v3\services\config\Connection\Connection( $App);
$CnxStatus = $CnxService->getStatus();
print_r( $CnxStatus);

/// Get connection configuration
$CnxConfig = $CnxService->getConfiguration();
print_r( $CnxConfig);

/// Update connection configuration
$CnxConfig->setPing( false);
$CnxConfig = $CnxService->setConfiguration( $CnxConfig);
print_r( $CnxConfig);

/// IPv6 config
$IPv6Config = $CnxService->getIPv6Configuration();
print_r( $IPv6Config);
*/

/*
/// XDSL Status
$XDSLService = new \alphayax\freebox\api\v3\services\config\Connection\Xdsl( $App);
$XdslStatus = $XDSLService->getStatus();
print_r( $XdslStatus);
*/

/*
/// FTTH Status
$FTTHService = new \alphayax\freebox\api\v3\services\config\Connection\Ftth( $App);
$FtthStatus = $FTTHService->getStatus();
print_r( $FtthStatus);
*/

/*
/// Ovh Status
$DynDnsService = new \alphayax\freebox\api\v3\services\config\Connection\DynDns\Ovh( $App);
$OvhStatus = $DynDnsService->getStatus();
print_r( $OvhStatus);

$OvhConfig = $DynDnsService->getConfig();
print_r( $OvhConfig);
*/

