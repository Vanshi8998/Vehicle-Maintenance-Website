<?php
require("user_menu.php");
?>
<center><form style="color: orangered" method=post action=save_model.php>
<h1> Add Model </h1>
<br><br>

<?php
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="SELECT * FROM access";
	$rst=mysqli_query($con,$cmd);
	echo 'Select Shop Name :<select name="acc_id">';
		while($row=mysqli_fetch_row($rst))
			{
				echo'<option value="'.$row[0].'">'.$row[3].'</option>';
			}
	echo '</select><br><br>';
	$cmd="SELECT * FROM brand";
	$rst=mysqli_query($con,$cmd);
	echo 'Select Brand Name :<select name="brand_id">';
		while($row=mysqli_fetch_row($rst))
			{
				echo'<option value="'.$row[0].'">'.$row[2].'</option>';
			}
	echo '</select><br><br>';
?>
Model name : <input type=text name=model>	
<br><br>
<button> Add </button>
</form></center>