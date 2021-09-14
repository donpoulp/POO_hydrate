<?php

class BlogManager extends billet
{
    private function setId($donnees){
        $this->id = $donnees;
    }
    private function setTitre($donnees){
        $this->titre = $donnees;
    }
    private function setContenu($donnees){
        $this->contenu = $donnees;
    }

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
        // if (isset($donnees['id'])) $this->setId($donnees['id']); 
        // if (isset($donnees['Titre'])) $this->setTitre($donnees['Titre']); 
        // if (isset($donnees['contenu'])) $this->setContenu($donnees['contenu']); 
    }
}