window.onload = initAll;
var ajax=false;

function initAll()
{
   if (window.XMLHttpRequest)
   {
      ajax = new XMLHttpRequest();
   }
   else if (window.ActiveXObject)
   {
		try  
		{
			ajax = new ActiveXObject("Msxml2.XMLHTTP");
        }
		catch(e1)
		{
			try { ajax = new ActiveXObject("Microsoft.XMLHTTP"); } 
			catch(e2) {}
		}
   }

   if (!ajax) {
      alert("Some page functionality is not available");
   }
}


function change_compulsory_filed(country)
{
	if (country.toLowerCase() == "australia")
	{
		alert("australia");
	}
	else 
	{
		alert("others");
	}
}