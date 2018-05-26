<?php
$str=$_GET["name"];
$name=substr($str,0,1);
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
if($name=='A')
{
	$cmd="select name from brand where accid='0'";
}
else
{
	$cmd="select name from brand";
}

$rst=mysqli_query($con,$cmd);
while($row=mysqli_fetch_array($rst))
{
	echo "<option value=\"".$row[0]."\">";
}
?>