<?php
	include('header.php');
?>

<div id='typeListing'>
<table>
<?php
	foreach ($model as $item)
	{
<<<<<<< HEAD
=======
		$item_id = $item->item_id;
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		$item_name = ucwords($item->item_name);
		$price = $item->price;
		$rating = $item->rating;
		$numberofratings = $item->ratings_amount;
		$stock = $item->stock;
		$rebate = $item->rebate;
		$max_sale_quantity = $item->max_sale_quantity;
<<<<<<< HEAD
		//Also need the picture

		echo "<th><h4>$item_name</h4></br>
				  <img alt = picture for item></br>
				  <form>
				  	<input type=button action=/PCBuild/addPart/[] value=Add To Build>
				  	<input type=button action= value=Add To Cart>
				  </form>
			  </th>";
		echo "<th><p>'$'$price</p></br>
=======
		
		//Also need the picture
		echo "<th><h4>$item_name</h4></br>
				  <img alt = picture for item></br>";
		if (isset($_GET['pc_build_id']))
		{
			$pc_build_id = $_GET['pc_build_id'];
			echo"<form action = '/PCBuild/addPart/'>
				  	<input type='hidden' name='pc_build_id' value=$pc_build_id/>
				  	<input type='submit' value='Add To Build'/></a>
				  </form>";
		}
		echo"<form action = /Purchase/addItem/$item_id>
				<input type='submit' value='Add To Cart'/></a>
			 </form></th>";

		echo "<th><p>$$price</p></br>
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
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