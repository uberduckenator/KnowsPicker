<?php
	include('header.php');
?>

<div id='typeListing'>
<table>
<?php
	foreach ($model as $item)
	{
		$item_name = ucwords($item->item_name);
		$price = $item->price;
		$rating = $item->rating;
		$numberofratings = $item->ratings_amount;
		$stock = $item->stock;
		$rebate = $item->rebate;
		$max_sale_quantity = $item->max_sale_quantity;
		//Also need the picture

		echo "<th><h4>$item_name</h4></br>
				  <img alt = picture for item></br>
				  <form>
				  	<input type=button action=/PCBuild/addPart/[] value=Add To Build>
				  	<input type=button action= value=Add To Cart>
				  </form>
			  </th>";
		echo "<th><p>'$'$price</p></br>
				  <p>$rating</p></br>
				  <p>$numberofratings</p></br>
				  <p>Items left: $stock</p></br>
				  <p>$rebate % off</p></br>
				  <p>MAX sale quantity: $max_sale_quantity</p></th>";
	}
 ?>
</table>
</div>

<?php
	include('footer.php');
?>