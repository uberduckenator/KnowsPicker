<?php
	include("header.php");
?>

	<div class="container">
		
		<?php
			$purchase = $model['Purchase'];
			$purchased_on = $purchase->purchased_on;
			$status = $purchase->status;
			$subtotal = $purchase->subtotal;
			$total = $purchase->total;
			echo"<h2>Details of $purchased_on order</h2>";
			echo"<a href='/Purchase/orders'>Back to orders</a>";
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
						<h3>The Item: $item_name</h3>
						<p>Price: $price</p>
						<p>Rebate: $rebate</p>
						<p>Type of item: $item_type</p>
						<p>Quantity: $quantity</p>";
				if($status == 2 && !isset($model['Reviews']))
				{

					echo"<a href='/Items/review/$item_id'>Click to review item</a>";
				}
				else if($status == 2)
				{
					foreach ($model["Reviews"] as $item)
					{
						if ($item->item_id != $item_id)
						{
							echo"<a href='/Items/review/$item_id'>Click to review item</a>";
						}
					}
					echo"";
				}
				echo"</div>";
			}
			echo"<h4>Subtotal: $subtotal</h4>";
			echo"<h4>Total: $total</h4></div>";
		?>
		</table>
	</div>

<?php
	include("footer.php");
?>