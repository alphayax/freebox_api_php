<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.freeplug', 'PHP API Example (Freeplug)', '1.0.0');
$App->authorize();
$App->openSession();

// Freeplug
$FreeplugService = new \alphayax\freebox\api\v3\services\config\Freeplug( $App);
$a = $FreeplugService->getNetworks();
print_r( $a);

$b = $FreeplugService->getFromId( '14:0C:76:27:12:19');
print_r( $b);

$c = $FreeplugService->resetFromId( '14:0C:76:27:12:19');
print_r( $c);
