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
    width: 78%;
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
	$loc=$_REQUEST["loc"];
	$hs=$_REQUEST["hs"];
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="SELECT * FROM lg_shp WHERE type='".$type."' and loc='".$loc."' and hserv='".$hs."'";
	if($rst=mysqli_query($con,$cmd))
	{
		if($rows=mysqli_num_rows($rst))
		{
			echo "<center>
			<div class='header-w3l'>
				<h1>Matching Local Garages</h1>
			</div><br><br><TABLE border='1' cellpadding='10'>
			<tr>
			<th><center>Name</th>
			<th><center>Picture</th>
			<th><center>Address</th>
			<th><center>Contact</th>
			<th><center>Time</th>
			<th><center>Map</th>
			</tr>
			<tr>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			<th><br></th>
			</tr>";
			while($row=mysqli_fetch_row($rst))
			{
				echo "<tr><td><center>$row[4]</td>";
				echo "<td><img height =250 width=250 src='".$row[5]."'></td>";
				echo "<td><center>$row[6]</td>";
				echo "<td><center>$row[7]</td>";
				echo "<td><center>$row[8]</td>";
				echo "<td><iframe height =250 width=250 src='".$row[9]."'></td></tr>";
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