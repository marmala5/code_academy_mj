// Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.
let arr1 = ['a', 'b', 'c'];
console.log('1 uzduotis: ', arr1);


// Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
console.log('2 uzduotis: ', arr1[0], arr1[1], arr1[2]);


// Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
let arr2 = ['a', 'b', 'c', 'd'];
console.log('3 uzduotis: ', arr2[0]+"+"+arr2[1], arr2[2]+"+"+arr2[3],);


// Sukurkite masyvą su elementais 2, 5, 3, 9.
let arr3 = [2, 5, 3, 9];
console.log('4 uzduotis: ', arr3);


// Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo.
console.log('5 uzduotis: ', arr3[0]*arr3[1], arr3[2]*arr3[3]);


// Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.
let sum = arr3[0]*arr3[1] + arr3[2]*arr3[3];
console.log('6 uzduotis: ', sum);


// Daugialypiai masyvai
// Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
let multi_arr = [[1, 2, 3], [4, 5, 6], [7,8,9]];
console.log('7 uzduotis: ','multi_arr[1][0]', multi_arr[1][0]);


// Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.
let arr4 = [1, 2, 3];
let arr5 = [4, 5, 6];
let arr_4_5 = arr4.concat(arr5);
console.log('8 uzduotis: ',arr_4_5);



// Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.
let arr6 = [1, 2, 3];
let arr7 = [arr6[2], arr6[1], arr6[0]];
console.log('9 uzduotis: ',arr7);


// Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.
let arr8 = [1, 2, 3];
arr8.push(4, 5, 6);
arr8.unshift(-1, -2, -3);
console.log('10 uzduotis: ',arr8);


// Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.
let arr9 = ['html', 'css', 'js'];
console.log('11 uzduotis: ',arr9[0], arr9[arr9.length - 1]);


// Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
let arr10 = [3, 4, 1, 2, 7];
arr10.sort();
console.log('12 uzduotis: ',arr10);


// Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.
let arr11 = [1, 2, 3, 4, 5];
arr11.splice(-2);
console.log('13 uzduotis: ',arr11);
