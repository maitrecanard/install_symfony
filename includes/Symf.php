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