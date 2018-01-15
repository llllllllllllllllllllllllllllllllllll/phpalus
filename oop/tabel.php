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


}