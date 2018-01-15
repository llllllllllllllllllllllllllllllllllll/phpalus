<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 15.01.2018
 * Time: 8:57
 */

require_once 'tekst.php';

// loome reaalse objekti tekst klassi abil
$minuTekst = new tekst('tere maailm');

// teostame testvaate objektist

echo '<pre>';
print_r($minuTekst);
echo '</pre>';

// väljastame teksti sone väärtuse
$minuTekst->prindiTekst();