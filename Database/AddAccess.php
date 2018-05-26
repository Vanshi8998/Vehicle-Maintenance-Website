<?php
require("user_menu.php");
?>
<style type="text/css">
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
<body background="../images/bg1.jpg">
<center><form action=save_access.php method=post enctype="multipart/form-data">
<div class="header-w3l">
			<h1>Add your Accessories/Spare Parts Shop</h1>
		</div><br>
	<div class="box">
	<div class="field">Shop Name&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="name" required></div>
	<br>
	<div class="field">Upload your shop picture&nbsp;&nbsp;:&nbsp;&nbsp;
	<input class="options" type="text" name="pic"></div><br> <!-- Change type=text to type=file -->

<?php
echo "<div class='field'>Vehicle Type Associated with&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<select class='options' name=\"typ\">";
		echo "<option value=\"T\">Two-Wheeler</option>";
		echo "<option value=\"F\">Four-Wheeler</option>";
		echo "<option value=\"B\">Both</option>";
	echo "</select>";
echo "</div><br>";
	echo "<div class='field'>Select two-wheeler type&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<select class='options' name=ttype>";
	echo "<option value=B>Bike</option>";
	echo "<option value=S>Scooty</option>";
	echo "<option value=C>N/A</option>";
	echo "</select>";
?>
</div><br>
<div class="field">Address&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="adrs" required></div><br>
<div class="field">Upload Map URL&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="mp"></div><br>
<div class="field">Contact No.&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
	<input class="options" type=text name="cont1" required><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="options" type=text name="cont2" ><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="options" type=text name="cont3" ></div><br>
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
<button style="width:200px;font-size: 30px; border-radius: 10px; padding:3px">SUBMIT</button>
</form></center>