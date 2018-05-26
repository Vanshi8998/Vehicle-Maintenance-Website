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
var url="showroom_brand.php?name="+d;
var aj=new XMLHttpRequest();
aj.open("GET",url,true);
aj.send();

aj.onreadystatechange=function s()
{
	if(aj.readyState==4)
	{
		document.getElementById("brand").innerHTML=aj.responseText;
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
 echo "<center><form method=post action=search_showroom.php>
	<h1 class='head'> <center>Find Vehicle Showroom </h1>

	<center>
	<div id='myCarousel' class='carousel slide  ' data-ride='carousel'>
		<!-- Indicators -->
		<ol class='carousel-indicators'>
			<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
			<li data-target='#myCarousel' data-slide-to='1'></li>

		</ol>


		<div class='carousel-inner'>
			<div class='item active'>
				<img src='car1.jpg' alt='Los Angeles' width='500px' height='200px'>
			</div>

			<div class='item'>
				<img src='car2.jpg' alt='Chicago' width='500px' height='200px'>
			</div>

		</div>

		<a class='left carousel-control' href='#myCarousel' data-slide='prev'>

			<span class='sr-only'>Previous</span>
		</a>
		<a class='right carousel-control' href='#myCarousel' data-slide='next'>

			<span class='sr-only'>Next</span>
		</a>
	</div>

	<br>

<br>
		<p class='head'> Select your vehicle-type :</p> <select name=type onblur='search(this.value)'>
				<option value='A'> --SELECT-- </option>;
				<option value='T'> Two-Wheeler </option>;
				<option value='F'> Four-Wheeler </option>;
			   </select>
<br><br>
		<p class='head'>Select your vehicle brand :</p> <input list='brand' name='brand' autocomplete='off'>
				<datalist id='brand'>
				</datalist>
<br><br>
<button class='btn btn-succes'> Search </button>
</form></center>";
?>

</body>
