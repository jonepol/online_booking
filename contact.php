<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel='stylesheet' type='text/css' href='default.css'>
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 		
	 	<div id="content">
	 		<form>
				<table>
					<tr>
						<td class="fieldlabel">Subject<span class="compulsory"> *</span></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td class="fieldlabel">Email<span class="compulsory"> *</span></td>
						<td><input type="text"></td>
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
						<td colspan=2 ><input type="submit" value="Contact"></td>
					<tr>
				</table>
			</form>
	 	</div>
	 	
	 	<div id="information">
	 		
	 	</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>