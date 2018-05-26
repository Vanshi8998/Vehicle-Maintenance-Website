<?php
	$acc_id=$_REQUEST["acc_id"];
	$name=$_REQUEST["brand"];
	$type=$_REQUEST["type"];
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="INSERT INTO brand(accid,name,type) VALUES('$acc_id','$name','$type')";
	if(mysqli_query($con,$cmd))
	{
		echo "Information Added";
	}
?>