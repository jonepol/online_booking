<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="css/style.css">
		 <script type="text/javascript" src="javascript/jquery-1.7.1.js"></script>
		 <script type="text/javascript" src="javascript/personalDetail.js">
		 </script>
	 </head>
	 <body>
	 	  <?php include("menu.inc") ?>
		  <div id="main">
			  <div id="content">
				<center>
				<h5>Stage1: Person Detail<h5>
				<form name="personDetail" method="POST" onsubmit="return personal_detail_validation()" action="payment.php">
					<table>
						<tr>
						   <td colspan="2" align='center'><span id= 'errorMessage' class='compulsory'></span><br></td>
						</tr>
						<tr>
							<td class="fieldlabel">Given Name:<span class="compulsory"> *</span></td>
							<td><input type="text" name="givenName" id="givenName"></td>
							<td id="givenNameValidation"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Family Name:<span class="compulsory"> *</span></td>
							<td><input type="text" name="familyName" id="familyName"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Address Line 1:<span class="compulsory"> *</span></td>
							<td><input type="text" name="address1" id="address1" ></td>
						</tr>
						<tr>
							<td class="fieldlabel">Address line 2:&nbsp;&nbsp;</td>
							<td><input type="text" name="address2" id="address2"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Suburb:<span class="compulsory"> *</span></td>
							<td><input type="text" name="suburb" id="suburb"></td>
						</tr>
						<tr>
							<td class="fieldlabel">State:<span class="half-compulsory"> *</span></td>
							<td><input type="text" name="state" id="state"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Postcode:<span class="half-compulsory"> *</span></td>
							<td><input type="text" name= "postcode" id="postcode"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Country:<span class="compulsory"> *</span></td>
							<td><input type="text" name="country" id="country"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Email Address:<span class="compulsory"> *</span></td>
							<td><input type="text" name="emailAddress" id="emailAddress"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Mobile Phone:&nbsp; &nbsp; </td>
							<td ><input type="text" name="mobilePhone" id="mobilePhone"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Business Phone:&nbsp; &nbsp; </td>
							<td><input type="text" name="businessPhone" id="businessPhone"></td>
						</tr>
						<tr>
							<td class="fieldlabel">Work Phone:&nbsp; &nbsp; </td>
							<td><input type="text" name="workPhone" id="workPhone"></td>
						</tr>
						<tr>
						   <td colspan="2"><span >Note: State and postcode are optional fields for booking made from outside Australia</span></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" class="button" value="Stage 2 - Payment Details"></td>
						</tr>
					</table>
				</form>
				</center>
			 </div>
	 	 </div>
	 	 <?php include("footer.inc") ?>
	</body>
</html>