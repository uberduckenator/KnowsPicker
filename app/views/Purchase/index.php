<?php
	include('header.php');
?>

	<div class="container">
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
					$rebatePercent = $rebate/100;
					$rebatePrice = $price*$rebatePercent;
					$newPrice = $price-$rebatePrice;
					echo"<div class='container'><h3>Name: $name</h3>
							<a href=/Purchase/remove/$purchase_details_id>Remove</a>
							<div class='container'>";
								
								if($rebate > 0)
								{
									echo"<s>$$price</s>
									<p>$$newPrice</p>
									<h4>$rebate% Off</h4>";
								}
								else
								{
									echo"<p>$$price</p>";
								}
								echo"<p>Rating: $rating</p>
								<p>Stock: $stock</p>
							</div>
						</div>";
				}
				echo("<a href='/Purchase/checkout'>Checkout</a>");
			}
			?>
		</div>
	</div>

<?php
	include('footer.php');
?>

