<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel="stylesheet" type="text/css" href="default.css">
	 </head>
	 <body>
	 	  <?php include("menu.inc") ?>
	 	  <div id="content">
	 	  	<form id="searchForm">
	 	  	<table>
	 	  		<tr>
	 	  			<td width="120px">Enter Origin:</td>
	 	  			<td>
	 	  				<input id="origin">
	 	  			</td>
	 	  		</tr>
	 	  		
	 	  		<tr>
	 	  			<td width="120px">Enter Destination:</td>
	 	  			<td>
	 	  				<input id="destination">
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