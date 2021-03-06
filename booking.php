<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
  
<?php
	require_once "db_setting.inc";
			
			$dbc = new mysqli(DB_HOST_HOME, DB_QUERY_USER, DB_QUERY_PASS, POTI_DB);
			if (mysqli_connect_errno()) {
				echo "Connect Failed<br>";
				exit;
			}
	
	$flight_no = $_REQUEST['flightNo'];
	
	$query_string = "select * from flights where route_no='".$flight_no."';";
	$result = $dbc->query($query_string);
	
	while ($a_row = $result->fetch_assoc()) {
		$flight_no = $a_row['route_no'];
		$origin = $a_row['from_city'];
		$destination = $a_row['to_city'];
		$price = $a_row['price'];
	}
	
	session_start();
	
	$_SESSION['new_flight'] =  array('flight_no' => $flight_no,
									 'origin' => $origin,
									 'destination' => $destination,
									 'price' => $price,
									 'child' => "NO",
									 'wheelchair' => "NO",
									 'special_diet' => "NO");
?>

<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link href="css/style.css" rel="stylesheet" type="text/css" />
		 <script src="javascript/jquery-1.7.1.js" type="text/javascript"></script>
		 <script src="javascript/booking.js" type="text/javascript"></script>
		 
	 </head>
	 <body>
	 	 <?php include("menu.inc") ?>
		 <div id="main">
	 	 <div id="content">
		 <center>
	 	 <h5>Flight Detail</h5>
		 <form name="seats" method="POST" action="bookingReview.php" onSubmit="return isSelected()">
			<table>
				<tr>
					<td>Flight No: </td>
					<td><?php echo $flight_no; ?></td>
				</tr>
					<td>From City: </td>
					<td><?php echo $origin; ?></td>
				<tr>
					<td>To City: </td>
					<td><?php echo $destination; ?></td>
				</tr>
				<tr>
					<td>Price: </td>
					<td><?php echo $price; ?></td>
				</tr>
			</table>
			<br><br>
			<h5>Book for Seats</h5>
			 <table class="table">
			   <tr>
				 <th></th>
				 <th>Seat</th>
				 <th>Child</th>
				 <th>Wheelchair</th>
				 <th>Special Diet</th>
			   </tr>
			   <tr>
				 <td>1</td>
				 <td><input type="checkbox" name="seats[]" value="0" id="seatOne" onclick="enableSeatType('One')"></td>
				 <td><input type="checkbox" name="seatType0[]" value="child" id="childOne" disabled></td>
				 <td><input type="checkbox" name="seatType0[]" value="wheelchair" id="wheelchairOne" disabled></td>
				 <td><input type="checkbox" name="seatType0[]" value="specialDiet" id="specialDietOne" disabled></td>
			   </tr>
			   <tr>
				 <td>2</td>
				 <td><input type="checkbox" name="seats[]" value="1" id="seatTwo" onclick="enableSeatType('Two')"></td>
				 <td><input type="checkbox" name="seatType1[]" value="child" id="childTwo" disabled></td>
				 <td><input type="checkbox" name="seatType1[]" value="wheelchair" id="wheelchairTwo" disabled></td>
				 <td><input type="checkbox" name="seatType1[]" value="specialDiet" id="specialDietTwo" disabled></td>
			   </tr>
			   <tr>
				 <td>3</td>
				 <td><input type="checkbox" name="seats[]" value="2" id="seatThree" onclick="enableSeatType('Three')"></td>
				 <td><input type="checkbox" name="seatType2[]" value="child" id="childThree" disabled></td>
				 <td><input type="checkbox" name="seatType2[]" value="wheelchair" id="wheelchairThree" disabled></td>
				 <td><input type="checkbox" name="seatType2[]" value="specialDiet" id="specialDietThree" disabled></td>
			   </tr>
			   <tr>
				 <td>4</td>
				 <td><input type="checkbox" name="seats[]" value="3" id="seatFour" onclick="enableSeatType('Four')"></td>
				 <td><input type="checkbox" name="seatType3[]" value="child" id="childFour" disabled></td>
				 <td><input type="checkbox" name="seatType3[]" value="wheelchair" id="wheelchairFour" disabled></td>
				 <td><input type="checkbox" name="seatType3[]" value="specialDiet" id="specialDietFour" disabled></td>
			   </tr>
			   <tr>
				 <td>5</td>
				 <td><input type="checkbox" name="seats[]" value="4" id="seatFive" onclick="enableSeatType('Five')"></td>
				 <td><input type="checkbox" name="seatType4[]" value="child" id="childFive" disabled></td>
				 <td><input type="checkbox" name="seatType4[]" value="wheelchair" id="wheelchairFive" disabled></td>
				 <td><input type="checkbox" name="seatType4[]" value="specialDiet" id="specialDietFive" disabled></td>
			   </tr>
			   <tfoot>
			   <tr>
				 <td colspan="5">Total number of seats selected:  <span id="numberOfSeats">0</span></td>
			   </tr>
			   <tfoot>
			 </table>
			 <span id= 'errorMessage' class='error'></span><br />
			 <input class="button" type="submit" value="Add to Bookings">
		</form>
		</center>
	 	</div>
	 	</div> <!-- end of main -->
	 	<?php include("footer.inc") ?>
	 </body>

</html>