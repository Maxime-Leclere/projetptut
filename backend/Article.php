<?php
namespace backend;

class Article {
    private $Num_A,
            $Title_A,
            $Text_A,
            $Date_A,
            $Time_A,
            $Image_A;

    public function __construct($Num_A, $Title_A, $Text_A, $Date_A, $Time_A,
            $Image_A) {
        $this->setNum_A($Num_A);
        $this->setTitle_A($Title_A);
        $this->setText_A($Text_A);
        $this->setDate_A($Date_A);
        $this->setTime_A($Time_A);
        $this->setImage_A($Image_A);
    }

    public function getNum_A() {return $this->Num_A;}
    public function getTitle_A() {return $this->Title_A;}
    public function getText_A() {return $this->Text_A;}
    public function getDate_A() {return $this->Date_A;}
    public function getTime_A() {return $this->Time_A;}
    public function getImage_A() {return $this->Image_A;}

    public function setNum_A($Num_A) {
        if(is_numeric($Num_A) && !empty($Num_A))$this->Num_A = $Num_A;
    }

    public function setTitle_A($Title_A) {
        if(is_string($Title_A) && !empty($Title_A))$this->Title_A = $Title_A;
    }

    public function setText_A($Text_A) {
        if(is_string($Text_A) && !empty($Text_A))$this->Text_A = $Text_A;
    }

    public function setDate_A($Date_A) {
        if(is_string($Date_A) && !empty($Date_A))$this->Date_A = $Date_A;
    }

    public function setTime_A($Time_A) {
        if(is_string($Time_A) && !empty($Time_A))$this->Time_A = $Time_A;
    }

    public function setImage_A($Image_A) {
        if(is_string($Image_A) && !empty($Image_A))$this->Image_A = $Image_A;
    }

    public function show() {
        $r = '<h3 class="article_title">'.$this->getTitle_A().
        '</h3><p class="article_text">'.$this->getDate_A().' '.$this->getTime_A().'</p>';
        if ($this->getImage_A() != "")$r .= '<img class="article_image" src="'.$this->getImage_A().'">';
        if ($this->getText_A() != "")$r .= '<p class="article_text">'.$this->getText_A().'</p>';
        return $r;
    }
}
