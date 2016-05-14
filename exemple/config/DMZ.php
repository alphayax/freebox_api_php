<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Example', '0.0.2');
$App->authorize();
$App->openSession();

// DMZ
$toto = new \alphayax\freebox\api\v3\services\config\NAT\DMZ( $App);
$a = $toto->getConfiguration();
var_dump( $a);
