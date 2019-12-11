<?php
	include('header.php');
?>
<body>
	<div class = "container">
	<?php
		$item = $model['Item'];
		$item_id = $item->item_id;
		$type = $model['ItemType'];

		$item_name = $item->item_name;
		if ($item->filepath != null)
		{
			$picture_location = $item->filepath;
		}
		else
		{
			$picture_location = '/Pictures/defaultItem.png';
		}
		$company = $item->company_name;
		$price = $item->price;
		$item_type = $item->item_type;
		$rating = $item->rating;
		$ratings_amount = $item->ratings_amount;
		$stock = $item->stock;
		$rebate = $item->rebate;
		$max_sale_quantity = $item->max_sale_quantity;
		$rebatePercent = $rebate/100;
		$rebatePrice = $rebatePercent * $price;
		$newprice = $price - $rebatePrice;

		echo"<div class='container'>
				<div class='container'>
				<table>
					<tr>
						<td>
							<h3>$item_name</h3>
							<img src=$picture_location>
							<h5>Sold By: $company</h5>";
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
									 <a href=/Favorite/insert/$item_id>Favorite</a></td>";
						echo "<td>
							<s>$$price</s>
							<h4>$$newprice</h4>
							<p>$rebate% Off</p>
							<p>Type: $item_type</p>
							<p>Rating: $rating</p>
							<p>#of Ratings: $ratings_amount</p>
							<p>Stock: $stock</p>
						</td>
					</tr>
				</table>
				</div>";
		$hasReviewed = false;
		if ($model['Reviews'] == null)
		{
			include('Partials/newReview.php');
		}
		else
		{
			foreach ($model['Reviews'] as $item)
			{
				if ($item->user_id == $_SESSION['user_id'])
				{
					$hasReviewed = true;
				}
			}
			if (!$hasReviewed)
			{
				$isPurchased = false;
				foreach ($model['Purchases'] as $item)
				{
					if($item->item_id == $item_id)
					{
						$isPurchased = true;
					}
				}
				if ($isPurchased)
				{
					include('Partials/newReview.php');
				}
			}
		}
		
		include('Partials/allReviews.php');
		echo"</div>";
	?>
	</div>
</body>
<?php
	include('footer.php');
?>
</html>