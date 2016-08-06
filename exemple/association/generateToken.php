<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.os', 'AYX Freebox OS', '1.0.0');

/// Begin association (go to the Freebox Player led display)
echo "Begin association" . PHP_EOL;
$App->authorize();
$App->openSession();

echo "Generated app_token : ". $App->getAppToken() . PHP_EOL;


