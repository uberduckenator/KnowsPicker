<?php
	include('header.php');
?>

	<div class="container">
		<h3>Shipping</h3>
		<div class="container">
			<?php
				
				include('Partials/shippingAddress.php');

				echo"<form method=post>";
				
				include('Partials/shippingSelection.php');
				echo("<input type='submit' name = 'action' value='Continue'>");
				echo"</form>"
				
			?>
		</div>
	</div>

<?php
	include('footer.php');
?>

