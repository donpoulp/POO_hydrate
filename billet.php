<?php

class billet
{
    // private $id;
    // private $titre;
    // private $contenu;

    public function displayBillet()
    {
        echo $this->id, $this->titre, $this->contenu;
        echo '</br>';
    }
}