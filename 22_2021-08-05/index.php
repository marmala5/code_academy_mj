<?php 

////////// »Parašyti PHP klasę, kuri parašytų “Sveiki, mano vardas yra {vardas}”, kur {vardas} būtų metodo argumento vertė klasės viduje.(objektiškai)
require_once('Hello.php');
require_once('Person.php');
require_once('Factorial.php');

$hello1 = new Hello();

// echo $hello1->introduction("Vardenis");



//////////  »Sukurti klasę Person, kuri turėtų atributus vardas, pavarde, amzius ir sukurti tris skirtingus tos klasės objektus. .(objektiškai)

$person1 = new Person('Vardenis-A', 'Pavardenis-A', 20);
$person2 = new Person('Vardenis-B', 'Pavardenis-B', 25);
$person3 = new Person('Vardenis-C', 'Pavardenis-C', 20);

// var_dump ($person1);
// var_dump ($person2);
// var_dump ($person3);


//////////  »Parašyti PHP klasę, kuri paskaičiuotų faktorialą. .(objektiškai)

$myNumber1 = new Factorial(10);
var_dump ($myNumber1);

