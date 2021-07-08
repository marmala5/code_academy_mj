// Paprasytu ivesti bazinio uzmokescio dydi
// Kiek procentu tai sudarytu nuo biudzeto, jei visi gyventojai gautu tokias ismokas
// Document.write()atspausdinti rezultata
//
// Duomenys:
// Darbingi zmones: 1761463
// 2017 Lietuvos biudzetas 8487300000

// x * 1761463/8487300000 * 100 = y

let payment = prompt('Iveskite bazinio uzmokescio dydi');
const people = 1761463;
const budget = 8487300000;

let percentage = (payment * people / budget * 100);
let rounded = percentage.toFixed(2);

let result = rounded + '%';
document.write(result);

// Extra
console.log(result);



