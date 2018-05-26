<?php
	$acc_id=$_REQUEST["acc_id"];
	$brand_id=$_REQUEST["brand_id"];
	$name=$_REQUEST["model"];
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="INSERT INTO model(accid,brandid,name) VALUES('$acc_id','$brand_id','$name')";
	if(mysqli_query($con,$cmd))
	{
		echo "Information Added";
	}
?>