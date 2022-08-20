<?php

/**if(chdir('skeleton')) {
    echo'Déplacement de dossier éffectué';
} else {
    echo'erreur lors du déplacement de dossier';
}**/

$test = 'cd /'. __DIR__ .'/skeleton';

var_dump($test);



str_replace("\/", "/", $test);

var_dump($test);

die;

//exec('composer require symfony/apache-pack');
if(exec('cd /'. __DIR__ .'/skeleton'))
{
    echo 'déplacement vers skeleton';
} else {
    echo 'erreur lors du déplacement vers skeleton';
}

die;
exec('ls');
exec('bin/console debug:router');