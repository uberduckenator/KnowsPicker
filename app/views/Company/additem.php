<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<head>
	<title>Add Item</title>
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
	<div>
	<label for="username">Select Item Image</label>
    <input type="file" name="item_image" id="item_image">
	</div>
	<div class="form-group">
	<input type="submit" name="action" value="Add" />
	</div>
</form>


</div>
</body>
</html>