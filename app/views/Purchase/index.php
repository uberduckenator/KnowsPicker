<?php
	include('header.php');
?>

	<h3>Shopping Cart</h3>
	<div class="itemListing">
		<?php
		if ($model == null)
		{
			echo('<p>No items in cart</p>');
		}
		else
		{
			foreach($model as $purchase_detail)
			{
			 	echo("<p>");
			}
			echo("<a href='Purchase/checkout'>Checkout</a>");
		}
		?>
	</div>

<?php
	include('footer.php');
?>

