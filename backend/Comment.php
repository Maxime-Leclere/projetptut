<?php
namespace backend;

class Comment {
    protected $Num_C,
              $Auteur_C,
              $Contenu_C,
              $Date_creation,
              $Num_A;

    public function __construct($Num_C, $Auteur_C, $Contenu_C, $Date_creation,
              $Num_A) {

        $this->setNum_C($Num_C);
        $this->setAuteur_C($Auteur_C);
        $this->setContenu_C($Contenu_C);
        $this->setDate_creation($Date_creation);
        $this->setNum_A($Num_A);

    }

    public function getNum_C() {return $this->Num_C;}
    public function getAuteur_C() {return $this->Auteur_C;}
    public function getContenu_C() {return $this->Contenu_C;}
    public function getDate_creation() {return $this->Date_creation;}
    public function getNum_A() {return $this->Num_A;}

    public function setNum_C($Num_C) {
        if(is_numeric($Num_C) && !empty($Num_C))$this->Num_C = $Num_C;
    }

    public function setAuteur_C($Auteur_C) {
        if(is_string($Auteur_C) && !empty($Auteur_C))$this->Auteur_C = $Auteur_C;
    }

    public function setContenu_C($Contenu_C) {
        if(is_string($Contenu_C) && !empty($Contenu_C))$this->Contenu_C = $Contenu_C;
    }

    public function setDate_creation($Date_creation) {
        if(is_string($Date_creation) && !empty($Date_creation))
            $this->Date_creation = $Date_creation;
    }

    public function setNum_A($Num_A) {
        if(is_numeric($Num_A) && !empty($Num_A))$this->$Num_A = $Num_A;
    }

    public function show() {
        $r = '<div class="comment"><h3 class="comment_autor">'.$this->getAuteur_C().
        '</h3><p class="comment_text">'.$this->getDate_creation().'</p>';
        $r .= '<p class="comment_text">'.$this->getText_A().'</p></div>';
        return $r;
    }
}