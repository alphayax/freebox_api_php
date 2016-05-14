.<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Example', '0.0.2');
$App->authorize();
$App->openSession();


$toto = new \alphayax\freebox\api\v3\services\config\NAT\PortForwarding( $App);
$a = new \alphayax\freebox\api\v3\models\PortForwardingConfig();
$a->setEnabled( false);
$a->setComment('test');
$a->setLanPort( 4242);
$a->setWanPortStart( 4242);
$a->setWanPortEnd( 4242);
$a->setLanIp('192.168.0.42');
$a->setIpProto( 'tcp');
$a->setSrcIp('0.0.0.0');

$b = $toto->add($a);
var_dump( $b);
