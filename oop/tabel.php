<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 15.01.2018
 * Time: 12:23
 */

class tabel
{
    //klassi muutujad
    var $tabeliSisu = array();
    var $pealkirjad = array();
    var $veergudeArv;
    //klassi meetodid
    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }
    function lisaRida($rida) {
        if (count($rida) != $this->veergudeArv) {
            return false;
        }
        array_push($this->tabeliSisu, $rida);
        return true;
    }
    function prindiTabel() {
        echo '<pre>';
        foreach ($this->pealkirjad as $pealkiri) {
            echo '<b>'.$pealkiri.'</b>'.' ';
        }
        echo "\n";
        foreach ($this->tabeliSisu as $rida) {
            foreach ($rida as $reaElement) {
                echo $reaElement.' ';
            }
            echo "\n";
        }
        echo '</pre>');
    }

}