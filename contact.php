<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel='stylesheet' type='text/css' href='default.css'>
		 <script src="contact.js" type="text/javascript"></script>
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 		
	 	<div id="content">
	 		<form method="POST" onsubmit="return contact_validation()" action ="sentemail.php">
				<table>
					<tr>
						<td class="fieldlabel">Subject<span class="compulsory"> *</span></td>
						<td><input id="subject" name="subject"type="text"></td>
					</tr>
					<tr>
						<td class="fieldlabel">Email<span class="compulsory"> *</span></td>
						<td><input id="emailAddress" name="emailAddress" type="text"></td>
					</tr>
					<tr>
						<td class="fieldlabel">First Name&nbsp;&nbsp;&nbsp;</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td class="fieldlabel">Last Name&nbsp;&nbsp;&nbsp;</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td class="fieldlabel">Content<span class="compulsory"> *</span></td>
						<td><textarea name="eamilContent" id="emailContent" cols= 40 rows=8></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Contact"></td>
					<tr>
				</table>
				<input type="hidden" id="isPostBack" value="flase">
			</form>
			<p>Note:Your email will be sent to the website owner UTS email: <br>
			Guotong.Zheng-1@student.uts.edu.au	
			</p>
	 	</div>
	 	<div id="information">	
	 	</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>
