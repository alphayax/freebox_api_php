<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.download', 'PHP API Example (Download)', '1.0.0');
$App->authorize();
$App->openSession();

/// Download configuration
$DownloadConfigService = new \alphayax\freebox\api\v3\services\download\Configuration( $App);
$DlConfig = $DownloadConfigService->getConfiguration();
print_r( $DlConfig);

$DlConfig = $DownloadConfigService->updateThrottlingMode( 'normal');
print_r( $DlConfig);
