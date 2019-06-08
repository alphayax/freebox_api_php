<?php

/// Require Composer AutoLoader
require_once dirname(__FILE__).'/../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.os', 'AYX Freebox OS', '1.0.0');
$App->loadAppToken();
$App->openSession();

$nodeService = new \alphayax\freebox\api\v6\services\Home\Nodes($App);
$nodes = $nodeService->getAll();

$nbNodes = count($nodes);
echo "Found ".$nbNodes." nodes.".PHP_EOL;
if ($nbNodes > 0) {
    echo "First node :".PHP_EOL;
    var_dump(current($nodes));
}
echo PHP_EOL;
echo PHP_EOL;

$tileService = new \alphayax\freebox\api\v6\services\Home\Tileset($App);
$tiles = $tileService->getTiles();
$nbTiles = count($tiles);
echo "Found ".$nbTiles." tiles.".PHP_EOL;
if ($nbTiles > 0) {
    echo "First tile :".PHP_EOL;
    var_dump(current($tiles));
}
