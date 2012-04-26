<!DCOTYPE html PUBLIC "-//W3C//DTD HTML 4.01/EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
	 <head>
	 	 <title>Online Travel Agency</title>
	 	 <link rel='stylesheet' type='text/css' href='default.css'>
	 </head>
   <script type="text/javascript">
   	 function enableSeatType(row){
   	 	 if(document.getElementById("seat" + row).checked == true){
   	 	 	 document.getElementById("child" + row).disabled = false;
   	 	 	 document.getElementById("wheelchair" + row).disabled = false;
   	 	 	 document.getElementById("specialDiet" + row).disabled = false;
   	   }else{
   	   	 document.getElementById("child" + row).disabled = true;
   	 	 	 document.getElementById("wheelchair" + row).disabled = true;
   	 	 	 document.getElementById("specialDiet" + row).disabled = true;
   	 	 	 document.getElementById("child" + row).checked = false;
   	 	 	 document.getElementById("wheelchair" + row).checked = false;
   	 	 	 document.getElementById("specialDiet" + row).checked = false;
   	   }
   	 }
   	 
   </script>
	 <body>
	 	 <?php include("menu.inc") ?>
	 	 <div id="content">
	 	 		<p>Flight Detail:</p>
	   <br>
	   <form name="seats" method="POST">
	   	 <table>
	   	   <tr>
	   	     <td>Seat</td>
	   	     <td>Child</td>
	   	     <td>Wheelchair</td>
	   	     <td>Special Diet</td>
	   	   </tr>
	   	   <tr>
	   	     <td><input type="checkbox" name="seats" id="seatOne" onclick="enableSeatType('One')"></td>
	   	     <td><input type="checkbox" name="seatTypeOne" id="childOne" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeOne" id="wheelchairOne" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeOne" id="specialDietOne" disabled></td>
	   	   </tr>
	   	   <tr>
	   	     <td><input type="checkbox" name="seats" id="seatTwo" onclick="enableSeatType('Two')"></td>
	   	     <td><input type="checkbox" name="seatTypTwo" id="childTwo" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeTwo" id="wheelchairTwo" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeTwo" id="specialDietTwo" disabled></td>
	   	   </tr>
	   	   <tr>
	   	     <td><input type="checkbox" name="seats" id="seatThree" onclick="enableSeatType('Three')"></td>
	   	     <td><input type="checkbox" name="seatTypeThree" id="childThree" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeThree" id="wheelchairThree" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeThree" id="specialDietThree" disabled></td>
	   	   </tr>
	   	   <tr>
	   	     <td><input type="checkbox" name="seats" id="seatFour" onclick="enableSeatType('Four')"></td>
	   	     <td><input type="checkbox" name="seatTypeFour" id="childFour" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFour" id="wheelchairFour" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFour" id="specialDietFour" disabled></td>
	   	   </tr>
	   	   <tr>
	   	     <td><input type="checkbox" name="seats" id="seatFive" onclick="enableSeatType('Five')"></td>
	   	     <td><input type="checkbox" name="seatTypeFive" id="childFive" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFive" id="wheelchairFive" disabled></td>
	   	     <td><input type="checkbox" name="seatTypeFive" id="specialDietFive" disabled></td>
	   	   </tr>
	   	 </table>
	   </form>	   
	 	</div>
	 	<div id="information">
	 	</div>
	 	<?php include("footer.inc") ?>
	 </body>

</html>