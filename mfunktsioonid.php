<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 20.12.2017
 * Time: 12:23
 */
$arvud = array(1, 5, 2 , 4, 3);
var_dump($arvud);
echo '<hr />';
echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<hr />';
for($i = 0; $i < count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br />';
}
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
$arvud[] = 6;
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
$arvud[0] = 7;
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
echo '<hr />';
echo '<h3>Ülesanded</h3>';
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
/*
function looMassiiv($i) {
    $massiiv = array();
    for ( $i ; $i >= 0; ($i-1)) {
        $massiiv[$i] = rand(100, 999);
    }
    print_r ($massiiv);
    return $massiiv;
}
looMassiiv(10);*/
function looMassiiv($elementideArv){
    $massiiv = array();
    for($i = 0; $i < $elementideArv; $i++){
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
$arvud = looMassiiv(10);
echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<hr />';
 /*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
/*
function valjastaMassiiv($ul2) {

    echo '<table border="1">';
    foreach ($ul2 as $k){
        echo '<tr><td>'.$k.'</td></tr>';
    }
    echo '</table>';
}

valjastaMassiiv(array(5,8,5,9,5));
*/
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    foreach ($massiiv as $element){
        echo '<tr><td>';
        echo $element;
        echo '</td></tr>';
    }
    echo '</table>';
}
valjastaMassiiv($arvud);
echo '<hr />';
/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/
/*
function vahetaMinMax(&$massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    for($i = 0;$i < count($massiiv);$i++) {
        if ($massiiv[$i] == $min) {
            $massiiv = $max;
        } else if ($massiiv[$i] == $max) {
            $massiiv=$min;
        }
    }
    return $massiiv;
}
vahetaMinMax($massiiv);

echo'<pre>';
print_r($massiiv);
echo'</pre>';
*/
function vahetaMinMax(&$massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    echo 'min = '.$min.'<br />';
    echo 'max = '.$max.'<br />';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min){
            $massiiv[$i] = $max;
        }
        else if($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
    }
}
vahetaMinMax($arvud);
valjastaMassiiv($arvud);
echo '<hr />';

/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud. Tulemus väljastatakse
 * antud funktsiooni abil kujul:
 *
 * Massiiv on 1, 0, 6, 0, 0, 3, 5
 * Tulemus: 1 * 6 * 5 = 30
*/
function elementideKorrutis($massiiv){
    $korrutis = 1;
    $kord = 0;
    echo 'Tulemus: ';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] > 0 and $i % 2 == 0){
            if($kord == 0){
                echo $massiiv[$i];
                $kord = 1;
            } else {
                echo ' * '.$massiiv[$i];
            }
            $korrutis = $korrutis * $massiiv[$i];
        }
    }
    echo ' = '.$korrutis.'<br />';
}
elementideKorrutis(array(1, 0, 6, 0, 0, 3, 5));
/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */
function mitteDubleeri($massiiv){
    $valjasta = '';
    foreach($massiiv as $element){
        if($valjasta != $element){
            $valjasta = $element;
            echo $element.'&nbsp;';
        }
    }
}
mitteDubleeri(array(1, 1, 1, 2, 2, 2, 2, 3));
echo '<hr />';
echo '<br />';