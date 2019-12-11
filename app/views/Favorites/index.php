<?php
	include ("header.php");
?>

<h2>Favorites</h2>
<div class="container">
	<table>
	<?php
		if ($model != null)
		{
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

			echo "<tr><td><a href=/Items/details/$item_id><h4>$item_name</h4></a></br>
					  <img alt = picture for item></br>";
			echo"<form method='post' action = /Purchase/addItem/$item_id>
			<select name='quantity' value='0'>";
				$i = 1;
				while($i<=$max_sale_quantity)
				{
					echo"<option value=$i>$i</option>";
					$i++;
				}
				echo"</select>
					<input type='submit' value='Add To Cart'/></a>
				 </form>
				 <a href=/Favorite/unfavorite/$item_id>Unfavorite</a></td>";

				echo "<td><p>$$price</p></br>
					  <p>$rating</p></br>
					  <p>$numberofratings</p></br>
					  <p>Items left: $stock</p></br>
					  <p>$rebate % off</p></br>
					  <p>MAX sale quantity: $max_sale_quantity</p></td></tr>";
			}
		}
		else
		{
			echo "<h3>You have no favorites!</h3>";
		}
	?>
</table>
</div>

<?php 
	include("footer.php");
?>