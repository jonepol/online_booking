 var totalSeats = 0;
 
$().ready(function() {
	$("#searchLink").addClass('current'); 
	$("#homeLink").removeClass('current');
	$("#bookingLink").removeClass('current');
	$("#contactLink").removeClass('current');
});

function enableSeatType(row)
{    
	if(document.getElementById("seat" + row).checked == true)
	{   //enable seattype checkbox and increase 
		//the total number of seat 
		document.getElementById("child" + row).disabled = false;
		document.getElementById("wheelchair" + row).disabled = false;
		document.getElementById("specialDiet" + row).disabled = false;
		totalSeats += 1;
	}
	else
	{
		//disable seattype checkbox and 
		//decreases total number of seat 
		document.getElementById("child" + row).disabled = true;
		document.getElementById("wheelchair" + row).disabled = true;
		document.getElementById("specialDiet" + row).disabled = true;
		document.getElementById("child" + row).checked = false;
		document.getElementById("wheelchair" + row).checked = false;
		document.getElementById("specialDiet" + row).checked = false;
		totalSeats -=1;
   }
   //update total number of seat in the html
   $("#numberOfSeats").replaceWith("<span id='numberOfSeats'>" + totalSeats + "</span>");
}

function isSelected()
{
	if(totalSeats != 0)
	{
		return true;
	}
	else 
	{
		//display error message
		$("#errorMessage").replaceWith("<span id='errorMessage' class='error' align='center'>Please select at least one seat.</td>");
		return false;
	}
}

