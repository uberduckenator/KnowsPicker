<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
	<form method="post" action="" class="form-horizontal">
		<?php
			$theItem = $model['ItemInfo'];
			$item_name = $theItem->item_name;
			$price = $theItem->price;
			$item_type = $theItem->item_type;
			$stock = $theItem->stock;
			$rebate = $theItem->rebate;
			$max_sale_quantity = $theItem->max_sale_quantity;
		?>
		<div class='form-group'>
			<label for='username'>Item Name</label>
			<input type='text' class='form-control' name='item_name' id='item_name' value='<?php echo $item_name; ?>' /> 
		</div>
		<?php
			echo "	<div class='form-group'>
					<label for='username'>Price</label>
					<input type='text' class='form-control' name='price' id='price' value=$price> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Item Type</label>
					<input type='text' class='form-control' name='item_type' id='item_type' value=$item_type> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Stock</label>
					<input type='text' class='form-control' name='stock' id='stock' value=$stock> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Rebate</label>
					<input type='text' class='form-control' name='rebate' id='rebate' value=$rebate> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Max Sale Quantity</label>
					<input type='text' class='form-control' name='max_sale_quantity' id='max_sale_quantity' value=$max_sale_quantity> 
					</div>";
		?>

		<?php 
			if($model == null){
				echo("No items to edit");
			}
			else{
				$this->view('Item/Partials/Edit/editCPU',$model['ItemDetailsInfo']);
				//include("Partials/Edit/editCPU.php");
			}
		?>
		<input type="submit" name="action" value="Save"/>
</form>
</body>
</html>