<?php
	include('header.php');
?>

	<div class="container">
		<h3>Cart Checkout</h3>
		<div class="container">
			<?php
				include('Partials/paymentDetails.php');
				include('Partials/cartDetails.php');
				include('Partials/cartInfo.php');
			?>
			<a href="/Purchase/placeOrder"><input type='button' value='Continue'></a>
		</div>
	</div>

<?php
	include('footer.php');
?>

