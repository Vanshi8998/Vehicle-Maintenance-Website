<?php
$type=$_REQUEST["name"];
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
if($name=='A')
{
	$cmd="select DISTINCT loc from lg_shp where type='$type'";
}
else
{
	$cmd="select DISTINCT loc from lg_shp where type='$type'";
}

$rst=mysqli_query($con,$cmd);
while($row=mysqli_fetch_array($rst))
{
	echo "<option value=\"".$row[0]."\">";
}
?>