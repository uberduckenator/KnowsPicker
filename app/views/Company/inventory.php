<?php
include("header.php");
?>

<h1>Inventory</h1>

<a href="/Company/additem">Add item</a>

<table>
	<tr><th>Picture &nbsp;</th><th>item_name &nbsp;</th><th>price &nbsp;</th><th>item_type &nbsp;</th><th>stock &nbsp;</th><th>rebate &nbsp;</th><th>Controls</th></tr>
<?php
foreach($model as $items){
	$item_id = $items->item_id;
	echo "<img alt=picture for something>";
	echo "<tr><th>$items->item_name</th><th>$items->price</th><th>$items->item_type</th><th>$items->stock</th><th>$items->rebate</th>";
	echo "<th><a href=Items/edit/$item_id>Edit</a><a href=Items/details/$item_id>Details</a><a href=Items/Delete/$item_id>Delete</a></th></tr>";
}
?>
</table>

<?php
include("footer.php");
?>
