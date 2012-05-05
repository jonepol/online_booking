<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link href="css/style.css" rel="stylesheet" type="text/css" />
		 <script type="text/javascript" src="javascript/jquery-1.7.1.js"></script>
		 <script src="javascript/contact.js" type="text/javascript"></script>
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 	<div id="main">	
			<div id="content">
				<center>
				<form method="POST" onsubmit="return contact_validation()" action ="sentemail.php">
					<table>
						<tr>
							<td class="fieldlabel">Subject<span class="compulsory"> *</span></td>
							<td><input id="subject" name="subject" type="text"></td>
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
				</center>
			</div>
		</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>
