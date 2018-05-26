<?php
require("user_menu2.php");
if(isset($_REQUEST["name"]))
{
	date_default_timezone_set('Asia/Kolkata');
	$name=$_POST["name"];
	$pass=sha1(sha1($_POST["password"]));
	$gen=$_POST["gender"];
	$dob=$_POST["dob"];
	if(isset($_REQUEST["contact"]))
	{
		$flag=1;
		$cont=$_REQUEST["contact"];
	}
	else
		$flag=0;
	$email=$_POST["email"];
	$city=$_POST["city"];

	$D=date("Y-m-d h:i:s");		//Date time of registration
	if($con=mysqli_connect("localhost","root","","vehicle_maintenance"))
	if($flag==0)
	{
		$cmd="INSERT INTO usermaster (name,password,gender,dob,email,city,regdate)
		VALUES ('$name','$pass','$gen','$dob','$email','$city','$D')";
	}
	else
	{
		$cmd="INSERT INTO usermaster (name,password,gender,dob,cont,email,city,regdate)
		VALUES ('$name','$pass','$gen','$dob','$cont','$email','$city','$D')";
	}

	if(mysqli_query($con,$cmd))
	{
		echo "<body style='color:goldenrod'><center><br><br><br><br><br><h1>Thanks for registration</h1>";
		$cmd="SELECT userid FROM usermaster where name='$name'";
		if($rst=mysqli_query($con,$cmd))
		{
			while($row=mysqli_fetch_row($rst))
			{
				echo "<br><h2>Your Username is user".$row[0]."</h2><br><h3>Use it to login to your account</h3></center>";
			}
			
		}
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>