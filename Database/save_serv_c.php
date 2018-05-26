<?php
	$name=$_POST["name"];
	$pic="Serv_C_pics/".$_FILES["pic"]["name"];
	$temp=$_FILES["pic"]["tmp_name"];
	$typ=$_POST["typ"];
	$brand=$_POST["brand"];
	$adrs=$_POST["adrs"];
	$mp=$_POST["mp"];
	$cont1=$_POST["cont1"];
	$cont2=$_POST["cont2"];
	$cont3=$_POST["cont3"];
	$cont=$cont1.",".$cont2.",".$cont3;
	$tym=$_POST["tym"];
	$rating=$_POST["rating"];
	move_uploaded_file($temp,$pic);
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="INSERT INTO serv_c(type,brand,name,pic,adrs,cont,tym,mp,rating)
	VALUES('$typ','$brand','$name','$pic','$adrs','$cont','$tym','$mp','$rating')";
	if(mysqli_query($con,$cmd))
	{
		echo "Information Added";
	}
?>