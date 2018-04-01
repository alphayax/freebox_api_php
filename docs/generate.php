<?php

require_once '../vendor/autoload.php';


generateDocForService("v3");
generateDocForService("v4");
generateDocForService("common");


function generateDocForService( $version){

    $srcDir     = __DIR__ . "/../freebox/api/$version/services";
    $namespace  = "alphayax\\freebox\\api\\$version\\services";

    $gen = new \alphayax\mdGen\MdGen( $srcDir, $namespace);
    $gen->filterSubClasses( \alphayax\freebox\utils\Service::class);
    $gen->generate("services_$version");
}
