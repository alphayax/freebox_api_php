<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.config', 'PHP API Example (Config)', '1.0.0');
$App->authorize();
$App->openSession();

/*
/// VPN Config
$VPNServerService = new \alphayax\freebox\api\v3\services\config\VPN\Server\Config( $App);
$a = $VPNServerService->getConfigurationFromId( 'openvpn_routed');
print_r( $a);
/// VPN Users
$VPNUserService = new \alphayax\freebox\api\v3\services\config\VPN\Server\User( $App);
//$Users = $VPNUserService->getAll();
//print_r( $Users);

/// IP Pool
$IPPoolService = new \alphayax\freebox\api\v3\services\config\VPN\Server\IpPool( $App);
$resa = $IPPoolService->getReservations();
print_r( $resa);

$CnxService = new \alphayax\freebox\api\v3\services\config\VPN\Server\Connection( $App);
$connections = $CnxService->getAll();
print_r( $connections);
*/

/*
$VPNClientService = new \alphayax\freebox\api\v3\services\config\VPN\Client\Config( $App);
$VPNClientConfigurations = $VPNClientService->getAll();
print_r( $VPNClientConfigurations);

$VPNClientStatus = new \alphayax\freebox\api\v3\services\config\VPN\Client\Status( $App);
$VPNStatus = $VPNClientStatus->getStatus();
print_r( $VPNStatus);

$VPNLogs = $VPNClientStatus->getLogs();
print_r( $VPNLogs);
*/