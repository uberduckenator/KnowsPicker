<?php
	include('header.php');
?>

	<div class="container">
		<h3>Cart Checkout</h3>
		<div class="container">
			<?php
				include('Partials/shippingAddress.php');
				include('Partials/paymentDetails.php');
				include('Partials/cartDetails.php');
				include('Partials/shippingSelection.php');
				include('Partials/cartInfo.php');
				include('Partials/costs.php');
			?>
			<form method='post'>
				<input type='submit' name='action' value='PlaceOrder'>
			</form>
		</div>
		<?php //var_dump($model['Cart']->shipping_cost) ?>
	</div>
	<script type="text/javascript">
		var previous_shipping_cost;
		$('input[name="shipping_id"]').on('change', function(e)
			{
				$('form[name="shipping_type"]').submit();
				//window.location.href = '/Purchase/placeOrder';
			}
		); 
	</script>

<?php
	include('footer.php');
?>

