<?php
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
$a=$_GET["did"];
$cmd="delete from usermaster where userid='$a'";
if(mysqli_query($con,$cmd))
{
	echo "Record is deleted";
}
?>