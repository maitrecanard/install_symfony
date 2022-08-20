<?php

class Symf
{
    public function __construct()
    {
        $this->messageStart();

        if (is_dir('skeleton')) {
            echo 'Symfony est déjà installé dans ce répertoire';
        } else {
            $this->installSymf();
            $this->apachePack(); 
            $this->debugRouter();
        }

        $this->messageEnd();
    }

    public function messageStart()
    {
        echo '
            -----------------------------------

            Début de l\'installation de Symfony

            ----------------------------------- 

        ';
    }

    public function messageEnd()
    {
        echo '

            -----------------------------------

            Fin de l\'installation de Symfony

            ----------------------------------- 
        ';
    }

    public function installSymf()
    {
        exec('composer create-project symfony/skeleton');
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

$cd = "cd /" . $re . '/' . $skeleton .'/';

var_dump($cd);

//exec('composer require symfony/apache-pack');
if(exec($cd))
{
    echo 'déplacement vers skeleton';
} else {
    echo 'erreur lors du déplacement vers skeleton';
    die;
}
    }

    public function apachePack()
    {
        echo'
        
        Installation de la dépendance apache-pack
        
        ';
         exec('composer require symfony/apache-pack');
    }

    public function debugRouter()
    {
        echo'
        
        Installation de la dépendance apache-pack
        
        ';
        exec('bin/console debug:router');
    }
}