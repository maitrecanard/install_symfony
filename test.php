<?php

/**if(chdir('skeleton')) {
    echo'Déplacement de dossier éffectué';
} else {
    echo'erreur lors du déplacement de dossier';
}**/

//$test = 'cd /'. __DIR__ .'/skeleton';
$dir = __DIR__ ;
var_dump($dir);
$ex = explode(":", $dir);
var_dump($ex);

$im = implode("", $ex);
var_dump($im);
$ex = explode("\\", $im);
var_dump($ex);
$im = implode("/", $ex);
var_dump($im);

$re = str_replace("C", "c", $im);

var_dump($re);


$skeleton = "skeleton";

$cd = "cd " . $re . '/' . $skeleton .'/';

var_dump($cd);

//exec('composer require symfony/apache-pack');
if(exec("cd skeleton/"))
{
    echo 'déplacement vers skeleton';
} else {
    echo 'erreur lors du déplacement vers skeleton';
}

die;
exec('ls');
exec('bin/console debug:router');