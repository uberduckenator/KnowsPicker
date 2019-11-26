<html>
<head>
	<title>Inventory</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<h1>Inventory</h1>

<a href="/Company/additem">Add item</a>

<table>
	<tr><th>item_id</th><th>item_name</th><th>price</th><th>item_type</th><th>rating</th><th>ratings_amount</th><th>stock</th><th>rebate</th><th>max_sale_quantiy</th></tr>
<?php
foreach($model as $items){
	echo "<tr><th>item_id</th><th>item_name</th><th>price</th><th>item_type</th><th>rating</th><th>ratings_amount</th><th>stock</th><th>rebate</th><th>max_sale_quantiy</th></tr>";
}
?>
</table>
</div>
</body>
</html>