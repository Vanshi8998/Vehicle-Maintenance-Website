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
		header("Location:admin.php?a=1;");
	}
	else
	{	
		if(isset($_POST["rem"]))
		{
			setcookie("userid",$id,time()+9900000000);
		}
		$_SESSION["userid"]=$id;
		$row=mysqli_fetch_row($rst);
		header("Location:admin2.php?name=".$row[1]);
	}
}
?>