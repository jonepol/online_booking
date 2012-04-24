<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
	 </head>
	 <body>
	 	  <?php include("menu.inc") ?>
	 	  <div id="content">
	 	  	<form name="personDetail" method="POST">
	 			<table>
	 				<tr><td>Given Name:</td><td><input type="text" name="givenName"></td></td></tr>
	 				<tr><td>Family Name:</td><td><input type="text" name="familyName"></td></td></tr>
	 				<tr><td>Address Line 1:</td><td><input type="text" name="address1"></td></td></tr>
	 				<tr><td>Address line 2:</td><td><input type="text" name="address2"></td></td></tr>
	 				<tr><td>Suburn:</td><td><input type="text" name="suburn"></td></td></tr>
	 				<tr><td>Postcode:</td><td><input type="text" name="postCode"></td></td></tr>
	 				<tr><td>Country:</td><td><input type="text" name="country"></td></td></tr>
	 				<tr><td>Email Address:</td><td><input type="text" name="emailAddress"></td></td></tr>
	 				<tr><td>Mobile Phone:</td><td><input type="text" name="mobilePhone"></td></td></tr>
	 				<tr><td>Business Phone:</td><td><input type="text" name="businessPhone"></td></td></tr>
	 				<tr><td>Working Phone:</td><td><input type="text" name="workingPhone"></td></td></tr>
	 				<tr><td colspan="2"><input type="submit" value="Stage 2 - Payment Details"></></td></tr>
	 			</table>
	 		</form>
	 	 </div>
	 	 <div id="information">
	 	 </div>
	 	 <?php include("footer.inc") ?>
	</body>
</html>