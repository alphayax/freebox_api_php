<?php

/// Require Composer AutoLoader
require_once '../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.version', 'Freebox PHP API Example (Version)', '1.0.0');

$VersionService = new \alphayax\freebox\api\common\services\ApiVersion($App);
$version = $VersionService->getApiVersion();
print_r( $version);
