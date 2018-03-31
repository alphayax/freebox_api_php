<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.filesystem', 'Freebox PHP API Example (FileSystem)', '1.0.0');
$App->authorize();
$App->openSession();

$FileUploadService = new \alphayax\freebox\api\v4\services\FileSystem\FileUpload( $App);

$AllUploads = $FileUploadService->getAll();
print_r( $AllUploads);

