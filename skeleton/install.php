<?php

class Symf
{
    public function __construct()
    {
        $this->messageStart();
        $this->installVendor();
        $this->apachePack();
        $this->doctrineAnnotations();
        $this->twig();
        $this->messageEnd();
        exec('code .');
    }

    public function messageStart()
    {
        echo '
            -----------------------------------

            Début de l\'installation des dépendances

            ----------------------------------- 

        ';
    }

    public function messageEnd()
    {
        echo '

            -----------------------------------

            Fin de l\'installation des dépendances

            Démarrage de VSCode

            ----------------------------------- 
        ';
    }

    public function apachePack()
    {
        echo'
        
        Installation de la dépendance apache-pack
        
        ';
         exec('composer require symfony/apache-pack');
    }

    public function installVendor()
    {
        echo'
        
        Installation de la dépendance apache-pack
        
        ';
         exec('composer install');
    }

    public function debugRouter()
    {
        echo'
        
        Installation de la dépendance apache-pack
        
        ';
        exec('bin/console debug:router');
    }

    public function doctrineAnnotations()
    {
        echo'
        
        Installation de la dépendance doctrine annotations
        
        ';
        exec('composer require doctrine/annotations');
    }

    public function twig()
    {
        echo'
        
        Installation de la dépendance twig
        
        '; 
        exec('composer require twig/twig');
    }
}

$symf = new Symf;

$symf;