<?php

/// Require Composer AutoLoader
require_once '../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.version', 'Freebox PHP API Example (Version)', '1.0.0');
$App->setFreeboxApiHost( 'https://xxx.freeboxos.fr:17105');
$App->setAppToken( 'xxxxxxxxxxxxxxxxxxxx');

$VersionService = new \alphayax\freebox\api\v3\services\ApiVersion( $App);
$version = $VersionService->getApiVersion();
print_r( $version);
