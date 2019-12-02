<?php
	include('header.php');
?>

<h3>PC Builds</h3></br>
<a href="/PCBuild/createNewBuild">Create Build</a>
<div>
<th>
<?php
	foreach ($model as $item)
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