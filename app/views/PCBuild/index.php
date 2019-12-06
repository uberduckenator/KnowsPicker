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
		$pc_build_id = $item->pc_build_id;
		$name = $item->name;
		$description = $item->description;
		$first_name = $item->first_name;
		$last_name = $item->last_name; 

		echo"<tr><th><a href=/PCBuild/setupBuild/$pc_build_id>$name</a></th><th><p>Created By: $first_name $last_name</br>Description: $description</p></th></tr>";
	}
?>
</th>
</div>

<?php
	include('footer.php');
?>