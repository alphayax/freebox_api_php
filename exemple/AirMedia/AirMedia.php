<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.airmedia', 'PHP API Example (AirMedia)', '1.0.0');
$App->authorize();
$App->openSession();


$AirMediaService = new \alphayax\freebox\api\v3\services\AirMedia\AirMedia( $App);

// AirMedia Config
$Configuration = $AirMediaService->getConfiguration();
print_r( $Configuration);
/*
// AirMedia Receivers
$Receivers = $AirMediaService->getAirMediaReceivers();
var_dump( $Receivers);

// AirMedia Request
$Request = new \alphayax\freebox\api\v3\models\AirMedia\AirMediaReceiverRequest();
$Request->setAction(    \alphayax\freebox\api\v3\symbols\AirMedia\Action::START);
$Request->setMediaType( \alphayax\freebox\api\v3\symbols\AirMedia\MediaType::VIDEO);
$Request->setMedia( 'http://anon.nasa-global.edgesuite.net/HD_downloads/GRAIL_launch_480.mov');

$Status = $AirMediaService->sendRequestToAirMediaReceiver( 'Freebox Player', $Request);
var_dump( $Status);
*/