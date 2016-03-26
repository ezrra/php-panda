<?php

class Panda {

	var $coat = "flufly";
	var $colour;

	function getCoat () {

		return $this->coat;
	}

	function getColout () {

		return $this->colour;
	}
}

class GiantPanda extends Panda {

	var $coat = "less fluffy";
}

$giantPanda = new GiantPanda;

echo $giantPanda->getCoat();

echo PHP_EOL;

// Type hinting classes

class Sephiroth {

	function equiWeapon(Weapon $weapon) {

		echo 'Die cloud die!';
	}

}

class Weapon  {

}

class Masamune extends Weapon {

}

class Murasame extends Weapon {

}

$sephiroth = new Sephiroth;

$masamune = new Masamune;

$murasame = new Murasame;

$sephiroth->equiWeapon($masamune);

echo PHP_EOL;

$sephiroth->equiWeapon($murasame);

