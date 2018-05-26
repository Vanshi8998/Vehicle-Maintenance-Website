<style type="text/css">
	td
	{
		color: orange;
	}
	th
	{
		color: #2255ff;

	}
.header-w3l h1 
{
    font-size: 45px;
    color: #2255ff;
    text-shadow: 1px 1px 1px #9a8b89;
    letter-spacing: 4px;
    text-transform: capitalize;
    font-family: 'Satisfy', cursive;
    word-spacing: 7px;
    letter-spacing: 2px;
}

table 
{
    border-collapse: collapse;
    width: 80%;
}

table, td, th 
{
    border: 1px solid white;
    padding:10x;
}
</style>

<?php
	require("user_menu2.php");
	$type=$_REQUEST["type"];
	$ttype=$_REQUEST["ttype"];
	$brand=$_REQUEST["brand"];
	$model=$_REQUEST["model"];
	//echo "<h1>$type $ttype $brand $model</h1>";
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	//$cmd1="SELECT * FROM access WHERE modelid='".$model."' and brandid='".$brand."'";
	$cmd1="SELECT * FROM access WHERE accid=(SELECT accid FROM model WHERE modelid='".$model."' AND brandid='".$brand."')";
	if($rst1=mysqli_query($con,$cmd1))
	{
		if($rows1=mysqli_num_rows($rst1))
		{
			echo "<center>
			<div class='header-w3l'>
				<h1>Matching Accesories Shop</h1>
			</div><br><br><TABLE border='1' cellpadding='10'>
			<tr>
			<th>Name</th>
			<th>Picture</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Time</th>
			<th>Map</th>
			</tr>
			<tr>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			</tr>";
			while($row1=mysqli_fetch_row($rst1))
			{
				$cmd2="SELECT * FROM access where accid='$row1[0]'";
				if($rst2=mysqli_query($con,$cmd2))
				{
					while($row2=mysqli_fetch_row($rst2))
					{
					echo "<tr><td>$row2[3]</td>";
					echo "<td><img height =250 width=250 src='access_pics/".$row2[4]."'></td>";
					echo "<td>$row2[5]</td>";
					echo "<td>$row2[6]</td>";
					echo "<td>$row2[7]</td>";
					echo "<td><iframe height =250 width=250 src='".$row2[8]."'></td></tr>";
					}
				}
			}
			echo "</table><br>";
		}
		else
		{
			echo "Empty Set";
		}
	}
	else
	{
		echo mysqli_error($con);
	}
?>