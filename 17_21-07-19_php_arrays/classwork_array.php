<?php

// Parašykite funkciją, kuri priimtų 1 argumentą - masyvą skaičių ir grąžintu pirmo ir paskutinio elementų sumos šąknį.


	
// Parašykite funckciją, kuri priimtų 1 argumentą - masyvą iš 5 skaičių ir grąžintu visų masyvo elementų aritmetinį vidurkį.

$arr = [2, 4, 6, 8, 10];
$arr = array_filter($arr);
$average = array_sum($arr)/count($arr);
var_dump ($average);
	
//  Parašykite funkciją, kurį priimtų 1 argumentą - string`ų masyvą bei parinktų antrą bei priešpaskutinį elementą.


$arr = array("a", "b", "c", "d");
$new_array = [$arr[1], $arr[count($arr)-2]];
var_dump($new_array);

	
//  Parašykite funkciją, kuri priimtų 1 argumentą - masyvą ir jame sukeistu vietomis pirmą ir paskutinį masyvo elementus.
// ?????????????????
$items = array(
  0 => 'contact',
  1 => 'home',
  2 => 'projects'
);

array_swap($items,0,1);
var_dump($items);

	
// Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.