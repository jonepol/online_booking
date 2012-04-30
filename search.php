<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd"> 

<html>
	<head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
		 <link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
		 <script type="text/javascript" src="jquery-1.7.1.js"></script>
		 <script type='text/javascript' src="jquery.autocomplete.js"></script>
		 <script type="text/javascript" src="search.js"></script>
	 </head>
	 <body>
	 	  <?php include("menu.inc") ?>
		  
	 	  <div id="content">
	 	  	<form id="searchForm" method="POST" action="result.php">
	 	  	<table>
	 	  		<tr>
	 	  			<td width="120px">Enter Origin:</td>
	 	  			<td>
						<input id="origin" name="origin">
	 	  			</td>
	 	  		</tr>
	 	  		
	 	  		<tr>
	 	  			<td width="120px">Enter Destination:</td>
	 	  			<td>
	 	  				<input id="destination" name="destination">
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