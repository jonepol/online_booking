<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">

<?php
	session_start();
	//clear all booked_flight from session
	unset($_SESSION['booked_flights']);
?>  

<html>
	<head>
		<title>Online Travel Agency</title>
	 	<link rel='stylesheet' type='text/css' href='css/style.css'>
	</head>
	<body>
		<?php include("menu.inc") ?>
		<div id="main">
			<div id="content">
				<center>
				<p><h5>You have deleted all flights!<h5></p>
				<a href="search.php"><input type="button" class="button" value="Book More Flights"></a>
				</center>
			</div>
		</div>
	 	<?php include("footer.inc") ?>
	</body>
</html>