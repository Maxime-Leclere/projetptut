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
            $y = date('Y', intval($date));
            $m = date('n', intval($date));
            $d = date('j', intval($date));
            $w = str_replace('0', '7', date('w', intval($date)));
            $tab[$y][$m][$d] = $w;
            $date->add(new DateInterval('P1Y'));
        }
        return $tab;
    }
}