<?php
	$name=$_POST["name"];
	$pic="Fuel_pics/".$_FILES["pic"]["name"];
	$temp=$_FILES["pic"]["tmp_name"];
	$loc=$_POST["loc"];
	$adrs=$_POST["adrs"];
	$mp=$_POST["mp"];
	$rating=$_POST["rating"];
	move_uploaded_file($temp,$pic);
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="INSERT INTO fuel(loc,name,pic,adrs,mp,rating)
	VALUES('$loc','$name','$pic','$adrs','$mp','$rating')";
	if(mysqli_query($con,$cmd))
	{
		echo "Information Added";
	}
?>