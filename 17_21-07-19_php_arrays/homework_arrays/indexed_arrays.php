<?php


// Mayvai



//     Sukurti skirtingų skaičių masyvą. Sekančias užduotis atlikti su naujomis masyvo kopijomis.   

$arr = [2, 0, -3, -7, 5, 10, 12.5];
var_dump ($arr);

//         Padauginti esamo masyvo narius iš 2

foreach ($arr as &$value) {

// $new_arr[] = 
	$value *= 2;

}
var_dump($arr);
unset($value);


//         Pakelti masyvo narius kvadratu

for ($i=0; $i < count($arr); $i++) { 
	$arr[$i] **= 2;
}
var_dump($arr);

//         Padauginti masyvo narius iš jų index'o

foreach ($arr as $key => &$value) {
	$value = $value * $key;
}
var_dump($arr);
unset($value);


//         Atrinkti tiktai teigimų elementų masyvą
$positive = array_filter($arr, function($num){
	return $num > 0;
});
var_dump($positive);

foreach ($arr as $value) {
	if ($value >0) {
		$new_array [] += $value;
	}
}
var_dump($new_array);

//         Atrinkti tiktai neigiamų elementų masyvą
$negative = array_filter($arr, function($num){
	return $num < 0;
});
var_dump($negative);
//         Atrinkti tiktai lyginių skaičių masyvą

$oddNum = array_filter($arr, function ($num){
	return $num % 2 === 1;
});
var_dump($oddNum);

//         Atrinkti tiktai nelyginių skaičių masyvą   

$evenNum = array_filter($arr, function ($num){
	return $num % 2 === 0;
});
var_dump($evenNum);



