<?php
	include('header.php');
?>

	<h3>Shopping Cart</h3>
	<div class="container">
		<?php
		if ($model == null)
		{
			echo('<p>No items in cart</p>');
		}
		else
		{
			foreach($model as $item)
			{
				$purchase_details_id = $item->purchase_details_id;
				$name = $item->item_name;
				$price = $item->price;
				$rating = $item->rating;
				$stock = $item->stock;
				$rebate = $item->rebate;
				echo"<div class='container'><h3>Name: $name</h3>
						<a href='Purchase/remove/$purchase_details_id'>Remove</a>
						<div class='container'>
							<p>Price: $price</p>
							<p>Rating: $rating</p>
							<p>Stock: $stock</p>
							<p>Rebate: $rebate</p>
						</div>
					</div>";
			}
			echo("<a href='Purchase/checkout'>Checkout</a>");
		}
		?>
	</div>

<?php
	include('footer.php');
?>

