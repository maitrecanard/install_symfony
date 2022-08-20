<?php

/**if(chdir('skeleton')) {
    echo'Déplacement de dossier éffectué';
} else {
    echo'erreur lors du déplacement de dossier';
}**/

$test = 'cd /'. __DIR__ .'/skeleton';
$dir = __DIR__ ;
$ex = explode("\\", $dir);


var_dump($ex);

$r = str_replace(":","",$ex[0]);
var_dump($r);

$element = [];

for ($c = 0; $c > 0; $c ++)
{
    $element[$ex];
}

var_dump('element = ' .$element);

$url = $r + $element;

$i = implode("/", $url);

var_dump($i);

$test = $i . '/skeleton';

var_dump($test);


die;
//exec('composer require symfony/apache-pack');
if(exec('cd /'. $test))
{
    echo 'déplacement vers skeleton';
} else {
    echo 'erreur lors du déplacement vers skeleton';
}

die;
exec('ls');
exec('bin/console debug:router');