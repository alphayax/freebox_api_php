<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.call', 'PHP API Example (Call)', '1.0.0');
$App->authorize();
$App->openSession();

$CallService = new \alphayax\freebox\api\v3\services\Call\CallEntry( $App);

/// Get last 100 call entries
$CallEntries = $CallService->getAll();
print_r( $CallEntries);

/// Get a specific call entry
$CallEntry = $CallService->getFromId( $CallEntries[0]->getId());
print_r( $CallEntry);

/// Delete a specific call entry
$isDeleted = $CallService->deleteFromId( $CallEntries[0]->getId());
print_r( $isDeleted);

/// Update a specific call entry
$CallEntries[1]->setNew( false);
$CallEntry = $CallService->update( $CallEntries[1]);
print_r( $CallEntry);



