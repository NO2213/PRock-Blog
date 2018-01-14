$(document).ready(function(){

		var post_id = $('#post_id').val();
		
		$.ajax({
			type: "POST",
			url: "page=comments",
			data: { post_id:post_id },
			success: function(theResponse) {
				$('#LoadComments').html(theResponse);
				}
		});

});

/******************************************************************
						REGISTER STARTS
******************************************************************/
    
if (document.getElementById("password"))
var password = document.getElementById("password");
if (document.getElementById("confirm_password"))
var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

if (document.getElementById("password") && document.getElementById("confirm_password"))
{
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
}

/******************************************************************
						REGISTER ENDS
******************************************************************/


