<?php

abstract class Animal {

	/**
	 * Is the animal awesome (all are)
	 *
	 * @var boolean
	 */

	private $awesome = true;

	/**
	 * Access the awesome attribute
	 * 
	 * @return boolean
	 */

	public function isAwesome () {

		return $this->awesome;
	}

	abstract public function makeNoise ();
}

// $animal = new Animal; //error

class Dog extends Animal {

	public function makeNoise() {

		echo 'Woof';
	}

}

$dog = new Dog;

$dog->makeNoise();

// Another example

abstract class Fruit {

	private $colour;

	abstract public function eat();
	
}

class Orangle extends Fruit {

	public function eat () {

		return 'eat orangle';
	}
}

class Banana extends Fruit {

	public function eat () {

		return 'eat banana';
	}
}

$orangle = new Orangle;

$orangle->eat();

$fruit = new Fruit;

$fruit->eat();

