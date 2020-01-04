<?php
namespace backend;

use DateInterval;
use DateTime;
use Exception;

class Date {
    var $days   = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    var $months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
        'Juillet', 'Août', 'Septembre', 'Octobre', 'Décembre', '');
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
//            $date->add(new DateInterval('P1D'));
            date_add($date, date_interval_create_from_date_string('01 days'));
        }
//        $date = strtotime($year.'-01-01');
//        while ($date->format('Y') <= $year) {
//            $y = date('', $date);
//            $m = date('', $date);
//            $d = date('', $date);
//            $w = date('', $date);
//        }
        return $tab;
    }
}