<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.storage', 'PHP API Example (storage)', '1.0.0');
$App->authorize();
$App->openSession();

$StoragePartitionService = new \alphayax\freebox\api\v3\services\Storage\Partition( $App);
$Partitions = $StoragePartitionService->getAll();
print_r( $Partitions);

