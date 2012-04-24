<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
		 <script src="booking.js" type="text/javascript"></script>
	 </head>
	 <body>
	 	 <?php include("menu.inc") ?>
	 	 <div id="content">
	 	  	<?php
			require_once "db_setting.inc";
			
			$dbc = new mysqli(DB_HOST, DB_QUERY_USER, DB_QUERY_PASS, POTI_DB);
			if (mysqli_connect_errno()) {
				echo "Connect Failed<br>";
				exit;
			}
			
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
					$query_string = "select * from routes where from_city='".$origin."' and to_city='".$destination."';";
				}
				$result = $dbc->query($query_string);
			}
			
			if (mysqli_num_rows($result) > 0)
			{
				print "<table border=0>";
				while ( $a_row = $result->fetch_row()) {
					 print "<tr>\n";
					 foreach ($a_row as $field)
						 print "\t<td>$field</td>\n";
					 print "</tr>";
				}
				print "</table>";
			}
			else {
				print "no result";
			}
			
			?>
	 	 </div>
	 	 <div id="information">
	 	 </div>
	 	 <?php include("footer.inc") ?>
	 </body>
</html>