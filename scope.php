<?php

class Panda {

	private $coat = "flyffy";

	private function getCoat () {

		return $this->coat;
	}

	public function noReallyGetCoat () {

		return $this->getCoat();
	}
}

$panda = new Panda;

// $panda->coat;

// $panda->coat = "slimey";

// echo $panda->getCoat();

echo $panda->noReallyGetCoat();
