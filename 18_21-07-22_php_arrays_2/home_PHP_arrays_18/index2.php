<?php

// Išvesti į ekraną 10 kartų žodį 'Labas';

$str = 'Labas';
$times = 10;
$text = str_repeat($str .' ', $times);
echo($text);
echo('<br>');

// Išvesti į ekraną skaičius nuo 1 iki 10;

for ($i=1; $i<=10; $i++){
	echo $i .' ';
}
echo('<br>');
	
// Išvesti į ekraną skaičius nuo 10 iki 1;

for ($i=10; $i>=1; $i--){
	echo $i .' ';
}
echo('<br>');

// Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;

for ($i=1; $i<=100; $i++){
	if ($i % 2 == 0){
	echo $i .' ';
	}
}
echo('<br>');
	
// Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);

$myArr = [-5, -4, 3, 2, 1, 8];
var_dump($myArr);
echo('<br>');
	
// Išvesti į ekraną visų masyvo elementų sumą.;

var_dump(array_sum($myArr));

	
// Išvesti į ekraną visų masyvo elementų sandaugą.;

var_dump(array_product($myArr));
	
// Išvesti į ekraną kas antrą masyvo elementą;

$array = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh');
foreach (range(1, count($array), 2) as $x) {
  unset($array[$x]);
}

var_dump($array);

	
// Funkciją, kuri apverstų masyvo elementus;

var_dump(array_reverse($array));

	
// Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai einančiu.)

//this is my own method before checking on internet:
$myArr = [1, 2, 3, 4, 5, 6];
for ($i=1; $i < count($myArr); $i++){
	echo($myArr[$i] + $myArr[$i-1]);
	echo('<br>');
	
}

//this is copy->paste version from web:
function fibonacci($n,$first = 0,$second = 1)
{
    $fib = [$first,$second];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}

var_dump(fibonacci(10));
echo '<br>';
// Išvesti visų masyvo elementų vidurkį;(foreach)

$arr = [1, 2, 3, 4, 5];
$myAverage = array_sum($arr)/count($arr);	
echo 'This is the average not using foreach function: '.$myAverage;


//https://stackoverflow.com/questions/32302645/foreach-loop-and-average-in-php/32302673
$myArray = array(1,2,3,4,5);
$sum= $count=0;
foreach($myArray as $value){
    $sum += $value;
   $count++;
   }
echo '<br>';
echo 'Sum:'.$sum;
echo '<br>';
echo 'Count:'.$count;
echo '<br>';
echo 'Average:'.$sum/$count; 
	
// Išvesti automobilis masyvą į ekraną; (dvilypis masyvas);
//create multidimensional array
$input = [
"colors" => ["Red", "Green", "Blue"],
"fruits" => ["Apple", "Orange", "Grapes"],
"cars" => ["Skoda", "BMW", "Mercedes"]
];

// print the multidimensional array
echo "<pre>";
print_r($input);
echo "</pre>";
