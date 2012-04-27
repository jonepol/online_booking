<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">

<?php
session_start();

if (!isset($_SESSION['booked_flights']))
{
	$booked_flights = array($new_flight);
}
else
{								   
	$booked_flights = $_SESSION['booked_flights'];
}

$seats = $_REQUEST['seats'];

for ($i = 0; $i < count($seats); $i++)
{
	
	$new_flight = $_SESSION['new_flight'];
	
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
	array_push($booked_flights, $new_flight);
}

$_SESSION['booked_flights'] = $booked_flights;
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