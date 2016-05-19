<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.config', 'PHP API Example (Config)', '1.0.0');
$App->authorize();
$App->openSession();

// DMZ
$LCDService = new \alphayax\freebox\api\v3\services\config\LCD( $App);
$a = $LCDService->getConfiguration();
var_dump( $a);

$a->setBrightness( 10);
$b = $LCDService->setConfiguration( $a);
var_dump( $b);
