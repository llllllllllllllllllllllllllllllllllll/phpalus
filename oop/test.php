<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 15.01.2018
 * Time: 8:57
 */

require_once 'tekst.php';

// loome reaalse objekti tekst klassi abil

$minuTekst = new tekst();

// teksti lisamine meetodi abil
$minuTekst->maaraTekst('tere maailm');
// teostame testvaate objektist

echo '<pre>';
print_r($minuTekst);
echo '</pre>';