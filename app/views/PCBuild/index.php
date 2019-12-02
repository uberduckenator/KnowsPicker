<?php
	include('header.php');
?>

<<<<<<< HEAD
<h3>PC Builds</h3>
<div>
<th>
<?php
	foreach ($model['PCBuilds'] as $item)
=======
<h3>PC Builds</h3></br>
<a href="/PCBuild/createNewBuild">Create Build</a>
<div>
<th>
<?php
	foreach ($model as $item)
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
	{
		$name = $item->name;
		$description = $item->description;
		$first_name = $item->first_name;
		$last_name = $item->last_name; 

		echo"<tr><th><p>$name</p></th><th><p>Created By: $first_name $last_name</br>Description: $description</p></th></tr>";
	}
?>
</th>
</div>

<?php
	include('footer.php');
?>