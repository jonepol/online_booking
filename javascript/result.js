$().ready(function() {
	$("#searchLink").addClass('current'); 
	$("#homeLink").removeClass('current');
	$("#bookingLink").removeClass('current');
	$("#contactLink").removeClass('current');
});

function clearOtherCheckbox(checkedBox)
{
	var allCheckbox = document.getElementsByName("flightNo");
	for (var i = 0; i < allCheckbox.length; i++)
	{
		if (allCheckbox[i] != checkedBox)
		{
			allCheckbox[i].checked = false;
		}
	}
}

function isSelected()
{
	var checkbox = document.getElementsByName("flightNo");
	for (var i = 0; i < checkbox.length; i++)
	{
		if (checkbox[i].checked == true)
		{
			return true;
		}
	}
	//display error message
	$("#errorMessage").replaceWith("<span id='errorMessage' class='error' align='center'>Please select one flight.</td>");
	return false;
}
