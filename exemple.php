<?php

/// Require Composer AutoLoader
require_once 'vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Exemple', '0.0.1');
$App->authorize();
$App->openSession();


$Downloads = new \alphayax\freebox\api\v3\services\download\Download( $App);
$a = $Downloads->getAll();
var_dump( $a);

$b = $Downloads->getLogFromId( 156);
var_dump( $b);