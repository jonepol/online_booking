<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
 <?php
	 $to = "Guotong.Zheng-1@student.uts.edu.au";
	 $subject= $_REQUEST['subject'];
	 $headers  = 'MIME-Version: 1.0' . "\r\n";
	 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 $headers .= "From:" . $_REQUEST['emailAddress'] . "\r\n";
	 $body = $_REQUEST['eamilContent'];
	 mail($to,$subject,$body,$headers);
?>
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel='stylesheet' type='text/css' href='default.css'>
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 		
	 	<div id="content">
	 		<p>Your mail is sent sucessfully</p>
	 	</div>
	 	
	 	<div id="information">
	 		
	 	</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>