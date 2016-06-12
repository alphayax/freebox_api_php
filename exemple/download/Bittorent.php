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

/// Trackers
$TrackerService = new \alphayax\freebox\api\v3\services\download\Tracker( $App);
$Trackers = $TrackerService->getAll( $Downloads[1]->getId());
print_r( $Trackers);

/// Peers
$PeerService = new \alphayax\freebox\api\v3\services\download\Peer( $App);
$Peers = $PeerService->getAll( $Downloads[0]->getId());
print_r( $Peers);


$BLService = new \alphayax\freebox\api\v3\services\download\BlackList( $App);
$BLEntries = $BLService->getAllFromDownloadTaskId( $Downloads[0]->getId());
print_r( $BLEntries);
