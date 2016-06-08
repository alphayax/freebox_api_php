<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.config', 'PHP API Example (Config)', '1.0.0');
$App->authorize();
$App->openSession();

/*
$WiFiConfigService = new \alphayax\freebox\api\v3\services\config\WiFi\Config( $App);
$a = $WiFiConfigService->getConfiguration();
print_r( $a);
*/


$WiFiAccessPointService = new \alphayax\freebox\api\v3\services\config\WiFi\AccessPoint( $App);
$AccessPoints = $WiFiAccessPointService->getAll();
/*
print_r( $AccessPoints);

$AllowedComb = $WiFiAccessPointService->getAllowedCombFromId( $AccessPoints[0]->getId());
print_r( $AllowedComb);

$Stations = $WiFiAccessPointService->getStationsFromId( $AccessPoints[1]->getId());
print_r( $Stations);

$Neighbors = $WiFiAccessPointService->getNeighborsFromId( $AccessPoints[1]->getId());
print_r( $Neighbors);
*/

$ChannelUsages = $WiFiAccessPointService->getChannelUsageFromId( $AccessPoints[1]->getId());
print_r( $ChannelUsages);

/*
$WiFiBssService = new \alphayax\freebox\api\v3\services\config\WiFi\Bss( $App);
$Bsss = $WiFiBssService->getAll();
print_r( $Bsss);

$Bss = $WiFiBssService->getFromId( $Bsss[0]->getId());
print_r( $Bss);
*/
