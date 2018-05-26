<?php
require("user_menu.php");
?>
<center><form style="color: orangered" method=post action=save_brand.php>
<h1> Add Brand </h1>
<br><br>
Select Shop Name :
<?php
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="SELECT * FROM access";
	$rst=mysqli_query($con,$cmd);
	echo '<select name="acc_id">';
		while($row=mysqli_fetch_row($rst))
			{
				echo'<option value="'.$row[0].'">'.$row[3].'</option>';
			}
	echo '</select><br><br>';
?>
Brand-type : <select name=type>
				<option value='T'> Two-Wheeler </option>;
				<option value='F'> Four-Wheeler </option>;
			   </select>
			   <br><br>
Brand name : <input type=text name=brand>	
<br><br>
<button> Add </button>
</form></center>