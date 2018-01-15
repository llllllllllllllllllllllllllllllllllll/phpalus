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

//väljastame tabeli testkujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';