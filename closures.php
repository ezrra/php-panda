<?php

/**
 * Example closures
 * @param null
 * @return string
 */

$data = function () {
	echo "text";
};

$data();
echo PHP_EOL;


// Another example

/**
 * Math exanple by closures
 */

function math (Closure $type, $first, $second) {

	return $type($first, $second);
}

$addition = function ($first, $second) {

	return $first + $second;
};

$subtraction = function ($first, $second) {

	return $first - $second;
};

echo math($addition, 2, 3);
echo PHP_EOL;
echo math($subtraction, 10, 6);