<?php

class Symf
{
    public function __construct()
    {
        $this->messageStart();
        $this->installVendor();
        $this->apachePack();
        $this->doctrineAnnotations();
        $this->annotations();
        $this->twig();
        $this->twigExtreBundle();
        $this->twigStringExtra();
        $this->assets();
        $this->makerBundle();
        $this->debugBundle();
        $this->profilerPack();
        $this->ormPack();
        $this->fixtures();
        $this->form();
        $this->csrf();
        $this->validate();
        $this->translation();
        $this->security();
        $this->messageEnd();
        $this->serialise();
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
    
    
    public function annotations()
    {
        echo'
        
        Installation de la dépendance annotations
        
        ';
        exec('composer require annotations');
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
    
    public function form()
    {
        echo'
        
        Installation de la dépendance form
        
        ';
         exec('composer require symfony/form');
    }
    
    public function csrf()
    {
        echo'
        
        Installation de la dépendance csrf
        
        ';
        exec('composer require symfony/security-csrf');
    }
    
    public function validate() 
    {
                echo'
        
        Installation de la dépendance validate
        
        ';
        exec('composer require symfony/validator');
    }
    
    public function translation() 
    {
                echo'
        
        Installation de la dépendance translation
        
        ';
        exec('composer require symfony/translation');
    }
    
    public function security()
    {
        echo'
        
        Installation de la dépendance security
        
        ';
        exec('composer require symfony/security-bundle');
    }
    
        public function serialize()
    {
        echo'
        
        Installation de la dépendance serialize
        
        ';
        exec('composer require symfony/serializer');
    }
}

$symf = new Symf;

$symf;
