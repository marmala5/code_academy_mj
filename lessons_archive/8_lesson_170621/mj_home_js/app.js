
// Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert funkciją.
let a1 = 3;
console.log("1 Uzduotis: ",a1);
alert("1 Uzduotis: " + " " + a1);


// Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.
let a2 = +prompt("Iveskite kintamaji a2");
let b2 = +prompt("Ivekeskite kintamaji b2");
let sum = a2+b2;
let subtraction = a2-b2;
let multiplication = a2*b2;
let division = a2/b2;
document.write("a2 + b2 = "+sum+"<br>"+"a2 - b2 = "+subtraction+"<br>"+"a2 * b2 = "+multiplication+"<br>a2 / b2 = "+division+"<br>");
console.log("2 Uzduotis: ", sum, subtraction, multiplication, division);


// Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo vertę.
const c3 = 15;
const d3 = 2;
let result3 = c3+d3;
console.log("3 Uzduotis: ", result3);


// Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c. Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result.
const a4 = 17;
const b4 = 10;
let c4 = a4-b4;
const d4 = 7;
let result4 = c4+d4;
console.log("4 Uzduotis: ", c4, result4);


// Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane.
let str5 = "Hellow World!"
document.write(str5);
console.log("5 Uzduotis: ", str5);


// Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’. Naudodami šiuos kintamuosius parodykite frazę „Hello World!“.
let str61 = "Hello";
let str62 = "World!";
let phrase6 = str61+" "+str62;
console.log("6 Uzduotis: ", phrase6);


// Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“.
let a7 = "Marius";
let b7 = "Hello "+a7+"!";
console.log("7 Uzduotis: ", b7);

// Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’
let age8 = 35;
console.log("8 Uzduotis: ", "I'm "+age8+" year old!")

// Paklauskite vartotojo vardo naudodamiesi prompt metodais. Su alert parodykite pranešimą „Your name %name%“ kur %name% - įvestas vardas.
let username9 = prompt("Please enter your user name");
if (username9 !=0)
    {console.log("9 Uzduotis: ", username9)
        alert("Your name is "+username9);
    }
    else
    {console.log("9 Uzduotis: ", "User name has not been entered")
        alert("User name has not been entered");
    }

