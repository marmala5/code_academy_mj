// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.
// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.

let workers = {
	Mantas: 200,
	Paulius: 300,
	Mindaugas: 300
}

for (let key in workers) {
    console.log(`${key} - ${workers[key]} EU`)
}