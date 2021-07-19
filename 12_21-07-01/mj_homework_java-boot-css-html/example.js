function upperCaseFirst(value) {
	return value.charAt(0).toUpperCase() + value.slice(1);
}

function lowerCaseFirst(value) {
	return value.charAt(0).toLowerCase() + value.slice(1);;
}

window.addEventListener('DOMContentLoaded', function() {
	document.querySelector('#hello-world-button').addEventListener('click', function() {
		alert('Hello World!');
	});
});

// --------------------------- //
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining

let input_case = document.getElementById('input-case');

document.querySelector('#div-case-buttons > button:nth-child(1)')?.addEventListener('click', function() {
	input_case.value = input_case.value.toUpperCase();
});

function toLowerCase() {
	input_case.value = input_case.value.toLowerCase();
}

document.querySelector('#div-case-buttons > button:nth-child(2)')?.addEventListener('click', toLowerCase);

document.querySelector('#div-case-buttons > button:nth-child(3)')?.addEventListener('click', function() {
	input_case.value = upperCaseFirst(input_case.value);
});

let button_case = document.querySelector('#div-case-buttons > button:nth-child(4)');

if (button_case) {
	button_case.addEventListener('click', function() {
		// input_case.value = input_case.value.charAt(0).toLowerCase() + input_case.value.slice(1);
		input_case.value = lowerCaseFirst(input_case.value);
	});
}

// --------------------------- //

function validateEmail(email) {
	let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	return re.test(String(email).toLowerCase());
}

function validatePhone(phone) {
	let re = /^\+3706[0-9]{7}$/;
	+37061234567

	return re.test(String(phone).toLowerCase());
}

function errorAdd(element) {
	element.classList.add('border');
	element.classList.add('border-danger');

	element.nextSibling.nextSibling.style.display = 'block';
}

function errorRemove(element) {
	element.classList.remove('border');
	element.classList.remove('border-danger');

	element.nextSibling.nextSibling.style.display = 'none';
}

const form = document.getElementsByTagName('form')[0];

const email  = form.querySelector('input[name="email"]');
const number = form.querySelector('input[name="number"]');

form.addEventListener('submit', function(event) {
	if (validateEmail(email.value) == false) {
		errorAdd(email);

		event.preventDefault();
	} else {
		errorRemove(email);
	}

	if (validatePhone(number.value) == false) {
		errorAdd(number);

		event.preventDefault();
	} else {
		errorRemove(number);
	}
});


// --------------------------- //

const blockable_input = document.querySelector('#input-blockable');

document.querySelector('#button-block-input')?.addEventListener('click', function() {
	blockable_input.disabled = true;
});

document.querySelector('#button-unblock-input')?.addEventListener('click', function() {
	blockable_input.disabled = false;
});

// --------------------------- //

let img = document.getElementById('image-over');

img?.addEventListener('mouseover', function() {
	img.src = 'https://i.imgur.com/PLDVxza.jpg';
});

img?.addEventListener('mouseout', function() {
	img.src = 'https://i.imgur.com/0DElr0H.jpg';
});

// --------------------------- //

const blockquote = document.querySelector('blockquote');

let links = document.querySelectorAll('#actions-cursors > a');

const ALLOWED_CURSORS = ['copy', 'text', 'pointer', 'help', 'crosshair'];

for (let element of links) {
	element.addEventListener('click', function(event) {
		event.preventDefault();

		if (ALLOWED_CURSORS.includes(this.textContent)){
			blockquote.style.cursor = this.textContent;
		}
	});
}

function removeColors() {
	for (let _class of blockquote.classList) {
		if (_class !== 'text-right' && _class.startsWith('text-')) {
			blockquote.classList.remove(_class);
		}
	}
}

links = document.querySelectorAll('#actions-colors > a');

// ToDO: check in list
// const ALLOWED_COLORS = [...links].map(x => x.getAttribute('data-color-class'));

for (let element of links) {
	element.addEventListener('click', function(event) {
		event.preventDefault();

		removeColors();

		blockquote.classList.add(this.getAttribute('data-color-class'));
	});
}

function removeBorders() {
	blockquote.className = blockquote.className.replace(/\bborder.*?\b/g, '');
	blockquote.className = blockquote.className.replace(/\bborder-.*?\b/g, '');
}

links = document.getElementById('actions-borders').getElementsByTagName('a');

for (let element of links) {
	element.addEventListener('click', function(event) {
		event.preventDefault();

		removeBorders();

		blockquote.classList.add('border');
		blockquote.classList.add('border-' + this.getAttribute('data-border-class'));
	});
}

document.getElementById('reset-all').addEventListener('click', function(event) {
	blockquote.style.cursor = 'default';

	removeColors();
	removeBorders();
});