<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<?php
	 session_start();
	 
	 //gets personal details and booked flights detail
	 //from seesion
	 $personalDetail = $_SESSION['personalDetail'];
	 $booked_flights = $_SESSION['booked_flights'];
	 $total_price = 0.0;
      
	  //sends booking detail to user' email address 
	 $to = $personalDetail['emailAddress'];
	 $subject="Flight Booking Confirmation";
	 $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 $headers .= 'From: bentony.flight@uts.edu.au' . "\r\n";
	 $body = "<html>
			<p>Your Booking has been approved</p>
			<p>Following is the detail of you booking.</p>
			<p><h4>Personal Details:</h4></p>
			<table>"
			 ."<tr>"
					."\t<td>Given Name:</td><td>" .$personalDetail['givenName']. "</td>\n"
			."</tr>\n"
			."<tr>\n"
				   ."\t<td>Family Name:</td><td>" .$personalDetail['familyName']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td >Address:</td><td>" .$personalDetail['address']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td ></td><td>" .$personalDetail['suburb']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td ></td><td>" .$personalDetail['state']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td ></td><td>" .$personalDetail['country']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td >Email:</td><td>" .$personalDetail['emailAddress']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td >Mobile Phone:</td><td>" .$personalDetail['mobilePhone']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td >Work Phone:</td><td>" .$personalDetail['workPhone']. "</td>\n"
			."</tr>\n"
			."<tr>"
					."\t<td >Business Phone:</td><td>" .$personalDetail['businessPhone']. "</td>\n"
			."</tr>\n"
			."</table>"
			."<p><h4>Flight Details:</h4></p>"
			."<table>\n"
				."<tr>
							<td>Flight No</td>
							<td>From City</td>
							<td>To City</td>
							<td>Child</td>
							<td>Wheel Chair</td>
							<td>Special Diet</td>
							<td>Price</td>
				</tr>";
				foreach ($booked_flights as $flight)
				{
					$body .="<tr>\n"
								."\t<td>$flight[flight_no]</td>"
								."\t<td>$flight[origin]</td>"
								."\t<td>$flight[destination]</td>"
								."\t<td>$flight[child]</td>"
								."\t<td>$flight[wheelchair]</td>"
								."\t<td>$flight[special_diet]</td>"
								."\t<td>$flight[price]</td>"
							."</tr>\n";
					 $total_price =  $total_price +(float)$flight['price'];
				}
       $body .="</table>\n"
	             ."<p><h5>Total Price:$" . $total_price. "</h5></p>"
				 ."<p>Have a good trip!</p>"
	           ."</html>";
	mail($to,$subject,$body,$headers);
    
	//clears personalDetail and booked flight 
	//detail from session
	unset($_SESSION['personalDetail']);
	unset($_SESSION['booked_flights']);

?>
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	  <link href="css/style.css" rel="stylesheet" type="text/css" />
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 	<div id="main">
			<div id="content">
				<center>
				<h2>THANK YOU!</h2>
				<p>
				 Your booking has been completed and a confirmation email has been sent to your email address.
				</p>
				</center>
			</div>
		</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>