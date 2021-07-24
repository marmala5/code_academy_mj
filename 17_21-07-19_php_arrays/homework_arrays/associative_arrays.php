<?php 
// Asociatyvūs masyvai



//     Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre

$book = [
'title' => 'Magic Book',
'author' => 'Tom Thompson',
'year' => 2021,
'genre' => 'drama'
];

// var_dump($book);


//     Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas

$library = [
	$book,

	['title' => 'Godzilla',
	'author' => 'John Johnson',
	'year' => 2016,
	'genre' => 'thriller'],

	['title' => 'Zombies',
	'author' => 'Steven Peters',
	'year' => 2010,
	'genre' => 'action'],
];

// var_dump($library);

//     Išvesti visus knygų masyvo elementus su var_dump;
foreach ($library as $key => $value) {
	// var_dump($key, $value);
}

//     Išvesti visų visų knygų metų vidurkį;    
$averageYear = array_column($library, 'year');
// var_dump($averageYear);
$averageYear = array_sum($averageYear) / count($averageYear);
$averageYear = round($averageYear);
// var_dump($averageYear);

//     Išvesti visus knygų masyvo elementus HTML lentele;
require_once 'table.phtml';
