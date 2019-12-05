<?php
include("header.php");
?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<h1>Inventory</h1>
<a href="/Company/addItems">Add item</a>
<table>
	<tr><th>Picture &nbsp;</th><th>item_name &nbsp;</th><th>price &nbsp;</th><th>item_type &nbsp;</th><th>stock &nbsp;</th><th>rebate &nbsp;</th><th>Controls</th></tr>
	<?php
	foreach($model as $items){
		$item_id = $items->item_id;
		echo "<img src=picture  alt=picture for item>";
		echo "<tr><th>$items->item_name</th><th>$items->price</th><th>$items->item_type</th><th>$items->stock</th><th>$items->rebate</th>";
		echo "<th><a href=/Items/edit/$item_id>Edit</a><a href=/Items/details/$item_id>Details</a><a href=/Items/Delete/$item_id>Delete</a></th></tr>";
	}
	?>
</table>
<?php
include("footer.php");
?>
</html>
