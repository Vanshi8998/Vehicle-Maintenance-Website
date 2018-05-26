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
	$loc=$_REQUEST["loc"];
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="SELECT * FROM fuel WHERE loc='".$loc."'";
	if($rst=mysqli_query($con,$cmd))
	{
		if($rows=mysqli_num_rows($rst))
		{
			echo "<center>
			<div class='header-w3l'>
				<h1>Matching Fuel Pumps</h1>
			</div><br><br><TABLE border='1' cellpadding='10'>
			<tr>
			<th><center>Name</th>
			<th><center>Picture</th>
			<th><center>Address</th>
			<th><center>Map</th>
			</tr>
			<tr>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			</tr>";
			while($row=mysqli_fetch_row($rst))
			{
				echo "<tr><td><center>$row[1]</td>";
				echo "<td><img height =250 width=250 src='fuel_pics/".$row[2]."'></td>";
				echo "<td><center>$row[4]</td>";
				echo "<td><iframe height =250 width=250 src='".$row[5]."'></td></tr>";
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