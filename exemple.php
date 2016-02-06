<?php

/// Require Composer AutoLoader
require_once 'vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Exemple', '0.0.1');
$App->authorize();
$App->openSession();


$System = new \alphayax\freebox\api\v3\services\config\System( $App);

/** @var \alphayax\freebox\api\v3\models\SystemConfig $SystemConfig */
$SystemConfig = $System->getConfiguration();

\alphayax\utils\cli\IO::stdout( 'Uptime : '. $SystemConfig->uptime);
