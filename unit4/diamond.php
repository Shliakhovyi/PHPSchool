<?php

$n = 6;
for ($i = 1; $i < $n; $i++) {
	for ($j = $i; $j < $n; $j++) {
		echo " ";
	}
	for ($j = 2 * $i - 1; $j > 0; $j--) {
		echo "*";
	}
	echo PHP_EOL;
}
for ($i = $n; $i > 0; $i--) {
	for ($j = $n - $i; $j > 0; $j--) {
		echo " ";
	}
	for ($j = 2 * $i - 1; $j > 0; $j--) {
		echo "*";
	}
	echo PHP_EOL;
}
