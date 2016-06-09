<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.filter', 'PHP API Example (Parental control)', '1.0.0');
$App->authorize();
$App->openSession();

$FilterService = new \alphayax\freebox\api\v3\services\ParentalControl\Filter( $App);
$Config = $FilterService->getConfiguration();
print_r( $Config);

$Filters = $FilterService->getAll();
print_r( $Filters);

