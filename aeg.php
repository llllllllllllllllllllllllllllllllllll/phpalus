<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 8.01.2018
 * Time: 14:51
 */
date_default_timezone_set('Europe/Helsinki');
echo time().'<br />';
echo mktime(14, 56, 00, 1, 09, 2018).'<br />';
$tana = date("H:i");
echo $tana.'<br />';

/*
 * Koosta skript, mis väljastab vormi, mille kaudu
 * kasutajal on võimalik sisestada oma sünnikuupäev
 * Arvuta nuppu vajutamisega kasutajale antakse
 * teada, mitu kuud, päeva, tundi ja minutid on
 * jäänud antud tähtsa sündmuseni.
 *
 * Lahendus peab olema funktsionaalne - eraldi osad
 * realiseerida funtksioonidega,
 * võimalusel andmete salvestamiseks kasuta sobilik
 * andmetüüp - näiteks massiivid, sõned jne
 * */

echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
        
    </form><hr>';


