<center><?php	
require("user_menu.php");
$con=mysqli_connect("localhost","root","","vehicle_maintenance");
$cmd="select * from usermaster";
$rst=mysqli_query($con, $cmd);
echo "<table style='color:orangered' border=1 cellpadding=10 cellspacing=0>";
echo "<tr><th> ID </th><th> Username </th><th>Name </th><th>gender</th><th>DOB</th><th> Contact </th><th> Email </th><th> City </th><th> Registered On </th><th> Action </th></tr>";
while($row=mysqli_fetch_array($rst))
{
	echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>user".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[3]."</td>";
	echo "<td>".$row[4]."</td>";
	echo "<td>".$row[5]."</td>";
	echo "<td>".$row[6]."</td>";
	echo "<td>".$row[7]."</td>";
	echo "<td>".$row[8]."</td>";
	echo "<td><a href=delete.php?did=$row[0]>DELETE</a></td>";
	echo "</tr>";
}
echo "</table>";
?>