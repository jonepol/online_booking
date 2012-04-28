<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">

<?php
session_start();

if (isset($_REQUEST['deleteFlight']))
{
	$delete_flights = $_REQUEST['deleteFlight'];
	$booked_flights = $_SESSION['booked_flights'];
	
	for ($i = 0; $i < count($delete_flights); $i++)
	{
		//print $delete_flights[$i];
		unset($booked_flights[$delete_flights[$i]]);
	}
	
	$_SESSION['booked_flights'] = array_values($booked_flights);
}
//print_r($booked_flights);
?>  

<html>
	<head>
		<title>Online Travel Agency</title>
	 	<link rel='stylesheet' type='text/css' href='default.css'>
	</head>
	<body>
		<?php include("menu.inc") ?>
		<div id="content">
		<?php

		if (isset($_SESSION['booked_flights']) && count($_SESSION['booked_flights']) > 0)
		{
			print "<form method=\"POST\" action=\"yourBooking.php\">\n
				   <table>\n
				   <tr>\n
				   \t<td>Flight No</td>\n
				   \t<td>From City</td>\n
				   \t<td>To City</td>\n
				   \t<td>Child</td>\n
				   \t<td>Wheel Chair</td>\n
				   \t<td>Special Diet</td>\n
				   \t<td>Price</td>\n
				   </tr>\n";

			$booked_flights = $_SESSION['booked_flights'];
			for ($i = 0; $i < count($booked_flights); $i++)
			{
				if (isset($booked_flights[$i]))
				{
					print "<tr>\n";
					print "\t<td>".$booked_flights[$i]['flight_no']."</td>";
					print "\t<td>".$booked_flights[$i]['origin']."</td>";
					print "\t<td>".$booked_flights[$i]['destination']."</td>";
					print "\t<td>".$booked_flights[$i]['child']."</td>";
					print "\t<td>".$booked_flights[$i]['wheelchair']."</td>";
					print "\t<td>".$booked_flights[$i]['special_diet']."</td>";
					print "\t<td>".$booked_flights[$i]['price']."</td>";
					print "\t<td><input name=\"deleteFlight[]\" value=\"$i\" type=\"checkbox\"</td>";
					print "</tr>\n";
				}
			}
			
			print "</table>";
			print "<input type=\"submit\" value=\"Delete Selected Flights\">";
			print "</form>";
			print "<a href=\"personalDetails.php\"><input type=\"button\" value=\"Proceed to Checkout\"></a>";
		}
		else
		{								   
			print "<p>You have no bookings</p>";
			print "<a href=\"search.php\"><input type=\"button\" value=\"Book More Flights\"></a>";
		}
				
		?>
			
			
		</div>
	 	<div id="information">
	 	</div>
	 	<?php include("footer.inc") ?>
	</body>
</html>