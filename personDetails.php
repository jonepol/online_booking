<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
		 <script type="text/javascript" src="booking.js">
		 </script>
	 </head>
	 <body>
	 	  <?php include("menu.inc") ?>
	 	  <div id="content">
	 	  	<form name="personDetail" method="POST">
	 			<table>
	 				<tr>
						<td>Given Name:<span style="color:red">*</span></td>
						<td><input type="text" name="givenName"></td>
					</tr>
	 				<tr>
						<td>Family Name:<span style="color:red">*</span></td>
						<td><input type="text" name="familyName"></td>
					</tr>
	 				<tr>
						<td>Address Line 1:</td>
						<td><input type="text" name="address1"></td>
					</tr>
	 				<tr>
						<td>Address line 2:</td>
						<td><input type="text" name="address2"></td>
					</tr>
	 				<tr>
						<td>Suburn:</td>
						<td><input type="text" name="suburn"></td>
					</tr>
	 				<tr>
						<td>Postcode:</td>
						<td><input type="text" name="postCode"></td>
					</tr>
	 				<tr>
						<td>Country:<span style="color:red">*</span></td>
						<td><input type="text" name="country" id="country" onchange ="change_compulsory_filed(this.form.country.value)"></td>
					</tr>
	 				<tr>
						<td>Email Address:<span style="color:red">*</span></td>
						<td><input type="text" name="emailAddress"></td>
					</tr>
	 				<tr>
						<td>Mobile Phone:</td>
						<td><input type="text" name="mobilePhone"></td>
					</tr>
	 				<tr>
						<td>Business Phone:</td>
						<td><input type="text" name="businessPhone"></td>
					</tr>
	 				<tr>
						<td>Working Phone:</td>
						<td><input type="text" name="workingPhone"></td>
					</tr>
	 					<tr><td colspan="2"><input type="submit" value="Stage 2 - Payment Details"></td>
					</tr>
	 			</table>
	 		</form>
	 	 </div>
	 	 <div id="information">
	 	 </div>
	 	 <?php include("footer.inc") ?>
	</body>
</html>