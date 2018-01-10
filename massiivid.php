<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 20.12.2017
 * Time: 12:02
 */
$arvud = array(1,2,5,4,3);

echo '<pre>';
print_r($arvud);
echo '</pre>';

$arvud[] = 6;

echo '<pre>';
print_r($arvud);
echo '</pre>';

$arvud[0] = 7;

echo '<pre>';
print_r($arvud);
echo '</pre>';

?>