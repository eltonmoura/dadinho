<?php
include('./autoloader.php');

/*
$cup = new Cup();
print_r($cup->value());

$cup->removeDice();
#$cup->shake();
print_r($cup->value());

*/

$bagos = 1;
$bide1 = new Model\Bid(2, 3);
$bide2 = new Model\Bid(2, 3);

$value = $bide2->greaterThan($bide1, $bagos);

var_dump($value);
