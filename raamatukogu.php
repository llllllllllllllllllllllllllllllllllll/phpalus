<?php
/**
 * Created by PhpStorm.
 * User: aleksander
 * Date: 8.01.2018
 * Time: 13:00
 */
require_once 'fnk.php';

$raamat = loeVormist();
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');