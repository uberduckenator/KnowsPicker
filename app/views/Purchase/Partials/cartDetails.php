<?php
foreach($model['CartDetails'] as $item)
		{
			$purchase_details_id = $item->purchase_details_id;
			$name = $item->item_name;
			$price = $item->price;
			$rating = $item->rating;
			$stock = $item->stock;
			$rebate = $item->rebate;
			echo"<div class='container'><h3>Name: $name</h3>
					<a href=/Purchase/remove/$purchase_details_id>Remove</a>
					<div class='container'>
						<p>Price: $price</p>
						<p>Rating: $rating</p>
						<p>Stock: $stock</p>
						<p>Rebate: $rebate</p>
					</div>
				</div>";
		}
?>