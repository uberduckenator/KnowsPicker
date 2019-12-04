<?php
	include('header.php');
?>

	<div class="container">
		<h3>Shipping</h3>
		<div class="container">
			<?php
				$address = $model['Address'];
				$first_name = $address->first_name;
				$last_name = $address->last_name;
				$street = $address->street_address;
				$city = $address->city;
				$postalcode = $address->postal_code;
				$country = $address->country_name;
				
				echo"<div class='container'>
							<div class='container'>
								<p>$first_name $last_name</p>
								<p>$street</p>
								<p>$city</p>
								<p>$postalcode</p>
								<p>$country</p>
							</div>
					</div>";

				echo"<form method=post>";
				foreach($model['Shipping Types'] as $item)
				{
					$shipping_id = $item->shipping_id;
					$shipping_name = $item->shipping_name;
					$shipping_cost = $item->shipping_cost;
					echo"<input type'radio' name='shipping_id' value=$shipping_id>$shipping_name<br>
						";
				}
				echo("<input type='submit' name = 'action' value='Continue'>");
				echo"</form>"
				
			?>
		</div>
	</div>

<?php
	include('footer.php');
?>

