<?php

/// Require Composer AutoLoader
require_once 'vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Exemple', '0.0.2');
$App->authorize();
$App->openSession();


$toto = new \alphayax\freebox\api\v3\services\config\DHCP( $App);
var_dump( $toto->get_current_configuration());
