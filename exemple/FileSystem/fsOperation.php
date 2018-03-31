<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.filesystem', 'Freebox PHP API (FileSystem)', '1.0.0');
$App->authorize();
$App->openSession();

$FSListService = new \alphayax\freebox\api\v4\services\FileSystem\FileSystemOperation( $App);

/// Uncomment following lines and give existing file names to test
/*
$a = $FSListService->move( ['/Disque dur/Photos/vivi.jpg'], '/Disque dur/Videos/');
var_dump( $a);

$a = $FSListService->copy( ['/Disque dur/Photos/vivi.jpg'], '/Disque dur/Photos/vivi3.jpg');
var_dump( $a);

$b = $FSListService->remove( ['/Disque dur/Photos/vivi2.jpg']);
var_dump( $b);

$c = $FSListService->cat( ['/Disque dur/Photos/vivi.jpg','/Disque dur/Photos/vivi3.jpg'], '/Disque dur/Photos/vivivivi.jpg');
var_dump( $c);

$d = $FSListService->archive(['/Disque dur/Photos/vivi.jpg','/Disque dur/Photos/vivi3.jpg'], '/Disque dur/Photos/vivi.zip');
var_dump( $d);

$e = $FSListService->extract( '/Disque dur/Photos/vivi.zip', '/Disque dur/Vidéos/', '', true);
var_dump( $e);

$f = $FSListService->computeHash( '/Disque dur/Photos/vivi.jpg');
var_dump( $f);
sleep( 2);
$g = $FSListService->getHashValue( $f->getId());
var_dump( $g);

$h = $FSListService->createDirectory( '/Disque dur/Photos/', 'toto');
var_dump( $h);

$i = $FSListService->rename('/Disque dur/Photos/toto', 'tutu');
var_dump( $i);

$j = $FSListService->download( '/Disque dur/Photos/vivi.jpg');
var_dump( $j);
*/

/*
sleep(1);
$Task = new \alphayax\freebox\api\v4\services\FileSystem\FileSystemTask($App);
$a = $Task->getTaskById($e->getId());
var_dump( $a);
*/
