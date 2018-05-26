<?php
$str=$_GET["name"];
$name=substr($str,0,1);
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
if($name=='A')
{
	$cmd="select DISTINCT brand from serv_c where type='$name'";
}
else
{
	$cmd="select DISTINCT brand from showroom where type='$name'";
}

$rst=mysqli_query($con,$cmd);
while($row=mysqli_fetch_array($rst))
{
	echo "<option value=\"".$row[0]."\">";
}
?>