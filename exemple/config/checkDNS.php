<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.config', 'PHP API Example (Config)', '1.0.0');
$App->authorize();
$App->openSession();

/// DNS
$toto = new \alphayax\freebox\api\v3\services\config\DHCP( $App);
$DHCPConfig = $toto->getConfiguration();
echo 'gateway : ' . $DHCPConfig->getGateway() . PHP_EOL;
echo 'netmask : ' . $DHCPConfig->getNetmask() . PHP_EOL;
echo 'DHCP IP range : ' . $DHCPConfig->getIpRangeStart() . ' => '. $DHCPConfig->getIpRangeEnd() . PHP_EOL;
