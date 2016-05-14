<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Example', '0.0.2');
$App->authorize();
$App->openSession();

// PortForwarding
$toto = new \alphayax\freebox\api\v3\services\config\NAT\IncomingPort( $App);
$a = $toto->getById('http');
var_dump( $a);
