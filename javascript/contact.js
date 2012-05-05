function contact_validation()
{   
	email = document.getElementById("emailAddress").value;
	//email address regular expression 
    var emailReg = /^\w{1,15}(?:@(?!-))(?:(?:[a-z0-9-]*)(?:[a-z0-9](?!-))(?:\.(?!-)))+[a-z]{2,4}$/;

	if(document.getElementById("subject").value == "" 
	 ||document.getElementById("emailAddress").value == ""
	 ||document.getElementById("emailContent").value == "")
	{
		alert("One or more compulsory fields is blank");
		return false;
	}
	else if (!emailReg.test(email))
	{
		alert("Please enter a valid email address");
		return false;
	}
	else
	{
		document.getElementById("isPostBack").value = "true";
		return true;
	}
}