<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
		 <script type="text/javascript" src="payment.js"></script>
	 </head>
	
	<body>
		<?php include("menu.inc") ?>
		<div id="content">
			<p><h4>Personal Details Review<h4></p>
		    <table>
			    <?php
				    //prints give name 
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\">Given Name:</td><td>" .$_REQUEST['givenName']. "</td>\n";
					print "</tr>\n";
                    //prints family name
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\">Family Name:</td><td>" .$_REQUEST['familyName']. "</td>\n";
					print "</tr>\n";
                    //prints address details
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\">Address:</td><td>" .$_REQUEST['address1']. "," . $_REQUEST['address2']."</td>\n";
					print "</tr>\n";
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\"></td><td>" .$_REQUEST['suburb']."</td>\n";
					print "</tr>\n";
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\"></td><td>" .$_REQUEST['state']. "  " . $_REQUEST['postcode']. "</td>\n";
					print "</tr>\n";
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\"></td><td>" .$_REQUEST['country']. "</td>\n";
					print "</tr>\n";
					//prints email address
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\">Email:</td><td>" .$_REQUEST['emailAddress']. "</td>\n";
					print "</tr>\n";
					//prints  mobile phone
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\">Mobile Phone:</td><td>" .$_REQUEST['mobilePhone']. "</td>\n";
					print "</tr>\n";
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\">Work Phone:</td><td>" .$_REQUEST['workPhone']. "</td>\n";
					print "</tr>\n";
					print "<tr>\n";
					print "\t<td class=\"fieldlabel\">Business Phone:</td><td>" .$_REQUEST['businessPhone']. "</td>\n";
					print "</tr>\n";
				?>
			<table>
		<p><h4>Payment Details <h4></p>
		<form name="paymentDetail" method="POST" onsubmit="return payment_validation()" action="reviewDetail.php">
			<table>
				<tr>
					<td class="fieldlabel">Credit Card Type: <span class="compulsory"> *</span></td>
					<td>
						<select>
							<Option>Visa</Option>
							<Option>Diners</Option>
							<Option>Mastercard</Option>
							<Option>Amex</Option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="fieldlabel">Credit Card Number: <span class="compulsory"> *</span></td>
					<td><input  id="creditCardNo" name="creditCardNo"/></td>
				</tr>
				<tr>
					<td class="fieldlabel">Name on Credit Card: <span class="compulsory"> *</span></td>
					<td><input  id="ownerName" name="ownerName"/></td>
				</tr>
				<tr>
					<td class="fieldlabel">Expiry Date: <span class="compulsory"> *</span></td>
					<td>
						<select name="expiryMonth" id="expiryMonth">
							<Option value = 0>01</Option>
							<Option value = 1>02</Option>
							<Option value = 2>03</Option>
							<Option value = 3>04</Option>
							<Option value = 4>05</Option>
							<Option value = 5>06</Option>
							<Option value = 6>07</Option>
							<Option value = 7>08</Option>
							<Option value = 8>09</Option>
							<Option value = 9>10</Option>
							<Option value = 10>11</Option>
							<Option value = 11>12</Option>
						</select>
						<input id="expiryYear" name="expiryYear" maxlength="4" size="4"/>
					</td>
				</tr>
				<tr>
					<td class="fieldlabel">Security Code: <span class="compulsory"> *</span></td>
					<td><input id="securityCode" name="securityCode" maxlength="3" size="3"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Stage 3 - Review Bookings and Details"/></td>
				</tr>
			</table>
		</form>
	 </div>
	 <div id="information">
	 </div>
	 <?php include("footer.inc") ?>
	</body>
	 
</html>