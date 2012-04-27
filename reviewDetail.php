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
			<p><h4>All Details Review<h4></p>
			  <table>
			    <?php
				    session_start();
					//gets personal from seesion 
					$personalDetail = $_SESSION['personalDetail'];

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
					print "</tr>\n";
					print "</tr>\n";
					print "<tr>\n";
					print "\t<td colspan=2><span class=\"compulsory\">Notes: Credit Card Details Supplied</td>\n";
					print "</tr>\n";
				?>
			</table>
			<form>
				<input type="submit" value="Stage 4-Confirm Payment" />
			</form>
	 	</div>

	 	<div id="information">
	 	</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>