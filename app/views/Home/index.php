<?php
	include ("header.php");
?>
<p>Welcome to the home page, this holds the top 5 of each marketplace item type in terms of ratings</p>

<?php
	if($model == null)
	{
		echo("No items found in the database");
		//Or returned error
	}
	else
	{
		include ("Partials/topCompCaseList.php");
		include ("Partials/topCoolerList.php");
		include ("Partials/topCPUList.php");
		include ("Partials/topGPUList.php");
		include ("Partials/topMboardList.php");
		include ("Partials/topPSUList.php");
		include ("Partials/topRAMList.php");
		include ("Partials/topStorageList.php");
	}
?>

<?php 
	include("footer.php");
?>