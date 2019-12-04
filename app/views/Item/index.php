<?php
	include('header.php');
?>

<div id='typeListing'>
<table>
<?php
	foreach ($model as $item)
	{

		$item_id = $item->item_id;
		$item_name = ucwords($item->item_name);
		$price = $item->price;
		$rating = $item->rating;
		$numberofratings = $item->ratings_amount;
		$stock = $item->stock;
		$rebate = $item->rebate;
		$max_sale_quantity = $item->max_sale_quantity;
		
		//Also need the picture
		echo "<th><h4>$item_name</h4></br>
				  <img alt = picture for item></br>";
		if (isset($_GET['pc_build_id']))
		{
			$pc_build_id = $_GET['pc_build_id'];
			echo"<form action = '/PCBuild/addPart/$item_id'>
				  	<input type='hidden' name='pc_build_id' value=$pc_build_id/>
				  	<input type='submit' value='Add To Build'/></a>
				  </form>";
		}
		echo"<form action = /Purchase/addItem/$item_id>
				<input type='submit' value='Add To Cart'/></a>
			 </form></th>";

		echo "<th><p>$$price</p></br>
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