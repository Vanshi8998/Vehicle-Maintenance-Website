<?php
require("user_menu.php");
?>
<style type="text/css">
.header-w3l h1 
{
    font-size: 50px;
    color: #2255ff;
    text-shadow: 1px 1px 1px #9a8b89;
    letter-spacing: 4px;
    text-transform: capitalize;
    font-family: 'Satisfy', cursive;
    word-spacing: 7px;
    letter-spacing: 2px;
}
.field
{
	font-size: 30px;
	color: orange;
}
.options
{
	height: 30px;
	font-size: 20px;
	color: black;
}
.box
{
	border-radius: 50px;
	padding: 15px;
	width: 800px;
	background-color: rgba(50,150,255,0.3);
}
</style>
<Script>
function search(d)
{
var url="allbrand.php?name="+d; 
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
<body background="../images/bg1.jpg">
<center><form action=save_showroom.php method=post enctype="multipart/form-data">
		<div class="header-w3l">
			<h1>Add Your Showroom</h1>
		</div><br>
	<div class="box">	
<div class="field">Showroom Name&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="name" required></div> 
	<br>
	<div class="field">Upload your showroom picture&nbsp;:&nbsp;
	<input class="options" type="text" name="pic"></div><br> <!-- Change type=text to type=file -->

<?php
	echo "<div class='field'>Vehicle-type associated with&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<select class='options' name=type onblur='search(this.value)'>
				<option value='A'> --SELECT-- </option>;
				<option value='T'> Two-Wheeler </option>;
				<option value='F'> Four-Wheeler </option>;
			   </select></div><br>
		<div class='field'>Brand dealig with&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
		<input class='options' list='brand' name='brand' autocomplete='off'>
				<datalist id='brand'>
				</datalist></div><br>";
?>
<div class="field">Address&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="adrs" required></div><br>
<div class="field">Map URL&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="mp"></div><br>
<div class="field">Contact No.&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="cont1" required><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="cont2" ><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="cont3" ></div><br>
<div class="field">Timings&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; 
	<input class="options" type=text name="tym" required>
	</div><br>
<div class="field">Rating&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<select class="options" name="rating">
		<option value="0.5">0.5</option>
		<option value="1.0">1.0</option>
		<option value="1.5">1.5</option>
		<option value="2.0">2.0</option>
		<option value="2.5">2.5</option>
		<option value="3.0">3.0</option>
		<option value="3.5">3.5</option>
		<option value="4.0">4.0</option>
		<option value="4.5">4.5</option>
		<option value="5.0">5.0</option>
	</select>
	</div></div><br>
<button  style="width:200px;font-size: 30px; border-radius: 10px; padding:3px">SUBMIT</button>
</form></center>