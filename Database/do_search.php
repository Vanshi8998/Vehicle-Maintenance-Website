<?php

$username=$_GET["userid"];
$id=substr($username,4,8);
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
$cmd="select userid,name,gender,dob,cont,email,city,regdate from usermaster where userid='$id'";
$rst=mysqli_query($con,$cmd);
$row=mysqli_fetch_array($rst,MYSQL_ASSOC);
echo json_encode($row);

?>