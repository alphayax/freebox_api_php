<?php

/// Require Composer AutoLoader
use alphayax\utils\cli\IO;

require_once 'vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Exemple', '0.0.2');
$App->authorize();
$App->openSession();


//--
if( file_exists( 'one_piece')){
    $toto = json_decode( file_get_contents( 'one_piece'), true);
} else {
    $toto = [
        'rss'       => 'https://www.nyaa.se/?page=rss&user=175467',
        'pattern'   => '/One_Piece.*HD.*mp4/',
        'last_date' => 1456388223,
    ];
}

$rss = simplexml_load_file( $toto['rss']);
foreach( $rss->xpath('//item') as $item){
    $title = (string) $item->xpath('title')[0];
    $date  = (string) $item->xpath('pubDate')[0];
    $link  = (string) $item->xpath('link')[0];
    $desc  = (string) $item->xpath('description')[0];
    if( preg_match( $toto['pattern'], $title)){
        if( strtotime( $date) > $toto['last_date']){
        //    echo $title . ' '. $link . ' ' . $desc . PHP_EOL;
            $toto['last_date'] = strtotime( $date);

            $Downloads = new \alphayax\freebox\api\v3\services\download\Download( $App);
            $dl_id = $Downloads->addFromUrl( $link);

            IO::stdout( "Download $title added (id=$dl_id)", 0, true, IO::COLOR_GREEN);
        }
    }
}

file_put_contents( 'one_piece', json_encode( $toto, JSON_PRETTY_PRINT));




