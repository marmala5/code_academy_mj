<?php

// Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestų į ekrana.(while).

// while ($rollRes < 5) {
//  $rollRes = rand(1, 6);
//  echo('<pre>');
//  echo($rollRes);
// }
//  echo('<br>');    

// Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):
// Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
// 	taisyklės (ziureti zemiau):

//??????????????????????Nesugebejau pritaikyti While ciklo - reikia 



	$rollRes1 = rand(1, 6);	
	$rollRes2 = rand(1, 6);
	$totalRes = $rollRes1 + $rollRes2;
	


	var_dump($rollRes1);
	var_dump($rollRes2);
	var_dump($totalRes);


	// 	Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
	if ($totalRes < 5){
		
		var_dump('Rezultatas '.$totalRes .' reiškia - jūs iškarto pralaimejote.');
	}
		// 	Jeigu kauliukų suma daugiau už 5 ir:
	// 	Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
	else if($rollRes1 == 6 && $rollRes2 == 6){
		
		var_dump('Rezultatas '.$rollRes1 .'+' .$rollRes2 .'='.$totalRes .' reiškia - laimėjote dviratį.');
	}

	// 	Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
	else if ($totalRes > 5 && $rollRes1 == $rollRes2  && $rollRes1 !== 6 && $rollRes2 !== 6){
		
		var_dump('Rezultatas '.$rollRes1 .'+' .$rollRes2 .'='.$totalRes .' Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.');

	}
		
		// 	Kitais atvejais – kauliukas metamas dar kartą.
	else {
		
		var_dump('Rezultatas '.$rollRes1 .'+' .$rollRes2 .'='.$totalRes .' kauliukas metamas dar kartą.');
		
		
	}

echo mt_rand() . "\n";
echo mt_rand() . "\n";

echo mt_rand(5, 15);
	
// Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
	
// Visa žaidimo eiga turėtų būti išvesta į ekraną.