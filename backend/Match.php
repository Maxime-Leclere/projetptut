<?php
namespace backend;

/*
* class qui modelise un match dans la base de donnée
*/
class Match {
    private $id;
    private $dateM;
    private $hour;
    private $clubAdv;
    private $lieu;
    private $idT;

    public function __construct($idM, $dateM, $hour, $clubAdv, $lieu, $idT) {
        $this->id      = $idM;
        $this->dateM   = $dateM;
        $this->hour    = $hour;
        $this->clubAdv = $clubAdv;
        $this->lieu    = $lieu;
        $this->idT     = $idT;
    }

    /*
    * recupère tout les attributs d'un match
    */
    public function getAttr() {
        $r = array($this->id, $this->dateM, $this->hour, $this->clubAdv,
            $this->lieu, $this->idT);
        return $r;
    }
}
