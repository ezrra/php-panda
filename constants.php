<?php

$pi = 3.141659;

define('PI', 3.14159);
define('PI', '42');
echo $PI;

// Class constants

class Circle {

	/**
	 * The value of PI
	 *
	 * @return float
	 */

	private $pi = 3.14159265359;

	/**
	 * Calculate the circumference of a circle from diameter
	 *
	 * @param mixed $diameter
	 * @return mixed
	 */

	public function circumference($diameter) {
		
		$this->pi = 48;

		return $diameter  * $this->pi;
	}
}

$test = new Circle;

echo $circle->circumference(32);

// class constants improved

class Circle {

	const PI = 3.14159265359;

	public function circumference($diameter) {

    	return $diameter * self::PI;
    }
}

//echo Circle::PI;

$circle = new Circle;

echo $circle::PI;


