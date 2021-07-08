// Parasšykitė funkciją kuri grąžina stulpelį su lyginiais skaičiais nuo x iki x.


function log_even(from, to) {
  for (let i=from; i<=to; i++) {
    if(i % 2 === 0) {
      console.log(i);
    }
  }
}

let from = +prompt("1 Uzduotis. Iveskite skaiciu Nuo: ");
let to = +prompt ("2 Uzduotis. Iveskite skaiciu Iki:");

log_even(from, to);


// Parasšykitė funkciją kuri patikrina ar duotas skaičius yra daugiau nei 3 ir mažiau nei 10.


function compare_number(number){
	if(number > 3 && number < 10){
		console.log("Taip, skaicius ieina i intervala");
	}
	else {console.log("Ne, skaicius neieina i intervala")

	}
}

compare_number(+prompt("2 Uzduotis. Iveskite skaiciu, kuris bus palygintas su 3 ir 10: "));



// Parasšykitė funkciją kuri grąžina teigiamų masyvo skaičių sumą




function positiveSum(arr) {
 let sum = 0;
 for(let i = 0; i < arr.length; i++) {
   if(arr[i] > 0) {
    sum += arr[i];
  }
 }
console.log(sum);
return sum; //in this case return is not necessary to use as we only need to show the result in console.log, however, it will be more than likely needed to use in the future projects.
}

let my_test_arr = [-5, -6, 2, 7];
positiveSum(my_test_arr);


// Sis kodas yra skirtas apskaiciuoti array elementu suma. Tai nera susije su uzduotimi, taciau noretusi pasiaiskinti sio kodo veikima. Ka nurodo tie funkcijos parametrai a ir b ir kaip jie veikia. Nelabai suprantu veikimo principo. Kodel buten du parametrai yra reikalingi - a ir b??
var array = [1, 2, 3, 4, 5];
    
    // Getting sum of numbers
    var sum = array.reduce(function(a, b){
        return a + b;
    }, 0);
    
    console.log(sum); // Prints: 15