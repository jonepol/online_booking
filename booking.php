<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
  
<?php
	require_once "db_setting.inc";
			
			$dbc = new mysqli(DB_HOST_HOME, DB_QUERY_USER, DB_QUERY_PASS, POTI_DB);
			if (mysqli_connect_errno()) {
				echo "Connect Failed<br>";
				exit;
			}
	
	$flight_no = $_REQUEST['flight_no'];
	
	$query_string = "select * from flights where route_no='".$flight_no."';";
	$result = $dbc->query($query_string);
	
	while ($a_row = $result->fetch_assoc()) {
		$flight_no = $a_row['route_no'];
		$origin = $a_row['from_city'];
		$destination = $a_row['to_city'];
		$price = $a_row['price'];
	}
	
	session_start();
	$_SESSION['flight_no'] = $flight_no;
	$_SESSION['origin'] = $origin;
	$_SESSION['destination'] = $destination;
	$_SESSION['price'] = $price;
?>

<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel='stylesheet' type='text/css' href='default.css'>
	 </head>
   <script type="text/javascript">
   	 function enableSeatType(row){
   	 	 if(document.getElementById("seat" + row).checked == true){
   	 	 	 document.getElementById("child" + row).disabled = false;
   	 	 	 document.getElementById("wheelchair" + row).disabled = false;
   	 	 	 document.getElementById("specialDiet" + row).disabled = false;
   	   }else{
   	   	 document.getElementById("child" + row).disabled = true;
   	 	 	 document.getElementById("wheelchair" + row).disabled = true;
   	 	 	 document.getElementById("specialDiet" + row).disabled = true;
   	 	 	 document.getElementById("child" + row).checked = false;
   	 	 	 document.getElementById("wheelchair" + row).checked = false;
   	 	 	 document.getElementById("specialDiet" + row).checked = false;
   	   }
   	 }
   	 
   </script>
	 <body>
	 	 <?php include("menu.inc") ?>
	 	 <div id="content">
	 	 		<p>Flight Detail:</p>
	   <form name="seats" method="POST" action="bookingReview.php">
		<table>
			<tr>
				<td>Flight No: </td>
				<td><span name="flightNo"><?php echo $flight_no; ?></span></td>
			</tr>
				<td>From City: </td>
				<td><span name="origin"><?php echo $origin; ?></span></td>
			<tr>
				<td>To City: </td>
				<td><span name="destination"><?php echo $destination; ?></span></td>
			</tr>
			<tr>
				<td>Price: </td>
				<td><span name="price"><?php echo $price; ?></span></td>
			</tr>
		</table>
	   	 <table>
	   	   <tr>
			 <td></td>
	   	     <td>Seat</td>
	   	     <td>Child</td>
	   	     <td>Wheelchair</td>
	   	     <td>Special Diet</td>
	   	   </tr>
	   	   <tr>
		     <td>1</td>
	   	     <td><input type="checkbox" name="seats" id="seatOne" onclick="enableSeatType('One')"></td>
	   	     <td><input type="checkbox" name="seatTypeOne" id="childOne" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeOne" id="wheelchairOne" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeOne" id="specialDietOne" disabled></td>
	   	   </tr>
	   	   <tr>
			 <td>2</td>
	   	     <td><input type="checkbox" name="seats" id="seatTwo" onclick="enableSeatType('Two')"></td>
	   	     <td><input type="checkbox" name="seatTypTwo" id="childTwo" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeTwo" id="wheelchairTwo" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeTwo" id="specialDietTwo" disabled></td>
	   	   </tr>
	   	   <tr>
		     <td>3</td>
	   	     <td><input type="checkbox" name="seats" id="seatThree" onclick="enableSeatType('Three')"></td>
	   	     <td><input type="checkbox" name="seatTypeThree" id="childThree" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeThree" id="wheelchairThree" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeThree" id="specialDietThree" disabled></td>
	   	   </tr>
	   	   <tr>
		     <td>4</td>
	   	     <td><input type="checkbox" name="seats" id="seatFour" onclick="enableSeatType('Four')"></td>
	   	     <td><input type="checkbox" name="seatTypeFour" id="childFour" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFour" id="wheelchairFour" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFour" id="specialDietFour" disabled></td>
	   	   </tr>
	   	   <tr>
		     <td>5</td>
	   	     <td><input type="checkbox" name="seats" id="seatFive" onclick="enableSeatType('Five')"></td>
	   	     <td><input type="checkbox" name="seatTypeFive" id="childFive" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFive" id="wheelchairFive" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFive" id="specialDietFive" disabled></td>
	   	   </tr>
		   <tr>
			 <td colspan="4">Total number of seats selected:</td>
			 <td id="numberOfSeats"></td>
		   </tr>
		   <tr>
			 <td colspan="5"><input type="submit" value="Add to Bookings"></td>
		   </tr>
		 </table>
	   </form>	   
	 	</div>
	 	<div id="information">
	 	</div>
	 	<?php include("footer.inc") ?>
	 </body>

</html>