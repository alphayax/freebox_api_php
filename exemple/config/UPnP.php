<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.config', 'PHP API Example (Config)', '1.0.0');
$App->authorize();
$App->openSession();

// UPnP AV
$UPnPAvService = new \alphayax\freebox\api\v3\services\config\UPnP\AV( $App);
$UPnPAvConfig = $UPnPAvService->getConfiguration();
print_r( $UPnPAvConfig);
