<?php

//  »Sukurti klasę Person, kuri turėtų atributus vardas, pavarde, amzius ir sukurti tris skirtingus tos klasės objektus. .(objektiškai)

class Person {
	public $name;
	public $surname;
	public $age;


	function __construct($name, $surname, $age) {
		$this->name = $name;
		$this->surname = $surname;
		$this->age = $age;

	}


}

	