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
function sisestaAndmed(){
    echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
    echo 'Päev: <input type="text" name="paev"><br />';
    echo 'Kuu: <input type="text" name="kuu"><br />';
    echo '<input type="submit" value="Arvuta!">';
    echo '</form>';
}
function aastaKontroll($paev, $kuu){
    $hetkeKuu = date('n');
    $hetkePaev = date('d');
    if($paev < $hetkePaev and $kuu == $hetkeKuu){
        $aasta = date('Y')+1;
    } else{
        $aasta = date('Y');
    }
    return $aasta;
}
sisestaAndmed();
echo aastaKontroll($_POST['paev'], $_POST['kuu']);
