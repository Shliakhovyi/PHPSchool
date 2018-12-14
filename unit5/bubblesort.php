<?php

function bubbleSort(array $arr) {
	$n = count($arr);
	for ($i = 1; $i <= $n-1; $i++) {
		for ($j = $n-1; $j >= $i; $j--) {
			if ($arr[$j] < $arr[$j-1]) {
				$tmp = $arr[$j-1];
				$arr[$j-1] = $arr[$j];
				$arr[$j] = $tmp;
			}
		}
	}
	return $arr;
}

$arr = array(1,3,2,8,5,6,7,4,0);
var_dump(bubblesort($arr));
