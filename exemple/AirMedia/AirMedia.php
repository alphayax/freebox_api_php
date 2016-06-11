<?php
use alphayax\freebox\api\v3\services;
use alphayax\freebox\api\v3\symbols;
use alphayax\freebox\api\v3\models;

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.airmedia', 'PHP API Example (AirMedia)', '1.0.0');
$App->authorize();
$App->openSession();


// AirMedia Config
$AirMediaService = new services\AirMedia\Config( $App);
$Configuration = $AirMediaService->getConfiguration();
print_r( $Configuration);

// AirMedia Receivers
$AirMediaService = new services\AirMedia\AirMediaReceiver( $App);
$Receivers = $AirMediaService->getAll();
print_r( $Receivers);

// AirMedia Request
$Request = new models\AirMedia\AirMediaReceiverRequest();
$Request->setAction(    symbols\AirMedia\Action::START);
$Request->setMediaType( symbols\AirMedia\MediaType::VIDEO);
$Request->setMedia( 'http://anon.nasa-global.edgesuite.net/HD_downloads/GRAIL_launch_480.mov');

$Status = $AirMediaService->sendRequest( 'Freebox Player', $Request);
print_r( $Status);
