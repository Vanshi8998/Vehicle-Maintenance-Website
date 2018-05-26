<?php
$ttype=$_REQUEST["name1"];
$brand=$_REQUEST["name2"];
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
if($ttype=='B' || $ttype=='S' )
{
	$cmd="select * from model where ttype='$ttype' and brandid='$brand'";
}
else
{
	echo "<option value='A'>Choose type</option>";
}
if($rst=mysqli_query($con,$cmd))
{
	while($row=mysqli_fetch_array($rst))
	{
		echo "<option value='".$row[0]."'>$row[3]</option>";
	}
}
?>


