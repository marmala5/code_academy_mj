<?php

// Funkcijos

$arr = [1, -5, 8, 12, 0, -1];
//    Sukurti funkciją, kuri ima masyvą ir grąžina didžiausią skaičių masyve.
var_dump(max($arr));
//     Sukurti funkciją, kuri ima masyvą ir grąžina mažiausią skaičių masyve.
var_dump(min($arr));
//     Sukurti funkciją, kuri ima masyvą ir išrikiuja jo elementus nuo mažiausio iki didžiausio ir grąžina tą masyvą.
sort($arr);
var_dump($arr);

