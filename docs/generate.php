<?php

require_once '../vendor/autoload.php';

$srcDir     = __DIR__.'/../freebox/api/v3/services';
$namespace  = 'alphayax\freebox\api\v3\services';

/// Services documentation
$gen = new \alphayax\mdGen\MdGen( $srcDir, $namespace);
$gen->filterSubClasses( \alphayax\freebox\utils\Service::class);
$gen->generate( 'services');
