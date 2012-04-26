function payment_validation()
{
	var creditCardNo = document.getElementById("creditCardNo").value;
	var ownerName = document.getElementById("ownerName").value;
	var expiryYear = document.getElementById("expiryYear").value
	var securityCode = document.getElementById("securityCode").value;

	var cardNumberReg = /[0-9]{12}/; //credit card regular expression
	var securityCodeReg= /[0-9]{3}/; //security code regular expression
	var yearReg = /[0-9]{4}/; //year regular expression

	if (creditCardNo == "" || ownerName =="" || expiryYear =="" || securityCode == "")
	{
		alert("One or more compulsory fields is blank");
		return false;
	}
	else if (!cardNumberReg.test(creditCardNo))
	{
		alert("The Credit Card number is invalid, must be 12 digits!");
		document.getElementById("creditCardNo").value="";
		return false;
	}
	else if(!yearReg.test(expiryYear))
	{
		alert("The expiry date is invalid, must be in future!");
		document.getElementById("expiryYear").value="";
		return false;
	}
	else if (!validExpiryDate(expiryYear))
	{
		alert("The expiry date is invalid, must be in future!");
		document.getElementById("expiryYear").value="";
		return false;
	}

	else if (!securityCodeReg.test(securityCode))
	{
		alert("The security code is invalid, must be 3 digits!");
		document.getElementById("securityCode").value="";
		return false;
	}
	else 
	{
		return true;
	}
}

//check if the credit card's  expiry date 
//is in the future
function validExpiryDate(expiryYear)
{  
	//gets select month values 
	var selectElement = document.getElementById("expiryMonth");
	var expiryMonth = selectElement.options[selectElement.selectedIndex].value;
      
	var today= new Date();
     
	if (parseInt(expiryYear) > today.getFullYear())
	{
		return true;
	}
	else if (parseInt(expiryYear) == today.getFullYear() && parseInt(expiryMonth) >  today.getMonth())
	{
		return true; 
	}
	else 
	{
		return false;
	}
}