<body>
<?php
	$vehicle=$_REQUEST["type"];
	$area=$_REQUEST["locality"];
	if($vehicle=='two')
	{
		echo "Scooty or Bike in $area";
	}
	else
	{
		echo "Cars in $area";
	}
?>
</body>