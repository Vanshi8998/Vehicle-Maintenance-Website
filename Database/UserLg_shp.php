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

<Script>
function search(d)
{
var url="lg_shp_loc.php?name="+d; 
var aj=new XMLHttpRequest();
aj.open("GET",url,true);
aj.send();

aj.onreadystatechange=function s()
{
	if(aj.readyState==4)
	{
		document.getElementById("loc").innerHTML=aj.responseText;
	}
}
}
</script>

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

<?php
echo "<center><form method=post action=search_lgshp.php>
		<p class='head'> Find Local Garage and Repair Shop </p></h1>
		
		<center>
	<div id='myCarousel' class='carousel slide  ' data-ride='carousel'>
		<!-- Indicators -->
		<ol class='carousel-indicators'>
			<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
			<li data-target='#myCarousel' data-slide-to='1'></li>

		</ol>


		<div class='carousel-inner'>
			<div class='item active'>
				<img src='garage3.jpg' alt='garage3' width='500px' height='200px'>
			</div>

			<div class='item'>
				<img src='garage4.jpg' alt='garage4' width='500px' height='200px'>
			</div>

		</div>

		<a class='left carousel-control' href='#myCarousel' data-slide='prev'>

			<span class='sr-only'>Previous</span>
		</a>
		<a class='right carousel-control' href='#myCarousel' data-slide='next'>

			<span class='sr-only'>Next</span>
		</a>
	</div><br><br>
		<p class='head'>Select your vehicle-type : </p><select name=type onblur='search(this.value)'>
				<option value='A'> --SELECT-- </option>;
				<option value='T'> Two-Wheeler </option>;
				<option value='F'> Four-Wheeler </option>;
				<option value='B'> Both </option>;
			   </select>
		<br><br>
		<p class='head'>Select your locality : </p><input list='loc' name='loc' autocomplete='off'>
				<datalist id='loc'>
				</datalist>
<br><br>";
?>
<p class='head'>Want Home Service : </p><select name=hs>
			<option value=Y> Yes </option>
			<option value=N> No </option>
		    </select>
<br><br>
<button> Search </button>
</form></center>