<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f3a238c08b405876824d53d5db1b2006baad0264
<?php
include("header.php");
?>

<h1>Inventory</h1>

<a href="/Company/addItems">Add item</a>
<<<<<<< HEAD

<table>
	<tr><th>item_id &nbsp;</th><th>item_name &nbsp;</th><th>price &nbsp;</th><th>item_type &nbsp;</th><th>rating &nbsp;</th><th>ratings_amount &nbsp;</th><th>stock &nbsp;</th><th>rebate &nbsp;</th><th>max_sale_quantity &nbsp;</th></tr>
<?php
foreach($model as $items){
	echo "<tr><th>$items->item_id</th><th>$items->item_name</th><th>$items->price</th><th>$items->item_type</th><th>$items->rating</th><th>$items->ratings_amount</th><th>$items->stock</th><th>$items->rebate</th><th>$items->max_sale_quantity</th></tr>";
=======
=======
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
>>>>>>> 29d05a6e19786642e4ecc252560031a32709ced6

<table>
	<tr><th>item_id</th><th>item_name</th><th>price</th><th>item_type</th><th>rating</th><th>ratings_amount</th><th>stock</th><th>rebate</th><th>max_sale_quantiy</th></tr>
<?php
foreach($model as $items){
<<<<<<< HEAD
	echo "<tr><th>$items->item_id</th><th>$items->item_name</th><th>$items->price</th><th>$items->item_type</th><th>$items->rating</th><th>$items->ratings_amount</th><th>$items->stock</th><th>$items->rebate</th><th>$items->max_sale_quantiy</th></tr>";
>>>>>>> f3a238c08b405876824d53d5db1b2006baad0264
}
?>
</table>

<?php
include("footer.php");
<<<<<<< HEAD
?>
=======
?>
=======
	echo "<tr><th>item_id</th><th>item_name</th><th>price</th><th>item_type</th><th>rating</th><th>ratings_amount</th><th>stock</th><th>rebate</th><th>max_sale_quantiy</th></tr>";
}
?>
</table>
</div>
</body>
</html>
>>>>>>> 29d05a6e19786642e4ecc252560031a32709ced6
>>>>>>> f3a238c08b405876824d53d5db1b2006baad0264
