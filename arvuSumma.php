<!doctype html>
<html>
<head>
    <title>arvuSumma</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 18.12.2017
 * Time: 12:05
 */

/*
 * Koostada funktsioon arvuSumma
 * parameeter suvaline arv
 * funktsioon arvutab arvu numbrite summa
 * nt parameeter 123 -> 1+2+3=6
 */
/*
function arvuSumma($arv) {
    $summa = 0;
    while ($number != 0) {
        $number = $arv % 10;
        $summa = $summa + $arv;
        $arv = $arv / 10;
        $number = settype($arv, 'integer');
    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++) {
    $number = rand(0, 1000);
    echo $arv.' numbrite summa on '.$summa;
}
*/
/* funtsioon otsiNumber,
parameetrid on suvaline arv ja etteantud arv
leiab mitu korda esineb etteantud arv suvalises arvus
nt suvalises arvus 1980730491650983140298375019835 esineb arv 5 kolm korda
*/

function otsiNumber($suvaline, $kindelArv) {
    echo $kindelArv.' esineb arvus '.$suvaline.' korda.<br>';
    $mituKorda = 0;
    $kindelArv=5;
    while ($suvaline != 0) {
    $arv = $suvaline % 10;
    if ($arv == $kindelArv) {
        $mituKorda ++;
    }
    $suvaline + $suvaline / 10;
    settype($suvalineArv,'integer');
    }
}
otsiNumber(71348716,3);
otsiNumber(71348716,7);
?>

</body>
</html>