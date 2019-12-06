<form method='post' name='shipping_type'>
<?php
foreach($model['ShippingTypes'] as $item)
				{
					$cartShipping = $model['Cart']->shipping_id;
					$shipping_id = $item->shipping_id;
					$shipping_name = $item->shipping_type;
					$shipping_cost = $item->shipping_cost;

					if ($cartShipping == $shipping_id)
					{
						echo"<input type='radio' class='shipping_id' name='shipping_id' value=$shipping_id checked>$shipping_name<br>
						";						
					}
					else
					{
						echo"<input type='radio' class='shipping_id' name='shipping_id' value=$shipping_id>$shipping_name<br>
						";	
					}
				}
?>
</form>