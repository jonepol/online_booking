<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<?php
require_once "db_setting.inc";

$dbc = new mysqli(DB_HOST_HOME, DB_QUERY_USER, DB_QUERY_PASS, POTI_DB);
if (mysqli_connect_errno()) {
	echo "Connect Failed<br>";
	exit;
}

$origin_query = "select distinct from_city from flights order by from_city;";
$destination_query = "select distinct to_city from flights order by to_city;";

$origin_result = $dbc->query($origin_query);
$destination_result = $dbc->query($destination_query);

$origin_options = "";
$destination_options = "";

while ($a_row = $origin_result->fetch_assoc()) {
	$origin_options .= "<option value=\"$a_row[from_city]\">$a_row[from_city]</option>";
}

while ($a_row = $destination_result->fetch_assoc()) {
	$destination_options .= "<option value=\"$a_row[to_city]\">$a_row[to_city]</option>";
}

?>  

<html>
	<head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
		 <script src="booking.js" type="text/javascript"></script>
	 </head>
	 <body>
	 	  <?php include("menu.inc") ?>
		  
	 	  <div id="content">
	 	  	<form id="searchForm" method="POST" action="result.php">
	 	  	<table>
	 	  		<tr>
	 	  			<td width="120px">Enter Origin:</td>
	 	  			<td>
						<select id="origin" name="origin">
							<option value="select">Select</option>
							<?php echo $origin_options; ?>
	 	  				</select>
	 	  			</td>
	 	  		</tr>
	 	  		
	 	  		<tr>
	 	  			<td width="120px">Enter Destination:</td>
	 	  			<td>
	 	  				<select id="destination" name="destination">
							<option value="select">Select</option>
							<?php echo $destination_options; ?>
	 	  				</select>
	 	  			</td>
	 	  		</tr>
	 	  	</table>
	 	  	<br>
	 	  	<input type="submit" value="Search Flights"/>
	 	  </form>
	 	 </div>
	 	 <div id="information">
	 	 </div>
	 	 <?php include("footer.inc") ?>
	 </body>
</html>