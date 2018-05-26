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
function search1(d)
{ 
	var url="acc_ttype.php?name="+d;
	var aj=new XMLHttpRequest();
	aj.open("GET",url,true);
	aj.send();
	
	aj.onreadystatechange=function s()
	{
		if(aj.readyState==4)
		{
			document.getElementById("ttype").innerHTML=aj.responseText;
		}
	}
	search3(d);
}

function search2(d2)
{
	if(document.getElementById('r1').checked) 
	{
		var d1=document.getElementById('r1').value;
	}
	else if(document.getElementById('r2').checked) 
	{
		var d1=document.getElementById('r2').value;
	}
	else if(document.getElementById('r3').checked) 
	{
		var d1=document.getElementById('r3').value;
	}
	var url="acc_model.php?name1="+d1+"&name2="+d2; 
	var aj=new XMLHttpRequest();
	aj.open("GET",url,true);
	aj.send();

	aj.onreadystatechange=function s()
	{
		if(aj.readyState==4)
		{
			document.getElementById("model").innerHTML=aj.responseText;
		}
	}
}

function search3(d)
{
	var url="acc_brand.php?name="+d;
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

<center><form method=post action=search_access.php>
<p class='head'> Find Spare Parts/Accessories Shop </p>
<center>
	<div id='myCarousel' class='carousel slide  ' data-ride='carousel'>
		<!-- Indicators -->
		<ol class='carousel-indicators'>
			<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
			<li data-target='#myCarousel' data-slide-to='1'></li>

		</ol>


		<div class='carousel-inner'>
			<div class='item active'>
				<img src='accessories3.jpg' alt='Accessories3' width='500px' height='200px'>
			</div>

			<div class='item'>
				<img src='accessories4.jpg' alt='Accessories4' width='500px' height='200px'>
			</div>

		</div>

		<a class='left carousel-control' href='#myCarousel' data-slide='prev'>

			<span class='sr-only'>Previous</span>
		</a>
		<a class='right carousel-control' href='#myCarousel' data-slide='next'>

			<span class='sr-only'>Next</span>
		</a>
	</div><br><br>
<p class='head'>Select your vehicle-type : </p><select name=type id=type onclick='search1(this.value)'>
				<option value='A'> --SELECT-- </option>;
				<option value='T'> Two-Wheeler </option>;
				<option value='F'> Four-Wheeler </option>;
			   </select>
<br><br>
<div class='head' id=ttype></div>
<p class='head'>Select vehicle brand : </p>
				<select name=brand id=brand onclick='search2(this.value)'>
			   </select>
				<br><br>
				
<p class='head'>Select vehicle model : </p><select name=model id=model>
			   </select>
				<br><br>
<button> Search </button>
</form></center>";
