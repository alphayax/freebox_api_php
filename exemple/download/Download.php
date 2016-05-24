<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.download', 'PHP API Example (Download)', '1.0.0');
$App->authorize();
$App->openSession();

/// Download
$DownloadService = new \alphayax\freebox\api\v3\services\download\Download( $App);
$Downloads = $DownloadService->getAll();
print_r( $Downloads);
