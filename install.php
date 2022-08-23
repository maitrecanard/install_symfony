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
        $this->twigExtreBundle();
        $this->twigStringExtra();
        $this->assets();
        $this->makerBundle();
        $this->debugBundle();
        $this->profilerPack();
        $this->ormPack();
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

    public function twigExtreBundle()
    {
        echo'
        
        Installation de la dépendance twig extra-bundle
        
        '; 
        exec('composer require twig/extra-bundle');
    }

    public function twigStringExtra()
    {
        echo'
        
        Installation de la dépendance twig string-extra
        
        '; 
        exec('composer require twig/string-extra');
    }

    public function assets()
    {
        echo'
        
        Installation de la dépendance asset
        
        '; 
        exec('composer require symfony/asset');
    }

    public function makerBundle()
    {
        echo'
        
        Installation de la dépendance maker bundle
        
        '; 
        exec('composer require --dev symfony/maker-bundle');
    }

    public function sensio()
    {
        echo'
        
        Installation de la dépendance sensio
        
        '; 
        exec('composer require sensio/framework-extra-bundle');
    }

    public function debugBundle()
    {
        echo'
        
        Installation de la dépendance debug bundle
        
        '; 
        exec('composer require --dev symfony/debug-bundle');
    }

    public function profilerPack()
    {
        echo'
        
        Installation de la dépendance profiler pack
        
        ';
        exec('composer require --dev symfony/profiler-pack');
    }

    public function ormPack()
    {
        echo'
        
        Installation de la dépendance orm pack
        
        ';
        exec('composer require symfony/orm-pack');
    }
    
    public function fixtures()
    {
        echo'
        
        Installation de la dépendance fixtures
        
        ';
         exec('composer require --dev doctrine/doctrine-fixtures-bundle');
    }
}

$symf = new Symf;

$symf;
