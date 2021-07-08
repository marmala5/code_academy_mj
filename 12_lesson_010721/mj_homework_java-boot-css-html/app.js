// Images:
//https://i.imgur.com/PLDVxza.jpg
// https://i.imgur.com/0DElr0H.jpg


let click_on_me = document.querySelector("#click_on_me");
click_on_me.addEventListener('click', function(){
	alert("Hello World!")
});
/////////////////////////Hello worrld END


///////////Change entry text case by clicking on button START
//4x buttons
let upper_case = document.querySelector('#upper');
let lower_case = document.querySelector('#lower');
let first_upper = document.querySelector('#f_upper');
let first_lower = document.querySelector('#f_lower');

//	input field
let fill_me_in = document.querySelector("body > div > div:nth-child(5) > div.col-5.py-3 > input");


upper_case.addEventListener('click', function(){
	let entry = fill_me_in.value;
	fill_me_in.value = entry.toUpperCase();
	// kodel negalima taip: fill_me_in.value.toUpperCase(); ??????????????????????
	//juk sitaip tai galima: fill_me_in.style.blue;
});

lower_case.addEventListener('click', function(){
	let entry = fill_me_in.value;
	fill_me_in.value = entry.toLowerCase();	
});

first_upper.addEventListener('click', function(){
	let entry = fill_me_in.value;
	fill_me_in.value = entry[0].toUpperCase() + entry.slice(1).toLowerCase();
});

first_lower.addEventListener('click', function(){
	let entry = fill_me_in.value;
	fill_me_in.value = entry[0].toLowerCase() + entry.slice(1).toUpperCase();
});

///////////Change entry text case by clicking on button END


///////////Email and Phone Number Task START:


let email_entry = document.querySelector('[type="email"]');
let phone_entry = document.querySelector('#phoneInput');
let save_button = document.querySelector('#save_button');

function ValidateEmail(mail)
{
	
	let mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	return mail.match(mailformat);
}

function PhoneValidator(inputtxt) ///validator does not work. Always shows FALSE.
{
  let phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        document.querySelector('#phone_warning').textContent = "Please enter valid phone number";
        return false;
        }
}

save_button.addEventListener('click', function(){

	if(ValidateEmail(email_entry.value))
	{

		document.querySelector('#email_warning').textContent = "OK";

		
	}
	else
	{
		document.querySelector('#email_warning').textContent = "Please enter valid email address";
		
	}

	PhoneValidator(phone_entry);

})

///////////Email and Phone Number Task END.

///////////////Disable/enable entry field - START:
let block = document.querySelector('#block');
let unblock = document.querySelector('#unblock');
let bl_unbl_entry = document.querySelector('#bl_unbl_entry');

block.addEventListener('click', function(){
	bl_unbl_entry.disabled = true;
});
unblock.addEventListener('click', function(){
	bl_unbl_entry.disabled = false;
});
///////////////Disable/enable entry field - END.


/////////Monkey images START
document.querySelector(".img-thumbnail").addEventListener('pointerover', function(){
	document.querySelector(".img-thumbnail").src = "https://i.imgur.com/PLDVxza.jpg";
	document.querySelector(".img-thumbnail").addEventListener('pointerout', function(){
	document.querySelector(".img-thumbnail").src = "https://i.imgur.com/0DElr0H.jpg";
});
});
//////////Monkey images END.


///////Modal Launch START: Reiketu pasiaiskintu siu modalu paskiti?
// Get the modal
let modal = document.querySelector("#myModal");

// Get the button that opens the modal
let btn_modal = document.querySelector("#myBtn");

// Get the <span> element that closes the modal
let span = document.querySelector('.close');


// When the user clicks the button, open the modal 
btn_modal.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
///////Modal Launch END.




