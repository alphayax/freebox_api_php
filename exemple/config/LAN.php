<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.config', 'PHP API Example (Config)', '1.0.0');
$App->authorize();
$App->openSession();

// Lan Config
$LanConfig = new \alphayax\freebox\api\v3\services\config\LAN\LAN( $App);
$a = $LanConfig->getConfiguration();
print_r( $a);

// Lan Browser
$LanBrowser = new \alphayax\freebox\api\v3\services\config\LAN\Browser($App);
$LanInterfaces = $LanBrowser->getBrowsableInterfaces();
print_r( $LanInterfaces);

/** @var \alphayax\freebox\api\v3\models\LAN\LanInterface $LanInterface1 */
$LanInterface1 = $LanInterfaces[0];

$LanHosts = $LanBrowser->getHostsFromInterface( $LanInterfaces[0]);
print_r( $LanHosts);

$LanHost1 = $LanBrowser->getHostFromId( $LanInterface1->getName(), $LanHosts[0]->getId());
print_r( $LanHost1);

$wol_status = $LanBrowser->wakeOnLan( $LanInterface1, $LanHost1);
print_r( $wol_status);
