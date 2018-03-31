<?php

require_once '../vendor/autoload.php';


generateDocForService(3);
generateDocForService(4);


function generateDocForService( $version){

    $srcDir     = __DIR__ . "/../freebox/api/v$version/services";
    $namespace  = "alphayax\\freebox\\api\\v$version\\services";

    $gen = new \alphayax\mdGen\MdGen( $srcDir, $namespace);
    $gen->filterSubClasses( \alphayax\freebox\utils\Service::class);
    $gen->generate("services_v$version");
}
