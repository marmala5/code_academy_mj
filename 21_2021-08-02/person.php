<?php


class Person {
	public $name;
	public $surname;
	public $age;
	public $height;


	function __construct($firstName, $secondName, $howOld, $howTall) {
		$this->name = $firstName;
		$this->surname = $secondName;
		$this->age = $howOld;
		$this->height = $howTall;

	}
}

