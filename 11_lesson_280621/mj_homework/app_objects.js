// for-in
// Sukurkite objektą green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.

let colors = {
	green: "zalia",
	red: "raudona",
	blue: "melyna"
};
console.log(Object.keys(colors));
console.log(Object.values(colors));

// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.
let employees = {
	Mantas: 200,
	Paulius: 300,
	Mindaugas: 300
}

// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.

for (let x in employees) {
    console.log(`${x} - ${employees[x]} EU atlyginimas.`)

}

// Sukurkite objektą su savaitės dienomis.
// Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios 
// (1 -> pirmadienis ir t.t.). 

let weekdays = {
	
	"1": "pirmadienis",
	"2": "antradienis",
	"3": "treciadienis",
	"4": "ketvirtadienis",
	"5": "penktadienis",
	"6": "sestadienis",
	"7": "sekmadienis"
	
}

console.log(weekdays[7]);

// Parodykite dabartinę savaitės dieną.

// console.log(weekdays.1); kokiu budu norodyti rakta, kai rakto pavadinimas yra skaicius?????????????????????

let current_date = new Date();
let current_week_day = current_date.getDay();
console.log(`Siuo metu yra ${Object.values(weekdays)[current_week_day-1]} ir yra like ${5-Object.keys(weekdays)[current_week_day-1]} dienos iki savaitgalio!!!`);

// Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris. 
let day = Object.keys(weekdays)[current_week_day-1];

// Atspausdinkite savaitės dieną naudojant sita kintamajį.
console.log(day);

// Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. 

let object1 = {
	js: ['jQuery', 'Angular'],
	hp: 'hello',
	css: 'world'

}

// Parodykite žodį jQuery.
console.log(Object.values(object1)[0][0]);

// Sukurkite objektą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai atitinkamai. 

let en_lt_weekdays = {
	lt: ["pirmadienis", "antradienis", "treciadienis", "ketvirtadienis", "penktadienis", "sestadienis", "sekmadienis"],
	en: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
}


// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.

// for (let i = 0; i < en_lt_weekdays.lt.length; i++) {
// 	if(en_lt_weekdays.lt[i] = "pirmadienis"){
// 		console.log(en_lt_weekdays.lt[i])
// 	}
// }
console.log (en_lt_weekdays.lt[0]);
console.log (en_lt_weekdays.en[2]);


// Sukurkite kintamsios lang ir day (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną

//////??????neradau budo kaip padaryti////????
let day1 = Object.values(en_lt_weekdays);
let lang = Object.keys(en_lt_weekdays);
console.log(lang);
console.log(day1[0][0]);
	


