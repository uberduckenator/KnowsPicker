<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
	<h1>Item Details</h1>
		<?php
			$theItem = $model['Item'];
			$item_name = $theItem->item_name;
			$price = $theItem->price;
			$item_type = $theItem->item_type;
			$stock = $theItem->stock;
			$rebate = $theItem->rebate;
			$max_sale_quantity = $theItem->max_sale_quantity;
	
			echo "	<div class='form-group'>
				  	<label for='username'>Item Name</label>
				  	<input type='text' class='form-control' name='item_name' id='item_name' value=$item_name readonly /> 
				  	</div>";

			echo "	<div class='form-group'>
					<label for='username'>Price</label>
					<input type='text' class='form-control' name='price' id='price' value=$price readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Item Type</label>
					<input type='text' class='form-control' name='item_type' id='item_type' value=$item_type readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Stock</label>
					<input type='text' class='form-control' name='stock' id='stock' value=$stock readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Rebate</label>
					<input type='text' class='form-control' name='rebate' id='rebate' value=$rebate readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Max Sale Quantity</label>
					<input type='text' class='form-control' name='max_sale_quantity' id='max_sale_quantity' value=$max_sale_quantity readonly> 
					</div>";
		?>

		<?php 
			if($model == null){
				echo("No items to edit");
			}
			else{
				$this->view('Item/Partials/Details/detailsCPU',$model['ItemType']);
			}
		?>
</html>