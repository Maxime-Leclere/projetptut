<?php
namespace backend;

use DateInterval;
use DateTime;
use Exception;

class Date {
    var $days   = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    var $months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
        'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

    public function getArticles($year) {
        global $DB;
        $r = array();
        $req = $DB->query('SELECT * FROM `ARTICLES` WHERE YEAR(Date_A)='.$year.' 
                        ORDER BY Date_A DESC, Time_A DESC');
        $i = 0;
        while ($d = $req->fetch(\PDO::FETCH_OBJ)) {
            $r[$i] = '<h1>'.$d->Title_A.'</h1><p>'.$d->Date_A.' '.
            $d->Time_A.'</p>';
            if ($d->Image_A != "")$r[$i] .= '<img class="article_image" src="'.$d->Image_A.'">';
            if ($d->Text_A != "")$r[$i] .= '<p>'.$d->Text_A.'</p>';
            ++$i;
        }
        return $r;
    }

    public function getEvents($year) {
        global $DB;
        $r = array();
        $req = $DB->query('SELECT Num_T, Nom_T, Date_deb, Date_fin, Lieu 
                                    FROM TOURNOI WHERE YEAR(Date_deb) ='.$year);
        while ($d = $req->fetch(\PDO::FETCH_OBJ)) {
            $r[strtotime($d->Date_deb)][$d->Num_T] = 'Debut du '.$d->Nom_T. ' à '.
                $d->Lieu;
            $r[strtotime($d->Date_fin)][$d->Num_T] = 'Fin du '.$d->Nom_T. ' à '.
                $d->Lieu;
        }
        $reqM = $DB->query('SELECT Num_M, Date_M, Heure, 
        Club_Adversaire, M.Lieu FROM MATCHS M, TOURNOI T WHERE M.Num_T = T.Num_T 
        AND YEAR(Date_M) = '.$year);
        while($d2 = $reqM->fetch(\PDO::FETCH_OBJ)) {
            $r[strtotime($d2->Date_M)][$d2->Num_M] = 'Match à '.$d2->Heure.
                ' contre '. $d2->Club_Adversaire.' à '.$d2->Lieu;
        }
        return $r;
    }
    public function getHomeEvents($year) {
        global $DB;
        $r = array();
        $m      = \date('m');
        $d      = \date('d');
        $hour   = \date('H');
        $min    = \date('i');
        $sec    = \date('s');

        $dateCurrent = strtotime("$year-$m-$d");
        $timeCurrent =strtotime("$hour:$min:$sec");
        $req = $DB->query('SELECT Num_T, Nom_T, Date_deb, Date_fin, Lieu 
                                    FROM TOURNOI WHERE Lieu="Aix-en-Provence" AND YEAR(Date_deb) ='.$year);
        $i = 0;
        while ($d = $req->fetch(\PDO::FETCH_OBJ)) {
            $r[$i] = '<h3>Debut du '.$d->Nom_T.'</h3><p>'.$d->Date_deb.'</p>';
            ++$i;
            $r[$i] = '<h3>Fin du '.$d->Nom_T.'</h3><p>'.$d->Date_fin.'</p>';
            ++$i;
        }
        $reqM = $DB->query("SELECT M.Num_M, Date_M, Heure, Club_Adversaire, M.Lieu, 
        Nom_Equipe FROM MATCHS M, EQUIPE E, Jouer J WHERE M.Num_M = J.Num_M AND 
        J.Num_Equipe = E.Num_Equipe AND M.Lieu='Aix-en-Provence' AND Date_M >= $dateCurrent AND Heure >= '".$timeCurrent.
            "' ORDER BY Date_M DESC, Heure DESC");
        while($d2 = $reqM->fetch(\PDO::FETCH_OBJ)) {
            $r[$i] = '<h3>'.$d2->Lieu.' contre '. $d2->Club_Adversaire.'</h3><p>'.$d2->Date_M.
                ' '.$d2->Heure.'</p>';
            ++$i;
        }
        return $r;
    }

    public function getAll($year) {
        $r = array();
        try {
            $date = new DateTime($year . '-01-01');
        } catch (Exception $e) {
            echo 'error initialisize DateTime';
        }
        while ($date->format('Y') <= $year) {
            $y = $date->format('Y');
            $m = $date->format('n');
            $d = $date->format('j');
            $w = str_replace('0', '7', $date->format('w'));
            $r[$y][$m][$d] = $w;
            $date->add(new DateInterval('P1D'));
        }
        return $r;
    }
}