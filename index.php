<!doctype html>
<html>
<head>
    <title>php</title>
</head>
<body>
<?php
    $eesNimi = 'Aleksander';
    echo '<h1>Tere!</h1>';
    echo 'Minu name on '. $eesNimi .'.<br/>';
    $var1 = 5;
    $var2 = 5.0;
    $var3 = '5';
    $var4 = 2;

echo '$var1 = '.$var1.' - '.gettype($var1).'<br/>';
echo '$var2 = '.$var2.' - '.gettype($var2).'<br/>';
echo '$var3 = '.$var3.' - '.gettype($var3).'<br/>';
echo '$var4 = '.$var4.' - '.gettype($var4).'<br/>';

function vordlus($toevaartus) {
    if($toevaartus == true){
        echo ' true ';
    } else {
        echo ' false ';
    }
}
echo $var1.' = '.$var2.vordlus($var1 == $var2).'<br/>';
echo $var1.' = '.$var3.vordlus($var1 == $var3).'<br/>';
echo $var1.' = '.$var3.vordlus($var1 === $var3).'<br/>';
echo $var1.' != '.$var4.vordlus($var1 !== $var4).'<br/>';
// Mõned matemaatilised operaatorid:
$a = 2;$b = 5;
$c = $a++;$d = $b--;
echo 'a = '.$a.' c = '.$c.'<br/>';
echo 'b = '.$b.' d = '.$d.'<br/>';
//loome paar konstanti
//define() funktsiooniga
define('aine_nimetus', 'php alused');
define('number', 1);
echo '<hr>';
//trükime välja
echo 'Aine nimetus:'.aine_nimetus.'<br>';
echo 'Konstantne number: '.number.'<br>';
?>
</body>
</html>