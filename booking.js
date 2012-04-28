 var totalSeats = 0;

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
   $("#numberOfSeats").replaceWith("<td id='numberOfSeats'>" + totalSeats + "</td>");
}

function isSelected()
{
	if(totalSeats != 0)
	{
		return true;
	}
	else 
	{
		alert("Please select at least one seat.");
		return false;
	}
}