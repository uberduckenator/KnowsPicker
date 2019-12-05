<?php
	include("header.php");
?>

	<div class="container">
		
		<?php
			$purchase = $model['Purchase'];
			$purchased_on = $purchase->purchased_on;
			$subtotal = $purchase->subtotal;
			$total = $purchase->total;
			echo"<h2>Details of $purchased_on order</h2>";
			echo"<div class='container'>";
			foreach ($model['Details'] as $item)
			{
				$item_id = $item->item_id;
				$item_name = $item->item_name;
				$price = $item->price;
				$item_type = $item->item_type;
				$rebate = $item->rebate;
				$quantity = $item->quantity;

				echo"<div class='container'>
						<p>The Item: $item_name</p>
						<p>Price: $price</p>
						<p>Rebate: $rebate</p>
						<p>Type of item: $item_type</p>
						<p>Quantity: $quantity</p>
						<a href='Items/review/$item_id'>Click to review item</a>
					</div>";
			}
			echo"<h4>Subtotal: $subtotal</h4>";
			echo"<h4>Total: $total</h4></div>";
		?>
		</table>
	</div>

<?php
	include("footer.php");
?>