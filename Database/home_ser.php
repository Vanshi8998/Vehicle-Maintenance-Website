<?php	
require("user_menu2.php");
?>
<div style="color: orangered" id="center">
<br><br>
		<center><h1><u>Home Service </u></h1>
		<br><div id="hs2">
		<form name=form1 method="POST" action="h_ser.php">
		<h2>Choose your vehicle-type:-</h2>
		<select name="type" id="hs3">
			<option value="">-- select one --</option>
			<option value="two">Two-Wheeler</option>
			<option value="four">Four-Wheeler</option>
		</select>
		<h2>Choose your locality:-</h2>
		<select name="locality" id="hs3">
			<option value=""><center>-- select one --</center></option>
			<option value="dar_col">Darbhanga Colony</option>
			<option value="allen">Allenganj</option>
			<option value="ashok">Ashok Nagar</option>
			<option value="indra">near Indra Bhawan,Civil Lines</option>
		</select><br><br><br>
		<button class="btn btn-info" id="hs4">SUBMIT</button>
		</form>
		</div></center>
</div>
</body>
</html>