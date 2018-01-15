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

// paneme midagi sone muutujasse
$minuTekst ->sone = 'tere maailm';

// teostame testvaate objektist

echo '<pre>';
print_r($minuTekst);
echo '</pre>';