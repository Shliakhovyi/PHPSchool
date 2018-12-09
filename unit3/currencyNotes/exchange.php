<?php

$amount = $argv[1];

if($amount >= 500) {
	$division = $amount / 500;
	$banknote500 = (int) $division;
	$amount -= $banknote500*500;
	var_dump("500: " . $banknote500);
}
if($amount >= 200) {
	$division = $amount / 200;
	$banknote200 = (int) $division;
	$amount -= $banknote200*200;
	var_dump("200: " . $banknote200);
}
if($amount >= 100) {
        $division = $amount / 100;
        $banknote100 = (int) $division;
        $amount -= $banknote100*100;
        var_dump("100: " . $banknote100);
}
if($amount >= 50) {
        $division = $amount / 50;
        $banknote50 = (int) $division;
        $amount -= $banknote50*50;
        var_dump("50: " . $banknote50);
}
if($amount >= 20) {
        $division = $amount / 20;
        $banknote20 = (int) $division;
        $amount -= $banknote20*20;
        var_dump("20: " . $banknote20);
}
if($amount >= 10) {
        $division = $amount / 10;
        $banknote10 = (int) $division;
        $amount -= $banknote10*10;
        var_dump("10: " . $banknote10);
}
if($amount >= 5) {
        $division = $amount / 5;
        $banknote5 = (int) $division;
        $amount -= $banknote5*5;
        var_dump("5: " . $banknote5);
}
if($amount >= 2) {
        $division = $amount / 2;
        $banknote2 = (int) $division;
        $amount -= $banknote2*2;
        var_dump("2: " . $banknote2);
}
if($amount >= 1) {
        var_dump("1: " . $amount);
}






