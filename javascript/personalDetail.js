$().ready(function() {
	$("#searchLink").addClass('current'); 
	$("#homeLink").removeClass('current');
	$("#bookingLink").removeClass('current');
	$("#contactLink").removeClass('current');
});

function personal_detail_validation()
{
	//email address regular expression 
    var emailReg = /^\w{1,15}(?:@(?!-))(?:(?:[a-z0-9-]*)(?:[a-z0-9](?!-))(?:\.(?!-)))+[a-z]{2,4}$/;
	var postcodeReg = /[0-9]{4}/; // postcode regular expression 
	var phoneReg = /[0-9]{1,20}/; //mobile regular expression

	//check if the compulsory fileds are filled
	if(document.getElementById("givenName").value == ""
	   || document.getElementById("familyName").value == ""
	   || document.getElementById("address1").value == ""
	   || document.getElementById("country").value == ""
	   || document.getElementById("suburb").value =="" 
	   || document.getElementById("emailAddress").value == "")
	{
		alert("One or more compulsory fields is blank");
		return false;
	}
	//if country is Australia then check if postcode, suburb and state are blank
	else if (document.getElementById("country").value.toLowerCase() == "australia")
	{   
		var postcode = document.getElementById("postcode").value;

		if(document.getElementById("state").value == "" || postcode == "")
		{
			alert("One or more compulsory fields is blank");
			return false;
		}
		//check if the postcode is correct
		else if (!postcodeReg.test(postcode))
		{
			alert("Please enter a valid postcode");
			document.getElementById("postcode").value = "";
			return false;
		}
	}
	//check if the emai is correct
	else if (!emailReg.test(document.getElementById("emailAddress").value))
	{
		alert("Please enter a valid email address");
		return false;
	}
	else if (document.getElementById("mobilePhone").value !="" && !phoneReg.test(document.getElementById("mobilePhone").value))
	{
		alert("Please enter a valid phone number");
		document.getElementById("mobilePhone").value = "";
		return false;
	}
	else if (document.getElementById("businessPhone").value !="" && !phoneReg.test(document.getElementById("businessPhone").value))
	{
		alert("Please enter a valid phone number");
		document.getElementById("businessPhone").value = "";
		return false;
	}
	else if (document.getElementById("workPhone").value !="" && !phoneReg.test(document.getElementById("workPhone").value))
	{
		alert("Please enter a valid phone number");
		document.getElementById("workPhone").value = "";
		return false;
	}
	else 
	{
		return true;
	}
	
}