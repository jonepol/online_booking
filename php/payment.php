<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
	 </head>
	
	<body>
		<?php include("menu.php") ?>
		<div id="content">
			<p>personal detail goes here</p>
		
		<form name="paymentDetail" method="POST">
			<table>
				<tr>
					<td>Credit Card Type*: </td>
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
					<td>Credit Card Number*: </td>
					<td><input name="creditCardNo"/></td>
				</tr>
				<tr>
					<td>Name on Credit Card*: </td>
					<td><input name="ownerName"/></td>
				</tr>
				<tr>
					<td>Expiry Date*: </td>
					<td>
						<select>
							<Option>01</Option>
							<Option>02</Option>
							<Option>03</Option>
							<Option>04</Option>
							<Option>05</Option>
							<Option>06</Option>
							<Option>07</Option>
							<Option>08</Option>
							<Option>09</Option>
							<Option>10</Option>
							<Option>11</Option>
							<Option>12</Option>
						</select>
						<input name="expiryYear" maxlength="2" size="2"/>
					</td>
				</tr>
				<tr>
					<td>Security Code*: </td>
					<td><input name="securityCode" maxlength="3" size="3"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Stage 3 - Review Bookings and Details"/></td>
				</tr>
			</table>
		</form>
	 </div>
	 <div id="information">
	 </div>
	 <?php include("footer.php") ?>
	</body>
	 
</html>