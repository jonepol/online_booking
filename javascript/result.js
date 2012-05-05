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
	alert("Please select one flight.");
	return false;
}
