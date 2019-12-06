<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
	<h1>Edit Item</h1>
	<form method="post" action="" class="form-horizontal">
		<?php
			$theItem = $model['ItemInfo'];
			$item_name = $theItem->item_name;
			$price = $theItem->price;
			$item_type = $theItem->item_type;
			$stock = $theItem->stock;
			$rebate = $theItem->rebate;
			$max_sale_quantity = $theItem->max_sale_quantity;
	
			echo "	<div class='form-group'>
				  	<label for='username'>Item Name</label>
				  	<input type='text' class='form-control' name='item_name' id='item_name' value=$item_name /> 
				  	</div>";

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
				switch($model['ItemInfo']->item_type){
					case "CPU":
						$this->view('Item/Partials/Edit/editCPU', $model['ItemDetailsInfo']);
						break;

					case "Cooler":
						$this->view('Item/Partials/Edit/editCPUCooler', $model['ItemDetailsInfo']);
						break;

					case "GPU":
						$this->view('Item/Partials/Edit/editGPU', $model['ItemDetailsInfo']);
						break;

					case "Motherboard":
						$this->view('Item/Partials/Edit/editMotherboard', $model['ItemDetailsInfo']);
						break;

					case "Case":
						$this->view('Item/Partials/Edit/editPCCase', $model['ItemDetailsInfo']);
						break;

					case "PSU":
						$this->view('Item/Partials/Edit/editPSU', $model['ItemDetailsInfo']);
						break;

					case "RAM":
						$this->view('Item/Partials/Edit/editRAM', $model['ItemDetailsInfo']);
						break;

					case "Storage":
						$this->view('Item/Partials/Edit/editStorage', $model['ItemDetailsInfo']);
						break;
					default:
						$this->view('Company/inventory');
						break;
				}
			}
		?>
		<input type="submit" name="action" value="Save"/>
</form>
</div>
</body>
</html>