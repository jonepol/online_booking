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
		unset($booked_flights[$delete_flights[$i]]);
	}
	
	$_SESSION['booked_flights'] = array_values($booked_flights);
	
}
?>  

<html>
	<head>
		<title>Online Travel Agency</title>
	 	<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php include("menu.inc") ?>
		<div id="main">
		<div id="content">
		<center>
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
			$total_price = 0.0;
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
					$total_price =  $total_price +(float)$booked_flights[$i]['price'];
				}
			}
			print "<tr><td colspan = 6>Total Price</td><td>".$total_price."</td></tr>";
			print "</table>";
			print "<input type=\"submit\" class=\"button\" value=\"Delete Selected Flights\">";
			print "<a href=\"personalDetails.php\"><input type=\"button\" class=\"button\" value=\"Proceed to Checkout\"></a>";
			print "</form>";
		}
		else
		{								   
			print "<p>You have no bookings</p>";
			print "<a href=\"search.php\"><input type=\"button\" class=\"button\" value=\"Book More Flights\"></a>";
		}
				
		?>
			
		</center>	
		</div>
	 	</div> <!-- end of main -->
	 	<?php include("footer.inc") ?>
	</body>
</html>