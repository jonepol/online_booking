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
		<script type="text/javascript" src="javascript/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="javascript/bookingLink.js"></script>
	</head>
	<body>
		<?php include("menu.inc") ?>
		<div id="main">
		<div id="content">
		<center>
		<h5>Your Booking</h5>
		<?php

		if (isset($_SESSION['booked_flights']) && count($_SESSION['booked_flights']) > 0)
		{
			print "<form method=\"POST\" action=\"yourBooking.php\">\n
				   <table class=\"table\">\n
				   <tr>\n
				   \t<th>Flight No</th>\n
				   \t<th>From City</th>\n
				   \t<th>To City</th>\n
				   \t<th>Child</th>\n
				   \t<th>Wheel Chair</th>\n
				   \t<th>Special Diet</th>\n
				   \t<th>Price</th>\n
				   \t<th></th>\n
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
			print "<tfoot><tr><td colspan = 6>Total Price</td><td colspan = 2>".$total_price."</td></tr></tfoot>";
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