<?php

// Parašykite funkciją, kuri priimtų 1 argumentą - masyvą skaičių ir grąžintu pirmo ir paskutinio elementų sumos šąknį.

function powFirstLast($arr)
{
	$first = (float) array_shift($arr);
	$last  = (float) array_pop($arr);

	$sum = $first + $last;

	$_sqrt = sqrt($sum);

	return $_sqrt;
}

$arr = [5, 2, 3, 4];


// var_dump(powFirstLast($arr));

	
// Parašykite funckciją, kuri priimtų 1 argumentą - masyvą iš 5 skaičių ir grąžintu visų masyvo elementų aritmetinį vidurkį.

function myAverageFunction($arr){
	return array_sum($arr) / count($arr);
}

// var_dump(myAverageFunction($arr));

	
//  Parašykite funkciją, kurį priimtų 1 argumentą - string`ų masyvą bei parinktų antrą bei priešpaskutinį elementą.

$myArr = ['a', 'b', 'c', 'd', 'e', 'f'];
function myFunction_2elem ($arr){
	$f_2 = $arr[1];
	$l2nd =$arr[count($arr)-2];
	return [$f_2, $l2nd];
}


// var_dump(myFunction_2elem($myArr));





	
//  Parašykite funkciją, kuri priimtų 1 argumentą - masyvą ir jame sukeistu vietomis pirmą ir paskutinį masyvo elementus.

function myMix ($arr){
	$first = array_shift($arr);
	$last = array_pop($arr);
	array_unshift($arr, $last);
	$arr [] = $first;
	return $arr;
}

// var_dump(myMix($myArr));

	
// Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.


function myRandom ($arr){
	$first = array_shift($arr);
	$last = array_pop($arr);
	shuffle($arr);
	array_unshift($arr, $first);
	$arr [] = $last;
	return $arr;
}

var_dump(myRandom($myArr));


