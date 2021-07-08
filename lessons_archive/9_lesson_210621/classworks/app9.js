

let dob = +prompt("Enter your date of birth");
let current_date = new Date();
let current_year = current_date.getFullYear();
console.log(current_year);
let age = current_year - dob;
console.log(age);

