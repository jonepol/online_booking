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
	 	 <link rel='stylesheet' type='text/css' href='css/style.css'>
		 <script type="text/javascript" src="javascript/jquery-1.7.1.js"></script>
		 <script type="text/javascript">
			$().ready(function() {
			$("#contactLink").addClass('current'); 
			$("#homeLink").removeClass('current');
			$("#bookingLink").removeClass('current');
			$("#searchLink").removeClass('current');
});
		 </script>
	 </head>
	 <body>
	 	<?php include("menu.inc"); ?>
	 	<div id="main">	
			<div id="content">
				<h5><center>Your mail is sent sucessfully</center></h5>
			</div>
	 	</div>
	 	<?php include("footer.inc"); ?>
	 </body>
</html>