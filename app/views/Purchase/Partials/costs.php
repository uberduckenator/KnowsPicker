<form method='post'>
<?php
	$GST = $model['GST'];
	$QST = $model['QST']; 
	$Shipping = $model['ShippingCost'];
	$Total = $model['Total'];
	echo"<div class='container'>
			<p>GST: $GST</p>
			<p>QST: $QST</p>
			<p>Shipping: $Shipping</p>
			<p>Total: $Total</p>
		</div>"
?>
</form>