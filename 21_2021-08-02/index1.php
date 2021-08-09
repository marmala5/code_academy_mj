<?php 

require_once('person.php');

// $person1 = [
// 'name' => 'Vardenis',
// 'surname' => 'Pavardenis',
// 'age' => 18,
// 'height' => 1.8
// ];

$person = new Person('name', 'surname', 'age', 'height');

var_dump($person);