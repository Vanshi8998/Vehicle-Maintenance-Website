<?php
$type=$_REQUEST["name"];
if($type=='T')
{
	echo "Choose two-wheeler type : <input type='radio' id='r1' name='ttype' value='S' checked> Scooty
  <input type='radio' id='r2' name='ttype' value='B'> Bike
				<br><br>";
}
else if($type=='F')
{
	echo "Four-wheeler type : <input type='radio' id='r3' name='ttype' value='C' checked> Car
				<br><br>";
}
?>