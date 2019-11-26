<?php
	include ("header.php");
?>

<p>Will be the base home view of our marketplace</p>
<p>Welcome to the home page, this holds the top 5 of each marketplace item type in terms of ratings</p>

<?php
	if($model == null)
	{
		echo("No items found in the database");
		//Or returned error
	}
	else
	{
		//include ("Partials");
	}
?>

<?php 
	include("footer.php");
?>