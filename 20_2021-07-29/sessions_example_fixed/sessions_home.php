<?php

// Sukurkime skaičiuotuvą. (sesijos)
// Skaičiuotuvas turi turėti sudėtį, atimtį, daugybą, dalybą ir pakelimą kvadratu.
	
// Front-end‘as(HTML kodas) ir Back-end‘as(PHP skriptas) turi būti atskiruose failuose
	
// Visi ankstesni rezultatai turi matytis.
	
// Atnaujinus(refreshin‘us) naršyklės langą, atsakymai išlieka.

session_start();
//nesugebejau pajungti sesiju - nespejau issiaiskinti.
//Validacijos taip pat nera geros, bet ja suprantu kaip daryti  - tiesiog labai daug laiko skyriau sesijoms ir cookies. Reiketu daugiau pavyzdziu.



$input1 = NULL;
$input2 = NULL;

$output = NULL;

if (isset($_POST['input_1'], $_POST['input_2'], $_POST['click'])){
	$input1 = $_POST['input_1'];
	$input2 = $_POST['input_2'];

	$click = $_POST['click'];

	if ($click == 'add'){
		$output = $input1 + $input2;
	}

	if ($click == 'subtract'){
		$output = $input1 - $input2;
	}

	if ($click == 'multiply'){
		$output = $input1 * $input2;
	}

	if ($click == 'divide'){
		if ($input2 != 0){
			$output = $input1 / $input2;
		} else {
			$output = "2nd input value must be numberic and cannot be zero";
		}
	}

	if ($click == 'square') {
		$output = sqrt($input1);
		$input2 = 'Only first input field is being used';
	}

	if ($output !== NULL) {
		$_SESSION['results'][] = $output;
	}

	if ($click == 'reset'){
		$input1 = '';
		$input2 = '';

		$output = '';
	}
}

require_once('sessions.phtml');