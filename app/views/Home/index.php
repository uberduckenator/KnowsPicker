<?php
	include ("header.php");
?>
<div class='container'>
<h1 class='title'>Welcome to Knowspicker.com!</h1>
<div class='container'>
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
</div>
</div>
</body>
<?php 
	include("footer.php");
?>