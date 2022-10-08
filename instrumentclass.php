<?php
// Repr�sente un animal
class instrument
    {

        private $Id;
        private $nom;
        private $couleur;
        private $son;

    public function Instru($sonId, $sonNom, $saCouleur, $sonSon)
    {
        $this->Id=$sonId;
        $this->nom=$sonNom;
        $this->couleur=$saCouleur;
        $this->son=$sonSon;
    }


    public function getId() {
        return $this->id;
    }

    public function getSon() {
        return $this->son;
    }

    public function getNom() {
        return $this->nom;
    }
    
    public function getCouleur() {
        return $this->couleur;
    }
        
    public function setId($value) {
        $this->id = $value;
    }

    public function setCouleur($value) {
        $this->Couleur = $value;
    }

    public function setNom($value) {
        $this->nom = $value;
    }

    public function setSon($value) {
        $this->son = $value;
    }


// M�thodes
 
    }
?>
