<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<?php
	session_start();
    
	//clears previous personal detail 
	if(!isset($_SESSION['personalDetail'])){
		unset($_SESSION['personalDetail']);
	}
	//get current personal detail 
	$personalDetail = array('givenName' => $_REQUEST['givenName'], 
	                        'familyName' => $_REQUEST['familyName'],
							'address' => $_REQUEST['address1'] . "," .$_REQUEST['address2'],
							'suburb' => $_REQUEST['suburb'],
							'state' => $_REQUEST['state'] . " "  . $_REQUEST['postcode'] ,
							'country' => $_REQUEST['country'],
							'emailAddress' =>  $_REQUEST['emailAddress'],
							'mobilePhone' =>  $_REQUEST['mobilePhone'],
							'workPhone' => $_REQUEST['workPhone'],
							'businessPhone' => $_REQUEST['businessPhone']
							);
    
	//stores current persona detail into session
	$_SESSION['personalDetail'] = $personalDetail;
?>
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="css/style.css">
		 <script type="text/javascript" src="javascript/jquery-1.7.1.js"></script>
		 <script type="text/javascript" src="javascript/payment.js"></script>
	 </head>
	
	<body>
		<?php include("menu.inc") ?>
		<div id="main">
			<div id="content">
				<center>
				<p><h5>Personal Details Review<h5></p>
				<table>
					<?php
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
					?>
				</table>
			<p><h5>Stage2: Payment Details <h5></p>
			<form name="paymentDetail" method="POST" onsubmit="return payment_validation()" action="reviewDetail.php">
				<table>
					<tr>
						<td colspan="2" align='center'><span id= 'errorMessage' class='compulsory'></span><br></td>
					</tr>
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
						<td><input  id="creditCardNo" name="creditCardNo" maxlength="12" size="12"/></td>
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
						<td colspan="2" align="center"><input type="submit" class="button" value="Stage 3 - Review Bookings and Details"/></td>
					</tr>
				</table>
			</form>
			</center>
		 </div>
	 </div>
	 <?php include("footer.inc") ?>
	</body>
	 
</html>