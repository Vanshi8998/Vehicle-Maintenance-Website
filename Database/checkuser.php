<?php
session_start();
if(isset($_POST["id"]))
{
	$username=$_POST["id"];
	$id=substr($username,4,8);
	$password=sha1(sha1($_POST["password"]));
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="select * from usermaster where userid='$id' and password='$password'";
	$rst=mysqli_query($con, $cmd);
	$rows=mysqli_num_rows($rst);
	if($rows==0)
	{
		header("Location:../Sign_in/index.php?a=0");
	}
	else
	{	
		$row=mysqli_fetch_row($rst);
		if(isset($_POST["rem"]))
		{
			setcookie("username",$row[1],time()+90000000);
		}
		$_SESSION["username"]=$row[1];
		header("Location:user_dashboard.php");
	}
}
?>