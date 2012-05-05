<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel='stylesheet' type='text/css' href='css/style.css'>
		 <script type="text/javascript" src="javascript/jquery-1.7.1.js"></script>
		 <script type="text/javascript" src="javascript/searchLink.js"></script>
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 	<div id="main">	
			<div id="content">
				<center>
				<p><h5>All Details Review<h5></p>
				  <table>
					<?php
						session_start();
						//gets personal from seesion 
						$personalDetail = $_SESSION['personalDetail'];

						//prints give name 
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\">Given Name:</td><td>" .$personalDetail['givenName']. "</td>\n";
						print "</tr>\n";
						//prints family name
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\">Family Name:</td><td>" .$personalDetail['familyName']. "</td>\n";
						print "</tr>\n";
						//prints address details
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\">Address:</td><td>" .$personalDetail['address']."</td>\n";
						print "</tr>\n";
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\"></td><td>" .$personalDetail['suburb']."</td>\n";
						print "</tr>\n";
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\"></td><td>" .$personalDetail['state']."</td>\n";
						print "</tr>\n";
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\"></td><td>" .$personalDetail['country']. "</td>\n";
						print "</tr>\n";
						//prints email address
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\">Email:</td><td>" .$personalDetail['emailAddress']. "</td>\n";
						print "</tr>\n";
						//prints  mobile phone
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\">Mobile Phone:</td><td>" .$personalDetail['mobilePhone']. "</td>\n";
						print "</tr>\n";
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\">Work Phone:</td><td>" .$personalDetail['workPhone']. "</td>\n";
						print "</tr>\n";
						print "<tr>\n";
						print "\t<td class=\"fieldlabel\">Business Phone:</td><td>" .$personalDetail['businessPhone']. "</td>\n";
						print "</tr>\n";
						print "</tr>\n";
						print "<tr>\n";
						print "\t<td colspan=2><span class=\"compulsory\">Notes: Credit Card Details Supplied</td>\n";
						print "</tr>\n";
					?>
				</table>
				<p>
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
					<?php
						$booked_flights = $_SESSION['booked_flights'];
						$totalPrice = 0.0;
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
					?>
					<tr>
						<td colspan = 6>Total Price</td>
						<td><?php echo $totalPrice ?></td>
					</tr>
				   </table>
				</p>
				<form  method="POST" action="confirm.php">
					<input type="submit" class="button" value="Stage 4-Confirm Payment" />
				</form>
				</center>
			</div>
	 	</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>