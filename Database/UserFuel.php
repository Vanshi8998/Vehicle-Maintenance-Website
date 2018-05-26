<?php
require("user_menu2.php");
?>

<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="style.css" rel="stylesheet">
	<script src="../jquery/jquery.min.js"></script>
	<script src="../javascript/bootstrap.min.js"></script>

<style>
.head
{
color:goldenrod;
	font-size:25px;
	font-family: "Arial Narrow";

}

.mar
{
	margin-left:400px;

}
</style>

</head>

<center><form method=post action=search_fuel.php>
<p class='head'> Find Fuel Pump </p>
<center>
	<div id='myCarousel' class='carousel slide  ' data-ride='carousel'>
		<!-- Indicators -->
		<ol class='carousel-indicators'>
			<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
			<li data-target='#myCarousel' data-slide-to='1'></li>
			<li data-target='#myCarousel' data-slide-to='2'></li>

		</ol>


		<div class='carousel-inner'>
			<div class='item active'>
				<img src='fuel1.jpg' alt='fuel1' width='500px' height='200px'>
			</div>

			<div class='item'>
				<img src='fuel2.jpg' alt='fuel2' width='500px' height='200px'>
			</div>

			<div class='item'>
				<img src='fuel3.jpg' alt='fuel3' width='500px' height='200px'>
			</div>

		</div>

		<a class='left carousel-control' href='#myCarousel' data-slide='prev'>

			<span class='sr-only'>Previous</span>
		</a>
		<a class='right carousel-control' href='#myCarousel' data-slide='next'>

			<span class='sr-only'>Next</span>
		</a>
	</div><br><br>
<p class='head'>Select your locality :  </p><select name=loc>
<?php
	$con=mysqli_connect("localhost","root","","vehicle_maintenance");
	$cmd="select DISTINCT loc from fuel";
	$rst=mysqli_query($con,$cmd);
	while($row=mysqli_fetch_array($rst))
	{
		echo "<option value='$row[0]'>$row[0]</option>";
	}
?>
</select>			
<br><br><br>
<button> Search </button>
</form></center>