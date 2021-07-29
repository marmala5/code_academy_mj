<?php
// Prisiminkime 1-os pamokos užduotį, kuomet darėme funkciją, kuri konvertuoja lapsnius iš farenheito į celsijų. Papildykime užduotį:  Sukurkime naują php failą, kuris turės laukelį temperatūrai įvesti bei mygtuką, kurį paspaudus gauname konvertuotą temperatūrą.



function c2f($c){
	$f = ($c * 9 / 5) + 32;
	return round($f);
}


function f2c($f){
	$c = ($f - 32) * 5 / 9;
	return round($c);
}


$entry = $_POST['entry_value'];
$make_selection = $_POST['selection'];
$output = '';


if (isset($entry, $make_selection))
{
	if (is_numeric($entry))
	{
		if ($make_selection == 'celcius')
		{
			$output = c2f($entry);
		} 
		else if ($make_selection =='fahrenheit')
		{
			$output = f2c($entry);
		} 
		else $output =  'Make a selection';

	} 
	else {
		$output =  'Please enter valid value to entry field above';
	}
}


require_once ('cel2fah.phtml');
