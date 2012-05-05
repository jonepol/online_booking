<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	 	 <title>Online Travel Agency</title>
	 	 <link href="css/style.css" rel="stylesheet" type="text/css" />
		 <script src="javascript/result.js" type="text/javascript"></script>
	 </head>
	 <body>
	 	 <?php include("menu.inc") ?>
		 <div id="main">
		 <div id="content">
		 <center>
	 	  	<?php
			require_once "db_setting.inc";
			
			$dbc = new mysqli(DB_HOST_HOME, DB_QUERY_USER, DB_QUERY_PASS, POTI_DB);
			if (mysqli_connect_errno()) {
				echo "Connect Failed<br>";
				exit;
			}
			
			// $link = mysql_connect("rerun.it.uts.edu.au", "potiro", "pcXZb(kL")
				// or die ("Can't connect to database");
			// mysql_select_db("poti", $link);
			
			$origin = $_REQUEST['origin'];
			$destination = $_REQUEST['destination'];
			
			if ($origin != "" || $destination != "") {
				if ($destination == "") {
					$query_string = "select * from flights where from_city='".$origin."';";
				}
				else if ($origin == "") {
					$query_string = "select * from flights where to_city='".$destination."';";
				}
				else {
					$query_string = "select * from flights where from_city='".$origin."' and to_city='".$destination."';";
				}
				$result = $dbc->query($query_string);
				//$result = mysql_query($query_string, $link);
			}
			
			if (mysqli_num_rows($result) > 0)
			{
			
			?>
			
			<form id="selectFlight" name="selectFlight" method="POST" action="booking.php" onSubmit="return isSelected()">
			<table border=0>
			<tr>
			<td>From</td>
			<td>To</td>
			<td>Select</td>
			</tr>
			
			<?php
				while ( $a_row = $result->fetch_assoc()) {
					 print "<tr>\n";
					 print "\t<td>$a_row[from_city]</td>\n";
					 print "\t<td>$a_row[to_city]</td>\n";
					 print "\t<td><input name=\"flightNo\" value=\"$a_row[route_no]\" type=\"checkbox\"
							onClick=\"clearOtherCheckbox(this)\"></td>\n";
					 print "</tr>\n";
				}
				print "</table>\n";
				print "<a href=\"search.php\"><input type=\"button\" value=\"<New Search\")\"></a>\n";
				print "<input type=\"submit\" value=\"Make Booking for Selected Flight\">\n";
				print "</form>";
			}
			else {
				print "No result\n";
			}
			
			?>
		 </center>	
	 	 </div>

		 </div> <!-- end of main -->	
	 	 <?php include("footer.inc") ?>
	 </body>
</html>