<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<?php
	 session_start();
	 $personalDetail = $_SESSION['personalDetail'];
	 $to = $personalDetail['emailAddress'];
	 $subject="Flight Booking Confirmation";
	 $body = "Your Booking has been approved\nFollowing is the detail of you booking.";
	  if (mail($to, $subject, $body))
	  {
		echo("<p>Message successfully sent!</p>");
	  } 
	  else
	  {
	   echo("<p>Message delivery failed...</p>");
	  }
?>
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel='stylesheet' type='text/css' href='default.css'>
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 		
	 	<div id="content">
            <h2>THANK YOU!</h2>
			<p>Thank You!<br>
			Your booking has been completed and a confirmation email has been sent to your email address.
			</p>
	 	</div>

	 	<div id="information">
	 	</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>