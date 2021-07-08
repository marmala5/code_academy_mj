// // For and While
// // Atspausdinkite skaičių stulpelį nuo 1 iki 100./////////////////////////


for (let i = 1; i <= 100; i++){
	console.log('1 Uzduotis For: ', i);	
}


i = 1;
while (i <= 100) {
	console.log('1 Uzduotis While: ', i);
	i++;
}


// // Atspausdinkite skaičių stulpelį nuo 11 iki 33./////////////////////////


for (let i = 11; i <= 33; i++){
	console.log('2 Uzduotis For: ', i);	
}


i = 11;
while (i <= 100) {
	console.log('2 Uzduotis While: ', i);
	i++;
}


// // Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.


for (let i = 0; i <= 100; i += 2) {
	console.log('3 Uzduotis For: ',i);
}


i = 0;
while (i <= 100) {
	console.log('3 Uzduotis While: ', i);
	i += 2;
}

// Naudodami ciklą parodykite sumą nuo 1 iki 100.


let x = 0;
let sum = 0;
while (x <= 100) {
	console.log('4 Uzduotis While: ', sum);
	x++;
	sum = sum + x;
}

for (let x = 0, sum = 0; x <= 100; x++, sum = sum + x) {
	// sum = sum + x (ar yra skirtumas cia naudoti ar virsuje skliausteliuose po x++??)
	console.log('4 Uzduotis For: ',sum);
}
	// console.log('4 Uzduotis For: ',sum);

// For ir masyvai
// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.


let arr = [1, 2, 3, 4, 5];
for (let z = 0; z <= arr.length - 1; z++) {
	document.write(arr[z]);
}


// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.




for (z = 0, sum = arr[0]; z <= arr.length-1; z++, sum = sum + arr[z]){
	console.log('5 Uzduotis sum up arrays: ', sum);
}


