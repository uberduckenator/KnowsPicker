<html>
<head>
	<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<h1>Add Item</h1>

<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="username">Item Name</label>
	<input type="text" class="form-control" name="item_name" id="item_name" />
	</div>
	<div class="form-group">
	<label for="username">Price</label>
	<input type="text" class="form-control" name="price" id="price" />
	</div>
	<div class="form-group">
	<label for="username">Item Type</label>
	<select name="item_type">		
	<?php
		foreach($model as $itemtype){
			$name = $itemtype->item_name;
			echo "<option value='$name'>$name</option>";
		}
	?>
	</select>
	<input type="text" class="form-control" name="item_type" id="item_type" />
	</div>
	<div class="form-group">
	<label for="username">Rating</label>
	<input type="text" class="form-control" name="rating" id="rating" />
	</div>
	<div class="form-group">
	<label for="username">Ratings Amount</label>
	<input type="text" class="form-control" name="ratings_amount" id="ratings_amount" />
	</div>
	<div class="form-group">
	<label for="username">Stock</label>
	<input type="text" class="form-control" name="stock" id="stock" />
	</div>
	<div class="form-group">
	<label for="username">Rebate</label>
	<input type="text" class="form-control" name="rebate" id="rebate" />
	</div>
	<div class="form-group">
	<label for="username">Max Sale Quantity</label>
	<input type="text" class="form-control" name="max_sale_quantity" id="max_sale_quantity" />
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-default" name="action" value="Add" />
	</div>
</form>


</div>
</body>
</html>