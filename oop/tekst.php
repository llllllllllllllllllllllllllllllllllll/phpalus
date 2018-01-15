<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 15.01.2018
 * Time: 8:51
 */

class tekst
{
    // klassi omadused
    // klassi muutujad
    var $sone = '';
    // klassi meetodid
    // klassi konstruktor
    /**
     * tekst constructor.
     */
    public function __construct($s = '')
    {
        $this->maaraTekst($s);
    }
    // teksti lisamine
    function maaraTekst($s) {
        $this->sone = $s;
    }
    // teksti väljastamine
    function prindiTekst() {
        echo $this->sone.'<br />';
    }
}