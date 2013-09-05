<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd"> 

<html>
	<head>
	 	 <title>Online Travel Agency</title>
	 	 <link href="css/style.css" rel="stylesheet" type="text/css" />
		 <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
		 <script type="text/javascript" src="javascript/jquery-1.7.1.js"></script> 
		 <script type="text/javascript" src="javascript/search.js"></script>
		 <script type='text/javascript' src="javascript/jquery.autocomplete.js"></script>
  
	 </head>
	 <body>
	 	  <?php include("menu.inc") ?>
		  
	 	  <div id="main">
    	
		  <div id="content">
			<center>
			<h5>Flight Search</h5>
			<br>
	 	  	<form id="searchForm" method="POST" action="result.php">
	 	  	<table>
	 	  		<tr>
	 	  			<td width="140px">Enter Origin:</td>
	 	  			<td>
						<input id="origin" name="origin">
	 	  			</td>
	 	  		</tr>
	 	  		
	 	  		<tr>
	 	  			<td width="140px">Enter Destination:</td>
	 	  			<td>
	 	  				<input id="destination" name="destination">
	 	  			</td>
	 	  		</tr>
	 	  	</table>
	 	  	<br>
	 	  	<input class="button" type="submit" value="Search Flights"/>
	 	  </form>
		  </center>
	 	 </div>
	 	 <div id="information">
	 	 </div>
		 </div> <!-- end of main -->	
	 	 <?php include("footer.inc") ?>
	 </body>
</html>