<?php
require("user_menu.php");
?>
<center><form style="color: orangered" action=save_fuel.php method=post enctype="multipart/form-data">
<h1> Add Fuel Pump </h1><br><br>
Fuel Pump Name 
	<input type=text name="name" required>
	<br><br>
Upload your shop picture
	<input type=file name="pic"><br><br>
Choose your locality
	<select name="loc">
		<option value="dar_col">Darbhanga Colony</option>
		<option value="allen">Allenganj</option>
		<option value="ashok">Ashok Nagar</option>
		<option value="indra">near Indra Bhawan,Civil Lines</option>
	</select>
<br><br>
Address
	<input type=text name="adrs" required><br><br>

Map URL
	<input type=text name="mp"><br><br>
Rating
	<select name="rating">
		<option value="0.5">0.5</option>
		<option value="1.0">1.0</option>
		<option value="1.5">1.5</option>
		<option value="2.0">2.0</option>
		<option value="2.5">2.5</option>
		<option value="3.0">3.0</option>
		<option value="3.5">3.5</option>
		<option value="4.0">4.0</option>
		<option value="4.5">4.5</option>
		<option value="5.0">5.0</option>
	</select>
<br><br>
<button>SUBMIT</button>
</form></center>

	

