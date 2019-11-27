<?php
include("header.php");
?>

<h1>Inventory</h1>

<a href="/Company/addItems">Add item</a>

<table>
	<tr><th>item_id &nbsp;</th><th>item_name &nbsp;</th><th>price &nbsp;</th><th>item_type &nbsp;</th><th>rating &nbsp;</th><th>ratings_amount &nbsp;</th><th>stock &nbsp;</th><th>rebate &nbsp;</th><th>max_sale_quantity &nbsp;</th></tr>
<?php
foreach($model as $items){
	echo "<tr><th>$items->item_id</th><th>$items->item_name</th><th>$items->price</th><th>$items->item_type</th><th>$items->rating</th><th>$items->ratings_amount</th><th>$items->stock</th><th>$items->rebate</th><th>$items->max_sale_quantity</th></tr>";
}
?>
</table>

<?php
include("footer.php");
?>