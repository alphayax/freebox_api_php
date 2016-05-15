<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.filesystem', 'Freebox PHP API Example (FileSystem)', '1.0.0');
$App->authorize();
$App->openSession();

/// Scan files in root
$FSListService = new \alphayax\freebox\api\v3\services\FileSystem\FileSystemListing( $App);
$FilesInRoot = $FSListService->getFilesFromDirectory( '/');
foreach( $FilesInRoot as $fileInfo){
    echo '- '. $fileInfo->getPath() . PHP_EOL;
}

/// Get a file information (Will throw an exception if file does not exists)
try {
    $VideoFile = $FSListService->getFileInformation( '/Disque dur/Téléchargements/The.100.S03E14.FASTSUB.VOSTFR.1080p.HDTV.x264.AAC-GOBO2S/The.100.S03E14.FASTSUB.VOSTFR.1080p.HDTV.x264.AAC-GOBO2S.mkv');
    var_dump( $VideoFile);
} catch (Exception $e){
    echo $e->getMessage();
}
