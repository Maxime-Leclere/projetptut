<?php
namespace backend;

use DateInterval;
use DateTime;
use Exception;

class Date {
    var $days   = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    var $months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
        'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

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
        if (isset($d)) {
            $reqM = $DB->query('SELECT Num_M, Date_M, Heure, Club_Adversaire, Lieu
                                         FROM MATCHS WHERE Num_T='.$d->Num_T);
            while($d2 = $reqM->fetch(\PDO::FETCH_OBJ)) {
                $r[strtotime($d2->Date_M)][$d2->Num_M] = 'Match à '.$d2->Heure.
                    ' contre '. $d2->Club_Adversaire.' à '.$d2->Lieu;
            }
        }

        return $r;
    }

    public function getAll($year) {
        $tab = array();
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
            $tab[$y][$m][$d] = $w;
            $date->add(new DateInterval('P1D'));
        }
        return $tab;
    }
}