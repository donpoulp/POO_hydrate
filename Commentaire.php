<?php

class Commentaire
{
    private $id;
    private $id_billet;
    private $auteur;
    private $commentaire;
    private $date_commentaire;

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            // On fabrique le nom du setter correspondant à l'attribut :
            $setter = 'set'.ucfirst($key);
            // Si le setter correspondant existe :
            if (method_exists($this, $setter)) {
                // On appelle le setter = $setter contient son nom !!!
                $this->$setter($value);
            }
        }
    }
    // public function displayCom()
    // {
    //     echo $this->id, $this->id_billet, $this->auteur, $this->commentaire, $this->date_commentaire;
    //     echo '</br>';
    // }
}