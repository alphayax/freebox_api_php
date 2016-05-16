<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.filesystem', 'Freebox PHP API Example (FileSystem)', '1.0.0');
$App->authorize();
$App->openSession();

/// Scan files in root
$FileSharingLinkService = new \alphayax\freebox\api\v3\services\FileSystem\FileSharingLink( $App);
$Links = $FileSharingLinkService->getAll();
var_dump( $Links);

$FileSharingLink = $FileSharingLinkService->create( '/Disque dur/Photos/vivi.jpg');
var_dump( $FileSharingLink);

$Links = $FileSharingLinkService->getAll();
var_dump( $Links);

$b = $FileSharingLinkService->deleteFromToken( $FileSharingLink->getToken());
var_dump( $b);

$Links = $FileSharingLinkService->getAll();
var_dump( $Links);
