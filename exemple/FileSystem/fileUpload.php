<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.filesystem', 'Freebox PHP API Example (FileSystem)', '1.0.0');
$App->authorize();
$App->openSession();

$FileUploadService = new \alphayax\freebox\api\v3\services\FileSystem\FileUpload( $App);

$authID = $FileUploadService->createAuthorization('/Disque dur/Vidéos/', 'Game.of.Thrones.S06E05.SUBFRENCH.1080i.HDTV.H264-LiBERTY.mkv');
$success = $FileUploadService->uploadFile( $authID, '/home/alphayax/Game.of.Thrones.S06E05.SUBFRENCH.1080i.HDTV.H264-LiBERTY.mkv');
print_r( $success); // 1939839620


$AllUploads = $FileUploadService->getAll();
print_r( $AllUploads);

