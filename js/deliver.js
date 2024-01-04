	//Validtion Code For Inputs

var email = document.forms['form']['email'];
var postalcode = document.forms['form']['postalcode'];


var email_error = document.getElementById('email_error');
var postalcode_error = document.getElementById('postalcode_error');

email.addEventListener('textInput', email_Verify);
postalcode.addEventListener('textInput', postalcode_Verify);

function validated(){
	if (email.value.length < 9) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (postalcode.value.length =!5) {
		postalcode.style.border = "1px solid red";
		postalcode_error.style.display = "block";
		postalcode.focus();
		return false;
	}

}
function email_Verify(){
	if (email.value.length >= 8) {
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
		return true;
	}
}
function postalcode_Verify(){
	if (postalcode.value.length == 5) {
		postalcode.style.border = "1px solid silver";
		postalcode_error.style.display = "none";
		return true;
	}
}

