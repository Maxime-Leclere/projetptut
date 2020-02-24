<?php
namespace backend;

/*
* class qui modelise un tournoi dans la base de donnée
*/
class Tournoi {
    private $id;
    private $nom;
    private $dateDeb;
    private $dateFin;
    private $lieu;

    public function __construct($idT, $nom, $dateDeb, $dateFin, $lieu) {
        $this->id      = $idT;
        $this->nom     = $nom;
        $this->dateDeb = $dateDeb;
        $this->dateFin = $dateFin;
        $this->lieu    = $lieu;
    }

    /*
    * recupère tout les attributs d'un match
    */
    public function getAttr() {
        $r = array($this->id, $this->nom, $this->dateDeb, $this->dateFin, $this->lieu);
        return $r;
    }
}
