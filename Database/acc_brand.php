<?php
$type=$_REQUEST["name"];
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
if($type=='T')
{
	$cmd="select * from brand where type='$type'";
}
else if($type=='F')
{
	$cmd="select * from brand where type='$type'";
}
else
{
	echo "<option value='A'>Choose type</option>";
}
if($rst=mysqli_query($con,$cmd))
{
	echo "<option value='A'>--Select--</option>";
	while($row=mysqli_fetch_array($rst))
	{
		echo "<option value='".$row[0]."'>$row[2]</option>";
	}
}
?>


