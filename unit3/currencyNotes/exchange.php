<?php

$amount = $argv[1];

function calculation ($amount, $note) {
	if($amount >= $note) {
        	$division = $amount / $note;
        	$banknote = (int) $division;
        	$amount -= $banknote*$note;
        	var_dump($note . ': ' . $banknote);
	}
	return $amount;
}

calculation(calculation(calculation(calculation(calculation(calculation(calculation(calculation(calculation($amount,500),200),100),50),20),10),5),2),1);
/*$amount = calculation($amount, 500);
$amount = calculation($amount, 200);
$amount = calculation($amount, 100);
$amount = calculation($amount, 50);
$amount = calculation($amount, 20);
$amount = calculation($amount, 10);
$amount = calculation($amount, 5);
$amount = calculation($amount, 2);
$amount = calculation($amount, 1);*/
