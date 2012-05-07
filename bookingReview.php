<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">

<?php
session_start();

if (!isset($_SESSION['booked_flights']))
{
	$booked_flights = array();
}
else
{								   
	$booked_flights = $_SESSION['booked_flights'];
}

$seats = $_REQUEST['seats'];

if (isset($_SESSION['new_flight'])){
	for ($i = 0; $i < count($seats); $i++)
{
	$new_flight = $_SESSION['new_flight'];
	if (isset($_REQUEST['seatType'.$seats[$i]]))
	{
		$seat_type = $_REQUEST['seatType'.$seats[$i]];
		
		for ($k = 0; $k < count($seat_type); $k++)
		{
			
			if ($seat_type[$k] == "child")
			{
				$new_flight['child'] = "YES";
			}
			if ($seat_type[$k] == "wheelchair")
			{
				$new_flight['wheelchair'] = "YES";
			}
			if ($seat_type[$k] == "specialDiet")
			{
				$new_flight['special_diet'] = "YES";
			}
		}
	}
	array_push($booked_flights, $new_flight);
}
	$_SESSION['booked_flights'] = $booked_flights;
	unset($_SESSION['new_flight']);
}


?>  

<html>
	<head>
		<title>Online Travel Agency</title>
	 	<link href="css/style.css" rel="stylesheet" type="text/css" />
		 <script type="text/javascript" src="javascript/jquery-1.7.1.js"></script>
		 <script src="javascript/searchLink.js" type="text/javascript"></script>
	</head>
	<body>
		<?php include("menu.inc") ?>
		<div id="main">
		<div id="content">
		<center>
			<h5>Booking Review</h5>
			<table class="table">
				<tr>
					<th>Flight No</th>
					<th>From City</th>
					<th>To City</th>
					<th>Child</th>
					<th>Wheel Chair</th>
					<th>Special Diet</th>
					<th>Price</th>
				</tr>
				<?php
				$totalPrice = 0.0;
				if(isset($booked_flights)){
					
					foreach ($booked_flights as $flight)
					{
						print "<tr>\n";
						print "\t<td>$flight[flight_no]</td>";
						print "\t<td>$flight[origin]</td>";
						print "\t<td>$flight[destination]</td>";
						print "\t<td>$flight[child]</td>";
						print "\t<td>$flight[wheelchair]</td>";
						print "\t<td>$flight[special_diet]</td>";
						print "\t<td>$flight[price]</td>";
						print "</tr>\n";
						$totalPrice = $totalPrice + (float)$flight['price'];
					}
				}
				?>
				<tfoot>
				<tr>
					<td colspan = 6>Total Price</td>
					<td><?php echo $totalPrice ?></td>
				</tr>
				</tfoot>
			</table>
			<a href="search.php"><input type="button" class="button" value="Book More Flights"></a>
			<a href="deleteFlight.php"><input type="button" class="button" value="Clear All Booked Flights"></a>
			<a href="personalDetails.php"><input type="button" class="button" value="Proceed to Checkout"></a>
		</center>
		</div>
	 	</div> <!-- end of main -->
	 	<?php include("footer.inc") ?>
	</body>
</html>