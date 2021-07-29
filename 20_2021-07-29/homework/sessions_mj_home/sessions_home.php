<?php

// Sukurkime skaičiuotuvą. (sesijos)
// Skaičiuotuvas turi turėti sudėtį, atimtį, daugybą, dalybą ir pakelimą kvadratu.
	
// Front-end‘as(HTML kodas) ir Back-end‘as(PHP skriptas) turi būti atskiruose failuose
	
// Visi ankstesni rezultatai turi matytis.
	
// Atnaujinus(refreshin‘us) naršyklės langą, atsakymai išlieka.

session_save_path(); //ar sitas yra butinas?

session_start();
//nesugebejau pajungti sesiju - nespejau issiaiskinti.
//Validacijos taip pat nera geros, bet ja suprantu kaip daryti  - tiesiog labai daug laiko skyriau sesijoms ir cookies. Reiketu daugiau pavyzdziu.



$input1 = $_POST['input_1'];
$input2 = $_POST['input_2'];

$click = $_POST['click'];

$output1 = $_POST['output_1'];
$output2 = $_POST['output_2'];



// var_dump($add);
var_dump ($_POST['click']);


if (isset($input1, $input2)){
	if ($click == 'add'){
		$output1 = $input1 + $input2;
	}
}


if (isset($input1, $input2)){
	if ($click == 'subtract'){
		$output1 = $input1 - $input2;
	}
}



if (isset($input1, $input2)){
	if ($click == 'multiply'){
		$output1 = $input1 * $input2;
	}
}



if (isset($input1, $input2)){
	if ($click == 'divide'){
		if ($input2 != 0){
			$output1 = $input1 / $input2;
		} else {
			$output1 = "2nd input value must be numberic and cannot be zero";
		}
	}
}


if (isset($input1)){
	if ($click == 'square'){
		$output1 = $input1 **2;
		$input2 = 'Only first input field is being used';
	}
}


if (isset($click)){
	if ($click == 'reset'){
		$input1 = '';
		$input2 = '';
		$output1 = '';
	}
}

require_once('sessions.phtml');