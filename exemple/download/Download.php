<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.download', 'PHP API Example (Download)', '1.0.0');
$App->authorize();
$App->openSession();

/// List of all downloads
$DownloadService = new \alphayax\freebox\api\v3\services\download\Download( $App);
$Downloads = $DownloadService->getAll();
print_r( $Downloads);

/// Stats
$Stats = $DownloadService->getStats();
print_r( $Stats);

/// Files
$Files = $DownloadService->getFilesFromId( $Downloads[0]->getId());
print_r( $Files);

/// Priority
$Success = $DownloadService->updateFilePriority( $Downloads[0]->getId(), $Files[0]->getId(), \alphayax\freebox\api\v3\symbols\Download\File\Priority::HIGH);
print_r( $Success);
$Files = $DownloadService->getFilesFromId( $Downloads[0]->getId());
print_r( $Files);

