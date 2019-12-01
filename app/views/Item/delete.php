<html>
<head>
	<title><?php echo("$model->item_name"); ?>: Details </title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
	<h2><?php echo("$model->item_name");?></h2>
	<div>
	<?php
		echo "<img alt=Item picture>";
		echo "<div id=itemDetails>";
			echo "<p>$model->item_name</p></br>";
			echo "<p>$model->price</p></br>";
			echo "<p>$model->item_type</p></br>";
			echo "<p>$model->rating</p></br>";
			echo "<p>$model->ratings_amount</p></br>";
			echo "<p>$model->stock</p></br>";
			echo "<p>$model->rebate</p></br>";
			echo "<p>$model->max_sale_quantity</p></br>";
			echo "<div>";
				echo "";
			echo"</div>";

		echo "</div>";
	?>
	</div>
</body>
</html>