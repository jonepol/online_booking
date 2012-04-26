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
	 	  	<form name="personDetail" method="POST" onsubmit="return personal_Detail_Validation()">
	 			<table>
	 				<tr>
						<td class="fieldlabel">Given Name:</span></td>
						<td><input type="text" id="givenName"><span class="compulsory"> *</span></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Family Name:</td>
						<td><input type="text" id="familyName"><span class="compulsory"> *</span></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Address Line 1:</td>
						<td><input type="text" id="address1"><span class="compulsory"> *</span></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Address line 2:</td>
						<td><input type="text" id="address2"></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Suburb:</td>
						<td><input type="text" id="suburb"><span class="half-compulsory"> *</span></td>
					</tr>
					<tr>
						<td class="fieldlabel">State:</td>
						<td><input type="text" id="state"><span class="half-compulsory"> *</span></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Postcode:</td>
						<td><input type="text" id="postcode"><span class="half-compulsory"> *</span></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Country:</td>
						<td><input type="text" id="country" id="country"><span class="compulsory"> *</span></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Email Address:</td>
						<td><input type="text" id="emailAddress" ><span class="compulsory"> *</span></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Mobile Phone:</td>
						<td ><input type="text" id="mobilePhone"></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Business Phone:</td>
						<td><input type="text" id="businessPhone"></td>
					</tr>
	 				<tr>
						<td class="fieldlabel">Working Phone:</td>
						<td><input type="text" id="workingPhone"></td>
					</tr>
					<tr>
			           <td colspan="2"><span class="compulsory">note: State and postcode are optional fields for booking made from outside Australia</span></td>
					</tr>
					<tr>
	 					<td colspan="2" align="center"><input type="submit" value="Stage 2 - Payment Details"></td>
					</tr>
	 			</table>
	 		</form>
	 	 </div>
	 	 <div id="information">
	 	 </div>
	 	 <?php include("footer.inc") ?>
	</body>
</html>