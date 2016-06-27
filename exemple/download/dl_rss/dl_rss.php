<?php

/// Require Composer AutoLoader
require_once '../../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.dl_rss', 'Alphayax RSS Downloader', '1.0.0');
$App->authorize();
$App->openSession();

/// Scan files for configs
$config_rfi_s = glob( 'config/*.json');
foreach( $config_rfi_s as $config_rfi){
    $config = json_decode( file_get_contents( $config_rfi), true);
    $config = checkRSS( $config, $App);
    file_put_contents( $config_rfi, json_encode( $config, JSON_PRETTY_PRINT));
}

/**
 * @param $config
 * @param $App
 * @return array
 */
function checkRSS( $config, $App){
    echo "Scan RSS {$config['rss']} for pattern {$config['pattern']}" . PHP_EOL;
    $rss = simplexml_load_file( $config['rss']);
    foreach( $rss->xpath('//item') as $item){
        $title = (string) $item->xpath('title')[0];
        $date  = (string) $item->xpath('pubDate')[0];
        $link  = (string) $item->xpath('link')[0];
        $desc  = (string) $item->xpath('description')[0];
        if( preg_match( $config['pattern'], $title)){
            if( strtotime( $date) > $config['last_date']){
                $config['last_date'] = strtotime( $date);

                $Downloads = new \alphayax\freebox\api\v3\services\download\Download( $App);
                $Downloads->addFromUrl( $link);

                echo "Add download $title ($desc)" . PHP_EOL;
            }
        }
    }
    return $config;
}





