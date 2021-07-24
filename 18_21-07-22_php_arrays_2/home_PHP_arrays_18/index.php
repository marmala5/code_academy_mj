<?php
// Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.
function myRandom ($arr){
	$first = array_shift($arr);
	$last = array_pop($arr);
	shuffle($arr);
	array_unshift($arr, $first);
	$arr [] = $last;
	return $arr;
}
$myArr = ['a', 'b', 'c', 'd', 'e', 'f'];
// var_dump(myRandom($myArr));


	
// Sukurkite masyvą $vartotojas su laukais - vardas, pavardė, amžius, paštas.(Užuomina. Asociatyvus masyvas )
	
$user = [
	'name' => 'Vardenis',
	'surname' => 'Pavardenis',
	'age' => 17,
	'email' => 'email@google.com'
];
// var_dump($user);



// Sukurkite funkciją yraPilnametis, kuri priimtų vieną parametrą - $vartotojas(masyvas iš praeitos užduoties) ir GRAŽINTU tekstą su statusu: nepilnametis, pilnametis, pensininkas.

function myAgeCheck ($user){
	if ($user['age'] < 18){
		return 'nepilnametis';
	} else if ($user['age'] >= 18 && $user['age'] < 70){
		return 'pilanemtis';
	} else{
		return "pensininkas";
	}
}

// var_dump(myAgeCheck($user));