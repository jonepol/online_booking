<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">

<?php

session_start();
if (!isset($_SESSION['booked_flights']))
{
	$booked_flights = array(0 => array('flight_no' => $_SESSION['flight_no'],
									   'origin' => $_SESSION['origin'],
									   'destination' => $_SESSION['destination'],
									   'price' => $_SESSION['price']));
}
else
{
	$booked_flights = $_SESSION['booked_flights'];
	// array_push($booked_flights, );
	
}

print_r($booked_flights);
?>  

<html>
	<head>
		<title>Online Travel Agency</title>
	 	<link rel='stylesheet' type='text/css' href='default.css'>
	</head>
	<body>
		<?php include("menu.inc") ?>
		<div id="content">
			<form>
				<table>
					<tr>
						<td>Flight No</td>
						<td>From City</td>
						<td>To City</td>
						<td>Child</td>
						<td>Wheel Chair</td>
						<td>Special Diet</td>
						<td>Price</td>
					</tr>
				</table>
			</form>
		</div>
	 	<div id="information">
	 	</div>
	 	<?php include("footer.inc") ?>
	</body>
</html>