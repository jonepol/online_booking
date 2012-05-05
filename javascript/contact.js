$().ready(function() {
	$("#contactLink").addClass('current'); 
	$("#homeLink").removeClass('current');
	$("#bookingLink").removeClass('current');
	$("#searchLink").removeClass('current');
});

function contact_validation()
{   
	email = document.getElementById("emailAddress").value;
	//email address regular expression 
    var emailReg = /^\w{1,15}(?:@(?!-))(?:(?:[a-z0-9-]*)(?:[a-z0-9](?!-))(?:\.(?!-)))+[a-z]{2,4}$/;

	if(document.getElementById("subject").value == "" 
	 ||document.getElementById("emailAddress").value == ""
	 ||document.getElementById("emailContent").value == "")
	{
		 //display error message
		$("#errorMessage").replaceWith("<span id='errorMessage' class='compulsory' align='center'>One or more compulsory fields is blank</td>");
		return false;
	}
	else if (!emailReg.test(email))
	{
		//display error message
		$("#errorMessage").replaceWith("<span id='errorMessage' class='compulsory' align='center'>Please enter a valid email address</td>");
		return false;
	}
	else
	{
		return true;
	}
}