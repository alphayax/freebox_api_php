<?php

/// Require Composer AutoLoader
require_once '../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.permission', 'PHP API Example (permission)', '1.0.0');
$App->authorize();
$App->openSession();

$hasExplorerPermission = $App->hasPermission( \alphayax\freebox\api\v3\symbols\Permissions::EXPLORER);

var_dump( $hasExplorerPermission);
