<?php 

// Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.

$num = 5;
$str = "a";
$emp = NULL;

var_dump($num, $str, $emp);



// Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.

$str = "Parašykite skriptą, kuris išspausd";
var_dump(substr($str, -3));

// Sukurkite funkciją negative, kuri priimtų vieną argumentą "$skaicius" ir išvestų į ekraną atitinkamą neigiamą skaičių. (Įvedame 3, išveda -3)

function negative($number){
	if (is_numeric($number)) {
		return $number * -1;
	}
}
var_dump(negative('a'));

// Sukurkite funkciją kauliukas, kuri imituotų kauliuko metimą. (Į ekraną atspaudintų atsitiktinį skaičių nuo 1 iki 6); Užuomina: rand();
$roll = rand(1,6);
var_dump($roll);

// Parašykite funkciją pusePloto, kuri priimtų 2 argumentus ir išvestų į ekraną pusę abiejų skaičių sandaugą.

function S($w, $l){
	if (is_numeric($w) && is_numeric($l)){
		return $w * $l / 2;
	}
	else{
		return "Value must be numberic";
	}
}
var_dump (S('a', 'b'));

// Sukurkite funkciją 'arEsiDarJaunas', kuri priimtų vieną argumentą amžius ir į ekraną išvestų pranešimą, kiek metų trūksta iki 100. (Pvž.: "Iki šimto jūms trūksta 70 metų! Dar gyventi liko daug!")


// ????Kodel sis kodas veikia puikiai naudojant https://sandbox.onlinephpfunctions.com/ , taciau veikia kitaip per localhost:
// ?????????????????????????????????????????????
// function left_to_100yo ($age){
// 	if ($age < 80){
// 		return "Iki šimto jūms trūksta ". 100 - $age. " metu. Dar gyventi liko daug!";
// 	}
// 	else{
// 		return "Iki šimto jūms trūksta ". 100 - $age. " metu. Greit bus galas!";
// 	}
// }
// var_dump (left_to_100yo(40));
// ?????????????????????????????????????????????

// isivedus $reminder = 100 - $age; kaip kintamaji, viskas veikia puikiai.

function left_to_100yo ($age){
	$reminder = 100 - $age;
	if ($age < 80){
		return "Iki šimto jūms trūksta ". $reminder. " metu. Dar gyventi liko daug!";
	}
	else{
		return "Iki šimto jūms trūksta ". $reminder. " metu. Greit bus galas!";
	}
}
var_dump (left_to_100yo(40));

// Sukurkite funkciją, kuri priimtų argumentą farenheitas ir laipsnius iš farenheito konvertuotų į celsijų.

function F_to_C($f){
	
	return number_format((float)($f - 32) * 5/9, 2, '.', '');
}
var_dump(F_to_C(34));


