<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 15.01.2018
 * Time: 12:32
 */
require_once 'tabel.php';
//loome tabeli kirjelduse järgi tabeli objekti
$minuTabel = new tabel(array('a','b','c'));
//lisame tabeli read
$minuTabel->lisaRida(array(1,2,3));
$minuTabel->lisaRida(array(5,6,7));
$minuTabel->lisaReaKirjeldusega(array('a'=>8, 'c'=>9, 'b'=>7));
//väljastame tabeli testkujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';

$tabelTekstina = '
1 2 3
4 5 6
7 8 9
';

echo '<pre>';
print_r($tabelTekstina);
echo '</pre>';

echo '<pre>';
$minuTabel->prindiTabel();
echo '</pre>';